<?php

require_once("ClasePersona.php");

class Empleado extends Persona{

    protected $strPuesto;
    public $strEstado;  //Activado
    

     function __construct(int $cedula, string $nombre, int $edad){

            parent::__construct($cedula, $nombre, $edad);
            $this->strEstado = "Activado";
        }
    
        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }

        public function getPuesto():string{
            return $this->strPuesto;
        }
        
        public function getEstado():string{
            return $this->strEstado;
        }
       

}//End clase
