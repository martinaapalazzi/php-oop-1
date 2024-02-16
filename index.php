<?php 
class Movie {
    public $title;
    public $releaseDate;
    private $cast;
    private $genre;

    // function __construct($titolo, $dataRilascio, $casting, $genere)
    //{
        
    //}
}

$ratauille = new Movie();
$ratauille->title = 'Ratatuille';
$ratauille->releaseDate = 'June 29, 2007';

echo $ratauille->title = 'Ratatuille'.' - '.$ratauille->releaseDate = 'June 29, 2007';
