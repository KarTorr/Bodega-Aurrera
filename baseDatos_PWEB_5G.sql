-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 24-11-2024 a las 23:26:27
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sesion`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL auto_increment,
  `categoria` varchar(15) NOT NULL,
  PRIMARY KEY  (`idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (2, 'Galletas');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `iniciar`
-- 

CREATE TABLE `iniciar` (
  `usuario` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `iniciar`
-- 

INSERT INTO `iniciar` VALUES ('karen', '1234');
INSERT INTO `iniciar` VALUES ('fatyma', '1234');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `marcas`
-- 

CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL auto_increment,
  `marca` varchar(15) NOT NULL,
  PRIMARY KEY  (`idMarca`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `marcas`
-- 

INSERT INTO `marcas` VALUES (1, 'lala');
INSERT INTO `marcas` VALUES (2, 'bimbo');
INSERT INTO `marcas` VALUES (3, '');
INSERT INTO `marcas` VALUES (4, 'coca');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL auto_increment,
  `idCategoria` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `producto` varchar(11) NOT NULL,
  `precio` double NOT NULL,
  `descr` varchar(15) NOT NULL,
  `novedad` varchar(11) NOT NULL,
  `vendido` varchar(11) NOT NULL,
  `imagen` varchar(15) NOT NULL,
  PRIMARY KEY  (`idProducto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, 0, 0, 'leche', 16, 'leche', 'leche', 'no', '');
