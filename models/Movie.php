<?php

/**
 * Movie
 */
class Movie
{
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
    public function __construct(string $title, int $duration, array $genres)
    {
        $this->title = $title;
        $this->setLength($duration);
        $this->genres = $genres;
    }

    /**
     * setLength
     *
     * @param  mixed $duration      Assegna al film il valore corto, medio o lungo a seconda della durata
     * @return void
     */
    public function setLength(int $duration)
    {
        if ($duration < 80) {
            $this->length = 'Short';
        } elseif ($duration > 120) {
            $this->length = 'Long';
        } else {
            $this->length = 'Medium';
        }
    }

    /**
     * getLength
     *
     * @return void
     */
    public function getLength()
    {
        return $this->length;
    }
}
