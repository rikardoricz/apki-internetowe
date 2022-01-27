<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>arkusz E14 2018</title>
    <style>
        body {
            background-color: #2e3440;
            color: #d8dee9;
        }
        input { 
			display: block;
			margin: 10px 0px;
		}
        li {
            color: #e5e9f0;
            font-weight: 500;
        }
    </style>
</head>

<body>
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'arkusz1';

$db = new mysqli($server, $username, $password, $database);

if($db->connect_error) 
    {
        die('Błąd połączenia: '. $db->connect_error);
    } else {
        echo "<p style='color: #a3be8c'>Połączenie z bazą nawiązano </p><br/>";

        $kat = isset($_POST['kat']) ? $_POST['kat'] :null;
        $podkat = isset($_POST['podkat']) ? $_POST['podkat'] : null; 
        $tytul = isset($_POST['tytul']) ? $_POST['tytul'] : null; 
        $tresc = isset($_POST['tresc']) ? $_POST['tresc'] : null;

        if(!empty($_POST['add'])) {
            if (!empty($kat)
            && !empty($podkat)
            && !empty($tytul)
            && !empty($tresc)) {
                $query = "INSERT INTO ogloszenia (kat,podkat,tytul,tresc) VALUES('$kat','$podkat','$tytul','$tresc')";
                $sql = $db->query($query);
                $ar = $db->affected_rows;
                if ($ar != 0) {
                    echo "<p style='color: #a3be8c'>Dodano! </br> Kategoria: {$kat}, Podkategoria: {$podkat}, Tytuł: {$tytul}, Treść: {$tresc}</p>";
                }
            }
            else {
                echo "<p style='color: #d08770'>Uzupełnij pola!</p>";    
            }
        }
        
    }

?>

    <header>Portal Ogłoszeniowy</header>
        <h1 style = 'color: #b48ead'>Anna Kowalczyk - dodawanie ogłoszenia</h1>
        <form action="" method="POST">

            Kategoria <br>
            <select name="kat">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <br>
            Podkategoria <br>
            <select name="podkat">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <br>
            Tytuł:
            <input type="text" name="tytul">
            Treść: <br>
            <textarea name="tresc" cols="30" rows="10"></textarea>
            <br>

            <input type="submit" name="add" value="Wyślij">
            <input type="reset" name="del" value="Wyczyść">
        </form>
        <?php
            echo "ZAWARTOŚĆ:<br>";
            $printResult = $db->query("SELECT * FROM ogloszenia ");
 
            while($row = $printResult->fetch_array()) {
            echo "Kategoria: " . $row['kat'] . " Podkategoria:" . $row['podkat'] . " Tytul:" . $row['tytul'] . " Tresc: " . $row['tresc']. "<br>";
            }
            $db->close();
        ?>
        <h2>Kategorie</h2>
        <ul>
            <li>1. Książki</li>
            <li>2. Muzyka</li>
            <li>3. Filmy</li>
        </ul>

        <h2>Podkategorie</h2>
        <ul>
            <li>1. Romans</li>
            <li>2. Biografia</li>
            <li>3. Kryminał</li>
            <li>4. Komiks</li>
        </ul>
    <footer style="text-align: center;">
        Portal ogłoszeniowy opracował: Tomasz Świątek
    </footer>
</body>

</html>