<?php
class MachineACafe {
    private bool $cafe;
    private string $marque;
    private bool $enFonction;
    private bool $sucre;
    private float $monnayeur;
    private float $prixCafe;
    private float $prixSucre;

    public function __construct(string $marque = 'Senseo') {
        $this->marque = $marque;
        $this->cafe = false;
        $this->enFonction = false;
        $this->sucre = false;
        $this->monnayeur = 0.0;
        $this->prixCafe = 2.0;
        $this->prixSucre = 0.5;
    }

    public function setPrixCafe(float $prix): void {
        $this->prixCafe = $prix;
    }

    public function getPrixCafe(): float {
        return $this->prixCafe;
    }

    public function setPrixSucre(float $prix): void {
        $this->prixSucre = $prix;
    }

    public function getPrixSucre(): float {
        return $this->prixSucre;
    }

    public function getArgentInsere(): float {
        return $this->monnayeur;
    }

    public function getCafePrepare(): bool {
        return $this->cafe;
    }

    public function getSucreAjoute(): bool {
        return $this->sucre;
    }

    public function allumage(): string {
        if ($this->enFonction) {
            return "La machine est déjà allumée. <br>";
        } else {
            $this->enFonction = true;
            return "{$this->marque} - La machine s'allume. <br>";
        }
    }

    public function mettreUneDosette(): string {
        $prixTotal = $this->prixCafe;

        if ($this->sucre) {
            $prixTotal += $this->prixSucre;
        }

        if ($this->monnayeur < $prixTotal) {
            return "Vous n'avez pas assez d'argent pour ajouter une dosette. <br>";
        }

        if ($this->cafe) {
            return 'Il y a déjà une dosette. <br>';
        } else {
            $this->cafe = true;
            return 'Dosette ajoutée. <br>';
        }
    }

    public function faireDuCafe(): string {
        $prixTotal = $this->prixCafe;

        if ($this->sucre) {
            $prixTotal += $this->prixSucre;
        }

        if ($this->monnayeur < $prixTotal) {
            return "Vous n'avez pas assez d'argent pour faire du café. <br>";
        }

        if ($this->enFonction && $this->cafe) {
            $sucreStatus = $this->sucre ? 'avec sucre' : 'sans sucre';
            return "Le café est prêt, servi $sucreStatus. <br>";
        } elseif (!$this->enFonction) {
            return 'Veuillez allumer la machine. <br>';
        }
    }

    public function offMachine(): string {
        if (!$this->enFonction) {
            return 'La machine est déjà éteinte. <br>';
        } else {
            $this->enFonction = false;
            return 'La machine est éteinte. <br>';
        }
    }

    public function ajouterSucre(int $quantite): string {
        if (!$this->enFonction) {
            return 'La machine est éteinte, vous ne pouvez pas ajouter de sucre. <br>';
        }

        if ($quantite <= 0) {
            return 'aucun sucre ajouter. <br>';
        }

        $prixTotal = $this->prixSucre * $quantite;

        if ($this->monnayeur < $prixTotal) {
            return "Vous n'avez pas assez d'argent pour ajouter $quantite sucre(s). <br>";
        }

        $this->sucre = true;
        return "$quantite sucre(s) ajouté(s) au café. <br>";
    }

    public function retirerSucre(): string {
        if (!$this->enFonction) {
            return 'La machine est éteinte, vous ne pouvez pas retirer de sucre. <br>';
        }

        if (!$this->sucre) {
            return 'Le café ne contient pas de sucre. <br>';
        } else {
            $this->sucre = false;
            return 'Sucre retiré du café. <br>';
        }
    }

    public function verifierSucre(): string {
        if ($this->sucre) {
            return 'Le café contient du sucre. <br>';
        } else {
            return 'Le café ne contient pas de sucre. <br>';
        }
    }

    public function insererArgent(float $montant): string {
        if (!$this->enFonction) {
            return 'La machine est éteinte, vous ne pouvez pas insérer de l\'argent. <br>';
        }
        $this->monnayeur += $montant;
        return "Vous avez inséré $montant € <br>";
    }

    public function acheterCafe(): string {
        if (!$this->enFonction) {
            return 'La machine est éteinte, vous ne pouvez pas acheter de café. <br>';
        }

        $prixTotal = $this->prixCafe;

        // Si le sucre est ajouté, on ajoute le prix des sucres
        if ($this->sucre) {
            $prixTotal += $this->prixSucre;
        }

        if ($this->monnayeur < $prixTotal) {
            return 'Vous n\'avez pas assez d\'argent pour acheter un café. <br>';
        }

        // Si l'utilisateur a suffisamment d'argent
        $montantRestant = $this->monnayeur - $prixTotal;
        $this->monnayeur = 0;

        return "Café acheté avec succès. Monnaie rendue : $montantRestant € <br>";
    }
}
?>

