<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arkusz 2 wynik</title>
</head>
<body>
<?php

$polaczenie = new PDO("mysql:dbname=psy;host=127.0.0.1",'root','');
if($polaczenie) { 
    $login = isset($_POST['login']) ? $_POST['login'] :null;
    $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : null; 
    $powtorzHaslo = isset($_POST['powtorz'])  ? $_POST['powtorz'] : null;
    if(!(empty($login) && empty($haslo) && empty($powtorzHaslo))) {
        $znalezionoUzytkownika = false; 
        $rozneHasla = false;
        $znajdzUzytkownika = "SELECT * FROM uzytkownicy WHERE login='$login' ";
        $query = $polaczenie->query($znajdzUzytkownika); 
        $query->execute();
        $wynikUzytkownik = $query->fetchAll();
       
        if($wynikUzytkownik) { 
            echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
            $znalezionoUzytkownika = true; 
        }
        if($haslo != $powtorzHaslo) { 
            $rozneHasla = true; 
            echo '<p>hasła nie są takie same, konto nie zostało dodane!</p>';
        }
        
        if($znalezionoUzytkownika != true && $rozneHasla != true) { 
                $szyfrowaneHaslo = sha1($haslo);
                $wpiszHaslo = "INSERT INTO uzytkownicy (login,haslo) VALUES (? , ?) ";
                 $addQuery = $polaczenie->prepare($wpiszHaslo);
                 $wynik = $addQuery->execute(array($login,$szyfrowaneHaslo));
                 if($wynik) { 
                    echo '<p>Konto zostało dodane</p>';
                 }
            }
    }
    else { 
        echo '<p>wypełnij wszystkie pola</p>';
    }
    
}
else { 
    echo "<p>Nie mozna polaczyc z baza</p>";
}

$queryAll = 'SELECT * FROM uzytkownicy';
$SQLGetALL = $polaczenie->query($queryAll);
$SQLGetALL->execute();
$rekordy = $SQLGetALL->fetchAll();
$polaczenie = null;

?>
    <h1>Wszystkie konta</h1>
        <?php foreach($rekordy as $rekord): ?>
    <p>
        <span>Login: <?php echo $rekord['login'] ?></span>
        | <span>Haslo: -> <?php  echo $rekord['haslo'] ?></span>
    </p>

    <?php endforeach;  ?>

    <p>Powrót do formularza:<a href="index.html">Formularz</a></p>

</body>
</html>