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
        echo "Il film è stato avviato";
    }

};

$transformers = new Movie("Transformers", "Azione/Fantascientifico", "Una voce narrante, quella di Optimus Prime, racconta dell'AllSpark, una fonte di energia a forma di cubo in grado di creare mondi e vita su di essi; due fazioni di esseri senzienti, una votata al bene e l'altra al male, si contendevano il suo potere sul proprio pianeta, che venne poi devastato e consumato. I robot partirono alla sua ricerca nell'universo, che dopo un lungo viaggio si perse, venendo poi localizzato sul pianeta Terra.");

var_dump('Film scelto: ' . $transformers->getTitle());
var_dump('Categoria: ' . $transformers->getCategory());
var_dump('Descrizione: ' . $transformers->getDescription());
$transformers->play();