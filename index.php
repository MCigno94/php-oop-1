<?php

class Movie {
    private $title;
    private $category;
    private $description;

	public function getTitle() {
		return $this->title;
	}
    public function getCategory() {
		return $this->category;
	}
    public function getDescription() {
		return $this->description;
	}

    function __construct(String $title, String $category, String $description) {
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
    }

    function play(){
        if($this->description !== null) {
            echo "Il film è stato avviato";
        }
    }

};

$transformers = new Movie("Transformers", "Azione/Fantascientifico", "Una voce narrante, quella di Optimus Prime, racconta dell'AllSpark, una fonte di energia a forma di cubo in grado di creare mondi e vita su di essi; due fazioni di esseri senzienti, una votata al bene e l'altra al male, si contendevano il suo potere sul proprio pianeta, che venne poi devastato e consumato. I robot partirono alla sua ricerca nell'universo, che dopo un lungo viaggio si perse, venendo poi localizzato sul pianeta Terra.");

var_dump($transformers);
//$title_a = $transformers->getTitle();
//$category_a = $transformers->getCategory();
//$description_a = $transformers->getDescription();
//$transformers->play();

$fastEFurious = new Movie("Fast & Furious", "Azione", "La serie verte sulle vicende di due personaggi, Dominic Toretto, interpretato da Vin Diesel, e Brian O'Conner, interpretato da Paul Walker; tuttavia, a seguito della prematura scomparsa di Walker, il personaggio di O'Conner è stato fatto uscire di scena a partire dall'ottavo film. Negli anni la serie si è trasformata sempre più in un ensemble cast e ha visto aggiungersi, fra gli altri, icone del cinema d'azione come Dwayne Johnson, Jason Statham, Kurt Russell, Charlize Theron e John Cena.");

var_dump($fastEFurious);
//$title_b = $fastEFurious->getTitle();
//$category_b = $fastEFurious->getCategory();
//$description_b = $fastEFurious->getDescription();
//$fastEFurious->play();


$movies = [];
array_push($movies, $transformers, $fastEFurious);

var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    
    <div class="movie">
        <?php foreach ($movies as $movie): ?>
            <h2>Titolo: <?php echo $movie->getTitle(); ?></h2>
            <p>Categoria: <?php echo $movie->getCategory(); ?></p>
            <p>Descrizione: <?php echo $movie->getDescription(); ?></p>
        <?php endforeach ?>
    </div>
    <!-- /.movie -->

</body>
</html>