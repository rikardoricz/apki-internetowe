<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - Formularze</title>

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
            <h3>Temat: </h3>
            <hr>
        </header>

        <section>
            <?php
                echo "<pre>";
                print_r($_GET);
                echo "</pre>";

                if(!empty($_GET['przycisk'])) {
                    if(!empty($_GET['nazwisko']) && !empty($_GET['imie'])) {
                        $info="";
                        $info.="Witaj {$_GET['imie']} {$_GET['nazwisko']} na mojej stronie <br/>";
                        
                    }
                }

            ?>

        </section>

        <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer>

    </div>
</body>

</html>