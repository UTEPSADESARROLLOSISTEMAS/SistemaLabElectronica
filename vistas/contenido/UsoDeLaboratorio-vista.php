
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-usoLaboratorio.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo_Vna_AgregarLaboratorio.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo_Vna_AgregarSoporte.css">

<body>
    <div class="Ventana_AgregarReserva" id="Ventana_AgregarReserva">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="" class="Contenido">
               
                <div>
                    <p>Introduzca el nombre del Docente/Encargado:</p>
                    <input type="text" placeholder="">
                </div>
                <div>
                    <p>Materia o Titulo de Laboratorio:</p>
                    <input type="text" placeholder="">
                </div>
                <div class="Seccion">
                    
                    
                    <div>
                        <p>Aula:</p>
                        <select name="" id="">
                            <option value="Ninguna" selected>Seleccione un Aula</option>
                            <option value="N-200">N-200</option>
                            <option value="N-201">N-201</option>
                            <option value="N-202">N-202</option>
                            <option value="N-210">N-210</option>
                            <option value="N-211">N-211</option>
                            <option value="N-220">N-220</option>
                            <option value="N-221">N-221</option>
                            <option value="N-222">N-222</option>
                            <option value="N-300">N-300</option>
                            <option value="N-301">N-301</option>
                            <option value="N-400">N-400</option>
                            <option value="N-401">N-401</option>
                            <option value="N-402">N-402</option>
                            <option value="N-500">N-500</option>
                            <option value="N-501">N-501</option>
                            <option value="N-502">N-502</option>
                            <option value="N-503">N-503</option>
        
                        </select>
    
                    </div>
                    
                </div>
                <div class="Seccion">
                    <div>
                        <p>Cantidad de Estudiantes:</p>
                        <input type="number" placeholder="">
                    </div>
                </div>
                <div>
                    <p>Auxiliar de Laboratorio:</p>
                    <select name="" id="">
                        <option value="Ninguna" selected>Seleccione un Auxiliar</option>
                        <option value="Vacio" >No Requiere Auxiliar de Laboratorio</option>
                        <option value="Asignar">Solicitar Auxiliar de Laboratorio</option>
                        </select>
                </div>
                
                <div>
                    <p>Tipo de Reserva:</p>
                    <select name="" id="">
                        <option value="Ninguna" selected>Seleccione un tipo de Reserva</option>
                        <option value="Modular">Modular</option>
                        <option value="BiModular">BiModular</option>
                        <option value="SemiPresencial(Martes-Jueves)">SemiPresencial(Martes-Jueves)</option>
                        <option value="SemiPresencial(Lunes-Miercoles)">SemiPresencial(Lunes-Miercoles)</option>
                        <option value="SemiPresencial(Sabados)">SemiPresencial(Sabados)</option>
                        <option value="Fecha Especifica">Fecha Especifica</option>
                    </select>
                </div>
                <div class="Seccion Seccion_Fechas">
                    <div>
                        <p>Fecha Inicio:</p>
                        <input type="date">
                    </div>
                    <div>
                        <p>Fecha Final:</p>
                        <input type="date">
                    </div>
                </div>
                <div>
                        
                    <p>Observaciones: </p>
                    <textarea  name="" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="div_Botones_cancelarYGuardar">
    
                    <button id="btn_CerrarVentana" class="btn_Cancelar">Cancelar</button>
                    <button class="btn_Agregar">Agregar</button>
                    
                </div>
    
                
    
                
            </form>
    
            
        </div>
    </div>
    
      


    <div class="Ventana_AgregarSoporte" id="Ventana_AgregarSoporte">
        <div class="Sub_Ventana" id="Sub_VentanaEmergente">
            <form action="" class="Contenido">

                <div class="Seccion">
                    
                    <div>
                        <p>Tipo de Soporte:</p>
                        <select name="" id="">
                            <option value="Seleccionar" selected>Seleccione un Tipo de Soporte</option>
                            <option value="Docente" >Docente</option>
                            <option value="Estudiante" >Estudiante</option>
                            <option value="Administrativo" >Administrativo</option>
                            <option value="Otros">Otros</option>

                        </select>
                    </div>
                    <div>
                        <p>Medio de Atención:</p>
                        <select  name="" id="">
                            <option value="Seleccionar" selected>Seleccione el medio de Atención</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Otros Medios">Otros Medios</option>

                        </select>

                    </div>
                    
                </div>
                
                <div>
                    <p>Introduzca el Nombre Completo:</p>
                    <input type="text" placeholder="">
                </div>
                <div class="Seccion">
                    <div>
                        <p>Nro de Registro:</p>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div>
                    <p>Materia:</p>
                    <input type="text" placeholder="">
                </div>
                <div>
                    <p>Problema:</p>
                    <input type="text" placeholder="">
                </div>
                <div>
                    <p>Solución:</p>
                    <input type="text" placeholder="">
                </div>
                
                
                
                <div class="Seccion Seccion_Fechas">
                    <div>
                        <p>Fecha:</p>
                        <input type="date">
                    </div>
                </div>
                <div>
                        
                    <p>Observaciones: </p>
                    <textarea  name="" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="div_Botones_cancelarYGuardar">

                    <button id="btn_CerrarVentana" class="btn_Cancelar">Cancelar</button>
                    <button class="btn_Agregar">Agregar</button>
                    
                </div>

                

                
            </form>

            
        </div>
    </div>
    <div class="Bloque_principal">

        <div class="Bloque_Sub_Principal">
            <div class="Seccion_1 DivConDisplayInlineBlock">
                
                <div class="Botones DivConDisplayInlineBlock ">
                   
                    <div id="btn_AgregarReserva" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                            </g>
                            </svg>
                            
                        <label  class="">
                            Agregar Solicitud
                        </label>
                    </div>
                   
                </div>
                <div class="Botones DivConDisplayInlineBlock ">
                   
                    <div id="btn_AgregarSoporte" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                            </g>
                            </svg>
                            
                        <label  class="">
                            Agregar Soporte
                        </label>
                    </div>
                   
                </div>
               
            </div>
            <div style="display: none;" class="Seccion_2 DivConDisplayInlineBlock">
                <div class="Boton">
                    <div class="contenido">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 19.898438 20.976562 L 13.324219 14.398438 C 12.824219 14.832031 12.242188 15.171875 11.574219 15.414062 C 10.910156 15.652344 10.199219 15.773438 9.449219 15.773438 C 7.648438 15.773438 6.125 15.148438 4.875 13.898438 C 3.625 12.648438 3 11.140625 3 9.375 C 3 7.609375 3.625 6.101562 4.875 4.851562 C 6.125 3.601562 7.640625 2.976562 9.425781 2.976562 C 11.191406 2.976562 12.695312 3.601562 13.9375 4.851562 C 15.179688 6.101562 15.800781 7.609375 15.800781 9.375 C 15.800781 10.089844 15.683594 10.785156 15.449219 11.449219 C 15.214844 12.117188 14.867188 12.742188 14.398438 13.324219 L 21 19.875 Z M 9.425781 14.273438 C 10.773438 14.273438 11.925781 13.796875 12.875 12.835938 C 13.824219 11.878906 14.300781 10.726562 14.300781 9.375 C 14.300781 8.023438 13.824219 6.871094 12.875 5.914062 C 11.925781 4.953125 10.773438 4.476562 9.425781 4.476562 C 8.058594 4.476562 6.894531 4.953125 5.9375 5.914062 C 4.980469 6.871094 4.5 8.023438 4.5 9.375 C 4.5 10.726562 4.980469 11.878906 5.9375 12.835938 C 6.894531 13.796875 8.058594 14.273438 9.425781 14.273438 Z M 9.425781 14.273438 "/>
                            </g>
                            </svg>
                        <label id="btn_BuscarReserva">Buscar</label>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="Bloque_SubPrincipal_2">
            <div class="DivDatoExtraido">
                <div class="divContenedorDatosExtraidos DivConDisplayFlex fill_Color_Verde">
                   
                    <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono " >
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 10.773438 20.648438 L 4.5 20.648438 C 4.101562 20.648438 3.75 20.5 3.449219 20.199219 C 3.148438 19.898438 3 19.550781 3 19.148438 L 3 4.601562 C 3 4.199219 3.128906 3.851562 3.386719 3.550781 C 3.644531 3.25 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.449219 3.101562 19.800781 3.25 20.101562 3.550781 C 20.398438 3.851562 20.550781 4.199219 20.550781 4.601562 L 20.550781 9.675781 L 19.050781 9.675781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 10.773438 19.148438 Z M 15.5 20.023438 L 11.5 16.023438 L 12.574219 14.949219 L 15.5 17.875 L 21.476562 11.898438 L 22.550781 12.976562 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                            </g>
                            </svg>
                    </div>
                    <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>
                            <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                            <p class="TextMontserrat">Reservas Confirmadas</p>
                        </div>
                    </div>
                    

                </div>
                

            </div>
            
            <div class="DivDatoExtraido">

                
                <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                   
                    <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Amarillo" >
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 17.273438 22 C 15.976562 22 14.863281 21.539062 13.9375 20.613281 C 13.011719 19.6875 12.550781 18.574219 12.550781 17.273438 C 12.550781 15.976562 13.011719 14.863281 13.9375 13.9375 C 14.863281 13.011719 15.976562 12.550781 17.273438 12.550781 C 18.574219 12.550781 19.6875 13.011719 20.613281 13.9375 C 21.539062 14.863281 22 15.976562 22 17.273438 C 22 18.574219 21.539062 19.6875 20.613281 20.613281 C 19.6875 21.539062 18.574219 22 17.273438 22 Z M 18.726562 19.800781 L 19.425781 19.101562 L 17.550781 17.226562 L 17.550781 14.425781 L 16.574219 14.425781 L 16.574219 17.574219 Z M 4.5 20.648438 C 4.082031 20.648438 3.730469 20.503906 3.4375 20.210938 C 3.144531 19.921875 3 19.566406 3 19.148438 L 3 4.601562 C 3 4.183594 3.128906 3.828125 3.386719 3.539062 C 3.644531 3.246094 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.464844 3.101562 19.820312 3.246094 20.113281 3.539062 C 20.402344 3.828125 20.550781 4.183594 20.550781 4.601562 L 20.550781 11.976562 C 20.300781 11.824219 20.054688 11.695312 19.8125 11.585938 C 19.570312 11.480469 19.316406 11.382812 19.050781 11.300781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 11.324219 19.148438 C 11.410156 19.398438 11.507812 19.644531 11.625 19.886719 C 11.742188 20.128906 11.882812 20.382812 12.050781 20.648438 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                            </g>
                        </svg>
                            
                            
                    </div>
                    <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>
                            
                            <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                            <p class="TextMontserrat">Solicitudes de Lab.</p>

                        </div>
                    </div>
                    

                </div>
                

            </div>
            
            <div class="DivDatoExtraido">

                
                <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                   
                    <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Rojo" >
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 21 18.851562 L 19.5 17.351562 L 19.5 4.5 L 18 4.5 L 18 6.75 L 8.875 6.75 L 5.125 3 L 9.550781 3 C 9.667969 2.417969 9.953125 1.9375 10.414062 1.5625 C 10.871094 1.1875 11.398438 1 12 1 C 12.601562 1 13.128906 1.1875 13.585938 1.5625 C 14.046875 1.9375 14.332031 2.417969 14.449219 3 L 19.5 3 C 19.933594 3 20.292969 3.140625 20.574219 3.425781 C 20.859375 3.707031 21 4.066406 21 4.5 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 17.351562 19.5 L 4.5 6.648438 L 4.5 19.5 Z M 4.5 21 C 4.066406 21 3.707031 20.859375 3.425781 20.574219 C 3.140625 20.292969 3 19.933594 3 19.5 L 3 5.148438 L 1.523438 3.675781 L 2.601562 2.601562 L 21.398438 21.398438 L 20.324219 22.476562 L 18.851562 21 Z M 4.5 21 "/>
                            </g>
                        </svg>
                            
                    </div>
                    <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>
                            
                            <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                            <p class="TextMontserrat">Reservas Canceladas</p>

                        </div>
                    </div>
                    

                </div>
                

            </div>
            
            <div class="DivDatoExtraido">

                
                <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                   
                    <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Morado" >
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.976562 21 L 4.726562 17.023438 L 4.726562 11.023438 L 1 9 L 11.976562 3 L 23 9 L 23 16.925781 L 21.5 16.925781 L 21.5 9.875 L 19.226562 11.023438 L 19.226562 17.023438 Z M 11.976562 13.300781 L 19.851562 9 L 11.976562 4.773438 L 4.148438 9 Z M 11.976562 19.300781 L 17.726562 16.125 L 17.726562 11.925781 L 11.976562 15 L 6.226562 11.875 L 6.226562 16.125 Z M 12 13.300781 Z M 11.976562 15.148438 Z M 11.976562 15.148438 Z M 11.976562 15.148438 "/>
                            </g>
                        </svg>
                            
                            
                    </div>
                    <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                        <div>
                            
                            <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                            <p class="TextMontserrat">Asist. Estudiantes</p>

                        </div>
                    </div>
                    

                </div>
                

            </div>
        </div>
        <div class="Bloque_SubPrincipal_3">





            <div class="ContenedorDeLasTabla">
                <div class="DivConlaTabla">

                    <div class="divTextoCentradoVertical_y_Horizontal">
                        <p class="TextUbuntu_Bold txtGrande">Reservas para Hoy</p>
                    </div>

                    <table >
                        <tr>
                          <td>
                             <table  cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                               <tr>
                                  <th class="Columna_25">Materia / Titulo Lab.</th>
                                  <th class="Columna_25">Docente</th>
                                  <th class="Columna_20">Horario</th>
                                  <th class="Columna_20">Lugar</th>
                                  <th>Cant. Est.</th>
                               </tr>
                             </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                             <div class="Div_DeLa_SubTabla">
                               <table  cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">
                                 <tr>
                                    <td class="Columna_25">Titulo o Materia</td>
                                    <td class="Columna_25">Nombre_apellido</td>
                                    <td class="Columna_20">00:00 - 00:00</td>
                                    <td class="Columna_20">N-000</td>
                                    <td class="Columna_10">000</td>
                                 </tr>
                                 <tr>
                                    <td class="Columna_25">Titulo o Materia</td>
                                    <td class="Columna_25">Nombre_apellido</td>
                                    <td class="Columna_20">00:00 - 00:00</td>
                                    <td class="Columna_20">N-000</td>
                                    <td class="Columna_10">000</td>
                                 </tr>
                                 <tr>
                                    <td class="Columna_25">Titulo o Materia</td>
                                    <td class="Columna_25">Nombre_apellido</td>
                                    <td class="Columna_20">00:00 - 00:00</td>
                                    <td class="Columna_20">N-000</td>
                                    <td class="Columna_10">000</td>
                                 </tr>
                                 <tr>
                                    <td class="Columna_25">Titulo o Materia</td>
                                    <td class="Columna_25">Nombre_apellido</td>
                                    <td class="Columna_20">00:00 - 00:00</td>
                                    <td class="Columna_20">N-000</td>
                                    <td class="Columna_10">000</td>
                                 </tr>
                                 <tr>
                                    <td class="Columna_25">Titulo o Materia</td>
                                    <td class="Columna_25">Nombre_apellido</td>
                                    <td class="Columna_20">00:00 - 00:00</td>
                                    <td class="Columna_20">N-000</td>
                                    <td class="Columna_10">000</td>
                                 </tr>
                               </table>
                             </div>
                          </td>
                        </tr>
                      </table>

                    <div class="DivConTexto divTextoAlaDerecha">
                        <p style="cursor: pointer;">Ver más...</p>
                    </div>


                </div>
            </div>




        </div>
    </div>

    
</body>
