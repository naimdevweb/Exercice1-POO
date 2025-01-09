<?php
class Formule1 {
    private $speed = 0;

    
        // Méthodes
        public function drive() {
            echo "vroom vroom a $this->speed km/h <br>";
            return $this;
        }
        public function shiftGear() {
            $this->speed += 3;
            return $this;
        }

      
    }

    $myformule1 = new Formule1();
    $myformule1 -> drive() -> shiftGear() -> drive();
   