<?php

require_once("03_ClaseOperaciones.php");

$objejercicio1 = new Operaciones(1200,500,"+");
$objejercicio2 = new Operaciones(1200,500,"-");


echo $objejercicio1->opera()."<br>";
echo $objejercicio2->opera();

?>