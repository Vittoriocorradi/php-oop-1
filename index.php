<?php

class Movie {
    public $title;
}

$drive = new Movie();
$drive->title = 'Drive';
var_dump($drive);
$annihilation = new Movie();
$annihilation->title = 'Annihilation';
var_dump($annihilation);
var_dump($annihilation->title);
$mulholland_drive = new Movie();
$mulholland_drive -> title = 'Mulholland Drive';
var_dump($mulholland_drive);
var_dump($mulholland_drive -> title);