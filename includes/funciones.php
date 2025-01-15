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
        echo '<pre>';
        var_dump(mysqli_fetch_assoc($consulta));
        echo '</pre>';

        
        //cerrar la conexion (opcional)
        $resultado = mysqli_close($db);
        echo $resultado;
    } catch (\Throwable $e) {
        var_dump($e);
    }
}

obtener_servicios();
