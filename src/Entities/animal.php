<?php
abstract class Animal {
    protected string $nom;
    
    // Méthodes
    public  function info(): string
    {
        return "Je suis un animal je m'appele {$this->nom} ";
        
    }
   public function setNom($nomADonner){
    $this -> nom = $nomADonner;
   }
 
  

  
}



