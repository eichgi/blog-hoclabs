-- TABLA DE USUARIOS
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

-- BITACORA EJEMPLO UNO
CREATE TABLE `bitacora` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1

-- TRIGGER EJEMPLO UNO
CREATE TRIGGER after_usuarios_update
   AFTER UPDATE ON usuarios
   FOR EACH ROW
BEGIN
   INSERT INTO bitacora
   SET
    id_usuario = OLD.id
    nombre = OLD.nombre,
    email = OLD.email,
    password = OLD.password,
    telefono = OLD.telefono;
END

-- BITACORA EJEMPLO DOS
CREATE TABLE `bitacora` (
  `id_usuario` int(11) NOT NULL,
  `old_email` varchar(255) DEFAULT NULL,
  `old_password` varchar(255) DEFAULT NULL,
  `old_nombre` varchar(255) DEFAULT NULL,
  `old_telefono` varchar(255) DEFAULT NULL,
  `new_email` varchar(255) DEFAULT NULL,
  `new_password` varchar(255) DEFAULT NULL,
  `new_nombre` varchar(255) DEFAULT NULL,
  `new_telefono` varchar(255) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1

-- TRIGGER EJEMPLO DOS
CREATE TRIGGER after_usuarios_update
   AFTER UPDATE ON usuarios
   FOR EACH ROW
BEGIN
   INSERT INTO bitacora
   SET
    id_usuario = OLD.id,
    old_nombre = OLD.nombre,
    old_email = OLD.email,
    old_password = OLD.password,
    old_telefono = OLD.telefono,
    new_nombre = NEW.nombre,
    new_email = NEW.email,
    new_password = NEW.password,
    new_telefono = NEW.telefono;
END

-- Instrucción para ver los triggers definidos: SHOW TRIGGERS;
-- Instrucción para mostrar la definición de un trigger: SHOW CREATE TRIGGER after_usuarios_update;
-- Instrucción para eliminar un trigger: DROP TRIGGER after_usuarios_update;