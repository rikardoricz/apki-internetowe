<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arkusz 1</title>
</head>
<body style="background-color: teal";>
<h1>Portal Ogłoszeniowy</h1> </br>
    <?php
  $serwer='localhost';
  $user='root';
  $pass='';
  $databaze='31337';

  $db = new mysqli($serwer, $user, $pass, $databaze);
  
  if($db->connect_error) 
  {
      die('Błąd połączenia: '. $db->connect_error); 
  }  
  else
  {
     echo 'Połączenie z bazą nawiązano <br/>';
        if(!empty($_POST['add'])) { 

        if (!empty($_POST['StronaKategoria'])
         && !empty($_POST['StronaPodKategoria'])
         && !empty($_POST['Tytul'])
         && !empty($_POST['Tresc'])) 
         {
    
          $sql = "INSERT INTO `ogloszenia`(`kategoria`, `podkategoria`,`tytul`,`tresc`)
            VALUES ('{$_POST['StronaKategoria']}','
            {$_POST['StronaPodKategoria']}','
            {$_POST['Tytul']}','
            {$_POST['Tresc']}')";

          $wynik = $db->query($sql);
          $ar = $db->affected_rows;

        if ($ar != 0) 
        echo "<br>Dodano {$_POST['StronaKategoria']}
        {$_POST['StronaPodKategoria']}
        {$_POST['Tytul']}
        {$_POST['Tresc']} "; 
                
    } else { 
   echo "Uzupełnij pola.";       
            } 
  }

}
?>
 <form action="" method="POST">
    Kategoria <select name="StronaKategoria">
    <option>1</option>  <option>2</option>  <option>3</option>
    </select> </br>

    Podkategoria <select name="StronaPodKategoria">
    <option>1</option>  <option>2</option>  <option>3</option>  <option>4</option>
    </select><br>

    Tytul<input type="text" name="Tytul"><br>
    Tresc<textarea name="Tresc"></textarea><br>

    <input type="submit" name="add" value="Zapisz">

    <input type="submit" name="del" value="Wyczyść">
</form>
<?php


   echo "Cała zawartość:<br>";
     $wys = $db->query("SELECT * FROM ogloszenia ");
 
while($row = $wys->fetch_array()) {
      echo "Kategoria: " . $row['Kategoria'] . " Podkategoria:" . $row['Podkategoria'] . " Tytul:" . $row['Tytul'] . " Tresc: " . $row['Tresc']. "<br>";
  }$db->close();
?>



</div>
    <div class="SpisBazy" style="width:300px;">
               <div class="kategorie">
               <h1>kategorie</h1>
            <ul>
          <li>1. ksiazki</li>
            <li>2. muzyka</li>
                <li>3. filmy</li>
        </ul>
        </diV>
            <div class="podkategorie">
               <h1>podkategorie</h1>
        <ul>
        <li>1. romans</li>
            <li>2. biografia</li>
                <li>3. kryminial</li>
                <li>4. komiks</li>

                </center>
            </ul>
            </div>
        </div>
        </div>
        </body>
        </html>