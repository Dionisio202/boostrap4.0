<?php
$opc=$_SERVER["REQUEST_METHOD"];
include_once("seleccionar.php");
include_once("insertar.php");
include_once("actualizar.php");
include_once("eliminar.php");
switch($opc){
    case "GET":
        $cedula=$_GET["cedula"];
        Seleccionar::Buscar($cedula);
        break;
    case "POST":
        Insertar::Insertar();
        break;
    case "PUT":
        parse_str(file_get_contents("php://input"),$datos);
        Actualizar::actualizar($datos);
        break;
    case "DELETE":
        $cedula=$_GET["cedula"];
        Eliminar::eliminar($cedula);
        break;
}

?>