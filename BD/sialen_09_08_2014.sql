/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : sialen

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-08-09 21:04:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `det_email`
-- ----------------------------
DROP TABLE IF EXISTS `det_email`;
CREATE TABLE `det_email` (
  `idDet_Email` int(10) NOT NULL AUTO_INCREMENT,
  `Det_mensaje` longtext NOT NULL,
  `Email_destino` varchar(255) NOT NULL,
  `Email_cc` varchar(255) DEFAULT NULL,
  `Email_bcc` varchar(255) DEFAULT NULL,
  `Email_id_Email` int(6) NOT NULL,
  PRIMARY KEY (`idDet_Email`),
  KEY `fk_Det_Email_Email1_idx` (`Email_id_Email`),
  CONSTRAINT `fk_Det_Email_Email1` FOREIGN KEY (`Email_id_Email`) REFERENCES `email` (`id_Email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of det_email
-- ----------------------------
INSERT INTO `det_email` VALUES ('1', '\n	&lt;style type=\'text/css\'&gt;\n\n	body{\n		background:#F7F6F6;\n	}\n\n .CSSTableGenerator {\n 	text-align:center;\n	margin:auto;padding:0px;\n	width:600px;\n	box-shadow: 10px 10px 5px #888888;\n	border:1px solid #000000;\n	\n	-moz-border-radius-bottomleft:0px;\n	-webkit-border-bottom-left-radius:0px;\n	border-bottom-left-radius:0px;\n	\n	-moz-border-radius-bottomright:0px;\n	-webkit-border-bottom-right-radius:0px;\n	border-bottom-right-radius:0px;\n	\n	-moz-border-radius-topright:0px;\n	-webkit-border-top-right-radius:0px;\n	border-top-right-radius:0px;\n	\n	-moz-border-radius-topleft:0px;\n	-webkit-border-top-left-radius:0px;\n	border-top-left-radius:0px;\n}.CSSTableGenerator table{\n    border-collapse: collapse;\n        border-spacing: 0;\n	width:100%;\n	height:100%;\n	margin:auto;padding:0px;\n}.CSSTableGenerator tr:last-child td:last-child {\n	-moz-border-radius-bottomright:0px;\n	-webkit-border-bottom-right-radius:0px;\n	border-bottom-right-radius:0px;\n}\n.CSSTableGenerator table tr:first-child td:first-child {\n	-moz-border-radius-topleft:0px;\n	-webkit-border-top-left-radius:0px;\n	border-top-left-radius:0px;\n}\n.CSSTableGenerator table tr:first-child td:last-child {\n	-moz-border-radius-topright:0px;\n	-webkit-border-top-right-radius:0px;\n	border-top-right-radius:0px;\n}.CSSTableGenerator tr:last-child td:first-child{\n	-moz-border-radius-bottomleft:0px;\n	-webkit-border-bottom-left-radius:0px;\n	border-bottom-left-radius:0px;\n}.CSSTableGenerator tr:hover td{\n	\n}\n.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }\n.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{\n	vertical-align:middle;\n	\n	\n	border:1px solid #000000;\n	border-width:0px 1px 1px 0px;\n	text-align:left;\n	padding:7px;\n	font-size:13px;\n	font-family:Times New Roman;\n	font-weight:normal;\n	color:#000000;\n}.CSSTableGenerator tr:last-child td{\n	border-width:0px 1px 0px 0px;\n}.CSSTableGenerator tr td:last-child{\n	border-width:0px 0px 1px 0px;\n}.CSSTableGenerator tr:last-child td:last-child{\n	border-width:0px 0px 0px 0px;\n}\n.CSSTableGenerator tr:first-child td{\n		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );\n	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );\n	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#005fbf\', endColorstr=\'#003f7f\');	background: -o-linear-gradient(top,#005fbf,003f7f);\n\n	background-color:#005fbf;\n	border:0px solid #000000;\n	text-align:center;\n	border-width:0px 0px 1px 1px;\n	font-size:18px;\n	font-family:Times New Roman;\n	font-weight:bold;\n	color:#ffffff;\n}\n.CSSTableGenerator tr:first-child:hover td{\n	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );\n	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );\n	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#005fbf\', endColorstr=\'#003f7f\');	background: -o-linear-gradient(top,#005fbf,003f7f);\n\n	background-color:#005fbf;\n}\n.CSSTableGenerator tr:first-child td:first-child{\n	border-width:0px 0px 1px 0px;\n}\n.CSSTableGenerator tr:first-child td:last-child{\n	border-width:0px 0px 1px 1px;\n}\n&lt;/style&gt;\n\n	&lt;h1&gt;\n			El detalle de su mensaje es el siguientes:&lt;/h1&gt;\n			&lt;div class=\'CSSTableGenerator\' &gt;\n		&lt;table border=\'0\' cellpadding=\'1\' cellspacing=\'1\' style=\'width: 600px;\'\'&gt;\n				&lt;tr&gt;\n					&lt;td width=\'35%\'&gt;\n						Nombre Usuario&lt;/td&gt;\n					&lt;td width=\'20%\'&gt;\n						Email&lt;/td&gt;\n					&lt;td width=\'40%\'&gt;\n						Detalle del Mensaje&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;tr&gt;\n					&lt;td&gt;mauricio cantor&lt;/td&gt;\n					&lt;td&gt;mauricio.cantor.p@hotmail.com&lt;/td&gt;\n					&lt;td&gt;prueba mensajes sialens&lt;/td&gt;\n				&lt;/tr&gt;				\n			&lt;/table&gt;\n		&lt;/div&gt;\n		&lt;hr /&gt;\n		&lt;p&gt;\n			En pocos momentos lo contactaremos.&lt;/p&gt;\n		&lt;p&gt;\n			Visitenos en &lt;a href=\'www.sialen.com\'&gt;www.Sialen.com&lt;/a&gt;&lt;/p&gt;', 'info@sialen.com', 'mauricio.optime@hotmail.com', '', '6');
INSERT INTO `det_email` VALUES ('2', '\n	&lt;style type=\'text/css\'&gt;\n\n	body{\n		background:#F7F6F6;\n	}\n\n .CSSTableGenerator {\n 	text-align:center;\n	margin:auto;padding:0px;\n	width:600px;\n	box-shadow: 10px 10px 5px #888888;\n	border:1px solid #000000;\n	\n	-moz-border-radius-bottomleft:0px;\n	-webkit-border-bottom-left-radius:0px;\n	border-bottom-left-radius:0px;\n	\n	-moz-border-radius-bottomright:0px;\n	-webkit-border-bottom-right-radius:0px;\n	border-bottom-right-radius:0px;\n	\n	-moz-border-radius-topright:0px;\n	-webkit-border-top-right-radius:0px;\n	border-top-right-radius:0px;\n	\n	-moz-border-radius-topleft:0px;\n	-webkit-border-top-left-radius:0px;\n	border-top-left-radius:0px;\n}.CSSTableGenerator table{\n    border-collapse: collapse;\n        border-spacing: 0;\n	width:100%;\n	height:100%;\n	margin:auto;padding:0px;\n}.CSSTableGenerator tr:last-child td:last-child {\n	-moz-border-radius-bottomright:0px;\n	-webkit-border-bottom-right-radius:0px;\n	border-bottom-right-radius:0px;\n}\n.CSSTableGenerator table tr:first-child td:first-child {\n	-moz-border-radius-topleft:0px;\n	-webkit-border-top-left-radius:0px;\n	border-top-left-radius:0px;\n}\n.CSSTableGenerator table tr:first-child td:last-child {\n	-moz-border-radius-topright:0px;\n	-webkit-border-top-right-radius:0px;\n	border-top-right-radius:0px;\n}.CSSTableGenerator tr:last-child td:first-child{\n	-moz-border-radius-bottomleft:0px;\n	-webkit-border-bottom-left-radius:0px;\n	border-bottom-left-radius:0px;\n}.CSSTableGenerator tr:hover td{\n	\n}\n.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }\n.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{\n	vertical-align:middle;\n	\n	\n	border:1px solid #000000;\n	border-width:0px 1px 1px 0px;\n	text-align:left;\n	padding:7px;\n	font-size:13px;\n	font-family:Times New Roman;\n	font-weight:normal;\n	color:#000000;\n}.CSSTableGenerator tr:last-child td{\n	border-width:0px 1px 0px 0px;\n}.CSSTableGenerator tr td:last-child{\n	border-width:0px 0px 1px 0px;\n}.CSSTableGenerator tr:last-child td:last-child{\n	border-width:0px 0px 0px 0px;\n}\n.CSSTableGenerator tr:first-child td{\n		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );\n	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );\n	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#005fbf\', endColorstr=\'#003f7f\');	background: -o-linear-gradient(top,#005fbf,003f7f);\n\n	background-color:#005fbf;\n	border:0px solid #000000;\n	text-align:center;\n	border-width:0px 0px 1px 1px;\n	font-size:18px;\n	font-family:Times New Roman;\n	font-weight:bold;\n	color:#ffffff;\n}\n.CSSTableGenerator tr:first-child:hover td{\n	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );\n	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );\n	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#005fbf\', endColorstr=\'#003f7f\');	background: -o-linear-gradient(top,#005fbf,003f7f);\n\n	background-color:#005fbf;\n}\n.CSSTableGenerator tr:first-child td:first-child{\n	border-width:0px 0px 1px 0px;\n}\n.CSSTableGenerator tr:first-child td:last-child{\n	border-width:0px 0px 1px 1px;\n}\n&lt;/style&gt;\n\n	&lt;h1&gt;\n			El detalle de su mensaje es el siguientes:&lt;/h1&gt;\n			&lt;div class=\'CSSTableGenerator\' &gt;\n		&lt;table border=\'0\' cellpadding=\'1\' cellspacing=\'1\' style=\'width: 600px;\'\'&gt;\n				&lt;tr&gt;\n					&lt;td width=\'35%\'&gt;\n						Nombre Usuario&lt;/td&gt;\n					&lt;td width=\'20%\'&gt;\n						Email&lt;/td&gt;\n					&lt;td width=\'40%\'&gt;\n						Detalle del Mensaje&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;tr&gt;\n					&lt;td&gt;mauricio cantor&lt;/td&gt;\n					&lt;td&gt;mauricio.cantor.p@hotmail.com&lt;/td&gt;\n					&lt;td&gt;prueba mensajes sialen &lt;/td&gt;\n				&lt;/tr&gt;				\n			&lt;/table&gt;\n		&lt;/div&gt;\n		&lt;hr /&gt;\n		&lt;p&gt;\n			En pocos momentos lo contactaremos.&lt;/p&gt;\n		&lt;p&gt;\n			Visitenos en &lt;a href=\'www.sialen.com\'&gt;www.Sialen.com&lt;/a&gt;&lt;/p&gt;', 'info@sialen.com', 'mauricio.optime@hotmail.com', '', '7');
INSERT INTO `det_email` VALUES ('3', '', '', '', '', '8');
INSERT INTO `det_email` VALUES ('4', '', '', '', '', '9');
INSERT INTO `det_email` VALUES ('5', '', '', '', '', '10');
INSERT INTO `det_email` VALUES ('6', '', '', '', '', '11');
INSERT INTO `det_email` VALUES ('7', '', '', '', '', '12');
INSERT INTO `det_email` VALUES ('8', '', '', '', '', '13');
INSERT INTO `det_email` VALUES ('9', '', '', '', '', '14');
INSERT INTO `det_email` VALUES ('10', '', '', '', '', '15');
INSERT INTO `det_email` VALUES ('11', '', '', '', '', '16');
INSERT INTO `det_email` VALUES ('12', '', '', '', '', '17');
INSERT INTO `det_email` VALUES ('13', '', '', '', '', '18');
INSERT INTO `det_email` VALUES ('14', '', '', '', '', '19');
INSERT INTO `det_email` VALUES ('15', '', '', '', '', '20');
INSERT INTO `det_email` VALUES ('16', '', '', '', '', '21');
INSERT INTO `det_email` VALUES ('17', '', '', '', '', '22');
INSERT INTO `det_email` VALUES ('18', '', '', '', '', '23');
INSERT INTO `det_email` VALUES ('19', '', '', '', '', '24');
INSERT INTO `det_email` VALUES ('20', '', '', '', '', '25');
INSERT INTO `det_email` VALUES ('21', '', '', '', '', '26');
INSERT INTO `det_email` VALUES ('22', '', '', '', '', '27');
INSERT INTO `det_email` VALUES ('23', '', '', '', '', '28');
INSERT INTO `det_email` VALUES ('24', '', '', '', '', '29');
INSERT INTO `det_email` VALUES ('25', '', '', '', '', '30');
INSERT INTO `det_email` VALUES ('26', '', '', '', '', '31');
INSERT INTO `det_email` VALUES ('27', '', '', '', '', '32');
INSERT INTO `det_email` VALUES ('28', '', '', '', '', '33');
INSERT INTO `det_email` VALUES ('29', '', '', '', '', '34');
INSERT INTO `det_email` VALUES ('30', '', '', '', '', '35');
INSERT INTO `det_email` VALUES ('31', '', '', '', '', '36');

-- ----------------------------
-- Table structure for `email`
-- ----------------------------
DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `id_Email` int(6) NOT NULL AUTO_INCREMENT,
  `Remitente_Email` varchar(255) NOT NULL,
  `Asunto_Email` varchar(255) NOT NULL,
  `Fecha_crea_Email` datetime NOT NULL,
  `Fecha_envio_email` datetime DEFAULT NULL,
  PRIMARY KEY (`id_Email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of email
-- ----------------------------
INSERT INTO `email` VALUES ('3', 'mauricio.cantor.p@hotmail.com', 'Mensaje Recibido Satisfactoriamente', '2014-01-21 20:41:20', '2014-01-21 20:41:20');
INSERT INTO `email` VALUES ('4', 'mauricio.cantor.p@hotmail.com', 'Mensaje Recibido Satisfactoriamente', '2014-01-21 20:44:19', '2014-01-21 20:44:19');
INSERT INTO `email` VALUES ('5', 'mauricio.cantor.p@hotmail.com', 'Mensaje Recibido Satisfactoriamente', '2014-01-21 20:45:17', '2014-01-21 20:45:17');
INSERT INTO `email` VALUES ('6', 'mauricio.cantor.p@hotmail.com', 'Mensaje Recibido Satisfactoriamente', '2014-01-21 20:51:52', '2014-01-21 20:51:52');
INSERT INTO `email` VALUES ('7', 'mauricio.cantor.p@hotmail.com', 'Mensaje Recibido Satisfactoriamente', '2014-01-21 20:59:25', '2014-01-21 20:59:25');
INSERT INTO `email` VALUES ('8', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:36:15', '2014-08-06 12:36:15');
INSERT INTO `email` VALUES ('9', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:40:34', '2014-08-06 12:40:34');
INSERT INTO `email` VALUES ('10', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:44:04', '2014-08-06 12:44:04');
INSERT INTO `email` VALUES ('11', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:44:50', '2014-08-06 12:44:50');
INSERT INTO `email` VALUES ('12', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:45:01', '2014-08-06 12:45:01');
INSERT INTO `email` VALUES ('13', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:54:40', '2014-08-06 12:54:40');
INSERT INTO `email` VALUES ('14', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:54:43', '2014-08-06 12:54:43');
INSERT INTO `email` VALUES ('15', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:56:12', '2014-08-06 12:56:12');
INSERT INTO `email` VALUES ('16', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 12:56:14', '2014-08-06 12:56:14');
INSERT INTO `email` VALUES ('17', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:00:32', '2014-08-06 13:00:32');
INSERT INTO `email` VALUES ('18', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:00:35', '2014-08-06 13:00:35');
INSERT INTO `email` VALUES ('19', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:01:44', '2014-08-06 13:01:44');
INSERT INTO `email` VALUES ('20', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:01:47', '2014-08-06 13:01:47');
INSERT INTO `email` VALUES ('21', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:02:32', '2014-08-06 13:02:32');
INSERT INTO `email` VALUES ('22', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:02:35', '2014-08-06 13:02:35');
INSERT INTO `email` VALUES ('23', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:04:49', '2014-08-06 13:04:49');
INSERT INTO `email` VALUES ('24', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 13:04:52', '2014-08-06 13:04:52');
INSERT INTO `email` VALUES ('25', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:05:04', '2014-08-06 14:05:04');
INSERT INTO `email` VALUES ('26', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:05:07', '2014-08-06 14:05:07');
INSERT INTO `email` VALUES ('27', 'aioros105@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:05:10', '2014-08-06 14:05:10');
INSERT INTO `email` VALUES ('28', 'andygadel@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:05:12', '2014-08-06 14:05:12');
INSERT INTO `email` VALUES ('29', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:26:36', '2014-08-06 14:26:36');
INSERT INTO `email` VALUES ('30', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:26:43', '2014-08-06 14:26:43');
INSERT INTO `email` VALUES ('31', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:27:45', '2014-08-06 14:27:45');
INSERT INTO `email` VALUES ('32', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:27:56', '2014-08-06 14:27:56');
INSERT INTO `email` VALUES ('33', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:29:19', '2014-08-06 14:29:19');
INSERT INTO `email` VALUES ('34', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:29:23', '2014-08-06 14:29:23');
INSERT INTO `email` VALUES ('35', 'mauricio.cantor.p@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:32:58', '2014-08-06 14:32:58');
INSERT INTO `email` VALUES ('36', 'topomajor1@hotmail.com', 'Ingresa al Mundo Digital', '2014-08-06 14:33:00', '2014-08-06 14:33:00');

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

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(2) NOT NULL,
  `name_menu` varchar(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `orden` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '0', 'Home', '/sialen/', '1', '1', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('2', '0', 'Servicios', 'servicios.php', '3', '1', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('3', '1', 'Actividad Comercial', 'control_actividad', '1', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('4', '1', 'Barrios', '#', '2', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('5', '1', 'Cargos Directivos', '#', '3', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('6', '1', 'Ciudades', '#', '4', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('7', '1', 'Comercio Internacional', '#', '5', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('8', '1', 'Correos', '#', '6', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('9', '1', 'Directivos de Empresas', '#', '7', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('10', '1', 'Empresas', 'admin_empresas.php', '8', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('11', '1', 'Usuario', 'admin_usuario.php', '9', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('12', '1', 'Turnos por Empresa', 'admin_turnos_empresas.php', '10', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('13', '22', 'Asignacion Turnos', 'admin_asigna_turnos.php', '11', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('14', '1', 'Telefonos', '#', '12', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('15', '1', 'Usuarios', '#', '13', '1', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('16', '1', 'Salir', '../index.php', '14', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('17', '2', 'Datos Directivos', 'control_directivos', '1', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('18', '2', 'Directivos Principales', '#', '2', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('19', '2', 'Ciudades y Barrios', '#', '3', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('20', '2', 'Empresas Y Directivos', '#', '4', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('21', '2', 'Sedes Y Empresas', '#', '5', '0', '2013-02-21', '2013-02-21');
INSERT INTO `menu` VALUES ('22', '0', 'Productos', '#', '5', '1', '2013-10-24', '2013-10-24');
INSERT INTO `menu` VALUES ('23', '0', 'Contactos', '#', '4', '1', '2013-10-24', '2013-10-24');

-- ----------------------------
-- Table structure for `menu_x_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `menu_x_profiles`;
CREATE TABLE `menu_x_profiles` (
  `id_menu_profile` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_profile` int(2) NOT NULL,
  PRIMARY KEY (`id_menu_profile`),
  KEY `fk_menu_x_profiles_menu1_idx` (`id_menu`),
  CONSTRAINT `menu_x_profiles_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu_x_profiles
-- ----------------------------
INSERT INTO `menu_x_profiles` VALUES ('1', '1', '1');
INSERT INTO `menu_x_profiles` VALUES ('2', '2', '1');
INSERT INTO `menu_x_profiles` VALUES ('9', '9', '1');
INSERT INTO `menu_x_profiles` VALUES ('11', '11', '1');
INSERT INTO `menu_x_profiles` VALUES ('13', '13', '1');
INSERT INTO `menu_x_profiles` VALUES ('14', '14', '1');
INSERT INTO `menu_x_profiles` VALUES ('16', '16', '1');
INSERT INTO `menu_x_profiles` VALUES ('17', '17', '1');
INSERT INTO `menu_x_profiles` VALUES ('18', '18', '1');
INSERT INTO `menu_x_profiles` VALUES ('19', '19', '1');
INSERT INTO `menu_x_profiles` VALUES ('20', '20', '1');
INSERT INTO `menu_x_profiles` VALUES ('21', '21', '1');
INSERT INTO `menu_x_profiles` VALUES ('22', '1', '2');
INSERT INTO `menu_x_profiles` VALUES ('23', '2', '2');
INSERT INTO `menu_x_profiles` VALUES ('37', '16', '2');
INSERT INTO `menu_x_profiles` VALUES ('40', '19', '2');
INSERT INTO `menu_x_profiles` VALUES ('41', '20', '2');
INSERT INTO `menu_x_profiles` VALUES ('42', '21', '2');
INSERT INTO `menu_x_profiles` VALUES ('43', '1', '3');
INSERT INTO `menu_x_profiles` VALUES ('44', '2', '3');
INSERT INTO `menu_x_profiles` VALUES ('45', '3', '3');
INSERT INTO `menu_x_profiles` VALUES ('46', '4', '3');
INSERT INTO `menu_x_profiles` VALUES ('47', '5', '3');
INSERT INTO `menu_x_profiles` VALUES ('48', '6', '3');
INSERT INTO `menu_x_profiles` VALUES ('49', '7', '3');
INSERT INTO `menu_x_profiles` VALUES ('50', '8', '3');
INSERT INTO `menu_x_profiles` VALUES ('51', '9', '3');
INSERT INTO `menu_x_profiles` VALUES ('52', '10', '3');
INSERT INTO `menu_x_profiles` VALUES ('53', '11', '3');
INSERT INTO `menu_x_profiles` VALUES ('54', '12', '1');
INSERT INTO `menu_x_profiles` VALUES ('55', '13', '3');
INSERT INTO `menu_x_profiles` VALUES ('56', '14', '3');
INSERT INTO `menu_x_profiles` VALUES ('57', '15', '3');
INSERT INTO `menu_x_profiles` VALUES ('58', '16', '3');
INSERT INTO `menu_x_profiles` VALUES ('59', '17', '3');
INSERT INTO `menu_x_profiles` VALUES ('60', '18', '3');
INSERT INTO `menu_x_profiles` VALUES ('61', '19', '3');
INSERT INTO `menu_x_profiles` VALUES ('62', '20', '3');
INSERT INTO `menu_x_profiles` VALUES ('63', '21', '3');
INSERT INTO `menu_x_profiles` VALUES ('64', '10', '1');
INSERT INTO `menu_x_profiles` VALUES ('65', '22', '1');
INSERT INTO `menu_x_profiles` VALUES ('66', '23', '1');

-- ----------------------------
-- Table structure for `noticias`
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `fech_noticia` datetime NOT NULL,
  `titulo_noticia` varchar(255) NOT NULL,
  `detalle_noticia` mediumtext NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', '2014-01-05 07:00:00', 'Prueba 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
INSERT INTO `noticias` VALUES ('2', '2014-01-06 15:57:30', 'Prueba 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
INSERT INTO `noticias` VALUES ('3', '2014-01-05 14:58:29', 'Prueba 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');
INSERT INTO `noticias` VALUES ('4', '2014-01-04 09:59:10', 'Prueba 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');

-- ----------------------------
-- Table structure for `parameter`
-- ----------------------------
DROP TABLE IF EXISTS `parameter`;
CREATE TABLE `parameter` (
  `id_par` int(3) NOT NULL AUTO_INCREMENT,
  `parameter_key` varchar(255) NOT NULL,
  `parameter_value` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `show_parameter` int(1) NOT NULL,
  `parameter_type` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_par`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of parameter
-- ----------------------------
INSERT INTO `parameter` VALUES ('1', 'host_ms', 'localhost', 'ruta de host para el mysql', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('2', 'nombre_ms', 'sialen', 'Nombre de la BD de acceso', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('3', 'user_ms', 'root', 'Usuario de Acceso a la Base de datos', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('4', 'pass_ms', '', 'Password de acceso a la BD', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('5', 'host_mail', 'mail.sialen.com', 'Host utilizado en el envio de correo', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('6', 'port_mail', '587', 'Puerto para envio de mensajes', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('7', 'user_mail', 'mcantor@sialen.com', 'Usuario para el envio de correos electronicos ', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('8', 'pass_mail', 'SLmc040713', 'Password para el envio de email', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('9', 'captcha_publickey', '6LfdWu0SAAAAAJKLpqzRSlMUMIH9sVV_UKfcu1GQ', 'Public_key para el recapcha', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('10', 'captcha_privatekey', '6LfdWu0SAAAAANI2W3vWp5u0xTRoe2xiGcqpG2TA', 'Private_key para el recapcha', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('11', 'email_proyecto', 'proyectos@sialen.com', 'Email de proyectos', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('12', 'email_bd', 'dba@sialen.com', 'Email de Bases de Datos', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('13', 'email_soporte', 'soporte@sialen.com', 'Email de Soporte', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('14', 'email_programacion', 'programacion@sialen.com', 'Email de programacion', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('15', 'cod_analitycs', 'UA-47370502-1', 'Codigo de acceso para el google analitycs', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('16', 'twitter_sialen', 'https://twitter.com/sialeningeniero', 'Url de acceso al twtter', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('17', 'facebook_sialen', 'https://www.facebook.com/SialenIngenieros', 'Url de acceso al facebook', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('18', 'redirect_uri_fb', 'http://localhost/sialen/facebook/registro_fb.php', 'Redirect para el facebook cuando se realza el registro', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('19', 'appId_fb', '452770731490324', 'app_ID facebook', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('20', 'secret_fb', '262f48371c4dee06f993f8e5fe3674fc', 'secret_fb facebook', '1', '1', '2014-01-29 16:19:38', null);
INSERT INTO `parameter` VALUES ('21', 'email_info', 'info@sialen.com', 'Email de informacion', '1', '1', '2014-01-29 16:19:38', null);

-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id_prod` int(3) NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(255) NOT NULL,
  `det_prod` mediumtext NOT NULL,
  `fech_crea` date NOT NULL,
  `fech_mod` date DEFAULT NULL,
  `id_status` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id_prod`),
  UNIQUE KEY `nom_prod_UNIQUE` (`nom_prod`),
  KEY `fk_producto_status1_idx` (`id_status`),
  CONSTRAINT `fk_producto_status1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producto
-- ----------------------------

-- ----------------------------
-- Table structure for `servicios`
-- ----------------------------
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id_servicio` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `tit_serv` varchar(255) NOT NULL,
  `det_serv` mediumtext NOT NULL,
  `img_serv` varchar(255) DEFAULT NULL,
  `fech_creac` date NOT NULL,
  `fech_mod` date DEFAULT NULL,
  `id_status` int(2) unsigned NOT NULL,
  `order` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `fk_servicios_status_servicios1_idx` (`id_status`),
  CONSTRAINT `fk_servicios_status_servicios1` FOREIGN KEY (`id_status`) REFERENCES `status_servicios` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicios
-- ----------------------------
INSERT INTO `servicios` VALUES ('2', 'Desarrollo Web', 'Dise&ntilde;o y desarrollo de sistemas Web, enfocando la construcci&oacute;n de las paginas en <span class=\'green\'>HTML5</span>, <span class=\'green\'>CSS3</span> y a su vez generando vistas din&aacute;micas con el apoyo de <span class=\'red\'>JQuery</span>, totalmente adaptables y de f&aacute;cil uso para los usuarios con los que cuente.', null, '2014-01-08', '2014-01-08', '1', '1');
INSERT INTO `servicios` VALUES ('4', 'Consultor&iacute;a en p&aacute;gina Web', 'Brindar apoyo a las empresas en el aseguramiento de la informaci&oacute;n y a su vez dar asesor&iacute;a en la construcci&oacute;n de p&aacute;ginas Web y sus diferentes etapas', null, '2014-01-08', '2014-01-08', '1', '3');
INSERT INTO `servicios` VALUES ('7', 'Desarrollo de software a la medida ', 'Construir sistemas de informaci&oacute;n que &nbsp;se adapten a las necesidades que pueda tener un usuario o una empresa, realizando todos los pasos necesarios para la gesti&oacute;n y documentaci&oacute;n del proyecto, esto con el fin de asegurar la calidad desea para lograr la satisfacci&oacute;n de cada una de las partes involucradas en el proyecto.', null, '2014-01-08', '2014-01-08', '1', '2');
INSERT INTO `servicios` VALUES ('8', 'An&aacute;lisis y dise&ntilde;o de Bases de Datos', 'Sialen ingenieros ofrece el servicio de An&aacute;lisis, Dise&ntilde;o y Desarrollo de Bases de Datos en <u>MySql</u>,&nbsp; <u>Postgres</u>, <u>SQL Server</u> y <u>Oracle</u>, seg&uacute;n sea la necesidad de la empresa o usuario que lo requiera. Para satisfacer el requerimiento, Sialen pone a disposici&oacute;n de las empresas, consultores especializados en estos procesos.', null, '2014-01-08', '2014-01-08', '1', '4');
INSERT INTO `servicios` VALUES ('9', 'Campa&ntilde;as de conectividad a travez de call center', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', null, '2014-01-08', '2014-01-08', '1', '5');
INSERT INTO `servicios` VALUES ('11', 'Estudios Sociodemogr&aacute;ficos, cartogr&aacute;ficos de mapeos y ruteo&nbsp;', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', null, '2014-01-08', '2014-01-08', '1', '6');
INSERT INTO `servicios` VALUES ('12', 'Desarrollo Web con &eacute;nfasis en SIG&nbsp;', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', null, '2014-01-08', '2014-01-08', '1', '7');
INSERT INTO `servicios` VALUES ('13', 'Soporte t&eacute;cnico', 'Nuestro &uacute;nico fin es cumplir con la satisfacci&oacute;n del cliente&hellip; por ese motivo, pensamos en la calidad de nuestros servicios a nivel de mantenimiento de sus computadores y dispositivos con las mejores herramientas tecnol&oacute;gicas, brindando seguridad con el uso de las mismas. As&iacute; como nuestros clientes&hellip; nosotros tambi&eacute;n pensamos en el ahorro costo sin perder la calidad del servicio, garant&iacute;a y seguridad de su informaci&oacute;n al momento de realizar cualquier tipo de mantenimiento u operaci&oacute;n en sus equipos de c&oacute;mputo. D&iacute;a a d&iacute;a demostramos nuestras mejoras en la tecnolog&iacute;a del servicio y cuidado de sus equipos tanto a nivel hardware como software.&nbsp; <br><br> Proyect&aacute;ndonos hacia el futuro y la comodidad de su bolsillo y tiempo, si no es posible el acercarse con nosotros, asistiremos donde usted se encuentre y realizaremos el servicio con un tiempo de respuesta m&iacute;nimo.', null, '2014-01-08', '2014-01-08', '1', '8');

-- ----------------------------
-- Table structure for `status`
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id_status` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nom_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('1', 'Activo');
INSERT INTO `status` VALUES ('2', 'Inactivo');

-- ----------------------------
-- Table structure for `status_servicios`
-- ----------------------------
DROP TABLE IF EXISTS `status_servicios`;
CREATE TABLE `status_servicios` (
  `id_status` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nom_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status_servicios
-- ----------------------------
INSERT INTO `status_servicios` VALUES ('1', 'Activo');
INSERT INTO `status_servicios` VALUES ('2', 'Inactivo');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `genero` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('3', '1035346417', 'mauricio.cantor', 'topomajor1@hotmail.com', 'male');
