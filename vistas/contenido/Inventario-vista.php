
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Inventario.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Vna_AgregarActivo.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Vna_AgregarCategoria.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Vna_AgregarGrupoDeActivos.css">
<link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/css/estilo-Vna_BuscarEnInventario.css">


<div class="Ventana_AgregarActivo" id="Ventana_AgregarActivo">
    <div class="Sub_Ventana" id="Sub_VentanaEmergente">
        <form action="" class="Contenido">
            <div  class="Seccion_1">
                <select class="Selectores" name="" id="">
                    <option value="Nulo" selected>Seleccione una Categoria</option>
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                </select>
                <select class="Selectores" name="" id="">
                    <option value="Nulo" selected>Seleccione un Grupo de Activo</option>
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                </select>
            </div>
            <div class="Seccion_2">
                <p>Nombre Del Activo:</p>
                <input type="text">
            </div>
            <div class="Seccion_3">
                <p>Codigo de Activo:</p>
                <input type="text">
            </div>

            <div class="Seccion_3_2">
                <p>Cantidad:</p>
                <input type="text">
            </div>
            <div class="Seccion_4"style="display: flex;" >
                <div >
                    <select class="Selectores" name="" id="">
                        <option value="Nulo" selected>¿Requiere Mantenimiento?</option>
                        <option value="">Si</option>
                        <option value="">No</option>
                    </select>
                </div>
                <div>
                    <select class="Selectores" name="" id="">
                        <option value="Nulo" selected>Tipo de Mantenimiento</option>
                        <option value="Preventivo">Preventivo</option>
                        <option value="Correctivo">Correctivo</option>
                        <option value="Actualizacion">Actualizacion</option>
                    </select>
                </div>
                
            </div>
            <div class="Seccion_5">
                <div>
                    <p>Fecha del Proximo Mantenimiento:</p>
                    <input type="date">
                </div>
            </div>
            <div class="Seccion_6">
                
                <p>Observaciones: </p>
                <textarea  name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="Seccion_7">
                
                <button id="btn_CerrarVentana" class="Btn_1">Cancelar</button>
                <button class="Btn_2">Agregar</button>

            </div>
            
        </form>

        
    </div>
</div>

<div class="Ventana_AgregarCategoria" id="Ventana_AgregarCategoria">
    <div class="Sub_Ventana">
        <form action="" class="Contenido">
            
            <div class="Seccion_2">
                <p>Nombre De la Categoria:</p>
                <input type="text">
            </div>
        
            <div class="Seccion_6">
                
                <p>Observaciones: </p>
                <textarea  name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="Seccion_7">
                
                <button id="btn_CerrarVentana" class="Btn_1">Cancelar</button>
                <button class="Btn_2">Agregar</button>

            </div>
            
        </form>

        
    </div>
</div>

<div class="Ventana_AgregarGrupoDeActivos" id="Ventana_AgregarGrupoDeActivos">
    <div class="Sub_Ventana">
        <form action="" class="Contenido">
            <div  class="Seccion_1">
                <select class="Selectores" name="" id="">
                    <option value="Nulo" selected>Seleccione una Categoria</option>
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                </select>
            </div>
            <div class="Seccion_2">
                <p>Nombre Del Grupo De Activo:</p>
                <input type="text">
            </div>
            <div class="Seccion_3">
                <p>Unidad de Medida:</p>
                <input type="text">
            </div>

            <div class="Seccion_6">
                
                <p>Observaciones: </p>
                <textarea  name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="Seccion_7">
                
                <button id="btn_CerrarVentana" class="Btn_1">Cancelar</button>
                <button class="Btn_2">Agregar</button>

            </div>
            
        </form>

        
    </div>
</div>

<div class="Ventana_BuscarActivo" id="Ventana_BuscarActivo">
    <div class="Sub_Ventana">
        <form action="" class="Contenido">
            <div  class="Seccion_1">
                <select class="Selectores" name="" id="">
                    <option value="Nulo" selected>Seleccione una Categoria</option>
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                </select>
                <select class="Selectores" name="" id="">
                    <option value="Nulo" selected>Seleccione un Grupo de Activo</option>
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                </select>
            </div>
            <div class="Seccion_2">
                <p>Nombre Del Activo:</p>
                <input type="text">
            </div>
            <div class="Seccion_3">
                <p>Codigo de Activo:</p>
                <input type="text">
            </div>

            <div class="Seccion_7">
                
                <button id="btn_CerrarVentana" class="Btn_1">Cancelar</button>
                <button class="Btn_2">Agregar</button>

            </div>
            
        </form>

        
    </div>
</div>


<div class="Bloque_principal">
    

    <div class="Bloque_Sub_Principal Text_Montserrat_SemiBold">
        <div class="Seccion_1 DivConDisplayInlineBlock">
            
            <div  id="btn_AgregarActivo" class="Botones DivConDisplayInlineBlock ">
                
                <div class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                        </g>
                        </svg>
                        
                    <label   for="btn_AgregarActivo">
                        Agregar Activo
                    </label>

                </div>
                
            </div>
            <div id="btn_AgregarCategoria" class="Botones DivConDisplayInlineBlock ">
                
                <div   class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                        </g>
                        </svg>
                        
                        
                    <label for="btn_AgregarCategoria">
                        Agregar Categoria
                    </label>
                </div>
                
            </div>
            <div  id="btn_AgregarGrupoDeActivos" class="Botones DivConDisplayInlineBlock ">
                
                <div class="DivConDisplayFlex divTextoCentradoVerticalYHorizontal_sinFlex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.25 19 L 11.25 12.75 L 5 12.75 L 5 11.25 L 11.25 11.25 L 11.25 5 L 12.75 5 L 12.75 11.25 L 19 11.25 L 19 12.75 L 12.75 12.75 L 12.75 19 Z M 11.25 19 "/>
                        </g>
                        </svg>
                        
                    <label for="btn_AgregarGrupoDeActivos">
                        Agregar Grupo de Activos
                    </label>

                </div>
                
            </div>
        </div>
        <div class="Seccion_2 DivConDisplayInlineBlock">
            <div  id="btn_AgregarBuscarActivo" class="Boton">
                <div class="contenido">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 19.898438 20.976562 L 13.324219 14.398438 C 12.824219 14.832031 12.242188 15.171875 11.574219 15.414062 C 10.910156 15.652344 10.199219 15.773438 9.449219 15.773438 C 7.648438 15.773438 6.125 15.148438 4.875 13.898438 C 3.625 12.648438 3 11.140625 3 9.375 C 3 7.609375 3.625 6.101562 4.875 4.851562 C 6.125 3.601562 7.640625 2.976562 9.425781 2.976562 C 11.191406 2.976562 12.695312 3.601562 13.9375 4.851562 C 15.179688 6.101562 15.800781 7.609375 15.800781 9.375 C 15.800781 10.089844 15.683594 10.785156 15.449219 11.449219 C 15.214844 12.117188 14.867188 12.742188 14.398438 13.324219 L 21 19.875 Z M 9.425781 14.273438 C 10.773438 14.273438 11.925781 13.796875 12.875 12.835938 C 13.824219 11.878906 14.300781 10.726562 14.300781 9.375 C 14.300781 8.023438 13.824219 6.871094 12.875 5.914062 C 11.925781 4.953125 10.773438 4.476562 9.425781 4.476562 C 8.058594 4.476562 6.894531 4.953125 5.9375 5.914062 C 4.980469 6.871094 4.5 8.023438 4.5 9.375 C 4.5 10.726562 4.980469 11.878906 5.9375 12.835938 C 6.894531 13.796875 8.058594 14.273438 9.425781 14.273438 Z M 9.425781 14.273438 "/>
                        </g>
                        </svg>
                        <label for="btn_BuscarActivo">Buscar</label>

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
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 2 20 L 2 9.5 C 2 9.101562 2.148438 8.75 2.449219 8.449219 C 2.75 8.148438 3.101562 8 3.5 8 L 7 8 L 7 5.5 C 7 5.101562 7.148438 4.75 7.449219 4.449219 C 7.75 4.148438 8.101562 4 8.5 4 L 15.5 4 C 15.898438 4 16.25 4.148438 16.550781 4.449219 C 16.851562 4.75 17 5.101562 17 5.5 L 17 8 L 20.5 8 C 20.898438 8 21.25 8.148438 21.550781 8.449219 C 21.851562 8.75 22 9.101562 22 9.5 L 22 20 Z M 3.5 18.5 L 20.5 18.5 L 20.5 14.75 L 17.75 14.75 L 17.75 15.75 L 16.25 15.75 L 16.25 14.75 L 7.75 14.75 L 7.75 15.75 L 6.25 15.75 L 6.25 14.75 L 3.5 14.75 Z M 3.5 9.5 L 3.5 13.25 L 6.25 13.25 L 6.25 12.25 L 7.75 12.25 L 7.75 13.25 L 16.25 13.25 L 16.25 12.25 L 17.75 12.25 L 17.75 13.25 L 20.5 13.25 L 20.5 9.5 Z M 8.5 8 L 15.5 8 L 15.5 5.5 L 8.5 5.5 Z M 8.5 8 "/>
                        </g>
                        </svg>
                </div>
                <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                    <div>
                        <p class="TextUbuntu_Bold txt_ExtraGrande" >00</p>
                        <p class="TextOpen_Sans">Cantidad de Activos</p>
                    </div>
                </div>
                

            </div>
            

        </div>
        
        <div class="DivDatoExtraido">

            
            <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                
                <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Amarillo" >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12 17 C 12.234375 17 12.429688 16.921875 12.585938 16.761719 C 12.746094 16.605469 12.824219 16.410156 12.824219 16.175781 C 12.824219 15.941406 12.746094 15.746094 12.585938 15.585938 C 12.429688 15.429688 12.234375 15.351562 12 15.351562 C 11.765625 15.351562 11.570312 15.429688 11.414062 15.585938 C 11.253906 15.746094 11.175781 15.941406 11.175781 16.175781 C 11.175781 16.410156 11.253906 16.605469 11.414062 16.761719 C 11.570312 16.921875 11.765625 17 12 17 Z M 11.324219 13.175781 L 12.824219 13.175781 L 12.824219 6.851562 L 11.324219 6.851562 Z M 12 22 C 10.632812 22 9.339844 21.738281 8.125 21.210938 C 6.910156 20.6875 5.847656 19.972656 4.9375 19.0625 C 4.027344 18.152344 3.3125 17.089844 2.789062 15.875 C 2.261719 14.660156 2 13.359375 2 11.976562 C 2 10.609375 2.261719 9.316406 2.789062 8.101562 C 3.3125 6.882812 4.027344 5.824219 4.9375 4.925781 C 5.847656 4.023438 6.910156 3.3125 8.125 2.789062 C 9.339844 2.261719 10.640625 2 12.023438 2 C 13.390625 2 14.683594 2.261719 15.898438 2.789062 C 17.117188 3.3125 18.175781 4.023438 19.074219 4.925781 C 19.976562 5.824219 20.6875 6.882812 21.210938 8.101562 C 21.738281 9.316406 22 10.617188 22 12 C 22 13.367188 21.738281 14.660156 21.210938 15.875 C 20.6875 17.089844 19.976562 18.152344 19.074219 19.0625 C 18.175781 19.972656 17.117188 20.6875 15.898438 21.210938 C 14.683594 21.738281 13.382812 22 12 22 Z M 12.023438 20.5 C 14.375 20.5 16.375 19.671875 18.023438 18.011719 C 19.675781 16.355469 20.5 14.339844 20.5 11.976562 C 20.5 9.625 19.675781 7.625 18.023438 5.976562 C 16.375 4.324219 14.367188 3.5 12 3.5 C 9.648438 3.5 7.644531 4.324219 5.988281 5.976562 C 4.328125 7.625 3.5 9.632812 3.5 12 C 3.5 14.351562 4.328125 16.355469 5.988281 18.011719 C 7.644531 19.671875 9.660156 20.5 12.023438 20.5 Z M 12 12 Z M 12 12 "/>
                        </g>
                        </svg>
                        
                </div>
                <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                    <div>
                        
                        <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                        <p class="TextOpen_Sans">Activos por agotarse</p>

                    </div>
                </div>
                

            </div>
            

        </div>
        
        <div class="DivDatoExtraido">

            
            <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                
                <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Rojo" >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 1 21 L 12 2 L 23 21 Z M 3.601562 19.5 L 20.398438 19.5 L 12 5 Z M 12.101562 18.074219 C 12.316406 18.074219 12.496094 18.003906 12.636719 17.863281 C 12.777344 17.722656 12.851562 17.542969 12.851562 17.324219 C 12.851562 17.109375 12.777344 16.929688 12.636719 16.789062 C 12.496094 16.644531 12.316406 16.574219 12.101562 16.574219 C 11.882812 16.574219 11.703125 16.644531 11.5625 16.789062 C 11.421875 16.929688 11.351562 17.109375 11.351562 17.324219 C 11.351562 17.542969 11.421875 17.722656 11.5625 17.863281 C 11.703125 18.003906 11.882812 18.074219 12.101562 18.074219 Z M 11.351562 15.300781 L 12.851562 15.300781 L 12.851562 9.699219 L 11.351562 9.699219 Z M 12 12.25 Z M 12 12.25 "/>
                        </g>
                        </svg>
                        
                </div>
                <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                    <div>
                        
                        <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                        <p class="TextOpen_Sans">Activos Agotados</p>

                    </div>
                </div>
                

            </div>
            

        </div>
        
        <div class="DivDatoExtraido">

            
            <div class="divContenedorDatosExtraidos DivConDisplayFlex">
                
                <div class="Elemento_al_50Porciento ElementoCentradoHorizontal_y_Vertical Bloque_SubPrincipal_2_div_ContenedorIcono fill_Color_Morado" >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                        <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.5 16.851562 C 7.699219 16.851562 7.875 16.773438 8.023438 16.625 C 8.175781 16.476562 8.25 16.300781 8.25 16.101562 C 8.25 15.898438 8.175781 15.726562 8.023438 15.574219 C 7.875 15.425781 7.699219 15.351562 7.5 15.351562 C 7.300781 15.351562 7.125 15.425781 6.976562 15.574219 C 6.824219 15.726562 6.75 15.898438 6.75 16.101562 C 6.75 16.300781 6.824219 16.476562 6.976562 16.625 C 7.125 16.773438 7.300781 16.851562 7.5 16.851562 Z M 7.5 12.75 C 7.699219 12.75 7.875 12.675781 8.023438 12.523438 C 8.175781 12.375 8.25 12.199219 8.25 12 C 8.25 11.800781 8.175781 11.625 8.023438 11.476562 C 7.875 11.324219 7.699219 11.25 7.5 11.25 C 7.300781 11.25 7.125 11.324219 6.976562 11.476562 C 6.824219 11.625 6.75 11.800781 6.75 12 C 6.75 12.199219 6.824219 12.375 6.976562 12.523438 C 7.125 12.675781 7.300781 12.75 7.5 12.75 Z M 7.5 8.648438 C 7.699219 8.648438 7.875 8.574219 8.023438 8.425781 C 8.175781 8.273438 8.25 8.101562 8.25 7.898438 C 8.25 7.699219 8.175781 7.523438 8.023438 7.375 C 7.875 7.226562 7.699219 7.148438 7.5 7.148438 C 7.300781 7.148438 7.125 7.226562 6.976562 7.375 C 6.824219 7.523438 6.75 7.699219 6.75 7.898438 C 6.75 8.101562 6.824219 8.273438 6.976562 8.425781 C 7.125 8.574219 7.300781 8.648438 7.5 8.648438 Z M 10.800781 16.851562 L 16.898438 16.851562 L 16.898438 15.351562 L 10.800781 15.351562 Z M 10.800781 12.75 L 16.898438 12.75 L 16.898438 11.25 L 10.800781 11.25 Z M 10.800781 8.648438 L 16.898438 8.648438 L 16.898438 7.148438 L 10.800781 7.148438 Z M 4.5 21 C 4.101562 21 3.75 20.851562 3.449219 20.550781 C 3.148438 20.25 3 19.898438 3 19.5 L 3 4.5 C 3 4.101562 3.148438 3.75 3.449219 3.449219 C 3.75 3.148438 4.101562 3 4.5 3 L 19.5 3 C 19.898438 3 20.25 3.148438 20.550781 3.449219 C 20.851562 3.75 21 4.101562 21 4.5 L 21 19.5 C 21 19.898438 20.851562 20.25 20.550781 20.550781 C 20.25 20.851562 19.898438 21 19.5 21 Z M 4.5 19.5 L 19.5 19.5 L 19.5 4.5 L 4.5 4.5 Z M 4.5 4.5 L 4.5 19.5 Z M 4.5 4.5 "/>
                        </g>
                        </svg>
                        
                </div>
                <div class="Elemento_al_50Porciento divTextoCentradoVerticalYHorizontal_sinFlex  ElementoCentradoHorizontal_y_Vertical">

                    <div>
                        
                        <p class="TextUbuntu_Bold txt_ExtraGrande">00</p>
                        <p class="TextOpen_Sans">Activos Prestados</p>

                    </div>
                </div>
                

            </div>
            

        </div>
    </div>
    <div class="Bloque_SubPrincipal_3">

        <div class="ContenedorDeLasTablas">
            <div class="DivConlaTabla">

                <div class="divTextoCentradoVertical_y_Horizontal">
                    <p class="Text_Montserrat_SemiBold">Mantenimientos Programados</p>
                </div>

                <table class="TablaMadre">
                    <tr>
                        <td>
                            <table  cellspacing="0" cellpadding="1" class="TablaMadre_SubTabla_1">
                            <tr class="TextMontserrat">
                                <th class="Columna_15">Codigo</th>
                                <th class="Columna_50">Nombre Activo</th>
                                <th class="Columna_15">Fecha Mant.</th>
                                <th class="Columna_20">Tipo de Mantenimiento</th>
                            </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Div_DeLa_SubTabla">
                            <table  cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans colorGris70Transparencia">
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td class="Columna_20">Preventivo</td>
                                </tr>
                            </table>  
                            </div>
                        </td>
                    </tr>
                    </table>

                <div class="DivConTexto divTextoAlaDerecha Text_Montserrat_SemiBold">
                    <p style="cursor: pointer;">Ver más...</p>
                </div>


            </div>
        </div>
        
        <div class="ContenedorDeLasTablas">
            <div class="DivConlaTabla">

                <div class="divTextoCentradoVertical_y_Horizontal">
                    <p class="Text_Montserrat_SemiBold">Activos en Reparación</p>
                </div>

                <table class="TablaMadre">
                    <tr>
                        <td>
                            <table  cellspacing="0" cellpadding="1" class="TablaMadre_SubTabla_1 TextMontserrat">
                            <tr>
                                <th class="Columna_15">Codigo</th>
                                <th class="Columna_50">Nombre Activo</th>
                                <th class="Columna_15">Fecha de la Falla</th>
                                <th class="Columna_10">Problema</th>
                                <th class="Columna_10">Estado</th>
                            </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="Div_DeLa_SubTabla">
                            <table  cellspacing="0" cellpadding="1" class="SubTabla TextOpen_Sans colorGris70Transparencia">
                            <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td style="cursor: pointer; color: blue;" class="Columna_10">Ver</td>
                                <td style="cursor: pointer; color: #13A53C;" class="Columna_10">Reparado</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td style="cursor: pointer; color: blue;" class="Columna_10">Ver</td>
                                <td style="cursor: pointer; color: #D2C54F;" class="Columna_10">En Proceso</td>
                                </tr>
                                <tr>
                                <td class="Columna_15">0000000000000</td>
                                <td class="Columna_50">Nombre_Activo</td>
                                <td class="Columna_15">00/00/0000</td>
                                <td style="cursor: pointer; color: blue;" class="Columna_10">Ver</td>
                                <td style="cursor: pointer; color: #D61F31;" class="Columna_10">En Espera</td>
                                </tr>
                            </table>  
                            </div>
                        </td>
                    </tr>
                    </table>

                <div class="DivConTexto divTextoAlaDerecha Text_Montserrat_SemiBold">
                    <p style="cursor: pointer;">Ver más...</p>
                </div>


            </div>
        </div>


    </div>
</div>


<script type="text/javascript" src="<?php echo SERVERURL;?>vistas/javascript/funciones_Inventario.js"></script>
