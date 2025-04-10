USE literatura;

CREATE TABLE Autores (
    id_autor VARCHAR(5) PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL DEFAULT "",
    apellidos VARCHAR(60) NOT NULL DEFAULT "",
    seudonimo VARCHAR(25) NOT NULL DEFAULT ""
);

CREATE TABLE Editoriales (
    cod_editorial INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    direccion VARCHAR(30) NOT NULL DEFAULT "Dirección desconocida"
)

CREATE TABLE Libros (
    ISBN VARCHAR(20) PRIMARY KEY,
    id_autor VARCHAR(5),
    titulo VARCHAR(50) NOT NULL,
    estilo VARCHAR(50) NOT NULL,
    id_editorial INT UNSIGNED,
    fecha_edicion DATE NOT NULL,
    FOREIGN KEY (id_autor) REFERENCES Autores (id_autor) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_editorial) REFERENCES Editoriales(cod_editorial) ON UPDATE CASCADE ON DELETE CASCADE
);