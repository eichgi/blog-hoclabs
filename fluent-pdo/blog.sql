/*
Navicat MySQL Data Transfer

Source Server         : conexion
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-10-14 17:01:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articulos
-- ----------------------------
DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` float(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_fk` (`id_usuario`),
  CONSTRAINT `items_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of articulos
-- ----------------------------
INSERT INTO `articulos` VALUES ('1', '1', 'Laptop', '9000.00');
INSERT INTO `articulos` VALUES ('2', '2', 'Mochila', '500.00');
INSERT INTO `articulos` VALUES ('3', '3', 'Monitor', '2500.00');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Hiram Guerrero', '2016-10-14 23:54:39');
INSERT INTO `usuarios` VALUES ('2', 'Paco Perez', '2016-10-14 03:09:58');
INSERT INTO `usuarios` VALUES ('3', 'Maria Cantú', '2016-10-08 11:58:15');
INSERT INTO `usuarios` VALUES ('4', 'Christopher Pecina', '2016-10-08 13:05:07');
INSERT INTO `usuarios` VALUES ('5', 'Karen Hinojosa', '2016-10-08 13:05:13');
INSERT INTO `usuarios` VALUES ('6', 'Francisco Torres', '2016-10-08 13:05:21');
INSERT INTO `usuarios` VALUES ('7', 'Carlos Castillo', '2016-10-08 13:05:30');
INSERT INTO `usuarios` VALUES ('8', 'Miguel Ochoa', '2016-10-08 13:05:39');
