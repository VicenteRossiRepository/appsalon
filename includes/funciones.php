<?php

function obtener_servicios()
{
    try {
        //importar credenciales
        require 'database.php'; //Obtiene variable $db
        //Consulta SQL
        $sql = "SELECT * FROM servicios";
        //Ejecutar consulta
        $consulta = mysqli_query($db, $sql);
        //Devolver resultados
        return $consulta;

        //cerrar la conexion (opcional)
        mysqli_close($db);
    } catch (\Throwable $e) {
        var_dump($e);
    }
}

obtener_servicios();
