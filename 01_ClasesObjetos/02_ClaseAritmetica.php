<?php

    //Crear la clase  Ctrl + Shift + d
    class Operaciones{
        public $numero1     = 0;
        public $numero2     = 0;
        public $resultado   = 0;

        function __construct($intCant1, $intCant2){
            //propiedades le asignamos sus parametros
            $this->numero1 = $intCant1;
            $this->numero2 = $intCant2;

            //NO se hacen operaciones
        }
        //metodos de envio getters y setter
        public function getSuma(){
            $this->resultado = $this->numero1 + $this->numero2;
            return $this->resultado;
        }


    }
?>