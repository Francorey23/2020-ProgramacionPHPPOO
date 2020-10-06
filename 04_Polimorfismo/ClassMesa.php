<?php
    require_once("ClassMueble.php");

    class Mesa extends Mueble
    {
        private $strForma;
        private $strTamanio;

        public function __construct(string $descripcion, float $precio, string $color, string $material,string $forma, string $tamanio)
        {
            parent::__construct($descripcion, $precio, $color, $material);

            $this->strForma = $forma;            
            $this->strTamanio = $tamanio;            
        }


        //Redefino el metodo getInfoproducto con los atributos de clase mesa
        public function getInfoProducto()
            {
                $arrProducto = Array('producto'=> $this->strDescripcion,
                                    'precio' => $this->fltprecio,
                                    'Stock M' => $this->intStockMinimo,
                                    'Estado' => $this->strStatus,
                                    'Color' => $this->strColor,
                                    'Material' => $this->strMaterial,
                                    'Tamaño' => $this->strTamanio,
                                    'Forma' => $this->strForma,
                );
                return $arrProducto;
            }

    }//End Clase
?>