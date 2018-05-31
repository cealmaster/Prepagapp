/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     29/03/2018 8:43:05 p.m.                      */
/*==============================================================*/


drop table if exists AUTO;

drop table if exists CARACTERISTICAS;

drop table if exists CHOFER;

drop table if exists CLIENTE;

drop table if exists FOTOS;

drop table if exists JUGUETES;

drop table if exists JUGUETESENPEDIDO;

drop table if exists PEDIDO;

drop table if exists PUTA;

drop table if exists PUTACARACTERISTICAS;

drop table if exists PUTAPEDIDO;

drop table if exists PUTASERVICIOS;

drop table if exists SERVICIOS;

/*==============================================================*/
/* Table: AUTO                                                  */
/*==============================================================*/
create table AUTO
(
   PLACA                varchar(8) not null,
   IDCHOFER             int,
   NOMBREAUTO           varchar(10) not null,
   primary key (PLACA)
);

/*==============================================================*/
/* Table: CARACTERISTICAS                                       */
/*==============================================================*/
create table CARACTERISTICAS
(
   IDCARACTERISTICA     int not null auto_increment,
   NOMBRECARACTERISTICA varchar(20) not null,
   primary key (IDCARACTERISTICA)
);

alter table CARACTERISTICAS comment 'ejemplo // grandes tetas, morena, 18 años, etc...
';

/*==============================================================*/
/* Table: CHOFER                                                */
/*==============================================================*/
create table CHOFER
(
   IDCHOFER             int not null auto_increment,
   NOMBRECHOFER         varchar(30) not null,
   primary key (IDCHOFER)
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTE
(
   IDCLIENTE            int not null auto_increment,
   NOMBRECLIENTE        varchar(70),
   CORREOCLIENTE        varchar(40) not null,
   TELEFONOCLIENTE      int not null,
   NICKNAMECLIENTE      varchar(15) not null,
   CONTRASENACLIENTE    varchar(70) not null,
   primary key (IDCLIENTE)
);

/*==============================================================*/
/* Table: FOTOS                                                 */
/*==============================================================*/
create table FOTOS
(
   IDFOTO               int not null auto_increment,
   IDPUTA               int,
   LINKFOTO             varchar(30) not null,
   DESCRIPCIONFOTO      text,
   primary key (IDFOTO)
);

/*==============================================================*/
/* Table: JUGUETES                                              */
/*==============================================================*/
create table JUGUETES
(
   IDJUGUETE            int not null auto_increment,
   NOMBREJUGUETE        varchar(40) not null,
   PRECIOJUGUETE        int not null,
   UNIDADESDISPONIBLES  int,
   primary key (IDJUGUETE)
);

/*==============================================================*/
/* Table: JUGUETESENPEDIDO                                      */
/*==============================================================*/
create table JUGUETESENPEDIDO
(
   IDJUGUETE            int not null,
   IDPEDIDO             int not null,
   primary key (IDJUGUETE, IDPEDIDO)
);

/*==============================================================*/
/* Table: PEDIDO                                                */
/*==============================================================*/
create table PEDIDO
(
   IDPEDIDO             int not null auto_increment,
   IDCLIENTE            int,
   IDCHOFER             int,
   FECHAPEDIDO          date not null,
   TOTALHORAS           int,
   DIRECCION            varchar(100) not null,
   primary key (IDPEDIDO)
);

/*==============================================================*/
/* Table: PUTA                                                  */
/*==============================================================*/
create table PUTA
(
   IDPUTA               int not null auto_increment,
   NOMBREPUTA           varchar(60) not null,
   DESCRIPCION          text,
   LINKFOTOPERFIL       varchar(40) not null,
   MEDIDAS              varchar(20),
   CORREOPUTA           varchar(30),
   PRECIOHORA           int not null,
   TELEFONOPUTA         int not null,
   NICKNAMEPUTA         varchar(15) not null,
   CONTRASENAPUTA       varchar(70) not null,
   VIDEOPUTA            varchar(100),
   PRIORIDAD            int,
   primary key (IDPUTA)
);

/*==============================================================*/
/* Table: PUTACARACTERISTICAS                                   */
/*==============================================================*/
create table PUTACARACTERISTICAS
(
   IDPUTA               int not null,
   IDCARACTERISTICA     int not null,
   primary key (IDPUTA, IDCARACTERISTICA)
);

/*==============================================================*/
/* Table: PUTAPEDIDO                                            */
/*==============================================================*/
create table PUTAPEDIDO
(
   IDPUTA               int not null,
   IDPEDIDO             int not null,
   primary key (IDPUTA, IDPEDIDO)
);

/*==============================================================*/
/* Table: PUTASERVICIOS                                         */
/*==============================================================*/
create table PUTASERVICIOS
(
   IDPUTA               int not null,
   IDSERVICIO           int not null,
   primary key (IDPUTA, IDSERVICIO)
);

/*==============================================================*/
/* Table: SERVICIOS                                             */
/*==============================================================*/
create table SERVICIOS
(
   IDSERVICIO           int not null auto_increment,
   NOMBRESERVICIO       varchar(20) not null,
   primary key (IDSERVICIO)
);

alter table AUTO add constraint FK_CHOFERAUTO foreign key (IDCHOFER)
      references CHOFER (IDCHOFER) on delete restrict on update restrict;

alter table FOTOS add constraint FK_PUTAFOTOS foreign key (IDPUTA)
      references PUTA (IDPUTA) on delete restrict on update restrict;

alter table JUGUETESENPEDIDO add constraint FK_JUGUETESENPEDIDO foreign key (IDJUGUETE)
      references JUGUETES (IDJUGUETE) on delete restrict on update restrict;

alter table JUGUETESENPEDIDO add constraint FK_JUGUETESENPEDIDO2 foreign key (IDPEDIDO)
      references PEDIDO (IDPEDIDO) on delete restrict on update restrict;

alter table PEDIDO add constraint FK_CLIENTEPEDIDO foreign key (IDCLIENTE)
      references CLIENTE (IDCLIENTE) on delete restrict on update restrict;

alter table PEDIDO add constraint FK_PEDIDOCHOFER foreign key (IDCHOFER)
      references CHOFER (IDCHOFER) on delete restrict on update restrict;

alter table PUTACARACTERISTICAS add constraint FK_PUTACARACTERISTICAS foreign key (IDPUTA)
      references PUTA (IDPUTA) on delete restrict on update restrict;

alter table PUTACARACTERISTICAS add constraint FK_PUTACARACTERISTICAS2 foreign key (IDCARACTERISTICA)
      references CARACTERISTICAS (IDCARACTERISTICA) on delete restrict on update restrict;

alter table PUTAPEDIDO add constraint FK_PUTAPEDIDO foreign key (IDPUTA)
      references PUTA (IDPUTA) on delete restrict on update restrict;

alter table PUTAPEDIDO add constraint FK_PUTAPEDIDO2 foreign key (IDPEDIDO)
      references PEDIDO (IDPEDIDO) on delete restrict on update restrict;

alter table PUTASERVICIOS add constraint FK_PUTASERVICIOS foreign key (IDPUTA)
      references PUTA (IDPUTA) on delete restrict on update restrict;

alter table PUTASERVICIOS add constraint FK_PUTASERVICIOS2 foreign key (IDSERVICIO)
      references SERVICIOS (IDSERVICIO) on delete restrict on update restrict;

