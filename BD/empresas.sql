/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : sialen

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-08-09 20:58:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `empresas`
-- ----------------------------
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE `empresas` (
  `id_emp` int(10) NOT NULL AUTO_INCREMENT,
  `nit_emp` varchar(100) DEFAULT NULL,
  `nom_emp` varchar(200) NOT NULL,
  `email_emp` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date DEFAULT NULL,
  `status_emp` int(2) NOT NULL DEFAULT '1' COMMENT 'Default es 1 -> active , 2 -> inactivo',
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empresas
-- ----------------------------
INSERT INTO `empresas` VALUES ('1', '1022323548', 'Mauricio cantor', 'mauricio.cantor.p@hotmail.com', '2014-08-06', null, '1');
INSERT INTO `empresas` VALUES ('2', '1022323549', 'Mauricio cantor 2', 'topomajor1@hotmail.com', '2014-08-06', null, '1');
INSERT INTO `empresas` VALUES ('3', '3322555', 'Stefano Escobar', 'aioros105@hotmail.com', '2014-08-06', null, '2');
INSERT INTO `empresas` VALUES ('4', '4445564', 'Anderson Gacharna', 'andygadel@hotmail.com', '2014-08-06', null, '2');
