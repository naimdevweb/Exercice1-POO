<?php
class Formule1 {
    private int $speed = 0;

    
        // Méthodes
        public function drive(): string {
            return "vroom vroom a {$this->speed} km/h <br>";
            return $this;
        }
        public function shiftGear(int $nombre): self {
            $this->speed += $nombre;
            return $this;
        }

      
    }