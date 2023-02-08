<?php

require_once "./modelos/vistasModelo.php";


class vistasControlador extends vistasModelo{


        /*---------Controlador para obtener la plantilla-----------------*/

        public function obtener_plantilla_controlador(){

            return require_once "./vistas/plantilla.php";
        }

        /*---------Controlador para obtener la Vistas-----------------*/

        public function obtener_vistas_controlador(){

            if(isset($_GET['views'])){

                $ruta = explode("/",$_GET['views']);
                $respuesta=vistasModelo::obtener_vistas_model($ruta[0]);


            }else{

                $respuesta ="login";

            }
            return $respuesta;


        }



}