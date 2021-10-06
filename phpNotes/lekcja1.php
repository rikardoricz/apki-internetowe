<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - echo, komentarze...</title>

    <style>
        body {
            background-color: #2E3440;
            color: #8FBCBB;
            font-family: 'Roboto', sans-serif;
        }
        #wrapper {
            margin:auto;
            width: 80%;
        }
        h1 {
            text-align: center;
        }
        section {
            font-size: 50;
        }
        footer {
            position: absolute;
            bottom: 0;
            height: 50px;
            margin: auto;
            width: 80%;
        }
        footer p {
            text-align: center;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        
        <header>
        <h1>Aplikacje internetowe</h1>
        <h3>Temat: Pierwszy skrypt, echo, komentarze</h3>
        <hr>
        </header>

        <section>
            <?php

                echo "Hello World";
                echo "Hello World <br/>";

                echo "Cytat: \"Kura jaja nie zniosła a robota zrobiona\" jest mądry <br/>";
                echo 'To "cos madrego" to cytat <br/>';

                $zmienna = "Tomasz";
                $zmienna1 = "pies";
                echo $zmienna." ma ".$zmienna1."ka<br/>"; 

                // moja $zmienna zawiera w sobie słowo Tomasz
                echo 'moja $zmienna zawiera w sobie słowo '.$zmienna."<br/>";
                echo "\$zmienna ma wartość $zmienna<br/>";

                echo "<br/>";


                // komentarz liniowy
                /*
                komentarz blokowy
                tutaj tez
                */

                /*
                ćwiczenie - zapisz zdania
                    Ala ma kota, a kot ma Alę.
                    Moja zmienna $zmienna ma wartość Ala
                    To jest cytat: "Ala ma kota."
                */

                $imie = "Ala";
                $zwierze = "kot";

                echo $imie." ma ".$zwierze."a , a ".$zwierze." ma Alę.<br/>";
                echo "Moja zmienna \$imie ma wartość ".$imie."<br/>";
                $zwierze .= "a";
                echo "To jest cytat: \"$imie ma $zwierze \"";

            ?>
        
        </section>
        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>
    
    </div>
</body>
</html>