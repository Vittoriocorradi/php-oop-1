<?php

// Richiamo la classe Movie

require_once __DIR__ . '/Movie.php';

// Oggetti istanziati di Movie

$drive = new Movie('Drive', 100, ['Action', 'Noir', 'Thriller']);
$annihilation = new Movie('Annihilation', 120, ['Horror', 'Scifi']);
$mulholland_drive = new Movie('Mulholland Drive', 157, ['Psychological thriller', 'Mystery']);
$hotel_chevalier = new Movie('Hotel Chevalier', 13, ['Romance', 'Drama', 'Short']);