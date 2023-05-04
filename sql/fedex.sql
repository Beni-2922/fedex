
CREATE TABLE `usuarios` (
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(300) NOT NULL,
  `clave` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `usuarios` (`nombre`, `correo`, `clave`) VALUES
('Juan Perez', 'prueba@gmail.com','1234');