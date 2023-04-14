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
echo $drive -> title;
echo $drive -> getLength();

$annihilation = new Movie('Annihilation', 120);
echo $annihilation -> title;
echo $annihilation -> getLength();

$mulholland_drive = new Movie('Mulholland Drive', 157);
echo $mulholland_drive -> title;
echo $mulholland_drive -> getLength();

$hotel_chevalier = new Movie('Hotel Chevalier', 13);
echo $hotel_chevalier -> title;
echo $hotel_chevalier -> getLength();