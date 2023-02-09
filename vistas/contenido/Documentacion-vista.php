
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Documentacion.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo_Vna_AgregarDocumentacion.css">

<div class="Ventana_AgregarDocumentacion" id="Ventana_AgregarDocumentacion">
    <div class="Sub_Ventana" id="Sub_VentanaEmergente">
        <form action="" class="Contenido">

            <div>
                <p>Codigo de Formulario:</p>
                <input type="number" placeholder="">
            </div>
            <div class="ocultar">
                <p>Descripcion del Documento:</p>
                <input type="text" placeholder="">
            </div>

            
            <div class="Seccion Seccion_Fechas ocultar">
                <div>
                    <p>Fecha de Registro:</p>
                    <input type="date">
                </div>
            </div>
            <div class="Seccion ocultar">
                <div>
                    <p>Codigo VER:</p>
                    <input type="number" placeholder="">
                </div>
            </div>
            <div id="" class="">
                <p>Seleccione el Estado del Formulario:</p>
                <select name=""  onclick="">
                    <option value="Seleccionar" selected>Estado de Uso</option>
                    <option value="Vigente">Vigente</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>

            <div class="Seccion Contenedor_input_file">

                <input class="input_AñadirArchivo" id="input_AñadirArchivo" type="file">
            </div>

            <div class="ocultar">

                <p>Observaciones: </p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
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
                
                <div id="btn_MostrarVentanaAgregarDocumentacion" class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                        </g>
                    </svg>
                        
                    <p class="">
                        Agregar Documento
                    </p>
                </div>
                
            </div>
            
        </div>
        <div class="Seccion_2 DivConDisplayInlineBlock">
            <div class="Boton">
                <div class="contenido">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 19.898438 20.976562 L 13.324219 14.398438 C 12.824219 14.832031 12.242188 15.171875 11.574219 15.414062 C 10.910156 15.652344 10.199219 15.773438 9.449219 15.773438 C 7.648438 15.773438 6.125 15.148438 4.875 13.898438 C 3.625 12.648438 3 11.140625 3 9.375 C 3 7.609375 3.625 6.101562 4.875 4.851562 C 6.125 3.601562 7.640625 2.976562 9.425781 2.976562 C 11.191406 2.976562 12.695312 3.601562 13.9375 4.851562 C 15.179688 6.101562 15.800781 7.609375 15.800781 9.375 C 15.800781 10.089844 15.683594 10.785156 15.449219 11.449219 C 15.214844 12.117188 14.867188 12.742188 14.398438 13.324219 L 21 19.875 Z M 9.425781 14.273438 C 10.773438 14.273438 11.925781 13.796875 12.875 12.835938 C 13.824219 11.878906 14.300781 10.726562 14.300781 9.375 C 14.300781 8.023438 13.824219 6.871094 12.875 5.914062 C 11.925781 4.953125 10.773438 4.476562 9.425781 4.476562 C 8.058594 4.476562 6.894531 4.953125 5.9375 5.914062 C 4.980469 6.871094 4.5 8.023438 4.5 9.375 C 4.5 10.726562 4.980469 11.878906 5.9375 12.835938 C 6.894531 13.796875 8.058594 14.273438 9.425781 14.273438 Z M 9.425781 14.273438 "/>
                        </g>
                        </svg>
                    <p>Buscar</p>
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="Bloque_SubPrincipal_2">

        <div class="ContenedorDeLasTabla">
            <div class="DivConlaTabla">

                <div class="divTextoCentradoVertical_y_Horizontal">
                    <p class="TextUbuntu_Bold txtGrande">Documentos</p>
                </div>

                <table >
                    <tr>
                        <td>
                            <table  cellspacing="0" cellpadding="1" class="Text_Montserrat_SemiBold">
                            <tr>
                                <th class="Columna_30">Codigo</th>
                                <th class="Columna_30">Descripcion del Documento</th>
                                <th class="Columna_20">Fecha Registrado</th>
                                <th class="Columna_5">VER</th>
                                <th class="Columna_10">Estado</th>
                                <th class="Columna_5">Descargar</th>

                            </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Div_DeLa_SubTabla">
                            <table  cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans">

                                <tr>
                                <td class="Columna_30">AA-AAA-000-00</td>
                                <td class="Columna_30">Titulo_del_documento</td>
                                <td class="Columna_20">00/00/0000</td>
                                <td class="Columna_5">00</td>
                                <td class="Columna_10">Vigente</td>
                                <td class="Columna_5" class="Columna_10">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                                        <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12.050781 17.050781 L 15.949219 13.148438 L 14.875 12.074219 L 12.800781 14.148438 L 12.800781 9.300781 L 11.300781 9.300781 L 11.300781 14.148438 L 9.226562 12.074219 L 8.148438 13.148438 Z M 5.5 22 C 5.101562 22 4.75 21.851562 4.449219 21.550781 C 4.148438 21.25 4 20.898438 4 20.5 L 4 7.976562 L 9.976562 2 L 18.5 2 C 18.898438 2 19.25 2.148438 19.550781 2.449219 C 19.851562 2.75 20 3.101562 20 3.5 L 20 20.5 C 20 20.898438 19.851562 21.25 19.550781 21.550781 C 19.25 21.851562 18.898438 22 18.5 22 Z M 5.5 20.5 L 18.5 20.5 L 18.5 3.5 L 10.648438 3.5 L 5.5 8.648438 Z M 5.5 20.5 L 18.5 20.5 Z M 5.5 20.5 "/>
                                        </g>
                                        </svg>
                                        
                                </td>
                                </tr>
                                
                            </table>
                            </div>
                        </td>
                    </tr>
                    </table>

                <div class="DivConTexto divTextoAlaDerecha">
                    <p class=" TextUbuntu_Bold " style="cursor: pointer;">Ver más...</p>
                </div>


            </div>
        </div>




    </div>
</div>

