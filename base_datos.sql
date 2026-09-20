CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(200) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

INSERT INTO productos (nombre, descripcion, precio) VALUES
('Laptop', 'Computadora portátil', 2500.00),
('Mouse', 'Mouse inalámbrico', 80.00),
('Teclado', 'Teclado mecánico', 150.00),
('Monitor', 'Monitor de 24 pulgadas', 800.00);
