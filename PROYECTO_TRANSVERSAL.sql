/* PARA MOSTRAR LAS BASES DE DATOS CREADAS */

DROP DATABASE IF EXISTS PROYECTO_TRANSVERSAL;
/* PARA CREAR UNA BASE DE DATOS */
CREATE DATABASE PROYECTO_TRANSVERSAL;

/* PARA CREAR TABLAS */
USE PROYECTO_TRANSVERSAL;

CREATE TABLE autor(
	id_autor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre_autor VARCHAR(20) NOT NULL,
	apellido_1_autor VARCHAR(20) NOT NULL,
	apellido_2_autor VARCHAR(20) NOT NULL,
	fecha_nac_autor DATE 
);

CREATE TABLE trofeo(
	id_trofeo INT NOT NULL PRIMARY KEY,
    descripcion VARCHAR(50),
    fecha_obtencion DATE NOT NULL
);

CREATE TABLE libro(
	id_libro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_libro VARCHAR(40) NOT NULL,
    editorial VARCHAR(20) NOT NULL,
    paginas INT NOT NULL,
    edicion INT,
    sinopsis VARCHAR (300),
	id_autor INT NOT NULL,
    genero VARCHAR (40), 
    CONSTRAINT fk_libro_autor FOREIGN KEY(id_autor) REFERENCES autor(id_autor) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE usuario(
	id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_user VARCHAR(20),
    apellidos VARCHAR(20),
    email VARCHAR(30),
    passwd VARCHAR(100),
    fech_nac DATE, 
    id_trofeo INT,
    id_libro INT, 
    rol SET ('cliente','admin') DEFAULT 'cliente',
    CONSTRAINT fk_trofeo_usuario FOREIGN KEY (id_trofeo) REFERENCES trofeo(id_trofeo) ON DELETE CASCADE ON UPDATE RESTRICT,
    CONSTRAINT fk_libro_usuario FOREIGN KEY (id_libro) REFERENCES libro(id_libro) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE valoracion (
	id_valoracion INT NOT NULL PRIMARY KEY,
    descripcion VARCHAR (300),
    puntuacion INT,
    id_user INT NOT NULL,
    id_libro INT NOT NULL,
	CONSTRAINT fk_valoracion_usuario FOREIGN KEY(id_user) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT fk_valoracion_libro FOREIGN KEY(id_libro) REFERENCES libro(id_libro) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE libro_top (
	id_libro_top INT NOT NULL PRIMARY KEY,
    id_libro INT NOT NULL, 
    id_valoracion INT NOT NULL,
    CONSTRAINT fk_libro_top_libro FOREIGN KEY(id_libro) REFERENCES libro(id_libro) ON DELETE CASCADE ON UPDATE RESTRICT,
    CONSTRAINT fk_libro_top_valoracion FOREIGN KEY(id_valoracion) REFERENCES valoracion(id_valoracion) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE biblioteca (
	id_biblioteca INT NOT NULL PRIMARY KEY
);

CREATE TABLE biblioteca_user (
	id_biblioteca INT NOT NULL,
    id_valoracion INT NOT NULL,
    CONSTRAINT pk_biblioteca_user_bib_val PRIMARY KEY (id_biblioteca, id_valoracion),
    CONSTRAINT fk_biblioteca_user_bib FOREIGN KEY(id_biblioteca) REFERENCES biblioteca(id_biblioteca) ON DELETE CASCADE ON UPDATE RESTRICT,
    CONSTRAINT fk_biblioteca_user_val FOREIGN KEY(id_valoracion) REFERENCES valoracion(id_valoracion) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE foro(
	id_foro INT NOT NULL PRIMARY KEY,
    titulo_foro VARCHAR(30),
    desc_foro VARCHAR(100),
    tematica_foro VARCHAR(30),
    fecha_creacion DATE NOT NULL,
    id_user INT NOT NULL,
    CONSTRAINT fk_user_foro FOREIGN KEY (id_user) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE entrada(
	id_entrada INT NOT NULL PRIMARY KEY,
    titulo_entrada VARCHAR(20) NOT NULL,
    descripcion_entrada VARCHAR(100) NOT NULL,
    likes INT,
    fecha_creacion DATE NOT NULL,
    id_user INT NOT NULL,
    id_foro INT NOT NULL,
    CONSTRAINT fk_user_entrada FOREIGN KEY (id_user) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE RESTRICT,
    CONSTRAINT fk_foro_entrada FOREIGN KEY (id_foro) REFERENCES foro(id_foro) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE respuesta(
	id_respuesta INT NOT NULL PRIMARY KEY,
    descripcion_respuesta VARCHAR(100),
    likes INT,
    fecha_creacion DATE NOT NULL,
    id_entrada INT NOT NULL,
    id_user INT NOT NULL,
    CONSTRAINT fk_user_respuesta FOREIGN KEY (id_user) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE RESTRICT,
    CONSTRAINT fk_entrada_respuesta FOREIGN KEY (id_entrada) REFERENCES entrada(id_entrada) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE soporte(
	id_soporte INT NOT NULL PRIMARY KEY,
    problema VARCHAR(20) NOT NULL,
    descripcion_problema VARCHAR(100),
    solucion VARCHAR(200) NOT NULL,
    id_user INT NOT NULL,
    CONSTRAINT fk_user_soporte FOREIGN KEY (id_user) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE RESTRICT
);

SELECT * FROM usuario;
SELECT * FROM autor;
SELECT * FROM libro;
INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (1, "admin", null, 'admin@admin.com', "$2y$10$4.ENmj/Yy0MzxBWGXSZE/em1u7hTrfVPrlUyvE48wviw3KQhMziV.", null, null, null, "admin");

INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (2, "Alejandro", "Torres", 'alejandro@gmail.com', "$2y$10$SBQBu0V8Ip.lh7DBYD8Jv.tdIJlEwHkOZ8P8L0nVvK2y5cytYSple", "1997-09-16", null, null, "cliente");
INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (3, "Oriol", "Romagosa", 'oriol@gmail.com', "$2y$10$XEyXUP7J/bd8eYLPMHcRRO/3HAnL7HpEBXoi/X3M3Or51S3bL8ePa", "2001-02-19", null, null, "cliente");
INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (4, "Clarence", "Palad", 'clarence@gmail.com', "$2y$10$1v9LAMkExTjhwP7m3fCbquKFsTlWtI/OqyELcbQcxAYEr90Em54Ta", "2003-09-25", null, null, "cliente");
INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (5, "Adri", "Leon", 'adri@gmail.com', "$2y$10$NlZPWgOTmba2bIhhbIdTjeOfMvruiGx4n4dm4Q/dlObJdYmsJbj82", "2003-07-24", null, null, "cliente");

/*DELETE FROM usuario WHERE id_user = 1;
UPDATE usuario
SET rol = "cliente"
WHERE id_user = 2;*/