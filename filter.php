<?php

var_dump($_GET);
$vote = $_GET['vote'];
$parking = $_GET['parking'];

echo "$vote";
echo "$parking";

$filtered_hotels = [];

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