<?php 
class Movie {
    public $title;
    public $releaseDate;
    private $genre = array();

    function __construct($titolo, $dataRilascio, $genere) {
        $this->title = $titolo;
        $this->releaseDate = $dataRilascio;
        $this->setGenre($genere); 
    }

    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genere) {
        $this->genre = $genere;
    }

}

$ratauille = new Movie('Ratauille', 'June 29, 2007', 'Fantasy');

var_dump($ratauille);

echo 'Title: '.$ratauille->title = 'Ratatuille'.' - Release date: '.$ratauille->releaseDate = 'June 29, 2007'.' - Genre: '.$ratauille->setGenre('Fantasy');





$tombRaider = new Movie('Tomb Raider', 'March 5, 2013', 'Action');

var_dump($tombRaider);

echo 'Title: '.$tombRaider->title = 'Tomb Raider'.' - Release date: '.$tombRaider->releaseDate = 'March 5, 2013'.' - Genre: '.$tombRaider->setGenre('Action');
