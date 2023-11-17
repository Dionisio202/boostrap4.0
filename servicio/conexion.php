<?php
    class Conexion{
        public function Conectar(){
        try{
            define("host","localhost");
        define("dbname","Transaccion");
        define("username","root");
        define("password","");
        $conexion= new PDO("mysql:host=".host.";dbname=".dbname,username,password);
        return $conexion;
        }catch(PDOException $e){
                die("erro de conexion ".$e->getMessage());
        }
    }}
?>