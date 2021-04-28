CREATE TABLE `galeria_imagenes` (
  `id` int(11) DEFAULT NULL,
  `imagen` text,
  `descripcion` text,
  `categoria` enum('general','cumpleanios','casamiento','bautismo','comunion','aniversario','donaciones') DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `galeria_imagenes` (`id`, `imagen`, `descripcion`, `categoria`, `fecha`, `estado`) VALUES
(1, 'vistas/img/productos/6.jpg', 'Imagen de Prueba', 'general', '2021-04-27 22:03:51', 'activo');
COMMIT;