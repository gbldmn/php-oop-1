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

$primo_film = new Movie('Spiderman', 'azione');
$primo_film->durata = '2.30';
$primo_film->getVoto();
// var_dump($primo_film);

// seconda istanza

$secondo_film = new Movie('Ironmman 2', 'sci-fi');
$secondo_film->durata = '2.50';
$secondo_film->getVoto2();
// var_dump($secondo_film);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css/style.css">
    <title>Document</title>
</head>
<body>

<main>
    <div class="card">
        <img src="img/Spiderman.JPG" alt="">
       <h2> Film: <?php echo  $primo_film->titolo; ?></h2>
       <h3> Genere: <?php echo $primo_film->genere; ?> </h3>
       <h3> Durata: <?php echo $primo_film->durata; ?> </h3>
       <h3> Voto: <?php echo $primo_film->getVoto(); ?> </h3>
    </div>
    <div class="card">
      <img class="two" src="img/iron-man-6480952_640.jpg" alt="">
       <h2> Film: <?php echo  $secondo_film->titolo; ?></h2>
       <h3> Genere: <?php echo $secondo_film->genere; ?> </h3>
       <h3> Durata: <?php echo $secondo_film->durata; ?> </h3>
       <h3> Voto: <?php echo $secondo_film->getVoto2(); ?> </h3>
    </div>
</main>


</body>
</html>