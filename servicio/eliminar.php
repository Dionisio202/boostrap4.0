<?php
class Eliminar{
    public static function eliminar($cedula){
        include_once 'conexion.php';
        $objeto=new Conexion;
        $respuesta=$objeto->Conectar();
        $seleccionar="DELETE from transacciones where id_cue=(SELECT id_cue from cuenta where id_cli='$cedula')";
        $resultado=$respuesta->prepare($seleccionar);
        $resultado->execute();
        echo json_encode($resultado);
    }
}

?>