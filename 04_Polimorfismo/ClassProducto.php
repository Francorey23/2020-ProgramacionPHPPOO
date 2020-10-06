<?php
class Producto {

    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";

    public function __construct(string $descripcion, float $precio)
    {
        $this->strDescripcion   = $descripcion;
        $this->fltPrecio        = $precio;
    }

    //Metodo para devolver la información
    public function getInfoProducto()
    {
        $arrProducto = Array('producto'=> $this->strDescripcion,
                            'precio' => $this->fltPrecio,
                            'Stock M' => $this->intStockMinimo,
                            'Estado' => $this->strStatus,
        );
        return $arrProducto;
    }


}//End clase

?>