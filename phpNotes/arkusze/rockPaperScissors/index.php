<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'rockPaperScissors';

$loginErr = $passwordErr = $fillAllFieldsErr = $msgLoginExists = $msgPwdCorrect = '';

$conn = @new mysqli($servername, $username, $password, $database);

$pass = password_hash('dupa', PASSWORD_DEFAULT);


if ($conn->connect_error) {
    die('Connection error' . $conn->connect_error);
} else {
    $login = !empty($_POST['login']) ? htmlspecialchars(stripslashes(trim($_POST['login']))) : false;
    $password = !empty($_POST['password']) ? htmlspecialchars(stripslashes(trim($_POST['password']))) : false;

    if ($login && $password) {
        $userQuery = "SELECT `login` FROM `users` WHERE login = ?";
        $stmtLogin = $conn->prepare($userQuery);
        $stmtLogin->bind_param('s', $login);
        $stmtLogin->execute();
        $userResult = $stmtLogin->get_result();
        $userFound = $userResult->fetch_assoc();

        if ($userFound) {
            $msgLoginExists = "Login $login istnieje";
            $encryptedPwd = sha1($password);
            $pwdQuery = "SELECT `password` FROM `users` WHERE password = ? && login = ?";
            $stmtPwd = $conn->prepare($pwdQuery);
            $stmtPwd->bind_param('ss', $encryptedPwd, $login);
            $stmtPwd->execute();
            $pwdResult = $stmtPwd->get_result();
            $pwdFound = $pwdResult->fetch_assoc();

            if ($pwdFound) {
                $msgPwdCorrect = "Haslo poprawne, zalogowano";
                header('Location: game.php');
                
            } else {
                $passwordErr = "Hasło nieprawidłowe!";
            }
            $stmtPwd->close();
        } else {
            $loginErr = "Login nie istnieje";
        }
        $stmtLogin->close();
    } else {
        $fillAllFieldsErr = "Uzupełnij wszystkie pola formularza!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock paper scissors</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            background-color: #2e3440;
            color: #d8dee9;
            font-family: 'Roboto', sans-serif;
            margin: 20px;
        }

        .error {
            color: #bf616a;
            font-size: 16px;
        }

        .correct,
        h5 {
            color: #a3be8c;
            font-size: 16px;
        }

        .info {
            color: #88c0d0;
        }

        .msg {
            margin-top: 5px;
        }

        .msg span {
            display: block;
        }

        #loginBox>* {
            margin: 20px;
        }

        #loginBox {
            border: #d08770 solid 2px;
            width: 300px;
        }
    </style>
</head>

<body>
    <div id="loginBox">
        <form action="index.php" method="post">
            Login: </br>
            <input type="text" name="login"></br>
            Password: </br>
            <input type="password" name="password">
            <input type="submit" name="log_in" value="log in">
        </form>

        <div class="msg">
            <span class="error"><?php echo $loginErr; ?></span>
            <span class="error"><?php echo $passwordErr; ?></span>
            <span class="error"><?php echo $fillAllFieldsErr; ?></span>
            <span class="correct"><?php echo $msgLoginExists; ?></span>
            <span class="correct"><?php echo $msgPwdCorrect; ?></span>
        </div>
    </div>


    <div class="info">
        
    </div>

</body>

</html>