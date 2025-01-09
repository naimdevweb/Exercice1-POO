<?php
class Chien extends Mammifere{

    private int $age;
    
    public function crie(): string
    {
        return " <br> j'aboie et j'ai {$this->age} ans";
        
    }
    public function __construct($nom,$taille,$age) {
        $this->nom = $nom;
        $this->taille = $taille;
        $this->age = $age;
    }

   
}