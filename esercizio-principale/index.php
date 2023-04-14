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
            <!-- Primo film -->
            <li class="list-group-item">
                <!-- Titolo film -->
                <h2><?php echo $drive->title; ?></h2>
                <!-- Lunghezza -->
                <small>Lenght: <?php echo $drive->getLength() ?></small>
                <div class="d-flex">
                    <div class="me-1">Generi:</div>
                    <?php foreach ($drive->genres as $genre) { ?>
                        <div class="me-2"><?php echo $genre; ?></div>
                    <?php } ?>
            </li>
            <!-- Secondo film -->
            <li class="list-group-item">
                <!-- Titolo film -->
                <h2><?php echo $annihilation->title; ?></h2>
                <!-- Lunghezza -->
                <small>Lenght: <?php echo $annihilation->getLength() ?></small>
                <!-- Generi -->
                <div class="d-flex">
                    <div class="me-1">Generi:</div>
                    <?php foreach ($annihilation->genres as $genre) { ?>
                        <div class="me-2"><?php echo $genre; ?></div>
                    <?php } ?>
                </div>
            </li>
            <!-- Terzo film -->
            <li class="list-group-item">
                <!-- Titolo film -->
                <h2><?php echo $mulholland_drive->title; ?></h2>
                <!-- Lunghezza -->
                <small>Lenght: <?php echo $mulholland_drive->getLength() ?></small>
                <!-- Generi -->
                <div class="d-flex">
                    <div class="me-1">Generi:</div>
                    <?php foreach ($mulholland_drive->genres as $genre) { ?>
                        <div class="me-2"><?php echo $genre; ?></div>
                    <?php } ?>
                </div>
            </li>
            <!-- Quarto film -->
            <li class="list-group-item">
                <!-- Titolo film -->
                <h2><?php echo $hotel_chevalier->title; ?></h2>
                <!-- Lunghezza -->
                <small>Lenght: <?php echo $hotel_chevalier->getLength() ?></small>
                <!-- Generi -->
                <div class="d-flex">
                    <div class="me-1">Generi:</div>
                    <?php foreach ($hotel_chevalier->genres as $genre) { ?>
                        <div class="me-2"><?php echo $genre; ?></div>
                    <?php } ?>
                </div>
            </li>
        </ul>
        <!-- /Lista film -->
    </div>
</div>
<!-- /Body della pagina -->

<?php
// Footer
include_once __DIR__ . '/partials/footer.php';
?>