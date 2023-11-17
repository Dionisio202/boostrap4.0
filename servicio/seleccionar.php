<?php
class Seleccionar{
    public static function Buscar($cedula){
        include_once 'conexion.php';
        $objeto=new Conexion;
        $respuesta=$objeto->Conectar();
        $seleccionar="SELECT * from transacciones where id_cue=(SELECT id_cue from cuenta where id_cli='$cedula')";
        $resultado=$respuesta->prepare($seleccionar);
        $resultado->execute();
        $datos=$resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }
}

?>