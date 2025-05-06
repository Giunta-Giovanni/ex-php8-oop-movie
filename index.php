<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Genre.php';
require_once __DIR__ . '/data/data.php';




// var_dump($guardianOfGalaxy);
// var_dump($guardianOfGalaxy->getGenres());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>ex-php8-oop-movie</title>
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center mb-4">My Movies</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php foreach ($movies as $movie): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <p class="card-text"><strong>Anno:</strong> <?php echo $movie->year; ?></p>
                            <p class="card-text"><strong>Genere:</strong> <?php echo $movie->getGenres(); ?></p>
                            <p class="card-text"><strong>Descrizione:</strong> <?php echo $movie->getDescription(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>



</body>

</html>