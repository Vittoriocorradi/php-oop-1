<?php
// Database
require_once __DIR__ . '/models/db.php';

// Header
include_once __DIR__ . '/partials/header.php';
?>

<!-- Body della pagina -->
<div class="row p-5">
    <!-- Titolo -->
    <div class="col-12 mb-5">
        <h1 class="text-center">
            Movies List
        </h1>
    </div>
    <!-- /Titolo -->
    <!-- Lista Film -->
    <div class="col-5 mx-auto">
        <ul class="list-group">
            <!-- Ciclo film -->
            <?php foreach($movies as $movie) { ?>
                <li class="list-group-item">
                    <!-- Titolo film -->
                    <h2><?php echo $movie->title; ?></h2>
                    <!-- Lunghezza -->
                    <small>Lenght: <?php echo $movie->getLength() ?></small>
                    <div class="d-flex">
                        <div class="me-1">Generi:</div>
                        <?php foreach ($movie->genres as $genre) { ?>
                            <div class="me-2"><?php echo $genre; ?></div>
                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <!-- /Lista film -->
    </div>
</div>
<!-- /Body della pagina -->

<?php
// Footer
include_once __DIR__ . '/partials/footer.php';
?>