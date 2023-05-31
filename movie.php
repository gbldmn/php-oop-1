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

    public function getVoto(){ 
        return $this->voto = '8 su 10';
    }
    public function getVoto2(){ 
        return $this->voto = '10 su 10';
    }

}

// prima istanza

$primo_film = new Movie('Spiderman', 'azione, avventura ');
$primo_film->durata = '2.30';
$primo_film->getVoto();
// var_dump($primo_film);

// seconda istanza

$secondo_film = new Movie('Ironmman 2', 'sci-fi, animazione');
$secondo_film->durata = '2.50';
$secondo_film->getVoto2();
// var_dump($secondo_film);


?>