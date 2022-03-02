<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color:#2e3440;">

  <?php
  session_start();

  if (!isset($_POST['logowanie'])) {
    echo 'zaloguj się<br>';
    $msg = '';
  } else {
    $msg = '';
    $login = trim($_POST['login']); //htmlspecialchars(stripslashes(trim($_POST[‘…….’])))
    $haslo = htmlspecialchars(stripslashes(trim($_POST['haslo'])));
    if (empty($login) || empty($haslo)) {
      $msg = 'Brak loginu lub hasła!';
    } else {
      $serwer = 'localhost'; //lub 127.0.0.1 - to jest nazwa serwera  
      $user = 'root'; //użytkownik bazy danych
      $pass = ''; //hasło do bazy
      $baza = 'portal'; //nazwa bazy

      //łączenie z bazą
      $db = @new mysqli($serwer, $user, $pass, $baza); //podejście obiektowe - korzystamy z klasy PHP o nazwie mysqli

      if ($db->connect_error) {
        die('Błąd połączenia: ' . $db->connect_error);
      } else {

        echo 'Połączenie nawiązano <br/>';
        echo "skrypt pierwszy: </br>";
        $sql = "SELECT * FROM  `uzytkownicy` ";
        $obiekt = $db->query($sql);
        $ile_kont = $obiekt->num_rows;
        echo "<h5>Liczba użytkowników portalu: $ile_kont </h5>";
        echo "<br>Skrypt 2<br>";


        $sqlDWA = "SELECT * FROM  `uzytkownicy` where login=?";
        $stmt = $db->prepare($sqlDWA);
        $stmt->bind_param('s', $login);
        $stmt->execute();
        $obiektDWA = $stmt->get_result();
        $ile_kontDWA = $obiektDWA->fetch_assoc();
        if ($ile_kontDWA) {
          // $kolumna=$obiektDWA->fetch_assoc();

          echo "login jest w bazie";
          $hasloDWA = sha1($haslo); //szyfrowanie hasla podanego przez uztkownika za kazdym razem bedzie zaszyfrowane tak samo jezeli uzytkownik poda odpoweidnia kombiniacje
          //to znacz słowo "jabko" to zawsze 1111111X a slowo "marchew" to 2222221x


          if ($hash == $hasloDWA) {
            $msg = 'podałes dobre haslo';
            $hobby = "SELECT * FROM uzytkownicy inner join dane on uzytkownicy.id=dane.id where login='$login'";
            $hobbydwa = $db->query($hobby);

            $zmiena = $hobbydwa->fetch_assoc();
            $rok_ur = $zmiena['rok_urodz'];
            $przyjaciol = $zmiena['przyjaciol'];
            $hobi = $zmiena['hobby'];
            $zdjecie = $zmiena['zdjecie'];
            $rok = date("Y");
            $wiek = $rok - $rok_ur;
            echo "<p>$zdjecie</p></br>";
            echo "<h4>$login" . " wiek =" . "$wiek</h4><br>";
            echo "<p>Hobbi $hobi</p>";
            echo "<h1>ilosc przyjaciol $przyjaciol</h1>";



            $db->close();
          } else {
            $msg = 'podałes błedne haslo';
          }
        } else {
          $msg = 'Nie ma w bazei uzytkownika o takim loginie';
        }
      }
    }
  }

  ?>
  <form style="hidden" method="post" action="">
    <span><?= $msg; ?></span>
    <input type="text" name="login">
    <input type="password" name="haslo">
    <button type="submit" name="logowanie"> Loguj</button>



  </form>
</body>

</html>