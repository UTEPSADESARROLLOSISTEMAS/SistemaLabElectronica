<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Laboratorio</title>
    <link rel="stylesheet" href="../css/estilo-usoLaboratorio.css">
    <link rel="stylesheet" href="../css/estiloGenerales.css">
    <link rel="stylesheet" href="../css/estiloBarraLateral.css">
    <link rel="stylesheet" href="../css/estiloBarraSuperior.css">
    <link rel="stylesheet" href="../css/estilo_Vna_AgregarLaboratorio.css">
    <link rel="stylesheet" href="../css/estilo_Vna_AgregarSoporte.css">

</head>

<header class="header_BarraDeNavegacionDeArriba">

    <label onclick="ocultarElementos()" class="label-IconoDesplegarMenu" for="boton_desplegarMenu">
        <svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg"
            class="svg_ic_3_barritas"><path 
                d="M6 36v-3h26v3Zm33.9-2.6-9.45-9.45 9.4-9.4L42
                16.7l-7.25
                7.25 7.3 7.3ZM6 25.4v-3h20v3ZM6 15v-3h26v3Z"/>
        </svg>
    </label>


</header>

<input id="boton_desplegarMenu" type="checkbox"/>
<div class="BloqueLateral">
    <div class="BloqueLateral-Contenedor">

        <label onclick="cerrarVentanaLateral()" id="id_botonCerrarNavLateral" for="boton_desplegarMenu">✖️</label>

        <nav class="Navegador">

            <div class="Perfil">
                <div class="Contenedor ElementoCentradoHorizontal_y_Vertical ">
                    <div>
                
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 12 11.976562 C 10.898438 11.976562 10 11.625 9.300781 10.925781 C 8.601562 10.226562 8.25 9.324219 8.25 8.226562 C 8.25 7.125 8.601562 6.226562 9.300781 5.523438 C 10 4.824219 10.898438 4.476562 12 4.476562 C 13.101562 4.476562 14 4.824219 14.699219 5.523438 C 15.398438 6.226562 15.75 7.125 15.75 8.226562 C 15.75 9.324219 15.398438 10.226562 14.699219 10.925781 C 14 11.625 13.101562 11.976562 12 11.976562 Z M 4 20 L 4 17.648438 C 4 17.015625 4.160156 16.476562 4.476562 16.023438 C 4.792969 15.574219 5.199219 15.234375 5.699219 15 C 6.816406 14.5 7.886719 14.125 8.914062 13.875 C 9.9375 13.625 10.964844 13.5 12 13.5 C 13.035156 13.5 14.058594 13.628906 15.074219 13.886719 C 16.089844 14.144531 17.160156 14.515625 18.273438 15 C 18.792969 15.234375 19.207031 15.574219 19.523438 16.023438 C 19.839844 16.476562 20 17.015625 20 17.648438 L 20 20 Z M 5.5 18.5 L 18.5 18.5 L 18.5 17.648438 C 18.5 17.382812 18.421875 17.128906 18.261719 16.886719 C 18.105469 16.644531 17.910156 16.464844 17.675781 16.351562 C 16.609375 15.832031 15.632812 15.480469 14.75 15.289062 C 13.867188 15.097656 12.949219 15 12 15 C 11.050781 15 10.125 15.097656 9.226562 15.289062 C 8.324219 15.480469 7.351562 15.832031 6.300781 16.351562 C 6.066406 16.464844 5.875 16.644531 5.726562 16.886719 C 5.574219 17.128906 5.5 17.382812 5.5 17.648438 Z M 12 10.476562 C 12.648438 10.476562 13.1875 10.261719 13.613281 9.835938 C 14.039062 9.414062 14.25 8.875 14.25 8.226562 C 14.25 7.574219 14.039062 7.039062 13.613281 6.613281 C 13.1875 6.1875 12.648438 5.976562 12 5.976562 C 11.351562 5.976562 10.8125 6.1875 10.386719 6.613281 C 9.960938 7.039062 9.75 7.574219 9.75 8.226562 C 9.75 8.875 9.960938 9.414062 10.386719 9.835938 C 10.8125 10.261719 11.351562 10.476562 12 10.476562 Z M 12 8.226562 Z M 12 18.5 Z M 12 18.5 "/>
                            </g>
                        </svg>

                        
                        
                    </div>
                    <div>
                        <div>
                            <p>Nombre_apellido</p>
                            <p>Encargado</p>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>

            <hr>

            <div class="ContenedorOpciones">

                <div id="BtnOpcion_Tablero" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.101562 17.074219 L 8.601562 17.074219 L 8.601562 11.949219 L 7.101562 11.949219 Z M 15.398438 17.074219 L 16.898438 17.074219 L 16.898438 6.574219 L 15.398438 6.574219 Z M 11.25 17.074219 L 12.75 17.074219 L 12.75 14.125 L 11.25 14.125 Z M 11.25 11.949219 L 12.75 11.949219 L 12.75 10.449219 L 11.25 10.449219 Z M 4.5 21 C 4.101562 21 3.75 20.851562 3.449219 20.550781 C 3.148438 20.25 3 19.898438 3 19.5 L 3 4.5 C 3 4.101562 3.148438 3.75 3.449219 3.449219 C 3.75 3.148438 4.101562 3 4.5 3 L 19.5 3 C 19.898438 3 20.25 3.148438 20.550781 3.449219 C 20.851562 3.75 21 4.101562 21 4.5 L 21 19.5 C 21 19.898438 20.851562 20.25 20.550781 20.550781 C 20.25 20.851562 19.898438 21 19.5 21 Z M 4.5 19.5 L 19.5 19.5 L 19.5 4.5 L 4.5 4.5 Z M 4.5 4.5 L 4.5 19.5 Z M 4.5 4.5 "/>
                            </g>
                            </svg>
                    </div>
                    <div>
                            <p>Tablero de Datos</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Inventario" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 3 20.449219 L 3 8.148438 C 2.765625 8.117188 2.542969 7.949219 2.324219 7.648438 C 2.109375 7.351562 2 7.023438 2 6.675781 L 2 3.5 C 2 3.117188 2.148438 2.769531 2.449219 2.460938 C 2.75 2.152344 3.101562 2 3.5 2 L 20.5 2 C 20.882812 2 21.230469 2.152344 21.539062 2.460938 C 21.847656 2.769531 22 3.117188 22 3.5 L 22 6.675781 C 22 7.023438 21.890625 7.351562 21.675781 7.648438 C 21.457031 7.949219 21.234375 8.117188 21 8.148438 L 21 20.449219 C 21 20.832031 20.847656 21.1875 20.539062 21.511719 C 20.230469 21.835938 19.882812 22 19.5 22 L 4.5 22 C 4.101562 22 3.75 21.835938 3.449219 21.511719 C 3.148438 21.1875 3 20.832031 3 20.449219 Z M 4.5 8.175781 L 4.5 20.5 L 19.5 20.5 L 19.5 8.175781 Z M 20.5 6.675781 L 20.5 3.5 L 3.5 3.5 L 3.5 6.675781 Z M 9 13.425781 L 15 13.425781 L 15 11.925781 L 9 11.925781 Z M 4.5 20.5 L 4.5 8.175781 Z M 4.5 20.5 "/>
                            </g>
                            </svg>
                            
                    </div>
                    <div>
                            <p>Inventario</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_UsoDeLaboratorio" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 4.300781 21 C 3.601562 21 3.105469 20.675781 2.8125 20.023438 C 2.519531 19.375 2.617188 18.785156 3.101562 18.25 L 9.300781 11.25 L 9.300781 4.5 L 8 4.5 C 7.785156 4.5 7.605469 4.429688 7.460938 4.289062 C 7.320312 4.144531 7.25 3.964844 7.25 3.75 C 7.25 3.535156 7.320312 3.355469 7.460938 3.210938 C 7.605469 3.070312 7.785156 3 8 3 L 16 3 C 16.214844 3 16.394531 3.070312 16.539062 3.210938 C 16.679688 3.355469 16.75 3.535156 16.75 3.75 C 16.75 3.964844 16.679688 4.144531 16.539062 4.289062 C 16.394531 4.429688 16.214844 4.5 16 4.5 L 14.699219 4.5 L 14.699219 11.25 L 20.898438 18.25 C 21.382812 18.785156 21.480469 19.375 21.1875 20.023438 C 20.894531 20.675781 20.398438 21 19.699219 21 Z M 4 19.5 L 20 19.5 L 13.199219 11.800781 L 13.199219 4.5 L 10.800781 4.5 L 10.800781 11.800781 Z M 11.949219 12 Z M 11.949219 12 "/>
                            </g>
                            </svg>
                    </div>
                    <div>
                            <p>Uso de Laboratorio</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Prestamos" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 17.273438 22 C 15.976562 22 14.863281 21.539062 13.9375 20.613281 C 13.011719 19.6875 12.550781 18.574219 12.550781 17.273438 C 12.550781 15.976562 13.011719 14.863281 13.9375 13.9375 C 14.863281 13.011719 15.976562 12.550781 17.273438 12.550781 C 18.574219 12.550781 19.6875 13.011719 20.613281 13.9375 C 21.539062 14.863281 22 15.976562 22 17.273438 C 22 18.574219 21.539062 19.6875 20.613281 20.613281 C 19.6875 21.539062 18.574219 22 17.273438 22 Z M 18.726562 19.800781 L 19.425781 19.101562 L 17.550781 17.226562 L 17.550781 14.425781 L 16.574219 14.425781 L 16.574219 17.574219 Z M 4.5 20.648438 C 4.082031 20.648438 3.730469 20.503906 3.4375 20.210938 C 3.144531 19.921875 3 19.566406 3 19.148438 L 3 4.601562 C 3 4.183594 3.128906 3.828125 3.386719 3.539062 C 3.644531 3.246094 3.867188 3.101562 4.050781 3.101562 L 9.101562 3.101562 C 9.214844 2.515625 9.503906 2.039062 9.960938 1.664062 C 10.421875 1.289062 10.949219 1.101562 11.550781 1.101562 C 12.148438 1.101562 12.679688 1.289062 13.136719 1.664062 C 13.597656 2.039062 13.882812 2.515625 14 3.101562 L 19.050781 3.101562 C 19.464844 3.101562 19.820312 3.246094 20.113281 3.539062 C 20.402344 3.828125 20.550781 4.183594 20.550781 4.601562 L 20.550781 11.976562 C 20.300781 11.824219 20.054688 11.695312 19.8125 11.585938 C 19.570312 11.480469 19.316406 11.382812 19.050781 11.300781 L 19.050781 4.601562 L 16.398438 4.601562 L 16.398438 7.851562 L 7.148438 7.851562 L 7.148438 4.601562 L 4.5 4.601562 L 4.5 19.148438 L 11.324219 19.148438 C 11.410156 19.398438 11.507812 19.644531 11.625 19.886719 C 11.742188 20.128906 11.882812 20.382812 12.050781 20.648438 Z M 12 4.5 C 12.285156 4.5 12.519531 4.402344 12.710938 4.210938 C 12.902344 4.019531 13 3.785156 13 3.5 C 13 3.214844 12.902344 2.980469 12.710938 2.789062 C 12.519531 2.597656 12.285156 2.5 12 2.5 C 11.714844 2.5 11.480469 2.597656 11.289062 2.789062 C 11.097656 2.980469 11 3.214844 11 3.5 C 11 3.785156 11.097656 4.019531 11.289062 4.210938 C 11.480469 4.402344 11.714844 4.5 12 4.5 Z M 12 4.5 "/>
                            </g>
                            </svg>
                            
                    </div>
                    <div>
                            <p>Prestamos</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Documentacion" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 7.976562 17.75 L 16.023438 17.75 L 16.023438 16.25 L 7.976562 16.25 Z M 7.976562 13.5 L 16.023438 13.5 L 16.023438 12 L 7.976562 12 Z M 5.5 22 C 5.101562 22 4.75 21.851562 4.449219 21.550781 C 4.148438 21.25 4 20.898438 4 20.5 L 4 3.5 C 4 3.101562 4.148438 2.75 4.449219 2.449219 C 4.75 2.148438 5.101562 2 5.5 2 L 14.523438 2 L 20 7.476562 L 20 20.5 C 20 20.898438 19.851562 21.25 19.550781 21.550781 C 19.25 21.851562 18.898438 22 18.5 22 Z M 13.773438 8.148438 L 13.773438 3.5 L 5.5 3.5 L 5.5 20.5 L 18.5 20.5 L 18.5 8.148438 Z M 5.5 3.5 L 5.5 8.148438 L 5.5 3.5 L 5.5 20.5 Z M 5.5 3.5 "/>
                            </g>
                            </svg>
                    </div>
                    <div>
                            <p>Documentación</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Reportes" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 11.300781 18.949219 L 12.800781 18.949219 L 12.800781 13.925781 L 14.851562 15.976562 L 15.898438 14.925781 L 12 11.125 L 8.148438 14.976562 L 9.199219 16.023438 L 11.300781 13.925781 Z M 5.5 22 C 5.101562 22 4.75 21.851562 4.449219 21.550781 C 4.148438 21.25 4 20.898438 4 20.5 L 4 3.5 C 4 3.101562 4.148438 2.75 4.449219 2.449219 C 4.75 2.148438 5.101562 2 5.5 2 L 14.523438 2 L 20 7.476562 L 20 20.5 C 20 20.898438 19.851562 21.25 19.550781 21.550781 C 19.25 21.851562 18.898438 22 18.5 22 Z M 13.773438 8.148438 L 13.773438 3.5 L 5.5 3.5 L 5.5 20.5 L 18.5 20.5 L 18.5 8.148438 Z M 5.5 3.5 L 5.5 8.148438 L 5.5 3.5 L 5.5 20.5 Z M 5.5 3.5 "/>
                            </g>
                        </svg>
                            
                    </div>
                    <div>
                            <p>Reportes</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Configuracion" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 9.699219 22 L 9.199219 18.851562 C 8.882812 18.734375 8.550781 18.574219 8.199219 18.375 C 7.851562 18.175781 7.542969 17.964844 7.273438 17.75 L 4.324219 19.101562 L 2 15 L 4.699219 13.023438 C 4.667969 12.875 4.644531 12.703125 4.636719 12.511719 C 4.628906 12.320312 4.625 12.148438 4.625 12 C 4.625 11.851562 4.628906 11.679688 4.636719 11.488281 C 4.644531 11.296875 4.667969 11.125 4.699219 10.976562 L 2 9 L 4.324219 4.898438 L 7.273438 6.25 C 7.542969 6.035156 7.851562 5.824219 8.199219 5.625 C 8.550781 5.425781 8.882812 5.273438 9.199219 5.175781 L 9.699219 2 L 14.300781 2 L 14.800781 5.148438 C 15.117188 5.265625 15.453125 5.421875 15.8125 5.613281 C 16.171875 5.804688 16.476562 6.015625 16.726562 6.25 L 19.675781 4.898438 L 22 9 L 19.300781 10.925781 C 19.332031 11.089844 19.355469 11.269531 19.363281 11.460938 C 19.371094 11.652344 19.375 11.832031 19.375 12 C 19.375 12.167969 19.371094 12.339844 19.363281 12.523438 C 19.355469 12.707031 19.332031 12.882812 19.300781 13.050781 L 22 15 L 19.675781 19.101562 L 16.726562 17.75 C 16.457031 17.964844 16.152344 18.179688 15.8125 18.386719 C 15.472656 18.597656 15.132812 18.75 14.800781 18.851562 L 14.300781 22 Z M 12 15.25 C 12.898438 15.25 13.667969 14.933594 14.300781 14.300781 C 14.933594 13.667969 15.25 12.898438 15.25 12 C 15.25 11.101562 14.933594 10.332031 14.300781 9.699219 C 13.667969 9.066406 12.898438 8.75 12 8.75 C 11.101562 8.75 10.332031 9.066406 9.699219 9.699219 C 9.066406 10.332031 8.75 11.101562 8.75 12 C 8.75 12.898438 9.066406 13.667969 9.699219 14.300781 C 10.332031 14.933594 11.101562 15.25 12 15.25 Z M 12 13.75 C 11.515625 13.75 11.105469 13.578125 10.761719 13.238281 C 10.421875 12.894531 10.25 12.484375 10.25 12 C 10.25 11.515625 10.421875 11.105469 10.761719 10.761719 C 11.105469 10.421875 11.515625 10.25 12 10.25 C 12.484375 10.25 12.894531 10.421875 13.238281 10.761719 C 13.578125 11.105469 13.75 11.515625 13.75 12 C 13.75 12.484375 13.578125 12.894531 13.238281 13.238281 C 12.894531 13.578125 12.484375 13.75 12 13.75 Z M 12 12 Z M 10.898438 20.5 L 13.101562 20.5 L 13.449219 17.699219 C 14 17.566406 14.519531 17.359375 15.011719 17.074219 C 15.503906 16.792969 15.949219 16.449219 16.351562 16.050781 L 19 17.199219 L 20 15.398438 L 17.648438 13.675781 C 17.714844 13.390625 17.769531 13.113281 17.8125 12.835938 C 17.855469 12.5625 17.875 12.285156 17.875 12 C 17.875 11.714844 17.859375 11.4375 17.824219 11.164062 C 17.792969 10.886719 17.734375 10.609375 17.648438 10.324219 L 20 8.601562 L 19 6.800781 L 16.351562 7.949219 C 15.964844 7.515625 15.535156 7.152344 15.050781 6.863281 C 14.566406 6.570312 14.035156 6.382812 13.449219 6.300781 L 13.101562 3.5 L 10.898438 3.5 L 10.550781 6.300781 C 9.984375 6.417969 9.453125 6.617188 8.960938 6.898438 C 8.472656 7.183594 8.035156 7.535156 7.648438 7.949219 L 5 6.800781 L 4 8.601562 L 6.351562 10.324219 C 6.285156 10.609375 6.230469 10.886719 6.1875 11.164062 C 6.144531 11.4375 6.125 11.714844 6.125 12 C 6.125 12.285156 6.144531 12.5625 6.1875 12.835938 C 6.230469 13.113281 6.285156 13.390625 6.351562 13.675781 L 4 15.398438 L 5 17.199219 L 7.648438 16.050781 C 8.050781 16.449219 8.496094 16.792969 8.988281 17.074219 C 9.480469 17.359375 10 17.566406 10.550781 17.699219 Z M 10.898438 20.5 "/>
                            </g>
                            </svg>
                    </div>
                    <div>
                            <p>Configuracion</p>
                        
                    </div>
                </div>
                <div id="BtnOpcion_Salir" class="Opcion ElementoCentradoHorizontal_y_Vertical">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 4.5 21 C 4.101562 21 3.75 20.851562 3.449219 20.550781 C 3.148438 20.25 3 19.898438 3 19.5 L 3 4.5 C 3 4.101562 3.148438 3.75 3.449219 3.449219 C 3.75 3.148438 4.101562 3 4.5 3 L 11.773438 3 L 11.773438 4.5 L 4.5 4.5 L 4.5 19.5 L 11.773438 19.5 L 11.773438 21 Z M 16.648438 16.375 L 15.574219 15.300781 L 18.125 12.75 L 9.375 12.75 L 9.375 11.25 L 18.074219 11.25 L 15.523438 8.699219 L 16.601562 7.625 L 21 12.023438 Z M 16.648438 16.375 "/>
                            </g>
                            </svg>
                    </div>
                    <div>
                            <p>Salir</p>
                        
                    </div>
                </div>
            </div>

        </nav>
    
    </div>
</div>
    
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


<script type="text/javascript"
src="../javascript/FuncionesPrincipales.js"></script>
<script type="text/javascript"
src="../javascript/funciones_usoLaboratorio.js"></script>
</html>
