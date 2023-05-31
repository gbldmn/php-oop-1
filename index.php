<?php

class Movie{

    public $titolo;
    public $genere;
    public $durata;
    public $voto;

    function __construct($_titolo, $_genere){      
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    }

    public function getPlot(){ 
        return $this->voto = '8 su 10';
    }
}

// prima istanza

$primo_film = new Movie('spiderman', 'azione');
$primo_film->durata = '2.30';
$primo_film->getPlot();
var_dump($primo_film);

// seconda istanza

$ironman= new Movie('ironmman', 'sci-fi');
$primo_film->durata = '2.30';
var_dump($ironman);

?>