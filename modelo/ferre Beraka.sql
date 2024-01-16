create database ferreteria_beraka;

use ferreteria_beraka;

CREATE TABLE Usuario(
Usua_codigo int primary key,
Usua_nombre varchar (32),
Usua_clave varchar (32),
Usua_Tipo varchar (15)
);

select * from Usuario;

insert into Usuario values (1,'Juli','123','cliente');
insert into Usuario values (2,'Mariana','32145','admin');
insert into Usuario values (3,'Sofia','1808','cliente');
insert into Usuario values (4,'Marcela','2050','cliente');
insert into Usuario values (5,'Marcos','205','admin');

-- insetar
insert into Usuario values (20,'mateo','123','administrador');

-- Actualizar
update Usuario set Usua_nombre='carlos' where Usua_codigo=2;

-- Eliminar--
delete from Usuario where Usua_codigo =5;

create view v_tipo_usua as
select  Usua_codigo, Usua_nombre,Usua_Tipo from Usuario;

select * from v_tipo_usua;

---- Procedimientos Almacenados ---


delimiter //
create procedure UsuarioConsulta()
begin
select  *from usuario;
end //
delimiter ;

call UsuarioConsulta;


delimiter //
create procedure UsuarioConsultaCodigo(in Usua_codigo int, Usua_nombre varchar(32),Usua_Tipo varchar (15))
begin
select  Usua_nombre, Usua_Tipo from usuario;
end //
delimiter ;

call  UsuarioConsultaCodigo ;



create table Administrador(
admi_codigo int primary key auto_increment,
admi_identificacion varchar (20),
admi_tipoIdentificacion varchar(15),
admi_nombre varchar (50),
admi_apellido varchar (50),
admi_celular varchar (50),
admi_direccion varchar(50),
usua_codigo_fk int,
foreign key (usua_codigo_fk)references Usuario(Usua_codigo)
);

select * from Administrador;

insert into Administrador values (1,45565656,'TI','Juli','corsega','3554415445','calle 45-43',1);
insert into Administrador values (2,45455651,'TI','Mariana','fonseca','3554415445','calle 45-43',2);
insert into Administrador values (3,12205201,'TI','Sofia','lopez','3554415445','calle 45-43',3);
insert into Administrador values (4,45584777,'TI','Marcela','ocho','3554415445','calle 45-43',4);

create view v_Admin_tipo as
select  admi_codigo, admi_identificacion,admi_tipoIdentificacion,admi_nombre from Administrador;

select * from  v_Admin_tipo;
select admi_codigo, admi_tipoIdentificacion, admi_nombre from Administrador as A inner join Usuario as U on  A.admi_codigo > U.Usua_codigo;
select admi_nombre, admi_apellido from Administrador as A left join Usuario as U on  A.admi_codigo = U.Usua_codigo;
select admi_direccion, usua_codigo_fk from Administrador as A right join Usuario as U on  A.admi_codigo = U.Usua_codigo;

create table Cliente(
clie_codigo int primary key auto_increment,
clie_identificacion varchar (20),
clie_tipoIdentificacion varchar(15),
clie_nombre varchar (50),
clie_telefono varchar (15),
clie_direccion varchar(50),
clie_telefono2 varchar(15),
clie_correo varchar (50),
usua_codigo_fk int,
foreign key (usua_codigo_fk)references Usuario(Usua_codigo)

);

create table Producto(
prod_codigo int primary key auto_increment,
prod_nombre varchar(50),
prod_precioVenta float,
prod_unidadMedia varchar (25),
prod_stock float,
pro_descripcion text
);

create table Venta (
vent_codigo int primary key auto_increment,
venta_fecha date,
vent_cantidad int,
vent_total bigint,
clie_codigo_fk int,
admi_codigo_fk int,
foreign key (clie_codigo_fk) references Cliente(clie_codigo),
foreign key (admi_codigo_fk)references Administrador(admi_codigo)
);



create table Detalle_Venta(
deve_codigo int primary key auto_increment,
vent_codigo_fk int,
prod_codigo_fk int,
deve_subtotal float,
deve_cantidadporproducto float,
foreign key (prod_codigo_fk)references Producto(prod_codigo),
foreign key (vent_codigo_fk )references Venta(vent_codigo)
);




