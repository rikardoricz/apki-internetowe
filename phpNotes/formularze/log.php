<?php

    $file = file("log.txt");

    foreach($file as $value) {
        $exp = explode("`",$value);
        echo $exp[0]."<br />".$exp[1]."<hr />";
    }

    echo "<a href=\"formularze.php\">Dodaj kolejne dane </a>
    <br>
    <a href=\"del.php\">Usuń plik</a>";

?>