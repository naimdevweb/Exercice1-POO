<?php
require_once("../utils/autoloader.php");
$machine = new MachineACafe();
echo $machine->allumage();
echo $machine->allumage();
echo $machine->setPrixCafe(2.50);
echo $machine->setPrixSucre(2.50);
echo $machine->insererArgent(5);
echo $machine->mettreUneDosette();
echo $machine->acheterCafe(); 

 

  