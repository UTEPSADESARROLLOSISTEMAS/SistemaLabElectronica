
/* Variables para Mostrar VentanasEmergentes de la Ventana Inventario*/
/*Variables para Mostrar ventana Agregar Activo*/
let btn_MostrarVentanaAgregarPrestamo = document.getElementById("btn_Ventana_AgregarPrestamo");
let ventanaAgregarPrestamo = document.getElementById("Ventana_AgregarPrestamo");

/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");
/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Inventario  */
btn_MostrarVentanaAgregarPrestamo.onclick = MostrarVentanaAgregarPrestamo;
/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;

/* Funciones para Mostrar y cerrar ventanas de la ventana inventario*/
function MostrarVentanaAgregarPrestamo(){
    ventanaAgregarPrestamo.style.display = "flex";
}
/*Cerrar todas las ventanas Emergentes*/ 
function CerrarVentanasEmergentes(){
    ventanaAgregarPrestamo.style.display = "none";

}
