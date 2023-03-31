<?php


require_once "../SistemaLabUtepsa/modelos/principal_Modelo.php";


class inventario_Modelo{

    function CantidadDeActivosEnInventario($ConexionBD){


        $consultaSQL = "SELECT * FROM `cantidad_de_activos_en_el_inventario`;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDeActivosEnMantenimiento($ConexionBD){

        $consultaSQL = "SELECT * FROM `cantidad_de_activos_en_mantenimiento`;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDeActivosFueraDeServicio($ConexionBD){

        $consultaSQL = "SELECT * FROM `CantidadDeActivosFueraDeServicio`;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function CantidadDeActivosEnPrestamo($ConexionBD){

        $consultaSQL = "SELECT * FROM `CantidadDeActivosEnPrestamo`;";
        $resultado = $ConexionBD->query($consultaSQL);
        return $resultado;

    }
    function imprimirCantidad($resultado){

        $fila = mysqli_fetch_array($resultado);
        $cantidad = strval($fila[0]);

        echo "$cantidad";
    }
    function ExtraerTabla_MantProgramados($ConexionBD){

        $consultaSQL = "SELECT * FROM tabla_con_activos_en_mantenimiento;";
        $resultado = $ConexionBD->query($consultaSQL);

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td>" . $fila['cdg_inventarioUtepsa'] . "</td>
                    <td>" . $fila['nombreActivo'] . "</td>
                    <td>" . $fila['fechaARealizar'] . "</td>
                    <td>" . $fila['tipoDeMantenimiento'] . "</td>
                  </tr>";
        }
    }
    function ExtraerTabla_ActEnInventarios($ConexionBD){

        $consultaSQL = "SELECT * FROM `tabla_actual_del_inventario`;";
        $resultado = $ConexionBD->query($consultaSQL);

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td>" . $fila['GrupoDeActivo'] . "</td>
                    <td>" . $fila['Categoria'] . "</td>
                    <td>" . $fila['CantidadDeActivosEnInventario'] . "</td>
                  </tr>";
        }
    }


}