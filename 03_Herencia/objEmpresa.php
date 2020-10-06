<?php
    require_once("ClaseCliente.php");
    require_once("ClaseEmpleado.php");

    $objEmpleado = new Empleado(1020202020020, "Martin Benitez", 48);
    echo $objEmpleado->getDatosPersonales();
    $objEmpleado->setPuesto("Administrador");
    echo "Puesto: ". $objEmpleado->getPuesto()."<br>";
    echo "Estado: ". $objEmpleado->getEstado();
    

    echo "<br><br>";

    $objCliente = new Cliente(3078494949, "Alejandra Cruz", 45);
    echo $objCliente->getDatosPersonales();
?>