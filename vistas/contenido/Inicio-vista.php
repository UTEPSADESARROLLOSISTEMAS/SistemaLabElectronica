
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Inicio.css">
    
    
<?php  
 require_once "../SistemaLabUtepsa/controladores/inicio_Controlador.php";

?>
    <div class="Bloque_principal">
            
            <div class="Bloque_SubPrincipal_1">

                <div class="DivDatoExtraido">

                    <div>
                        
                    <div class="ContenedorIcono divContenedorVerde">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 10.773438 20.648438 L 4.5 20.648438 C 4.101562 20.648438 3.75 20.5 3.449219 20.199219 C 3.148438 19.898438 3 19.550781 3 19.148438 L 3 4.601562 C 3 4.199219 3.128906 3.851562 3.386719 3.550781 C 3.644531 3.25 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.449219 3.101562 19.800781 3.25 20.101562 3.550781 C 20.398438 3.851562 20.550781 4.199219 20.550781 4.601562 L 20.550781 9.675781 L 19.050781 9.675781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 10.773438 19.148438 Z M 15.5 20.023438 L 11.5 16.023438 L 12.574219 14.949219 L 15.5 17.875 L 21.476562 11.898438 L 22.550781 12.976562 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                            </g>
                        </svg>
                    </div>

                    <div class="divContenedorDatosExtraidos_BloquePrincipal1">
                        <div class="divContenedorDatosExtraidos1_1">

                            <div class="divTextoAlaDerecha  TextTitulos">
                                <p style="color: #5B5B5B;">Reservas Confirmadas</p>
                            </div>
                            <div class="divTextoCentradoVertical_y_Horizontal TextResultados">
                                <p style="color:black;"><?php inicio_Controlador::ExtraerCantidad("ReservasConfirmadas");?></p>
                            </div>
                            <hr>
                            <div class="divTextoCentradoVertical_y_Horizontal TextTitulos_Bold">
                                <p style="color: #5B5B5B;">Ver las Reservas de Lab.</p>
                            </div>

                        </div>
                        

                    </div>

                    </div>
                    

                </div>
                <div class="DivDatoExtraido">
                    <div>
                            
                        <div class="ContenedorIcono divContenedorAmarillo">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 17.273438 22 C 15.976562 22 14.863281 21.539062 13.9375 20.613281 C 13.011719 19.6875 12.550781 18.574219 12.550781 17.273438 C 12.550781 15.976562 13.011719 14.863281 13.9375 13.9375 C 14.863281 13.011719 15.976562 12.550781 17.273438 12.550781 C 18.574219 12.550781 19.6875 13.011719 20.613281 13.9375 C 21.539062 14.863281 22 15.976562 22 17.273438 C 22 18.574219 21.539062 19.6875 20.613281 20.613281 C 19.6875 21.539062 18.574219 22 17.273438 22 Z M 18.726562 19.800781 L 19.425781 19.101562 L 17.550781 17.226562 L 17.550781 14.425781 L 16.574219 14.425781 L 16.574219 17.574219 Z M 4.5 20.648438 C 4.082031 20.648438 3.730469 20.503906 3.4375 20.210938 C 3.144531 19.921875 3 19.566406 3 19.148438 L 3 4.601562 C 3 4.183594 3.128906 3.828125 3.386719 3.539062 C 3.644531 3.246094 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.464844 3.101562 19.820312 3.246094 20.113281 3.539062 C 20.402344 3.828125 20.550781 4.183594 20.550781 4.601562 L 20.550781 11.976562 C 20.300781 11.824219 20.054688 11.695312 19.8125 11.585938 C 19.570312 11.480469 19.316406 11.382812 19.050781 11.300781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 11.324219 19.148438 C 11.410156 19.398438 11.507812 19.644531 11.625 19.886719 C 11.742188 20.128906 11.882812 20.382812 12.050781 20.648438 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                                </g>
                            </svg>
                        </div>

                        <div class="divContenedorDatosExtraidos_BloquePrincipal1">
                            <div class="divContenedorDatosExtraidos1_1">

                                <div class="divTextoAlaDerecha TextTitulos">
                                    <p style="color: #5B5B5B;">Solicitudes de Reservas</p>
                                </div>
                                <div class="divTextoCentradoVertical_y_Horizontal TextResultados">
                                    <p style="color:black;"><?php inicio_Controlador::ExtraerCantidad("SolicitudesDeReserva");?></p>
                                </div>
                                <hr>
                                <div class="divTextoCentradoVertical_y_Horizontal TextTitulos_Bold">
                                    <p style="color: #5B5B5B;">Ver las Solicitudes</p>
                                </div>

                            </div>
                            

                        </div>

                    </div>
                    

                </div>
                <div class="DivDatoExtraido">

                    <div>
                        <div class="ContenedorIcono
                        divContenedorRojo">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 4.5 21 C 4.082031 21 3.730469 20.855469 3.4375 20.5625 C 3.144531 20.269531 3 19.917969 3 19.5 L 3 4.5 C 3 4.082031 3.144531 3.730469 3.4375 3.4375 C 3.730469 3.144531 4.082031 3 4.5 3 L 9.625 3 C 9.707031 2.417969 9.976562 1.9375 10.425781 1.5625 C 10.875 1.1875 11.398438 1 12 1 C 12.601562 1 13.125 1.1875 13.574219 1.5625 C 14.023438 1.9375 14.292969 2.417969 14.375 3 L 19.5 3 C 19.917969 3 20.269531 3.144531 20.5625 3.4375 C 20.855469 3.730469 21 4.082031 21 4.5 L 21 19.5 C 21 19.917969 20.855469 20.269531 20.5625 20.5625 C 20.269531 20.855469 19.917969 21 19.5 21 Z M 4.5 19.5 L 19.5 19.5 L 19.5 4.5 L 4.5 4.5 Z M 7 17 L 13.824219 17 L 13.824219 15.5 L 7 15.5 Z M 7 12.75 L 17 12.75 L 17 11.25 L 7 11.25 Z M 7 8.5 L 17 8.5 L 17 7 L 7 7 Z M 12 4.074219 C 12.234375 4.074219 12.4375 3.988281 12.613281 3.8125 C 12.789062 3.636719 12.875 3.433594 12.875 3.199219 C 12.875 2.964844 12.789062 2.761719 12.613281 2.585938 C 12.4375 2.414062 12.234375 2.324219 12 2.324219 C 11.765625 2.324219 11.5625 2.414062 11.386719 2.585938 C 11.210938 2.761719 11.125 2.964844 11.125 3.199219 C 11.125 3.433594 11.210938 3.636719 11.386719 3.8125 C 11.5625 3.988281 11.765625 4.074219 12 4.074219 Z M 4.5 19.5 L 4.5 4.5 Z M 4.5 19.5 "/>
                                </g>
                            </svg>
                        </div>

                        <div class="divContenedorDatosExtraidos_BloquePrincipal1">
                            <div class="divContenedorDatosExtraidos1_1">

                                <div class="divTextoAlaDerecha TextTitulos">
                                    <p style="color: #5B5B5B;">Tareas Asignadas</p>
                                </div>
                                <div class="divTextoCentradoVertical_y_Horizontal TextResultados">
                                    <p style="color:black;"><?php inicio_Controlador::ExtraerCantidad("TareasAsignadas");?></p>
                                </div>
                                <hr>
                                <div class="divTextoCentradoVertical_y_Horizontal TextTitulos_Bold">
                                    <p style="color: #5B5B5B;">Ver las Tareas Asignadas</p>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                
                    

                </div>
                <div class="DivDatoExtraido">

                    <div>
                        <div class="ContenedorIcono divContenedorMorado">
                                                
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 17.273438 22 C 15.976562 22 14.863281 21.539062 13.9375 20.613281 C 13.011719 19.6875 12.550781 18.574219 12.550781 17.273438 C 12.550781 15.976562 13.011719 14.863281 13.9375 13.9375 C 14.863281 13.011719 15.976562 12.550781 17.273438 12.550781 C 18.574219 12.550781 19.6875 13.011719 20.613281 13.9375 C 21.539062 14.863281 22 15.976562 22 17.273438 C 22 18.574219 21.539062 19.6875 20.613281 20.613281 C 19.6875 21.539062 18.574219 22 17.273438 22 Z M 18.726562 19.800781 L 19.425781 19.101562 L 17.550781 17.226562 L 17.550781 14.425781 L 16.574219 14.425781 L 16.574219 17.574219 Z M 4.5 20.648438 C 4.082031 20.648438 3.730469 20.503906 3.4375 20.210938 C 3.144531 19.921875 3 19.566406 3 19.148438 L 3 4.601562 C 3 4.183594 3.128906 3.828125 3.386719 3.539062 C 3.644531 3.246094 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.464844 3.101562 19.820312 3.246094 20.113281 3.539062 C 20.402344 3.828125 20.550781 4.183594 20.550781 4.601562 L 20.550781 11.976562 C 20.300781 11.824219 20.054688 11.695312 19.8125 11.585938 C 19.570312 11.480469 19.316406 11.382812 19.050781 11.300781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 11.324219 19.148438 C 11.410156 19.398438 11.507812 19.644531 11.625 19.886719 C 11.742188 20.128906 11.882812 20.382812 12.050781 20.648438 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                                </g>
                            </svg>
        
                        </div>

                        <div class="divContenedorDatosExtraidos_BloquePrincipal1">
                            <div class="divContenedorDatosExtraidos1_1">

                                <div class="divTextoAlaDerecha TextTitulos">
                                    <p style="color: #5B5B5B;">Prestamos de Activos</p>
                                </div>
                                <div class="divTextoCentradoVertical_y_Horizontal TextResultados">
                                    <p style="color:black;"><?php inicio_Controlador::ExtraerCantidad("PrestamosDeActivos");?></p>
                                </div>
                                <hr>
                                <div class="divTextoCentradoVertical_y_Horizontal TextTitulos_Bold Open_Sans_Bold">
                                    <p style="color: #5B5B5B;">Ver los Prestamos</p>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                
                    

                </div>

            </div>
            <div class="Bloque_SubPrincipal_1_2">
                <div class="Contenido">
                    <div class="Tabla">
                        <div class="DivConlaTabla">

                            <div class="divTextoCentradoVertical_y_Horizontal" style="padding: 10px 0px;">
                                <p class="Text_Montserrat_SemiBold">Auxiliares de Laboratorio</p>
                            </div>
                            <table class="TablaMadre">
                                <tr>
                                <td>
                                    <table  cellspacing="0" cellpadding="1" class="TablaMadre_SubTabla_1">
                                    <tr class="Text_Montserrat_SemiBold">
                                        <th class="Columna_50">Nombre</th>
                                        <th class="Columna_20">Horario</th>
                                        <th class="Columna_15">Tareas A.</th>
                                        <th class="Columna_15">Estado</th>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                                <tr>
                                <td class="TextOpen_Sans">
                                    <div class="Div_DeLa_SubTabla">
                                    <table  cellspacing="0" cellpadding="1" class="SubTabla colorGris70Transparencia">
                                        <tr>
                                        <td class="Columna_50">Nombre_apellido</td>
                                        <td class="Columna_20">00:00 - 00:00</td>
                                        <td class="Columna_15">000</td>
                                        <td class="Columna_15" style="color: green;">Activo</td>
                                        </tr>
                                        <?php inicio_Controlador::ExtraerTablas("Auxiliares");?>

                                    </table>  
                                    </div>
                                </td>
                                </tr>
                            </table>
        
                            <div class="DivConTexto divTextoAlaDerecha TextUbuntu_Bold">
                                <p style="cursor: pointer;">Ver más...</p>
                            </div>
        
        
                        </div>
                    </div>
                    <div class="DatosExtraidos">
                        <div class="Columnas">
                            <div class="Cardview">
                                <p class="Txt_Titulo">Soporte a Estudiantes</p>
                                <div class="Seccion fill_Color_Verde">
                                    <p><?php inicio_Controlador::ExtraerCantidad("SoporteAEstudiantes");?></p>
                                                                        
                                                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                        <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 2 20 L 2 17.75 L 4.148438 17.75 L 4.148438 5.5 C 4.148438 5.085938 4.296875 4.734375 4.589844 4.441406 C 4.882812 4.148438 5.238281 4 5.648438 4 L 21.148438 4 L 21.148438 5.5 L 5.648438 5.5 L 5.648438 17.75 L 11.5 17.75 L 11.5 20 Z M 13.976562 20 C 13.699219 20 13.46875 19.886719 13.28125 19.664062 C 13.09375 19.4375 13 19.183594 13 18.898438 L 13 7.976562 C 13 7.699219 13.09375 7.46875 13.28125 7.28125 C 13.46875 7.09375 13.699219 7 13.976562 7 L 20.769531 7 C 21.089844 7 21.375 7.085938 21.625 7.261719 C 21.875 7.4375 22 7.675781 22 7.976562 L 22 18.90625 C 22 19.214844 21.878906 19.476562 21.636719 19.6875 C 21.394531 19.894531 21.109375 20 20.773438 20 Z M 14.5 17.75 L 20.5 17.75 L 20.5 8.5 L 14.5 8.5 Z M 14.5 17.75 "/>
                                        </g>
                                    </svg>


                                </div>
                            </div>
                            <div class="Cardview">
                                <p class="Txt_Titulo">Soporte a Docentes</p>
                                <div class="Seccion fill_Color_Amarillo">
                                    <p><?php inicio_Controlador::ExtraerCantidad("SoporteADocentes");?></p>
                                                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                        <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 2 20 L 2 17.75 L 4.148438 17.75 L 4.148438 5.5 C 4.148438 5.085938 4.296875 4.734375 4.589844 4.441406 C 4.882812 4.148438 5.238281 4 5.648438 4 L 21.148438 4 L 21.148438 5.5 L 5.648438 5.5 L 5.648438 17.75 L 11.5 17.75 L 11.5 20 Z M 13.976562 20 C 13.699219 20 13.46875 19.886719 13.28125 19.664062 C 13.09375 19.4375 13 19.183594 13 18.898438 L 13 7.976562 C 13 7.699219 13.09375 7.46875 13.28125 7.28125 C 13.46875 7.09375 13.699219 7 13.976562 7 L 20.769531 7 C 21.089844 7 21.375 7.085938 21.625 7.261719 C 21.875 7.4375 22 7.675781 22 7.976562 L 22 18.90625 C 22 19.214844 21.878906 19.476562 21.636719 19.6875 C 21.394531 19.894531 21.109375 20 20.773438 20 Z M 14.5 17.75 L 20.5 17.75 L 20.5 8.5 L 14.5 8.5 Z M 14.5 17.75 "/>
                                        </g>
                                    </svg>


                                </div>
                            </div>
                            
                        </div>
                        <div class="Columnas">
                            <div class="Cardview">
                                <p class="Txt_Titulo">Objetos Perdidos</p>
                                <div class="Seccion fill_Color_Amarillo">
                                    <p><?php inicio_Controlador::ExtraerCantidad("ObjetosPerdidos");?></p>
                                                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                        <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 5.5 22 C 5.082031 22 4.730469 21.855469 4.4375 21.5625 C 4.144531 21.269531 4 20.917969 4 20.5 L 4 7.75 C 4 6.832031 4.285156 6.039062 4.851562 5.363281 C 5.417969 4.6875 6.132812 4.265625 7 4.101562 L 7 2 L 9.5 2 L 9.5 4 L 14.5 4 L 14.5 2 L 17 2 L 17 4.101562 C 17.867188 4.265625 18.582031 4.6875 19.148438 5.363281 C 19.714844 6.039062 20 6.832031 20 7.75 L 20 20.5 C 20 20.917969 19.855469 21.269531 19.5625 21.5625 C 19.269531 21.855469 18.917969 22 18.5 22 Z M 5.5 20.5 L 18.5 20.5 L 18.5 7.75 C 18.5 7.117188 18.285156 6.582031 17.851562 6.148438 C 17.417969 5.714844 16.882812 5.5 16.25 5.5 L 7.75 5.5 C 7.132812 5.5 6.605469 5.714844 6.164062 6.148438 C 5.722656 6.582031 5.5 7.117188 5.5 7.75 Z M 15.5 15.75 L 17 15.75 L 17 12.25 L 7 12.25 L 7 13.75 L 15.5 13.75 Z M 5.5 20.5 L 18.5 20.5 Z M 5.5 20.5 "/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="Cardview">
                                <p class="Txt_Titulo">Objetos Perdidos Devueltos</p>
                                <div class="Seccion fill_Color_Verde">
                                    <p><?php inicio_Controlador::ExtraerCantidad("ObjetosPerdidosDevueltos");?></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                        <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 5.5 22 C 5.082031 22 4.730469 21.855469 4.4375 21.5625 C 4.144531 21.269531 4 20.917969 4 20.5 L 4 7.75 C 4 6.832031 4.285156 6.039062 4.851562 5.363281 C 5.417969 4.6875 6.132812 4.265625 7 4.101562 L 7 2 L 9.5 2 L 9.5 4 L 14.5 4 L 14.5 2 L 17 2 L 17 4.101562 C 17.867188 4.265625 18.582031 4.6875 19.148438 5.363281 C 19.714844 6.039062 20 6.832031 20 7.75 L 20 20.5 C 20 20.917969 19.855469 21.269531 19.5625 21.5625 C 19.269531 21.855469 18.917969 22 18.5 22 Z M 5.5 20.5 L 18.5 20.5 L 18.5 7.75 C 18.5 7.117188 18.285156 6.582031 17.851562 6.148438 C 17.417969 5.714844 16.882812 5.5 16.25 5.5 L 7.75 5.5 C 7.132812 5.5 6.605469 5.714844 6.164062 6.148438 C 5.722656 6.582031 5.5 7.117188 5.5 7.75 Z M 15.5 15.75 L 17 15.75 L 17 12.25 L 7 12.25 L 7 13.75 L 15.5 13.75 Z M 5.5 20.5 L 18.5 20.5 Z M 5.5 20.5 "/>
                                        </g>
                                    </svg>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="Bloque_SubPrincipal_2">
                <div class="DivConlaTabla">

                    <div class="divTextoCentradoVertical_y_Horizontal" style="padding: 10px 0px;">
                        <p class="Text_Montserrat_SemiBold">Reservas para Hoy</p>
                    </div>
                    <table class="TablaMadre">
                        <tr>
                        <td>
                            <table  cellspacing="0" cellpadding="1" class="TablaMadre_SubTabla_1">
                            <tr class="Text_Montserrat_SemiBold">
                                <th class="Columna_50">Materia / Titulo Lab.</th>
                                <th class="Columna_20">Horario</th>
                                <th class="Columna_15">Lugar</th>
                                <th class="Columna_15">Cant. Est.</th>
                            </tr>
                            </table>
                        </td>
                        </tr>
                        <tr>
                        <td class="TextOpen_Sans">
                            <div class="Div_DeLa_SubTabla">
                            <table  cellspacing="0" cellpadding="1" class="SubTabla colorGris70Transparencia">
                                <tr>
                                <td class="Columna_50">Nombre_apellido</td>
                                <td class="Columna_20">00:00 - 00:00</td>
                                <td class="Columna_15">N-000</td>
                                <td class="Columna_15">000</td>
                                </tr>
                                <?php inicio_Controlador::ExtraerTablas("ReservasParaHoy");?>

                            </table>  
                            </div>
                        </td>
                        </tr>
                    </table>

                    <div class="DivConTexto divTextoAlaDerecha TextUbuntu_Bold">
                        <p style="cursor: pointer;">Ver más...</p>
                    </div>


                </div>
            </div>
        
            
    </div>