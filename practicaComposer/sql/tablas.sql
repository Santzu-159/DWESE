create table fechas(
    id int unsigned auto_increment primary key,
    nombre varchar(80) not null,
    fNacimiento varchar (50)
);

insert into fechas(nombre, fNacimiento) values('Carmen', '1945/02/12');
insert into fechas(nombre, fNacimiento) values('Antonio', '2003/07/21');
insert into fechas(nombre, fNacimiento) values('Miguel', '1996/12/12');
insert into fechas(nombre, fNacimiento) values('Encarnita', '2014/03/24');
