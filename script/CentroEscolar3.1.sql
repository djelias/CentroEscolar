/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 10                       */
/* Created on:     11/09/2018 12:32:35 a.m.                     */
/*==============================================================*/

drop table if exists ASIGNACION_ALUMNOS_GRADOS;

drop table if exists ASIGNACION_MATERIAS_GRADOS;

drop table if exists ASIGNACIONES;

drop table if exists ASIGNACION_GRADO_MATERIA;

drop table if exists DOCENTES;

drop table if exists ROL_USUARIO;

drop table if exists PERMISO_ROL;

drop table if exists ALUMNOS;

drop table if exists GRADOS;

drop table if exists PERMISOS;

drop table if exists ROLES;

drop table if exists USERS;

drop table if exists MATERIAS;

drop table if exists EXAMENES;

drop table if exists ASISTENCIAS;

drop table if exists REPORTES;

drop table if exists PROMEDIO_FINAL;

/*==============================================================*/
/* Table: ALUMNOS                                               */
/*==============================================================*/
create table ALUMNOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(150)                   not null,
   no_nie               int                            not null UNIQUE,
   f_nacimiento         date                           not null,
   edad                 int                            null,
   direccion            varchar(150)                   not null,
   telefono             char(8)                        not null,
   repite_grado         boolean                        not null,
   estudio_parvularia   boolean                        not null,
   enfermedades         varchar(150)                   null,
   nombre_madre         varchar(150)                   not null,
   dui_madre            char(10)                       not null,
   ocupacion_madre      varchar(150)                   not null,
   telefono_madre       char(8)                        not null,
   nombre_padre         varchar(150)                   not null,
   dui_padre            char(10)                       not null,
   ocupacion_padre      varchar(150)                   not null,
   telefono_padre       char(8)                        not null,
   vive_con             varchar(150)                   not null,
   carta_compromiso     boolean                        not null,
   conducta             boolean                        not null,
   rendimiento          boolean                        not null,
   nuevo_ingreso        boolean                        null,
   escuela_proviene     varchar(150)                   null,
   municipio            varchar(150)                   null,
   observaciones        varchar(150)                   null,
   quien_inscribe       varchar(150)                   not null,
   estado               boolean                        not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ALUMNO primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACIONES                                          */
/*==============================================================*/
create table ASIGNACIONES 
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
/* Table: ASIGNACION_ALUMNOS_GRADOS                             */
/*==============================================================*/
create table ASIGNACION_ALUMNOS_GRADOS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_alumno            int                            null,
   id_grado             int                            null,
   anio                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_ALUMNOS_GRADOS primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_MATERIAS_GRADOS                             */
/*==============================================================*/
create table ASIGNACION_MATERIAS_GRADOS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_materia           int                            null,
   id_grado             int                            null,
   anio                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_MATERIAS_GRADOS primary key (id)
);

/*==============================================================*/
/* Table: DOCENTES                                              */
/*==============================================================*/
create table DOCENTES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_usuario           int                            not null,
   no_escalafon         numeric                        not null UNIQUE,
   no_dui               char(10)                       not null,
   telefono             char(8)                        not null,
   direccion            varchar(150)                   not null,
   estado               boolean                        null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_DOCENTE primary key (id)
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
   usuario              char(255)                      not null ,
   name                 varchar(150)                   not null,
   password             varchar(191)                   not null,
   email                varchar(30)                    not null,
   remember_token	      varchar(100),
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_USUARIO primary key (id)
);


/*==============================================================*/
/* Table: EXAMENES                                               */
/*==============================================================*/
create table EXAMENES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_al_gr  int                            null,
   id_materia           int                            null,
   examen1              float                          null,
   examen2              float                          null,
   examen3              float                          null,
   actividad1           float                          null,
   actividad2           float                          null,
   trimestre            int                            null,
   promedio             float                          null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_EXAMENES primary key (id)
);


/*==============================================================*/
/* Table:   EVENTOS                                             */
/*==============================================================*/
create table EVENTOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(30)                    not null,
   fecha                date                           not null,
   hora                 time                           not null,
   descripcion          varchar(150)                   not null,
   lugar                varchar(30)                    not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_EVENTOS primary key (id)
);


/*==============================================================*/
/* Table:   ASISTENCIAS                                         */
/*==============================================================*/
create table ASISTENCIAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignaciones      int                            null,
   id_asig_alum_gr      int                            null,
   estado               varchar(50)                    default 'Asistio',
   fecha                date                           not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASISTENCIAS primary key (id)
);


/*==============================================================*/
/* Table:   REPORTES                                            */
/*==============================================================*/
create table REPORTES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignaciones      int                            null,
   id_asignacionAlumnosGrados      int                            null,
   id_asignacionMateriasGrados     int                            null,
   fecha                date                           null,
   estado               boolean                        null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_REPORTES primary key (id)
);


/*==============================================================*/
/* Table:   PROMEDIO_FINAL                                            */
/*==============================================================*/
create table PROMEDIO_FINAL 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignaciones      int                            null,
   id_asignacionAlumnosGrados      int                            null,
   id_asignacionMateriasGrados     int                            null,
   id_examenes          int                            null,
   promedio             float                          null,
   anio                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_REPORTES primary key (id)
);

alter table DOCENTES add foreign key (id_usuario) references USERS (id);

alter table EXAMENES add foreign key (id_asignacion_al_gr) references ASIGNACION_ALUMNOS_GRADOS (id);

alter table PERMISO_ROL add foreign key (id_permisos) references PERMISOS (id);

alter table PERMISO_ROL add foreign key (id_rol) references ROLES (id);

alter table ROL_USUARIO add foreign key (id_usuario) references USERS (id);

alter table ROL_USUARIO add foreign key (id_rol) references ROLES (id);

alter table ASIGNACIONES add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACIONES add foreign key (id_docente) references DOCENTES (id);

alter table ASIGNACION_ALUMNOS_GRADOS add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACION_ALUMNOS_GRADOS add foreign key (id_alumno) references ALUMNOS (id);

alter table ASIGNACION_MATERIAS_GRADOS add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACION_MATERIAS_GRADOS add foreign key (id_materia) references MATERIAS (id);

alter table ASISTENCIAS add foreign key (id_asignaciones) references ASIGNACIONES (id);

alter table ASISTENCIAS add foreign key (id_asig_alum_gr) references ASIGNACION_ALUMNOS_GRADOS (id);

alter table REPORTES add foreign key (id_asignaciones) references ASIGNACIONES (id);

alter table REPORTES add foreign key (id_asignacionAlumnosGrados) references ASIGNACION_ALUMNOS_GRADOS (id);

alter table REPORTES add foreign key (id_asignacionMateriasGrados) references ASIGNACION_MATERIAS_GRADOS (id);

alter table GRADOS add constraint GRADO_UNICO unique (nombre, seccion);

alter table ASIGNACIONES add constraint GRADO_DOCENTE_UNICO unique (id_grado, id_docente);

alter table ASIGNACION_ALUMNOS_GRADOS add constraint ALUMNO_GRADO_UNICO unique (id_grado, id_alumno);

INSERT INTO `users` (`id`, `usuario`, `name`, `password`, `email`) VALUES
(1, 'Administrador', 'Directora', '$2y$10$Z1wsG.S9f/k4DQKiuqp/d.i9KaDghoHqxAVw0fDw7KyQEh0fLzRoa', 'directora@gmail.com');