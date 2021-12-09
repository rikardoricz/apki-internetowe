<?php
echo "<pre>";
print_r($_GET);
//var_dump($_GET);
echo "</pre>";

if(!empty($_GET['przycisk']))//isset()
{
    if(!empty($_GET['imie']) && !empty($_GET['nazwisko']))
    {
        $imie = $_GET['imie'];
        echo "<p>Witaj {$_GET['nazwisko']} $imie na mojej stronie.</p>";

        $info = "<p>Podałeś następujące dane: </p>";
        $info.= "<p>Nazwisko i imię: {$_GET['nazwisko']} $imie.</p>";
        //obieramy dane
        if(!empty($_GET['wiadomosc'])) $info.="<p>Wiadomość: {$_GET['wiadomosc']}</p>";
        if(!empty($_GET['plec'])) $info.= "<p>Płeć: {$_GET['plec']}</p>";

        if(!empty($_GET['gra1']) || !empty($_GET['gra2']) || !empty($_GET['gra3']) || !empty($_GET['gra4']))
        {
            $info.="<p>Gry:";
                if(!empty($_GET['gra1'])) $info.=$_GET['gra1']."; ";
                if(!empty($_GET['gra2'])) $info.=$_GET['gra2']."; ";
                if(!empty($_GET['gra3'])) $info.=$_GET['gra3']."; ";
                if(!empty($_GET['gra4'])) $info.=$_GET['gra4']."; ";
            $info.="</p>";
        }
        //dla food i hobby wyświetlamy dane pętlą foreach
        if(!empty($_GET['food'])){
            $info.="<p>Jedzenie: "; 
            foreach ($_GET['food'] as $f) {
                $info.="$f; ";
            }
            $info.="</p>";
        }

        if(!empty($_GET['klasa'])) $info.="<p>Klasa: {$_GET['klasa']}</p>";
        if(!empty($_GET['hobby'])){
            $info.="<p>Hobby: "; 
            foreach ($_GET['hobby'] as $h) {
                $info.="$h; ";
            }
            $info.="</p></br>";
        }
        
        $file = "info.txt"; // przypisanie zmiennej $file nazwy pliku 
        $fp = fopen($file, "a");// uchwyt pliku, otwarcie do dopisania 
        flock($fp, 2); // blokada pliku do zapisu
        fwrite($fp, $info); // zapisanie danych do pliku
        flock($fp, 3); // odblokowanie pliku 
        fclose($fp); // zamknięcie pliku

        echo "Dane zostały zapisane!<br />"; 
        echo "<a href=\"podglad.php\">Zobacz wpisane dane</a>";     
    }
    else
    {
        echo "Wprowadź wszystkie dane.<br/><br/>";
    }
}
else
{
    echo "Prześlij formularz.<br/><br/>";

?>

<form action="" method="GET">
    Nazwisko: <input type="text" name="nazwisko"/>
    Imię: <input type="text" name="imie"/>
    <br/><br/>
    
    <p>Wiadomosc: <textarea name="wiadomosc" cols="30" rows="10"></textarea></p>

    <p>Płeć: <br/>
        <input type="radio" name="plec" value="k">Kobieta
        <input type="radio" name="plec" value="m">Mężczyzna
    </p>

    <p>Gry: <br/>
        <input type="checkbox" name="gra1" value="mario"> Mario<br/>
        <input type="checkbox" name="gra2" value="lol"> LOL<br/>
        <input type="checkbox" name="gra3" value="wow"> WOW<br/>
        <input type="checkbox" name="gra4" value="cs"> CS<br/>
    </p>
    
    <p>Jedzenie: <br/>
        <input type="checkbox" name="food[]" value="pizza"> Pizza<br/>
        <input type="checkbox" name="food[]" value="bigos"> Bigos<br/>
        <input type="checkbox" name="food[]" value="barszcz"> Barszcz<br/>
        <input type="checkbox" name="food[]" value="sledz"> Śledzik<br/>
        <input type="checkbox" name="food[]" value="zur"> Żurek<br/>
    </p>

    <p>Klasa:<br/>
        <select name="klasa">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </p>

    <p>Hobby:<br/>
        <select name="hobby[]" multiple>
            <option value="it">IT</option>
            <option value="sport">sport</option>
            <option value="strzelanie">strzelanie</option>
            <option value="pieniadze">pieniądze</option>
        </select>
    </p>
    
    <p><input type="submit" name="przycisk" value="Wyślij" /></p>
</form>
<?php
}
?>