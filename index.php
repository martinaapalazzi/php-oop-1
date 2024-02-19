<?php 

class Genre {
    public $name;

    public function __construct ($nome) {
        $this->name = $nome;
    }
}
class Movie {
    public $title;
    public $releaseDate;
    public $director;
    public $duration;
    public $availableInStreaming;
    private $genre; // se è privata hai completo accesso a scrittura e lettura

    function __construct(
        string $titolo,
        $dataRilascio,
        $regista,
        $durata,
        bool $visibileInStreaming,
        Genre $genere )
    {
        $this->title = $titolo;
        $this->releaseDate = $dataRilascio;
        $this->director = $regista;
        $this->duration = $durata;
        $this->availableInStreaming = $visibileInStreaming;
        $this->setGenre($genere); 
    }

    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genere) {
        if (get_class($genere) == 'Genre') {
            $this->genre = $genere;
        }
        else {
            echo '<h2 style="color: red"> ERRORE: GENRE IS NOT FROM THE CLASS GENRE </h2>';
        }
    }

}

$fantasyGenre = new Genre('Fantasy');

$ratauille = new Movie('Ratauille', 'June 29, 2007', 'Disney', '1h30', true, $fantasyGenre);

var_dump($ratauille);

echo 'Title: '.$ratauille->title.' - Release date: '.$ratauille->releaseDate.' - Director: '.$ratauille->director.' Duration: '.$ratauille->duration.' - Available in streaming: '.$ratauille->availableInStreaming.' - Genre: '.$ratauille->getGenre()->name;


$tombRaider = new Movie('Tomb Raider', 'March 5, 2013', 'Wes Ball', '2h30', false, new Genre('Action'));

var_dump($tombRaider);

echo 'Title: '.$tombRaider->title.' - Release date: '.$tombRaider->releaseDate.' - Director: '.$tombRaider->director.' - Duration: '.$tombRaider->duration.' - Available in streaming: '.$tombRaider->availableInStreaming.' - Genre: '.$tombRaider->getGenre()->name;
