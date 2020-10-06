<?php
    require_once("ClassMesa.php");

    //crear objeto de la clase mueble indicar descripcion y valor

    $objEscritorio = new Producto("Escritorio Unipersonal", 243000.5);
    $MostrarProducto = $objEscritorio->getInfoProducto();

    print_r('<pre>');
    print_r($MostrarProducto);
    print_r('</pre>');

    $objCloset = new Mueble("Closet unipersonal", 305000, "Gris", "Pandala");
    
    $MostrarObjCloset = $objCloset->getInfoProducto();
    print_r('<pre>');
    print_r($MostrarObjCloset);
    print_r('</pre>');

?>