<?php
class Insertar{
    public static function Insertar(){
        include_once("conexion.php");
      
        $tipo=$_POST['tipo'];
        $monto=$_POST['monto'];
        $cuenta=$_POST['cuenta'];
        
        $objeto=new Conexion();
        $respuesta=$objeto->Conectar();
        $insert="INSERT INTO transacciones(tipo,monto,id_cue) VALUES('$tipo',$monto,'$cuenta')";
        $resultado=$respuesta->prepare($insert);
        $resultado->execute();
        echo json_encode($resultado);
    }
}
?>