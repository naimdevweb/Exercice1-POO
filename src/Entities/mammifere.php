<?php
class Mammifere extends Animal{
    protected string $taille;
    
   
    public function infoplus(): string
    {
        return " <br> je suis un mammifere et je suis {$this->taille}  ";
        
    }
    public function setTaille($tailleADonner){
        $this -> taille = $tailleADonner;
       }

    

  
  
}