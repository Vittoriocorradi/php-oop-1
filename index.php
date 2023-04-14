<?php

class Movie {
    public string $title;
    private string $length;

    public function setLength(int $duration) {
        if ($duration < 80) {
            $this -> length = 'Short';
        } elseif ($duration > 120) {
            $this -> length = 'Long';
        } else {
            $this -> length = 'Medium';
        }
    }

    public function getLength() {
        return $this -> length;
    }
}

$drive = new Movie();
$drive -> title = 'Drive';
$drive -> setLength(100);
var_dump($drive);
var_dump($drive -> getLength());

$annihilation = new Movie();
$annihilation -> title = 'Annihilation';
$annihilation -> setLength(120);
var_dump($annihilation);
var_dump($annihilation -> title);

$mulholland_drive = new Movie();
$mulholland_drive -> title = 'Mulholland Drive';
$mulholland_drive -> setLength(157);
var_dump($mulholland_drive);
var_dump($mulholland_drive -> title);

$hotel_chevalier = new Movie();
$hotel_chevalier -> title = 'Hotel Chevalier';
$hotel_chevalier -> setLength(13);
var_dump($hotel_chevalier);
var_dump($hotel_chevalier -> getLength());