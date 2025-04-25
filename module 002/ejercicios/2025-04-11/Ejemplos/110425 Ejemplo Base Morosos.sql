-- Active: 1741776367858@@127.0.0.1@3306


create database morosos;

use morosos;

create table morosos
(registro int primary key,
 portal varchar(3),
 nombre varchar(50),
 cantidad decimal(6,2),
 Fecha date,
 Concepto varchar(20));

insert into morosos values (1,'11','JUAN PÉREZ',10.00,'2013-05-14T00:00:00','PISCINA');
insert into morosos values  (2,'11','JUAN PÉREZ',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values (3,'11','JUAN PÉREZ',10.00,'2013-05-16T00:00:00','PISCINA');
insert into morosos values (4,'11','JUAN PÉREZ',30.00,'2013-05-23T00:00:00','COMUNIDAD');
insert into morosos values  (5,'11','JUAN PÉREZ',60.00,'2013-04-10T00:00:00','GARAJE');
insert into morosos values  (6,'11','JUAN PÉREZ',70.00,'2013-03-12T00:00:00','ASCENSOR');
insert into morosos values (7,'3','CRISTINA RICCI',10.00,'2013-05-14T00:00:00','ASCENSOR');
insert into morosos values  (8,'3','CRISTINA RICCI',10.00,'2013-05-23T00:00:00','PISCINA');
insert into morosos values  (9,'3','CRISTINA RICCI',10.00,'2013-05-16T00:00:00','ASCENSOR');
insert into morosos values  (10,'3','CRISTINA RICCI',30.00,'2011-05-23T00:00:00','PISCINA');
insert into morosos values  (11,'3','DAVID NUÑEZ',60.00,'2011-04-10T00:00:00','COMUNIDAD');
insert into morosos values  (12,'3','DAVID NUÑEZ',70.00,'2013-03-12T00:00:00','GARAJE');
insert into morosos values  (13,'3','DAVID NUÑEZ',10.00,'2013-05-14T00:00:00','ASCENSOR');
insert into morosos values  (14,'3','DAVID NUÑEZ',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values  (15,'9','JOSÉ DÍAZ',10.00,'2013-05-16T00:00:00','PISCINA');
insert into morosos values (16,'9','JOSÉ DÍAZ',30.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values  (17,'9','JOSÉ DÍAZ',60.00,'2013-04-10T00:00:00','PISCINA');
insert into morosos values (18,'9','JOSÉ DÍAZ',10.00,'2013-03-12T00:00:00','COMUNIDAD');
insert into morosos values (19,'9','JOSÉ DÍAZ',10.00,'2010-05-14T00:00:00','GARAJE');
insert into morosos values (20,'9','JOSÉ DÍAZ',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values  (21,'9','JOSÉ DÍAZ',30.00,'2010-05-16T00:00:00','ASCENSOR');
insert into morosos values (22,'9','JOSÉ DÍAZ',60.00,'2013-05-23T00:00:00','PISCINA');
insert into morosos values  (23,'9','JOSÉ DÍAZ',70.00,'2013-04-10T00:00:00','ASCENSOR');
insert into morosos values (24,'9','JOSÉ DÍAZ',10.00,'2013-03-12T00:00:00','PISCINA');
insert into morosos values (25,'9','LUISA LUIS',10.00,'2013-05-14T00:00:00','COMUNIDAD');
insert into morosos values (26,'9','LUISA LUIS',10.00,'2013-05-23T00:00:00','GARAJE');
insert into morosos values (27,'9','LUISA LUIS',30.00,'2013-05-16T00:00:00','ASCENSOR');
insert into morosos values (28,'10','CARLA BRU',10.00,'2013-05-14T00:00:00','PISCINA');
insert into morosos values  (29,'10.00','CARLA BRU',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values (30,'10.00','CARLA BRU',10.00,'2010-05-16T00:00:00','PISCINA');
insert into morosos values  (31,'10.00','CARLA BRU',30.00,'2013-05-23T00:00:00','COMUNIDAD');
insert into morosos values  (32,'10.00','CARLA BRU',60.00,'2013-04-10T00:00:00','GARAJE');
insert into morosos values  (33,'10.00','CARLA BRU',70.00,'0103-03-12T00:00:00','ASCENSOR');
insert into morosos values (34,'10.00','CARLOS CAR',10.00,'2013-05-14T00:00:00','ASCENSOR');
insert into morosos values  (35,'10.00','CARLOS CAR',10.00,'2010-05-23T00:00:00','PISCINA');
insert into morosos values (36,'10.00','CARLOS CAR',10.00,'2013-05-16T00:00:00','ASCENSOR');
insert into morosos values  (37,'10.00','CARLOS CAR',30.00,'2013-05-23T00:00:00','PISCINA');
insert into morosos values  (38,'10.00','CARLOS CAR',60.00,'2013-04-10T00:00:00','COMUNIDAD');
insert into morosos values  (39,'10.00','CARLOS CAR',70.00,'2010-03-12T00:00:00','GARAJE');
insert into morosos values (40,'10.00','CARLOS CAR',10.00,'2013-05-14T00:00:00','ASCENSOR');
insert into morosos values (41,'10.00','CARLOS CAR',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values (42,'10.00','CARLOS CAR',10.00,'2010-05-16T00:00:00','PISCINA');
insert into morosos values (43,'10.00','CARLOS CAR',30.00,'0103-05-23T00:00:00','ASCENSOR');
insert into morosos values  (44,'10.00','CARLOS CAR',60.00,'2013-04-10T00:00:00','PISCINA');
insert into morosos values  (45,'12','TOMÁS GARCÍA',10.00,'2013-03-12T00:00:00','COMUNIDAD');
insert into morosos values  (46,'12','TOMÁS GARCÍA',10.00,'2013-05-14T00:00:00','GARAJE');
insert into morosos values (47,'12','TOMÁS GARCÍA',10.00,'2013-05-23T00:00:00','ASCENSOR');
insert into morosos values  (48,'12','TOMÁS GARCÍA',30.00,'2013-05-16T00:00:00','ASCENSOR');
insert into morosos values  (49,'12','TOMÁS GARCÍA',60.00,'2013-05-23T00:00:00','PISCINA');
insert into morosos values (50,'12','TOMÁS GARCÍA',70.00,'2013-04-10T00:00:00','ASCENSOR');
insert into morosos values (51,'12','TOMÁS GARCÍA',10.00,'2013-03-12T00:00:00','PISCINA');
insert into morosos values  (52,'12','TOMÁS GARCÍA',10.00,'2013-05-14T00:00:00','COMUNIDAD');
insert into morosos values (53,'12','TOMÁS GARCÍA',10.00,'2010-05-23T00:00:00','GARAJE');
insert into morosos values (54,'12','TOMÁS GARCÍA',30.00,'2013-05-16T00:00:00','ASCENSOR');
insert into morosos values (55,'12','TOMÁS GARCÍA',40.00,'2013-05-16T00:00:00','PISCINA');