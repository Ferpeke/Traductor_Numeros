CREATE SCHEMA `bd_colores` DEFAULT CHARACTER SET utf8 ;
USE `bd_colores`;
CREATE TABLE `bd_colores`.`t_colores` (
  `id_colores` INT NOT NULL AUTO_INCREMENT,
  `nombre_color_espaniol` VARCHAR(45) NULL,
  `nombre_color_ingles` VARCHAR(45) NULL,
  PRIMARY KEY (`id_colores`));
INSERT INTO t_colores (nombre_color_espaniol, nombre_color_ingles) VALUES ('BLANCO', 'WHITE'), 
																		('NEGRO', 'BLACK'),
                                                                        ('GRIS', 'GRAY'),
                                                                        ('ROJO', 'RED'),
                                                                        ('AZUL', 'BLUE'),
                                                                        ('AMARILLO', 'YELLOW'),
                                                                        ('VERDE', 'GREEN'),
                                                                        ('ANARANJADO', 'ORANGE'),
                                                                        ('CAFE', 'BROWN'),
                                                                        ('ROSA', 'PINK'),
                                                                        ('VIOLETA', 'VIOLET'),
                                                                        ('MORADO', 'PUPLE'),
                                                                        ('DORADO', 'GOLD'),
                                                                        ('PLATEADO', 'SILVER');