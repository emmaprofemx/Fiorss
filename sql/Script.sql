CREATE TABLE `fior_dev`.`users` (`id_user` INT NOT NULL , `user_name` 
VARCHAR(150) NOT NULL , `user_email` INT(150) NOT NULL , `user_password` INT(150) NOT NULL , 
PRIMARY KEY (`id_user`(999)), UNIQUE (`user_email`)) ENGINE = InnoDB;

CREATE TABLE `fior_trn`.`productos` (`id_producto` INT(100) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(150) NOT NULL , `precio` DECIMAL(10) NOT NULL , `imagen` VARCHAR(150) NOT NULL , `descuento` DECIMAL(10) NOT NULL , PRIMARY KEY (`id_producto`)) ENGINE = InnoDB;

CREATE TABLE `fior_dev`.`clientes` (`id_cliente` INT NOT NULL , `nombre` VARCHAR(150) NOT NULL , `apellidoM` VARCHAR(150) NOT NULL , `apellidoP` VARCHAR(150) NOT NULL , `email` VARCHAR(150) NOT NULL , `password` VARCHAR(150) NOT NULL , `estado` VARCHAR(3) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `fior_trn`.`informacioncontacto` (`id_info` INT(100) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(150) NOT NULL , `correo` VARCHAR(150) NOT NULL , `telefono` VARCHAR(150) NOT NULL , `mensaje` VARCHAR(220) NULL , PRIMARY KEY (`id_info`)) ENGINE = InnoDB;