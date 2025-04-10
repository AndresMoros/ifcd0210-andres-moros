-- Libros (
--     ISBN VARCHAR(20) PRIMARY KEY,
--     id_autor VARCHAR(5),
--     titulo VARCHAR(50) NOT NULL,
--     estilo VARCHAR(50) NOT NULL,
--     id_editorial INT UNSIGNED,
--     fecha_edicion DATE NOT NULL,
--     FOREIGN KEY (id_autor) REFERENCES Autores (id_autor) ON UPDATE CASCADE ON DELETE CASCADE,
--     FOREIGN KEY (id_editorial) REFERENCES Editoriales(cod_editorial) ON UPDATE CASCADE ON DELETE CASCADE
-- );

INSERT INTO literatura.libros VALUES (
    "840816130X",
    "dross",
    "El Festival de la Blasfemia",
    "Horror",
    1,
    "04/10/2016"
);

INSERT INTO literatura.libros VALUES (
    "842659976Y",
    "kuker",
    "El Fotográfo",
    "Suspenso",
    1,
    "09/12/2022"
);

INSERT INTO literatura.libros VALUES (
    "842659976Y",
    "kuker",
    "El Fotográfo",
    "Suspenso",
    1,
    "09/12/2022"
);

INSERT INTO literatura.libros VALUES (
    "874019976A",
    "ardxa",
    "Programando juegos en C",
    "Educativo",
    3,
    "31/02/2024"
);