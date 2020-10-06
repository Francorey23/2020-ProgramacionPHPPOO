<?php

    class Usuario{

        private $strNombre;
        private $strEmail;
        public $strTipo;
        private $intClave;
        protected $strfechaRegistro;
        static $strEstado = "Activo";
    

        function __construct(string $nombre, string $email, string $tipo){
            
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo 	= $tipo;
            $this->intClave = rand();
            $this->strfechaRegistro = date('d-m-Y');


        }
        //Definir un metodo Get para extraer la informacion de la propiedad
        public function getNombre():string
        {
            return $this->strNombre;
        }

        public function getEmail():string
        {
            return $this->strEmail;
        }

        public function getperfil(){
            echo "<h1>Datos del usuario </h1> <br>";
            echo "Nombre: "             . $this->strNombre."<br>"; 
            echo "Email: "              . $this->strEmail."<br>"; 
            echo "Clave: "              . $this->intClave."<br>"; 
            echo "Fecha de Registro: "  . $this->strfechaRegistro."<br>"; 
            echo "Estado: "             . self::$strEstado."<br>"; 
            //en el metodo constructor agregamos un valor a la fecha de registro

        }

        //crear un metodo set que permita cambiar los datos de la propiedad
        public function setcambiarClave($cambiopassword){
                $this->intClave = $cambiopassword;
        }

    }//End Clase

?>