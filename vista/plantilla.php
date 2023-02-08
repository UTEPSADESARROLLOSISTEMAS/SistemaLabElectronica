<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Laboratorio de Sistemas</title>

    <?php include "./vista/inclusiones/Links_DeLibrerias.php"; ?>

</head>

<body >

    <?php
    require_once "./controladores/vistas_Controlador.php";
    $IV = new vistasControlador();
    #--------------------------Me quede aqui------------

    $vistas=$IV->obtener_vistas_controlador();

    if($vistas == "login" || $vistas == "404"){

        require_once "./vistas/contenidos/".$vistas."-vista.php";
    }else{

    ?>
    <!--------------------------------- Contenedor General ----------------------->
    <main class="full-box main-container">
        <!------------------Inicio----------------------- Barra de Navegacion lateral -------------Inicio----------------------->

        <?php include "./vistas/inc/NavLateral.php"; ?>



        <!------------------FIN----------------------- Barra de Navegacion lateral -------------FIN----------------------->

        <!-------------------------Inicio----------------------- Contenido de la Pagina ---------Inicio--------------------------------------->
        <section class="full-box page-content" style="background-color: white;">

            <?php include "./vistas/inc/NavBar.php";
            include $vistas;
            
            ?>



        </section>
        <!-------------------------FIN----------------------- Contenido de la Pagina ---------FIN--------------------------------------->


    </main>

    <?php
    }
    include "./vistas/inc/Script.php"  ?>
</body>

</html>