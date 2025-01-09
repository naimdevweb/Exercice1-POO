<?php
class MachineACafe{
private bool $cafe;
private string $marque;
private bool $enFonction;
 
public function __construct(string $marque = 'senseo<br> '){
    $this->marque = $marque;
    $this->cafe = false;
    $this->enFonction = false;
}

public function allumage(){
if($this->enFonction == true){
    return "{$this->marque} la machine est deja allumer <br>";
} else{
$this->enFonction = true;
return " {$this->marque}  la machine s'allume <br>";
}
}

public function mettreuneDosette(){
if($this->cafe == true ){
    return 'il ya deja une dossete <br>';
}else if ($this->cafe == false ){
    $this->cafe = true;
    return 'mettre une dossete <br>';
}
}

public function faireDuCafe(){
    if($this->enFonction == true && $this->cafe == true){
        return 'Le cafe est pret <br>';
    }else if ($this->enFonction == false){
        return 'veuillez allumer la machine <br>';
    }
}

public function offMachine(){
    // Si la machine est éteinte
    if($this->enFonction == false){

        // On dit que la machine est déja éteinte
        return 'la machine est deja eteint <br>';
    // Sinon si la machine est allumée
    }else if ($this->enFonction == true){
        // Eteindre la machine
        $this->enFonction = false;
        // On dit "allumez la machine
        return 'On éteint la machine  <br>';
    }
}
}