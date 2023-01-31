
/* Variables para Mostrar VentanasEmergentes de la Ventana UsoDeLaboratorio*/
/*Variables para Mostrar ventana Agregar Reserva*/
let btn_MostrarVentanaAgregarReserva = document.getElementById("btn_AgregarReserva");
let ventanaAgregarReserva = document.getElementById("Ventana_AgregarReserva");
let btn_MostrarVentanaAgregarSoporte = document.getElementById("btn_AgregarSoporte");
let ventanaAgregarSoporte = document.getElementById("Ventana_AgregarSoporte");
let btn_MostrarVentanaBuscar = document.getElementById("btn_BuscarReserva");
let ventanaBuscar = document.getElementById("Ventana_BuscarReserva");
/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");


/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Inventario  */
btn_MostrarVentanaAgregarReserva.onclick = MostrarVentanaAgregarReserva;
btn_MostrarVentanaAgregarSoporte.onclick = MostrarVentanaAgregarSoporte;
btn_MostrarVentanaBuscar.onclick = MostrarVentanaBuscar;
/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;


/* Funciones para Mostrar y cerrar ventanas de la ventana inventario*/
function MostrarVentanaAgregarReserva(){
    ventanaAgregarReserva.style.display = "flex";

}
function MostrarVentanaAgregarSoporte (){
    ventanaAgregarSoporte.style.display = "flex";
}
function MostrarVentanaBuscar(){
    ventanaBuscar.style.display = "none";

}
/*Cerrar todas las ventanas Emergentes*/ 
function CerrarVentanasEmergentes(){
    ventanaAgregarReserva.style.display = "none";
    ventanaAgregarSoporte.style.display = "none";
    ventanaBuscar.style.display = "none";

}
