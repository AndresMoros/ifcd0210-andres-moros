-- Editoriales (
--     cod_editorial INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
--     nombre VARCHAR(30) NOT NULL,
--     direccion VARCHAR(30) NOT NULL DEFAULT "Dirección desconocida"
-- )
use literatura;
INSERT INTO literatura.editoriales (nombre, direccion) VALUES (
    "Planeta",
    "C/. Castellana"
);

INSERT INTO literatura.editoriales (nombre, direccion) VALUES (
    "Terraforme",
    "C/. Londres"
);

INSERT INTO literatura.editoriales (nombre, direccion) VALUES (
    "Letras Iletradas",
    "C./ Gaspacho Coronado"
);