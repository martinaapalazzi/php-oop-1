<?php 
class Movie {
    public $title;
    public $releaseDate;
    public $genre;

    function __construct($titolo, $dataRilascio, $genere) {
        $this->title = $titolo;
        $this->releaseDate = $dataRilascio;
        $this->genre = $genere;
    }

    public function getGenre() {
        return $this->genre;
    }
}

$ratauille = new Movie('Ratatuille', 'June 29, 2007', 'Fantasy');

var_dump($ratauille);
//echo $ratauille;


//$ratauille->title = 'Ratatuille';
//$ratauille->releaseDate = 'June 29, 2007';

echo 'Title: '.$ratauille->title = 'Ratatuille'.' - Release date: '.$ratauille->releaseDate = 'June 29, 2007'.' - Genre: '.$ratauille->genre = 'Fanatsy';
