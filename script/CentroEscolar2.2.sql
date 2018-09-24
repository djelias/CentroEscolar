/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 10                       */
/* Created on:     11/09/2018 12:32:35 a.m.                     */
/*==============================================================*/

drop table if exists ASIGNACION_ALUMNO;

drop table if exists ASIGNACION;

drop table if exists ASIGNACION_GRADO_MATERIA;

drop table if exists DOCENTES;

drop table if exists ROL_USUARIO;

drop table if exists PERMISO_ROL;

drop table if exists EVALUACION;

drop table if exists ALUMNOS;

drop table if exists GRADOS;

drop table if exists PERMISOS;

drop table if exists ROLES;

drop table if exists USERS;

drop table if exists MATERIAS;

drop table if exists NOTA;


/*==============================================================*/
/* Table: ALUMNOS                                               */
/*==============================================================*/
create table ALUMNOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombres              varchar(150)                   not null,
   apellidos            varchar(150)                   not null,
   no_nie               int                            not null UNIQUE,
   f_nacimiento         date                           not null,
   edad                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ALUMNO primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION                                            */
/*==============================================================*/
create table ASIGNACION 
(
   id                   int                            not null AUTO_INCREMENT,
   id_docente           int                            null,
   id_grado             int                            null,
   anio                 int                            not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_ALUMNO                                     */
/*==============================================================*/
create table ASIGNACION_ALUMNO 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion        int                            null,
   id_alumno            int                            null,
   id_nota              int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_ALUMNO primary key (id)
);

/*==============================================================*/
/* Table: DOCENTES                                              */
/*==============================================================*/
create table DOCENTES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_usuario           int                            null,
   no_escalafon         numeric                        not null UNIQUE,
   no_dui               char(10)                       not null UNIQUE,
   telefono             char(8)                        not null,
   direccion            varchar(150)                   not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_DOCENTE primary key (id)
);

/*==============================================================*/
/* Table: EVALUACION                                            */
/*==============================================================*/
create table EVALUACION 
(
   ID                   int                            not null AUTO_INCREMENT,
   id_materia           int                            null,
   id_nota              int                            null,
   nota1                float                          not null,
   nota2                float                          not null,
   nota3                float                          not null,
   promedio             float                          not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_EVALUACION primary key (id)
);

/*==============================================================*/
/* Table: GRADOS                                                */
/*==============================================================*/
create table GRADOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(20)                    not null,
   seccion              char(8)                        not null,
   capacidad            int                           not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_GRADO primary key (id)
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(150)                   not null UNIQUE,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_MATERIA primary key (id)
);

/*==============================================================*/
/* Table: NOTA                                                  */
/*==============================================================*/
create table NOTA 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asig_al           int                            null,
   puntuacion           float                          not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_NOTA primary key (id)
);

/*==============================================================*/
/* Table: PERMISOS                                              */
/*==============================================================*/
create table PERMISOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(150)                   not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_PERMISOS primary key (id)
);

/*==============================================================*/
/* Table: PERMISO_ROL                                           */
/*==============================================================*/
create table PERMISO_ROL 
(
   id                   integer                        not null AUTO_INCREMENT,
   id_permisos          integer                        null,
   id_rol               integer                        null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_PERMISO_ROL primary key (id)
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre_rol           varchar(50)                    not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ROLES primary key (id)
);

/*==============================================================*/
/* Table: ROL_USUARIO                                           */
/*==============================================================*/
create table ROL_USUARIO 
(
   id                   int                            not null AUTO_INCREMENT,
   id_rol               int                            null,
   id_usuario           int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ROL_USUARIO primary key (id)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS 
(
   id                   int                            not null AUTO_INCREMENT,
   usuario              char(255)                      not null UNIQUE,
   name                 varchar(150)                   not null,
   password             varchar(191)                   not null,
   email                varchar(30)                    not null,
   remember_token	varchar(100),
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_USUARIO primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_GRADO_MATERIA                                     */
/*==============================================================*/
create table ASIGNACION_GRADOS_MATERIAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_grado             int                            null,
   id_materia           int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_GRADO_MATERIA primary key (id)
);

alter table DOCENTES add foreign key (id_usuario) references USERS (id);

alter table EVALUACION add foreign key (id_materia) references MATERIAS (id);

alter table EVALUACION add foreign key (id_nota) references NOTA (id);

alter table NOTA add foreign key (id_asig_al) references ASIGNACION_ALUMNO (id);

alter table PERMISO_ROL add foreign key (id_permisos) references PERMISOS (id);

alter table PERMISO_ROL add foreign key (id_rol) references ROLES (id);

alter table ROL_USUARIO add foreign key (id_usuario) references USERS (id);

alter table ROL_USUARIO add foreign key (id_rol) references ROLES (id);

alter table ASIGNACION add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACION add foreign key (id_docente) references DOCENTES (id);

alter table ASIGNACION_ALUMNO add foreign key (id_nota) references NOTA (id);

alter table ASIGNACION_ALUMNO add foreign key (id_asignacion) references ASIGNACION (id);

alter table ASIGNACION_ALUMNO add foreign key (id_alumno) references ALUMNOS (id);

alter table ASIGNACION_GRADOS_MATERIAS add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACION_GRADOS_MATERIAS add foreign key (id_materia) references MATERIAS (id);

alter table GRADOS add constraint GRADO_UNICO unique (nombre, seccion);

