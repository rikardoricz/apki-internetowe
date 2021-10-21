<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - funkcje</title>

    <style>
        body {
            background-color: #2E3440;
            color: #8FBCBB;
            font-family: 'Roboto', sans-serif;
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
    </style>

</head>

<body>
    <div id="wrapper">

        <header>
            <h1>Aplikacje internetowe</h1>
            <h3>Temat: Funkcje</h3>
            <hr>
        </header>

        <section>
            <?php
            // 1 Napisz funkcję, która przyjmuje 3 argumenty: 2 z nich to liczby, a trzecia to znak operatora arytmetycznego. Funkcja ma wykonać działanie na liczbach w zależności od wprowadzonego znaku np. 1,2,+ wykona dodawanie, 5,6,** wykona potęgowanie itd. Tam gdzie to możliwe wykorzystaj funkcje wbudowane.

            echo "zad 1";
            echo "</br>";

            function mathOperations($num1, $num2, $char)
            {

                switch ($char) {
                    case '+':
                        return $num1 + $num2;
                        break;
                    case '-':
                        return $num1 - $num2;
                        break;
                    case '*':
                        return $num1 * $num2;
                        break;
                    case '/':
                        return $num1 / $num2;
                        break;
                    case '%':
                        return $num1 % $num2;
                        break;
                    case '**':
                        return pow($num1, $num2);
                        break;
                    default:
                        echo "Podano niewłaściwy operator";
                }
            }

            echo mathOperations(1, 2, '+');
            echo "</br>";
            echo mathOperations(5, 6, '-');
            echo "</br>";
            echo mathOperations(6, 9, '*');
            echo "</br>";
            echo mathOperations(124, 8, '/');
            echo "</br>";
            echo mathOperations(34, 3, '%');
            echo "</br>";
            echo mathOperations(4, 3, '**');
            echo "</br>";

            // 2 Napisz funkcję, która dla 3 losowo wygenerowanych liczb sprawdzi, czy są one pitagorejskie (czyli spełniają warunek: a2+b2=c2). Jeżeli tak to ma wyświetlić „Wylosowane liczby są liczbami pitagorejskimi”, w przeciwnym wypadku odwrotny komunikat.
            echo "zad 2";
            echo "</br>";

            function randPit()
            {
                $num1 = mt_rand(1, 5);
                $num2 = mt_rand(1, 5);
                $num3 = mt_rand(1, 5);
                $num1 = pow($num1, 2);
                $num2 = pow($num2, 2);
                $num3 = pow($num3, 2);

                if ($num1 + $num2 == $num3 || $num1 + $num3 == $num2 || $num2 + $num3 == $num1) {
                    echo "wylosowane liczby są liczbami pitagorejskimi";
                } else echo "Wylosowane liczby nie są liczbami pitagorejskimi";
            }

            randPit();

            // 3 Napisz funkcję, która wyświetli na ekranie wszystkie trójki pitagorejskie z zakresu podanego przez użytkownika. (np. dla zakresu od 1-10 sprawdzamy trójki: 1 2 3; 2 3 4; 3 4 5; 4 5 6 itd)
            echo "Zad 3";
            echo "</br>";

            function userPit($start, $end) {
                $mid = $start + 1;
                echo $start." ".$mid." ".$end;

                // for ($start, $start <= $end, $start++)
                // {
                    
                // }
            }

            userPit(1, 10);

            // 4 Napisz funkcję obliczającą cenę brutto dla podanej ceny netto i stawki vat. Wyświetl: cena netto, wartość vat, cena brutto.
            echo "</br>";
            echo "Zad 4";
            echo "</br>";

            function taxCalc($nt, $vat)
            {
                $vat *= 0.01;
                echo "cena netto: " . $nt . " zł";
                echo "</br>";
                echo "wartość vat: " . $nt * $vat . " zł";
                echo "</br>";
                $vat += 1;
                $brt = $nt * $vat;
                echo "cena brutto; " . $brt . " zł";
            }

            taxCalc(230, 23);
            echo "</br>";
            ?>

        </section>

        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>

    </div>
</body>

</html>