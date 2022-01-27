<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkusz 2</title>
</head>

<body>
    <?php

    //ustawiamy dane do bazy

    $serwer = "localhost";

    $user = "root";

    $pass = "";

    $base = "psy";

    $db = @new mysqli($serwer, $user, $pass, $base);

    if ($db->connect_error) {

        die('Błąd połączenia z bazą danych: ' . $db->connect_error);
    } else {

        echo "Połączenie nawiązano<br>";
    }
    ?>
    <form>
        <label for="username">login:</label>
        <input type="text" id="username" name="username">
        <label for="password">hasło:</label>
        <input type="password" id="password" name="password">
        <label for="password">powtórz hasło:</label>
        <input type="password" id="password" name="password">
        <div id="lower">
            <input type="submit" value="Login">
        </div>
    </form>

</body>

</html>