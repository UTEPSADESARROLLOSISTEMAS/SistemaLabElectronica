<?php


require_once "../SistemaLabUtepsa/modelos/prestamos_Modelo.php";
require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";

class prestamos_Controlador{
    
    function ExtraerCantidad($estado){

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($estado) {
            case "Completados":
                $resultado = prestamos_Modelo::CantidadDePrestamosCompletados($ConexionBD);
                break;
            case "En Solicitud":
                $resultado = prestamos_Modelo::CantidadDePrestamosEnSolicitud($ConexionBD);
                break;
            case "Caducados":
                $resultado = prestamos_Modelo::CantidadDePrestamosCaducados($ConexionBD);
                break;
            case "Vigentes":
                $resultado = prestamos_Modelo::CantidadDePrestamosVigentes($ConexionBD);
                break;

            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        prestamos_Modelo::imprimirCantidad($resultado);

        principalModelo::cerrarLaConexionALaBD($ConexionBD);

    }
    function ExtraerTablas($condicion){
        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($condicion) {

            case "Prestamos Vigentes":
                $resultado = prestamos_Modelo::ExtraerTabla_PrestamosVigentes($ConexionBD);
                break;
           
            default:
                echo "Dato no Valido de Extraccion de tabla";
        }

        principalModelo::cerrarLaConexionALaBD($ConexionBD);


    }
}