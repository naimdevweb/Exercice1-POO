<?php
class MachineACafe {
    private bool $cafe;
    private string $marque;
    private bool $enFonction;
    private bool $sucre;
    private float $monnayeur; 
    private float $prixCafe; 
    private float $prixSucre; 

    public function __construct(string $marque = 'senseo<br> ') {
        $this->marque = $marque;
        $this->cafe = false;
        $this->enFonction = false;
        $this->sucre = false;
        $this->monnayeur = 0.0;  
        $this->prixCafe = 2.0;   
        $this->prixSucre = 0.5;  
    }

    // Setter pour définir le prix du café
    public function setPrixCafe(float $prix): void {
        $this->prixCafe = $prix;
    }

    // Getter pour récupérer le prix du café
    public function getPrixCafe(): float {
        return $this->prixCafe;
    }

    // Setter pour définir le prix du sucre
    public function setPrixSucre(float $prix): void {
        $this->prixSucre = $prix;
    }

    // Getter pour récupérer le prix du sucre
    public function getPrixSucre(): float {
        return $this->prixSucre;
    }

    public function allumage() {
        if ($this->enFonction == true) {
            return " la machine est déjà allumée <br>";
        } else {
            $this->enFonction = true;
            return "{$this->marque} la machine s'allume <br>";
        }
    }

    public function mettreUneDosette() {
        
        $prixTotal = $this->prixCafe + $this->sucre ? $this->prixSucre : 0;

        if ($this->monnayeur < $prixTotal) {
            return "Vous n'avez pas assez d'argent pour ajouter une dosette. <br>";
        }

        if ($this->cafe == true) {
            return 'Il y a déjà une dosette <br>';
        } else {
            $this->cafe = true;
            return 'Mettre une dosette <br>';
        }
    }

    public function faireDuCafe() {
        
        $prixTotal = $this->prixCafe + ($this->sucre ? $this->prixSucre : 0);

        if ($this->monnayeur < $prixTotal) {
            return "Vous n'avez pas assez d'argent pour faire du café. <br>";
        }

        if ($this->enFonction == true && $this->cafe == true) {
            $sucreStatus = $this->sucre ? 'avec sucre' : 'sans sucre';
            return "Le café est prêt, servi $sucreStatus <br>";
        } else if ($this->enFonction == false) {
            return 'Veuillez allumer la machine <br>';
        }
    }

    public function offMachine() {
        if ($this->enFonction == false) {
            return 'La machine est déjà éteinte <br>';
        } else {
            $this->enFonction = false;
            return 'On éteint la machine <br>';
        }
    }

    public function ajouterSucre() {
        if ($this->enFonction == false) {
            return 'La machine est éteinte, vous ne pouvez pas ajouter de sucre. <br>';
        }

        if ($this->sucre == false) {
            $this->sucre = true;
            return 'Sucre ajouté au café <br>';
        } else {
            return 'Le café contient déjà du sucre <br>';
        }
    }

    public function retirerSucre() {
        if ($this->enFonction == false) {
            return 'La machine est éteinte, vous ne pouvez pas retirer le sucre. <br>';
        }

        if ($this->sucre == true) {
            $this->sucre = false;
            return 'Sucre retiré du café <br>';
        } else {
            return 'Le café ne contient pas de sucre <br>';
        }
    }

    public function verifierSucre() {
        return $this->sucre ? 'Le café contient du sucre <br>' : 'Le café ne contient pas de sucre <br>';
    }

    // Méthode pour insérer de l'argent dans la machine
    public function insererArgent(float $montant) {
        if ($this->enFonction == false) {
            return 'La machine est éteinte, vous ne pouvez pas insérer de l\'argent. <br>';
        }
        $this->monnayeur += $montant;
        return "Vous avez inséré $montant € <br>";
    }

    // Méthode pour acheter un café avec ou sans sucre
    public function acheterCafe() {
        if ($this->enFonction == false) {
            return 'La machine est éteinte, vous ne pouvez pas acheter de café. <br>';
        }

      
        $prixTotal = $this->prixCafe + $this->sucre ? $this->prixSucre : 0;

        if ($this->monnayeur < $prixTotal) {
            return 'Vous n\'avez pas assez d\'argent pour acheter un café. <br>';
        }

        $montantRestant = $this->monnayeur - $prixTotal;
        $this->monnayeur = 0;  
        return "Café acheté avec succès. Monnaie rendue : $montantRestant € <br>";
    }
}
