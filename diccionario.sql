drop table if exists sedes;
drop table if exists instituciones;
drop table if exists profesionales;

create table instituciones
(
	id varchar (10) primary key,
	name varchar (60)
);

create table sedes 
(
	id varchar(20) primary key,
	instituciones_id varchar (10),
	name varchar (60),
	CONSTRAINT fk_inst FOREIGN KEY (instituciones_id) references instituciones(id)
);

create table profesionales 
(
	id varchar(20) primary key,
	nombre varchar (50)
);

insert into instituciones values 	
('01', 'Santa Ana de los Caballeros'),
('02', 'Primavera'),
('03', 'Las Américas'),
('04', 'Instituto Agrícola El Ceilán'),
('05', 'Santa Teresita del Niño Jesús'),
('06', 'Simón Bolívar'),
('07', 'Jorge Isaacs "El Placer"'),
('08', 'Ciudad Florida'),
('09', 'ENS Miguel de Cervantes Saavedra'),
('10', 'Francisco de Paula Santander'),
('11', 'Ateneo'),
('12', 'José Félix Restrepo'),
('13', 'Hernando Llorente'),
('14', 'Santa Rosa de Palermo'),
('15', 'Manuel Maria Mallarino'),
('16', 'Alfonso Zadawzky'),
('17', 'Manuel Maria Sanchez'),
('18', 'ENS Nuestra Señora de las Mercedes'),
('19', 'Agricola Campoalegre'),
('20', 'La Consolita'),
('21', 'Heraclio Uribe Uribe'),
('22', 'José Antonio Aguilera'),
('23', 'Nuestra Señora de la Candelaria'),
('24', 'Antonio José de Sucre'),
('25', 'Inmaculada Concepción'),
('26', 'Técnica Agropecuaria'),
('27', 'San José'),
('28', 'Juan Salvador Gaviota'),
('29', 'Argemiro Escobar Cardona'),
('30', 'Justiniano Echavarria'),
('31', 'Arturo Gomez Jaramillo'),
('32', 'Leocadio Salazar'),
('33', 'Gilberto Alzate Avendaño'),
('34', 'Maria Analia Ortiz Hormaza'),
('35', 'La Inmaculada'),
('36', 'Santiago G. Angel'),
('37', 'Otras Instituciones Educativas');



insert into sedes values
('01sp','01','Santa Ana de los Caballeros'),
('01s1','01','Santa María'),
('01s2','01','Santa Cecilia'),
('01s3','01','Antonio José de Sucre'),
('01s4','01','Antonio Ricaurte'),
('01s5','01','Laureano Gómez'),
('01s6','01','María Inmaculada'),
('01s7','01','Marco Fidel Suarez'),
('01s8','01','Maria Montessori'),
('01s9','01','Marino Orozco'),
('01s10','01','Pio XII'),


('02sp','02','Concentración Agrícola Oscar Jaramillo'),
('02s1','02','María Auxiliadora'),
('02s2','02','Santo Tomas de Aquino'),
('02s3','02','Atanasio Girardot'),
('02s4','02','Policarpa salavarrieta'),
('02s5','02','Luis Lorza'),

('03sp','03','Las Américas'),
('03s1','03','Carlos Holmes'),
('03s2','03','La Dignidad'),


('04sp','04','Instituto Agrícola El Ceilán'),
('04s1','04','Simón Bolívar'),
('04s2','04','Policarpa'),
('04s3','04','José Asunción Silva'),
('04s4','04','Virgen la Milagrosa'),
('04s5','04','José Joaquín Casas'),
('04s6','04','José Acevedo y Gómez'),
('04s7','04','Virgen del Carmen'),
('04s8','04','Divino Niño'),
('04s9','04','Alfonso López Pumarejo'),
('04s10','04','Alto Bonito'),


('05sp','05','Central'),
('05s1','05','Bahondo'),
('05s2','05','Nuestra Señora de Fatima'),
('05s3','05','Clorinda'),
('05s4','05','Alto de las Tortolas'),

('06sp','06','Simón Bolívar'),
('06s1','06','Erasmo Vivas'),
('06s2','06','San José'),
('06s3','06','Nta Sra. de Fátima'),
('06s4','06','Policarpa Salavarrieta'),
('06s5','06','Remolino'),
('06s6','06','Pio XII'),
('06s7','06','La Playa'),
('06s8','06','Llanitos'),

('07sp','07','Jorge Isaacs'),
('07s1','07','Francisco de Paula Santander'),

('08sp','08','Liceo'),
('08s1','08','Policarpa Salavarrieta'),
('08s2','08','Antonio Isaza'),

('09sp','09','ENS Miguel de Cervantes Saavedra'),
('09s1','09','Antonia Santos'),
('09s2','09','Saavedra Galindo'),
('09s3','09','Jardín Infantil Niño Jesús de Praga'),
('09s4','09','San Antonio de Guacas'),


('10sp','10','Francisco de Paula Santander'),
('10s1','10','Manuela Beltrán'),
('10s2','10','Camilo Torres'),
('10s3','10','Policarpa Salavarrieta'),
('10s4','10','Eduardo Santos'),

('11sp','11','Ateneo'),
('11s1','11','Benjamín Valencia'),
('11s2','11','Nidia Navarrete'),

('12s1','12','Concentración Escolar Urbana'),
('12s2','12','Gran Colombia'),
('12s3','12','Policarpa Salavarrieta'),
('12s4','12','La Independencia'),
('12s5','12','Manuela Beltrán'),


('13sp','13','Hernando Llorente'),
('13s1','13','José Antonio Anzoátegui'),
('13s2','13','José María Córdoba'),
('13s3','13','Juan XXIII'),
('13s4','13','Manuela Beltrán'),
('13s5','13','Mercedes Abrego'),
('13s6','13','San Vicente Ferrer'),
('13s7','13','Sto. Tomas de Aquino'),

('14sp','14','Belisario Peña'),
('14s1','14','Santa Rita'),
('14s2','14','Josefita Peña'),


('15sp','15','Manuel Maria Mallarino'),
('15s1','15','Elías Quijano'),

('16s1','16','Policarpa Salavarrieta'),
('16s2','16','Antonia Santos'),
('16s3','16','Jorge Eliecer Gaitan'),

('17sp','17','Manuel Maria Sanchez'),
('17s1','17','Las Americas'),
('17s2','17','Puerto Isaac'),

('18sp','18','Nta. Sra. de las Mercedes'),
('18s1','18','Escuela Francisco de Paula Santander'),
('18s2','18','Las Mercedes'),

('19sp','19','Las Mercedes'),
('19s1','19','José Antonio Anzoátegui'),
('19s2','19','José María Córdoba'),
('19s3','19','Vicente H. Cruz'),
('19s4','19','Primitivo Crespo'),
('19s5','19','San Francisco'),
('19s6','19','Santa Matilde'),
('19s7','19','Marco Fidel Suarez'),
('19s8','19','Custodio García Rovira'),
('19s9','19','Antonio José de Sucre'),
('19s10','19','Juan José Rondón'),

('20sp','20','La Consolita'),
('20s1','20','Celio Baena '),
('20s2','20','La Bolivia'),
('20s3','20','Jorge Eliécer Gaitán'),
('20s4','20','La Pola'),
('20s5','20','Nuestra Señora del Perpetuo Socorro'),
('20s6','20','San Luis'),

('21sp','21','Heraclio Uribe Uribe'),
('21s1','21','Altomira'),
('21s2','21','Arturo Piedrahita'),
('21s3','21','Concentración Rural Agric Heraclio Uribe Uribe'),
('21s4','21','El Recreo'),
('21s5','21','Fray Bartolome de las Casas'),
('21s6','21','Joaquin Caicedo'),
('21s7','21','La María'),
('21s8','21','Santa Inés'),

('22sp','22','José Antonio Aguilera'),
('22s1','22','Policarpa Salavarrieta'),
('22s2','22','Alejandro Henao'),
('22s3','22','Rafael Alberto Marmolejo'),
('22s4','22','Leonardo Tascon'),
('22s5','22','Camilo Torres'),
('22s6','22','Rafael Uribe Uribe'),
('22s7','22','Niño Jesús de praga'),

('23sp','23','Nuestra Señora de la Candelaria'),
('23s1','23','Santo Domingo Savio'),
('23s2','23','Antonio Nariño'),
('23s3','23','Germán Nieto'),
('23s4','23','Sagrada Familia'),
('23s5','23','Alfonso Lopez Pumarejo'),
('23s6','23','General Santander'),

('24sp','24','Antonio José de Sucre'),
('24s1','24','Antonio Nariño'),
('24s2','24','La Pedrera'),
('24s3','24','Atanasio Girardot'),
('24s4','24','Mariano Ospina Pérez'),

('25sp','25','Inmaculada Concepción'),
('25s1','25','Antonia Santos'),
('25s2','25','Sagrado corazón'),

('26sp','26','Técnica Agropecuaria'),
('26s1','26','Instituto Agricola'),

('27sp','27','San José'),
('27s1','27','Antonio Nariño'),
('27s2','27','San José'),
('27s3','27','Concentración de Desarrollo Rural'),

('28sp','28','Juan Salvador Gaviota'),
('28s1','28','Alberto Fresneda'),
('28s2','28','Antonia Santos'),
('28s3','28','Atanasio Girardot'),
('28s4','28','Eustaquio Palacios'),
('28s5','28','General Rengifo'),
('28s6','28','Jorge Robledo'),
('28s7','28','Juan Antonio Pereira'),
('28s8','28','Juan Salvador Gaviota'),
('28s9','28','Luis Zuluaga'),
('28s10','28','Mercedes Abrego'),
('28s11','28','Rómulo Rengifo'),
('28s12','28','Rosa Sarate De Peña'),
('28s13','28','Sagrado Corazón De Jesús'),
('28s14','28','San Isidro'),
('28s15','28','San Jorge'),
('28s16','28','San Juan Bosco'),
('28s17','28','San Martín De Porres'),
('28s18','28','San Pablo'),
('28s19','28','Simón Bolívar'),

('29sp','29','Argemiro Escobar Cardona'),
('29s1','29','Antonio Nariño'),
('29s2','29','Edelmira Ramírez'),
('29s3','29','Simón Bolívar'),
('29s4','29','José Eusebio Caro'),
('29s5','29','Central'),
('29s6','29','San Martín De Porres'),

('30sp','30','Justiniano Echavarria'),
('30s1','30','Marco Fidel Suarez'),
('30s2','30','Mercedes Abrego'),
('30s3','30','San Cayetano'),
('30s4','30','Quenier Giraldo'),
('30s5','30','Sebastián De Belalcazar'),
('30s6','30','Ricardo Nieto'),
('30s7','30','Francisco De Paula Santander'),
('30s8','30','Atanasio Girardot'),
('30s9','30','Pablo Vi'),
('30s10','30','Gabriela Mistral'),
('30s11','30','Jorge Robledo'),
('30s12','30','Dolores López De Giraldo'),
('30s13','30','Santa Isabel'),
('30s14','30','José María Córdoba'),

('31sp','31','Arturo Gomez Jaramillo'),

('32sp','32','Leocadio Salazar'),

('33sp','33','Gilberto Alzate Avendaño'),

('34sp','34','Maria Analia Ortiz Hormaza'),

('35sp','35','La Inmaculada'),

('36sp','36','Santiago G. Angel'),

('37sp','37','Otra');

insert into profesionales values 
('01', 'Alejandra Vidal Arango'),
('02','Diana Marcela Posso Azcarate'),
('03','Eduardo Areiza Lozano'),
('04','Erika Paola Hurtado López'),
('05','Moisés Nieva Díaz'),
('06','Mónica Alexandra Gonzalez Valencia'),
('07','Oscar Mauricio Rey Tangarife'),
('08','Jennifer Andrea Arcos'),
('09','Marlen Murillo Carabalí'),
('10','Lizeth  Fernanda Terán Lopez'),  
('11','Julian Andres Osorio'),
('12','Eliana Amparo Rico Arango'),
('13','Diana Marcela Castro Naranjo');


