<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - data czas, łańcuchy znaków</title>

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
            <h3>Temat: Obsługa daty i czasu; łańcuchy znaków i wyrażenia regularne</h3>
            <hr>
        </header>

        <section>
            <?php
            echo "NOTATKI";
            echo "</br>";
            echo "</br>";
            $teraz  = time();
            echo $teraz;
            echo "</br>";
            echo date('Y-m-d', time());
            echo "</br>";
            $dzisiaj = getdate();
            print_r($dzisiaj);
            echo "</br>";
            $start = microtime(true);

            for ($i = 0; $i < 10000; $i++) {
                $str = 'test';
            }

            $end = microtime(true);

            echo 'strona wygenerowana w ' . ($end - $start) . ' sekund';

            echo "</br>";
            echo "</br>";
            echo "ZADANIA obsługa czasu i daty";
            echo "</br>";
            echo "</br>";

            //zad 1
            // Napisz skrypt, który będzie pokazywał aktualna datę i czas w postaci:  Dzisiaj jest 30.10.2018 godzina 16:50:47

            echo "Dzisiaj jest " . date('d.m.Y') . " godzina " . date('G:i:s');
            echo "</br>";
            echo "</br>";

            // zad 2
            // Napisz skrypt sprawdzający w jaki dzień tygodnia się urodziłeś/łaś oraz sprawdź ile czasu zostało do twoich urodzin.

            function getWeekday($date)
            {
                return date('l', strtotime($date));
            }

            echo "I was born on " . getWeekday('2003-02-17');


            $nextBirthday = strtotime("2022-02-17");
            $now = time();
            $dateDiff = $nextBirthday - $now;
            $daysRemaining = floor($dateDiff / (60 * 60 * 24));

            echo "</br>";
            echo "Do następnych urodzin zostało " . $daysRemaining . " dni";



            echo "</br>";
            echo "</br>";


            // zad 3
            // Napisz skrypt sprawdzający czy dany rok jest przestępny wiedząc, że: rok jest przestępny tylko wtedy, jeśli dzieli się przez 4, ale nie dzieli się przez 100, chyba że dzieli się przez 400.

            function leapYear($year) {
                $leap = date('L', mktime(0, 0, 0, 1, 1, $year));
                echo $year . ' ' . ($leap ? 'jest' : 'nie jest') . ' rokiem przestępnym.';    
            }
            echo leapYear(2000);








            ?>

        </section>

        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>

    </div>
</body>

</html>