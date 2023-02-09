

/*Variables para Mostrar ventana Agregar Prestamo*/
let btn_MostrarVentanaAgregarPrestamo = document.getElementById("btn_Ventana_AgregarPrestamo");
let ventanaAgregarPrestamo = document.getElementById("Ventana_AgregarPrestamo");

/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");

/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Prestamo  */
btn_MostrarVentanaAgregarPrestamo.onclick = MostrarVentanaAgregarPrestamo;
/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;


/*Variables de los inputs*/
let form_PrincipalContenido = document.getElementById("form_contenido");
let select_DestinoPrestamo = document.getElementById("select_DestinoPrestamo");
let input_NombreDeDocente = document.getElementById("input_NombreDeDocente");
let input_NombreDelEstudiante = document.getElementById("input_NombreDelEstudiante");
let input_NombreDelEncargado = document.getElementById("input_NombreDelEncargado");
let input_areaDelEncargado = document.getElementById("input_areaDelEncargado");
let input_MateriaDelEstudiante = document.getElementById("input_MateriaDelEstudiante");
let input_NroDeRegistroEstudiante = document.getElementById("input_NroDeRegistroEstudiante");
let input_NroDeCelular = document.getElementById("input_NroDeCelular");
let inputs_fechasDePrestamo = document.getElementById("inputs_fechasDePrestamo");
let input_nombreDelActivo = document.getElementById("input_nombreDelActivo");
let btn_agregarMasActivos = document.getElementById("btn_agregarMasActivos");
let input_Observaciones = document.getElementById("input_Observaciones");
let Btns_cancelarGuardar = document.getElementById("Btns_cancelarGuardar");
let btn_guardarPrestamo = document.getElementById("btn_guardarPrestamo");

/* */
function SeleccionarDestinoPrestamo(ValorDelSelect){


    if(ValorDelSelect.value == "Docente"){
        form_PrincipalContenido.style.overflowY = "scroll";
        select_DestinoPrestamo.style.display = "none";
        input_NombreDeDocente.style.display = "block";
        input_NroDeCelular.style.display = "block";
        inputs_fechasDePrestamo.style.display = "flex";
        input_nombreDelActivo.style.display = "block";
        btn_agregarMasActivos.style.display= "flex";
        input_Observaciones.style.display = "block";
        Btns_cancelarGuardar.style.display = "flex";
        btn_guardarPrestamo.style.display = "flex";
    }
    else if(ValorDelSelect.value == "Estudiante"){
        
        form_PrincipalContenido.style.overflowY = "scroll";
        select_DestinoPrestamo.style.display = "none";
        input_NombreDelEstudiante.style.display = "block";
        input_MateriaDelEstudiante.style.display = "block";
        input_NroDeRegistroEstudiante.style.display = "block";
        input_NroDeCelular.style.display = "block";
        inputs_fechasDePrestamo.style.display = "flex";
        btn_agregarMasActivos.style.display = "block";
        input_Observaciones.style.display = "block";
        Btns_cancelarGuardar.style.display = "flex";
        btn_guardarPrestamo.style.display = "flex";


    }
    else if(ValorDelSelect.value == "Administrativo"){

        form_PrincipalContenido.style.overflowY = "scroll";
        select_DestinoPrestamo.style.display = "none";
        input_NombreDelEncargado.style.display = "block";
        input_areaDelEncargado.style.display = "block";
        input_NroDeCelular.style.display = "block";
        inputs_fechasDePrestamo.style.display = "flex";
        btn_agregarMasActivos.style.display = "block";
        input_Observaciones.style.display = "block";
        Btns_cancelarGuardar.style.display = "flex";
        btn_guardarPrestamo.style.display = "flex";

    }
    

}

function AñadirMasActivos(){
    var texto = "Nombre del Activo";
    const p_ContadorDeActivos = document.getElementById("ContadorDeACtivos");
    const contenedorDeActivossExtras = document.getElementById("NuevosActivos");
    const divInputNombre = document.createElement("div");
    const textoDelInput = document.createElement("p");
    const inputNombreActivo = document.createElement("input");

    DatoExtraidocontadorDeActivos = p_ContadorDeActivos.textContent;

    contadorActual = parseInt(DatoExtraidocontadorDeActivos,10);
    contadorActual = contadorActual + 1;

    p_ContadorDeActivos.innerText = contadorActual.toString();

    textoDelInput.textContent = texto;
    divInputNombre.appendChild(textoDelInput);
    divInputNombre.appendChild(inputNombreActivo);
    contenedorDeActivossExtras.appendChild(divInputNombre);


}


/* Funciones para Mostrar y cerrar ventanas de la ventana Prestamo*/
function MostrarVentanaAgregarPrestamo(){
    ventanaAgregarPrestamo.style.display = "flex";
}
/*Cerrar todas las ventanas Emergentes*/ 
function CerrarVentanasEmergentes(){
    ventanaAgregarPrestamo.style.display = "none";

}
