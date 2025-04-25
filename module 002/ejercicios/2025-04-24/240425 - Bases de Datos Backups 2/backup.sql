-- Active: 1744357566681@@127.0.0.1@3306@bd_mundo
-- NOTE Ejercicios Copia de Seguridad 3.
-- • Para realizar estos ejercicios, utiliza la utilidad Mysqldump.
-- • Si no existe ya, crea, en el directorio raíz del disco (C:\), la carpeta BackupsBD.
-- • Dentro de esta carpeta, crea, a su vez, la carpeta CopiasEjercicio3.
-- • Nota: Con MySQL y WorkBench, puede ser necesario cambiar el valor de la variable secure-file-priv para permitir rutas de destino de copia diferentes a la ruta por defecto y luego reiniciar el servidor de base de datos

-- REVIEW Ejercicio 3.1.
-- TODO | 1. Utiliza la base de datos BD-Mundo con sus tablas Country, City e Idiomas. (Ejemplo BD_Mundo).

USE bd_mundo;

-- 2. TODO | Dentro de CopiasEjercicio3 crea y guarda en un script SQL una copia de seguridad de la tabla Idiomas dentro del archivo IdiomasCopia.sql.

-- IDEA | PS C:\BackupsBD\backupBdMundo> mysqldump -u root -p bd_mundo idiomas > ./idiomas-bd_mundo.sql

-- TODO | 3. Borra la tabla Idiomas de la base de datos BD_Mundo. (No es necesario desde línea de comandos, elimínala desde cualquier entorno visual poniendo en uso dicha base de datos).

-- MariaDB [bd_mundo]> DROP TABLE Idiomas;
-- Query OK, 0 rows affected (0.245 sec)

-- TODO | 4. Confirma la eliminación de la tabla Idiomas. (En visual o en línea de comandos).

-- MariaDB [bd_mundo]> SELECT * FROM IDIOMAS;
-- ERROR 1146 (42S02): Table 'bd_mundo.idiomas' doesn't exist

-- TODO | 5. Restaura la tabla Idiomas a partir de la copia de seguridad contenida en el archivo IdiomasCopia.sql usando el operador de redirección de entrada.

-- PS C:\BackupsBD\backupBdMundo> get-content .\idiomas-bd_mundo.sql | mysql -u root -p bd_mundo

-- TODO | 6. Confirma la restauración de la tabla Idiomas y sus datos. (En visual o en línea de comandos).

MariaDB [(none)]> use bd_mundo 
Database changed
MariaDB [bd_mundo]> show tables; 
+--------------------+
| Tables_in_bd_mundo |
+--------------------+
| city               |
| city2              |
| country            |
| idiomas            |
+--------------------+
4 rows in set (0.001 sec)

MariaDB [bd_mundo]> SELECT * FROM idiomas LIMIT 10;
+---------+------------+-----------+------------+
| CodPais | Lengua     | EsOficial | Porcentaje |
+---------+------------+-----------+------------+
| ABW     | Dutch      | T         |        5.3 |
| ABW     | English    | F         |        9.5 |
| ABW     | Papiamento | F         |       76.7 |
| ABW     | Spanish    | F         |        7.4 |
| AFG     | Balochi    | F         |        0.9 |
| AFG     | Dari       | T         |       32.1 |
| AFG     | Pashto     | T         |       52.4 |
| AFG     | Turkmenian | F         |        1.9 |
| AFG     | Uzbek      | F         |        8.8 |
| AGO     | Ambo       | F         |        2.4 |
+---------+------------+-----------+------------+
10 rows in set (0.001 sec)

-- REVIEW Ejercicio 3.2.

-- TODO | 1. Utiliza la base de datos BD-Mundo con sus tablas Country, City e Idiomas. (Ejemplo BD_Mundo).
-- TODO | 2. Dentro de CopiasEjercicio3 crea y guarda en un script SQL una copia de seguridad de todas sus tablas en el archivo BD_MundoCopia.sql.
-- TODO | 3. Borra la base de datos BD_Mundo. (No es necesario desde línea de comandos, elimínala desde cualquier entorno visual poniendo en uso dicha base de datos).

-- TODO | 4. Confirma que la base ha sido eliminada. (En visual o en línea de comandos).

-- TODO | 5. Crea de nuevo la base de datos BD_Mundo y ponla en uso.
-- TODO | 6. Restaura todas sus tablas a partir de la copia de seguridad BD_MundoCopia.sql usando el operador de redirección de entrada.

-- TODO | 7. Confirma la restauración la base de datos BD_Mundo. (En visual o en línea de
-- comandos).
-- Ejercicio 3.3.
-- 1. Utiliza la base de datos Residencia con sus tablas Ciudades y Personas. (Ejercicio
-- Residencia Subconsultas).
-- 2. Dentro de CopiasEjercicio3 crea y guarda en un script SQL una copia de
-- seguridad de todas sus tablas en el archivo ResidenciaCopia.sql. Esta copia
-- deberá incluir la sentencia CREATE DATABASE.
-- 3. Borra la base de datos Residencia. (No es necesario desde línea de comandos,
-- elimínala desde cualquier entorno visual poniendo en uso dicha base de datos).
-- 4. Confirma que la base ha sido eliminada. (En visual o en línea de comandos).
-- 5. Restaura la base de datos residencia a partir de la copia de seguridad
-- ResidenciaCopia.sql usando el comando source.
-- 6. Confirma la restauración la base de datos Residencia, sus tablas y el contenido
-- de éstas. (En visual o en línea de comandos).
-- Ejercicio 3.4.
-- 1. Utiliza las bases de datos OperacionesBancarias, BD_Mundo y Suministros con
-- todo su contenido.
-- 2. Dentro de CopiasEjercicio3 crea y guarda en un script SQL una copia de
-- seguridad de todas estas bases completas en el archivo VariasBasesCopia.sql.
-- Esta copia deberá incluir la sentencia CREATE DATABASE.
-- 3. Borra las bases de datos OperacionesBancarias, BD-Mundo y Suministros. (No
-- es necesario desde línea de comandos, elimínala desde cualquier entorno visual
-- poniendo en uso dicha base de datos).
-- 4. Confirma que las bases han sido eliminadas.
-- 5. Restaura OperacionesBancarias, BD_Mundo y Suministros a partir de la copia
-- de seguridad VariasBasesCopia.sql, usando el comando source.
-- 6. Confirma la restauración las 3 bases de datos, sus tablas y el contenido de
-- éstas. (En visual o en línea de comandos).
-- Ejercicio 3.5.
-- 1. Utiliza todas las bases de datos del servidor.
-- 2. Dentro de CopiasEjercicio3 crea y guarda en un script SQL una copia de
-- seguridad de todas las bases completas en el archivo TodasCopia.sql. Esta copia
-- deberá incluir la sentencia CREATE DATABASE para todas las bases.
-- 3. Borra las bases de datos OperacionesBancarias, Residencia, BD_Mundo,
-- Morosos, Personal y Suministros. (No es necesario desde línea de comandos,
-- elimínala desde cualquier entorno visual poniendo en uso dicha base de datos).
-- 4. Confirma que las bases mencionadas han sido eliminadas.
-- 5. Restaura las bases borradas a partir de la copia de seguridad TodasCopia.sql,
-- usando el comando source.
-- 6. Confirma la restauración de las bases de datos. Muestra, de alguna base de
-- datos, sus tablas y el contenido de éstas. (En visual o en línea de comandos).