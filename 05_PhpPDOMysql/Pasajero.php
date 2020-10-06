<?php
    require_once("Conexion.php");

    class Pasajero extends Conexion{

        private $pCedula;
        private $pNombres;
        private $pCorreo;
        private $pCelular;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
        // Proceso para crear el Cread Read Update Delete de Pasajero
        public function InsertarPasajero(string $cedula, string $nombres, string $correo, string $celular)
        {
            $this->pCedula      =   $cedula;
            $this->pNombres     =   $nombres;
            $this->pCorreo      =   $correo;
            $this->pCelular     =   $celular;

            //alistar la instruccion Sql para registrar o cargar datos
            $Sql = "INSERT INTO pasajero(pcedula, pnombres, pcorreo, pcelular) VALUES(?,?,?,?)";
            $insert = $this->conexion->prepare($Sql);
            $arrData = array($this->pCedula, $this->pNombres, $this->pCorreo, $this->pCelular);

            $resInsert  = $insert->execute($arrData);
            $idInsert   = $this->conexion->lastInsertId();
            return $idInsert;
        }

        //  Mostrar los datos de pasajero

        public function getPasajero()
        {
            $Sql = "SELECT pcedula, pnombres, pcorreo, pcelular FROM pasajero";
            $execute = $this->conexion->query($Sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function ActualizarPasajero(string $cedula, string $nombres, string $correo, string $celular)
        {
            $this->pCedula      =   $cedula;
            $this->pNombres     =   $nombres;
            $this->pCorreo      =   $correo;
            $this->pCelular     =   $celular;

            $Sql = "UPDATE pasajero SET pnombres=?, pcorreo=?, pcelular=? WHERE pcedula=$cedula";
            $update = $this->conexion->prepare($Sql);
            $arrData = array($this->pNombres, $this->pCorreo, $this->pCelular);
            $resUpdate = $update->execute($arrData);
            return $resUpdate;


        }

        public function getMostrarPasajero(string $cedula)
        {
            $Sql = "SELECT pcedula, pnombres, pcorreo, pcelular FROM pasajero WHERE pcedula = ?";
            $arraCedula = array($cedula);
            $conCedula = $this->conexion->prepare($Sql);
            $conCedula->execute($arraCedula);
            $ResCedula = $conCedula->fetch(PDO::FETCH_ASSOC);
            return $ResCedula; 


        }

        public function delPasajero(string $cedula)
        {
            $Sql = "DELETE FROM pasajero WHERE pcedula = ?";
            $arraCedula = array($cedula);
            $delete = $this->conexion->prepare($Sql);
            $delPasajero = $delete->execute($arraCedula);
            return $delPasajero;
        }

        

    }//end clase
?>