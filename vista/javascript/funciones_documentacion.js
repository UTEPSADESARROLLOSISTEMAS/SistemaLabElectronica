

/*Variables para Mostrar ventana Agregar Documentacion*/
let btn_MostrarVentanaAgregarDocumentacion = document.getElementById("btn_MostrarVentanaAgregarDocumentacion");
let Ventana_AgregarDocumentacion = document.getElementById("Ventana_AgregarDocumentacion");

/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");


/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Prestamo  */
btn_MostrarVentanaAgregarDocumentacion.onclick = MostrarVentanaAgregarDocumentacion;
/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;



/* Funciones para Mostrar y cerrar ventanas de la ventana Prestamo*/
function MostrarVentanaAgregarDocumentacion(){
    Ventana_AgregarDocumentacion.style.display = "flex";
}
/*Cerrar todas las ventanas Emergentes*/ 
function CerrarVentanasEmergentes(){
    Ventana_AgregarDocumentacion.style.display = "none";

}
