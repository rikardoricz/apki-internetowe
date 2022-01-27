<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

    $conn = new PDO('mysql:dbname=arkusz1;host=127.0.0.1','root','') ;
    if($conn){ 
            $kat = $_POST['kat'];
            $podkat = $_POST['podkat'];
            $tytul = $_POST['tytul'];
            $tresc = $_POST['tresc'];
            $err = false; 
            if(empty($tresc)) { 
                echo 'podaj tresc!'."<br/>"; 
            }
            if(empty($kat)) { 
                echo 'podaj kategorie!'."<br/>"; 
            }
            if(empty($tytul)) { 
                echo 'podaj tytul!'."<br/>"; 
            }
            if(empty($podkat)) { 
                echo 'podaj podkategorie!'."<br/>"; 
            }
            if(empty($tytul) || empty($tresc) || empty($kat) || empty($podkat)) { 
                $err = true; 
            }

            if(!$err) { 
             $query = "INSERT INTO ogloszenia (kat,podkat,tytul,tresc) VALUES('$kat','$podkat','$tytul','$tresc')";
             $sql = $conn->query($query);
             $result = $sql -> execute();
             if($result) { 
                 echo  "<p style='color:green;'>
                 The query has been sent sucessfully! </p>";}

            }
            $conn = null; 


    }
    else  { 
        echo 'error!'; 
    }
    $conn = new PDO('mysql:dbname=arkusz1;host=127.0.0.1','root','') ;
    $dataQuery  = 'SELECT * FROM ogloszenia';
    $data = $conn->query($dataQuery); 
    $data->execute();
    $records = $data->fetchAll();
    foreach($records as $record)  {
        echo "Kategoria: ".$record['kat'].",podkat: ".$record['podkat'].", Tytuł: ".$record['tytul']." ,treść: ".$record['tresc']."<br/>";
    }
?>

    <form action="" method="post">
        <label for="kat">Kategoria</label>
        <input type="number" name="kat" id="kat">
        <label for="podkat">Podategoria</label>
        <input type="number" name="podkat" id="podkat">
        <label for="tytul">Tytuł:</label>
        <input type="text" name="tytul" id="tytul">
        <label for="tresc">Treść:</label> <br>
        <textarea name="tresc" id="tresc" cols="30" rows="10"></textarea>
        <input type="submit" value="Wyślij">
        <input type="reset" value="Wyczyść">
    </form>
</body>

</html>