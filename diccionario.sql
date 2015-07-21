drop table if exists sedes;
drop table if exists instituciones;
drop table if exists profesionales;

create table instituciones
(
	id varchar (10) primary key,
	name varchar (40)
);

create table sedes 
(
	id varchar(20) primary key,
	instituciones_id varchar (10),
	name varchar (20),
	CONSTRAINT fk_inst FOREIGN KEY (instituciones_id) references instituciones(id)
);

create table profesionales 
(
	id varchar(20) primary key,
	nombre varchar (40)
);

insert into instituciones values 	
('1', 'valle del cauca'),
('2', 'cauca');

insert into sedes values
('1','1','cali'),
('2','1','buga'),
('3','1','palmira'),
('4','1','jamundi'),
('5','2','popayan'),
('6','2','morales');

insert into profesionales values 
('1','fernando sanchez'),
('2','name');

