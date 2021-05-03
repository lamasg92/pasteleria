CREATE TABLE `galeria_imagenes` (
  `id` int(11) NOT NULL,
  `imagen` text,
  `descripcion` text,
  `categoria` enum('general','cumpleanios','casamientos','bautismos','comuniones','aniversarios','donaciones') DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `galeria_imagenes` (`id`, `imagen`, `descripcion`, `categoria`, `fecha`, `estado`) VALUES
(1, 'vistas/img/productos/6.jpg', 'Imagen de Prueba', 'general', '2021-04-27 22:03:51', 'activo'),
(2, 'vistas/img/galeria/6.jpg', 'Prueba 2', 'cumpleanios', '2021-04-29 00:00:00', 'activo'),
(3, 'vistas/img/galeria/IMG-20180629-WA0008.jpg', 'Prueba 4', 'bautismos', '2021-04-29 00:00:00', 'activo'),
(4, 'vistas/img/galeria/5.jpg', 'texto de Prueba 3', 'casamientos', '2021-04-29 00:00:00', 'activo'),
(5, 'vistas/img/galeria/IMG-20180629-WA0021.jpg', 'Texto de prueb 5', 'donaciones', '2021-04-29 00:00:00', 'activo'),
(6, 'vistas/img/galeria/IMG-20180629-WA0018.jpg', 'descripcion de prueba 4', 'casamientos', '2021-04-29 00:00:00', 'activo'),
(7, 'vistas/img/galeria/3.jpg', '<p>Descripcion de prueba 9</p>', 'aniversarios', '2021-04-29 00:00:00', 'activo');


ALTER TABLE `galeria_imagenes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `galeria_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;