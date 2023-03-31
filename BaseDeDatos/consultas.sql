
-----------------------------------Consultas-----------------------------------
------------------------------CODIGO PARA LA VENTANA INVENTARIO------------------------------------
--Extraer cantidad de activos en el inventario, menos los que estan fuera de servicio o en prestamo------------------------------
create view cantidad_de_activos_en_el_inventario
as
SELECT
        COUNT(estado) As CantidadDeActivosEnInventario
        from activos act
        WHERE act.estado != 'Fuera de Servicio' AND act.estado != 'En Prestamo';


--Para llamarlo
SELECT * FROM `cantidad_de_activos_en_el_inventario`;

------------------------------Extraer la cantidad de activos en Mantenimiento------------------------------
create view cantidad_de_activos_en_mantenimiento
as
SELECT
	COUNT(estado) As CantidadDeActivosEnMantenimiento
    from activos act
    WHERE act.estado = "En Mantenimiento" ;


--Para llamarlo
SELECT * FROM `cantidad_de_activos_en_mantenimiento`;
	
	
------------------------------Extraer la cantidad de activos en "Fuera de Servicio"------------------------------
create view CantidadDeActivosFueraDeServicio
as
SELECT
	COUNT(estado) As CantidadDeActivosFueraDeServicio
    from activos act
    WHERE act.estado = "Fuera de Servicio";


--Para llamarlo
SELECT * FROM `CantidadDeActivosFueraDeServicio`;


------------------------------Extraer la cantidad de activos en "En Prestamo"------------------------------
create view CantidadDeActivosEnPrestamo
as
SELECT
	COUNT(estado) As CantidadDeActivosEnPrestamo
    from activos act
    WHERE act.estado = "En Prestamo";


--Para Llamarlo
SELECT * FROM `CantidadDeActivosEnPrestamo`;


------------------------------Extraer la tabla con los activos que estan con su mantenimiento cerca------------------------------

create view tabla_Con_Activos_En_Mantenimiento
as
    SELECT
        act.cdg_inventarioUtepsa,
        act.nombreActivo,
        mant.fechaARealizar,
        mant.tipoDeMantenimiento
        FROM activos act
        INNER JOIN mantenimientos mant on act.codigo = mant.cdg_activo
        WHERE mant.estado = "Pendiente" LIMIT 10;
--Para Llamarlo
SELECT * FROM tabla_con_activos_en_mantenimiento;

--------------------------------Extraer una tabla donde este el nombre del grupo de activos la categoria y la cantidad que hay dentro exceptuando los que estan fuera de servicio o en prestamo

create view tabla_actual_del_Inventario
as

SELECT
	grp.titulo as GrupoDeActivo,
	cat.descripcion as Categoria,
	COUNT(*) As CantidadDeActivosEnInventario
    from grupoDeActivos grp
	INNER JOIN categorias cat on grp.codigo =  cat.cdg_grupoDeActivos
	INNER JOIN activos act on cat.codigo = act.cdg_categorias
    WHERE act.estado != "Fuera de Servicio" AND act.estado != "En Prestamo"
	GROUP By cat.descripcion LIMIT 10;
--Para llamarlo
SELECT * FROM `tabla_actual_del_inventario`;

-------OTRO relevante-----------------------Extraer una tabla donde este el nombre del grupo de activos la categoria y la cantidad que hay dentro sin excepciones

SELECT
	grp.titulo as GrupoDeActivo,
	cat.descripcion as Categoria,
	COUNT(estado) As CantidadDeActivosEnInventario
    from grupoDeActivos grp
	INNER JOIN categorias cat on grp.codigo =  cat.cdg_grupoDeActivos
	INNER JOIN activos act on cat.codigo = act.cdg_categorias
	GROUP By cat.descripcion;


------------------------------CODIGO PARA LA VENTANA USO DE LABORATORIOS------------------------------------
------------------------------Extraer la cantidad de reservas confirmadas en el modulo


create view cantReservasConfirmadas
as

SELECT
	COUNT(*) as materiasParaEsteModulo
	from reservas reser
	WHERE fechaInicio <= CURDATE() AND CURDATE() <= fechaFinal AND estadoDeReserva = "Confirmado";
	SELECT * from cantReservasConfirmadas;
------------------------------Extraer la cantidad de reservas por confirmar



create view cant_ReservasPorConfirmar
as
SELECT
	COUNT(*) as materiasParaEsteModulo
	from reservas reser
	WHERE  estadoDeReserva = "Por Confirmar";
	SELECT * from cantReservasPorConfirmar;
------------------------------Extraer la cantidad de reservas Canceladas


create view cantReservasCanceladas
as
SELECT
	COUNT(*) as materiasParaEsteModulo
	from reservas reser
	WHERE fechaInicio <= CURDATE() AND CURDATE() <= fechaFinal AND estadoDeReserva = "Cancelada";
	SELECT * from cantReservasCanceladas;
------------------------------Extraer la cantidad que asistiran


create view cantAsistentes
as
SELECT
	SUM(cantDeAsistentes) as materiasParaEsteModulo
	from reservas reser
	WHERE fechaInicio <= CURDATE() AND CURDATE() <= fechaFinal AND estadoDeReserva = "Confirmado";
	SELECT * from cantAsistentes;
------------------------------Extraer una tabla con las reservas para hoy

create view tabla_Reservas_Para_Hoy
as
SELECT
	reser.tituloDeReserva as MateriaTitulo,
	per.nombre as Docente,
	CONCAT(reser.horaInicio,' A ',reser.horaFinal) as Horario,
	arealab.tituloDeArea as Aula,
	reser.cantDeAsistentes as CantAsistentes
	from reservas reser 
	INNER JOIN usuarios user on reser.cdg_usuarioSolicitante = user.codigo
	INNER JOIN persona per on user.cdg_Persona = per.codigo
	INNER JOIN areasDeLaboratorio arealab on reser.cdg_areasDeLaboratorio = arealab.codigo
	INNER JOIN materias mat on reser.cdg_materia = mat.codigo
	WHERE fechaInicio <= CURDATE() AND CURDATE() <= fechaFinal AND reser.estadoDeReserva = "Confirmado" AND reser.tipoDeModalidad = "Fecha Especifica"
    ORDER BY TIME(reser.horaInicio) ASC;

	SELECT * FROM tabla_reservas_para_hoy;


create view tabla_Reservas_Posteriores
as
SELECT
	reser.tituloDeReserva as MateriaTitulo,
	per.nombre as Docente,
    reser.fechaInicio,
    reser.fechaFinal,
	CONCAT(reser.horaInicio,' A ',reser.horaFinal) as Horario,
	arealab.tituloDeArea as Aula,
	reser.cantDeAsistentes as CantAsistentes
	from reservas reser 
	INNER JOIN usuarios user on reser.cdg_usuarioSolicitante = user.codigo
	INNER JOIN persona per on user.cdg_Persona = per.codigo
	INNER JOIN areasDeLaboratorio arealab on reser.cdg_areasDeLaboratorio = arealab.codigo
	INNER JOIN materias mat on reser.cdg_materia = mat.codigo
	WHERE fechaInicio < CURDATE() AND reser.estadoDeReserva = "Confirmado" AND reser.tipoDeModalidad = "Fecha Especifica"
    ORDER BY TIME(reser.horaInicio) ASC;


create view tabla_Reservas_Modulares
as
SELECT
	reser.tituloDeReserva as MateriaTitulo,
	per.nombre as Docente,
	CONCAT(reser.horaInicio,' A ',reser.horaFinal) as Horario,
	arealab.tituloDeArea as Aula,
    reser.tipoDeModalidad,
	reser.cantDeAsistentes as CantAsistentes
	from reservas reser 
	INNER JOIN usuarios user on reser.cdg_usuarioSolicitante = user.codigo
	INNER JOIN persona per on user.cdg_Persona = per.codigo
	INNER JOIN areasDeLaboratorio arealab on reser.cdg_areasDeLaboratorio = arealab.codigo
	INNER JOIN materias mat on reser.cdg_materia = mat.codigo
	WHERE fechaInicio <= CURDATE() AND CURDATE() <= fechaFinal AND reser.estadoDeReserva = "Confirmado"
    ORDER BY TIME(reser.horaInicio) ASC;





create view tabla_Reservas_Por_Confirmar
as
SELECT
	reser.tituloDeReserva as MateriaTitulo,
	per.nombre as Docente,
	CONCAT(reser.horaInicio,' A ',reser.horaFinal) as Horario,
	arealab.tituloDeArea as Aula,
	reser.cantDeAsistentes as CantAsistentes
	from reservas reser
	INNER JOIN usuarios user on reser.cdg_usuarioSolicitante = user.codigo
	INNER JOIN persona per on user.cdg_Persona = per.codigo
	INNER JOIN areasDeLaboratorio arealab on reser.cdg_areasDeLaboratorio = arealab.codigo
	INNER JOIN materias mat on reser.cdg_materia = mat.codigo
	WHERE reser.estadoDeReserva = "Por Confirmar"
	ORDER BY TIME(reser.horaInicio) ASC;
	;

	SELECT * FROM tabla_Reservas_Por_Confirmar;

------------------------------CODIGO PARA LA VENTANA DE PRESTAMO------------------------------------


------------------------------Extraer la cantidad de prestamos "Completados"

create view cantPrestamosCompletados
as

SELECT
	COUNT(*) as PrestamosCompletados
	FROM prestamos
	WHERE estado = "Completado";

SELECT * FROM cantPrestamosCompletados;
------------------------------Extraer la cantidad de prestamos "En Solicitud"

create view cantPrestamosEnSolicitud
as
SELECT
	COUNT(*) as EnSolicitud
	FROM prestamos
	WHERE estado = "En Solicitud";

SELECT * FROM cantPrestamosEnSolicitud;


------------------------------Extraer la cantidad de prestamos "Caducados"

create view cantPrestamosCaducados
as
SELECT
	COUNT(*) as Caducados
	FROM prestamos
	WHERE fechaEstimadaDevolucion < CURDATE();

SELECT * FROM cantPrestamosCaducados;

------------------------------Extraer la cantidad de prestamos "Vigentes"

create view cantPrestamosVigentes
as
SELECT
	COUNT(*) as PrestamosCompletados
	FROM prestamos prest
	WHERE prest.estado = 'Vigente';

SELECT * FROM cantPrestamosVigentes;

------------------------------Extraer una tabla con las reservas "vigentes"


create view tabla_Prestamos_Vigentes
as
SELECT
	act.nombreActivo,
	prest.nombreDelResponsableDelPrestamo,
	prest.fechaDeEntrega,
	prest.fechaEstimadaDevolucion,
	IF(prest.fechaEstimadaDevolucion < CURDATE(), 'Vencida', 'Vigente') AS estado
	from activosPrestados actPrest
	INNER join activos act on actPrest.cdg_activo = act.codigo
	INNER join prestamos prest on actPrest.cdg_prestamo = prest.codigo
	WHERE prest.estado != 'Completado' AND actPrest.estado != 'Completado';
	
SELECT * FROM tabla_Prestamos_Vigentes;

------------------------------CODIGO PARA LA VENTANA DE Documentacion ------------------------------------

SELECT 

	codigoFormulario,
	descripcion,
	fechaIngreso,
	cdg_VER,
	estado
	from documentacion




---Extraccion de datos

--Extraer todos los docentes
create view tabla_DeDocentesYSusCdgUsuarios
as
	SELECT
		user.codigo as CodigoDeUsuario,
		pers.nombre as NombreCompleto
		from persona pers
		INNER join usuarios user on pers.codigo = user.cdg_Persona
		INNER JOIN rolEnLaUniversidad rol on user.cdg_DeRol = rol.codigo
		WHERE  rol.codigo = 5 AND descripcionDelCargo = "Docente";


--Extraer todas las materias
create view tabla_MateriasVigentes
as
	SELECT
	mat.codigo as Codigo,
	mat.descripcion as Materia
	from materias mat
	WHERE estado = 'Vigente'





---Procedimiento Almacenado



INSERT INTO `reservas` (`codigo`, `cdg_usuarioAdmin`, `cdg_usuarioSolicitante`, `cdg_areaDeLaboratorio`, `cdg_materia`, `tituloDeReserva`,`encargadoReserva`,`cantDeAsistentes`, `fechaInicio`, `fechaFinal`, `tipoDeModalidad`, `horaInicio`, `horaFinal`, `estadoDeReserva`) VALUES (NULL, '3', '1', '20', '1', 'Algoritmos y Programacion', '30', '2023-02-21', '2023-02-24', 'Presencial', '10:10:00', '13:15:00', 'Por Confirmar');

DELIMITER //

CALL SolicitudDeReservaPorMateria(1,2,1,"30","Modular","10:15","12:45","1","1","2023");

CREATE PROCEDURE SolicitudDeReservaPorMateria(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioSolicitante_IN INT,IN cdg_materia_IN int,IN cantDeAsistentes_IN VARCHAR(20),IN tipoDeModalidad_IN varchar(100),IN horaInicio_IN time,IN horaFinal_IN time,IN modulo_IN VARCHAR(4),IN semestre_IN VARCHAR(4), IN gestion_IN VARCHAR(4),IN requerimientos_IN VARCHAR(250))
BEGIN

	DECLARE tituloDeReserva_IN VARCHAR(250) DEFAULT NULL;
	DECLARE nombreDelDocente_IN VARCHAR(250) DEFAULT NULL;
	DECLARE fechaInicio_IN date DEFAULT NULL;
	DECLARE fechaFinal_IN date DEFAULT NULL;
	
	SET tituloDeReserva_IN = (
		SELECT
			descripcion
			from materias
			WHERE cdg_materia_IN = materias.codigo
			
			);

	SET nombreDelDocente_IN = (

		SELECT
			pers.nombre
			from persona pers
			INNER join usuarios user on pers.codigo = user.cdg_Persona
			WHERE cdg_usuarioSolicitante_IN = user.codigo
			
			);

	SET fechaInicio_IN = (
		SELECT 
			cal.fechaInicio
			from calendario cal
			WHERE tipoDeModalidad_IN = cal.tipoDeModalidad AND modulo_IN = cal.modulo AND semestre_IN = cal.semestre AND gestion_IN = cal.gestion
	);

	SET fechaFinal_IN = (
		SELECT 
			cal.fechaFinal
			from calendario cal
			WHERE tipoDeModalidad_IN = cal.tipoDeModalidad AND modulo_IN = cal.modulo AND semestre_IN = cal.semestre AND gestion_IN = cal.gestion
	);

	INSERT INTO `reservas` VALUES (NULL, cdg_usuarioAdmin_IN , cdg_usuarioSolicitante_IN, 20, cdg_materia_IN , tituloDeReserva_IN , nombreDelDocente_IN ,cantDeAsistentes_IN, fechaInicio_IN, fechaFinal_IN, tipoDeModalidad_IN, horaInicio_IN, horaFinal_IN, 'Por Confirmar',requerimientos_IN);


END //


CALL SolicitudDeReservaPorMateria_fechaEspecifica(1,2,1,"30","Modular","10:15","12:45","1","1","2023");


CREATE PROCEDURE SolicitudDeReservaPorMateria_fechaEspecifica(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioSolicitante_IN INT,IN cdg_materia_IN int,IN cantDeAsistentes_IN VARCHAR(20),IN horaInicio_IN time,IN horaFinal_IN time,IN fechaInicio_IN date,IN fechaFinal_IN date,IN requerimientos_IN VARCHAR(250))
BEGIN
	DECLARE tituloDeReserva_IN VARCHAR(250) DEFAULT NULL;
	DECLARE nombreDelDocente_IN VARCHAR(250) DEFAULT NULL;

	SET tituloDeReserva_IN = (
		SELECT
			descripcion
			from materias
			WHERE cdg_materia_IN = materias.codigo);
	SET nombreDelDocente_IN = (
		SELECT
			pers.nombre
			from persona pers
			INNER join usuarios user on pers.codigo = user.cdg_Persona
			WHERE cdg_usuarioSolicitante_IN = user.codigo);

	INSERT INTO `reservas` VALUES (NULL, cdg_usuarioAdmin_IN , cdg_usuarioSolicitante_IN, 20, cdg_materia_IN , tituloDeReserva_IN , nombreDelDocente_IN ,cantDeAsistentes_IN, fechaInicio_IN, fechaFinal_IN, "Fecha Especifica", horaInicio_IN, horaFinal_IN, 'Por Confirmar',requerimientos_IN);
END //

CALL SolicitudDeReservaPorMateria_fechaEspecifica(1,2,2,"10","17:44","19:44","2023-02-18","2023-02-28");


CREATE PROCEDURE SolicitudDeReservaPorMateria_NoEsMateria(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioSolicitante_IN INT,IN tituloDeReserva_IN VARCHAR(250),IN cantDeAsistentes_IN VARCHAR(20),IN horaInicio_IN time,IN horaFinal_IN time,IN fechaInicio_IN date,IN fechaFinal_IN date,IN requerimientos_IN VARCHAR(250))
BEGIN

	DECLARE nombreDelDocente_IN VARCHAR(250) DEFAULT NULL;

	SET nombreDelDocente_IN = (
		SELECT
			pers.nombre
			from persona pers
			INNER join usuarios user on pers.codigo = user.cdg_Persona
			WHERE cdg_usuarioSolicitante_IN = user.codigo);


	INSERT INTO `reservas` VALUES (NULL, cdg_usuarioAdmin_IN , cdg_usuarioSolicitante_IN, 20, 4 , tituloDeReserva_IN , nombreDelDocente_IN ,cantDeAsistentes_IN, fechaInicio_IN, fechaFinal_IN, "Fecha Especifica", horaInicio_IN, horaFinal_IN, 'Por Confirmar',requerimientos_IN);

END //

CALL SolicitudDeReservaPorMateria_NoEsMateria(1,2,2,"10","17:44","19:44","2023-02-18","2023-02-28");

-- AGREGAR SOPORTE -- A DOCENTE

CREATE PROCEDURE agregarSoporte_presencial_Docente(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioDocente_IN INT,IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_usuarioDocente_IN,null,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaActual_IN,horaActual_IN,Observaciones_IN);
END //

CREATE PROCEDURE agregarSoporte_presencial_ci_Docente(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioDocente_IN INT,IN tipoDeSoporte_IN VARCHAR(150),IN horaInicio_IN TIME,IN horaFinal_IN TIME,IN motivo_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";

	SET fechaDeHoy_IN = CURDATE();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_usuarioDocente_IN,null,tipoDeSoporte_IN,motivo_IN,NULL,fechaDeHoy_IN,horaInicio_IN,horaFinal_IN,NULL);
END //

CREATE PROCEDURE agregarSoporte_whatsapp_Docente(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioDocente_IN INT,IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN horaInicio_IN TIME,IN horaFinal_IN TIME,IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";

	SET fechaDeHoy_IN = CURDATE();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_usuarioDocente_IN,null,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaInicio_IN,horaFinal_IN,Observaciones_IN);
END //

CREATE PROCEDURE agregarSoporte_MediosVariados_Docente(IN cdg_usuarioAdmin_IN INT,IN cdg_usuarioDocente_IN INT,IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();

	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_usuarioDocente_IN,null,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaActual_IN,horaActual_IN,Observaciones_IN);
END //

-- AGREGAR SOPORTE -- A ESTUDIANTE

CREATE PROCEDURE agregarSoporte_presencial_Estudiante(IN cdg_usuarioAdmin_IN INT,IN nroDeRegistro_IN VARCHAR(150),IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";
	DECLARE cdg_delUsuarioAtendido INT DEFAULT NULL;

	SET cdg_delUsuarioAtendido = (
		SELECT
			user.codigo as CodigoDeEstudiante
			from usuarios user
			WHERE user.nombreDeUsuario = "estudiante");

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_delUsuarioAtendido,nroDeRegistro_IN,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaActual_IN,horaActual_IN,Observaciones_IN);

END //


CREATE PROCEDURE agregarSoporte_presencial_ci_Estudiante(IN cdg_usuarioAdmin_IN INT,IN nroDeRegistro_IN VARCHAR(150),IN tipoDeSoporte_IN VARCHAR(150),IN horaInicio_IN TIME,IN horaFinal_IN TIME,IN motivo_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";
	DECLARE cdg_delUsuarioAtendido INT DEFAULT NULL;

	SET cdg_delUsuarioAtendido = (
		SELECT
			user.codigo as CodigoDeEstudiante
			from usuarios user
			WHERE user.nombreDeUsuario = "estudiante");

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_delUsuarioAtendido,nroDeRegistro_IN,tipoDeSoporte_IN,motivo_IN,NULL,fechaDeHoy_IN,horaInicio_IN,horaFinal_IN,NULL);

END //


CREATE PROCEDURE agregarSoporte_whatsapp_Estudiante(IN cdg_usuarioAdmin_IN INT,IN nroDeRegistro_IN VARCHAR(150),IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN horaInicio_IN TIME,IN horaFinal_IN TIME,IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";
	DECLARE cdg_delUsuarioAtendido INT DEFAULT NULL;

	SET cdg_delUsuarioAtendido = (
		SELECT
			user.codigo as CodigoDeEstudiante
			from usuarios user
			WHERE user.nombreDeUsuario = "estudiante");

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_delUsuarioAtendido,nroDeRegistro_IN,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaInicio_IN,horaFinal_IN,Observaciones_IN);

END //


CREATE PROCEDURE agregarSoporte_mediosvariados_Estudiante(IN cdg_usuarioAdmin_IN INT,IN nroDeRegistro_IN VARCHAR(150),IN tipoDeSoporte_IN VARCHAR(150),IN descripcionAsunto_IN VARCHAR(250),IN descripcionSolucion_IN VARCHAR(250),IN horaInicio_IN TIME,IN horaFinal_IN TIME,IN Observaciones_IN VARCHAR(250))
BEGIN
	DECLARE fechaDeHoy_IN DATE DEFAULT "2023-01-01";
	DECLARE horaActual_IN TIME DEFAULT "00:01";
	DECLARE cdg_delUsuarioAtendido INT DEFAULT NULL;

	SET cdg_delUsuarioAtendido = (
		SELECT
			user.codigo as CodigoDeEstudiante
			from usuarios user
			WHERE user.nombreDeUsuario = "estudiante");

	SET fechaDeHoy_IN = CURDATE();
	SET horaActual_IN = CURTIME();
	
	INSERT INTO soportes values(null,cdg_usuarioAdmin_IN,cdg_delUsuarioAtendido,nroDeRegistro_IN,tipoDeSoporte_IN,descripcionAsunto_IN,descripcionSolucion_IN,fechaDeHoy_IN,horaInicio_IN,horaFinal_IN,Observaciones_IN);

END //

-- Agregar Usuario
CREATE PROCEDURE agregar_Usuario(IN nombreCompleto_IN VARCHAR(250),IN correo_IN VARCHAR(150),IN nroTelefono_IN VARCHAR(20),IN profesion_IN VARCHAR(150),nombreUsuario_IN VARCHAR(150),contrasena_IN VARCHAR(150))
BEGIN

	DECLARE id_Persona INT DEFAULT NULL; 
 	DECLARE usuario_existente INT DEFAULT 0;
 	DECLARE correo_existente INT DEFAULT 0;


    SELECT 
		COUNT(*) 
		INTO usuario_existente 
		FROM usuarios user
		WHERE user.nombreDeUsuario = nombreUsuario_IN;

    IF usuario_existente > 0 THEN
        SELECT "El Usuario ya existe";
    ELSE
		SELECT 
			COUNT(*) 
			INTO correo_existente 
			FROM persona per
			WHERE per.correo = correo_IN;

		IF correo_existente > 0 THEN
			SELECT "El Correo ya existe";
		ELSE
			SELECT "Se Subio Con exito";
			INSERT INTO persona values(null,nombreCompleto_IN,correo_IN,nroTelefono_IN,profesion_IN);
			SET id_Persona = LAST_INSERT_ID();
			INSERT INTO usuarios values(null,id_Persona,6,nombreUsuario_IN,contrasena_IN,"Por Confirmar");
		END IF;
	END IF;

END //


CREATE FUNCTION verificar_inicio_sesion(usuario VARCHAR(250)) 
RETURNS VARCHAR(255)
BEGIN
    DECLARE hash VARCHAR(255);

    SELECT 
		user.contrasena 
		INTO hash 
		FROM usuarios user
		INNER join persona per ON user.cdg_Persona = per.codigo
		WHERE user.nombreDeUsuario = usuario OR per.correo = usuario  LIMIT 1;

    IF hash IS NULL THEN
        RETURN NULL;
    END IF;

    RETURN hash;

END


CREATE PROCEDURE tabla_conLosDatosDelUsuarioParaIniciarSesion(IN usuario_IN VARCHAR(250))
BEGIN

	SELECT
		user.codigo as CodigoDeUsuario,
		user.nombreDeUsuario as nombreDeUsuario,
		user.cdg_DeRol as privilegio_del_usuario
		from persona pers
		INNER join usuarios user on pers.codigo = user.cdg_Persona
		WHERE user.nombreDeUsuario = usuario_IN OR pers.correo = usuario_IN LIMIT 1;

END //


create view tabla_Soportes_de_Hoy as
SELECT
	spte.codigo as cdg_soporte,
	per.nombre as NombreUsuario,
	obtenerNombreDeUsuario(spte.cdg_UsuarioAtendido) AS UsuarioAtendido,
	spte.tipoDeSoporte AS TipoDeSoporte,
	spte.descripcionAsunto AS Motivo,
	spte.horaDeSolicitud AS HoraDeSolicitud
from
	soportes spte
	INNER join usuarios user ON spte.cdg_UsuarioAdmin = user.codigo
	INNER JOIN persona per ON user.cdg_Persona = per.codigo
WHERE
	spte.fechaSoporte = CURDATE()
ORDER BY
	TIME(spte.horaDeSolicitud) ASC;




CREATE FUNCTION obtenerNombreDeUsuario(codigo int)
RETURNS VARCHAR(255)
BEGIN

	DECLARE nombre_completo VARCHAR(255);
	SELECT
		per.nombre as UsuarioAtendido
		INTO nombre_completo
		FROM persona per
		INNER JOIN usuarios user ON per.codigo = user.cdg_Persona
		WHERE codigo = user.codigo;

	RETURN nombre_completo;
END;
	
CREATE PROCEDURE agregar_Usuario_Docente(IN nombreCompleto_IN VARCHAR(250),IN correo_IN VARCHAR(150),IN nombreUsuario_IN VARCHAR(150))
BEGIN

	DECLARE id_Persona INT DEFAULT NULL; 
 	DECLARE usuario_existente INT DEFAULT 0;
 	DECLARE correo_existente INT DEFAULT 0;

 	DECLARE contrasena_IN VARCHAR(20) DEFAULT "12345678";
 	DECLARE profesion_IN VARCHAR(20) DEFAULT "N/A";
 	DECLARE nroTelefono_IN VARCHAR(20) DEFAULT "N/A";

    SELECT 
		COUNT(*) 
		INTO usuario_existente 
		FROM usuarios user
		WHERE user.nombreDeUsuario = nombreUsuario_IN;

    IF usuario_existente > 0 THEN
        SELECT "El Usuario ya existe";
    ELSE
		SELECT 
			COUNT(*) 
			INTO correo_existente 
			FROM persona per
			WHERE per.correo = correo_IN;

		IF correo_existente > 0 THEN
			SELECT "El Correo ya existe";
		ELSE
			SELECT "Se Subio Con exito";
			INSERT INTO persona values(null,nombreCompleto_IN,correo_IN,nroTelefono_IN,profesion_IN);
			SET id_Persona = LAST_INSERT_ID();
			INSERT INTO usuarios values(null,id_Persona,5,nombreUsuario_IN,contrasena_IN,"Activo");
		END IF;
	END IF;

END //
CALL agregar_Usuario_Docente("Nombre_Completo_Docente","Correo_Docente","Nombre_USUARIO_Docente");



CREATE PROCEDURE editar_Soporte(IN cdg_usuarioAdmin_IN INT,IN cdg_soporte_IN INT,IN cdg_usuarioAtendido_IN INT,IN medioDeSoporte_IN VARCHAR(250),IN Motivo_IN VARCHAR(250),IN HoraDeSolicitud_IN TIME) 

BEGIN
	DECLARE comprobarDueñoDelSoporte INT;

	
	SELECT 
		COUNT(*) 
		INTO  comprobarDueñoDelSoporte
		FROM soportes spte
		WHERE spte.codigo  = cdg_soporte_IN AND spte.cdg_UsuarioAdmin  = cdg_usuarioAdmin_IN;
	
	IF comprobarDueñoDelSoporte > 0 THEN
        UPDATE
			soportes
			SET
				cdg_UsuarioAtendido  = cdg_usuarioAtendido_IN,
				tipoDeSoporte = medioDeSoporte_IN,
				descripcionAsunto = Motivo_IN,
				horaDeSolicitud = HoraDeSolicitud_IN
			WHERE
				codigo = cdg_soporte_IN;
		SELECT "Se ha editado con exito tu soporte";
    ELSE
		SELECT "No puedes Editar Soporte de otro Usuario";

	END IF;

END //


CREATE PROCEDURE agregar_Materia(IN nombre_Materia_IN VARCHAR(250), IN cdg_usuarioAdmin INT) 

BEGIN
	
	INSERT INTO materias values(null,nombre_Materia_IN,'Vigente',cdg_usuarioAdmin);

END //


CREATE PROCEDURE agregar_Docente_por_auxiliar(IN nombreCompleto_IN VARCHAR(250))
BEGIN

	DECLARE id_Persona INT DEFAULT NULL; 
 	DECLARE usuario_existente INT DEFAULT 0;
 	DECLARE correo_existente INT DEFAULT 0;

 	DECLARE contrasena_IN VARCHAR(20) DEFAULT "12345678";
 	DECLARE profesion_IN VARCHAR(20) DEFAULT "N/A";
 	DECLARE nroTelefono_IN VARCHAR(20) DEFAULT "N/A";

    SELECT 
		COUNT(*) 
		INTO usuario_existente 
		FROM usuarios user
		WHERE user.nombreDeUsuario = nombreUsuario_IN;

    IF usuario_existente > 0 THEN
        SELECT "El Usuario ya existe";
    ELSE
		SELECT 
			COUNT(*) 
			INTO correo_existente 
			FROM persona per
			WHERE per.correo = correo_IN;

		IF correo_existente > 0 THEN
			SELECT "El Correo ya existe";
		ELSE
			SELECT "Se Subio Con exito";
			INSERT INTO persona values(null,nombreCompleto_IN,correo_IN,nroTelefono_IN,profesion_IN);
			SET id_Persona = LAST_INSERT_ID();
			INSERT INTO usuarios values(null,id_Persona,5,nombreUsuario_IN,contrasena_IN,"Activo");
		END IF;
	END IF;

END //
