<?php
require_once("../utils/autoloader.php");
$chien = new Chien("bob","grand",18);

echo $chien -> info();



echo $chien -> infoplus();


echo $chien -> crie();
