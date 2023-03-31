Create database SistemaLabUtepsa;

CREATE TABLE persona(
	codigo int NOT NULL auto_increment,
	nombre VARCHAR(250) NOT NULL,
	correo VARCHAR(150),
	nroTelefono VARCHAR(20),
	profesion VARCHAR(150),
	PRIMARY KEY(codigo)

)engine = innodb;
CREATE TABLE rolEnLaUniversidad(

	codigo int NOT NULL auto_increment,
	descripcionDelCargo VARCHAR(200) NOT NULL ,
	nivelDeAutoridad VARCHAR(5) NOT NULL,
	PRIMARY KEY(codigo)

)engine = innodb;
CREATE TABLE usuarios(

	codigo int NOT NULL auto_increment,
	cdg_Persona int not NULL,
	cdg_DeRol int,
	nombreDeUsuario VARCHAR(150),
	contrasena VARCHAR(250),
	estado VARCHAR(20),
	FOREIGN KEY(cdg_Persona) REFERENCES persona(codigo),
	FOREIGN KEY(cdg_DeRol) REFERENCES rolEnLaUniversidad(codigo),
	PRIMARY KEY(codigo)

)engine = innodb;
CREATE TABLE soportes(
	codigo int NOT NULL auto_increment,
	cdg_UsuarioAdmin int NOT NULL,
	cdg_UsuarioAtendido int,
	nroDeRegistro VARCHAR(150),
	tipoDeSoporte VARCHAR(150) not NULL,
	descripcionAsunto VARCHAR(250),
	descripcionSolucion VARCHAR(250),
	fechaSoporte date not NULL,
	horaDeSolicitud time,
	horaDeRealizado time,
	observaciones VARCHAR(250),
	FOREIGN KEY(cdg_UsuarioAdmin) REFERENCES usuarios(codigo),
	FOREIGN KEY(cdg_UsuarioAtendido) REFERENCES usuarios(codigo),
	PRIMARY KEY(codigo)
)engine = innodb;
CREATE TABLE calendario(

	codigo int not null auto_increment,
	gestion VARCHAR(6) not NULL,
	semestre VARCHAR(6) not NULL,
	modulo VARCHAR(6) not NULL,
	fechaInicio date not null,
	fechaFinal date not null,
	tipoDeModalidad VARCHAR(100) not null,
	PRIMARY KEY(codigo)

)engine = innodb;
CREATE TABLE areasDeLaboratorio(

	codigo int not NULL auto_increment,
	tituloDeArea VARCHAR(150) not NULL,
	estadoParaUso VARCHAR(25) NOT NULL,
	cantidadEstAbarca VARCHAR(10) not NULL,
	PRIMARY KEY(codigo)

)engine = innodb;
CREATE TABLE materias(

	codigo int not NULL auto_increment,
	descripcion VARCHAR(250) not NULL,
	estado varchar(30) not null,
	PRIMARY KEY(codigo)
	
)engine = innodb;
CREATE TABLE reservas(
	codigo int not NULL auto_increment,
	cdg_usuarioAdmin int not null,
	cdg_usuarioSolicitante int not null,
	cdg_areasDeLaboratorio int not NULL,
	cdg_materia int not NULL,
	tituloDeReserva VARCHAR(250) not NULL,
	encargadoDeReserva VARCHAR(250),
	cantDeAsistentes VARCHAR(10),
	fechaInicio date not NULL,
	fechaFinal date,
	tipoDeModalidad VARCHAR(100) not NULL,
	horaInicio time not null,
	horaFinal time not null,
	estadoDeReserva varchar(50),
	requerimientos VARCHAR(250),
	FOREIGN KEY(cdg_usuarioAdmin) REFERENCES usuarios(codigo),
	FOREIGN KEY(cdg_usuarioSolicitante) REFERENCES usuarios(codigo),
	FOREIGN KEY(cdg_areasDeLaboratorio) REFERENCES areasDeLaboratorio(codigo),
	FOREIGN KEY(cdg_materia) REFERENCES materias(codigo),
	PRIMARY KEY(codigo)
)engine = innodb;
CREATE TABLE grupoDeActivos(

	codigo int not NULL auto_increment,
	titulo VARCHAR(250) not NULL,
	fechaCreacion date,
	PRIMARY KEY (codigo)

)engine = innodb;
CREATE TABLE categorias(
	codigo int not NULL auto_increment,
	cdg_grupoDeActivos int not NULL,
	descripcion VARCHAR(250) not NULL,
	fechaCreacion date,
	FOREIGN KEY(cdg_grupoDeActivos) REFERENCES grupoDeActivos(codigo),
	PRIMARY KEY (codigo)
)engine = innodb;
CREATE TABLE activos(

	codigo int not NULL auto_increment,
	cdg_categorias int not NULL,
	cdg_areaDeLaboratorio int not null,
	estado VARCHAR(100) not NULL,
	fechaIngreso date not NULL,
	nombreActivo VARCHAR(250) not null,
	cdg_inventarioUtepsa VARCHAR(250),
	requiereManteminiento VARCHAR(20) not NULL,
	FOREIGN KEY(cdg_categorias) REFERENCES categorias(codigo),
	FOREIGN KEY(cdg_areaDeLaboratorio) REFERENCES areasDeLaboratorio(codigo),
	PRIMARY KEY (codigo)
	
)engine = innodb;
create TABLE movimientoDeActivos(
	codigo int not NULL AUTO_INCREMENT,
	cdg_activo int not NULL,
	cdg_AreaAnterior int not NULL,
	cdg_AreaPosterior int not NULL,
	cdg_Responsable int not NULL,
	fechaDeTransferencia DATE not NULL,
	observaciones VARCHAR(250),
	FOREIGN KEY(cdg_activo) REFERENCES activos(codigo),
	FOREIGN KEY(cdg_AreaAnterior) REFERENCES areasDeLaboratorio(codigo),
	FOREIGN KEY(cdg_AreaPosterior) REFERENCES areasDeLaboratorio(codigo),
	FOREIGN KEY(cdg_Responsable) REFERENCES usuarios(codigo),
    PRIMARY KEY(codigo)
)engine = innodb;
CREATE TABLE contenidoDelArea(
	codigo int not NULL AUTO_INCREMENT,
	cdg_areaDeLaboratorio int not NULL,
	cantidad varchar(10),
	descripcionDelMaterial VARCHAR(250) not NULL,
	fechaDeIngresoAlArea date not NULL,
	observaciones VARCHAR(250) not NULL,
	FOREIGN KEY(cdg_areaDeLaboratorio) REFERENCES areasDeLaboratorio(codigo),
	PRIMARY KEY (codigo)
)engine = innodb;
CREATE TABLE historialDeEdicionContenidoDelArea(){
	codigo int not NULL AUTO_INCREMENT,
	cdg_contenidoDelArea int not NULL,
	cdg_Responsable int not NULL,
	fechaDeEdicion date not null,
	cantidad_anterior varchar(10),
	descripcionDelMaterial_anterior VARCHAR(250),
	observaciones_anterior VARCHAR(250),
	FOREIGN KEY(cdg_contenidoDelArea) REFERENCES contenidoDelArea(codigo),
	FOREIGN KEY(cdg_Responsable) REFERENCES usuarios(codigo),
	PRIMARY KEY (codigo)
}engine = innodb;
CREATE TABLE mantenimientos(

	codigo int not NULL auto_increment,
	cdg_activo int not NULL,
	tipoDeMantenimiento VARCHAR(100),
	descripcionDelMantenimiento VARCHAR(250) not NULL,
	estado VARCHAR(50) not NULL,
	fechaDeSolicitud date not null,
	fechaARealizar date not NULL,
	fechaDeCompletado date,
	FOREIGN KEY(cdg_activo) REFERENCES activos(codigo),
	PRIMARY KEY (codigo)
	
)engine = innodb;
CREATE TABLE integrantesDelMantenimiento(
	cdg_usuario int not NULL,
	cdg_mantenimiento int not NULL,
	FOREIGN KEY(cdg_usuario) REFERENCES usuarios(codigo),
	FOREIGN KEY(cdg_mantenimiento) REFERENCES mantenimientos(codigo),
	PRIMARY KEY(cdg_usuario,cdg_mantenimiento)
)engine = innodb;
CREATE TABLE caracteristicasDelActivo(
	codigo int not NULL auto_increment,
	cdg_activo int not NULL,
	titulo VARCHAR(100) not null,
	descripcion VARCHAR(250) not null,
	FOREIGN KEY(cdg_activo) REFERENCES activos(codigo),
	PRIMARY KEY(codigo)
)engine = innodb;
CREATE TABLE prestamos(
	codigo int not NULL auto_increment,
	cdg_AdminResponsable int not NULL,
	estado VARCHAR(50) not NULL,
	nombreDelResponsableDelPrestamo varchar(250) not null,
	areaUbicacionDestino VARCHAR(250) not NULL,
	fechaDeSolicitud date not NULL,
	fechaDeEntrega date,
	fechaEstimadaDevolucion date,
	fechaDeDevolucion date,
	observaciones  VARCHAR(250),
	FOREIGN KEY(cdg_AdminResponsable) REFERENCES usuarios(codigo),
	PRIMARY KEY(codigo)
)engine = innodb;
CREATE TABLE activosPrestados(
	cdg_activo int not NULL,
	cdg_prestamo int not NULL,
	observaciones  VARCHAR(250),
	estado VARCHAR(50) not NULL,
    FOREIGN KEY(cdg_activo) REFERENCES activos(codigo),
    FOREIGN KEY(cdg_prestamo) REFERENCES prestamos(codigo),
    PRIMARY KEY(cdg_activo,cdg_prestamo)
)engine = innodb;
CREATE TABLE documentacion(

	codigo int not NULL auto_increment,
	codigoFormulario VARCHAR(100),
	descripcion VARCHAR(250) not NULL,
	estado VARCHAR(50) not NULL,
	fechaIngreso date not NULL,
	cdg_VER VARCHAR(50),
	observaciones VARCHAR(250),
	url VARCHAR(250),
	PRIMARY KEY (codigo)
	
)engine = innodb;

