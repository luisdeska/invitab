<?php

class CConection{
    function Conexion(){
        $host="localhost" ;
        $dbname="DBPrueba";
        $username="postgres";
        $password="admin";

        try{
            $conn = new PDO ("pgsql:host=$host; dbname=$dbname", $username, $password);
            echo "Conexion exitosa";
        }
        catch(PDOException $exp){
            echo("Error al conectarse a la base de datos, $exp");
        }

        return $conn;
    }
}

?>