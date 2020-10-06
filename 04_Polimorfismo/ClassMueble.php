<?php
    require_once("ClassProducto.php");

    class Mueble extends Producto
    {
        public $strColor;
        public $strMaterial;
        public $strStatus ="Agotado";//redefinicion de propiedad y metodos

        public function __construct(string $descripcion, float $precio, string $color, string $material)
        {
            parent::__construct($descripcion, $precio);
            $this->strMaterial = $material;
            $this->strColor = $color;

        }

         public function getInfoProducto()
            {
                $arrProducto = Array('producto'=> $this->strDescripcion,
                                    'precio' => $this->fltPrecio,
                                    'Stock M' => $this->intStockMinimo,
                                    'Estado' => $this->strStatus,
                                    'Color' => $this->strColor,
                                    'Material' => $this->strMaterial,
                );
                return $arrProducto;
            }

    }//End Clase
?>