<?php

    require_once("ClasePersona.php");

    class Cliente extends Persona{

        //crear la propiedad credito

        protected $fltCredito;

        function __construct(int $cedula, string $nombre, int $edad){

            parent::__construct($cedula, $nombre, $edad);
        }
        //muestra los valores de la propiedad
        public function getCredito():float{
            return $this->fltCredito;
        }
        //recibe los valores del objeto
        public function setCredito(float $credtido){
            $this->fltCredito = $credtido;
        }

    }//End clase
?>