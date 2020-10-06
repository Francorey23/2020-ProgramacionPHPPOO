<?php
        require_once("Pasajero.php");

        $objPasajero = new Pasajero();

       // $insert  = $objPasajero->InsertarPasajero("24", "Mario Santiago", "marios@gamil.com", "311888121");
        //echo $insert;
        
        //Metodo eliminar 
        $delete = $objPasajero->delPasajero(24);
        echo $delete;

        // Mstar los registros de la tabla pasajero
         $objPasajero = $objPasajero->getPasajero();
        print_r("<pre>");
        print_r($objPasajero);
        print_r("</pre>");
 

        //Actualizar pasajero
        /* $ActualizarPasajero = $objPasajero->ActualizarPasajero("10","Mercedes Acosta", "mercedes12@gmail.com","3015007877");
        echo $ActualizarPasajero; */

        //Ver un pasajero individua
       /*  $pasajero = $objPasajero->getMostrarPasajero(19);
        print_r("<pre>");
        print_r($pasajero);
        print_r("</pre>"); */
?>