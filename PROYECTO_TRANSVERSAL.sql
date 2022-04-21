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
	id_libro INT NOT NULL PRIMARY KEY,
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
    passwd VARCHAR(20),
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
INSERT INTO usuario (id_user, nombre_user, apellidos, email, passwd, fech_nac, id_trofeo, id_libro, rol)
VALUES (0, "admin", null, 'admin@admin.com', "Admin123.", null, null, null, "admin");