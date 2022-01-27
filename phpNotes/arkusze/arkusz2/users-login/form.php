<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
    

</head>
<body>
    
<?php

$polaczenie = new PDO("mysql:dbname=psy;host=127.0.0.1",'root','');
if($polaczenie) { 
    $login = isset($_POST['login']) ? $_POST['login'] :null;
    $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : null; 
    $powtorzHaslo = isset($_POST['powtorz'])  ? $_POST['powtorz'] : null;
    if(!(empty($login) and empty($haslo)
    and empty($powtorzHaslo))) {
        $znalezionoUzytkownika = false; 
        $inneHaslo = false;
        $znajdzImie = "SELECT * FROM uzytkownicy WHERE login='$login' ";
        $query = $polaczenie->query($znajdzImie); 
        $query->execute();
        $nameResult = $query->fetchAll();
       
        if($nameResult) { 
            echo "<p class='alert alert-danger'>
            login występuje w bazie danych, konto nie zostało dodane!</p>";
            $znalezionoUzytkownika = true; 
        }
        if($password != $powtorzHaslo) { 
            $inneHaslo = true; 
            echo '<p class="alert alert-danger">hasła nie są takie same, konto nie zostało dodane!</p>';
        }
        
        if(!($nameResult && $inneHaslo)) { 
            $encryptedPassword = sha1($password);
            $insertQueryPassword = "INSERT INTO uzytkownicy (login,haslo) VALUES (? , ?) ";
             $addQuery = $polaczenie->prepare($insertQueryPassword);
             $result = $addQuery->execute(array($login,$encryptedPassword));
             if($result) { 
                echo '<p class="alert alert-success">Konto zostało dodane!</p>';
             }
            
        }
    }
    else { 
        echo '<p class="alert alert-danger">Wypelnij wszystkie pola</p>';
    }
    
}
else { 
    echo "<p class='alert-danger alert'>Cannot connect to db :c</p>";
}


$polaczenie = null;



?>

</body>
</html>