<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];



?>

<!doctype html>
<html lang='it'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Diego Cavenati'>
    <title>PHP Hotel</title>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- Personal CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="index.php" method="get">
                    <select name="parcheggio" id="parcheggio" placeholder="desideri il parcheggio?">
                        <option>--</option>
                        <option value="yesParking">con parcheggio</option>
                        <option value="noParking">senza parcheggio</option>
                    </select>
                </form>
            </div>
            <?php foreach ($hotels as $hotel) : ?>
                <?php if ($hotel['parking'] || $hotel['parking'] == null) : ?>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $hotel['name']; ?></h3>
                                <p class="card-text"><?php echo $hotel['description']; ?></p>
                                <div class="parking">Parcheggi disponibili:
                                    <?php
                                    if ($hotel['parking']) {
                                        echo 'Si';
                                    } else {
                                        echo 'No';
                                    }; ?>
                                </div>
                                <div class="rating"><?php echo $hotel['vote']; ?> /5</div>
                                <div class="center_distance">Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> Km</div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach; ?>

        </div>
    </div>





    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>