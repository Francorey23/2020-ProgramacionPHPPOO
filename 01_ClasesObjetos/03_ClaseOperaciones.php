<?php

    //Crear la clase  Ctrl + Shift + d
    class Operaciones{
        public $numero1     = 0;
        public $numero2     = 0;
        public $resultado   = 0;
        public $simbolo;
    
    function __construct(int $cant1, int $cant2, string $signo){

        $this->numero1  = $cant1;
        $this->numero2  = $cant2;
        $this->simbolo  = $signo;

    }

    public function opera(){

        if  ($this->simbolo == "+"){
            $this->resultado = $this->numero1 + $this->numero2;
            return $this->resultado; 
        }elseif($this->simbolo == "-"){
            $this->resultado = $this->numero1 - $this->numero2;
            return $this->resultado; 
        }
    }


}//End clase

?>