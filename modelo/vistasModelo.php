<?php

class vistasModelo
{

    /*------Modelo para obtener las vistas-----------------*/
    protected static function obtener_vistas_model($vistas)
    {

        #Introducir las vistas sus nombres asi contenido-view.php
        $listaBlanca = ["Configuracion","Documentacion","Inicio","Inventario","login","Prestamos","Reportes","usoDeLaboratorio"];


        if (in_array($vistas, $listaBlanca)) {

            if (is_file("./vistas/contenidos/" . $vistas . "-vista.php")) {
                $contenido ="./vistas/contenidos/" . $vistas . "-vista.php";
            } else {

                $contenido = "404";
            }
        } elseif ($vistas == "login" || $vistas == "index") {

            $contenido = "login";
        } else {
            $contenido = "404";
        }

        return $contenido;
    }
}