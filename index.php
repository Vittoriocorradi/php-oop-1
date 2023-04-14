<?php

/**
 * Movie
 */
class Movie {
    public string $title;
    private string $length;
    
    /**
     * __construct
     *
     * @param  mixed $title
     * @param  mixed $duration
     * @return void
     */
    public function __construct(string $title, int $duration) {
        $this -> title = $title;
        $this -> setLength($duration);
    }
    
    /**
     * setLength
     *
     * @param  mixed $duration      Assegna al film il valore corto, medio o lungo a seconda della durata
     * @return void
     */
    public function setLength(int $duration) {
        if ($duration < 80) {
            $this -> length = 'Short';
        } elseif ($duration > 120) {
            $this -> length = 'Long';
        } else {
            $this -> length = 'Medium';
        }
    }
    
    /**
     * getLength
     *
     * @return void
     */
    public function getLength() {
        return $this -> length;
    }
}

// Oggetti istanziati

$drive = new Movie('Drive', 100);
var_dump($drive);

$annihilation = new Movie('Annihilation', 120);
var_dump($annihilation);

$mulholland_drive = new Movie('Mulholland Drive', 157);
var_dump($mulholland_drive);

$hotel_chevalier = new Movie('Hotel Chevalier', 13);
var_dump($hotel_chevalier);