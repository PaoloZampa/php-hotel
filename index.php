<?php

$hotels = [

    [
        'name' => 'Hotel Luca',
        'description' => 'Hotel Luca Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Pablo',
        'description' => 'Hotel Pablo Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Giuliano',
        'description' => 'Hotel Giuliano Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 2.4
    ],
    [
        'name' => 'Hotel Mattia',
        'description' => 'Hotel Mattia Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Fabbio',
        'description' => 'Hotel Fabbio Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 50
    ],
    [
        'name' => 'Hotel Robby',
        'description' => 'Hotel Robby Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Gambero',
        'description' => 'Hotel Gambero Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 15.4
    ],
    [
        'name' => 'Hotel Minutella',
        'description' => 'Hotel Minutella Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 1.5
    ],
    [
        'name' => 'Hotel Donato',
        'description' => 'Hotel Donato Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 21.6
    ],
    [
        'name' => 'Hotel Bello',
        'description' => 'Hotel Bello Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Riccio',
        'description' => 'Hotel Riccio Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Zampa',
        'description' => 'Hotel Zampa Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 2.4
    ],
    [
        'name' => 'Hotel Lookas',
        'description' => 'Hotel Lookas Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Minutella',
        'description' => 'Hotel Minutella Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 50
    ],
    [
        'name' => 'Hotel Nesta',
        'description' => 'Hotel Nesta Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Pacifico',
        'description' => 'Hotel Pacifico Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 15.4
    ],
    [
        'name' => 'Hotel Luiggi',
        'description' => 'Hotel Luiggi Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 1.5
    ],
    [
        'name' => 'Hotel Adam',
        'description' => 'Hotel Adam Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 21.6
    ],

];


/* foreach ($hotels as $hotel) {
echo $hotel['name'] . " - " . $hotel['description'] . " - " . $hotel['parking'] . " - " . $hotel['vote'] . " - " . $hotel['distance_to_center'] . "<br>";
} */

?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP Hotel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container my-5">

        <form action="filter.php" method="get">

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="true" id="parking" name="parking">
                <label class="form-check-label" for="parking">
                    Parcheggio disponibile
                </label>
            </div>

            <div class="mb-3">
                <label for="vote" class="form-label">Voto minimo</label>
                <input type="number" class="form-control" id="vote" name="vote" min="1" max="5">
            </div>

            <button type="submit" class="btn btn-primary mb-3">Filtra</button>

        </form>

        <div class="card card-body shadow">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">PARKING</th>
                        <th scope="col">VOTE</th>
                        <th scope="col">DISTANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel): ?>
                        <tr>
                            <th>
                                <?= $hotel['name'] ?>
                            </th>
                            <td>
                                <?= $hotel['description'] ?>
                            </td>
                            <td>
                                <? if ($hotel['parking'] === true) {
                                    echo 'Disponibile';
                                } else {
                                    echo 'Non disponibile';
                                } ?>
                            </td>
                            <td>
                                <?= $hotel['vote'] ?>
                            </td>
                            <td>
                                <?= $hotel['distance_to_center'] ?> Km
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>