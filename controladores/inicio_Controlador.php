<?php


require_once "../SistemaLabUtepsa/modelos/inicio_Modelo.php";
require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";

class inicio_Controlador{
    
    function ExtraerCantidad($estado){

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($estado) {
            case "ReservasConfirmadas":
                $resultado = inicio_Modelo::CantidadDeReservasConfirmadas($ConexionBD);
                break;
            case "SolicitudesDeReserva":
                $resultado = inicio_Modelo::CantidadDeSolicitudesDeReserva($ConexionBD);
                break;
            case "TareasAsignadas":
                $resultado = inicio_Modelo::CantidadDeTareasAsignadas($ConexionBD);
                break;
            case "PrestamosDeActivos":
                $resultado = inicio_Modelo::CantidadDePrestamosDeActivos($ConexionBD);
                break;
            case "SoporteAEstudiantes":
                $resultado = inicio_Modelo::CantidadDeSoporteAEstudiantes($ConexionBD);
                break;
            case "SoporteADocentes":
                $resultado = inicio_Modelo::CantidadDeSoporteADocentes($ConexionBD);
                break;
            case "ObjetosPerdidos":
                $resultado = inicio_Modelo::CantidadDeObjetosPerdidos($ConexionBD);
                break;
            case "ObjetosPerdidosDevueltos":
                $resultado = inicio_Modelo::CantidadDeObjetosPerdidosDevueltos($ConexionBD);
                break;
            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        inicio_Modelo::imprimirCantidad($resultado);

        principalModelo::cerrarLaConexionALaBD($ConexionBD);

    }

    function ExtraerTablas($condicion){

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($condicion) {

            case "Auxiliares":
                $resultado = inicio_Modelo::ExtraerTabla_Auxiliares($ConexionBD);
                break;
            case "ReservasParaHoy":
                $resultado = inicio_Modelo::ExtraerTabla_ReservasParaHoy($ConexionBD);
                break;

            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        principalModelo::cerrarLaConexionALaBD($ConexionBD);


    }
}