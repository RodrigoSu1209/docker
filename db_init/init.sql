
-- Crear y seleccionar la base de datos usada por la aplicacion.
CREATE DATABASE IF NOT EXISTS mvc_db;
USE mvc_db;

-- Crear la tabla que almacena los usuarios de ejemplo.
CREATE TABLE IF NOT EXISTS usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL
);

-- Insertar registros iniciales cuando MariaDB inicializa la base de datos.
INSERT INTO usuarios (nombre, email) VALUES
('Juan Pérez', 'juan@example.com'),
('María García', 'maria@example.com'),
('Carlos López', 'carlos@example.com');
