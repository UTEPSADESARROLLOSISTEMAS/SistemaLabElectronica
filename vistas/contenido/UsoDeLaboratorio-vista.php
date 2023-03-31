<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo-usoLaboratorio.css">
<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo_Vna_AgregarLaboratorio.css">
<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo_Vna_AgregarSoporte.css">
<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo_Vna_EditarSoporte.css">
<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo_Vna_Agregar_Materia.css">

<?php

require_once "../SistemaLabElectronica/controladores/usoDeLaboratorio_Controlador.php";
$usoLaboratorio_Controlador = new usoDeLaboratorio_Controlador();
?>

<body>
    <div class="Bloque_principal">
        <div class="Bloque_Sub_Principal_1">
            <div class="Seccion_1 DivConDisplayInlineBlock">
                <div class="Botones DivConDisplayInlineBlock ">
                    <div id="btn_AgregarReserva" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 " />
                            </g>
                        </svg>
                        <label class="">
                            Agregar Solicitud De Reserva
                        </label>
                    </div>
                </div>
                <div class="Botones DivConDisplayInlineBlock ">
                    <div id="btn_AgregarSoporte" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 " />
                            </g>
                        </svg>
                        <label class="">
                            Agregar Soporte
                        </label>
                    </div>
                </div>
                <div class="Botones DivConDisplayInlineBlock ">
                    <div id="btn_AgregarMateria" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 " />
                            </g>
                        </svg>
                        <label class="">
                            Agregar Materia
                        </label>
                    </div>
                </div>
                <div style="display: none;" class="Botones DivConDisplayInlineBlock ">
                    <div id="btn_AgregarDocente" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 " />
                            </g>
                        </svg>
                        <label class="">
                            Agregar Docente
                        </label>
                    </div>
                </div>

            </div>

        </div>
        <div class="Bloque_SubPrincipal_2">
            <div class="DivDatoExtraido">
                <div class="divContenedorDatosExtraidos DivConDisplayFlex fill_Color_Verde">
                    <div
                        class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono ">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 10.773438 20.648438 L 4.5 20.648438 C 4.101562 20.648438 3.75 20.5 3.449219 20.199219 C 3.148438 19.898438 3 19.550781 3 19.148438 L 3 4.601562 C 3 4.199219 3.128906 3.851562 3.386719 3.550781 C 3.644531 3.25 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.449219 3.101562 19.800781 3.25 20.101562 3.550781 C 20.398438 3.851562 20.550781 4.199219 20.550781 4.601562 L 20.550781 9.675781 L 19.050781 9.675781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 10.773438 19.148438 Z M 15.5 20.023438 L 11.5 16.023438 L 12.574219 14.949219 L 15.5 17.875 L 21.476562 11.898438 L 22.550781 12.976562 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 " />
                            </g>
                        </svg>
                    </div>
                    <div
                        class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">
                        <div>
                            <p class="TextUbuntu_Bold txt_ExtraGrande">
                                <?php $usoLaboratorio_Controlador->ExtraerCantidad("Reservas Confirmadas"); ?>
                            </p>
                            <p class="TextMontserrat">Reservas Confirmadas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="DivDatoExtraido">
                <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                    <div
                        class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Amarillo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 17.273438 22 C 15.976562 22 14.863281 21.539062 13.9375 20.613281 C 13.011719 19.6875 12.550781 18.574219 12.550781 17.273438 C 12.550781 15.976562 13.011719 14.863281 13.9375 13.9375 C 14.863281 13.011719 15.976562 12.550781 17.273438 12.550781 C 18.574219 12.550781 19.6875 13.011719 20.613281 13.9375 C 21.539062 14.863281 22 15.976562 22 17.273438 C 22 18.574219 21.539062 19.6875 20.613281 20.613281 C 19.6875 21.539062 18.574219 22 17.273438 22 Z M 18.726562 19.800781 L 19.425781 19.101562 L 17.550781 17.226562 L 17.550781 14.425781 L 16.574219 14.425781 L 16.574219 17.574219 Z M 4.5 20.648438 C 4.082031 20.648438 3.730469 20.503906 3.4375 20.210938 C 3.144531 19.921875 3 19.566406 3 19.148438 L 3 4.601562 C 3 4.183594 3.128906 3.828125 3.386719 3.539062 C 3.644531 3.246094 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.464844 3.101562 19.820312 3.246094 20.113281 3.539062 C 20.402344 3.828125 20.550781 4.183594 20.550781 4.601562 L 20.550781 11.976562 C 20.300781 11.824219 20.054688 11.695312 19.8125 11.585938 C 19.570312 11.480469 19.316406 11.382812 19.050781 11.300781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 11.324219 19.148438 C 11.410156 19.398438 11.507812 19.644531 11.625 19.886719 C 11.742188 20.128906 11.882812 20.382812 12.050781 20.648438 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 " />
                            </g>
                        </svg>
                    </div>
                    <div
                        class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>

                            <p class="TextUbuntu_Bold txt_ExtraGrande">
                                <?php echo "0";//$usoLaboratorio_Controlador->ExtraerCantidad("Solicitudes de Reserva"); ?>
                            </p>
                            <p class="TextMontserrat">Solicitudes de Lab.</p>

                        </div>
                    </div>


                </div>


            </div>

            <div class="DivDatoExtraido">


                <div class="divContenedorDatosExtraidos DivConDisplayFlex">

                    <div
                        class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Rojo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 21 18.851562 L 19.5 17.351562 L 19.5 4.5 L 18 4.5 L 18 6.75 L 8.875 6.75 L 5.125 3 L 9.550781 3 C 9.667969 2.417969 9.953125 1.9375 10.414062 1.5625 C 10.871094 1.1875 11.398438 1 12 1 C 12.601562 1 13.128906 1.1875 13.585938 1.5625 C 14.046875 1.9375 14.332031 2.417969 14.449219 3 L 19.5 3 C 19.933594 3 20.292969 3.140625 20.574219 3.425781 C 20.859375 3.707031 21 4.066406 21 4.5 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 17.351562 19.5 L 4.5 6.648438 L 4.5 19.5 Z M 4.5 21 C 4.066406 21 3.707031 20.859375 3.425781 20.574219 C 3.140625 20.292969 3 19.933594 3 19.5 L 3 5.148438 L 1.523438 3.675781 L 2.601562 2.601562 L 21.398438 21.398438 L 20.324219 22.476562 L 18.851562 21 Z M 4.5 21 " />
                            </g>
                        </svg>

                    </div>
                    <div
                        class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>

                            <p class="TextUbuntu_Bold txt_ExtraGrande">
                                <?php $usoLaboratorio_Controlador->ExtraerCantidad("Reservas Canceladas"); ?>
                            </p>
                            <p class="TextMontserrat">Reservas Canceladas</p>

                        </div>
                    </div>


                </div>


            </div>

            <div class="DivDatoExtraido">


                <div class="divContenedorDatosExtraidos DivConDisplayFlex">

                    <div
                        class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Morado">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"
                                    d="M 11.976562 21 L 4.726562 17.023438 L 4.726562 11.023438 L 1 9 L 11.976562 3 L 23 9 L 23 16.925781 L 21.5 16.925781 L 21.5 9.875 L 19.226562 11.023438 L 19.226562 17.023438 Z M 11.976562 13.300781 L 19.851562 9 L 11.976562 4.773438 L 4.148438 9 Z M 11.976562 19.300781 L 17.726562 16.125 L 17.726562 11.925781 L 11.976562 15 L 6.226562 11.875 L 6.226562 16.125 Z M 12 13.300781 Z M 11.976562 15.148438 Z M 11.976562 15.148438 Z M 11.976562 15.148438 " />
                            </g>
                        </svg>


                    </div>
                    <div
                        class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>

                            <p class="TextUbuntu_Bold txt_ExtraGrande">
                                <?php $usoLaboratorio_Controlador->ExtraerCantidad("Asistencia de Estudiantes"); ?>
                            </p>
                            <p class="TextMontserrat">Asist. Estudiantes</p>

                        </div>
                    </div>


                </div>


            </div>
        </div>
        <div class="Bloque_SubPrincipal_3">

            <div>

                <div style="height: 100%;" class="ContenedorDeLasTabla">
                    <div class="DivConlaTabla">
                        <div class="divTextoCentradoVertical_y_Horizontal">
                            <p class="TextUbuntu_Bold txtGrande">Reservas para Hoy</p>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <table cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                                        <tr>
                                            <th class="Columna_25">Materia / Titulo Lab.</th>
                                            <th class="Columna_25">Docente</th>
                                            <th class="Columna_20">Horario</th>
                                            <th class="Columna_20">Lugar</th>
                                            <th class="Columna_10">Cant. Est.</th>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="Div_DeLa_SubTabla">
                                        <table cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                            <?php $usoLaboratorio_Controlador->ExtraerTablas("Reservas Para Hoy"); ?>


                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div>

                <div style="height: 100%;" class="ContenedorDeLasTabla">
                    <div class="DivConlaTabla">
                        <div class="divTextoCentradoVertical_y_Horizontal">
                            <p class="TextUbuntu_Bold txtGrande">Reservas Posteriores</p>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <table cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                                        <tr>
                                            <th class="Columna_25">Materia / Titulo Lab.</th>
                                            <th class="Columna_25">Docente</th>
                                            <th class="Columna_10">FechaInicio</th>
                                            <th class="Columna_10">FechaFinal</th>
                                            <th class="Columna_20">Horario</th>
                                            <th class="Columna_10">Lugar</th>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="Div_DeLa_SubTabla">
                                        <table cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                            <?php $usoLaboratorio_Controlador->ExtraerTablas("Reservas Posteriores"); ?>


                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>

    
        </div>
        <div class="Bloque_SubPrincipal_4">
            <div class="ContenedorDeLasTabla">
                <div class="DivConlaTabla">
                    <div class="divTextoCentradoVertical_y_Horizontal">
                        <p class="TextUbuntu_Bold txtGrande">Soportes de Hoy</p>
                    </div>
                    <table style="display: none;" id="tabla_SoportesHoy">
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                                    <tr>
                                        <th class="Columna_25">Usuario que Atendió</th>
                                        <th class="Columna_25">Usuario Atendido</th>
                                        <th class="Columna_15">Medio de Soporte</th>
                                        <th class="Columna_15">Motivo</th>
                                        <th class="Columna_10">Hora de Solicitud:</th>
                                        <th class="Columna_10">Editar</th>

                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="Div_DeLa_SubTabla">
                                    <table id="tabla_SoportesHoy_Contenido" cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Soportes de hoy"); ?>


                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <hr>
                    <div class="cont_icono_mostrar">

                        <svg style="display: none;" onclick="mostrarTabla_Soportes_para_hoy()" id="ic_DobleFecha_Arriba_Tabla_Soportes_para_hoy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.050781 18.375 L 6 17.324219 L 12 11.324219 L 18 17.324219 L 16.949219 18.375 L 12 13.425781 Z M 7.050781 12.050781 L 6 11 L 12 5 L 18 11 L 16.949219 12.050781 L 12 7.101562 Z M 7.050781 12.050781 "/>
                            </g>
                        </svg>

                        <svg onclick="mostrarTabla_Soportes_para_hoy()" id="ic_DobleFecha_Abajo_Tabla_Soportes_para_hoy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12 19 L 6 13 L 7.050781 11.949219 L 12 16.898438 L 16.949219 11.949219 L 18 13 Z M 12 12.675781 L 6 6.675781 L 7.050781 5.625 L 12 10.574219 L 16.949219 5.625 L 18 6.675781 Z M 12 12.675781 "/>
                            </g>
                        </svg>

                    </div>



                </div>
            </div>
        </div>
        <div class="Bloque_SubPrincipal_5">
            <div class="ContenedorDeLasTabla">
                <div class="DivConlaTabla">
                    <div class="divTextoCentradoVertical_y_Horizontal">
                        <p class="TextUbuntu_Bold txtGrande">Reservas "Por Confirmar"</p>

                    </div>
                    <table style="display: none;" id="tabla_Reservas_por_Confirmar">
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                                    <tr>
                                        <th class="Columna_25">Materia / Titulo Lab.</th>
                                        <th class="Columna_25">Docente</th>
                                        <th class="Columna_20">Horario</th>
                                        <th class="Columna_20">Lugar</th>
                                        <th class="Columna_10">Cant. Est.</th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="Div_DeLa_SubTabla">
                                    <table cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Reservas Por Confirmar"); ?>

                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div class="cont_icono_mostrar">

                        <svg style="display: none;" onclick="mostrarTabla_Reservas_por_confirmar()" id="ic_DobleFecha_Arriba_Tabla_Reservas_por_confirmar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.050781 18.375 L 6 17.324219 L 12 11.324219 L 18 17.324219 L 16.949219 18.375 L 12 13.425781 Z M 7.050781 12.050781 L 6 11 L 12 5 L 18 11 L 16.949219 12.050781 L 12 7.101562 Z M 7.050781 12.050781 "/>
                            </g>
                        </svg>

                        <svg onclick="mostrarTabla_Reservas_por_confirmar()" id="ic_DobleFecha_Abajo_Tabla_Reservas_por_confirmar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12 19 L 6 13 L 7.050781 11.949219 L 12 16.898438 L 16.949219 11.949219 L 18 13 Z M 12 12.675781 L 6 6.675781 L 7.050781 5.625 L 12 10.574219 L 16.949219 5.625 L 18 6.675781 Z M 12 12.675781 "/>
                            </g>
                        </svg>

                      
                    </div>


                </div>
            </div>
        </div>
        <div class="Bloque_SubPrincipal_6">

            <div class="ContenedorDeLasTabla">
                <div class="DivConlaTabla">
                    <div class="divTextoCentradoVertical_y_Horizontal">
                        <p class="TextUbuntu_Bold txtGrande">Reservas Modulares</p> 
                    </div>
                    <table style="display: none;" id="tabla_ReservasModulares">
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                                    <tr>
                                        <th class="Columna_25">Materia / Titulo Lab.</th>
                                        <th class="Columna_25">Docente</th>
                                        <th class="Columna_10">Horario</th>
                                        <th class="Columna_10">Lugar</th>
                                        <th class="Columna_20">Modalidad</th>
                                        <th class="Columna_10">Cant.Ast.</th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="Div_DeLa_SubTabla">
                                    <table cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Reservas Modulares"); ?>


                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <hr>
                    <div class="cont_icono_mostrar">
                           
                        <svg style="display: none;" onclick="mostrarTabla_Reservas_Modulares()" id="ic_DobleFecha_Arriba_Tabla_Reservas_Modulares" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.050781 18.375 L 6 17.324219 L 12 11.324219 L 18 17.324219 L 16.949219 18.375 L 12 13.425781 Z M 7.050781 12.050781 L 6 11 L 12 5 L 18 11 L 16.949219 12.050781 L 12 7.101562 Z M 7.050781 12.050781 "/>
                            </g>
                        </svg>

                        <svg onclick="mostrarTabla_Reservas_Modulares()" id="ic_DobleFecha_Abajo_Tabla_Reservas_Modulares" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12 19 L 6 13 L 7.050781 11.949219 L 12 16.898438 L 16.949219 11.949219 L 18 13 Z M 12 12.675781 L 6 6.675781 L 7.050781 5.625 L 12 10.574219 L 16.949219 5.625 L 18 6.675781 Z M 12 12.675781 "/>
                            </g>
                        </svg>

                    </div>



                </div>


            </div>
        </div>
      
    </div>



    <div class="Ventana_AgregarSoporte" id="Ventana_AgregarSoporte">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="<?php echo SERVERURL; ?>controladores/agregar_usoDeLaboratorio_Controlador.php" method="POST"
                class="Contenido">
                <div class="Seccion">
                    <div>
                        <p>Soporte A:</p>
                        <select name="select_SoporteA_spte_reg" id="select_SoporteA_spte" required>
                            <option value="Seleccione" disabled selected>---- Seleccione -----</option>
                            <option value="Docente">Docente</option>
                            <option value="Estudiante">Estudiante</option>
                        </select>
                    </div>

                    <div>
                        <p>Medio de Atención:</p>
                        <select name="select_MedioDeAtencion_spte_reg" id="select_MedioDeAtencion_spte" required>
                            <option value="Seleccione" disabled selected>Seleccione el medio de Atención</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Cafe Internet">Cafe Internet</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Otros Medios">Otros Medios</option>
                        </select>
                    </div>
                </div>
                <div class="OcultarElemento" id="div_DocentesExtraidos_spte">
                    <p>Seleccione el docente:</p>
                    <select name="docenteSeleccionado_spte_reg" id="select_Docente_spte">
                        <option disabled value="Seleccione" selected>Seleccione un Docente</option>
                        <option value="6">---OTRO DOCENTE---</option>
                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Docentes para un Select") ?>
                    </select>
                </div>
                <div class="OcultarElemento" id="div_NroDeRegistro_spte">
                    <p>Nro de Registro:</p>
                    <input type="text" placeholder="" name="input_NroDeRegistro_spte_reg">
                </div>
                <div class="OcultarElemento" id="div_HoraInicio_spte">
                    <p>Hora Inicio:</p>
                    <input type="time" placeholder="" name="input_HoraInicio_spte_reg">
                </div>
                <div class="OcultarElemento" id="div_HoraFinal_spte">
                    <p>Hora Final:</p>
                    <input type="time" placeholder="" name="input_HoraFinal_spte_reg">
                </div>
                <div class="OcultarElemento" id="div_Problema_spte">
                    <p>Problema:</p>
                    <label for="input_Problema_spte_reg"></label>
                    <input type="text" placeholder="" name="input_Problema_spte_reg"
                        list="datalist_SugerenciasDeProblemas">
                    <datalist id="datalist_SugerenciasDeProblemas">
                        <option value="ENCENDER AIRE A/C">
                        <option value="PROBLEMAS CON EL EQUIPO">
                        <option value="SOLICITUD DE INTERNET">
                        <option value="MAS SILLAS">
                    </datalist>
                </div>
                <div class="OcultarElemento" id="div_Motivo_spte">
                    <p>Motivo:</p>
                    <input type="text" placeholder="" name="input_Motivo_spte_reg">
                </div>
                <div class="OcultarElemento" id="div_Solucion_spte">
                    <p>Solución:</p>
                    <label for="input_Solucion_spte_reg"></label>
                    <input type="text" placeholder="" name="input_Solucion_spte_reg"
                        list="datalist_SugerenciasDeSoluciones">
                    <datalist id="datalist_SugerenciasDeSoluciones">
                        <option value="Sin Solución">
                    </datalist>
                </div>
                <div class="OcultarElemento" id="div_Observaciones_spte">
                    <p>Observaciones: </p>
                    <textarea name="input_Observaciones_spte_reg" cols="30" rows="10"
                        list="datalist_SugerenciasDeObservaciones"></textarea>

                </div>
                <div class="div_Botones_cancelarYGuardar">
                    <input type="hidden" name="accion" id="accion" value="Agregar_Soporte">
                    <button id="btn_CerrarVentana" type="button" onclick="recargarPagina()"
                        class="btn_Cancelar">Cancelar</button>
                    <button class="btn_Agregar OcultarElemento" type="submit" id="btn_agregarSoporte">Agregar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="Ventana_AgregarReserva" id="Ventana_AgregarReserva">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="<?php echo SERVERURL; ?>controladores/agregar_usoDeLaboratorio_Controlador.php" method="POST"
                class="Contenido">

                <div>
                    <p>Seleccione la Materia:</p>
                    <select id="select_Materias" name="materiaSeleccionada_reg" required>
                        <option value="Seleccione" disabled selected>Seleccione una Materia</option>
                        <option value="NO_ES_MATERIA">---NO ES MATERIA---</option>
                        <option value="45">---OTRA MATERIA---</option>
                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Materias para un Select"); ?>
                    </select>
                </div>
                <div id="div_tituloDeReserva" class="OcultarElemento" id="div_cont_TituloDeReserva">
                    <p>Titulo de Reserva:</p>
                    <input type="text" name="tituloDeLaReserva_reg">
                </div>
                <div class="OcultarElemento" id="div_DocentesExtraidos">
                    <p>Seleccione el Docente\Encargado:</p>
                    <select name="docenteSeleccionado_reg">
                        <option value="Seleccione" disabled selected>Seleccione un Docente</option>
                        <option value="6">---OTRO DOCENTE---</option>
                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Docentes para un Select") ?>
                    </select>
                </div>
                <div class="OcultarElemento" id="div_selectModalidadDeReserva">
                    <p>Modalidad de Reserva:</p>
                    <select name="modalidadSeleccionada_reg" id="select_Modalidad">
                        <option value="Seleccione" disable selected>Seleccione un tipo de Reserva</option>
                        <option value="Fecha_Especifica">Fecha Especifica</option>
                        <option value="Presencial">Presencial(Modular)</option>
                        <option value="SemiPresencial(Martes-Jueves)">SemiPresencial(Martes-Jueves)</option>
                        <option value="SemiPresencial(Lunes-Miercoles)">SemiPresencial(Lunes-Miercoles)</option>
                        <option value="SemiPresencial(Sabados)">SemiPresencial(Sabados)</option>
                    </select>
                </div>
                <div class="Seccion">
                    <div id="div_Cont_semestre" class="OcultarElemento">
                        <p>Semestre:</p>
                        <select name="semestreSeleccionado_reg" id="">
                            <option value="Seleccione" selected>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div id="div_Cont_modulo" class="OcultarElemento">
                        <p>Modulo:</p>
                        <select name="moduloSeleccionado_reg" id="">
                            <option value="Seleccione" selected>Seleccione</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div id="div_Cont_gestion" class="OcultarElemento">
                        <p>Gestión:</p>
                        <select name="gestionSeleccionada_reg" id="">
                            <option value="Seleccione">Seleccione</option>
                            <option value="2023" selected>2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>

                </div>
                <div class="Seccion Seccion_Fechas">
                    <div id="inputFechaInicio" class="OcultarElemento">
                        <p>Fecha Inicio:</p>
                        <input type="date" name="fechaInicioSeleccionada_reg">
                    </div>
                    <div id="inputFechaFinal" class="OcultarElemento">
                        <p>Fecha Final:</p>
                        <input type="date" name="fechaFinalSeleccionada_reg">
                    </div>
                </div>
                <div class="Seccion">
                    <div id="div_cont_horaInicio" class="OcultarElemento">
                        <p>Hora inicio:</p>
                        <input type="time" name="horaInicioSeleccionada_reg">
                    </div>
                    <div id="div_cont_horaFinal" class="OcultarElemento">
                        <p>Hora Final:</p>
                        <input type="time" name="horaFinalSeleccionada_reg">
                    </div>
                </div>
                <div id="div_horario" class="OcultarElemento">
                    <p>Horario:</p>
                    <select name="horarioSeleccionado_reg" id="">
                        <option value="Seleccione" selected>Seleccione</option>
                        <option value="07:15_10:00">07:15 - 10:00</option>
                        <option value="10:15_13:00">10:15 - 13:00</option>
                        <option value="13:15_16:00">13:15 - 16:00</option>
                        <option value="15:00_19:00">15:00 - 19:00</option>
                        <option value="16:15_19:00">16:15 - 19:00</option>
                        <option value="19:15_21:45">19:15 - 21:45</option>

                    </select>
                </div>
                <div id="div_cont_cantDeAsistentes" class="OcultarElemento">
                    <p>Cantidad de Estudiantes:</p>
                    <input type="number" placeholder="00" name="cantidadDeAsistentes_reg">
                </div>
                <div id="div_cont_requerimientos" class="OcultarElemento">
                    <p>Requerimientos: </p>
                    <textarea style="padding: 10px;" name="requerimientos_reg" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="div_Botones_cancelarYGuardar">
                    <input type="hidden" name="accion" id="accion" value="Agregar_Solicitud_de_Reserva">
                    <button id="btn_CerrarVentana" type="button" class="btn_Cancelar"
                        onclick="recargarPagina()">Cancelar</button>
                    <button id="btn_enviarSolicitud" type="submit" class="OcultarElemento btn_Agregar">Agregar</button>
                </div>




            </form>


        </div>
    </div>

    <div class="Ventana_EditarSoporte" id="Ventana_EditarSoporte">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="<?php echo SERVERURL; ?>controladores/agregar_usoDeLaboratorio_Controlador.php" method="POST" class="Contenido">

                <div>
                    <p>Seleccione el Usuario Atendido:</p>
                    <select id="select_Vna_EditarSoporte_UsuarioAtendido" name="select_UsuarioAtendido_spte_editar">
                        <option value="Seleccionar" selected>Seleccione</option>
                        <option value="6">---OTRO DOCENTE---</option>
                        <?php $usoLaboratorio_Controlador->ExtraerTablas("Docentes para un Select") ?>

                    </select>
                </div>

                <div>
                    <p>Seleccione el Medio de Soporte:</p>
                    <select id="select_Vna_EditarSoporte_Medio_de_Soporte" name="select_MedioDeSoporte_spte_editar">
                        <option value="Seleccionar" selected>Seleccione</option>
                        <option value="Presencial">Presencial</option>
                        <option value="Cafe Internet">Cafe Internet</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Otros Medios">Otros Medios</option>
                    </select>
                </div>
                <div>
                    <p>Motivo: </p>
                    <input id="input_Vna_EditarSoporte_Motivo" type="text" placeholder="" name="input_Motivo_spte_editar">
                </div>

                
                <div class="Seccion Seccion_Fechas ocultar">
                    <div>
                        <p>Hora de Solicitud:</p>
                        <input id="input_Vna_EditarSoporte_HoraSolicitud" type="time" name="input_horaSolicitud_spte_editar">
                    </div>
                </div>


                <div class="div_Botones_cancelarYGuardar">
                    <input type="hidden" id="input_Id_del_Soporte" name="id_del_Soporte" value="">
                    <input type="hidden" name="accion" id="accion" value="Editar_Soporte">
                    <button type="button" onclick="recargarPagina()" id="btn_CerrarVentana"  class="btn_Cancelar">Cancelar</button>
                    <button type="submit" class="btn_Agregar">Editar</button>

                </div>




            </form>


        </div>
    </div>

    <div class="Ventana_AgregarMateria" id="Ventana_AgregarMateria">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="<?php echo SERVERURL; ?>controladores/agregar_usoDeLaboratorio_Controlador.php" method="POST"  class="Contenido">

        
                <div>
                    <p>Materia: </p>
                    <input type="text" placeholder="" name="input_NombreMateria_reg" required>
                </div>


                <div class="div_Botones_cancelarYGuardar">
                    <input type="hidden" name="accion" id="accion" value="Agregar_Materia">
                    <button type="button" onclick="recargarPagina()" id="btn_CerrarVentana"  class="btn_Cancelar">Cancelar</button>
                    <button type="submit" class="btn_Agregar">Agregar</button>

                </div>
            </form>


        </div>
    </div>


</body>

<script type="text/javascript" src="<?php echo SERVERURL; ?>vistas/javascript/funciones_usoLaboratorio.js"></script>
