<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - zmienne, stale, typy danych</title>

    <style>
        body {
            background-color: #2E3440;
            color: #8FBCBB;
            font-family: 'Roboto', sans-serif;
            animation: color 5.1s 5.2s infinite forwards;
        }

        #wrapper {
            margin: auto;
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

        @keyframes color {
            0% {
                background-color: red;
            }

            20% {
                background-color: orange;
            }

            40% {
                background-color: yellow;
            }

            60% {
                background-color: green;
            }

            80% {
                background-color: blue;
            }

            100% {
                background-color: red;
            }

        }
    </style>

</head>

<body>
    <div id="wrapper">

        <header>
            <h1>Aplikacje internetowe</h1>
            <h3>Temat: zmienne, stałe, typy danych i operatory</h3>
            <hr>
        </header>

        <section>
            <?php
            // zad 1
            echo "Zadanie 1<br/>";
            echo "Tomorrow I'll learn Php global vasriables.";
            echo "<br/>";
            echo 'This is bad command : del c:\\\*.* <br/>';
            echo "Każdy napis w osobnej linii.<br/>";
            echo "<br/>";

            // zad 2
            echo "Zadanie 2<br/>";
            $love = "Kocham PHP";
            echo $love;
            echo "<br/>";

            // zad 3
            echo "Zadanie 3<br/>";
            define('URL', "https://www.youtube.com/watch?v=7apItC_TKyA");
            echo "<br/>";
            echo "<a href = " . URL . ">w dół</a>";
            echo "<br/><br/>";

            // zad 4
            echo "Zadanie 4<br/>";
            $a = 10;
            $b = 3;

            echo "dodawanie: \$a + \$b = " . $a . " + " . $b . " = " . $a + $b . "<br/>";
            echo "odejmowanie: \$a - \$b = " . $a . " - " . $b . " = " . $a - $b . "<br/>";
            echo "mnozenie: \$a * \$b = " . $a . " * " . $b . " = " . $a * $b . "<br/>";
            echo "dzielenie: \$a / \$b = " . $a . " / " . $b . " = " . $a / $b . "<br/>";
            echo "modulo: \$a % \$b = " . $a . " % " . $b . " = " . $a % $b . "<br/>";
            echo "negacja: -\$a i -\$b = " . -$a . " i " . -$b . "<br/>";
            echo "potegowanie: \$a ** \$b = " . $a . " ** " . $b . " = " . $a ** $b . "<br/>";

            echo "<br/>";

            // zad 5
            echo "Zadanie 5<br/>";
            // $c += $d to jest to samo co $c = $c + $d, czyli 12 + 6 = 18
            // $c -= $d to jest to samo co $c = $c – $d, czyli 12 – 6=6
            // $c *= $d to jest to samo co $c = $c * $d, czyli 12 * 6=72
            // $c /= $d to jest to samo co $c = $c / $d, czyli 12 / 6=2
            // $c %= $d to jest to samo co $c = $c % $d, czyli 12 % 6=0

            $c = 12;
            $d = 6;
            // $f = $c += $d;

            echo "\$c += \$d to jest to samo co \$c = \$c + \$d, czyli " . $c . " + " . $d . " = ";
            echo $c+=$d;
            echo "\$c -= \$d to jest to samo co \$c = \$c – \$d, czyli $c - $d = " . $c -= $d;

            echo "<br/><br/>";

            // zad 6
            echo "Zadanie 6<br/>";
            $x = 5;
            $y = 9;
            $z = 5;
            $first = true;
            $second = false;
            
            // Operatory porównania zwracają TRUE lub FALSE więc używamy komendy var_dump()
            var_dump($x == $y);
            echo "<br/>";
            var_dump($x != $y);
            echo "<br/>";
            var_dump($x == $z);
            echo "<br/>";
            var_dump($x === $z);
            echo "<br/>";

            echo "porownanie \$first i \$second: <br/>";
            var_dump($first == $second);
            echo "<br/>";
            $second = true;

            var_dump($first == $second);
            echo "<br/>";
            $first = $second = false;

            echo "<br/>";
            var_dump($first == $second);

            echo "<br/>";
            echo($first == $second);

            echo "<br/><br/>";
            
            // zad 7
            echo "Zadanie 7<br/>";
            $nr1 = rand(0, 100);
            $nr2 = rand(0, 100);
            $resultModulo = 0;

            echo "$nr1, $nr2";
            $resultModulo = $nr1 % $nr2;
            echo "Wynik modulo: ".$resultModulo;



            ?>

        </section>

        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>

    </div>
</body>

</html>