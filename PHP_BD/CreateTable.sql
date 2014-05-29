CREATE TABLE `tb_users` (
  `rut` int(8) NOT NULL,
  `dv` char(1) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `comuna` varchar(45) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `fdenac` date NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los usuarios';