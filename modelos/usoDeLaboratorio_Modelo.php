<?php
session_start();
require_once "principal_Modelo.php";

class usoDeLaboratorio_Modelo
{
    public static function CantidadDeReservasConfirmadas($ConexionBD)
    {


        $consultaSQL = "SELECT * from cantReservasConfirmadas;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    public static function CantidadDeSolicitudesDeReserva($ConexionBD)
    {

        $consultaSQL = "SELECT * from Cantidad_Requerimientos_Incompletos;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }

    public static function Cantidad_Requerimientos_Incompletos($ConexionBD)
    {
        
        $consultaSQL = "SELECT * from Cantidad_Requerimientos_Incompletos";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;


    }
    public static function CantidadDeReservasCanceladas($ConexionBD)
    {

        $consultaSQL = "SELECT * from cantReservasCanceladas;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    public static function CantidadDeAsistenciasDeEstudiantes($ConexionBD)
    {

        $consultaSQL = "SELECT * from cantAsistentes";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    public static function imprimirCantidad($resultado)
    {


        $fila = mysqli_fetch_array($resultado);
        $cantidad = strval($fila[0]);
        if($cantidad != "" || $cantidad != null){
            echo "$cantidad";
        }else{
            echo "0";

        }


    }
    public static function ExtraerTabla_ReservasParaHoy($ConexionBD)
    {


        $consultaSQL = "SELECT * FROM tabla_Reservas_Para_Hoy;";
        $resultado = $ConexionBD->query($consultaSQL);

        
        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";
            
        }else if (!$resultado) {

            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";


        }else{
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>
                        <td class='Columna_25'> " . $fila['MateriaTitulo'] . "</td>
                        <td class='Columna_25'>" . $fila['Docente'] . "</td>
                        <td class='Columna_20'>" . $fila['Horario'] . "</td>
                        <td class='Columna_20'>" . $fila['Aula'] . "</td>
                        <td class='Columna_10'>" . $fila['CantAsistentes'] . "</td>
                      </tr>";
            }
        }

       
    }
    public static function ExtraerTabla_Soportes_de_hoy($ConexionBD)
    {
        $principalModelo = new principalModelo();
        $consultaSQL = "SELECT * FROM tabla_Soportes_de_Hoy;";
        $resultado = $ConexionBD->query($consultaSQL);

        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_15'>N/A</td>
            <td class='Columna_15'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>

            </tr>";
        }else if (!$resultado) {
            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_15'>N/A</td>
            <td class='Columna_15'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>

            </tr>";

        }else{
           $nroDeFila = 0;
            while ($fila = mysqli_fetch_array($resultado)) {

                $id_encriptado = $principalModelo->encrypt_decrypt('encrypt',$fila['cdg_soporte']);

                echo "<tr>
                        <td class='Columna_25'>" . $fila['NombreUsuario'] . "</td>
                        <td class='Columna_25'>" . $fila['UsuarioAtendido'] . "</td>
                        <td class='Columna_15'>" . $fila['TipoDeSoporte'] . "</td>
                        <td class='Columna_15'>" . $fila['Motivo'] . "</td>
                        <td class='Columna_10'>" . $fila['HoraDeSolicitud'] . "</td>

                        <td onclick='extraerFilaDeSoportes($nroDeFila)' class='Columna_10 ic_Lapiz_Editar'>".'<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="25"  width="25" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 4.5 19.5 L 5.601562 19.5 L 16.675781 8.425781 L 15.574219 7.324219 L 4.5 18.398438 Z M 19.851562 7.351562 L 16.648438 4.148438 L 17.699219 3.101562 C 17.984375 2.816406 18.332031 2.675781 18.75 2.675781 C 19.167969 2.675781 19.515625 2.816406 19.800781 3.101562 L 20.898438 4.199219 C 21.183594 4.484375 21.324219 4.832031 21.324219 5.25 C 21.324219 5.667969 21.183594 6.015625 20.898438 6.300781 Z M 18.800781 8.398438 L 6.199219 21 L 3 21 L 3 17.800781 L 15.601562 5.199219 Z M 16.125 7.875 L 15.574219 7.324219 L 16.675781 8.425781 Z M 16.125 7.875 "/>
                        </g>
                        </svg>'." </td>

                        <td class='OcultarElemento'>" . $id_encriptado . "</td>
                    </tr>";
                $nroDeFila++;
            }
        }
    }
    public static function ExtraerTabla_ReservasPorConfirmar($ConexionBD)
    {
        $principalModelo = new principalModelo();

        $consultaSQL = "SELECT * FROM tabla_Reservas_Por_Confirmar;";
        $resultado = $ConexionBD->query($consultaSQL);

        
        
        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";
        }else if (!$resultado) {
            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";
        }else{
            $nroDeFila = 0;

            while ($fila = mysqli_fetch_array($resultado)) {

                $id_encriptado = $principalModelo->encrypt_decrypt('encrypt',$fila['CodigoDeReserva']);

                echo "<tr>
                        <td class='Columna_25'> " . $fila['MateriaTitulo'] . "</td>
                        <td class='Columna_25'>" . $fila['Docente'] . "</td>
                        <td class='Columna_10'>" . $fila['HoraInicio'] . "</td>
                        <td class='Columna_10'>" . $fila['HoraFinal'] . "</td>
                        <td class='Columna_10'>" . $fila['fechaInicio'] . "</td>
                        <td onclick='extraerFilaDeReservaAConfirmar($nroDeFila)' class='Columna_10 textoAmarillo_Clickeable_textoLineado'>" . "Por Confirmar" . "</td>
                        <td class='Columna_10'>" . $fila['CantAsistentes'] . "</td>

                        <td class='OcultarElemento'>" . $id_encriptado . "</td>

                    </tr>";

                $nroDeFila++;
            }
        }
    }
    public static function ExtraerTabla_ReservasModulares($ConexionBD)
    {        
        $principalModelo = new principalModelo();


        $consultaSQL = "SELECT * FROM tabla_Reservas_Modulares;";
        $resultado = $ConexionBD->query($consultaSQL);

        

        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<tr>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_5'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_5'>N/A</td>

            </tr>";
        }else if (!$resultado) {
            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<tr>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_5'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_5'>N/A</td>

            </tr>";
        }else{

            $nroDeFila = 0;

            while ($fila = mysqli_fetch_array($resultado)) {

                $id_encriptado = $principalModelo->encrypt_decrypt('encrypt',$fila['codigo']);


                if($fila['EstadoDeRequerimientos'] == 'Completado'){

                    $ColorDelIcono = "fill:rgb(19,165,60)";

                }else{
                    $ColorDelIcono = "fill:rgb(214,31,49)";

                }
                echo "<tr>
                        <td class='Columna_20'> " . $fila['MateriaTitulo'] . "</td>
                        <td class='Columna_20'>" . $fila['Docente'] . "</td>
                        <td class='Columna_5'>" . $fila['HorarioInicio'] . "</td>
                        <td class='Columna_5'>" . $fila['HorarioFinal'] . "</td>
                        <td class='Columna_10'>" . $fila['Aula'] . "</td>
                        <td class='Columna_10'>" . $fila['tipoDeModalidad'] . "</td>
                        <td class='Columna_10'>" . $fila['CantAsistentes'] . "</td>
                        <td onclick='editar_Requerimientos($nroDeFila)' class='Columna_10 ElementoClick'>

                            <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 24 24' version='1.1'>
                                <g id='surface1'>
                                <path style=' stroke:none;fill-rule:nonzero;$ColorDelIcono;fill-opacity:1;' d='M 4.5 21 C 4.082031 21 3.730469 20.855469 3.4375 20.5625 C 3.144531 20.269531 3 19.917969 3 19.5 L 3 4.5 C 3 4.082031 3.144531 3.730469 3.4375 3.4375 C 3.730469 3.144531 4.082031 3 4.5 3 L 9.625 3 C 9.707031 2.417969 9.976562 1.9375 10.425781 1.5625 C 10.875 1.1875 11.398438 1 12 1 C 12.601562 1 13.125 1.1875 13.574219 1.5625 C 14.023438 1.9375 14.292969 2.417969 14.375 3 L 19.5 3 C 19.917969 3 20.269531 3.144531 20.5625 3.4375 C 20.855469 3.730469 21 4.082031 21 4.5 L 21 19.5 C 21 19.917969 20.855469 20.269531 20.5625 20.5625 C 20.269531 20.855469 19.917969 21 19.5 21 Z M 4.5 19.5 L 19.5 19.5 L 19.5 4.5 L 4.5 4.5 Z M 7 17 L 13.824219 17 L 13.824219 15.5 L 7 15.5 Z M 7 12.75 L 17 12.75 L 17 11.25 L 7 11.25 Z M 7 8.5 L 17 8.5 L 17 7 L 7 7 Z M 12 4.074219 C 12.234375 4.074219 12.4375 3.988281 12.613281 3.8125 C 12.789062 3.636719 12.875 3.433594 12.875 3.199219 C 12.875 2.964844 12.789062 2.761719 12.613281 2.585938 C 12.4375 2.414062 12.234375 2.324219 12 2.324219 C 11.765625 2.324219 11.5625 2.414062 11.386719 2.585938 C 11.210938 2.761719 11.125 2.964844 11.125 3.199219 C 11.125 3.433594 11.210938 3.636719 11.386719 3.8125 C 11.5625 3.988281 11.765625 4.074219 12 4.074219 Z M 4.5 19.5 L 4.5 4.5 Z M 4.5 19.5 '/>
                                </g>
                            </svg>
                            
                        
                        </td>
                        <td onclick='EditarReservaModular($nroDeFila)' class='Columna_10 ic_Lapiz_Editar'>".'<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="25"  width="25" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 4.5 19.5 L 5.601562 19.5 L 16.675781 8.425781 L 15.574219 7.324219 L 4.5 18.398438 Z M 19.851562 7.351562 L 16.648438 4.148438 L 17.699219 3.101562 C 17.984375 2.816406 18.332031 2.675781 18.75 2.675781 C 19.167969 2.675781 19.515625 2.816406 19.800781 3.101562 L 20.898438 4.199219 C 21.183594 4.484375 21.324219 4.832031 21.324219 5.25 C 21.324219 5.667969 21.183594 6.015625 20.898438 6.300781 Z M 18.800781 8.398438 L 6.199219 21 L 3 21 L 3 17.800781 L 15.601562 5.199219 Z M 16.125 7.875 L 15.574219 7.324219 L 16.675781 8.425781 Z M 16.125 7.875 "/>
                            </g>
                        </svg>'." </td>

                        <td class='OcultarElemento'>" . $fila['requerimientos'] . "</td>
                        <td class='OcultarElemento'>" . $fila['EstadoDeRequerimientos'] . "</td>
                        <td class='OcultarElemento'>" . $id_encriptado . "</td>

                    </tr>";
                    
                $nroDeFila++;

            }
        }
    }
    public static function ExtraerTabla_ReservasPosteriores($ConexionBD)
    {

        $consultaSQL = "SELECT * FROM tabla_Reservas_Posteriores;";
        $resultado = $ConexionBD->query($consultaSQL);

        
        
        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";
        }else if (!$resultado) {

            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";

            echo "<tr>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_25'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_10'>N/A</td>
            <td class='Columna_20'>N/A</td>
            <td class='Columna_10'>N/A</td>
            </tr>";
        }else{

            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>
                        <td class='Columna_25'> " . $fila['MateriaTitulo'] . "</td>
                        <td class='Columna_25'>" . $fila['Docente'] . "</td>
                        <td class='Columna_10'>" . $fila['fechaInicio'] . "</td>
                        <td class='Columna_10'>" . $fila['fechaFinal'] . "</td>
                        <td class='Columna_20'>" . $fila['Horario'] . "</td>
                        <td class='Columna_10'>" . $fila['Aula'] . "</td>
                    </tr>";
            }
        }
    }
    public static function ExtraerTabla_MateriasEnUnSelect($ConexionBD)
    {

        $consultaSQL = "SELECT * FROM tabla_MateriasVigentes;";
        $resultado = $ConexionBD->query($consultaSQL);

        
        
        if (mysqli_num_rows($resultado) == 0) {
            
            echo "<option value=''>N/A</option>";

        }else if (!$resultado) {

            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<option value=''>N/A</option>";

        }else{

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value=" . $fila['Codigo'] . ">" . $fila["Materia"] . "</option>";
            }
        }
    }
    public static function ExtraerTabla_DocentesEnUnSelect($ConexionBD)
    {

	
        $consultaSQL = "SELECT * FROM tabla_DeDocentesYSusCdgUsuarios;";
        $resultado = $ConexionBD->query($consultaSQL);

	
	
	if(mysqli_num_rows($resultado) == 0){
	
		echo "<option>Sin Datos</option>";
		
	}else if(!$resultado) {
	
            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<option>Sin Datos</option>";

        }else{
                while ($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value=" . $fila["CodigoDeUsuario"] . ">" . $fila["NombreCompleto"] . "</option>";
                }
            }
    }

    public static function ExtraerTabla_LugaresDelLaboratorio($ConexionBD)
    {

	
        $consultaSQL = "SELECT * FROM Lugares_Del_Laboratorio;";
        $resultado = $ConexionBD->query($consultaSQL);

	
	
	if(mysqli_num_rows($resultado) == 0){
	
		echo "<option>Sin Datos</option>";
		
	}else if(!$resultado) {
	

            $Error = mysqli_error($ConexionBD);
            echo "<script>alert('Error en la consulta: $Error ');</script>";
            echo "<option>Sin Datos</option>";

        }else{
                while ($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value=" . $fila["cdg_AreaLaboratorio"] . ">" . $fila["tituloDeArea"] . "</option>";
                }
            }
    }
    public static function añadirSolicitudDeReserva_NoEsMateria($datos,$ConexionBD)
    {
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL SolicitudDeReservaPorMateria_NoEsMateria
        ('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[tituloDeLaReserva]',
        '$datos[cantidadDeAsistentes]',
        '$datos[horaInicioSeleccionada]',
        '$datos[horaFinalSeleccionada]',
        '$datos[fechaInicioSeleccionada]',
        '$datos[fechaFinalSeleccionada]',
        '$datos[requerimientos]');";




        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";

        }else{

            echo "<script>alert('Se ha registrado con éxito la Solicitud de Reserva');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";

        }
        
        mysqli_close($ConexionBD);


    }
    public static function agregarSolicitudDeLaboratorio_Materia_conFechaEspecifica($datos,$ConexionBD)
    {
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL SolicitudDeReservaPorMateria_fechaEspecifica
        ('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[materiaSeleccionada]',
        '$datos[cantidadDeAsistentes]',
        '$datos[horaInicioSeleccionada]',
        '$datos[horaFinalSeleccionada]',
        '$datos[fechaInicioSeleccionada]',
        '$datos[fechaFinalSeleccionada]',
        '$datos[requerimientos]');";



        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";

        }else{

            echo "<script>alert('Se ha registrado con éxito la Solicitud de Reserva');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";

        }
        
        mysqli_close($ConexionBD);

    }
    public static function agregarSolicitudDeLaboratorio_Materia_conModalidad($datos, $ConexionBD)
    {
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL SolicitudDeReservaPorMateria('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[materiaSeleccionada]',
        '$datos[cantidadDeAsistentes]',
        '$datos[modalidadSeleccionada]',
        '$datos[horaInicioSeleccionada]',
        '$datos[horaFinalSeleccionada]',
        '$datos[moduloSeleccionado]',
        '$datos[semestreSeleccionado]',
        '$datos[gestionSeleccionada]',
        '$datos[requerimientos]');";



        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";

        }else{

            echo "<script>alert('Se ha registrado con éxito la Solicitud de Reserva');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";

        }
        
        mysqli_close($ConexionBD);

        
    }
    public static function agregarSoporte_Presencial_A_Docente_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL agregarSoporte_presencial_Docente('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);

    }
    public static function agregarSoporte_PresencialCI_A_Docente_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL agregarSoporte_presencial_ci_Docente('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[MedioDeAtencion]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[Motivo]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);

    }
    public static function agregarSoporte_Whatsapp_A_Docente_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL agregarSoporte_whatsapp_Docente('$codigoUsuarioAdmin',
        '$datos[docenteSeleccionado]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);
    }
    public static function agregarSoporte_MediosVariados_A_Docente_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL agregarSoporte_MediosVariados_Docente($codigoUsuarioAdmin,
        '$datos[docenteSeleccionado]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);
    }
    public static function agregarSoporte_Presencial_A_Estudiante_Modelo($datos,$ConexionBD){
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        
        $Consulta = "CALL agregarSoporte_presencial_Estudiante('$codigoUsuarioAdmin',
        '$datos[NroDeRegistro]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);

    }
    public static function agregarSoporte_PresencialCI_A_Estudiante_Modelo($datos,$ConexionBD){
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        
        $Consulta = "CALL agregarSoporte_presencial_ci_Estudiante('$codigoUsuarioAdmin',
        '$datos[NroDeRegistro]',
        '$datos[MedioDeAtencion]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[Motivo]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);
    }
    public static function agregarSoporte_Whatsapp_A_Estudiante_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        $Consulta = "CALL agregarSoporte_whatsapp_Estudiante('$codigoUsuarioAdmin',
        '$datos[NroDeRegistro]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);
    }
    public static function agregarSoporte_MediosVariados_A_Estudiante_Modelo($datos,$ConexionBD){

        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];

        
        $Consulta = "CALL agregarSoporte_mediosvariados_Estudiante($codigoUsuarioAdmin,
        '$datos[NroDeRegistro]',
        '$datos[MedioDeAtencion]',
        '$datos[Problema]',
        '$datos[Solucion]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[Observaciones]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        if (!$ejecutar) {
            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito el Soporte');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }
        mysqli_close($ConexionBD);
    }

    public static function editar_Soporte($datos,$ConexionBD){
        
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];


        $Consulta = "CALL editar_Soporte('$codigoUsuarioAdmin',
        '$datos[id_Soporte]',
        '$datos[UsuarioAtendido]',
        '$datos[MedioDeSoporte]',
        '$datos[Motivo]',
        '$datos[HoraDeSolicitud]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
        $valorRetorno = mysqli_fetch_array($ejecutar)[0];

        if ($valorRetorno == "No puedes Editar Soporte de otro Usuario") {

            echo "<script>alert('No puedes Editar Soporte de Otro Usuario');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio'</script>";


        } elseif ($valorRetorno == "Se ha editado con exito tu soporte") {

            echo "<script>alert('Se editó con exito');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio'</script>";


        }

     
        
        
        mysqli_close($ConexionBD);
        
    }
    public static function Confirmar_Reserva($datos,$ConexionBD){
        
       

        $Consulta = "CALL confirmar_Reserva(
        '$datos[id_reserva]',
        '$datos[Docente_Solicitante]',
        '$datos[LugarDeLaReserva]',
        '$datos[MateriaOtitulo]',
        '$datos[HoraInicio]',
        '$datos[HoraFinal]',
        '$datos[fechaInicio]',
        '$datos[cantidadAsistentes]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
        $valorRetorno = mysqli_fetch_array($ejecutar)[0];

        echo "<script>alert('$valorRetorno');
        window.location='/SistemaLabUtepsa/UsoDeLaboratorio'</script>";     
        
        
        mysqli_close($ConexionBD);
        
    }
    public static function Agregar_Materia($NombreMateria,$ConexionBD){
        
        $codigoUsuarioAdmin = $_SESSION['CodigoDeUsuario'];


        $Consulta = "CALL agregar_Materia('$NombreMateria',$codigoUsuarioAdmin);";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

   
        if (!$ejecutar) {
            echo ">>>>".$NombreMateria;
            echo "USUARIO >>>>".$codigoUsuarioAdmin;

            echo "Error en la consulta: " . mysqli_error($ConexionBD);
            echo "<script>alert('Error al guardar los datos');</script>";
        }else{
            echo "<script>alert('Se ha registrado con éxito la Materia');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio/'</script>";
        }

        mysqli_close($ConexionBD);
        
    }

    public static function editar_Reserva_Modular_Modelo($datos,$ConexionBD){
        
        $Consulta = "CALL editar_Reserva_Modular(
        '$datos[id_de_la_Reserva_Modular]',
        '$datos[docenteSeleccionado]',
        '$datos[tituloDeLaReserva]',
        '$datos[Modalidad]',
        '$datos[horaInicio]',
        '$datos[horaFinal]',
        '$datos[lugar]',
        '$datos[cantidadDeAsistentes]',
        '$datos[requerimientos]');";

        $ejecutar = mysqli_query($ConexionBD, $Consulta);

        
      
        $valorRetorno = mysqli_fetch_array($ejecutar)[0];

        echo "<script>alert('$valorRetorno');
        window.location='/SistemaLabUtepsa/UsoDeLaboratorio'</script>";     
        
        
        mysqli_close($ConexionBD);
        
        
    }
    public static function editar_Requerimientos_de_la_Reserva_Modular_Modelo($datos,$ConexionBD){

        $Consulta = "CALL editar_Requerimientos_de_la_Reserva_Modular(
            '$datos[id_de_la_reserva]',
            '$datos[estadoDelRequerimiento]',
            '$datos[requerimientos]');";
    
            $ejecutar = mysqli_query($ConexionBD, $Consulta);
    
            
          
            $valorRetorno = mysqli_fetch_array($ejecutar)[0];
    
            echo "<script>alert('$valorRetorno');
            window.location='/SistemaLabUtepsa/UsoDeLaboratorio'</script>";     
            
            
            mysqli_close($ConexionBD);
    }


}
