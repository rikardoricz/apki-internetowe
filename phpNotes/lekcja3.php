<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>PHP - instrukcje sterujace</title>

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
      <h3>Temat: Instrukcje sterujące</h3>
      <hr>
    </header>

    <section>
      <?php

      // zad 1
      echo "Zad 1";

      echo "<br/>";
      $a = 2137;

      if ($a == 0) :
        echo "Podano 0";
      elseif ($a % 2 == 0) :
        echo "Parzysta";
      else :
        echo "Nieparzysta";
      endif;

      echo "<br/>";


      // zad 2
      echo "Zad 2";
      echo "<br/>";

      $x = -5;
      $y = 8;

      $con = $x > $y;

      if ($con) :
        echo 'wieksza jest $x = ' . $x;
      else :
        echo 'wieksza jest $y = ' . $y;
      endif;



      echo "<br/>";

      // zad 3

      echo "Zad 3";
      echo "<br/>";

      $b = -99;
      $c = 70;
      $d = 22;
      $e = 0;

      $temp = $b;

      if ($b > $temp) :
        $temp = $b;
      endif;
      if ($c > $temp) :
        $temp = $c;
      endif;
      if ($d > $temp) :
        $temp = $d;
      endif;
      echo 'Najwieksza liczba: ' . $temp;
      echo "<br/>";

      // zad 4
      echo "Zad 4";
      echo "<br/>";

      $f = 3;
      $g = 5;
      $h = -5;

      $min = $f;

      if ($g < $f && $g < $h) {
        $min = $g;
      }
      if ($h < $f && $h < $g) {
        $min = $h;
      }

      $max = $f;

      if ($g > $max) {
        $max = $g;
      }
      if ($h > $max) {
        $max = $h;
      }
      if ($f != $min && $f != $max) {
        $mid = $f;
      }
      if ($g != $min && $g != $max) {
        $mid = $g;
      }
      if ($h != $min && $h != $max) {
        $mid = $h;
      }
      echo "liczby malejąco: " . $max . "," . $mid . "," . $min . ",";

      echo "<br/>";

      echo "Zad 5";
      echo "<br/>";

      // $x = $condition ? $trueVal : $falseVal;

      // // same as:

      // if ($condition) {
      //     $x = $trueVal;
      // } else {
      //     $x = $falseVal;
      // }

      $i = 10;
      $j = 5;
      $k = 18;
      $l = 1;
      echo "liczby do porownania: $i, $j, $k, $l</br>";
      if ($i < $j && $i < $k && $i < $l) {
        $l1 = $i;
      } elseif ($j < $i && $j < $k && $j < $l) {
        $l1 = $j;
      } elseif ($k < $i && $k < $j && $k < $l) {
        $l1 = $k;
      } else $l1 = $l;
      $l4 = $i;
      if ($j > $l4) {
        $l4 = $j;
      }
      if ($k > $l4) {
        $l4 = $k;
      }
      if ($l > $l4) {
        $l4 = $l;
      }
      if ($i != $l1 && $i != $l4) {
        $m2 = $i;
      }
      if ($j != $l1 && $j != $l4) {
        $m1 = $j;
        (empty($m2) ? $m2 = $b : $m2 = $m2);
      }
      if ($k != $l1 && $k != $l4) {
        $m1 = $k;
        (empty($m2) ? $m2 = $k : $m2 = $m2);
      }
      if ($l != $l1 && $l != $l4) {
        $m1 = $l;
        $m2 = $m2;
      }
      ($m1 > $m2 ? $l2 = $m2 : $l2 = $m1);
      ($m1 < $m2 ? $l3  = $m2 : $l3  = $m1);
      echo 'liczby malejąco: ' . $l4 . ', ' . $l3 . ', ' . $l2 . ', ' . $l1;

      echo "<br/>";


      // zad 6
      echo "Zad 6";
      echo "<br/>";

      $ak = 1;
      $bk = 5;
      $ck = 3;

      $delta = $bk ** 2 - 4 * $ak * $ck;

      if ($delta > 0) :
        $x1 = (-$bk - sqrt($delta)) / 2 * $ak;
        $x2 = (-$bk + sqrt($delta)) / 2 * $ak;
        echo 'pierwiastki: x1 = ' . $x1 . ' $x2 = ' . $x2;
      elseif ($delta == 0) :
        $x0 = -$bk / 2 * $ak;
        echo 'jeden pierwiastek: x0 = ' . $x0;
      else :
        echo 'rownanie nie posiada pierwiastkow';
      endif;
      
      echo "<br/>";

      // zad 7
      echo "Zad 7";
      echo "<br/>";

      $l1 = 21;
      $l2 = 12;

      $choice = '*';

      switch ($choice) {
        case "+":
          echo "$l1 + $l2 = " . $l1 + $l;
          break;

        case "-":
          echo "$l1 - $l2 = " . $l1 - $l2;
          break;

        case "*":
          echo "$l1 * $l2 = " . $l1 * $l2;
          break;

        case "/":
          echo "$l1 / $l2 = " . $l1 / $l2;
          break;
      }

      echo "<br/>";

      echo "Zad 8";
      echo "<br/>";

      $x = 6;
      $y = -6;

      echo "Współrzędne punktu to: x = $x oraz y = $y";
      echo "<br/>";
      echo "Punkt znajduje się w ćwiartce ";

      if ($x > 0 && $y > 0) {
        echo "I";
      }
      if ($x < 0 && $y > 0) {
        echo "II";
      }
      if ($x < 0 && $y < 0) {
        echo "III";
      }
      if ($x > 0 && $y < 0) {
        echo "IV";
      }

      if ($x == 0 && $y != 0) {
        echo "OX";
      }
      if ($y == 0 && $x != 0) {
        echo "OY";
      }
      if ($x == 0 && $y == 0) {
        echo "0";
      }

      echo "<br/>";

      echo "Zad 9";
      echo "<br/>";

      $f = 75;
      $g = 81;
      $h = 5;

      $n1 = 0;
      $n2 = 0;

      $maximum = $f;

      echo "Sprawdzenie czy mozna zbudowac trójkąt z podanych długości odcinków <br/>";

      if ($f == $g && $g == $h) :
        echo "Możliwe";
      else :
        if ($g > $maximum) {
          $maximum = $g;
        }
        if ($h > $maximum) {
          $maximum = $h;
        }

        if ($f != $maximum) :
          $n1 = $f;
        endif;

        if ($g != $maximum && $n1 == 0) :
          $n1 = $g;
        elseif ($g != $maximum && $n1 != 0) :
          $n2 = $g;
        endif;

        if ($h != $maximum && $n1 == 0) :
          $n1 = $h;
        elseif ($h != $maximum && $n1 != 0) :
          $n2 = $h;
        endif;

        if ($maximum < $n1 + $n2) :
          echo "Możliwe";
        else :
          echo "Nie możliwe";
        endif;
      endif;

      echo "<br/>";

      echo "Zad 10";
      echo "<br/>";

      $nr = 5;

      switch ($nr) {
        case "1":
          echo "Styczeń";
          break;

        case "2":
          echo "Luty";
          break;

        case "3":
          echo "Marzec";
          break;

        case "4":
          echo "Kwiecień";
          break;

        case "5":
          echo "Maj";
          break;

        case "6":
          echo "Czerwiec";
          break;

        case "8":
          echo "Sierpień";
          break;

        case "9":
          echo "Wrzesień";
          break;

        case "10":
          echo "Październik";
          break;
        case "11":
          echo "Listopad";
          break;

        case "12":
          echo "Grudzień";
          break;
      }

      echo "<br/>";

      echo "Zad 11";
      echo "<br/>";

      $o = 2;

      switch ($o) {
        case "1":
          echo "Brak promocji do następnej klasy";
          break;

        case "2":
          echo "Promocja do następnej klasy";
          break;
        case "3":
          echo "Promocja do następnej klasy";
          break;
        case "4":
          echo "Promocja do następnej klasy";
          break;
        case "5":
          echo "Promocja do następnej klasy";
          break;

        case "6":
          echo "Promocja do następnej klasy z oceną celującą";
          break;
      }


      echo "<br/>";


      echo "Zad 12";
      echo "<br/>";

      $grade = 2;

      switch ($grade) {
        case "1":
          echo "Niedostateczny";
          break;

        case "2":
          echo "Dopuszczający";
          break;

        case "3":
          echo "Dostateczny";
          break;

        case "4":
          echo "Dobry";
          break;

        case "5":
          echo "Bardzo dobry";
          break;

        case "6":
          echo "Celujący";
          break;
      }

      echo "<br/>";
      echo "Zad 13";
      echo "<br/>";

      $zl = 1;
      $waluta = "bitcoin";

      switch ($waluta) {
        case "euro":
          echo "1 $waluta = " . $zl * 4.55 . "zł";
          break;

        case "bitcoin":
          echo "1 $waluta = " . $zl * 215835.77 . "zł";
          break;

        case "dolar":
          echo "1 $waluta = " . $zl * 3.94 . "zł";
          break;

        case "frank":
          echo "1 $waluta = " . $zl * 4.25 . "zł";
          break;
      }

      echo "<br/>";
      echo "Zad 14";
      echo "<br/>";

      $m = 1;
      $unit = "dm";

      switch ($unit) {
        case "mm":
          echo "1m = " . $m * 1000 . "mm";
          break;

        case "cm":
          echo "1m = " . $m * 100 . "cm";
          break;

        case "dm":
          echo "1m = " . $m * 10 . "dm";
          break;

        case "km":
          echo "1m = " . $m * 0.001 . "km";
          break;
      }

      echo "<br/>";





      ?>

    </section>

    <footer>
      <p>Tomasz Świątek 4bTI/2 2021/22</p>
    </footer>

  </div>
</body>

</html>