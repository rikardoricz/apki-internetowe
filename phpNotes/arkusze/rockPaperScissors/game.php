<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            background-color: #2e3440;
            color: #d8dee9;
            font-family: 'Roboto', sans-serif;
            margin: 20px;
            display: flex;
            justify-content: center;
        }
        .info {
            color: #88c0d0;
            margin-top: 5px;
        }

        #gameBox>* {
            margin: 20px;
        
        }

        #gameBox {
            border: #d08770 solid 2px;
            width: 600px;
        }
    </style>
</head>

<body>

    <?php
        $userCount = $cmpCount = 0;

        $userInput = $_POST['userInput'];
        $cmpRand = rand(0,2);
        if ($userInput == $cmpRand) {
            echo "user wins " . $userCount . " points";
        } else {
            echo "user wins " . $cmpCount . " points";
        }
        


    ?>

<div id="gameBox">
    <h1>Rock paper scissors vs computer</h1>
        <form action="game.php" method="post">
            <button name="userInput" value="0">Rock</button>
            <button name="userInput" value="1">Paper</button>
            <button name="userInput" value="2">Scissors</button>
        </form>

        <div class="info">
            <span><?php echo $resultNow ?></span>
            <span><?php echo $resultEnd ?></span>
        </div>
    </div>

</body>

</html>