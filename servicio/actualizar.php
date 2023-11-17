<?php
class Actualizar{
    public static function actualizar($datos){
        $saldo=$datos['saldo'];
        $cuenta=$datos['cuenta'];
        $tipo=$datos['tipo'];
        include_once("conexion.php");
        $objeto=new Conexion();
        $respuesta=$objeto->Conectar();
        if(strtolower($tipo)=='deposito'){
        $udpate="UPDATE cuenta set saldo=saldo+$saldo WHERE id_cue='$cuenta'";
        }
       
        $resultado=$respuesta->prepare($udpate);
        $resultado->execute();
        echo json_encode($resultado);
    }
}
?>