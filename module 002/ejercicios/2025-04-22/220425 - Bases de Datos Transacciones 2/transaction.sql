-- Para este ejercicio usa la base de datos Personal, que incluye las tablas 
-- Departamentos y Empleados. (Ejercicio Empleados). 
-- TODO 1. Usando el usuario root, crea el usuario empleado y asígnale la contraseña xyz. 

CREATE USER 'empleado'@'localhost' IDENTIFIED BY "xyz";

DROP USER empleado@localhost;

-- TODO 2. Asigna  al  usuario  empleado  permisos  de  consulta,  eliminación,  actualización e inserción de registros sobre todo el contenido de la base de datos Personal. 

GRANT SELECT, DELETE, UPDATE, INSERT ON personal.* TO 'empleado'@'localhost';

-- TODO 3. Crea una conexión con el SGBD que quieras para el usuario empleado. 

-- PS E:\ifcd2010-andres-moros> mysql -h localhost -u empleado -p        
-- Enter password: ***
-- Welcome to the MariaDB monitor.  Commands end with ; or \g.
-- Your MariaDB connection id is 226
-- Server version: 10.4.32-MariaDB mariadb.org binary distribution

-- Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

-- Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

-- MariaDB [(none)]> show databases;
-- +--------------------+   
-- | Database           |   
-- +--------------------+   
-- | information_schema |   
-- | personal           |   
-- +--------------------+   
-- 2 rows in set (0.001 sec)

-- MariaDB [(none)]>   

-- TODO 4. Inicia una nueva transacción con el usuario root. 

START TRANSACTION

-- TODO 5. Consulta cual es su identificador de conexión. 

-- TODO 6. Pon en uso la base de datos Personal. 

-- TODO 7. Haz  una  consulta  que  muestre  todos  los  datos  de  los  departamentos  y  los nombres y profesión de los empleados que trabajan en ellos. 

-- TODO 8. Conéctate, vía consola, con el usuario empleado. 

-- TODO 9. Una vez  conectado con  el  usuario empleado,  consulta  su  identificador  de conexión. 

-- TODO 10. Inicia una transacción con el usuario empleado. 

-- TODO 11. Con el usuario empleado, pon en uso la base de datos Personal. 

-- TODO 12. Realiza la misma consulta con el usuario empleado que en el punto 7. 

-- TODO 13. Con el usuario root crea un primer punto de parada. 

-- TODO 14. Con este usuario inserta un nuevo registro en departamentos con los siguientes datos: 
-- o (60, “RR.HH.”, “Madrid”). 
-- TODO 15. Visualiza  que  esta  correctamente  introducido  el  nuevo  registro  por  parte  de root. 

-- TODO 16. Cambia  al  usuario  empleado  y  visualiza  el  nuevo registro  introducido por root. ¿Es posible? 

-- TODO 17. El  sueldo  del  empleado  Raúl  Fuentes  Díez  con  código  ZW300  pasa  a  ser  de 
-- 1450.50 euros. Realiza el cambio con el usuario empleado. 
-- TODO 18. Crea un punto de parada para el usuario empleado. 
-- TODO 19. Borra el departamento con código 20 en la tabla departamentos. 
-- TODO 20. Confirma que ha sido borrado con el usuario empleado. 
-- TODO 21. Cambia al usuario root y confirma el borrado del departamento 20 y el cambio 
-- de sueldo del empleado ZW300. ¿Han ocurrido? 
-- TODO 22. Con el usuario root cambia el departamento RR.HH., por el de Recursos 
-- Humanos usando el código del departamento. 
-- TODO 23. Visualiza el cambio de departamento con el usuario root. 
-- TODO 24. Visualiza el cambio de departamento con el usuario empleado. (No se ve). 
-- TODO 25. Anula el borrado del departamento 20 que hizo el usuario empleado. 
-- TODO 26. Termina las operaciones de usuario empleado confirmándolas. 
-- TODO 27. Termina las operaciones de usuario root confirmándolas. 
-- TODO 28. Visualiza ahora la tabla departamentos con el usuario empleado y confirma que 
-- puede  ver  ahora  el  registro  introducido  por  root  y  el  cambio  de  RR.HH.  por 
-- Recursos Humanos. 
-- 29. Visualiza  ahora  la  tabla  departamentos  y  empleados  con  el  usuario  root  y 
-- confirma que puedes ver ahora el cambio de sueldo del empleado ZW300 y que 
-- no se ha borrado el departamento con código 20. 
-- 30. Desconéctate del usuario empleado y sal de la consola de Windows. 
-- 31. Con el usuario root elimina el usuario empleado sin revocar sus permisos. 
-- 32. Elimina del SGBD la conexión al usuario empleado.