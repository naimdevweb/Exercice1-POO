<?php
require_once("../utils/autoloader.php");
$machine = new MachineACafe();

$machine->setPrixCafe(1);   
$machine->setPrixSucre(1);   


echo $machine->allumage(); 
echo "<br>";


echo $machine->insererArgent(3); 
echo "<br>";
echo $machine->mettreUneDosette(); 
echo "<br>";


echo $machine->ajouterSucre(1); 
echo "<br>";



echo $machine->acheterCafe();  
echo "<br>";


echo $machine->offMachine();  
echo "<br>";
echo $machine->insererArgent(2); 
echo "<br>";


echo $machine->acheterCafe(); 
echo "<br>";
echo $machine->mettreUneDosette(); 
echo "<br>";


?>

