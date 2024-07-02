create database Libreria;
use Libreria;

CREATE TABLE autors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);

create TABLE Libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    fecha_publicacion DATE NOT NULL,
    autor_id INT,
    precio DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (autor_id) REFERENCES autors(id)
);

INSERT INTO Autores (nombre, apellido, fecha_nacimiento) VALUES
('', '', '');


INSERT INTO Libros (titulo, fecha_publicacion, autor_id, precio) VALUES
('', '', , );

DELIMITER //

CREATE PROCEDURE BuscarLibros(IN consulta VARCHAR(100))
BEGIN
    SELECT libros.id, libros.titulo, libros.fecha_publicacion, libros.precio, autors.nombre AS autor_nombre, autors.apellido AS autor_apellido
    FROM libros
    JOIN autors ON libros.autor_id = autors.id
    WHERE libros.titulo LIKE CONCAT('%', consulta, '%')
    OR autors.nombre LIKE CONCAT('%', consulta, '%')
    OR autors.apellido LIKE CONCAT('%', consulta, '%');
END //

DELIMITER ;




select * From Libros;
select * From autors;

SHOW TABLES LIKE 'autors';

SELECT * FROM autors WHERE id = 4;


show  PROCEDURE status;

DELIMITER //

CREATE PROCEDURE BuscarLibros2(IN consulta VARCHAR(100))
BEGIN
    SELECT libros.id, libros.titulo, libros.fecha_publicacion, libros.precio, autors.nombre AS autor_nombre, autors.apellido AS autor_apellido
    FROM libros
    JOIN autors ON libros.autor_id = autors.id
    WHERE libros.titulo LIKE CONCAT('%', consulta, '%')
    OR autors.nombre LIKE CONCAT('%', consulta, '%')
    OR autors.apellido LIKE CONCAT('%', consulta, '%')
    OR CONCAT(autors.nombre, ' ', autors.apellido) LIKE CONCAT('%', consulta, '%');
END //

DELIMITER ;

