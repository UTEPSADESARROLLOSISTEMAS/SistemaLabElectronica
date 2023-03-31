<?php


require_once "../SistemaLabUtepsa/modelos/inventario_Modelo.php";
require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";

class inventario_Controlador{
    
    function ExtraerCantidad($estado){

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($estado) {
            case "En Inventario":
                $resultado = inventario_Modelo::CantidadDeActivosEnInventario($ConexionBD);
                break;
            case "En Mantenimiento":
                $resultado = inventario_Modelo::CantidadDeActivosEnMantenimiento($ConexionBD);
                break;
            case "Fuera de Servicio":
                $resultado = inventario_Modelo::CantidadDeActivosFueraDeServicio($ConexionBD);
                break;
            case "En Prestamo":
                $resultado = inventario_Modelo::CantidadDeActivosEnPrestamo($ConexionBD);
                break;

            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        inventario_Modelo::imprimirCantidad($resultado);

        principalModelo::cerrarLaConexionALaBD($ConexionBD);

    }
    function ExtraerTablas($condicion){
        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($condicion) {

            case "Mantenimientos Programados":
                $resultado = inventario_Modelo::ExtraerTabla_MantProgramados($ConexionBD);
                break;
            case "Activos En Inventario":
                $resultado = inventario_Modelo::ExtraerTabla_ActEnInventarios($ConexionBD);
                break;

            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        principalModelo::cerrarLaConexionALaBD($ConexionBD);


    }
}