<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/estilo_Login.css">

<div class="Ventana_Principal_login">
    <div class="Contenido_ventana_login">
        <div class="login__header">
            <img style="" src="<?php echo SERVERURL; ?>vistas/recursos/imagenes/logo_utepsa_blanco.png"></img>
            <div class="content_textoTitulo" style="">
                <div>
                    <h2>UTEPSA</h2>
                    <span style="font-size: 15px;">Laboratorio de Electronica</span>

                </div>
            </div>
        </div>

        <div class="content_form">

            <form id="form_login_IniciarSesion" action="<?php echo SERVERURL;?>controladores/login_Controlador.php"
                class="form_input_login" method="POST">

                <div id="div_cont_con_los_inputs_IniciarSesion" class="cont_inputs_IniciarSesion">
                    <div class="content_inputs">
                        <p>Email o Nombre de Usuario:</p>
                        <div>
                            <input type="text" class="inputDeLogin" name="nombreUsuarioEmail_iniciarSesion"
                                placeholder="Usuario" >
                        </div>

                    </div>

                    <div class="content_inputs">
                        <p for="password">Contraseña :</p>
                        <div>
                            <input type="password" class="inputDeLogin" name="contrasena_iniciarSesion"
                                placeholder="************" >

                        </div>
                    </div>

                </div>

                <div id="div_cont_con_los_inputs_Registrar"  class="OcultarElemento cont_inputs_registrar">

                    <div class="content_inputs">
                        <p>Nombre Completo:</p>
                        <div>
                            <input type="text" class="inputDeLogin" name="nombreCompletoUsuario_reg"
                                placeholder="">
                        </div>

                    </div>


                    <div class="content_inputs">
                        <p>Correo:</p>
                        <div>
                            <input type="email" class="inputDeLogin" name="correoUsuario_reg"
                                placeholder="">
                        </div>

                    </div>
                    <div class="content_inputs">
                        <p>Numero de Telefono:</p>
                        <div>
                            <input type="number" class="inputDeLogin" name="nroDeTelefono_reg"
                                placeholder="">
                        </div>

                    </div>
                    <div class="content_inputs">
                        <p>Profesión:</p>
                        <div>
                            <input type="text" class="inputDeLogin" name="profesion_reg"
                                placeholder="">
                        </div>

                    </div>
                    <div class="content_inputs">
                        <p>Nombre de Usuario:</p>
                        <div>
                            <input type="text" class="inputDeLogin" name="nombreDeUsuario_reg"
                                placeholder="">
                        </div>

                    </div>
                    <div class="content_inputs">
                        <p for="password">Contraseña :</p>
                        <div>
                            <input type="password" class="inputDeLogin" name="contrasenaUsuario_reg"
                                placeholder="">

                        </div>
                    </div>
                    <div class="content_inputs">
                        <p for="password">Repetir Contraseña :</p>
                        <div>
                            <input type="password" class="inputDeLogin" name="ConfirmarcontrasenaUsuario_reg"
                                placeholder="">

                        </div>
                    </div>


                </div>


                <div class="DivContentBotones">
                    <div>
                        <input type="hidden"  name="accionDeBotonLogin" id="accionDeBotonLogin" value="">
                        <button id="button_iniciarSesion" class="button" type="submit">Iniciar Sesión</button>
                        <button id="button_registrarse" class="OcultarElemento button"  type="submit">Registrar</button>
                        <p id="p_click_mostrar_registrar" onclick="MostrarVentanaRegistrar()">Registrarse</p>
                        <p id="p_click_mostrar_iniciarSesion" class="OcultarElemento" onclick="MostrarVentanaIniciarSesion()">Iniciar Sesión</p>

                    </div>
                </div>


            </form>


        </div>


    </div>


</div>

<script type="text/javascript" src="<?php echo SERVERURL; ?>vistas/javascript/funciones_login.js"></script>
