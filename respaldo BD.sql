-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-05-2022 a las 18:54:20
-- Versión del servidor: 8.0.29
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleri_aiep`
--
CREATE DATABASE IF NOT EXISTS `elfaro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `elfaro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Negocios'),
(2, 'Deportes'),
(3, 'Politica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_categoria` int NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `estado` int NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descripcion`, `imagen`, `estado`, `fecha`, `updated_at`, `created_at`) VALUES
(2, 1, 1, 'Enap reporta nueva alza en las gasolinas de 6,7 pesos por litro: gas registra disminución de 4$', 'La Empresa Nacional del Petróleo (ENAP) anunció durante la jornada de este miércoles 30 de marzo un aumento en todos los combustibles, menos en el gas licuado del petróleo (GLP) de uso vehicular que registró una disminución de 4,0 pesos por litro. El detalle de Enap publicado durante esta tarde indica que las gasolinas de 93 y 97 octanos sufrirán una nueva alza de $6,7 por litro ($/lt). Además, se informó sobre un nuevo alza en el valor del diésel, el cual sumó $6,7 por litro ($/lt).', 'economia/imagen1.jpg', 0, '2022-05-01 21:44:12', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(3, 1, 1, 'Dos grandes marcas de cerveza anuncian su salida de Rusia', 'La holandesa Heineken decidió retirar sus productos de Rusia, lo mismo que la danesa Carlsberg. “Luego de la previamente anunciada revisión estratégica de nuestras operaciones, hemos concluido que la propiedad de Heineken en el negocio en Rusia ya no es sustentable ni duradero en el contexto actual”, afirmó la primera en un comunicado.', 'economia/imagen2.jpg', 0, '2022-05-01 21:44:58', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(4, 1, 1, 'Banco Central planteó preocupación por impacto de la inflación en las personas y avizora riesgo de r', 'De acuerdo con las expectativas del IPoM, el PIB rondaría entre 1% y 2% este 2022, e incluso el Central le abre la puerta a una eventual contracción para el año siguiente, estimando un rango entre el -0,25% y el 0,75%. Ya para 2024, la economía \"se expandiría en torno a su potencial\", entre 2,25% y 3,25%. El instituto emisor sostiene que \"la inflación y sus perspectivas de corto plazo han continuado al alza, anticipando niveles cercanos a 10% para mediados de este año\".', 'economia/imagen3.jpg', 0, '2022-05-01 21:45:28', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(5, 1, 2, 'Suárez y eventual adiós de la Generación Dorada: \"El público debe agradecerles, han hecho historia\"', 'Pese a ser el autor de uno de los dos goles con que Uruguay derrotó a la Selección Chilena en San Carlos de Apoquindo, Luis Suárez lamentó que la Generación Dorada vuelva a quedarse fuera de un Mundial y señaló que, de igual forma, \"el pueblo chileno debe estar agradecido\".', 'deportes/imagen1.jpg', 0, '2022-05-01 21:46:31', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(6, 1, 2, 'El clásico universitario se lleva todas las miradas: así se jugará la 8va fecha del torneo nacional', 'La ANFP reveló la programación de la octava fecha del Campeonato Nacional 2022, donde destaca el clásico universitario entre la UC y la ‘U’ en el Estadio San Carlos de Apoquindo. El duelo más atractivo de la fecha se jugará en la precordillera el sábado 2 de abril desde las 18:00 horas.', 'deportes/imagen2.png', 0, '2022-05-01 21:46:58', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(7, 1, 2, 'No lo dudaron: el candidato ideal de Beausejour y Pinilla para asumir como técnico de La Roja', 'Tras la no clasificación de La Roja al Mundial de Catar 2022, ya comienzan a circular nombres del posible reemplazante de Martín Lasarte en la banca del ‘equipo de todos’. En medio de este reciente debate dos exseleccionados no lo dudaron y nombraron al que ellos creen como el candidato idóneo para asumir.', 'deportes/imagen3.jpg', 0, '2022-05-01 21:47:20', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(8, 1, 3, 'Presidente Gabriel Boric y Convención Constitucional tendrán documental en Netflix', 'Los próximos meses del Gobierno de Gabriel Boric y el desenlace del trabajo de la Convención Constitucional serán registrados en un documental que llegará a Netflix. La pieza audiovisual estará a cargo del director alemán Daniel Carsenty junto al productor Nick Krüger, en un trabajo que también incluye a Europea TV, el canal franco-alemán ARTE y la plataforma de streaming Netflix.', 'politica/imagen1.jpg', 0, '2022-05-01 21:47:48', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(9, 1, 3, 'Boric pone a Máximo Pacheco a la cabeza de Codelco', 'El Gobierno designó a Máximo Pacheco Matte, ex ministro de Energía en la segunda administración de Michelle Bachelet, como nuevo presidente del directorio de Codelco. El empresario y militante socialista tuvo un destacado paso por dicha cartera, con elogios transversales en el mundo político, al punto que su nombre se consideró como parte de los \"presidenciables\" de la centroizquierda.', 'politica/imagen2.jpg', 0, '2022-05-01 21:48:08', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(10, 1, 3, 'Corte de Antofagasta ratificó la solicitud de extradición de Karen Rojo', 'De manera unánime, la Primera Sala de la Corte de Apelaciones de Antofagasta acogió la solicitud de extradición interpuesta por la Fiscalía en contra de la ex alcaldesa Karen Rojo, que huyó del país al tiempo que se confirmó su condena de cinco años y un día de presidio por el delito de fraude al Fisco. Después de que el Juzgado de Garantía de la ciudad acogiera la petición ayer martes, restaba la ratificación del tribunal de alzada para que el Ministerio de Relaciones Exteriores reciba, junto con una copia del fallo, un documento que le solicite practicar las gestiones diplomáticas necesarias para que el Reino de los Países Bajos detenga a la ex autoridad, pues se estima que es allí donde se encuentra desde la semana pasada.', 'politica/imagen3.jpg', 0, '2022-05-01 21:48:33', '2022-05-03 00:03:42', '2022-05-03 00:03:42'),
(49, 1, 2, 'Prueba', 'asdada', 'code.png', 1, '2022-05-03 01:56:23', '2022-05-03 05:56:23', '2022-05-03 05:56:23'),
(50, 1, 2, 'test', 'asdad', 'Portada-3-1024x683.jpg', 1, '2022-05-03 22:02:42', '2022-05-04 03:02:42', '2022-05-04 03:02:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'msalinasnicoletti@gmail.com', 'aiep1234', '2022-05-03 12:30:47', '2022-05-03 12:30:47'),
(3, 'ruth', 'testing2@gmail.com', '12345', '2022-05-04 03:03:06', '2022-05-04 03:03:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_noticias` (`id_usuario`),
  ADD KEY `categoria_noticias` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `categoria_noticias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_noticias` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
