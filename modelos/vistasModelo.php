<?php

class vistasModelo
{

    /*------Modelo para obtener las vistas-----------------*/
    protected static function obtener_vistas_model($vistas)
    {

        #Introducir las vistas sus nombres asi contenido-view.php
        $listaBlanca = ["Configuracion","Inventario","Documentacion","Inicio","login","Prestamos","Reportes","UsoDeLaboratorio"];


        if (in_array($vistas, $listaBlanca)) {
            

            if (is_file("./vistas/contenido/".$vistas."-vista.php")){

                return $vistas;


            } else {

                return "404";

            }

        }else {

            return "404";

        }

    }
}