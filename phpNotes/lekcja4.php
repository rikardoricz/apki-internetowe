<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - petle</title>

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
            /* position: absolute; */
            bottom: 0;
            height: 50px;
            margin: auto;
            width: 80%;
        }

        footer p {
            text-align: center;
        }

        table,
        tr,
        td {
            border: 1px solid white;
            border-collapse: collapse;
            padding: 3px;
        }

        .green {
            color: green;
        }

        .blue {
            color: blue;
        }

        .multiply,
        .multiply tr,
        .multiply td {
            color: white;
            border: none;
            padding: 5px;
            line-height: 5px;
        }
    </style>

</head>

<body>
    <div id="wrapper">

        <header>
            <h1>Aplikacje internetowe</h1>
            <h3>Temat: Pętle oraz składnia altermatywna</h3>
            <hr>
        </header>

        <section>
            <?php

            // Zadanie 1 (dla klas, które miały już HTMLa): Za pomocą pętli for stwórz tabelę w HTML składająca się z 2 wierszy i 10 kolumn.
            echo "Zad 1 </br>";

            echo "<table>";

            for ($rows = 0; $rows < 3; $rows++) {
                echo "<tr>";
                for ($cols = 0; $cols < 11; $cols++) {
                    echo "<td>" . $cols . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";

            echo "</br>";


            // Zadanie 2: Za pomocą pętli for, while i do… while napisz skrypt, który będzie zwiększał zmienną $i od 1 do 100 o 2, a następnie zmniejszał ją do 1 o 4.
            echo "Zad 2 </br>";
            // for
            for ($i = 1; $i <= 100; $i += 2) {
                echo $i . " ";
            }
            echo "</br></br>";
            for ($i; $i >= 1; $i -= 4) {
                echo $i . " ";
            }
            echo "</br></br>";

            // while
            $i2 = 1;
            while ($i2 <= 100) {
                echo $i2 . " ";
                $i2 += 2;
            }
            echo "</br></br>";

            while ($i2 >= 1) {
                echo $i2 . " ";
                $i2 -= 4;
            }
            echo "</br></br>";

            // do ... while
            $i3 = 1;
            do {
                echo $i3 . " ";
                $i3 += 2;
            } while ($i3 < 100);

            var_dump($i3);

            echo "</br></br>";

            do {
                echo $i3 . " ";
                $i3 -= 4;
            } while ($i3 >= 1);


            echo "</br>";
            echo "</br>";




            // Zadanie 3: Napisz skrypt, który dla zmiennej $n=10 i $n>0 będzie ją zmniejszał o 1 i wypisywał: wartości kwadratów zmiennej $n; następnie wartości kwadratów zmiennej $n dla $n parzystych.
            echo "Zad 3 </br>";

            echo "</br>";
            // Zadanie 4: Za pomocą pętli for, while i do… while napisz skrypt, który wypisze ilość iteracji pętli dla zmiennej $i<=10. Tam gdzie to możliwe zastosuj $i++, ++$i, $i- -, – -$i.
            echo "Zad 4 </br>";

            echo "</br>";
            // Zadanie 5: Napisz skrypt, który sprawdzi, czy podana liczba jest liczbą pierwszą.
            echo "Zad 5 </br>";

            function liczbapierwsza($liczba)
            {
                $k = 2;

                while ($k < $liczba) {
                    if ($liczba % $k == 0) {
                        return false;
                    }

                    $k++;
                }

                return true;
            }
            echo (liczbapierwsza(39)) ? "jest to liczba pierwsza" : "nie jest to liczba pierwsza";

            echo "</br>";
            // Zadanie 6: Za pomocą pętli for stwórz tabliczkę mnożenia wg przykładu:
            echo "Zad 6 </br>";

            echo "<table>";

            for ($wys = 1; $wys <= 10; $wys++) {
                echo "<tr>\n";

                for ($szer = 1; $szer <= 10; $szer++) {
                    echo "<td>";
                    echo $szer * $wys;
                    echo "</td>\n";
                }

                echo "</tr>\n";
            }

            echo "</table>";

            echo "</br>";
            // Zadanie 7: Napisz skrypt, który za pomocą znaków * (gwiazdki) narysuje kwadrat. Gwiazdki leżące na obwodzie mają mieć kolor niebieski, a gwiazdki leżące na przekątnych zielone.
            echo "Zad 7 </br>";

            // $r = 10;
            // $c = 10;

            // for ($i = 1; $i <= $r; $i++) {
            //     for ($j = 1; $j <= $c; $j++) {
            //         if ($i == 1 || $i == $r || $j == 1 || $j == $c)
            //             echo "<span class=\"blue\">*</span>";
            //         else
            //         echo "<span class=\"green\">*</span>";
            //     }
            //     echo "</br>";
            // }

            echo "<table class='multiply'>";

            for ($wys = 1; $wys <= 10; $wys++) {
                echo "<tr>\n";

                for ($szer = 1; $szer <= 10; $szer++) {
                    echo "<td>";
                    $temp = $szer * $wys;
                    if ($temp == 1 || $temp == 100) {
                        echo "<span class=\"blue\">*</span>";
                    } else if (($wys == 1 && $szer == 10) || ($szer == 1 && $wys == 10)) {
                        echo "<span class=\"blue\">*</span>";
                    } else if ($wys == $szer || $wys + $szer == 11) {
                        echo "<span class=\"green\">*</span>";
                    } else if ($wys % 10 == 0 || $szer % 10 == 0 || $wys == 1 || $szer == 1) {
                        echo "<span class=\"blue\">*</span>";
                    } else {
                        echo "<span>*</span>";
                    }
                    echo "</td>\n";
                }

                echo "</tr>\n";
            }

            echo "</table>";

            echo "</br>";
            // Zadanie 8: Napisz skrypt, który po podaniu przez użytkownika promienia koła, za pomocą znaków * (gwiazdki), narysuje je.
            echo "Zad 8 </br>";

            echo "</br>";
            // Zadanie 9: Oblicz ilość bloków z jakich został zbudowany sześcian o boku długości 6.

            echo "</br>";
            ?>

        </section>

        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>

    </div>
</body>

</html>