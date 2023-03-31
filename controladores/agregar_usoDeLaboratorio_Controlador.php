<?php

require_once "../modelos/usoDeLaboratorio_Modelo.php";
require_once "../modelos/principal_Modelo.php";

$principalModelo = new principalModelo();

/*--------------------------------------------------------------------------------------------------------*/
/*------------------------------------ PUBLICACION O EDICION DE DATOS ------------------------------------*/

// determinar la acción según el valor del campo de entrada "accion"
$accion = $_POST['accion'];


// determinar la acción según el valor del campo de entrada "accion"
switch ($accion) {
    
    case "Agregar_Solicitud_de_Reserva":
        
        // obtener los datos del formulario para publicar "Solicitud de Reserva"
        $materiaSeleccionada = principalModelo::limpiar_cadena($_POST['materiaSeleccionada_reg']);
        $tituloDeLaReserva = principalModelo::limpiar_cadena($_POST['tituloDeLaReserva_reg']);
        $docenteSeleccionado = principalModelo::limpiar_cadena($_POST['docenteSeleccionado_reg']);
        $modalidadSeleccionada = principalModelo::limpiar_cadena($_POST['modalidadSeleccionada_reg']);
        $semestreSeleccionado = principalModelo::limpiar_cadena($_POST['semestreSeleccionado_reg']);
        $moduloSeleccionado = principalModelo::limpiar_cadena($_POST['moduloSeleccionado_reg']);
        $gestionSeleccionada = principalModelo::limpiar_cadena($_POST['gestionSeleccionada_reg']);
        $fechaInicioSeleccionada = principalModelo::limpiar_cadena($_POST['fechaInicioSeleccionada_reg']);
        $fechaFinalSeleccionada = principalModelo::limpiar_cadena($_POST['fechaFinalSeleccionada_reg']);
        $horaInicioSeleccionada = principalModelo::limpiar_cadena($_POST['horaInicioSeleccionada_reg']);
        $horaFinalSeleccionada = principalModelo::limpiar_cadena($_POST['horaFinalSeleccionada_reg']);
        $horarioSeleccionado = principalModelo::limpiar_cadena($_POST['horarioSeleccionado_reg']);
        $cantidadDeAsistentes = principalModelo::limpiar_cadena($_POST['cantidadDeAsistentes_reg']);
        $requerimientos = principalModelo::limpiar_cadena($_POST['requerimientos_reg']);

        principalModelo::verificar_StringVacio_O_Nulo($materiaSeleccionada, "Materia");

        if ($materiaSeleccionada == "NO_ES_MATERIA") {
            
            agregarSolicitudDeLaboratorio_NoEsMateria($tituloDeLaReserva,$docenteSeleccionado, $fechaInicioSeleccionada, $fechaFinalSeleccionada, $horaInicioSeleccionada, $horaFinalSeleccionada, $cantidadDeAsistentes, $requerimientos);

        } else if ($materiaSeleccionada != "Seleccione") {

            if ($modalidadSeleccionada == "Fecha_Especifica") {

                
                agregarSolicitudDeLaboratorio_EsMateria_conFechaEspecifica($materiaSeleccionada, $docenteSeleccionado, $fechaInicioSeleccionada, $fechaFinalSeleccionada, $horaInicioSeleccionada, $horaFinalSeleccionada, $cantidadDeAsistentes, $requerimientos);

            } else {
                
                agregarSolicitudDeLaboratorio_EsMateria_conModalidad($materiaSeleccionada, $docenteSeleccionado, $modalidadSeleccionada, $semestreSeleccionado, $moduloSeleccionado, $gestionSeleccionada, $horarioSeleccionado, $cantidadDeAsistentes, $requerimientos);
            }



        }
        else{
            
            echo '<script>alert("No llego nada de materia");</script>';
        }
        break;
    case "Agregar_Soporte":
        
        // llamar a la función de Agregar_Soporte
        $SoporteA = principalModelo::limpiar_cadena($_POST['select_SoporteA_spte_reg']);
        $MedioDeAtencion = principalModelo::limpiar_cadena($_POST['select_MedioDeAtencion_spte_reg']);
        $docenteSeleccionado = principalModelo::limpiar_cadena($_POST['docenteSeleccionado_spte_reg']);
        $NroDeRegistro = principalModelo::limpiar_cadena($_POST['input_NroDeRegistro_spte_reg']);
        $HoraInicio = principalModelo::limpiar_cadena($_POST['input_HoraInicio_spte_reg']);
        $HoraFinal = principalModelo::limpiar_cadena($_POST['input_HoraFinal_spte_reg']);
        $Problema = principalModelo::limpiar_cadena($_POST['input_Problema_spte_reg']);
        $Motivo = principalModelo::limpiar_cadena($_POST['input_Motivo_spte_reg']);
        $Solucion = principalModelo::limpiar_cadena($_POST['input_Solucion_spte_reg']);
        $Observaciones = principalModelo::limpiar_cadena($_POST['input_Observaciones_spte_reg']);


        principalModelo::verificar_StringVacio_O_Nulo($SoporteA, "Destino de Soporte");
        principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "El Medio de Atencion");
        
        if($SoporteA == "Docente"){

            if($MedioDeAtencion == "Presencial"){

                agregarSoporte_Presencial_A_Docente($MedioDeAtencion,$docenteSeleccionado,$Problema,$Solucion,$Observaciones);

            }else if($MedioDeAtencion == "Cafe Internet"){

                agregarSoporte_PresencialCI_A_Docente($MedioDeAtencion,$docenteSeleccionado,$HoraInicio,$HoraFinal,$Motivo);


            }else if($MedioDeAtencion == "Whatsapp"){

                agregarSoporte_Whatsapp_A_Docente($MedioDeAtencion,$docenteSeleccionado,$HoraInicio,$HoraFinal,$Problema,$Solucion,$Observaciones);


            }else if($MedioDeAtencion == "Facebook"){

                agregarSoporte_MediosVariados_A_Docente($MedioDeAtencion,$docenteSeleccionado,$Problema,$Solucion,$Observaciones);


            }

            
        }else if($SoporteA == "Estudiante"){
            if($MedioDeAtencion == "Presencial"){

                agregarSoporte_Presencial_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$Problema,$Solucion,$Observaciones);

            }else if($MedioDeAtencion == "Cafe Internet"){

                agregarSoporte_PresencialCI_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$HoraInicio,$HoraFinal,$Motivo);


            }else if($MedioDeAtencion == "Whatsapp"){

                agregarSoporte_Whatsapp_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$HoraInicio,$HoraFinal,$Problema,$Solucion,$Observaciones);


            }else if($MedioDeAtencion == "Facebook" || $MedioDeAtencion == "Otros Medios"){

                agregarSoporte_MediosVariados_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$Problema,$Solucion,$Observaciones);


            }
        }

        break;
    case "Editar_Soporte":
        $UsuarioAtendido = principalModelo::limpiar_cadena($_POST['select_UsuarioAtendido_spte_editar']);
        $MedioDeSoporte = principalModelo::limpiar_cadena($_POST['select_MedioDeSoporte_spte_editar']);
        $Motivo = principalModelo::limpiar_cadena($_POST['input_Motivo_spte_editar']);
        $HoraDeSolicitud = principalModelo::limpiar_cadena($_POST['input_horaSolicitud_spte_editar']);
        $id_Soporte = $principalModelo->encrypt_decrypt('decrypt',$_POST['id_del_Soporte']);


        verificar_para_editar_soporte($UsuarioAtendido,$MedioDeSoporte,$Motivo,$HoraDeSolicitud,$id_Soporte);


        break;

    case "Agregar_Materia":

        $NombreMateria = principalModelo::limpiar_cadena($_POST['input_NombreMateria_reg']);
        principalModelo::verificar_StringVacio_O_Nulo($NombreMateria, "Materia");

        //Transforma las letras minusculas en mayusculas
        $NombreMateria_En_Mayuscula = strtoupper($NombreMateria);

        //Subiendo a la base de datos
        $ConexionBD = principalModelo::conectarALaBaseDeDatos();
        usoDeLaboratorio_Modelo::Agregar_Materia($NombreMateria_En_Mayuscula,$ConexionBD);
        


        break;
    case "Agregar_Docente":
        
        


        break;
}


//Funciones para Agregar Solicitud de Reserva
function agregarSolicitudDeLaboratorio_NoEsMateria($tituloDeLaReserva,$docenteSeleccionado, $fechaInicioSeleccionada, $fechaFinalSeleccionada, $horaInicioSeleccionada, $horaFinalSeleccionada, $cantidadDeAsistentes, $requerimientos)
{
    principalModelo::verificar_StringVacio_O_Nulo($tituloDeLaReserva, "Titulo de la reserva");    
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente de la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($fechaInicioSeleccionada, "Fecha de Inicio");
    principalModelo::verificar_StringVacio_O_Nulo($fechaFinalSeleccionada, "Fecha de Final ");
    principalModelo::verificar_StringVacio_O_Nulo($horaInicioSeleccionada, "Hora que Inicia la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($horaFinalSeleccionada, "Hora que finaliza la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($cantidadDeAsistentes, "Cantidad de Asistentes");


    $datos = [
        "tituloDeLaReserva" => $tituloDeLaReserva,
        "docenteSeleccionado" => $docenteSeleccionado,
        "fechaInicioSeleccionada" => $fechaInicioSeleccionada,
        "fechaFinalSeleccionada" => $fechaFinalSeleccionada,
        "horaInicioSeleccionada" => $horaInicioSeleccionada,
        "horaFinalSeleccionada" => $horaFinalSeleccionada,
        "cantidadDeAsistentes" => $cantidadDeAsistentes,
        "requerimientos" => $requerimientos
    ];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();

    //Enviando a la funcion de "guardar en base de datos" que esta en "nuevoProductoModelo.php"
    usoDeLaboratorio_Modelo::añadirSolicitudDeReserva_NoEsMateria($datos,$ConexionBD);
    
}

function agregarSolicitudDeLaboratorio_EsMateria_conFechaEspecifica($materiaSeleccionada, $docenteSeleccionado, $fechaInicioSeleccionada, $fechaFinalSeleccionada, $horaInicioSeleccionada, $horaFinalSeleccionada, $cantidadDeAsistentes, $requerimientos)
{

    principalModelo::verificar_StringVacio_O_Nulo($materiaSeleccionada, "Materia de la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente de la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($fechaInicioSeleccionada, "Fecha de Inicio");
    principalModelo::verificar_StringVacio_O_Nulo($fechaFinalSeleccionada, "Fecha de Final ");
    principalModelo::verificar_StringVacio_O_Nulo($horaInicioSeleccionada, "Hora que Inicia la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($horaFinalSeleccionada, "Hora que finaliza la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($cantidadDeAsistentes, "Cantidad de Estudiantes");

    $datos = [
        "materiaSeleccionada" => $materiaSeleccionada,
        "docenteSeleccionado" => $docenteSeleccionado,
        "fechaInicioSeleccionada" => $fechaInicioSeleccionada,
        "fechaFinalSeleccionada" => $fechaFinalSeleccionada,
        "horaInicioSeleccionada" => $horaInicioSeleccionada,
        "horaFinalSeleccionada" => $horaFinalSeleccionada,
        "cantidadDeAsistentes" => $cantidadDeAsistentes,
        "requerimientos" => $requerimientos
    ];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();

    usoDeLaboratorio_Modelo::agregarSolicitudDeLaboratorio_Materia_conFechaEspecifica($datos,$ConexionBD);

}

function agregarSolicitudDeLaboratorio_EsMateria_conModalidad($materiaSeleccionada, $docenteSeleccionado, $modalidadSeleccionada, $semestreSeleccionado, $moduloSeleccionado, $gestionSeleccionada, $horarioSeleccionado, $cantidadDeAsistentes, $requerimientos)
{


    principalModelo::verificar_StringVacio_O_Nulo($materiaSeleccionada, "Materia de la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente de la reserva");
    principalModelo::verificar_StringVacio_O_Nulo($modalidadSeleccionada, "Modalidad");
    principalModelo::verificar_StringVacio_O_Nulo($semestreSeleccionado, "Semestre");
    principalModelo::verificar_StringVacio_O_Nulo($moduloSeleccionado, "Modulo");
    principalModelo::verificar_StringVacio_O_Nulo($gestionSeleccionada, "Gestion");
    principalModelo::verificar_StringVacio_O_Nulo($horarioSeleccionado, "Horario");
    principalModelo::verificar_StringVacio_O_Nulo($cantidadDeAsistentes, "Cantidad de Estudiantes");
    
    switch ($horarioSeleccionado) {
        case "07:15_10:00":
            $horaInicioSeleccionada = "07:15";
            $horaFinalSeleccionada = "10:00";
            break;
        case "10:15_13:00":
            $horaInicioSeleccionada = "10:15";
            $horaFinalSeleccionada = "13:00";
            break;
        case "13:15_16:00":
            $horaInicioSeleccionada = "13:15";
            $horaFinalSeleccionada = "16:00";
            break;
        case "15:00_19:00":
            $horaInicioSeleccionada = "15:00";
            $horaFinalSeleccionada = "19:00";
            break;
        case "16:15_19:00":
            $horaInicioSeleccionada = "16:15";
            $horaFinalSeleccionada = "19:00";
            break;
        case "19:15_21:45":
            $horaInicioSeleccionada = "19:15";
            $horaFinalSeleccionada = "21:45";
            break;


    }


    $datos = [
        "materiaSeleccionada" => $materiaSeleccionada,
        "docenteSeleccionado" => $docenteSeleccionado,
        "modalidadSeleccionada" => $modalidadSeleccionada,
        "semestreSeleccionado" => $semestreSeleccionado,
        "moduloSeleccionado" => $moduloSeleccionado,
        "gestionSeleccionada" => $gestionSeleccionada,
        "horaInicioSeleccionada" => $horaInicioSeleccionada,
        "horaFinalSeleccionada" => $horaFinalSeleccionada,
        "cantidadDeAsistentes" => $cantidadDeAsistentes,
        "requerimientos" => $requerimientos
    ];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSolicitudDeLaboratorio_Materia_conModalidad($datos, $ConexionBD);

}
//Funciones para Agregar Soporte
function agregarSoporte_Presencial_A_Docente($MedioDeAtencion,$docenteSeleccionado,$Problema,$Solucion,$Observaciones){

    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");
    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "docenteSeleccionado" => $docenteSeleccionado,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_Presencial_A_Docente_Modelo($datos,$ConexionBD);

}
function agregarSoporte_PresencialCI_A_Docente($MedioDeAtencion,$docenteSeleccionado,$HoraInicio,$HoraFinal,$Motivo){


    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente");
    principalModelo::verificar_StringVacio_O_Nulo($HoraInicio, "Hora Inicio");
    principalModelo::verificar_StringVacio_O_Nulo($HoraFinal, "Hora Final");
    principalModelo::verificar_StringVacio_O_Nulo($Motivo, "Motivo");
    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "docenteSeleccionado" => $docenteSeleccionado,
        "HoraInicio" => $HoraInicio,
        "HoraFinal" => $HoraFinal,
        "Motivo" => $Motivo];
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_PresencialCI_A_Docente_Modelo($datos,$ConexionBD);
}
function agregarSoporte_Whatsapp_A_Docente($MedioDeAtencion,$docenteSeleccionado,$HoraInicio,$HoraFinal,$Problema,$Solucion,$Observaciones){


    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente");
    principalModelo::verificar_StringVacio_O_Nulo($HoraInicio, "Hora Inicio");
    principalModelo::verificar_StringVacio_O_Nulo($HoraFinal, "Hora Final");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");
    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "docenteSeleccionado" => $docenteSeleccionado,
        "HoraInicio" => $HoraInicio,
        "HoraFinal" => $HoraFinal,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_Whatsapp_A_Docente_Modelo($datos,$ConexionBD);
}
function agregarSoporte_MediosVariados_A_Docente($MedioDeAtencion,$docenteSeleccionado,$Problema,$Solucion,$Observaciones){

    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($docenteSeleccionado, "Docente");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");
    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "docenteSeleccionado" => $docenteSeleccionado,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_MediosVariados_A_Docente_Modelo($datos,$ConexionBD);
}
function agregarSoporte_Presencial_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$Problema,$Solucion,$Observaciones){

    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($NroDeRegistro, "NroDeRegistro");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");

    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "NroDeRegistro" => $NroDeRegistro,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_Presencial_A_Estudiante_Modelo($datos,$ConexionBD);

}
function agregarSoporte_PresencialCI_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$HoraInicio,$HoraFinal,$Motivo){

    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($NroDeRegistro, "NroDeRegistro");
    principalModelo::verificar_StringVacio_O_Nulo($HoraInicio, "HoraInicio");
    principalModelo::verificar_StringVacio_O_Nulo($HoraFinal, "HoraFinal");
    principalModelo::verificar_StringVacio_O_Nulo($Motivo, "Motivo");

    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "NroDeRegistro" => $NroDeRegistro,
        "HoraInicio" => $HoraInicio,
        "HoraFinal" => $HoraFinal,
        "Motivo" => $Motivo];
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_PresencialCI_A_Estudiante_Modelo($datos,$ConexionBD);
}
function agregarSoporte_Whatsapp_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$HoraInicio,$HoraFinal,$Problema,$Solucion,$Observaciones){

    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($NroDeRegistro, "NroDeRegistro");
    principalModelo::verificar_StringVacio_O_Nulo($HoraInicio, "HoraInicio");
    principalModelo::verificar_StringVacio_O_Nulo($HoraFinal, "HoraFinal");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");

    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "NroDeRegistro" => $NroDeRegistro,
        "HoraInicio" => $HoraInicio,
        "HoraFinal" => $HoraFinal,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_Whatsapp_A_Estudiante_Modelo($datos,$ConexionBD);
}
function agregarSoporte_MediosVariados_A_Estudiante($MedioDeAtencion,$NroDeRegistro,$Problema,$Solucion,$Observaciones){


    principalModelo::verificar_StringVacio_O_Nulo($MedioDeAtencion, "Medio De Atencion");
    principalModelo::verificar_StringVacio_O_Nulo($NroDeRegistro, "NroDeRegistro");
    principalModelo::verificar_StringVacio_O_Nulo($Problema, "Problema");
    principalModelo::verificar_StringVacio_O_Nulo($Solucion, "Solucion");

    $datos = [
        "MedioDeAtencion" => $MedioDeAtencion,
        "NroDeRegistro" => $NroDeRegistro,
        "Problema" => $Problema,
        "Solucion" => $Solucion,
        "Observaciones" => $Observaciones];
        
    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::agregarSoporte_MediosVariados_A_Estudiante_Modelo($datos,$ConexionBD);
}

function verificar_para_editar_soporte($UsuarioAtendido,$MedioDeSoporte,$Motivo,$HoraDeSolicitud,$id_Soporte){
    principalModelo::verificar_StringVacio_O_Nulo($UsuarioAtendido, "Usuario Atentido");
    principalModelo::verificar_StringVacio_O_Nulo($MedioDeSoporte, "Medio de Soporte");
    
    $datos = [
        "UsuarioAtendido" => $UsuarioAtendido,
        "MedioDeSoporte" => $MedioDeSoporte,
        "Motivo" => $Motivo,
        "HoraDeSolicitud" => $HoraDeSolicitud,
        "id_Soporte" => $id_Soporte];

    $ConexionBD = principalModelo::conectarALaBaseDeDatos();
    usoDeLaboratorio_Modelo::editar_Soporte($datos,$ConexionBD);

}
