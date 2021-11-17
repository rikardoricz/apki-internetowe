<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>PHP - tablice i operacje na strukturze plikow</title>

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
            <h3>Temat: 9. Opieracje na tablicach | 10. Operacje na strukturze plików</h3>
            <hr>
        </header>

        <section>
        <pre>
            <?php
            
            $continents = [
                [
                    'continent' => 'Europe',
                    'country' => 'Poland',
                    'cities' => ['Warszawa', 'Wroclaw', 'Gdansk'],
                ],  
                [
                    'continent' => 'Europe',
                    'country' => 'France',
                    'cities' => ['Nice', 'Paris', 'Lyon'],
                ],  
                [
                    'continent' => 'Europe',
                    'country' => 'Germany',
                    'cities' => ['Berlin', 'Hamburg', 'Monachium'],
                ],   
                [
                    'continent' => 'North America',
                    'country' => 'USA',
                    'cities' => ['Los Angeles', 'Chicago', 'Miami'],
                ],  
                [
                    'continent' => 'North America',
                    'country' => 'Mexico',
                    'cities' => ['Mexico City', 'Iztapalapa', 'Ecatepec de Morelos'],
                ],  
                [
                    'continent' => 'North America',
                    'country' => 'Canada',
                    'cities' => ['Toronto ', 'Montreal', 'Ottawa'],
                ],  
                [
                    'continent' => 'Africa',
                    'country' => 'Uganda',
                    'cities' => ['Kampala', 'Gulu', 'Lira'],
                ],  
                [
                    'continent' => 'Africa',
                    'country' => 'Nigeria',
                    'cities' => ['Lagos', 'Kano', 'Aba'],
                ],  
                [
                    'continent' => 'Africa',
                    'country' => 'Kenya',
                    'cities' => ['Nairobi', 'Mombasa', 'Nakuru'],
                ],  
            ];
            
            $arr = [];
            foreach($continents as $key => $value) {
                foreach($value['cities'] as $city) {
                    $arr[] = [
                        'continent' => $continents[$key]['continent'], 
                        'country' => $continents[$key]['country'],
                        'city' => $city
                    ];
                }
            }
            
            print_r($arr);
            
            ?>

            </pre>
        </section>

        <!-- <footer>
            <p>Tomasz Świątek 4bTI/2 2021/22</p>
        </footer> -->

    </div>
</body>

</html>