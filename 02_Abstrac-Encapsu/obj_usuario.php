<?php

    require_once("ClaseUsuario.php");

    $objUsuario1 = new Usuario("Juan Díaz", "JuanD@sistemas.com", "Usuario");
    echo $objUsuario1->getNombre()."<br>";
    echo $objUsuario1->getEmail()."<br><br>";
    echo $objUsuario1->getperfil()."<br>";


    $objUsuario2 = new Usuario("Eliana Garces", "Eliana@sistemas.com", "Administrador");
    echo $objUsuario2->getperfil()."<br>";
    $objUsuario2->setcambiarClave(123456789);
    echo $objUsuario2->getperfil()."<br>";
    

?>