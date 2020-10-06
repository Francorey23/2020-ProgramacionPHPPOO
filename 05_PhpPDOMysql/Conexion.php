<?php

    class Conexion
    {

        //declarar las propiedades de conexion a bd Mysql private

        private $host       =  "localhost";
        private $user       =  "root";
        private $password   =  "";
        private $db         =  "aerolinea";
        private $conect;

        public function __construct(){
            $conexionbd = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";

            try {
                $this->conect = new PDO($conexionbd, $this->user, $this->password);
                //Para verificar los errores de conexion 
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               // echo "Conexión exitosa...";

            } catch (Exception $e) {
                $this->conect = 'Error de conexión..';
                echo "Error: ".$e->getMessage();
            }



        }
        
        public function conect()
        {
            return $this->conect;
        }


    }//end clase

    //$conect = new Conexion();

?>