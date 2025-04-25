-- Active: 1744357566681@@127.0.0.1@3306@suministros
-- TODO: 1. Usando el usuario root, crea el usuario gerente y asígnale la contraseña 123456. 
CREATE USER gerente@localhost IDENTIFIED BY "123456";

-- TODO: 2. Asigna  al  usuario  gerente  permisos  globales  sobre  todas  las  bases  del  servidor  incluyendo  la opción de poder establecer permisos para otros usuarios. 

GRANT ALL PRIVILEGES ON *.* TO gerente@localhost WITH GRANT OPTION;

-- TODO: 3. Conéctate con este usuario al servidor local (para ello crea una conexión con él en  phpmyAdmin, Workbench o HeidiSQL, etc., o accede mediante consola). 



-- TODO: 4. Una vez conectado, consulta qué permisos tiene el usuario gerente. 

SHOW GRANTS;

-- TODO: 5. Crea, con el usuario gerente, 3 nuevos usuarios con las siguientes características: 
--      a. cajero1 con contraseña abcd1 y los siguientes permisos: 
--          ▪ Select,  insert,  delete  y  update  sobre  todas  las  tablas  de  la  base  de  datos Operacionesbancarias. 
--      b. cajero2 con contraseña abcd2 y los siguientes permisos: 
--          ▪ Select,  insert,  delete  y  update  sobre  todas  las  tablas  de  la  base  de  datos Operacionesbancarias. 
--      c. Un  usuario  anónimo  sin  nombre,  sin  contraseña  y  sin  permisos.  (Por  defecto  se  le asignara automáticamente el permiso usage. 

CREATE USER cajero1@localhost IDENTIFIED BY "abcd1";

GRANT SELECT, INSERT, DELETE, UPDATE ON operacionesbancarias.* TO cajero1@localhost;

CREATE USER cajero2@localhost IDENTIFIED BY "abcd2";

GRANT SELECT, INSERT, DELETE, UPDATE ON operacionesbancarias.* TO cajero2@localhost;

CREATE USER ""@localhost;

-- TODO: 6. Tras  asignar  los  permisos,  prueba  a  conectarte  con  todos  estos  usuarios  (para  ello,  antes  hay que crear las conexiones correspondientes). 

-- TODO: 7. Una vez conectado, consulta qué permisos tiene cada usuario. 

-- NOTE: Para los cajeros

-- MariaDB [(none)]> SHOW GRANTS FOR 'cajero1'@'localhost';
-- +----------------------------------------------------------------------------------------------------------------+
-- | Grants for cajero1@localhost                                                                                   |
-- +----------------------------------------------------------------------------------------------------------------+
-- | GRANT USAGE ON *.* TO `cajero1`@`localhost` IDENTIFIED BY PASSWORD '*D700B0EB4FF853845C268366E67E75E360EF3D6D' |
-- | GRANT SELECT, INSERT, UPDATE, DELETE ON `operacionesbancarias`.* TO `cajero1`@`localhost`                      |
-- +----------------------------------------------------------------------------------------------------------------+

-- MariaDB [(none)]> show grants for 'cajero2'@'localhost';
-- +----------------------------------------------------------------------------------------------------------------+
-- | Grants for cajero2@localhost                                                                                   |
-- +----------------------------------------------------------------------------------------------------------------+
-- | GRANT USAGE ON *.* TO `cajero2`@`localhost` IDENTIFIED BY PASSWORD '*2AB941F814FB389C93CEE7E7B9941A11BAE07ADB' |
-- | GRANT SELECT, INSERT, UPDATE, DELETE ON `operacionesbancarias`.* TO `cajero2`@`localhost`                      |
-- +----------------------------------------------------------------------------------------------------------------+

-- NOTE: Para el usuario anónimo
-- MariaDB [(none)]> show grants;
-- +--------------------------------------+
-- | Grants for @localhost                |
-- +--------------------------------------+
-- | GRANT USAGE ON *.* TO ``@`localhost` |
-- +--------------------------------------+

-- TODO: 8. Realiza las siguientes operaciones el usuario gerente: 
--      a. Pon en uso la base Operacionesbancarias. 
        USE operacionesbancarias;

--      b. Crea la vista SaldoClientes que incluirá el código del cliente, su nombre, el código de sus cuentas, y el saldo y divisas de éstas. 

        CREATE VIEW saldo_clientes
        AS
        SELECT 
        clientes.idCliente as "ID Cliente",
        CONCAT(clientes.nombre, " ", clientes.apellido1,  " ", clientes.apellido2) as "Nombre",
        cuentas.idCuenta as "Cod. Cuenta",
        cuentas.saldo as "Saldo",
        cuentas.Divisa as "Moneda"
        FROM clientes INNER JOIN cuentas
        ON clientes.idCliente = cuentas.idCliente;


-- TODO: 9. Realiza las siguientes operaciones LMD usando el usuario cajero1: 
--      a. Pon en uso la base Operacionesbancarias para el usuario cajero1. 
--      b. Inserta un nuevo cliente con los siguientes datos: 
--          ▪ Datos de cliente: 45ZB3, Luis Miguel, Arias, Sánchez, C\ Carina 10, Fuenlabrada, 123321123. 
        INSERT INTO clientes VALUES (
            "45ZB3",
            "Luis Miguel",
            "Arias",
            "Sánchez",
            "C/ Carina, 10",
            "Fuenlabrada",
            "123321123"
        );

--          ▪ Datos de cuenta: 478112, Sin saldo inicial, Divisa euros.  

        INSERT INTO cuentas (idCliente, idCuenta, Divisa) VALUES (
            "45ZB3",
            "478112",
            "Euros"
        );


--      c. Confirma con una consulta que se ha introducido este nuevo cliente. 

-- MariaDB [operacionesbancarias]> SELECT * FROM CUENTAS;
-- +-----------+----------+---------+---------+
-- | IDCliente | IDCuenta | Saldo   | Divisa  |
-- +-----------+----------+---------+---------+
-- | 45M22     |   234444 | 1200.45 | Euros   |
-- | 45A12     |   234555 |  345.67 | Euros   |
-- | 45C34     |   275888 | 3856.53 | Euros   |
-- | 45A12     |   436444 | 5600.22 | Dólares |
-- | 45A84     |   454574 | 1505.87 | Euros   |
-- | 45A84     |   474722 | 2612.40 | Dólares |
-- | 45ZB3     |   478112 |    NULL | Euros   |
-- | 45M22     |   543333 | 3492.00 | Dólares |
-- | 45B34     |   923832 |  234.90 | Euros   |
-- +-----------+----------+---------+---------+

-- TODO: 10. Realiza las siguientes operaciones LMD usando el usuario cajero2: 
--      a. Pon en uso la base Operacionesbancarias para el usuario cajero2. 

--      b. Elimina al cliente con código 45A84. 

--      c. Confirma  que  ha  desaparecido  sus  datos personales,  sus  cuentas  y  toda la  información sobre los movimientos que hizo con ellas. 

-- DEBUG: PS E:\ifcd2010-andres-moros> mysql -u cajero2 -p
-- DEBUG: Enter password: *****
-- Welcome to the MariaDB monitor.  Commands end with ; or \g.
-- Your MariaDB connection id is 126
-- Server version: 10.4.32-MariaDB mariadb.org binary distribution

-- Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

-- Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

-- MariaDB [(none)]> use operacionesbancarias;
-- Database changed
-- MariaDB [operacionesbancarias]> START TRANSACTION;
-- Query OK, 0 rows affected (0.000 sec)

-- MariaDB [operacionesbancarias]> DELETE FROM clientes
--     ->         WHERE idCliente = "45A84";
-- Query OK, 1 row affected (0.036 sec)

-- MariaDB [operacionesbancarias]> SELECT * FROM CLIENTES;
-- +-----------+-------------+-----------+-----------+----------------+-------------+-----------+
-- | IDCliente | Nombre      | Apellido1 | Apellido2 | Dirección      | Localidad   | Teléfono  |
-- +-----------+-------------+-----------+-----------+----------------+-------------+-----------+
-- | 45A12     | Eva         | Álvarez   | García    | Avda. Deneb 32 | Madrid      | 196367983 |
-- | 45B34     | Ana         | Ruiz      | Gómez     | C Bellatrix 5  | Coslada     | 293567389 |
-- | 45C15     | Antonio     | Pérez     | Ruiz      | C Vega 17      | Leganés     | 796557989 |
-- | 45C34     | Sara        | Montalvo  | Rodríguez | Avda. Rigel 22 | Madrid      | 476569334 |
-- | 45M22     | Luis        | Pérez     | Sánchez   | C Sirio 3      | Madrid      | 894567387 |
-- | 45ZB3     | Luis Miguel | Arias     | Sánchez   | C/ Carina, 10  | Fuenlabrada | 123321123 |
-- | KU213     | Andrés      | Moros     | Araujo    | C. Londres     | Móstoles    | 534987612 |
-- +-----------+-------------+-----------+-----------+----------------+-------------+-----------+
-- 7 rows in set (0.000 sec)

-- MariaDB [operacionesbancarias]> SAVEPOINT sp1;
-- Query OK, 0 rows affected (0.000 sec)

-- MariaDB [operacionesbancarias]> commit;
-- Query OK, 0 rows affected (0.023 sec)


-- TODO: 11. Usando  el  usuario  gerente,  asigna  el  permiso  necesario  para  que  el  usuario  anónimo  pueda consultar la vista SaldoClientes

GRANT SELECT ON operacionesbancarias.saldo_clientes TO ""@localhost;

FLUSH PRIVILEGES;

-- TODO: 12. Realiza las siguientes operaciones LMD usando el usuario anonimo: 

--      a. Pon en uso la base Operacionesbancarias para el usuario anónimo. 

--      b. Consulta la vista SaldoClientes con el usuario anónimo. 

-- BUG  PS E:\ifcd2010-andres-moros> mysql -u '' -p
-- BUG Welcome to the MariaDB monitor.  Commands end with ; or \g.
-- Your MariaDB connection id is 128
-- Server version: 10.4.32-MariaDB mariadb.org binary distribution

-- Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

-- Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

-- MariaDB [(none)]> show tables;
-- ERROR 1046 (3D000): No database selected
-- MariaDB [(none)]> use operacionesbancarias;
-- Database changed
-- MariaDB [operacionesbancarias]> show tables;
-- +--------------------------------+
-- | Tables_in_operacionesbancarias |
-- +--------------------------------+
-- | saldo_clientes                 |
-- +--------------------------------+
-- 1 row in set (0.001 sec)

-- MariaDB [operacionesbancarias]> select * from saldo_clientes;
-- +------------+---------------------------+-------------+---------+---------+
-- | ID Cliente | Nombre                    | Cod. Cuenta | Saldo   | Moneda  |
-- +------------+---------------------------+-------------+---------+---------+
-- | 45M22      | Luis Pérez Sánchez        |      234444 | 1200.45 | Euros   |
-- | 45A12      | Eva Álvarez García        |      234555 |  345.67 | Euros   |
-- | 45C34      | Sara Montalvo Rodríguez   |      275888 | 3856.53 | Euros   |
-- | 45A12      | Eva Álvarez García        |      436444 | 5600.22 | Dólares |
-- | 45ZB3      | Luis Miguel Arias Sánchez |      478112 |    NULL | Euros   |
-- | 45M22      | Luis Pérez Sánchez        |      543333 | 3492.00 | Dólares |
-- | 45B34      | Ana Ruiz Gómez            |      923832 |  234.90 | Euros   |
-- +------------+---------------------------+-------------+---------+---------+
-- 7 rows in set (0.001 sec)

-- TODO: 13. Visualiza toda información sobre los distintos usuarios creados. 

	SELECT user, host, command FROM information_schema.processlist;


-- TODO: 14. Con el usuario root, revoca todos los permisos a todos los usuarios. 

REVOKE ALL PRIVILEGES, GRANT OPTION FROM ''@localhost; 
REVOKE ALL PRIVILEGES, GRANT OPTION FROM cajero1@localhost, cajero2@localhost, gerente@localhost;

-- TODO: 15. Con este mismo usuario, elimina a todos los usuarios a la vez. 

DROP USER gerente@localhost;

-- TODO: 16. Confirma que ya no existen. 
	SELECT user, host, command FROM information_schema.processlist;

DESC operacionesbancarias.cuentas;