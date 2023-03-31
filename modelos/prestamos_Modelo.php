<?php


require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";


class prestamos_Modelo{

    function CantidadDePrestamosCompletados($ConexionBD){


        $consultaSQL = "SELECT * FROM cantPrestamosCompletados";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDePrestamosEnSolicitud($ConexionBD){

        $consultaSQL = "SELECT * FROM cantPrestamosEnSolicitud;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDePrestamosCaducados($ConexionBD){

        $consultaSQL = "SELECT * FROM cantPrestamosCaducados;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDePrestamosVigentes($ConexionBD){

        $consultaSQL = "SELECT * FROM cantPrestamosVigentes;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function imprimirCantidad($resultado){

        $fila = mysqli_fetch_array($resultado);
        $cantidad = strval($fila[0]);

        echo "$cantidad";
    }
    function ExtraerTabla_PrestamosVigentes($ConexionBD){

        $consultaSQL = "SELECT * FROM tabla_Prestamos_Vigentes;";
        $resultado = $ConexionBD->query($consultaSQL);

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td class='Columna_25'>" . $fila['nombreActivo'] . "</td>
                    <td class='Columna_25'>" . $fila['nombreDelResponsableDelPrestamo'] . "</td>
                    <td class='Columna_20'>" . $fila['fechaDeEntrega'] . "</td>
                    <td class='Columna_20'>" . $fila['fechaEstimadaDevolucion'] . "</td>
                    <td class='Columna_10'>" . $fila['estado'] . "</td>
                  </tr>";
        }
    }


}