<?php
require_once("../utils/autoloader.php");

    $myformule1 = new Formule1();
    echo $myformule1 -> drive();
    
    $myformule1 -> shiftGear(50);
    echo $myformule1 -> drive();

    $myformule1 -> shiftGear(50);
    echo $myformule1 -> drive();
   
   