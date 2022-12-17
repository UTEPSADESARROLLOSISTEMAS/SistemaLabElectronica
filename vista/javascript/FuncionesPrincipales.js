/* Se Obtiene el id de los div de las opciones de la barra lateral*/ 
let btn_OpcionTablero = document.getElementById("BtnOpcion_Tablero");
let btn_OpcionInventario = document.getElementById("BtnOpcion_Inventario");
let btn_OpcionUsoDelaboratorio = document.getElementById("BtnOpcion_UsoDeLaboratorio");
let btn_OpcionPrestamos = document.getElementById("BtnOpcion_Prestamos");
let btn_OpcionDocumentacion = document.getElementById("BtnOpcion_Documentacion");
let btn_OpcionReportes = document.getElementById("BtnOpcion_Reportes");
let btn_OpcionConfiguracion = document.getElementById("BtnOpcion_Configuracion");
let btn_OpcionSalir = document.getElementById("BtnOpcion_Salir");

/* Se enlaza con su funcion, para  redirigir a su ventana correspondiente*/
btn_OpcionTablero.onclick = Redirigir_a_la_Ventana_Tablero;
btn_OpcionInventario.onclick = Redirigir_a_la_Ventana_Inventario;
btn_OpcionUsoDelaboratorio.onclick = Redirigir_a_la_Ventana_UsodeLaboratorio;
btn_OpcionPrestamos.onclick = Redirigir_a_la_Ventana_Prestamos;
btn_OpcionDocumentacion.onclick = Redirigir_a_la_Ventana_Documentacion;
btn_OpcionReportes.onclick = Redirigir_a_la_Ventana_Reportes;
btn_OpcionConfiguracion.onclick = Redirigir_a_la_Ventana_Configuracion;
btn_OpcionSalir.onclick = CerrarSesion;


/*Funciones que redirigen a sus respectivos Links de la pagina*/ 
function Redirigir_a_la_Ventana_Tablero() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-paginaPrincipal.html";
}
function Redirigir_a_la_Ventana_Inventario() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-inventario.html";
}
function Redirigir_a_la_Ventana_UsodeLaboratorio() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-usoLaboratorio.html";
}
function Redirigir_a_la_Ventana_Prestamos() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-Prestamos.html";
}
function Redirigir_a_la_Ventana_Documentacion() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-Documentacion.html";
}
function Redirigir_a_la_Ventana_Reportes() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-Reportes.html";
}
function Redirigir_a_la_Ventana_Configuracion() {
    window.location.href = "http://127.0.0.1:5500/vista/html/Ventana-Configuracion.html";
}
function CerrarSesion() {
    alert("Cerrar Sesión");
}