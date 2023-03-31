<?php


require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";


class inicio_Modelo{

    function CantidadDeReservasConfirmadas($ConexionBD){
        $consultaSQL = "SELECT * from cantReservasConfirmadas;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;
    }
    function CantidadDeSolicitudesDeReserva($ConexionBD){

        $consultaSQL = "SELECT * from cantReservasPorConfirmar;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;
    }
    function CantidadDeTareasAsignadas($ConexionBD){

        /*
        $consultaSQL = "SELECT * from tareasAsignadas;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado; */

        return '0';

    }
    function CantidadDePrestamosDeActivos($ConexionBD){


        $consultaSQL = "SELECT * FROM cantPrestamosVigentes;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDeSoporteAEstudiantes($ConexionBD){
        /*
        $consultaSQL = "SELECT * FROM cantDeSoporteAEstudiantes;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;*/
        return '0';
    }
    function CantidadDeSoporteADocentes($ConexionBD){

        /*
        $consultaSQL = "SELECT * FROM cantDeSoporteADocentes;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;*/
        return '0';

    }
    function CantidadDeObjetosPerdidos($ConexionBD){

        /*
        $consultaSQL = "SELECT * FROM cantDeObjetosPerdidos;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;*/
        return '0';

    }
    function CantidadDeObjetosPerdidosDevueltos($ConexionBD){

        /*
        $consultaSQL = "SELECT * FROM cantDeObjetosPerdidosDevueltos;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;*/
        return '0';
    }
    function imprimirCantidad($resultado){

        if($resultado == '0' || $resultado == NULL){

            echo '0';

        }else{

            $fila = mysqli_fetch_array($resultado);
            $cantidad = strval($fila[0]);
            echo "$cantidad";
        }
    }
    function ExtraerTabla_Auxiliares($ConexionBD){
        /*
        $consultaSQL = "SELECT * FROM tabla_reservas_para_hoy;";
        $resultado = $ConexionBD->query($consultaSQL);

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td class='Columna_25'> " . $fila['MateriaTitulo'] . "</td>
                    <td class='Columna_25'>" . $fila['Docente'] . "</td>
                    <td class='Columna_20'>" . $fila['Horario'] . "</td>
                    <td class='Columna_20'>" . $fila['Aula'] . "</td>
                    <td class='Columna_10'>" . $fila['CantAsistentes'] . "</td>
                  </tr>";
        }*/
    }
    function ExtraerTabla_ReservasParaHoy($ConexionBD){

        $consultaSQL = "SELECT * FROM tabla_reservas_para_hoy;";
        $resultado = $ConexionBD->query($consultaSQL);

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td class='Columna_50'> " . $fila['MateriaTitulo'] . "</td>
                    <td class='Columna_20'>" . $fila['Horario'] . "</td>
                    <td class='Columna_15'>" . $fila['Aula'] . "</td>
                    <td class='Columna_15'>" . $fila['CantAsistentes'] . "</td>
                  </tr>";
        }
    }
    
}