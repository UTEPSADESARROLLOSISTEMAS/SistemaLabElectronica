<?php


require_once "../SistemaLabElectronica/modelos/usoDeLaboratorio_Modelo.php";
require_once "../SistemaLabElectronica/modelos/principal_Modelo.php";

$usoDeLaboratorio_Modelo = new usoDeLaboratorio_Modelo();

/*---------------------------------------------------------------------------------------------*/
/*------------------------------------ EXTRACCION DE DATOS ------------------------------------*/
class usoDeLaboratorio_Controlador
{

    function ExtraerCantidad($estado)
    {

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($estado) {
            case "Reservas Confirmadas":
                $resultado = usoDeLaboratorio_Modelo::CantidadDeReservasConfirmadas($ConexionBD);
                break;
            case "Solicitudes de Reserva":
                $resultado = usoDeLaboratorio_Modelo::CantidadDeSolicitudesDeReserva($ConexionBD);
                break;
            case "Reservas Canceladas":
                $resultado = usoDeLaboratorio_Modelo::CantidadDeReservasCanceladas($ConexionBD);
                break;
            case "Asistencia de Estudiantes":
                $resultado = usoDeLaboratorio_Modelo::CantidadDeAsistenciasDeEstudiantes($ConexionBD);
                break;

            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        usoDeLaboratorio_Modelo::imprimirCantidad($resultado);

        principalModelo::cerrarLaConexionALaBD($ConexionBD);

    }
    function ExtraerTablas($condicion)
    {

        $ConexionBD = principalModelo::conectarALaBaseDeDatos();

        switch ($condicion) {

            case "Reservas Para Hoy":
                usoDeLaboratorio_Modelo::ExtraerTabla_ReservasParaHoy($ConexionBD);
                break;
            case "Reservas Modulares":
                usoDeLaboratorio_Modelo::ExtraerTabla_ReservasModulares($ConexionBD);
                break;
            case "Reservas Posteriores":
                usoDeLaboratorio_Modelo::ExtraerTabla_ReservasPosteriores($ConexionBD);
                break;
            case "Reservas Por Confirmar":
                usoDeLaboratorio_Modelo::ExtraerTabla_ReservasPorConfirmar($ConexionBD);
                break;
            case "Materias para un Select":
                usoDeLaboratorio_Modelo::ExtraerTabla_MateriasEnUnSelect($ConexionBD);
                break;
            case "Docentes para un Select":
                usoDeLaboratorio_Modelo::ExtraerTabla_DocentesEnUnSelect($ConexionBD);
                break;
            case "Soportes de hoy":
                usoDeLaboratorio_Modelo::ExtraerTabla_Soportes_de_hoy($ConexionBD);
                break;
            default:
                echo "Dato no Valido de Extraccion de cantidad";
        }

        principalModelo::cerrarLaConexionALaBD($ConexionBD);


    }
}
