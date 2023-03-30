<?php

class Movie {
    public $titolo;
    public $genere;
    public $lingua;

    public function __construct($titolo, $genere, $lingua) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->lingua = $lingua;
    }

    public function stampa() {
        echo $this->titolo . "- genere: " . $this->genere . "- lingua: " . $this->lingua . "<br>";
    }
}

$f1 = new Movie("The Banshees of Inisherin", "drammatico", "inglese");
$f2 = new Movie("Everything Everywhere All at Once", "commedia", "inglese");

$f1->stampa();
$f2->stampa();

?>
