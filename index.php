<?php

class Movie{

    public $titolo;
    public $genere;
    public $durata;

    function __construct($_titolo, $_genere){      
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    }
}

// prima istanza

$primo_film = new Movie('spiderman', 'azione');
$primo_film->durata = '2.30';
var_dump($primo_film);

// seconda istanza

$ironman= new Movie('ironmman', 'sci-fi');
$primo_film->durata = '2.30';
var_dump($ironman);

?>