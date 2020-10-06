<?php
    //requiere_one detecta errores
    require_once("02_ClaseAritmetica.php");

    $objsuma1 = new Operaciones(25000, 9000);

    echo $objsuma1->getSuma();
    echo "<br><br>";
    $objsuma2 = new Operaciones(85000, 9000);
    echo $objsuma2->getSuma();
?>