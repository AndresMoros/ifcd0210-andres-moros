# Cambia el nombre del campo Autor por el de Artista_Grupo.
ALTER TABLE musica.discos
CHANGE Autor ArtistaGrupo VARCHAR(55);

# Modifica el campo Título para que no admita valores nulos.
ALTER TABLE musica.discos
MODIFY Titulo VARCHAR(40) NOT NULL;

# Cambia el tamaño del campo Estilo a 30 caracteres.
ALTER TABLE musica.discos
MODIFY Estilo VARCHAR(30);

# Cambia el nombre al campo Numero_canciones por el nombre de Pistas e incluye la opción necesaria para que no admita número negativos.
ALTER TABLE musica.discos
CHANGE NumeroCanciones Pistas INT(2) CHECK(Pistas > 0);

# Cambia el tipo de campo en Fecha_Salida al tipo Date.
ALTER TABLE musica.discos
MODIFY FechaSalida DATE;

# Añade al final de la tabla el campo Comentarios, no nulo y apto para almacenar alfanuméricos.
ALTER TABLE musica.discos
ADD Comentarios VARCHAR(200) NOT NULL;

# Añade, entre los campos Estilo y Pistas, el nuevo campo Soporte. Un campo alfanumérico fijo de 5 caracteres que no admite nulos.
ALTER TABLE musica.discos
ADD Soporte CHAR(5) NOT NULL AFTER Estilo;

# Añade, a continuación del campo IdDisco, el campo Codigo, que será un campo entero de 5 dígitos y no admitirá valores nulos.
ALTER TABLE musica.discos
ADD Codigo INT(5) NOT NULL AFTER IdDisco;

# Establece una clave única en el campo Codigo. Especifica un nombre para la restricción.
ALTER TABLE musica.discos
ADD CONSTRAINT Codigo UNIQUE (Codigo);

# Añade el valor por defecto 0 en el campo Pistas.
ALTER TABLE musica.discos
MODIFY Pistas INT(2) DEFAULT 0;

# Añade el valor por defecto “Sin comentarios” en el campo Comentarios.
ALTER TABLE musica.discos
MODIFY Comentarios VARCHAR(200) DEFAULT "Sin comentarios";

# Elimina la clave única del campo Codigo.
ALTER TABLE musica.discos
DROP CONSTRAINT Codigo; 

# Cambia la clave primaria del campo idDisco al campo Codigo.

ALTER TABLE musica.discos
DROP PRIMARY KEY;

ALTER TABLE musica.discos
ADD PRIMARY KEY (Codigo);

DESCRIBE MUSICA.discos;

SHOW COLUMNS FROM MUSICA.discos;


SELECT 
    CONSTRAINT_NAME, 
    TABLE_NAME, 
    COLUMN_NAME, 
    REFERENCED_TABLE_NAME, 
    REFERENCED_COLUMN_NAME
FROM 
    INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE 
    TABLE_NAME = 'discos'
    AND TABLE_SCHEMA = 'musica';

SHOW INDEX FROM musica.discos;
