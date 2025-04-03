use ferreteria;

INSERT INTO PIEZAS VALUES(9121, 'Radiador', 'Refrigerador', 32);
# Registro de producto nuevo
INSERT INTO PIEZAS VALUES(9121, 'Brazo barredor', 'Parabrisas', 42);
# Registro con una primary key repetida (error)
INSERT INTO PIEZAS VALUES(null, 'Luz', 'Largas traseras', 100);
# Usando un valor nulo para el codigo
INSERT INTO PIEZAS VALUES(1231, 'Silla', 'Forro', 400);
INSERT INTO PIEZAS VALUES(4513, 'Alfrombilla', 'Piso', 90);
INSERT INTO PIEZAS VALUES(1243, 'Espejo', 'Retrovisor derecho', 122);

select * from piezas;