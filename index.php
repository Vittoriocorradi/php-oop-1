<?php

/**
 * Movie
 */
class Movie {
    public string $title;
    private string $length;
    public array $genres;
    
    /**
     * __construct
     *
     * @param  mixed $title
     * @param  mixed $duration
     * @return void
     */
    public function __construct(string $title, int $duration, array $genres) {
        $this -> title = $title;
        $this -> setLength($duration);
        $this -> genres = $genres;
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

$drive = new Movie('Drive', 100, ['Action', 'Noir', 'Thriller']);
echo $drive -> title;
echo $drive -> getLength();
var_dump($drive -> genres);

$annihilation = new Movie('Annihilation', 120, ['Horror', 'Scifi']);
echo $annihilation -> title;
echo $annihilation -> getLength();
var_dump($annihilation -> genres);

$mulholland_drive = new Movie('Mulholland Drive', 157, ['Psychological thriller', 'Mystery']);
echo $mulholland_drive -> title;
echo $mulholland_drive -> getLength();
var_dump($mulholland_drive -> genres);

$hotel_chevalier = new Movie('Hotel Chevalier', 13, ['Romance', 'Drama', 'Short']);
echo $hotel_chevalier -> title;
echo $hotel_chevalier -> getLength();
var_dump($hotel_chevalier -> genres);