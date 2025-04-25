

			/*Ejemplo Consultas. Base de datos Morosos. */
			
			/* Cambiar El portal "10.", por el portal "10" */
			
			
				update morosos
				set portal = "10"
				where portal = "10.";

				select * from morosos;
			
			
			/* Consultas básicas sin condiciones. */
			
				select concepto from morosos;
				
				select portal, nombre, concepto from morosos;
				
				select * from morosos;
			
			/* Calificar campos. Útil para tablas distintas con campos con nombres iguales.*/
			
				select morosos.portal, morosos.concepto from morosos;
			
			/* Alias para campos y tablas.*/
			
				select m.nombre, m.concepto as "Concepto Debido" from morosos as m;
								
			/* Alias para campos y varias tablas.*/
			
				select registro as "Código de Registro", nombre as "Nombre del Moroso" concepto as "Concepto Debido" from morosos;
				
				select a.nombre, a.cantidad from morosos AS a;
			
			/* Eliminar registros repetidos en los resultados. */
			use morosos;
				select distinct nombre, cantidad from morosos;
				
				select distinct concepto from morosos;
				
				select all concepto from morosos;
			
			/* Consultas con condiciones.*/
			
				select * from morosos where portal ="10";
				
				select * from morosos where cantidad <= 40.00 AND concepto = "Piscina";
				
				select * from morosos limit 5,8;
				
				select * from morosos where cantidad <= 40.00 LIMIT 20;
				
				select * from morosos.morosos
				where nombre like 'j%';
			
				select * from morosos.morosos
				where nombre like "jo%";
				
				select * from morosos
				where nombre like "j___"; /* Hay 3 guiones de subrayado. */
				
				select * from morosos
				where nombre regexp "^jo"; /* Equivalente a nombre like "jo%". */
				
				select * from morosos
				where portal regexp "[1-5][2-5]";
				
				select * from morosos
				where nombre regexp "[UZ]$";
				
			/* Insertar un registro con valores nulos. */
			
				insert into morosos (registro, portal, nombre, fecha, cantidad) values (56, "15","CRISTINA RICCI", "2022-05-31",50.00);
				select * from morosos;
				
				select * from morosos where concepto is null;
				
				select * from morosos where concepto is not null;
			
			/*Duplicar una tabla. */
			
				Create table MorososCopia
				Select * from Morosos;
			
			
			/* Ordenar. */
			
				SELECT * FROM Morosos ORDER BY Portal ASC;
				SELECT Nombre, Fecha, cantidad FROM Morosos ORDER BY Cantidad DESC;
				SELECT * FROM Morosos ORDER BY Cantidad DESC LIMIT 10; // Muestra las 10 cantidades más debidas.
				SELECT * FROM Morosos ORDER BY Apellido1, Apellido2, Nombre ASC;
			
			/* Funciones de agregado.*/
			
				Select min(cantidad) as "Cantidad mínima" from morosos;
				Select count(fecha) as "Total fechas" from morosos;
				Select format(sum(cantidad),0) as "Total debido" from morosos;
				Select avg(cantidad) as "Cantidad media debida" from morosos;
				Select max(cantidad) as "Cantidad máxima debida en el portal 10" from morosos where portal = "10";
				Select sum(cantidad) as "Total debido por la Piscina" from morosos where concepto = "piscina";
				select round(avg(cantidad),1) as "Media cantidad redondeada" from morosos;
				select format(avg(cantidad),1) as "Media cantidad formateada y redondeada" from morosos;
						
			/* Agrupar registros.*/
			
				select portal from morosos
				group by portal;
				
				select concepto	from morosos
				where cantidad = 30.00
				group by concepto;
							
				select portal,concepto from morosos
				where portal = "10"
				group by concepto;
			
			/* Agrupar registros y realizar cálculos para totales.*/
			
				select concepto, sum(cantidad) as "Total Debido" from morosos
				where concepto is not null
				group by concepto;
				
				SELECT Portal, SUM(Cantidad) AS "Total Debido" FROM Morosos
				GROUP BY Portal; 
				
				select portal, nombre, count(cantidad) as "Número de Recibos debidos", sum(cantidad) as "Total Debido" from morosos
				where concepto is not null
				group by portal, nombre
				order by cast(portal as int);
											
				select concepto, sum(cantidad) as "Total Debido" from morosos
				group by concepto
				having sum(cantidad) > 400.00;
				
				select concepto, sum(cantidad) as "Total_Debido" from morosos
				group by concepto
				having Total_Debido > 400.00;
				
				select concepto, sum(cantidad) as "Total Debido" from morosos
				group by concepto
				having sum(cantidad) > 400.00
				order by Total debido desc; /* Error:*/
			
			/* Consultas con campos calculados.*/
			
				select concepto, (cantidad + 20.00) as "Cantidad subida en 20 Unidades" from morosos;
				
				select *, (cantidad *0.90) as "Cantidad decrementado un 10%" from morosos
				where portal = "15";
				
				select *, round((cantidad *0.90),0) as "Cantidad decrementado un 10%" from morosos
				where portal = "15"; /* Igual que anterior con cálculo redondeado y sin decimales.*/
			

			
			
			
			
			
			
			

			
			