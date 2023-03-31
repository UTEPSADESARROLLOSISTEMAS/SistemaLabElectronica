/*Variable para Mostrar ventana Agregar Reserva*/
let btn_MostrarVentanaAgregarReserva =
  document.getElementById("btn_AgregarReserva");
let ventanaAgregarReserva = document.getElementById("Ventana_AgregarReserva");
/*Variable para Mostrar ventana Agregar Soporte*/
let btn_MostrarVentanaAgregarSoporte =
  document.getElementById("btn_AgregarSoporte");
let ventanaAgregarSoporte = document.getElementById("Ventana_AgregarSoporte");
/*Variable para Mostrar ventana Agregar Materia*/
let btn_AgregarMateria = document.getElementById("btn_AgregarMateria");
let Ventana_AgregarMateria = document.getElementById("Ventana_AgregarMateria");
/*Variable para Cerrar Ventanas Emergentes */
let btn_cerrarVentanasEmergentes = document.getElementById("btn_CerrarVentana");
/*Variables de las tablas extraidas */
let tabla_Reservas_por_Confirmar = document.getElementById("tabla_Reservas_por_Confirmar");
let tabla_SoportesHoy = document.getElementById("tabla_SoportesHoy");
let tabla_ReservasModulares = document.getElementById("tabla_ReservasModulares");
/* Variables de los iconos de desplegar tablas*/
let ic_DobleFecha_Arriba_Tabla_Soportes_para_hoy = document.getElementById("ic_DobleFecha_Arriba_Tabla_Soportes_para_hoy");
let ic_DobleFecha_Abajo_Tabla_Soportes_para_hoy  = document.getElementById("ic_DobleFecha_Abajo_Tabla_Soportes_para_hoy");
let ic_DobleFecha_Arriba_Tabla_Reservas_por_confirmar = document.getElementById("ic_DobleFecha_Arriba_Tabla_Reservas_por_confirmar");
let ic_DobleFecha_Abajo_Tabla_Reservas_por_confirmar = document.getElementById("ic_DobleFecha_Abajo_Tabla_Reservas_por_confirmar");
let ic_DobleFecha_Arriba_Tabla_Reservas_Modulares = document.getElementById("ic_DobleFecha_Arriba_Tabla_Reservas_Modulares");
let ic_DobleFecha_Abajo_Tabla_Reservas_Modulares = document.getElementById("ic_DobleFecha_Abajo_Tabla_Reservas_Modulares");
/* Funciones para desplegar las tablas dando click en los iconos */
function mostrarTabla_Reservas_por_confirmar(){


  if (tabla_Reservas_por_Confirmar.style.display === "none") {

    tabla_Reservas_por_Confirmar.style.display = "";

    ic_DobleFecha_Arriba_Tabla_Reservas_por_confirmar.style.display = "";
    ic_DobleFecha_Abajo_Tabla_Reservas_por_confirmar.style.display = "none";

  } else {

    tabla_Reservas_por_Confirmar.style.display = "none";

    ic_DobleFecha_Arriba_Tabla_Reservas_por_confirmar.style.display = "none";
    ic_DobleFecha_Abajo_Tabla_Reservas_por_confirmar.style.display = "";
  }
}
function mostrarTabla_Soportes_para_hoy(){
    tabla_SoportesHoy.style.width = "100%";

  if (tabla_SoportesHoy.style.display === "none") {

    tabla_SoportesHoy.style.display = "";
    
    ic_DobleFecha_Arriba_Tabla_Soportes_para_hoy.style.display = "";
    ic_DobleFecha_Abajo_Tabla_Soportes_para_hoy.style.display = "none";

  } else{

    tabla_SoportesHoy.style.display = "none";
    ic_DobleFecha_Arriba_Tabla_Soportes_para_hoy.style.display = "none";
    ic_DobleFecha_Abajo_Tabla_Soportes_para_hoy.style.display = "";


  }
}
function mostrarTabla_Reservas_Modulares(){
  tabla_ReservasModulares.style.width = "100%";

  if (tabla_ReservasModulares.style.display === "none") {

    tabla_ReservasModulares.style.display = "";
    ic_DobleFecha_Arriba_Tabla_Reservas_Modulares.style.display = "";
    ic_DobleFecha_Abajo_Tabla_Reservas_Modulares.style.display = "none";

  } else {

    tabla_ReservasModulares.style.display = "none";
    
    ic_DobleFecha_Arriba_Tabla_Reservas_Modulares.style.display = "none";
    ic_DobleFecha_Abajo_Tabla_Reservas_Modulares.style.display = "";
  }
}

/* Ejecutar funciones para Mostrar Ventana Emergente de la Ventana Inventario  */
btn_MostrarVentanaAgregarReserva.onclick = MostrarVentanaAgregarReserva;
btn_MostrarVentanaAgregarSoporte.onclick = MostrarVentanaAgregarSoporte;
btn_AgregarMateria.onclick               = MostrarVentanaAgregarMateria;

/* Cerrar Ventanas Emergentes*/
btn_cerrarVentanasEmergentes.onclick = CerrarVentanasEmergentes;
/* Funciones para Mostrar y cerrar ventanas de la ventana inventario*/
function MostrarVentanaAgregarReserva() {
  ventanaAgregarReserva.style.display = "flex";
}
function MostrarVentanaAgregarSoporte() {
  ventanaAgregarSoporte.style.display = "flex";
}
/*Cerrar todas las ventanas Emergentes*/
function CerrarVentanasEmergentes() {
  ventanaAgregarReserva.style.display = "none";
  ventanaAgregarSoporte.style.display = "none";
}
function accionDeBoton(accion) {
  document.getElementById("accion").value = accion;
}
function MostrarVentanaAgregarMateria() {
  Ventana_AgregarMateria.style.display = "block";
}
//Ventana de Agregar Solicitud de Reserva
const select_Materias = document.getElementById("select_Materias");
const select_Modalidad = document.getElementById("select_Modalidad");
const div_tituloDeReserva = document.getElementById("div_tituloDeReserva");
const div_DocentesExtraidos = document.getElementById("div_DocentesExtraidos");
const div_selectModalidadDeReserva = document.getElementById("div_selectModalidadDeReserva");
const div_Cont_semestre = document.getElementById("div_Cont_semestre");
const div_Cont_modulo = document.getElementById("div_Cont_modulo");
const div_Cont_gestion = document.getElementById("div_Cont_gestion");
const inputFechaInicio = document.getElementById("inputFechaInicio");
const inputFechaFinal = document.getElementById("inputFechaFinal");
const div_cont_horaInicio = document.getElementById("div_cont_horaInicio");
const div_cont_horaFinal = document.getElementById("div_cont_horaFinal");
const div_horario = document.getElementById("div_horario");
const div_cont_cantDeAsistentes = document.getElementById("div_cont_cantDeAsistentes");
const div_cont_requerimientos = document.getElementById("div_cont_requerimientos");
const btn_enviarSolicitud = document.getElementById("btn_enviarSolicitud");
// Evento change del select para recibir la eleccion
select_Materias.addEventListener("change", function () {
  // Si se selecciona la opción 2, mostrar el div, de lo contrario ocultarlo
  if (select_Materias.value === "NO_ES_MATERIA") {
    
    div_tituloDeReserva.style.display = "block";
    inputFechaInicio.style.display = "block";
    inputFechaFinal.style.display = "block";
    div_cont_horaInicio.style.display = "block";
    div_cont_horaFinal.style.display = "block";
    div_cont_cantDeAsistentes.style.display = "block";
    div_cont_requerimientos.style.display = "block";
    btn_enviarSolicitud.style.display = "block";
    div_DocentesExtraidos.style.display = "block";

    div_selectModalidadDeReserva.style.display = "none";
    div_Cont_semestre.style.display = "none";
    div_Cont_modulo.style.display = "none";
    div_Cont_gestion.style.display = "none";
    div_horario.style.display = "none";

  } else if (select_Materias.value != "Seleccione") {

    div_DocentesExtraidos.style.display = "block";
    div_selectModalidadDeReserva.style.display = "block";
    div_DocentesExtraidos.style.display ="block";

    div_tituloDeReserva.style.display = "none";
    inputFechaInicio.style.display = "none";
    inputFechaFinal.style.display = "none";
    div_cont_horaInicio.style.display = "none";
    div_cont_horaFinal.style.display = "none";
    div_cont_cantDeAsistentes.style.display = "none";
    div_cont_requerimientos.style.display = "none";
    btn_enviarSolicitud.style.display = "none";
  }
});
select_Modalidad.addEventListener("change", function () {
  // Si se selecciona la opción 2, mostrar el div, de lo contrario ocultarlo
  if (select_Modalidad.value === "Fecha_Especifica") {
    inputFechaInicio.style.display = "block";
    inputFechaFinal.style.display = "block";
    div_cont_horaInicio.style.display = "block";
    div_cont_horaFinal.style.display = "block";
    inputFechaFinal.style.display = "block";

    div_cont_cantDeAsistentes.style.display = "block";
    div_cont_requerimientos.style.display = "block";
    btn_enviarSolicitud.style.display = "block";

    div_Cont_semestre.style.display = "none";
    div_Cont_modulo.style.display = "none";
    div_Cont_gestion.style.display = "none";
    div_horario.style.display = "none";
  } else if (select_Modalidad.value != "Seleccione") {
    div_Cont_semestre.style.display = "block";
    div_Cont_modulo.style.display = "block";
    div_Cont_gestion.style.display = "block";
    div_horario.style.display = "block";

    div_cont_cantDeAsistentes.style.display = "block";
    div_cont_requerimientos.style.display = "block";
    btn_enviarSolicitud.style.display = "block";

    inputFechaInicio.style.display = "none";
    inputFechaFinal.style.display = "none";
    div_cont_horaInicio.style.display = "none";
    div_cont_horaFinal.style.display = "none";
    inputFechaFinal.style.display = "none";
  }
});
//Ventana Agregar Soporte
const select_SoporteA_spte = document.getElementById("select_SoporteA_spte");
const select_MedioDeAtencion_spte = document.getElementById("select_MedioDeAtencion_spte");
const btn_agregarSoporte = document.getElementById("btn_agregarSoporte");
const div_DocentesExtraidos_spte = document.getElementById("div_DocentesExtraidos_spte");
const div_NroDeRegistro_spte = document.getElementById("div_NroDeRegistro_spte");
const div_HoraInicio_spte = document.getElementById("div_HoraInicio_spte");
const div_HoraFinal_spte = document.getElementById("div_HoraFinal_spte");
const div_Problema_spte = document.getElementById("div_Problema_spte");
const div_Solucion_spte = document.getElementById("div_Solucion_spte");
const div_Observaciones_spte = document.getElementById("div_Observaciones_spte");
const div_Motivo_spte = document.getElementById("div_Motivo_spte");
let eleccionDeSoporte;

// Evento change del select para recibir la eleccion
select_SoporteA_spte.addEventListener("change", function () {
  // Si se selecciona la opción 2, mostrar el div, de lo contrario ocultarlo
  if (select_SoporteA_spte.value === "Docente") {

    div_DocentesExtraidos_spte.style.display = "block";
    div_NroDeRegistro_spte.style.display = "none";

    eleccionDeSoporte = select_SoporteA_spte.value;

  } else if (select_SoporteA_spte.value === "Estudiante") {

    div_NroDeRegistro_spte.style.display = "block";
    div_DocentesExtraidos_spte.style.display = "none";
    eleccionDeSoporte = select_SoporteA_spte.value;

  }
});
select_MedioDeAtencion_spte.addEventListener("change", function () {

  // Si se selecciona la opción 2, mostrar el div, de lo contrario ocultarlo
  if (select_MedioDeAtencion_spte.value === "Presencial") {

    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";

    div_Motivo_spte.style.display = "none";
    div_HoraInicio_spte.style.display = "none";
    div_HoraFinal_spte.style.display = "none";


  } else if (select_MedioDeAtencion_spte.value === "Cafe Internet") {

    div_Motivo_spte.style.display = "block";
    div_HoraInicio_spte.style.display = "block";
    div_HoraFinal_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";


    div_Problema_spte.style.display = "none";
    div_Solucion_spte.style.display = "none";
    div_Observaciones_spte.style.display = "none";


  }else if (select_MedioDeAtencion_spte.value === "Whatsapp") {


    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";
    div_HoraInicio_spte.style.display = "block";
    div_HoraFinal_spte.style.display = "block";

    div_Motivo_spte.style.display = "none";


  }else if (select_MedioDeAtencion_spte.value === "Facebook") {


    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";


    div_Motivo_spte.style.display = "none";
    div_HoraInicio_spte.style.display = "none";
    div_HoraFinal_spte.style.display = "none";



  }else if (select_MedioDeAtencion_spte.value === "Facebook(TeamViewer)") {


    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";


    div_Motivo_spte.style.display = "none";
    div_HoraInicio_spte.style.display = "none";
    div_HoraFinal_spte.style.display = "none";



  }else if (select_MedioDeAtencion_spte.value === "Facebook(AnyDesk)") {


    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";


    div_Motivo_spte.style.display = "none";
    div_HoraInicio_spte.style.display = "none";
    div_HoraFinal_spte.style.display = "none";



  }else if (select_MedioDeAtencion_spte.value === "Otros Medios") {


    div_Problema_spte.style.display = "block";
    div_Solucion_spte.style.display = "block";
    div_Observaciones_spte.style.display = "block";
    btn_agregarSoporte.style.display = "block";

    div_Motivo_spte.style.display = "none";
    div_HoraInicio_spte.style.display = "none";
    div_HoraFinal_spte.style.display = "none";




  }
});



function extraerFilaDeSoportes(NroDefila){


  let  tabla = document.getElementById("tabla_SoportesHoy_Contenido");
  let Ventana_EditarSoporte = document.getElementById("Ventana_EditarSoporte");
  Ventana_EditarSoporte.style.display = "block";
  let select_Vna_EditarSoporte_UsuarioAtendido = document.getElementById("select_Vna_EditarSoporte_UsuarioAtendido");
  let select_Vna_EditarSoporte_Medio_de_Soporte = document.getElementById("select_Vna_EditarSoporte_Medio_de_Soporte");
  let input_Vna_EditarSoporte_Motivo = document.getElementById("input_Vna_EditarSoporte_Motivo");
  let input_Vna_EditarSoporte_HoraSolicitud = document.getElementById("input_Vna_EditarSoporte_HoraSolicitud");
  let input_Id_del_Soporte = document.getElementById("input_Id_del_Soporte");

  let  fila  = tabla.getElementsByTagName("tr");
  let celdas = fila[NroDefila].getElementsByTagName("td");

  //Extrae los contenidos de cada celda
  let  UsuarioAtendido = celdas[1].innerHTML;
  let  MedioSoporte = celdas[2].innerHTML;
  let  motivo = celdas[3].innerHTML;
  let  horaDeSolicitud = celdas[4].innerHTML;

  let  cdg_deSoporte = celdas[6].innerHTML;



  for (let i = 0; i < select_Vna_EditarSoporte_UsuarioAtendido.options.length; i++) {
    let texto = select_Vna_EditarSoporte_UsuarioAtendido.options[i].text;

    if (texto.includes(UsuarioAtendido)) {
      select_Vna_EditarSoporte_UsuarioAtendido.value = select_Vna_EditarSoporte_UsuarioAtendido.options[i].value;
      break;
    }
  }
  for (var i = 0; i < select_Vna_EditarSoporte_Medio_de_Soporte.options.length; i++) {
    var texto = select_Vna_EditarSoporte_Medio_de_Soporte.options[i].text;
    if (texto.includes(MedioSoporte)) {
      select_Vna_EditarSoporte_Medio_de_Soporte.value = select_Vna_EditarSoporte_Medio_de_Soporte.options[i].value;
      break;
    }
  }
 
  input_Vna_EditarSoporte_Motivo.value = motivo;
  input_Vna_EditarSoporte_HoraSolicitud.value = horaDeSolicitud;
  input_Id_del_Soporte.value = cdg_deSoporte;

}