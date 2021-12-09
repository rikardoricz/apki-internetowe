<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

if(!empty($_GET['przycisk'])){
    if(!empty($_GET['nazwisko']) && !empty($_GET['imie'])){//isset()
        $info="";

        $info.="Witaj {$_GET['imie']} {$_GET['nazwisko']} na mojej stronie<br/>";

        if(!empty($_GET['wiadomosc'])) $info.="Wiadomość: {$_GET['wiadomosc']}<br/>";
        if(!empty($_GET['plec'])) $info.="Płeć: {$_GET['plec']}<br/>";
        if(!empty($_GET['food'])) {
            
        
        $info.="Ulubione jedzenie:";
        foreach ($_GET['food'] as $f) {
            $info.=$f.";";
        }
        $info.="<br/>";
        }    

        if(!empty($_GET['klasa'])) $info.="Klasa: {$_GET['klasa']}<br/>";


        if(!empty($_GET['hobby'])) {
        $info.="Hobby:";
        foreach ($_GET['hobby'] as $h) {
            $info.=$h.";";
        }
        $info.="<br/>";
        }


        echo $info;
    }else{

    }
}else{
    echo "prześlij formularz";
}

// $contents='';
// foreach ($_GET as $key => $value) {
//     $contents .= $key . " => " . $value . "\n";           
// }
// file_put_contents("./log.txt", $contents, FILE_APPEND);


$plik = "log.txt"; 
$fp = fopen($plik, "a");
flock($fp, 2);
fwrite($fp, $info);
flock($fp, 3);
fclose($fp);

echo "Zapisano dane <br/>";

echo "<a href=\"log.php\">Zobacz wpisane dane</a>";


?>

<form action="" method="GET">
    Nazwisko <input type="text" name="nazwisko">
    Imię <input type="text" name="imie">

    <p>Wiadomość: <textarea name="wiadomosc" cols="30" rows="10"></textarea></p>

    <p>
        Płeć:
        <input type="radio" name="plec" value="k"> Kobieta
        <input type="radio" name="plec" value="m"> Mężczyzna
        <input type="radio" name="plec" value="i"> Inne
    </p>

    <p>
        Ulubione jedzenie:
        <input type="checkbox" name="food[]" value="cyganska"> Cygańska z polo
        <input type="checkbox" name="food[]" value="pierogi"> Pierogi
        <input type="checkbox" name="food[]" value="bigos"> Bigos
        <input type="checkbox" name="food[]" value="pizza"> Pizza
        <input type="checkbox" name="food[]" value="chipsy"> Chipsy
        <input type="checkbox" name="food[]" value="jajka"> 6 JAJEK
    </p>


    <p>
        Klasa:
        <select name="klasa">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </p>

    <p>
        Hobby:
        <select name="hobby" multiple>
            <option value="IT">IT</option>
            <option value="rower">rower</option>
            <option value="granie">granie</option>
            <option value="gotowanie">gotowanie</option>
        </select>
    </p>

    <br/>
    <input type="submit" value="Wyślij" name="przycisk">
</form>