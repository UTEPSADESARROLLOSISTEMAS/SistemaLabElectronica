const div_cont_con_los_inputs_IniciarSesion = document.getElementById("div_cont_con_los_inputs_IniciarSesion");
const div_cont_con_los_inputs_Registrar = document.getElementById("div_cont_con_los_inputs_Registrar");
const p_click_mostrar_iniciarSesion = document.getElementById("p_click_mostrar_iniciarSesion");
const p_click_mostrar_registrar = document.getElementById("p_click_mostrar_registrar");
const button_iniciarSesion = document.getElementById("button_iniciarSesion");
const button_registrarse = document.getElementById("button_registrarse");

button_iniciarSesion.addEventListener("click", accionDeBoton_IniciarSesion);
button_registrarse.addEventListener("click", accionDeBoton_Registrar);

function accionDeBoton_IniciarSesion(){

  document.getElementById("accionDeBotonLogin").value = "IniciarSesion";

}

function accionDeBoton_Registrar(){

  document.getElementById("accionDeBotonLogin").value = "Registrar";

}

function MostrarVentanaRegistrar(){
    div_cont_con_los_inputs_IniciarSesion.style.display = "none";
    div_cont_con_los_inputs_Registrar.style.display = "block";

    p_click_mostrar_iniciarSesion.style.display = "block";
    p_click_mostrar_registrar.style.display = "none";
    
    button_iniciarSesion.style.display = "none";
    button_registrarse.style.display = "block";

}

function MostrarVentanaIniciarSesion(){
    div_cont_con_los_inputs_IniciarSesion.style.display = "block";
    div_cont_con_los_inputs_Registrar.style.display = "none";
    
    p_click_mostrar_registrar.style.display = "block";
    p_click_mostrar_iniciarSesion.style.display = "none";

    button_iniciarSesion.style.display = "block";
    button_registrarse.style.display = "none";


}