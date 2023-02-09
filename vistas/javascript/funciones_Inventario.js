
/* Variables para Mostrar VentanasEmergentes de la Ventana Inventario*/
/*Variables para Mostrar ventana Agregar Activo*/
let btn_MostrarVentanaAgregarActivo = document.getElementById("btn_AgregarActivo");
let ventanaAgregarActivo = document.getElementById("Ventana_AgregarActivo");
/*Variables para Mostrar ventana Agregar Categoria*/
let btn_MostrarVentanaAgregarCategoria = document.getElementById("btn_AgregarCategoria");
let ventanaAgregarCategoria = document.getElementById("Ventana_AgregarCategoria");
/*Variables para Mostrar ventana Agregar Grupo de activos*/
let btn_MostrarVentanaAgregarGrupoDeActivos = document.getElementById("btn_AgregarGrupoDeActivos");
let ventanaAgregarGrupoDeActivos = document.getElementById("Ventana_AgregarGrupoDeActivos");
/*Variables para Mostrar ventana Buscar Activo*/
let btn_MostrarVentanaBuscarActivo = document.getElementById("btn_AgregarBuscarActivo");
let ventanaBuscarActivo = document.getElementById("Ventana_BuscarActivo");

/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");
/*let SubVentanaEmergente = document.getElementById("Sub_VentanaEmergente");
/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Inventario  */
btn_MostrarVentanaAgregarActivo.onclick = MostrarVentanaAgregarActivo;
btn_MostrarVentanaAgregarCategoria.onclick = MostrarVentanaAgregarCategoria;
btn_MostrarVentanaAgregarGrupoDeActivos.onclick = MostrarVentanaAgregarGrupodeActivos;
btn_MostrarVentanaBuscarActivo.onclick = MostrarVentanaDeBuscarActivo;
/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;
/*SubVentanaEmergente.onclick = CerrarVentanasEmergentes;

/* Funciones para Mostrar y cerrar ventanas de la ventana inventario*/
function MostrarVentanaAgregarActivo(){
    ventanaAgregarActivo.style.display = "flex";
}
function MostrarVentanaAgregarCategoria(){
    ventanaAgregarCategoria.style.display = "flex";
}
function MostrarVentanaAgregarGrupodeActivos(){
    ventanaAgregarGrupoDeActivos.style.display = "flex";
}
function MostrarVentanaDeBuscarActivo(){
    ventanaBuscarActivo.style.display = "flex";

}
/*Cerrar todas las ventanas Emergentes*/ 
function CerrarVentanasEmergentes(){
    ventanaAgregarActivo.style.display = "none";
    ventanaAgregarCategoria.style.display = "none";
    ventanaAgregarGrupoDeActivos.display = "none";

}
