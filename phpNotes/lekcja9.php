<?php 

$server = 'localhost';
$user = 'root';
$pass = '';
$base = 'operacje_db';

// $db = @new mysqli($server, $user, $pass, $base);
$db = new PDO("mysql:dbname=operacje_db;host=127.0.0.1",'root','');

// echo "<pre>";
// print_r($db);
// echo "<pre>";

if(!$db->connect_error) {
    echo "Połączenie nawiązano</br>";

    if (!empty($_POST['szukaj'])) {
        $sql = "SELECT * FROM 'users' WHERE 1 ";

        if (!empty($_POST['imie'])) $sql.= "&& Imie='{$_POST['imie']}'";
        if (!empty($_POST['nazwisko'])) $sql.= "&& Nazwisko='{$_POST['nazwisko']}'";
        
        
    
        // foreach ($wynik as $row) {
            // echo $row['Imie']."</br>";
        // }

    } else {
        echo "Wyślij formularz";
    }

    $wynik = $db->query($sql);
    $wynik->execute();
    $result = $wynik->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);

}
else {
    die("Błąd połączenia: ".$db->connect_error);
}


?>

<form action="" method="post">
    Imię: <input type="text" name="imie">
    Nazwisko: <input type="text" name="nazwisko">
    <input type="submit" value="Wyszukaj" name="szukaj">
</form>