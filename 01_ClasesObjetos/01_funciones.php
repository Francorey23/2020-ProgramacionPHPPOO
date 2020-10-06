<?php

    echo "Funciones con PHP";
    echo "<br><br>";

    //Estructuras Manejo de Ciclos IF Else Anidado - Empty, Str - IStrmp
    //switch case
    //Estructuras ciclos While - Do While For Foreach 

    //Manejo de funciones 1. Declar la funcion

    function holamundo(){
        return "Hola mundo";
    }

    echo holamundo();
    echo "<br><br>";

    function suma($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        return $resultado;

    }

    echo suma(300, 800);


?>