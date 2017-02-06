/*
Navicat MySQL Data Transfer

Source Server         : localhost-MySQL
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : fleshka

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2017-02-06 17:31:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yu_articles
-- ----------------------------
DROP TABLE IF EXISTS `yu_articles`;
CREATE TABLE `yu_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_articles
-- ----------------------------
INSERT INTO `yu_articles` VALUES ('1', 'test', 'qweqwe', '<p>qwqwqwe</p>\r\n', '2016-11-20 01:16:26', '1', 'ducklings_pair-1440x900.jpg', null, null);

-- ----------------------------
-- Table structure for yu_categories
-- ----------------------------
DROP TABLE IF EXISTS `yu_categories`;
CREATE TABLE `yu_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_categories
-- ----------------------------
INSERT INTO `yu_categories` VALUES ('55', 'Флешки к 23 февраля оптом', '0', 'picture652bcrz5_big.jpg.pagespeed.ce.Bgefyau-ng.jpg');
INSERT INTO `yu_categories` VALUES ('56', 'Флешки к 8 Марта оптом', '0', 'file-51384d8fe338b.jpg.pagespeed.ce.LLre0iz24C.jpg');
INSERT INTO `yu_categories` VALUES ('57', 'Ювелирные флешки оптом', '0', '51RZu3RC-jL._SY300_.jpg.pagespeed.ce.sSapayjlHF.jpg');
INSERT INTO `yu_categories` VALUES ('58', 'Бюджетные флешки оптом', '0', '2312421.jpg.pagespeed.ce.Mdl8MOXo7a.jpg');
INSERT INTO `yu_categories` VALUES ('59', 'Флешки из металла оптом', '0', '70_1385720862.jpg.pagespeed.ce.ErbusrBrsa.jpg');
INSERT INTO `yu_categories` VALUES ('60', 'Флешки из пластика оптом', '0', 'usb_disk_6_56285.jpg.pagespeed.ce.A5aObFaOAF.jpg');
INSERT INTO `yu_categories` VALUES ('61', 'Флешки из дерева оптом', '0', 'f7858ccd-e667-4885-84ec-73a80f972558_s.jpg.pagespeed.ce._nT9WYS9dt.jpg');
INSERT INTO `yu_categories` VALUES ('62', 'Флешки-визитки оптом', '0', 'custom_metal_ultrathin_vip_credit.jpg.pagespeed.ce.XpO6izyWR2.jpg');
INSERT INTO `yu_categories` VALUES ('63', 'Флешки из кожи оптом', '0', 'Free-Shipping-Leather-Metal.jpg.pagespeed.ce.vPgoTMSMmG.jpg');
INSERT INTO `yu_categories` VALUES ('64', 'Флешки-браслеты оптом', '0', '2012-07-30_184331.png.pagespeed.ce.wKXddhfr0d.png');
INSERT INTO `yu_categories` VALUES ('65', 'Флешки по индивидуальному дизайну', '0', 'usb-gbdd.jpg');
INSERT INTO `yu_categories` VALUES ('66', 'Брендовые флешки оптом', '0', '160596.png.pagespeed.ce.0jLK0Ho-7Y.png');
INSERT INTO `yu_categories` VALUES ('67', 'Светящиеся флешки оптом', '0', '2015-NEW-Avengers-Iron-Man.jpg.pagespeed.ce.5BgLZFFaFn.jpg');
INSERT INTO `yu_categories` VALUES ('68', 'Флешки-ручки оптом', '0', 'usb-flash-drive-pen.jpeg.pagespeed.ce.qFyRnV_nbj.jpg');
INSERT INTO `yu_categories` VALUES ('69', 'Все флешки под логотип', '0', 'usbflashlogo.jpg.pagespeed.ce.zy9_M5qLsc.jpg');
INSERT INTO `yu_categories` VALUES ('70', 'Флешки с мини-чипом', '0', '923mini2-GD_01.jpg.pagespeed.ce.IORIwhxshT.jpg');
INSERT INTO `yu_categories` VALUES ('71', 'Флешки-брелки оптом', '0', 'bigprestigio.jpg.pagespeed.ce.qe3PZEjLFp.jpg');
INSERT INTO `yu_categories` VALUES ('72', 'Подарочные флешки оптом', '0', 'foto_002.jpg.pagespeed.ce.EUjavI4y8_.jpg');
INSERT INTO `yu_categories` VALUES ('73', 'Оригинальные флешки оптом', '0', 'gamburger.jpg.pagespeed.ce.o37oRYlOFv.jpg');
INSERT INTO `yu_categories` VALUES ('74', 'Сувенирные флешки оптом', '0', 'tampo_fleshki.png.pagespeed.ce.9qw5HRmwl1.png');
INSERT INTO `yu_categories` VALUES ('75', 'Детские флешки оптом', '0', '5245423534.jpg.pagespeed.ce.sWXI__hqvt.jpg');
INSERT INTO `yu_categories` VALUES ('76', 'Аквафлешки оптом', '0', '1223366051_02.jpg.pagespeed.ce.-U1O6-RY8I.jpg');
INSERT INTO `yu_categories` VALUES ('77', 'Флешки-часы оптом', '0', 'usb-watch-1.jpg.pagespeed.ce.ook7KEytub.jpg');
INSERT INTO `yu_categories` VALUES ('78', 'Флешки-буклеты оптом', '0', 'da95be42d7b1eb461e3b5b6df693d69c.jpg.pagespeed.ce.e6Ihmrk-kQ.jpg');
INSERT INTO `yu_categories` VALUES ('79', 'Упаковка для флешек оптом', '0', 'cardboardboxforflashdrives_0.jpg.pagespeed.ce.NGL4KMJgvc.jpg');
INSERT INTO `yu_categories` VALUES ('80', 'Флешки OTG оптом', '0', 'otgusb.jpg.pagespeed.ce.HDQpCTmr3L.jpg');
INSERT INTO `yu_categories` VALUES ('81', 'Флешки-кристаллы оптом', '0', 'glass-usb-tool.jpg.pagespeed.ce.X_9vivlKYy.jpg');
INSERT INTO `yu_categories` VALUES ('82', 'Ладошки-трещотки оптом', '0', 'treshotka.jpg');
INSERT INTO `yu_categories` VALUES ('83', 'Фрисби оптом под логотип', '0', 'Frisbi2i_enl.jpg.pagespeed.ce.Lt4GIj2ZJY.jpg');
INSERT INTO `yu_categories` VALUES ('84', 'Зарядные устройства - Портативные аккумуляторы PowerBank оптом', '0', 'powerbanks.jpg.pagespeed.ce.Z88KTLuE_G.jpg');
INSERT INTO `yu_categories` VALUES ('85', 'Мышки под нанесение логотипа оптом', '0', 'steelseries-kinzu-v2-yellow_back-image.jpeg.pagespeed.ce.x3YwJR3GqH.jpg');
INSERT INTO `yu_categories` VALUES ('86', 'Дудки болельщика под логотип оптом', '0', 'dudki.jpeg');
INSERT INTO `yu_categories` VALUES ('87', 'Сувениры оптом', '0', 'IMG_20160506_155413.jpg.pagespeed.ce.uLCezWzo2h.jpg');

-- ----------------------------
-- Table structure for yu_category_to_page
-- ----------------------------
DROP TABLE IF EXISTS `yu_category_to_page`;
CREATE TABLE `yu_category_to_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_category_to_page
-- ----------------------------
INSERT INTO `yu_category_to_page` VALUES ('1', '55', '1');
INSERT INTO `yu_category_to_page` VALUES ('2', '55', '2');
INSERT INTO `yu_category_to_page` VALUES ('3', '55', '3');
INSERT INTO `yu_category_to_page` VALUES ('4', '55', '4');
INSERT INTO `yu_category_to_page` VALUES ('5', '55', '5');
INSERT INTO `yu_category_to_page` VALUES ('6', '55', '6');
INSERT INTO `yu_category_to_page` VALUES ('7', '55', '7');
INSERT INTO `yu_category_to_page` VALUES ('8', '55', '8');
INSERT INTO `yu_category_to_page` VALUES ('9', '55', '9');
INSERT INTO `yu_category_to_page` VALUES ('10', '55', '10');
INSERT INTO `yu_category_to_page` VALUES ('11', '55', '11');
INSERT INTO `yu_category_to_page` VALUES ('12', '55', '12');
INSERT INTO `yu_category_to_page` VALUES ('13', '55', '13');
INSERT INTO `yu_category_to_page` VALUES ('14', '55', '14');
INSERT INTO `yu_category_to_page` VALUES ('15', '55', '15');
INSERT INTO `yu_category_to_page` VALUES ('16', '55', '16');
INSERT INTO `yu_category_to_page` VALUES ('17', '56', '17');
INSERT INTO `yu_category_to_page` VALUES ('18', '56', '18');
INSERT INTO `yu_category_to_page` VALUES ('19', '56', '19');
INSERT INTO `yu_category_to_page` VALUES ('20', '56', '20');
INSERT INTO `yu_category_to_page` VALUES ('21', '56', '21');
INSERT INTO `yu_category_to_page` VALUES ('22', '56', '22');
INSERT INTO `yu_category_to_page` VALUES ('23', '57', '23');
INSERT INTO `yu_category_to_page` VALUES ('24', '57', '24');
INSERT INTO `yu_category_to_page` VALUES ('25', '57', '25');
INSERT INTO `yu_category_to_page` VALUES ('26', '57', '17');
INSERT INTO `yu_category_to_page` VALUES ('27', '57', '18');
INSERT INTO `yu_category_to_page` VALUES ('28', '57', '26');
INSERT INTO `yu_category_to_page` VALUES ('29', '57', '19');
INSERT INTO `yu_category_to_page` VALUES ('30', '57', '27');
INSERT INTO `yu_category_to_page` VALUES ('31', '57', '28');
INSERT INTO `yu_category_to_page` VALUES ('32', '57', '29');
INSERT INTO `yu_category_to_page` VALUES ('33', '57', '30');
INSERT INTO `yu_category_to_page` VALUES ('34', '57', '31');
INSERT INTO `yu_category_to_page` VALUES ('35', '57', '32');
INSERT INTO `yu_category_to_page` VALUES ('36', '57', '33');
INSERT INTO `yu_category_to_page` VALUES ('37', '57', '34');
INSERT INTO `yu_category_to_page` VALUES ('38', '57', '35');
INSERT INTO `yu_category_to_page` VALUES ('39', '57', '36');
INSERT INTO `yu_category_to_page` VALUES ('40', '57', '37');
INSERT INTO `yu_category_to_page` VALUES ('41', '58', '1');
INSERT INTO `yu_category_to_page` VALUES ('42', '58', '4');
INSERT INTO `yu_category_to_page` VALUES ('43', '58', '6');
INSERT INTO `yu_category_to_page` VALUES ('44', '58', '38');
INSERT INTO `yu_category_to_page` VALUES ('45', '58', '39');
INSERT INTO `yu_category_to_page` VALUES ('46', '59', '4');
INSERT INTO `yu_category_to_page` VALUES ('47', '59', '1');
INSERT INTO `yu_category_to_page` VALUES ('48', '59', '3');
INSERT INTO `yu_category_to_page` VALUES ('49', '59', '2');
INSERT INTO `yu_category_to_page` VALUES ('50', '59', '40');
INSERT INTO `yu_category_to_page` VALUES ('51', '59', '5');
INSERT INTO `yu_category_to_page` VALUES ('52', '59', '41');
INSERT INTO `yu_category_to_page` VALUES ('53', '59', '42');
INSERT INTO `yu_category_to_page` VALUES ('54', '59', '43');
INSERT INTO `yu_category_to_page` VALUES ('55', '59', '44');
INSERT INTO `yu_category_to_page` VALUES ('56', '59', '45');
INSERT INTO `yu_category_to_page` VALUES ('57', '59', '9');
INSERT INTO `yu_category_to_page` VALUES ('58', '59', '46');
INSERT INTO `yu_category_to_page` VALUES ('59', '59', '10');
INSERT INTO `yu_category_to_page` VALUES ('60', '59', '47');
INSERT INTO `yu_category_to_page` VALUES ('61', '59', '48');
INSERT INTO `yu_category_to_page` VALUES ('62', '59', '49');
INSERT INTO `yu_category_to_page` VALUES ('63', '59', '50');
INSERT INTO `yu_category_to_page` VALUES ('64', '59', '16');
INSERT INTO `yu_category_to_page` VALUES ('65', '60', '6');
INSERT INTO `yu_category_to_page` VALUES ('66', '60', '51');
INSERT INTO `yu_category_to_page` VALUES ('67', '60', '52');
INSERT INTO `yu_category_to_page` VALUES ('68', '60', '53');
INSERT INTO `yu_category_to_page` VALUES ('69', '60', '54');
INSERT INTO `yu_category_to_page` VALUES ('70', '60', '39');
INSERT INTO `yu_category_to_page` VALUES ('71', '60', '9');
INSERT INTO `yu_category_to_page` VALUES ('72', '60', '55');
INSERT INTO `yu_category_to_page` VALUES ('73', '60', '56');
INSERT INTO `yu_category_to_page` VALUES ('74', '60', '57');
INSERT INTO `yu_category_to_page` VALUES ('75', '60', '58');
INSERT INTO `yu_category_to_page` VALUES ('76', '60', '59');
INSERT INTO `yu_category_to_page` VALUES ('77', '60', '60');
INSERT INTO `yu_category_to_page` VALUES ('78', '60', '61');
INSERT INTO `yu_category_to_page` VALUES ('79', '60', '62');
INSERT INTO `yu_category_to_page` VALUES ('80', '60', '15');
INSERT INTO `yu_category_to_page` VALUES ('81', '61', '63');
INSERT INTO `yu_category_to_page` VALUES ('82', '61', '64');
INSERT INTO `yu_category_to_page` VALUES ('83', '61', '65');
INSERT INTO `yu_category_to_page` VALUES ('84', '61', '66');
INSERT INTO `yu_category_to_page` VALUES ('85', '61', '67');
INSERT INTO `yu_category_to_page` VALUES ('86', '61', '68');
INSERT INTO `yu_category_to_page` VALUES ('87', '61', '69');
INSERT INTO `yu_category_to_page` VALUES ('88', '61', '70');

-- ----------------------------
-- Table structure for yu_checkout
-- ----------------------------
DROP TABLE IF EXISTS `yu_checkout`;
CREATE TABLE `yu_checkout` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `prices` varchar(500) DEFAULT NULL,
  `colors` varchar(500) DEFAULT NULL,
  `session_id` varchar(128) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_checkout
-- ----------------------------

-- ----------------------------
-- Table structure for yu_checkout_status
-- ----------------------------
DROP TABLE IF EXISTS `yu_checkout_status`;
CREATE TABLE `yu_checkout_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_checkout_status
-- ----------------------------
INSERT INTO `yu_checkout_status` VALUES ('1', 'Новый');
INSERT INTO `yu_checkout_status` VALUES ('2', 'В работе');
INSERT INTO `yu_checkout_status` VALUES ('3', 'Доставлен и оплачен');
INSERT INTO `yu_checkout_status` VALUES ('4', 'Клиент ждет товар');
INSERT INTO `yu_checkout_status` VALUES ('5', 'на доставку');

-- ----------------------------
-- Table structure for yu_colors
-- ----------------------------
DROP TABLE IF EXISTS `yu_colors`;
CREATE TABLE `yu_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_colors
-- ----------------------------
INSERT INTO `yu_colors` VALUES ('1', 'Белый', '#FFFFFF');
INSERT INTO `yu_colors` VALUES ('2', 'Красный', '#FF0000');
INSERT INTO `yu_colors` VALUES ('3', 'Синий', '#0000FF');
INSERT INTO `yu_colors` VALUES ('4', 'Зеленый', '#008000');
INSERT INTO `yu_colors` VALUES ('5', 'Желтый', '#FFFF00');
INSERT INTO `yu_colors` VALUES ('6', 'Черный', '#000000');
INSERT INTO `yu_colors` VALUES ('7', 'Фиолетовый', '#8B00FF');
INSERT INTO `yu_colors` VALUES ('8', 'Голубой', '#87CEEB');
INSERT INTO `yu_colors` VALUES ('9', 'Коричневый', '#734A12');
INSERT INTO `yu_colors` VALUES ('10', 'Серый', '#808080');
INSERT INTO `yu_colors` VALUES ('11', 'Оранжевый', '#FF7600');

-- ----------------------------
-- Table structure for yu_color_to_page
-- ----------------------------
DROP TABLE IF EXISTS `yu_color_to_page`;
CREATE TABLE `yu_color_to_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_color_to_page
-- ----------------------------
INSERT INTO `yu_color_to_page` VALUES ('1', '1', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853c653fa0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('2', '1', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853c66c4cf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('3', '1', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853c67fb99.jpg');
INSERT INTO `yu_color_to_page` VALUES ('4', '1', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c7afbbf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('5', '1', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c7c43d6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('6', '1', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c7d3821.jpg');
INSERT INTO `yu_color_to_page` VALUES ('7', '2', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c9174b4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('8', '2', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c92ab51.jpg');
INSERT INTO `yu_color_to_page` VALUES ('9', '2', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c93b881.jpg');
INSERT INTO `yu_color_to_page` VALUES ('10', '2', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c956053.jpg');
INSERT INTO `yu_color_to_page` VALUES ('11', '2', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853c967a9b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('12', '2', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cab193f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('13', '2', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cac9e16.jpg');
INSERT INTO `yu_color_to_page` VALUES ('14', '2', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853caecc9f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('15', '2', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cb236f4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('16', '2', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cb47b56.jpg');
INSERT INTO `yu_color_to_page` VALUES ('17', '3', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cc9946b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('18', '3', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853ccb2170.jpg');
INSERT INTO `yu_color_to_page` VALUES ('19', '3', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cccbff2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('20', '3', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853cceaf18.jpg');
INSERT INTO `yu_color_to_page` VALUES ('21', '4', '5', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853ce3aa14.jpg');
INSERT INTO `yu_color_to_page` VALUES ('22', '4', '2', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853cf9d685.jpg');
INSERT INTO `yu_color_to_page` VALUES ('23', '4', '1', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d0d09de.jpg');
INSERT INTO `yu_color_to_page` VALUES ('24', '4', '8', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d22360d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('25', '4', '8', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d24bb85.jpg');
INSERT INTO `yu_color_to_page` VALUES ('26', '4', '8', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d2e84e8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('27', '4', '6', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d4bc297.jpg');
INSERT INTO `yu_color_to_page` VALUES ('28', '4', '3', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d650a20.jpg');
INSERT INTO `yu_color_to_page` VALUES ('29', '4', '4', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d7a15de.jpg');
INSERT INTO `yu_color_to_page` VALUES ('30', '4', '11', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853d8e6436.jpg');
INSERT INTO `yu_color_to_page` VALUES ('31', '4', '10', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853da2d530.jpg');
INSERT INTO `yu_color_to_page` VALUES ('32', '4', '10', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853da6a08b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('33', '4', '10', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853da7efed.jpg');
INSERT INTO `yu_color_to_page` VALUES ('34', '4', '10', 'fleshka-501-twist-fleshki-optom-pod-nanesenie-logotipa-589853daa6acd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('35', '5', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853dbf2321.jpg');
INSERT INTO `yu_color_to_page` VALUES ('36', '5', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853dc0f484.jpg');
INSERT INTO `yu_color_to_page` VALUES ('37', '5', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853dc1f809.jpg');
INSERT INTO `yu_color_to_page` VALUES ('38', '5', '5', 'fleshki-optom-pod-nanesenie-logotipa-589853dc3b662.jpg');
INSERT INTO `yu_color_to_page` VALUES ('39', '5', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853dd6e00e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('40', '6', '10', 'fleshki-optom-pod-nanesenie-logotipa-589853dea3ed2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('41', '6', '6', 'fleshki-optom-pod-nanesenie-logotipa-589853dfcea55.jpg');
INSERT INTO `yu_color_to_page` VALUES ('42', '6', '4', 'fleshki-optom-pod-nanesenie-logotipa-589853e1096a2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('43', '6', '1', 'fleshki-optom-pod-nanesenie-logotipa-589853e254e49.jpg');
INSERT INTO `yu_color_to_page` VALUES ('44', '6', '3', 'fleshki-optom-pod-nanesenie-logotipa-589853e3b5142.jpg');
INSERT INTO `yu_color_to_page` VALUES ('45', '6', '11', 'fleshki-optom-pod-nanesenie-logotipa-589853e54500a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('46', '6', '2', 'fleshki-optom-pod-nanesenie-logotipa-589853e687213.jpg');
INSERT INTO `yu_color_to_page` VALUES ('47', '7', '2', 'fleshki-braslety-589853e80f4f7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('48', '7', '3', 'fleshki-braslety-589853e934f71.jpg');
INSERT INTO `yu_color_to_page` VALUES ('49', '7', '6', 'fleshki-braslety-589853ea684f2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('50', '7', '5', 'fleshki-braslety-589853ebb64c5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('51', '7', '4', 'fleshki-braslety-589853ed0860d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('52', '8', '1', 'fleshka-ruchka-589853eee7147.jpg');
INSERT INTO `yu_color_to_page` VALUES ('53', '8', '1', 'fleshka-ruchka-589853ef06962.jpg');
INSERT INTO `yu_color_to_page` VALUES ('54', '8', '1', 'fleshka-ruchka-589853ef63808.jpg');
INSERT INTO `yu_color_to_page` VALUES ('55', '8', '4', 'fleshka-ruchka-589853f095b0f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('56', '8', '4', 'fleshka-ruchka-589853f0a32bf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('57', '8', '4', 'fleshka-ruchka-589853f0ae6a4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('58', '8', '3', 'fleshka-ruchka-589853f1e5d23.jpg');
INSERT INTO `yu_color_to_page` VALUES ('59', '8', '3', 'fleshka-ruchka-589853f21b9bb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('60', '8', '3', 'fleshka-ruchka-589853f229dfe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('61', '8', '6', 'fleshka-ruchka-589853f37aada.jpg');
INSERT INTO `yu_color_to_page` VALUES ('62', '8', '6', 'fleshka-ruchka-589853f39dee8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('63', '8', '6', 'fleshka-ruchka-589853f3a9784.jpg');
INSERT INTO `yu_color_to_page` VALUES ('64', '8', '2', 'fleshka-ruchka-589853f5084f6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('65', '8', '2', 'fleshka-ruchka-589853f5b6dfe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('66', '8', '2', 'fleshka-ruchka-589853f5c12d1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('67', '8', '11', 'fleshka-ruchka-589853f77fa0c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('68', '8', '11', 'fleshka-ruchka-589853f7a2f1d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('69', '8', '11', 'fleshka-ruchka-589853f7f3dfb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('70', '9', '1', 'fleshki-optom-pod-nanesenie-logotipa-589853f9520e0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('71', '9', '1', 'fleshki-optom-pod-nanesenie-logotipa-589853f9ea406.jpg');
INSERT INTO `yu_color_to_page` VALUES ('72', '9', '1', 'fleshki-optom-pod-nanesenie-logotipa-589853fa098e3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('73', '9', '3', 'fleshki-optom-pod-nanesenie-logotipa-589853fbbc4d4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('74', '9', '3', 'fleshki-optom-pod-nanesenie-logotipa-589853fbca55b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('75', '9', '3', 'fleshki-optom-pod-nanesenie-logotipa-589853fbd7db4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('76', '9', '11', 'fleshki-optom-pod-nanesenie-logotipa-589853fd2f6bf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('77', '9', '11', 'fleshki-optom-pod-nanesenie-logotipa-589853fd5da38.jpg');
INSERT INTO `yu_color_to_page` VALUES ('78', '9', '11', 'fleshki-optom-pod-nanesenie-logotipa-589853fdba919.jpg');
INSERT INTO `yu_color_to_page` VALUES ('79', '9', '4', 'fleshki-optom-pod-nanesenie-logotipa-589853ff10172.jpg');
INSERT INTO `yu_color_to_page` VALUES ('80', '9', '4', 'fleshki-optom-pod-nanesenie-logotipa-589853ff34563.jpg');
INSERT INTO `yu_color_to_page` VALUES ('81', '9', '4', 'fleshki-optom-pod-nanesenie-logotipa-589853ff4807c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('82', '9', '6', 'fleshki-optom-pod-nanesenie-logotipa-589854009e168.jpg');
INSERT INTO `yu_color_to_page` VALUES ('83', '9', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985400c2974.jpg');
INSERT INTO `yu_color_to_page` VALUES ('84', '9', '6', 'fleshki-optom-pod-nanesenie-logotipa-589854012473b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('85', '9', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985402a1427.jpg');
INSERT INTO `yu_color_to_page` VALUES ('86', '9', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985402c94f1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('87', '9', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985402ddda5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('88', '10', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985404514ad.jpg');
INSERT INTO `yu_color_to_page` VALUES ('89', '10', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985404e8868.jpg');
INSERT INTO `yu_color_to_page` VALUES ('90', '10', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985405668b7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('91', '10', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985405a2bdb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('92', '10', '5', 'fleshki-optom-pod-nanesenie-logotipa-589854072ffc1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('93', '10', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985407430b5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('94', '10', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985407521c3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('95', '10', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898540776107.jpg');
INSERT INTO `yu_color_to_page` VALUES ('96', '10', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985408ae5b7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('97', '10', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985408d6556.jpg');
INSERT INTO `yu_color_to_page` VALUES ('98', '10', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985408e46ba.jpg');
INSERT INTO `yu_color_to_page` VALUES ('99', '10', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898540a30837.jpg');
INSERT INTO `yu_color_to_page` VALUES ('100', '10', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898540a549b7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('101', '10', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898540a679fc.jpg');
INSERT INTO `yu_color_to_page` VALUES ('102', '10', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898540bacf68.jpg');
INSERT INTO `yu_color_to_page` VALUES ('103', '10', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898540bd1632.jpg');
INSERT INTO `yu_color_to_page` VALUES ('104', '10', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898540bdfda9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('105', '10', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898540d2c828.jpg');
INSERT INTO `yu_color_to_page` VALUES ('106', '10', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898540d56197.jpg');
INSERT INTO `yu_color_to_page` VALUES ('107', '10', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898540d9fae6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('108', '11', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898540f00fba.jpg');
INSERT INTO `yu_color_to_page` VALUES ('109', '11', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898540f19101.jpg');
INSERT INTO `yu_color_to_page` VALUES ('110', '11', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898540f324ac.jpg');
INSERT INTO `yu_color_to_page` VALUES ('111', '11', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898540f5750d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('112', '11', '2', 'fleshki-optom-pod-nanesenie-logotipa-589854108722a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('113', '11', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985410a3e05.jpg');
INSERT INTO `yu_color_to_page` VALUES ('114', '11', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985410bd08d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('115', '11', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985410d97ec.jpg');
INSERT INTO `yu_color_to_page` VALUES ('116', '11', '9', 'fleshki-optom-pod-nanesenie-logotipa-589854121a197.jpg');
INSERT INTO `yu_color_to_page` VALUES ('117', '11', '9', 'fleshki-optom-pod-nanesenie-logotipa-58985412313be.jpg');
INSERT INTO `yu_color_to_page` VALUES ('118', '11', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898541250748.jpg');
INSERT INTO `yu_color_to_page` VALUES ('119', '11', '9', 'fleshki-optom-pod-nanesenie-logotipa-589854126db66.jpg');
INSERT INTO `yu_color_to_page` VALUES ('120', '11', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985413aa968.jpg');
INSERT INTO `yu_color_to_page` VALUES ('121', '11', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985413bded3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('122', '11', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985413d542b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('123', '11', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985413ee46a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('124', '11', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898541607ff6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('125', '11', '3', 'fleshki-optom-pod-nanesenie-logotipa-589854169edc9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('126', '11', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985416b1f14.jpg');
INSERT INTO `yu_color_to_page` VALUES ('127', '11', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898541712a11.jpg');
INSERT INTO `yu_color_to_page` VALUES ('128', '11', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541928af7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('129', '11', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541984d9a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('130', '11', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541997599.jpg');
INSERT INTO `yu_color_to_page` VALUES ('131', '11', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541a4a674.jpg');
INSERT INTO `yu_color_to_page` VALUES ('132', '11', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898541b7e22d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('133', '11', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898541b9352d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('134', '11', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898541be3991.jpg');
INSERT INTO `yu_color_to_page` VALUES ('135', '11', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898541c28e4c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('136', '11', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898541d969b1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('137', '11', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898541da5e86.jpg');
INSERT INTO `yu_color_to_page` VALUES ('138', '11', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898541db5cf5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('139', '11', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898541dd10ac.jpg');
INSERT INTO `yu_color_to_page` VALUES ('140', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541f29d80.jpg');
INSERT INTO `yu_color_to_page` VALUES ('141', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541f4cf44.jpg');
INSERT INTO `yu_color_to_page` VALUES ('142', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541f67238.jpg');
INSERT INTO `yu_color_to_page` VALUES ('143', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541fa2ba6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('144', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541fc1af3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('145', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541fd01cb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('146', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898541fec0d2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('147', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985420090f7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('148', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898542015ae0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('149', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-589854202045d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('150', '12', '1', 'fleshki-optom-pod-nanesenie-logotipa-589854202f69d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('151', '13', '10', 'fleshka-pistolet-589854215de87.jpg');
INSERT INTO `yu_color_to_page` VALUES ('152', '13', '5', 'fleshka-pistolet-589854228d477.jpg');
INSERT INTO `yu_color_to_page` VALUES ('153', '14', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985423bf92f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('154', '14', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985423d895f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('155', '14', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898542443d37.jpg');
INSERT INTO `yu_color_to_page` VALUES ('156', '14', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985424dfad6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('157', '15', '6', 'fleshka-klyuch-mercedes-589854265d588.jpg');
INSERT INTO `yu_color_to_page` VALUES ('158', '15', '6', 'fleshka-klyuch-mercedes-5898542681f84.jpg');
INSERT INTO `yu_color_to_page` VALUES ('159', '15', '6', 'fleshka-klyuch-mercedes-58985426941ff.jpg');
INSERT INTO `yu_color_to_page` VALUES ('160', '16', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985427db6e2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('161', '16', '10', 'fleshki-optom-pod-nanesenie-logotipa-5898542810bbe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('162', '16', '10', 'fleshki-optom-pod-nanesenie-logotipa-589854282344a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('163', '16', '10', 'fleshki-optom-pod-nanesenie-logotipa-5898542854916.jpg');
INSERT INTO `yu_color_to_page` VALUES ('164', '17', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985bba81e1f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('165', '17', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985bbac5a0b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('166', '17', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985bbadb9ef.jpg');
INSERT INTO `yu_color_to_page` VALUES ('167', '18', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985bbc1f1ce.jpg');
INSERT INTO `yu_color_to_page` VALUES ('168', '19', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985bbd9a4e1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('169', '20', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985bbf6f1e0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('170', '20', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985bc0e269a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('171', '20', '7', 'fleshki-optom-pod-nanesenie-logotipa-58985bc24eb04.jpg');
INSERT INTO `yu_color_to_page` VALUES ('172', '21', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985bc3aaf70.jpg');
INSERT INTO `yu_color_to_page` VALUES ('173', '21', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985bc3c2312.jpg');
INSERT INTO `yu_color_to_page` VALUES ('174', '21', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985bc3d54d1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('175', '21', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985bc4c9213.jpg');
INSERT INTO `yu_color_to_page` VALUES ('176', '22', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985bc60c096.jpg');
INSERT INTO `yu_color_to_page` VALUES ('177', '22', '7', 'fleshki-optom-pod-nanesenie-logotipa-58985bc8b616f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('178', '23', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985d06cf0ce.jpg');
INSERT INTO `yu_color_to_page` VALUES ('179', '25', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985d086f10d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('180', '26', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d09afa46.jpg');
INSERT INTO `yu_color_to_page` VALUES ('181', '27', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d0b315b2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('182', '28', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d0c6a39d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('183', '28', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d0c88337.jpg');
INSERT INTO `yu_color_to_page` VALUES ('184', '28', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d0ca3796.jpg');
INSERT INTO `yu_color_to_page` VALUES ('185', '28', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d0cb82e7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('186', '29', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985d0decefd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('187', '31', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985d0f28667.jpg');
INSERT INTO `yu_color_to_page` VALUES ('188', '32', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985d1052123.jpg');
INSERT INTO `yu_color_to_page` VALUES ('189', '33', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985d11c5370.jpg');
INSERT INTO `yu_color_to_page` VALUES ('190', '34', '9', 'fleshki-optom-pod-nanesenie-logotipa-58985d1309651.jpg');
INSERT INTO `yu_color_to_page` VALUES ('191', '34', '9', 'fleshki-optom-pod-nanesenie-logotipa-58985d132d7a3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('192', '34', '9', 'fleshki-optom-pod-nanesenie-logotipa-58985d133d825.jpg');
INSERT INTO `yu_color_to_page` VALUES ('193', '34', '9', 'fleshki-optom-pod-nanesenie-logotipa-58985d135b435.jpg');
INSERT INTO `yu_color_to_page` VALUES ('194', '35', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985d1489fff.jpg');
INSERT INTO `yu_color_to_page` VALUES ('195', '35', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985d14a14e7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('196', '35', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985d14da8dd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('197', '35', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985d14ee4bc.jpg');
INSERT INTO `yu_color_to_page` VALUES ('198', '37', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985d162535c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('199', '37', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985d1637a60.jpg');
INSERT INTO `yu_color_to_page` VALUES ('200', '37', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985d166c015.jpg');
INSERT INTO `yu_color_to_page` VALUES ('201', '38', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e15d1212.jpg');
INSERT INTO `yu_color_to_page` VALUES ('202', '38', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e167b2ed.jpg');
INSERT INTO `yu_color_to_page` VALUES ('203', '38', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e168d0b3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('204', '38', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e17bbc65.jpg');
INSERT INTO `yu_color_to_page` VALUES ('205', '38', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e185b53d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('206', '38', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e1870c2f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('207', '38', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e19b31d5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('208', '38', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e1a1fad0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('209', '38', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e1a2cb4f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('210', '39', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985e1b905a7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('211', '39', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e1d13c74.jpg');
INSERT INTO `yu_color_to_page` VALUES ('212', '39', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e1d3e269.jpg');
INSERT INTO `yu_color_to_page` VALUES ('213', '39', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e1d4c5be.jpg');
INSERT INTO `yu_color_to_page` VALUES ('214', '39', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e1d79523.jpg');
INSERT INTO `yu_color_to_page` VALUES ('215', '39', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985e1de72d2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('216', '39', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985e1f74d24.jpg');
INSERT INTO `yu_color_to_page` VALUES ('217', '39', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e20d37b2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('218', '39', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e21048d2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('219', '39', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e211327b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('220', '39', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e21c0620.jpg');
INSERT INTO `yu_color_to_page` VALUES ('221', '39', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985e2237470.jpg');
INSERT INTO `yu_color_to_page` VALUES ('222', '39', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e24006c4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('223', '39', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e244898c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('224', '39', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e2460e1a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('225', '39', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e248f482.jpg');
INSERT INTO `yu_color_to_page` VALUES ('226', '39', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985e24b8c87.jpg');
INSERT INTO `yu_color_to_page` VALUES ('227', '39', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985e264effe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('228', '39', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985e267950a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('229', '39', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985e268f521.jpg');
INSERT INTO `yu_color_to_page` VALUES ('230', '39', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985e26b9d11.jpg');
INSERT INTO `yu_color_to_page` VALUES ('231', '39', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985e2851a2a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('232', '39', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985e287b917.jpg');
INSERT INTO `yu_color_to_page` VALUES ('233', '39', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985e28a4551.jpg');
INSERT INTO `yu_color_to_page` VALUES ('234', '39', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985e28d7132.jpg');
INSERT INTO `yu_color_to_page` VALUES ('235', '41', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f3d07adf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('236', '41', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f3d25ead.jpg');
INSERT INTO `yu_color_to_page` VALUES ('237', '41', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f3d37d27.jpg');
INSERT INTO `yu_color_to_page` VALUES ('238', '41', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f3e92cb6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('239', '41', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f3ff1b7e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('240', '41', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f414bd3c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('241', '42', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f4298674.jpg');
INSERT INTO `yu_color_to_page` VALUES ('242', '42', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f42b5dcf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('243', '42', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f42bf8f1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('244', '42', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f4315c73.jpg');
INSERT INTO `yu_color_to_page` VALUES ('245', '42', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f4449fed.jpg');
INSERT INTO `yu_color_to_page` VALUES ('246', '42', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f446edf1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('247', '42', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f461cb30.jpg');
INSERT INTO `yu_color_to_page` VALUES ('248', '42', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f4656cbc.jpg');
INSERT INTO `yu_color_to_page` VALUES ('249', '42', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f47a1121.jpg');
INSERT INTO `yu_color_to_page` VALUES ('250', '42', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f48ede6d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('251', '43', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f4acb882.jpg');
INSERT INTO `yu_color_to_page` VALUES ('252', '43', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f4c5d0d9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('253', '43', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f4daaf0c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('254', '44', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f4f047ba.jpg');
INSERT INTO `yu_color_to_page` VALUES ('255', '44', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f4f1bbd8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('256', '44', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f4f38585.jpg');
INSERT INTO `yu_color_to_page` VALUES ('257', '45', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f507d60c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('258', '45', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f5092ef6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('259', '45', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f50ae139.jpg');
INSERT INTO `yu_color_to_page` VALUES ('260', '45', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f5322877.jpg');
INSERT INTO `yu_color_to_page` VALUES ('261', '45', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f535e7f1.jpg');
INSERT INTO `yu_color_to_page` VALUES ('262', '45', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f53783ca.jpg');
INSERT INTO `yu_color_to_page` VALUES ('263', '45', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f54cb15c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('264', '45', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f561d670.jpg');
INSERT INTO `yu_color_to_page` VALUES ('265', '45', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f576911f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('266', '45', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f58b6c35.jpg');
INSERT INTO `yu_color_to_page` VALUES ('267', '45', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f58e59d4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('268', '45', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f58efeed.jpg');
INSERT INTO `yu_color_to_page` VALUES ('269', '45', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f5a49e21.jpg');
INSERT INTO `yu_color_to_page` VALUES ('270', '45', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f5a78fb0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('271', '45', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f5a8a81e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('272', '46', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f5bd66fd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('273', '46', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f5c7bc00.jpg');
INSERT INTO `yu_color_to_page` VALUES ('274', '46', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f5c8c627.jpg');
INSERT INTO `yu_color_to_page` VALUES ('275', '46', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f5c9e92e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('276', '46', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f5de0d3c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('277', '46', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f5e11376.jpg');
INSERT INTO `yu_color_to_page` VALUES ('278', '46', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f5e23052.jpg');
INSERT INTO `yu_color_to_page` VALUES ('279', '46', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f5e47ad7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('280', '47', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f5f8a269.jpg');
INSERT INTO `yu_color_to_page` VALUES ('281', '47', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f5f996e4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('282', '47', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f604948c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('283', '47', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f617a3cb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('284', '47', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f623cf24.jpg');
INSERT INTO `yu_color_to_page` VALUES ('285', '47', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f624a81b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('286', '47', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f639d49e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('287', '47', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f63c1c40.jpg');
INSERT INTO `yu_color_to_page` VALUES ('288', '47', '11', 'fleshki-optom-pod-nanesenie-logotipa-58985f63d3afc.jpg');
INSERT INTO `yu_color_to_page` VALUES ('289', '47', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f652e2ce.jpg');
INSERT INTO `yu_color_to_page` VALUES ('290', '47', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f65e6c17.jpg');
INSERT INTO `yu_color_to_page` VALUES ('291', '47', '3', 'fleshki-optom-pod-nanesenie-logotipa-58985f66032c6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('292', '47', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f6758333.jpg');
INSERT INTO `yu_color_to_page` VALUES ('293', '47', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f6778a91.jpg');
INSERT INTO `yu_color_to_page` VALUES ('294', '47', '6', 'fleshki-optom-pod-nanesenie-logotipa-58985f67988c7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('295', '47', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f691ee99.jpg');
INSERT INTO `yu_color_to_page` VALUES ('296', '47', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f694130b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('297', '47', '4', 'fleshki-optom-pod-nanesenie-logotipa-58985f694da65.jpg');
INSERT INTO `yu_color_to_page` VALUES ('298', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6ae50aa.jpg');
INSERT INTO `yu_color_to_page` VALUES ('299', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b03647.jpg');
INSERT INTO `yu_color_to_page` VALUES ('300', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b11c5f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('301', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b235c4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('302', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b3408b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('303', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b440af.jpg');
INSERT INTO `yu_color_to_page` VALUES ('304', '48', '1', 'fleshki-optom-pod-nanesenie-logotipa-58985f6b51d9b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('305', '48', '2', 'fleshki-optom-pod-nanesenie-logotipa-58985f6c7cfe5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('306', '49', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f6e0e8e3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('307', '49', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f6f047cd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('308', '49', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f6f13fc9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('309', '49', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f6f2cb21.jpg');
INSERT INTO `yu_color_to_page` VALUES ('310', '50', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f7069b02.jpg');
INSERT INTO `yu_color_to_page` VALUES ('311', '50', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f70ba786.jpg');
INSERT INTO `yu_color_to_page` VALUES ('312', '50', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f70cee5f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('313', '50', '5', 'fleshki-optom-pod-nanesenie-logotipa-58985f70ea288.jpg');
INSERT INTO `yu_color_to_page` VALUES ('314', '50', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f723a0db.jpg');
INSERT INTO `yu_color_to_page` VALUES ('315', '50', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f7378156.jpg');
INSERT INTO `yu_color_to_page` VALUES ('316', '50', '10', 'fleshki-optom-pod-nanesenie-logotipa-58985f738d445.jpg');
INSERT INTO `yu_color_to_page` VALUES ('317', '51', '2', 'fleshka-300-58986044036fb.jpg');
INSERT INTO `yu_color_to_page` VALUES ('318', '51', '3', 'fleshka-300-5898604535cc4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('319', '51', '4', 'fleshka-300-58986046bfd15.jpg');
INSERT INTO `yu_color_to_page` VALUES ('320', '51', '5', 'fleshka-300-5898604817413.jpg');
INSERT INTO `yu_color_to_page` VALUES ('321', '52', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898604998025.jpg');
INSERT INTO `yu_color_to_page` VALUES ('322', '52', '3', 'fleshki-optom-pod-nanesenie-logotipa-58986049a3ddf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('323', '52', '3', 'fleshki-optom-pod-nanesenie-logotipa-58986049ae0c0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('324', '52', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898604ad8f64.jpg');
INSERT INTO `yu_color_to_page` VALUES ('325', '52', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898604b06064.jpg');
INSERT INTO `yu_color_to_page` VALUES ('326', '52', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898604b12365.jpg');
INSERT INTO `yu_color_to_page` VALUES ('327', '52', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898604c577e8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('328', '52', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898604d1749f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('329', '52', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898604d276a6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('330', '52', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898604e6a88f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('331', '52', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898604e934e2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('332', '52', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898604ea2682.jpg');
INSERT INTO `yu_color_to_page` VALUES ('333', '52', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605036792.jpg');
INSERT INTO `yu_color_to_page` VALUES ('334', '52', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605062d06.jpg');
INSERT INTO `yu_color_to_page` VALUES ('335', '52', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605070c72.jpg');
INSERT INTO `yu_color_to_page` VALUES ('336', '53', '3', 'fleshka-fr-662-58986051b0c3c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('337', '53', '10', 'fleshka-fr-662-5898605377769.jpg');
INSERT INTO `yu_color_to_page` VALUES ('338', '53', '10', 'fleshka-fr-662-589860539ea5c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('339', '53', '10', 'fleshka-fr-662-58986053b1a1f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('340', '53', '10', 'fleshka-fr-662-58986053cfd2c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('341', '53', '1', 'fleshka-fr-662-589860555d500.jpg');
INSERT INTO `yu_color_to_page` VALUES ('342', '54', '1', 'fleshki-optom-pod-nanesenie-logotipa-58986056a8dbe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('343', '54', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898605700711.jpg');
INSERT INTO `yu_color_to_page` VALUES ('344', '54', '1', 'fleshki-optom-pod-nanesenie-logotipa-58986057177f7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('345', '54', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898605840dcf.jpg');
INSERT INTO `yu_color_to_page` VALUES ('346', '54', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986058748e8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('347', '54', '2', 'fleshki-optom-pod-nanesenie-logotipa-589860587d1f9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('348', '54', '3', 'fleshki-optom-pod-nanesenie-logotipa-58986059c3e03.jpg');
INSERT INTO `yu_color_to_page` VALUES ('349', '54', '3', 'fleshki-optom-pod-nanesenie-logotipa-58986059e905a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('350', '54', '3', 'fleshki-optom-pod-nanesenie-logotipa-5898605a02d40.jpg');
INSERT INTO `yu_color_to_page` VALUES ('351', '54', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898605bee56b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('352', '54', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898605c5fc2d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('353', '54', '11', 'fleshki-optom-pod-nanesenie-logotipa-5898605c6d21c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('354', '54', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605daf921.jpg');
INSERT INTO `yu_color_to_page` VALUES ('355', '54', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605dd1285.jpg');
INSERT INTO `yu_color_to_page` VALUES ('356', '54', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898605ddf908.jpg');
INSERT INTO `yu_color_to_page` VALUES ('357', '54', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898605f3174a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('358', '54', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898605f598b8.jpg');
INSERT INTO `yu_color_to_page` VALUES ('359', '54', '6', 'fleshki-optom-pod-nanesenie-logotipa-5898605f726ff.jpg');
INSERT INTO `yu_color_to_page` VALUES ('360', '54', '4', 'fleshki-optom-pod-nanesenie-logotipa-589860612a6fd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('361', '54', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898606159cd2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('362', '54', '4', 'fleshki-optom-pod-nanesenie-logotipa-5898606166762.jpg');
INSERT INTO `yu_color_to_page` VALUES ('363', '55', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986062b3c93.jpg');
INSERT INTO `yu_color_to_page` VALUES ('364', '56', '3', 'fleshka-s-led-podsvetkoi-58986063eb716.jpg');
INSERT INTO `yu_color_to_page` VALUES ('365', '56', '3', 'fleshka-s-led-podsvetkoi-5898606402fe4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('366', '56', '3', 'fleshka-s-led-podsvetkoi-5898606412492.jpg');
INSERT INTO `yu_color_to_page` VALUES ('367', '57', '1', 'fleshki-optom-pod-nanesenie-logotipa-589860654497a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('368', '58', '1', 'fleshki-optom-pod-nanesenie-logotipa-589860666f200.jpg');
INSERT INTO `yu_color_to_page` VALUES ('369', '59', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898606794fbd.jpg');
INSERT INTO `yu_color_to_page` VALUES ('370', '60', '6', 'fleshka-klyuch-volkswagen-58986069a4ca3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('371', '60', '6', 'fleshka-klyuch-volkswagen-58986069bc7fc.jpg');
INSERT INTO `yu_color_to_page` VALUES ('372', '60', '6', 'fleshka-klyuch-volkswagen-5898606abc87c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('373', '60', '6', 'fleshka-klyuch-volkswagen-5898606acdd4e.jpg');
INSERT INTO `yu_color_to_page` VALUES ('374', '61', '6', 'fleshka-klyuch-minicooper-5898606c151b9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('375', '62', '6', 'fleshka-klyuch-porsche-5898606d8a075.jpg');
INSERT INTO `yu_color_to_page` VALUES ('376', '63', '5', 'fleshki-optom-pod-nanesenie-logotipa-58986236d7b03.jpg');
INSERT INTO `yu_color_to_page` VALUES ('377', '64', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898623838a9f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('378', '64', '5', 'fleshki-optom-pod-nanesenie-logotipa-58986238617b6.jpg');
INSERT INTO `yu_color_to_page` VALUES ('379', '64', '5', 'fleshki-optom-pod-nanesenie-logotipa-589862386f1f4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('380', '65', '9', 'fleshki-optom-pod-nanesenie-logotipa-58986239f337c.jpg');
INSERT INTO `yu_color_to_page` VALUES ('381', '65', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898623a3c07d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('382', '65', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898623a54639.jpg');
INSERT INTO `yu_color_to_page` VALUES ('383', '65', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898623a8a19f.jpg');
INSERT INTO `yu_color_to_page` VALUES ('384', '66', '5', 'fleshka-ruchka-derevo-5898623bd65d4.jpg');
INSERT INTO `yu_color_to_page` VALUES ('385', '66', '5', 'fleshka-ruchka-derevo-5898623c052ee.jpg');
INSERT INTO `yu_color_to_page` VALUES ('386', '66', '5', 'fleshka-ruchka-derevo-5898623c15112.jpg');
INSERT INTO `yu_color_to_page` VALUES ('387', '67', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898623d53fa5.jpg');
INSERT INTO `yu_color_to_page` VALUES ('388', '67', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898623ea3f7d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('389', '67', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898623ff1571.jpg');
INSERT INTO `yu_color_to_page` VALUES ('390', '67', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986240463a2.jpg');
INSERT INTO `yu_color_to_page` VALUES ('391', '67', '2', 'fleshki-optom-pod-nanesenie-logotipa-589862407298d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('392', '67', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986240a7126.jpg');
INSERT INTO `yu_color_to_page` VALUES ('393', '68', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898624200f47.jpg');
INSERT INTO `yu_color_to_page` VALUES ('394', '68', '1', 'fleshki-optom-pod-nanesenie-logotipa-5898624436145.jpg');
INSERT INTO `yu_color_to_page` VALUES ('395', '68', '1', 'fleshki-optom-pod-nanesenie-logotipa-589862446663b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('396', '68', '9', 'fleshki-optom-pod-nanesenie-logotipa-58986245bfac7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('397', '68', '9', 'fleshki-optom-pod-nanesenie-logotipa-58986245e29e9.jpg');
INSERT INTO `yu_color_to_page` VALUES ('398', '68', '9', 'fleshki-optom-pod-nanesenie-logotipa-589862464b4a0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('399', '68', '9', 'fleshki-optom-pod-nanesenie-logotipa-589862467486b.jpg');
INSERT INTO `yu_color_to_page` VALUES ('400', '68', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986247c53ad.jpg');
INSERT INTO `yu_color_to_page` VALUES ('401', '68', '2', 'fleshki-optom-pod-nanesenie-logotipa-5898624804739.jpg');
INSERT INTO `yu_color_to_page` VALUES ('402', '68', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986248a47da.jpg');
INSERT INTO `yu_color_to_page` VALUES ('403', '68', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986248d1d56.jpg');
INSERT INTO `yu_color_to_page` VALUES ('404', '69', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898624a2cd0a.jpg');
INSERT INTO `yu_color_to_page` VALUES ('405', '69', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898624a66dc7.jpg');
INSERT INTO `yu_color_to_page` VALUES ('406', '69', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898624b58494.jpg');
INSERT INTO `yu_color_to_page` VALUES ('407', '69', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898624b81700.jpg');
INSERT INTO `yu_color_to_page` VALUES ('408', '69', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898624bc08a3.jpg');
INSERT INTO `yu_color_to_page` VALUES ('409', '69', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898624d13f5d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('410', '69', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898624dd3bc0.jpg');
INSERT INTO `yu_color_to_page` VALUES ('411', '69', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898624e01bfe.jpg');
INSERT INTO `yu_color_to_page` VALUES ('412', '69', '9', 'fleshki-optom-pod-nanesenie-logotipa-5898624f62f2d.jpg');
INSERT INTO `yu_color_to_page` VALUES ('413', '69', '2', 'fleshki-optom-pod-nanesenie-logotipa-58986250b9d12.jpg');
INSERT INTO `yu_color_to_page` VALUES ('414', '70', '5', 'fleshki-optom-pod-nanesenie-logotipa-5898625218293.jpg');

-- ----------------------------
-- Table structure for yu_migration
-- ----------------------------
DROP TABLE IF EXISTS `yu_migration`;
CREATE TABLE `yu_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yu_migration
-- ----------------------------
INSERT INTO `yu_migration` VALUES ('m000000_000000_base', '1462450073');
INSERT INTO `yu_migration` VALUES ('m130524_201442_init', '1462450077');

-- ----------------------------
-- Table structure for yu_pages
-- ----------------------------
DROP TABLE IF EXISTS `yu_pages`;
CREATE TABLE `yu_pages` (
  `title` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` longtext,
  `active` smallint(6) NOT NULL,
  `sort` smallint(6) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_h1` varchar(255) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `parent` int(11) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `in_stock` smallint(1) NOT NULL,
  `old_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `url` (`url`(191))
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yu_pages
-- ----------------------------
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '1', '1', '446');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '2', '1', '653');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '3', '1', '537');
INSERT INTO `yu_pages` VALUES ('Флешка 501 TWIST Флешки оптом под нанесение логотипа\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '4', '1', '387');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '5', '1', '611');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '6', '1', '644');
INSERT INTO `yu_pages` VALUES ('Флешки-браслеты\r\n', null, null, '1', '6', null, null, null, null, 'fleshka', null, '0', '7', '1', '2058');
INSERT INTO `yu_pages` VALUES ('Флешка-ручка\r\n', null, null, '1', '7', null, null, null, null, 'fleshka', null, '0', '8', '1', '2043');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '8', null, null, null, null, 'fleshka', null, '0', '9', '1', '2037');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '9', null, null, null, null, 'fleshka', null, '0', '10', '1', '474');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '10', null, null, null, null, 'fleshka', null, '0', '11', '1', '634');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '11', null, null, null, null, 'fleshka', null, '0', '12', '1', '2130');
INSERT INTO `yu_pages` VALUES ('Флешка-пистолет\r\n', null, null, '1', '12', null, null, null, null, 'fleshka', null, '0', '13', '1', '2121');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '13', null, null, null, null, 'fleshka', null, '0', '14', '1', '1929');
INSERT INTO `yu_pages` VALUES ('Флешка-ключ Mercedes\r\n', null, null, '1', '14', null, null, null, null, 'fleshka', null, '0', '15', '1', '1883');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '15', null, null, null, null, 'fleshka', null, '0', '16', '1', '705');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '17', '1', '1585');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '18', '1', '1588');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '19', '1', '1636');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '20', '1', '1044');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '21', '1', '1901');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '22', '1', '1546');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '23', '1', '805');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '24', '1', '821');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '25', '1', '837');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '26', '1', '1620');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '27', '1', '1682');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '28', '1', '1953');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '6', null, null, null, null, 'fleshka', null, '0', '29', '1', '2242');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '7', null, null, null, null, 'fleshka', null, '0', '30', '1', '1868');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '8', null, null, null, null, 'fleshka', null, '0', '31', '1', '2236');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '9', null, null, null, null, 'fleshka', null, '0', '32', '1', '1042');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '10', null, null, null, null, 'fleshka', null, '0', '33', '1', '2237');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '11', null, null, null, null, 'fleshka', null, '0', '34', '1', '1913');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '12', null, null, null, null, 'fleshka', null, '0', '35', '1', '1903');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '13', null, null, null, null, 'fleshka', null, '0', '36', '1', '783');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '14', null, null, null, null, 'fleshka', null, '0', '37', '1', '780');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '38', '1', '478');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '39', '1', '422');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '40', '1', '411');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '41', '1', '2115');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '42', '1', '1944');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '43', '1', '2154');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '44', '1', '704');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '45', '1', '785');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '6', null, null, null, null, 'fleshka', null, '0', '46', '1', '440');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '7', null, null, null, null, 'fleshka', null, '0', '47', '1', '677');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '8', null, null, null, null, 'fleshka', null, '0', '48', '1', '528');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '9', null, null, null, null, 'fleshka', null, '0', '49', '1', '2131');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '10', null, null, null, null, 'fleshka', null, '0', '50', '1', '562');
INSERT INTO `yu_pages` VALUES ('Флешка 300\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '51', '1', '2260');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '52', '1', '2038');
INSERT INTO `yu_pages` VALUES ('Флешка ФР 662\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '53', '1', '524');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '54', '1', '2039');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '55', '1', '628');
INSERT INTO `yu_pages` VALUES ('Флешка с LED-подсветкой\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '56', '1', '2129');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '6', null, null, null, null, 'fleshka', null, '0', '57', '1', '2055');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '7', null, null, null, null, 'fleshka', null, '0', '58', '1', '2056');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '8', null, null, null, null, 'fleshka', null, '0', '59', '1', '2057');
INSERT INTO `yu_pages` VALUES ('Флешка-ключ Volkswagen\r\n', null, null, '1', '9', null, null, null, null, 'fleshka', null, '0', '60', '1', '2219');
INSERT INTO `yu_pages` VALUES ('Флешка-ключ MiniCooper\r\n', null, null, '1', '10', null, null, null, null, 'fleshka', null, '0', '61', '1', '2220');
INSERT INTO `yu_pages` VALUES ('Флешка-ключ PORSCHE\r\n', null, null, '1', '11', null, null, null, null, 'fleshka', null, '0', '62', '1', '2218');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '0', null, null, null, null, 'fleshka', null, '0', '63', '1', '1360');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '1', null, null, null, null, 'fleshka', null, '0', '64', '1', '2244');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '2', null, null, null, null, 'fleshka', null, '0', '65', '1', '1746');
INSERT INTO `yu_pages` VALUES ('Флешка-ручка, дерево\r\n', null, null, '1', '3', null, null, null, null, 'fleshka', null, '0', '66', '1', '2184');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '4', null, null, null, null, 'fleshka', null, '0', '67', '1', '643');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '5', null, null, null, null, 'fleshka', null, '0', '68', '1', '642');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '6', null, null, null, null, 'fleshka', null, '0', '69', '1', '712');
INSERT INTO `yu_pages` VALUES ('Флешки оптом под нанесение логотипа\r\n', null, null, '1', '7', null, null, null, null, 'fleshka', null, '0', '70', '1', '388');

-- ----------------------------
-- Table structure for yu_photo_to_color
-- ----------------------------
DROP TABLE IF EXISTS `yu_photo_to_color`;
CREATE TABLE `yu_photo_to_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_photo_to_color
-- ----------------------------

-- ----------------------------
-- Table structure for yu_popular_pages
-- ----------------------------
DROP TABLE IF EXISTS `yu_popular_pages`;
CREATE TABLE `yu_popular_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_popular_pages
-- ----------------------------

-- ----------------------------
-- Table structure for yu_session
-- ----------------------------
DROP TABLE IF EXISTS `yu_session`;
CREATE TABLE `yu_session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of yu_session
-- ----------------------------
INSERT INTO `yu_session` VALUES ('7bde19b01a4821c440bb6c0975a8d015', '1483898058', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D636865636B6F75747C613A303A7B7D);
INSERT INTO `yu_session` VALUES ('7e2bf4ccb22f202ee7e540ad85dc46f6', '1483897764', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('b9jvmh6hiccguu1cd13mn7gs36', '1486383156', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);
INSERT INTO `yu_session` VALUES ('d51fsb5kj1nv7o1uaja1g3gq55', '1485953556', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('er54eda35pnl3qd95h5k6vt9n5', '1485953719', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);
INSERT INTO `yu_session` VALUES ('pr1i8homv3rasett9gr62ilbq6', '1486029987', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('qa7vp6f429jrd5lhplniqr4hc2', '1486029731', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);
INSERT INTO `yu_session` VALUES ('v61285ib6d3evuhg61tfranud1', '1486377694', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('vdsc4je9rkch5t7sj27q9e7d85', '1483943076', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);

-- ----------------------------
-- Table structure for yu_special_pages
-- ----------------------------
DROP TABLE IF EXISTS `yu_special_pages`;
CREATE TABLE `yu_special_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_special_pages
-- ----------------------------

-- ----------------------------
-- Table structure for yu_stranitsy
-- ----------------------------
DROP TABLE IF EXISTS `yu_stranitsy`;
CREATE TABLE `yu_stranitsy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_stranitsy
-- ----------------------------
INSERT INTO `yu_stranitsy` VALUES ('1', 'Методы нанесения логотипа', 'metody-naneseniya-logotipa', '<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b style=\"line-height: 20px;\">Гравировка</b><br style=\"line-height: 20px;\" />\r\n<span style=\"line-height: 20px;\">Гравировка - способ нанесения изображения с помощью лазера на таких материалах, как дерево, металл, кожа. Главное преимущество данной печати - большая четкость наносимого изображения. Гравировка бывает обычной и с чернением (тёмный логотип). Гравировку логотипа на 100-300 флешек осуществляем за два-три рабочих дня. Предварительная стоимость гравировки на флешках: Гравировка на тираж 50-100 флешек &ndash; 25-20 руб. Гравировка на тираж 200-300 флешек &ndash; 18-15 руб. Гравировка на тираж 400-500 флешек &ndash; 15-13 руб. Гравировка на тираж 500-1000 флешек &ndash; 12-10 руб.</span></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b style=\"line-height: 20px;\">Тиснение</b><br style=\"line-height: 20px;\" />\r\n<span style=\"line-height: 20px;\">Тиснение. (выдавливание). Тиснение - метод нанесения изображения с помощью горячего клише на такие материалы, как кожа, дерево, бумага, пластик и т.п. Тиснение наносится на кожаные флешки. Тиснение логотипа на 100-300 флешек осуществляем за три рабочих дня. Стоимость клише &ndash; 2.000 руб. Предварительная стоимость тиснения одного логотипа на флешках: Тиснение на тираж 50-100 флешек &ndash; 25-20 руб. Тиснеие на тираж 200-300 флешек &ndash; 18-15 руб. Тиснение на тираж 400-500 флешек &ndash; 15-13 руб. Тиснение на тираж 500-1000 флешек &ndash; 12-10 руб.</span></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b style=\"line-height: 20px;\">Полноцветная печать (УФ-печать)</b><br style=\"line-height: 20px;\" />\r\n<span style=\"line-height: 20px;\">УФ печать (uv печать) &mdash; это технология печати, при которой под воздействием ультрафиолетового излучения используемые чернила практически мгновенно полимеризуются, затвердевают на любой поверхности.УФ-печать используется для нанесения на пластик, стекло, бумагу, дерево, кожу и кожзаменитель. Чернила при ультрафиолетовой печати не впитываются в материал основы, поэтому изображение получается замечательно ярким, кроме того оно не выгорает на солнце. УФ-печать на тираж 50-100 флешек &ndash; 40-35 руб. на тираж 200-300 флешек &ndash; 35 руб. на тираж 400-500 флешек &ndash; 30 руб. на тираж 600-1000 флешек &ndash; 25 руб.</span></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b style=\"line-height: 20px;\">Тампопечать</b><br style=\"line-height: 20px;\" />\r\n<span style=\"line-height: 20px;\">Тампопечать (тампонная печать) - способ переноса изображения с печатной формы (пленки) на любую поверхность с помощью эластичного тампона. Преимущество этого метода заключается в том, что он дает возможность делать нанесение в конкретный пантон цвета и не только на плоские поверхности, но и на изогнутые. Тампопечать логотипа на 100-300 флешек осуществляем за три рабочих дня. Предварительная стоимость тампопечати одного логотипа на флешках: Тампопечать в 1 цвет на тираж 50-100 флешек &ndash; 20 руб. Тампопечать в 1 цвет на тираж 200-300 флешек &ndash; 15-10 руб. Тампопечать в 1 цвет на тираж 400-500 флешек &ndash; 10-8 руб. Тампопечать в 1 цвет на тираж 600-1000 флешек &ndash; 7-5 руб.</span></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b style=\"line-height: 20px;\">Запись информации</b><br style=\"line-height: 20px;\" />\r\n<span style=\"line-height: 20px;\">Запись информации на 100 флешек осуществляем за один рабочий день. Стоимость записи информации на флешках: Запись информации объемом до 1гб &ndash; 10 руб. Запись информации объемом до 2гб &ndash; 15 руб. Запись информации объемом до 4гб &ndash; 20 руб. Запись информации объемом до 8гб &ndash; 30 руб</span></p>\r\n', null, null);
INSERT INTO `yu_stranitsy` VALUES ('2', 'Условия продажи', 'usloviya-prodazhi', '<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><strong>Условия сотрудничества</strong></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp; &nbsp; &nbsp;1. Наша компания работает как с юридическими лицами (ИП, ООО, ЗАО, ПАО и т.д.), так и с физическими лицами. Для выставления счетов нам необходимы реквизиты вашей компании и ваши контактные данные.<br />\r\n&nbsp; &nbsp; &nbsp;2. Для размещения первого заказа позвоните нам, либо напишите письмо, либо отправьте запрос с сайта. Минимальная сумма заказа отсутствует.<br />\r\n&nbsp; &nbsp; &nbsp;3. Оплата товара осуществляется безналичным расчетом, электронными деньгами и наличными средствами в российских рублях.<br />\r\n&nbsp; &nbsp; &nbsp;4. Доставка товаров осуществляется нашими экспедиторами по Москве и транспортными компаниями - во все города России. Вы можете отдельно указать транспортную компанию, через которую вам наиболее удобно получать товар.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><strong>Условия продажи</strong></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\nНа нашем сайте представлен широкий модельный ряд флешек под нанесение логотипа. У нас вы можете выбрать usb flash диски не только для своего пользования, но и в качестве подарка для друзей. Недорогие подарочные флешки оптом можно купить прямо со склада в Москве, избавив себя от дополнительных накруток и затрат.<br />\r\n<br />\r\n<br />\r\n<strong>Как оформить заказ</strong><br />\r\n<br />\r\nОформить заказ или уточнить наличие товара можно по телефону (495) 780-80-93.<br />\r\nВ наличии на складе более 30 000 флешек разных цветов и объемов памяти. Ассортимент постоянно пополняется. У нас вы можете приобрести образцы флешек. Стоимость одного образца от 200 руб.<br />\r\n<br />\r\n<strong>Цены</strong><br />\r\n<br />\r\nНа сайте указаны две цены, цена со склада (кратчайшие сроки) и под заказ (20-30 календарных дней). Стоимость может меняться в меньшую сторону при крупных заказах.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\n<strong>Виды нанесения</strong><br />\r\n<br />\r\nТиснение - метод нанесения изображения с помощью горячего клише на такие материалы, как кожа, дерево, бумага, пластик и т.п. Тиснением логотип наносится на кожаные флешки.<br />\r\nТампопечать (тампонная печать) - способ переноса изображения с печатной формы (клише) на любую поверхность с помощью эластичного тампона. Преимущество этого метода заключается в том, что он дает возможность делать нанесение не только на плоские поверхности, но и на изогнутые. Тампопечать наносится на пластиковые флешки.<br />\r\nГравировка &ndash; способ нанесения изображения с помощью лазера на такие материалы как дерево, металл, кожа. Главное преимущество данного вида нанесения логотипов - большая четкость наносимого изображения. Гравировка наносится на металлические флешки.<br />\r\n<br />\r\n<strong>Стоимость нанесения логотипа</strong><br />\r\n<br />\r\nТампопечать на белом пластике:<br />\r\n1+0 при количестве 100штук 15руб за 1шт<br />\r\n2+0 при количестве 100штук 23руб за 1шт<br />\r\n3+0 при количестве 100штук 35руб за 1шт<br />\r\n4+0 при количестве 100штук 45руб за 1шт</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Гравировка:</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Квадратный сантиметр гравировки стоит 7 рублей.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Средняя стоимость логотипа размером 3см*1см в среднем составляет 18-20 рублей.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Тиснение:</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">цена клише 1500руб<br />\r\nприладка клише 800 рублей<br />\r\nцена 1го удара 12 рублей<br />\r\nцена 1го удара с фольгой 15 рублей<br />\r\n<br />\r\n<strong>Условия оплаты</strong><br />\r\n<br />\r\nОплата осуществляется наличными средствами и безналичным расчетом. При покупке флешек со склада - оплата 100%.<br />\r\n<br />\r\n<strong>Доставка</strong><br />\r\n<br />\r\nДоставка продукции по Москве осуществляется в течение 1-2 рабочих дней с момента поступления денежных средств на наш расчетный счет.<br />\r\nПри заказе продукции на сумму свыше 5 000 рублей мы осуществляем бесплатную доставку продукции в пределах МКАД.<br />\r\nПри заказе продукции на меньшую сумму, либо при доставке за пределы МКАД доставка продукции осуществляется платно.<br />\r\nДоставка в регионы осуществляется через транспортные компании. Стоимость доставки определяется массой, габаритами продукции и сроками доставки.<br />\r\nСамовывоз: бесплатно (необходимо созвониться заранее с менеджером компании, для согласования времени).</p>\r\n', null, null);
INSERT INTO `yu_stranitsy` VALUES ('3', 'Доставка по России и СНГ', 'dostavka-po-rossii-i-sng', '<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Доставка продукции по Москве осуществляется в течение 1-2 рабочих дней с момента поступления денежных средств на наш расчетный счет. &nbsp;При заказе продукции на сумму свыше 10. 000 рублей мы осуществляем бесплатную доставку продукции в пределах МКАД. При заказе продукции на меньшую сумму, либо при доставке за пределы МКАД доставка продукции осуществляется платно.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px; border: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Opensans, Arial, Helvetica, sans-serif; line-height: 18px;\"><span style=\"font-size: 14px;\">Доставка грузов в другие города&nbsp;осуществляется&nbsp;транспортными компаниями: EMS почта России,&nbsp;Байкал-сервис,&nbsp;ЖелДорЭкспедиция,&nbsp;ПЭК, Деловые линии,&nbsp;Автотрейдинг, ЦАП&nbsp;и другие. Доставка до терминала транспортной компании в Москве осуществляется бесплатно.&nbsp;Стоимость доставки определяется массой, габаритами продукции и сроками доставки. Самовывоз: бесплатно (необходимо заранее согласовать время).</span></p>\r\n', null, null);
INSERT INTO `yu_stranitsy` VALUES ('4', 'Гарантия', 'garantiya', '<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Гарантия на всю продукцию составляет 12 месяцев со дня продажи.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">По всем вопросам, связанным с качеством полученной продукции, обращайтесь по контактным телефонам.</p>\r\n', null, null);
INSERT INTO `yu_stranitsy` VALUES ('5', 'Контакты', 'kontakty', '<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><strong>ОПТОВЫЙ ОТДЕЛ (РОССИЯ, СНГ)</strong><br />\r\n<br />\r\n+7 (495) 780-80-93<br />\r\n+7 (964) 797-42-38<br />\r\n+7 (916) 111-57-87<br />\r\n<br />\r\n<br />\r\n&bull;&nbsp;<strong>Алексей, Илья&nbsp;</strong></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">usb флешки оптом, нанесение логотипа на флешки, рекламные сувениры оптом, импорт на заказ</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">e-mail:&nbsp;<span style=\"color: rgb(0, 0, 205);\"><a href=\"http://www.fleshka.ru/contacts/alex@fleshka.ru\" style=\"color: rgb(52, 101, 164); text-decoration: none;\">alex@fleshka.ru</a></span><br />\r\n<br />\r\n<br />\r\n<strong><span style=\"line-height: 20.8px;\">&bull; Марина</span></strong><strong style=\"line-height: 20.8px;\">&nbsp;</strong></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20.8px;\">оптовые поставки летающих тарелок фрисби, дудок болельщика и других сувениров с логотипом заказчика,<br />\r\nрекламные сувениры оптом, импорт на заказ</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\n<span style=\"line-height: 20.8px;\">e-mail:&nbsp;</span><a href=\"http://www.fleshka.ru/contacts/sale@fleshka.ru\" style=\"color: rgb(52, 101, 164); text-decoration: none; line-height: 20.8px;\"><span style=\"color: rgb(0, 0, 205);\">sale@fleshka.ru</span></a></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\n<span style=\"line-height: 1.6em;\">Мы готовы ответить на вопросы наших покупателей, а также принять заказ любым удобным способом связи.&nbsp;</span></p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\n<br />\r\nНАШИ РЕКВИЗИТЫ<br />\r\n<br />\r\nООО &laquo;ВЕНДОР&raquo; &nbsp;<br />\r\nОГРН &nbsp;1147746363082 &nbsp; &nbsp;ИНН 7726744690 &nbsp; &nbsp; КПП 772601001 &nbsp; &nbsp;&nbsp;<br />\r\nОКПО 20606880 &nbsp; &nbsp;ОКАТО 45286565000<br />\r\n<br />\r\nр/с 40702810300000111932 &nbsp;к/с 30101810100000000716<br />\r\nв ВТБ 24 (ЗАО) г. Москва &nbsp; &nbsp;БИК 044525716<br />\r\nТел: +7 (495) 723-85-81<br />\r\nГенеральный директор &nbsp;Киктенко Сергей Александрович<br />\r\n<br />\r\nНАШ АДРЕС&nbsp;<br />\r\nг. Москва, м. Пражская, 1-й Дорожный проезд, дом 6</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">В современном мире изменения происходят настолько стремительно, что зачастую бывает невозможно успеть за всем уследить! Особенно стремительно эволюционирует электроника и вместе с ней &nbsp;- съемные носители информации, flash-память, hdd-накопители и ssd-диски. Еще совсем недавно лазерные диски вытеснили устаревшие дискеты, и на прилавках магазинов появилось невиданное чудо - Usb-флешки. Плавно и незаметно оригинальные сувенирные флешки стали неотъемлемой частью нашей повседневной жизни, будучи не просто съемной деталью компьютера, не только удобным носителем информации, но также желанным и нужным подарком.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Сегодня уже недостаточно просто иметь в своем ассортименте карты памяти, нужно предложить покупателям широкий их выбор &ndash; разнообразный объем памяти, внешнее оформление. В обиход вошел уже новый подвид, Usb-сувениры стали уместным материалом при брендировании.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Круг потребителей этой продукции постоянно расширяется. Бизнесмены предпочтут флешки под нанесение логотипа компании, обычно для таких случаев используются прямоугольные классические формы, фирменные цвета в изготовлении корпуса. Кроме этого прозрачные или деревянные флэшки под нанесение логотипа весьма уместны, если стиль и деятельность компании позволяют это.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Представительницы прекрасного пола оценят изящные вещицы, ведь красивые флешки производятся с декором из страз, росписи, с мехом или кожей, объем при этом не ограничен. Молодежь старается приобретать прикольные, оригинальные флешки. К примеру, прикольные флешки в форме футбольного мяча любимы спортсменами. Даже дети уже активно пользуются флеш-картами, родители охотно одаривают своих вундеркиндов изделиями с соответствующим дизайном.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Вы уже устали мотаться, просматривать оптовые магазины, листать объемные каталоги, перебирать подарочные флэшки под логотип в надежде заполнить свои витрины действительно оригинальной продукцией? Тогда удобней устройтесь &ndash; Вы уже там, где нужно, на сайте магазина FLESHKA.RU. Мы рады предложить Вам флешки с логотипом, Usb-гаджеты оптом в широчайшем ассортименте. Быстрая доставка уместна для экономии бизнес-времени.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">На страницах нашего каталога Вы увидите, помимо обычных флеш-карт, оригинальные красивые сувенирные флешки, которые посетители Вашего магазина с удовольствием приобретут для подарка. Это часы и ручки с USB; флешки с логотипом; деревянные, металлические, кожаные подарочные флеш-карты; изделия с нестандартным молодежным дизайном; очень удобный вариант &ndash; браслеты с Usb.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Корпоративным клиентам мы можем предложить гаджеты под нанесение логотипа. Наша компания располагает не только широким выбором респектабельных флеш-карт, но также оказывает услуги - нанесение логотипов под заказ Вашей компании. Стилизованные в корпоративных цветах флеш-карты под заказ станут имиджевым дополнением к рекламной кампании.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Задать любой интересующий Вас вопрос, уточнить наличие товара на складе, обговорить размер партии, подходящий способ нанесения на карты памяти логотипа, порядок доставки и оплаты можно с помощью телефона или электронной почты. Даже поставка большими партиями в сжатые сроки &ndash; не проблема. Наши менеджеры рады быть Вам полезными!</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">FLESHKA.RU - это обычные пластиковые, эксклюзивные сувенирные, необычные подарочные гаджеты, это широкий выбор, производство флешек с логотипом, выгодные цены, доставка заказа курьером по Москве.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Теперь заказать подарочные, а также прикольные рекламные сувениры любыми объемами Вы можете у нас дешево.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Почему клиенты выбирают нас</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&bull;&nbsp;&nbsp; &nbsp;Сувенирная продукция нашей компании предлагается в большом ассортименте. Каждый заказчик может подобрать именно то изделие, которое лучше всего подойдет для решения его задач.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Мы применяем новейшее высокотехнологичное оборудование для печати, позволяющие наносить на USB-флешки изображения высокого качества и четкости.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Поставка флеш-накопителей осуществляется непосредственно с оптового московского склада, что позволяет доставить готовую подарочную продукцию заказчикам уже через несколько дней.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Оптовая покупка сувенирных USB-накопителей дает возможность значительно сэкономить расходы, а стоимость изготовления для продукции подобного класса является наиболее выгодной в Москве.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Вас приятно удивят оптовые цены на флеш-накопители с логотипом. Компания гарантирует внимательное отношение к запросам каждого клиента и качество изготовления изображений, точно соответствующих корпоративной политике любого уважающего себя предприятия.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Заказать у нас флешку очень просто</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Для заказа в качестве корпоративного сувенира оригинального и качественного флеш-накопителя с логотипом своей компании достаточно связаться с нашими менеджерами по электронной почте, либо по номеру телефона, указанному на сайте, и согласовать с ними способ нанесения изображения. От правильности выбора зависит стойкость и качество рисунка. Мы ответим с максимальной скоростью и предложим самое выгодное решение.</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Преимущества использования USB-накопителя в качестве корпоративного сувенира:</p>\r\n\r\n<p style=\"position: relative; margin: 0px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&bull;&nbsp;&nbsp; &nbsp;В отличие от других подобных безделушек он будет постоянно в работе, а значит, нанесенный на флешку логотип всегда будет перед глазами.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Компактный размер современной флешки обуславливает ее постоянное ношение с собой.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Разнообразие оригинальных форм и эксклюзивных материалов изготовления, что вместе с рисунком придают изделию неповторимость и оригинальность.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Востребованность USB-накопителей в качестве подарочной продукции очень высока. Многие покупатели и крупные корпоративные клиенты выбирают оптовые закупки флешек, поскольку это дешевле. Присутствие флеш-накопителя придает образу делового человека дополнительный плюс, а компактность и стиль говорят о его современных взглядах на жизнь, стремлении идти в ногу с технологиями и хорошем вкусе.</p>\r\n', null, null);

-- ----------------------------
-- Table structure for yu_user
-- ----------------------------
DROP TABLE IF EXISTS `yu_user`;
CREATE TABLE `yu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yu_user
-- ----------------------------
INSERT INTO `yu_user` VALUES ('1', 'admin', 'rnhgk2mH5Qs2P-vQLQV_sZcFIu9Okfmh', '$2y$13$88XSQan5ah2/QQVQqRnpee6Z6Y01zy0u8DWiPlzXmb9QcAEg2XteG', null, 'dilshod-x@mail.ru', '10', '1462532619', '1462532619');

-- ----------------------------
-- Table structure for yu_volumes
-- ----------------------------
DROP TABLE IF EXISTS `yu_volumes`;
CREATE TABLE `yu_volumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_volumes
-- ----------------------------
INSERT INTO `yu_volumes` VALUES ('1', '2');
INSERT INTO `yu_volumes` VALUES ('2', '4');
INSERT INTO `yu_volumes` VALUES ('3', '8');
INSERT INTO `yu_volumes` VALUES ('4', '16');
INSERT INTO `yu_volumes` VALUES ('5', '32');
INSERT INTO `yu_volumes` VALUES ('6', '64');
INSERT INTO `yu_volumes` VALUES ('7', '128');
INSERT INTO `yu_volumes` VALUES ('8', '256');

-- ----------------------------
-- Table structure for yu_volume_to_page
-- ----------------------------
DROP TABLE IF EXISTS `yu_volume_to_page`;
CREATE TABLE `yu_volume_to_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volume_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `price_pz` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_volume_to_page
-- ----------------------------
INSERT INTO `yu_volume_to_page` VALUES ('1', '2', '1', '460', '0');
INSERT INTO `yu_volume_to_page` VALUES ('2', '3', '1', '510', '0');
INSERT INTO `yu_volume_to_page` VALUES ('3', '4', '1', '525', '0');
INSERT INTO `yu_volume_to_page` VALUES ('4', '5', '1', '751', '0');
INSERT INTO `yu_volume_to_page` VALUES ('5', '2', '3', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('6', '3', '3', '629', '566');
INSERT INTO `yu_volume_to_page` VALUES ('7', '4', '3', '917', '825');
INSERT INTO `yu_volume_to_page` VALUES ('8', '5', '3', '1245', '1120');
INSERT INTO `yu_volume_to_page` VALUES ('9', '2', '4', '280', '0');
INSERT INTO `yu_volume_to_page` VALUES ('10', '3', '4', '290', '0');
INSERT INTO `yu_volume_to_page` VALUES ('11', '4', '4', '472', '0');
INSERT INTO `yu_volume_to_page` VALUES ('12', '2', '5', '537', '483');
INSERT INTO `yu_volume_to_page` VALUES ('13', '3', '5', '590', '531');
INSERT INTO `yu_volume_to_page` VALUES ('14', '4', '5', '812', '731');
INSERT INTO `yu_volume_to_page` VALUES ('15', '5', '5', '1061', '955');
INSERT INTO `yu_volume_to_page` VALUES ('16', '2', '6', '280', '0');
INSERT INTO `yu_volume_to_page` VALUES ('17', '3', '6', '290', '0');
INSERT INTO `yu_volume_to_page` VALUES ('18', '4', '6', '472', '0');
INSERT INTO `yu_volume_to_page` VALUES ('19', '2', '7', '367', '330');
INSERT INTO `yu_volume_to_page` VALUES ('20', '3', '7', '419', '377');
INSERT INTO `yu_volume_to_page` VALUES ('21', '4', '7', '603', '542');
INSERT INTO `yu_volume_to_page` VALUES ('22', '5', '7', '1048', '943');
INSERT INTO `yu_volume_to_page` VALUES ('23', '2', '8', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('24', '3', '8', '590', '531');
INSERT INTO `yu_volume_to_page` VALUES ('25', '4', '8', '747', '672');
INSERT INTO `yu_volume_to_page` VALUES ('26', '5', '8', '1343', '1208');
INSERT INTO `yu_volume_to_page` VALUES ('27', '2', '9', '478', '0');
INSERT INTO `yu_volume_to_page` VALUES ('28', '3', '9', '485', '0');
INSERT INTO `yu_volume_to_page` VALUES ('29', '4', '9', '642', '0');
INSERT INTO `yu_volume_to_page` VALUES ('30', '5', '9', '1225', '0');
INSERT INTO `yu_volume_to_page` VALUES ('31', '6', '9', '2489', '0');
INSERT INTO `yu_volume_to_page` VALUES ('32', '2', '10', '426', '383');
INSERT INTO `yu_volume_to_page` VALUES ('33', '3', '10', '465', '419');
INSERT INTO `yu_volume_to_page` VALUES ('34', '4', '10', '622', '560');
INSERT INTO `yu_volume_to_page` VALUES ('35', '5', '10', '1205', '1085');
INSERT INTO `yu_volume_to_page` VALUES ('36', '2', '11', '445', '401');
INSERT INTO `yu_volume_to_page` VALUES ('37', '3', '11', '485', '436');
INSERT INTO `yu_volume_to_page` VALUES ('38', '4', '11', '648', '584');
INSERT INTO `yu_volume_to_page` VALUES ('39', '5', '11', '1166', '1049');
INSERT INTO `yu_volume_to_page` VALUES ('40', '6', '11', '2489', '2240');
INSERT INTO `yu_volume_to_page` VALUES ('41', '3', '12', '459', '413');
INSERT INTO `yu_volume_to_page` VALUES ('42', '2', '13', '681', '613');
INSERT INTO `yu_volume_to_page` VALUES ('43', '3', '13', '747', '672');
INSERT INTO `yu_volume_to_page` VALUES ('44', '4', '13', '1179', '1061');
INSERT INTO `yu_volume_to_page` VALUES ('45', '2', '15', '773', '696');
INSERT INTO `yu_volume_to_page` VALUES ('46', '3', '15', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('47', '4', '15', '1114', '1002');
INSERT INTO `yu_volume_to_page` VALUES ('48', '5', '15', '1441', '1297');
INSERT INTO `yu_volume_to_page` VALUES ('49', '2', '16', '485', '436');
INSERT INTO `yu_volume_to_page` VALUES ('50', '3', '16', '531', '477');
INSERT INTO `yu_volume_to_page` VALUES ('51', '4', '16', '753', '678');
INSERT INTO `yu_volume_to_page` VALUES ('52', '5', '16', '1009', '908');
INSERT INTO `yu_volume_to_page` VALUES ('53', '2', '17', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('54', '3', '17', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('55', '4', '17', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('56', '5', '17', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('57', '2', '18', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('58', '3', '18', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('59', '4', '18', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('60', '5', '18', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('61', '2', '19', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('62', '3', '19', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('63', '4', '19', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('64', '5', '19', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('65', '2', '20', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('66', '3', '20', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('67', '4', '20', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('68', '5', '20', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('69', '2', '21', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('70', '3', '21', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('71', '4', '21', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('72', '5', '21', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('73', '2', '22', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('74', '3', '22', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('75', '4', '22', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('76', '5', '22', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('77', '2', '23', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('78', '3', '23', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('79', '4', '23', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('80', '5', '23', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('81', '2', '24', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('82', '3', '24', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('83', '4', '24', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('84', '5', '24', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('85', '2', '25', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('86', '3', '25', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('87', '4', '25', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('88', '5', '25', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('89', '2', '26', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('90', '3', '26', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('91', '4', '26', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('92', '5', '26', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('93', '2', '27', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('94', '3', '27', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('95', '4', '27', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('96', '5', '27', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('97', '2', '28', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('98', '3', '28', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('99', '4', '28', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('100', '5', '28', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('101', '2', '29', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('102', '3', '29', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('103', '4', '29', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('104', '5', '29', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('105', '2', '30', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('106', '3', '30', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('107', '4', '30', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('108', '5', '30', '1801', '0');
INSERT INTO `yu_volume_to_page` VALUES ('109', '2', '31', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('110', '3', '31', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('111', '4', '31', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('112', '5', '31', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('113', '2', '32', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('114', '3', '32', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('115', '4', '32', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('116', '5', '32', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('117', '2', '33', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('118', '3', '33', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('119', '4', '33', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('120', '5', '33', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('121', '2', '34', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('122', '3', '34', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('123', '4', '34', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('124', '5', '34', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('125', '2', '35', '740', '0');
INSERT INTO `yu_volume_to_page` VALUES ('126', '3', '35', '799', '0');
INSERT INTO `yu_volume_to_page` VALUES ('127', '4', '35', '1087', '0');
INSERT INTO `yu_volume_to_page` VALUES ('128', '5', '35', '1736', '0');
INSERT INTO `yu_volume_to_page` VALUES ('129', '2', '36', '694', '625');
INSERT INTO `yu_volume_to_page` VALUES ('130', '3', '36', '753', '678');
INSERT INTO `yu_volume_to_page` VALUES ('131', '4', '36', '976', '878');
INSERT INTO `yu_volume_to_page` VALUES ('132', '5', '36', '1592', '1432');
INSERT INTO `yu_volume_to_page` VALUES ('133', '2', '37', '694', '625');
INSERT INTO `yu_volume_to_page` VALUES ('134', '3', '37', '753', '678');
INSERT INTO `yu_volume_to_page` VALUES ('135', '4', '37', '976', '878');
INSERT INTO `yu_volume_to_page` VALUES ('136', '5', '37', '1592', '1432');
INSERT INTO `yu_volume_to_page` VALUES ('137', '2', '38', '351', '0');
INSERT INTO `yu_volume_to_page` VALUES ('138', '3', '38', '377', '0');
INSERT INTO `yu_volume_to_page` VALUES ('139', '4', '38', '482', '0');
INSERT INTO `yu_volume_to_page` VALUES ('140', '2', '39', '341', '0');
INSERT INTO `yu_volume_to_page` VALUES ('141', '3', '39', '367', '0');
INSERT INTO `yu_volume_to_page` VALUES ('142', '4', '39', '472', '0');
INSERT INTO `yu_volume_to_page` VALUES ('143', '2', '40', '328', '295');
INSERT INTO `yu_volume_to_page` VALUES ('144', '3', '40', '360', '324');
INSERT INTO `yu_volume_to_page` VALUES ('145', '4', '40', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('146', '5', '40', '1100', '990');
INSERT INTO `yu_volume_to_page` VALUES ('147', '2', '41', '334', '301');
INSERT INTO `yu_volume_to_page` VALUES ('148', '3', '41', '367', '330');
INSERT INTO `yu_volume_to_page` VALUES ('149', '4', '41', '576', '519');
INSERT INTO `yu_volume_to_page` VALUES ('150', '5', '41', '1100', '990');
INSERT INTO `yu_volume_to_page` VALUES ('151', '2', '42', '275', '248');
INSERT INTO `yu_volume_to_page` VALUES ('152', '3', '42', '308', '277');
INSERT INTO `yu_volume_to_page` VALUES ('153', '4', '42', '524', '472');
INSERT INTO `yu_volume_to_page` VALUES ('154', '5', '42', '1100', '990');
INSERT INTO `yu_volume_to_page` VALUES ('155', '2', '43', '419', '377');
INSERT INTO `yu_volume_to_page` VALUES ('156', '3', '43', '472', '424');
INSERT INTO `yu_volume_to_page` VALUES ('157', '4', '43', '694', '625');
INSERT INTO `yu_volume_to_page` VALUES ('158', '5', '43', '956', '861');
INSERT INTO `yu_volume_to_page` VALUES ('159', '2', '44', '511', '460');
INSERT INTO `yu_volume_to_page` VALUES ('160', '3', '44', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('161', '4', '44', '688', '619');
INSERT INTO `yu_volume_to_page` VALUES ('162', '5', '44', '1290', '1161');
INSERT INTO `yu_volume_to_page` VALUES ('163', '2', '45', '360', '324');
INSERT INTO `yu_volume_to_page` VALUES ('164', '3', '45', '380', '342');
INSERT INTO `yu_volume_to_page` VALUES ('165', '4', '45', '531', '477');
INSERT INTO `yu_volume_to_page` VALUES ('166', '5', '45', '996', '896');
INSERT INTO `yu_volume_to_page` VALUES ('167', '2', '46', '511', '460');
INSERT INTO `yu_volume_to_page` VALUES ('168', '3', '46', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('169', '4', '46', '688', '619');
INSERT INTO `yu_volume_to_page` VALUES ('170', '5', '46', '1290', '1161');
INSERT INTO `yu_volume_to_page` VALUES ('171', '6', '46', '2489', '0');
INSERT INTO `yu_volume_to_page` VALUES ('172', '2', '47', '360', '324');
INSERT INTO `yu_volume_to_page` VALUES ('173', '3', '47', '373', '336');
INSERT INTO `yu_volume_to_page` VALUES ('174', '4', '47', '531', '477');
INSERT INTO `yu_volume_to_page` VALUES ('175', '5', '47', '1009', '908');
INSERT INTO `yu_volume_to_page` VALUES ('176', '2', '48', '406', '365');
INSERT INTO `yu_volume_to_page` VALUES ('177', '3', '48', '439', '395');
INSERT INTO `yu_volume_to_page` VALUES ('178', '4', '48', '753', '678');
INSERT INTO `yu_volume_to_page` VALUES ('179', '3', '49', '511', '460');
INSERT INTO `yu_volume_to_page` VALUES ('180', '2', '50', '511', '460');
INSERT INTO `yu_volume_to_page` VALUES ('181', '3', '50', '550', '495');
INSERT INTO `yu_volume_to_page` VALUES ('182', '4', '50', '688', '619');
INSERT INTO `yu_volume_to_page` VALUES ('183', '5', '50', '1290', '1161');
INSERT INTO `yu_volume_to_page` VALUES ('184', '2', '51', '347', '0');
INSERT INTO `yu_volume_to_page` VALUES ('185', '3', '51', '373', '0');
INSERT INTO `yu_volume_to_page` VALUES ('186', '4', '51', '478', '0');
INSERT INTO `yu_volume_to_page` VALUES ('187', '2', '52', '452', '0');
INSERT INTO `yu_volume_to_page` VALUES ('188', '3', '52', '511', '0');
INSERT INTO `yu_volume_to_page` VALUES ('189', '4', '52', '852', '0');
INSERT INTO `yu_volume_to_page` VALUES ('190', '2', '53', '321', '0');
INSERT INTO `yu_volume_to_page` VALUES ('191', '3', '53', '341', '0');
INSERT INTO `yu_volume_to_page` VALUES ('192', '4', '53', '452', '0');
INSERT INTO `yu_volume_to_page` VALUES ('193', '2', '54', '383', '0');
INSERT INTO `yu_volume_to_page` VALUES ('194', '3', '54', '400', '0');
INSERT INTO `yu_volume_to_page` VALUES ('195', '4', '54', '576', '0');
INSERT INTO `yu_volume_to_page` VALUES ('196', '5', '54', '1107', '0');
INSERT INTO `yu_volume_to_page` VALUES ('197', '2', '55', '386', '0');
INSERT INTO `yu_volume_to_page` VALUES ('198', '3', '55', '445', '0');
INSERT INTO `yu_volume_to_page` VALUES ('199', '4', '55', '760', '0');
INSERT INTO `yu_volume_to_page` VALUES ('200', '5', '55', '1376', '0');
INSERT INTO `yu_volume_to_page` VALUES ('201', '2', '56', '445', '0');
INSERT INTO `yu_volume_to_page` VALUES ('202', '3', '56', '472', '0');
INSERT INTO `yu_volume_to_page` VALUES ('203', '4', '56', '773', '0');
INSERT INTO `yu_volume_to_page` VALUES ('204', '2', '57', '386', '0');
INSERT INTO `yu_volume_to_page` VALUES ('205', '3', '57', '445', '0');
INSERT INTO `yu_volume_to_page` VALUES ('206', '4', '57', '760', '0');
INSERT INTO `yu_volume_to_page` VALUES ('207', '5', '57', '1376', '0');
INSERT INTO `yu_volume_to_page` VALUES ('208', '2', '58', '386', '0');
INSERT INTO `yu_volume_to_page` VALUES ('209', '3', '58', '445', '0');
INSERT INTO `yu_volume_to_page` VALUES ('210', '4', '58', '760', '0');
INSERT INTO `yu_volume_to_page` VALUES ('211', '5', '58', '1376', '0');
INSERT INTO `yu_volume_to_page` VALUES ('212', '2', '59', '386', '0');
INSERT INTO `yu_volume_to_page` VALUES ('213', '3', '59', '445', '0');
INSERT INTO `yu_volume_to_page` VALUES ('214', '4', '59', '760', '0');
INSERT INTO `yu_volume_to_page` VALUES ('215', '5', '59', '1376', '0');
INSERT INTO `yu_volume_to_page` VALUES ('216', '2', '60', '773', '696');
INSERT INTO `yu_volume_to_page` VALUES ('217', '3', '60', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('218', '4', '60', '1114', '1002');
INSERT INTO `yu_volume_to_page` VALUES ('219', '5', '60', '1441', '1297');
INSERT INTO `yu_volume_to_page` VALUES ('220', '2', '61', '773', '696');
INSERT INTO `yu_volume_to_page` VALUES ('221', '3', '61', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('222', '4', '61', '1114', '1002');
INSERT INTO `yu_volume_to_page` VALUES ('223', '5', '61', '1441', '1297');
INSERT INTO `yu_volume_to_page` VALUES ('224', '2', '62', '773', '696');
INSERT INTO `yu_volume_to_page` VALUES ('225', '3', '62', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('226', '4', '62', '1114', '1002');
INSERT INTO `yu_volume_to_page` VALUES ('227', '5', '62', '1441', '1297');
INSERT INTO `yu_volume_to_page` VALUES ('228', '2', '63', '465', '419');
INSERT INTO `yu_volume_to_page` VALUES ('229', '3', '63', '504', '454');
INSERT INTO `yu_volume_to_page` VALUES ('230', '4', '63', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('231', '5', '63', '1421', '1279');
INSERT INTO `yu_volume_to_page` VALUES ('232', '6', '63', '2751', '2476');
INSERT INTO `yu_volume_to_page` VALUES ('233', '2', '64', '596', '536');
INSERT INTO `yu_volume_to_page` VALUES ('234', '3', '64', '635', '572');
INSERT INTO `yu_volume_to_page` VALUES ('235', '2', '65', '596', '536');
INSERT INTO `yu_volume_to_page` VALUES ('236', '3', '65', '635', '572');
INSERT INTO `yu_volume_to_page` VALUES ('237', '4', '65', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('238', '5', '65', '1421', '1279');
INSERT INTO `yu_volume_to_page` VALUES ('239', '6', '65', '2751', '2476');
INSERT INTO `yu_volume_to_page` VALUES ('240', '2', '66', '596', '536');
INSERT INTO `yu_volume_to_page` VALUES ('241', '3', '66', '635', '572');
INSERT INTO `yu_volume_to_page` VALUES ('242', '4', '66', '838', '755');
INSERT INTO `yu_volume_to_page` VALUES ('243', '5', '66', '1421', '1279');
INSERT INTO `yu_volume_to_page` VALUES ('244', '6', '66', '2751', '2476');
INSERT INTO `yu_volume_to_page` VALUES ('245', '2', '67', '400', '360');
INSERT INTO `yu_volume_to_page` VALUES ('246', '3', '67', '439', '395');
INSERT INTO `yu_volume_to_page` VALUES ('247', '4', '67', '642', '578');
INSERT INTO `yu_volume_to_page` VALUES ('248', '5', '67', '1225', '1102');
INSERT INTO `yu_volume_to_page` VALUES ('249', '6', '67', '2489', '2240');
INSERT INTO `yu_volume_to_page` VALUES ('250', '2', '68', '439', '395');
INSERT INTO `yu_volume_to_page` VALUES ('251', '3', '68', '465', '419');
INSERT INTO `yu_volume_to_page` VALUES ('252', '4', '68', '642', '578');
INSERT INTO `yu_volume_to_page` VALUES ('253', '5', '68', '1225', '1102');
INSERT INTO `yu_volume_to_page` VALUES ('254', '6', '68', '2489', '2240');
INSERT INTO `yu_volume_to_page` VALUES ('255', '2', '69', '439', '395');
INSERT INTO `yu_volume_to_page` VALUES ('256', '3', '69', '465', '419');
INSERT INTO `yu_volume_to_page` VALUES ('257', '4', '69', '642', '578');
INSERT INTO `yu_volume_to_page` VALUES ('258', '5', '69', '1225', '1102');
INSERT INTO `yu_volume_to_page` VALUES ('259', '6', '69', '2489', '2240');
INSERT INTO `yu_volume_to_page` VALUES ('260', '2', '70', '400', '360');
INSERT INTO `yu_volume_to_page` VALUES ('261', '3', '70', '439', '395');
INSERT INTO `yu_volume_to_page` VALUES ('262', '4', '70', '642', '578');
INSERT INTO `yu_volume_to_page` VALUES ('263', '5', '70', '1225', '1102');
INSERT INTO `yu_volume_to_page` VALUES ('264', '6', '70', '2489', '2240');

-- ----------------------------
-- View structure for yu_popular
-- ----------------------------
DROP VIEW IF EXISTS `yu_popular`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `yu_popular` AS select `p1`.`id` AS `id`,`p1`.`title` AS `title`,(select `cl`.`image` from `yu_color_to_page` `cl` where (`cl`.`page_id` = `p1`.`id`) order by `cl`.`color_id` limit 1) AS `image`,(select `pr`.`price` from `yu_volume_to_page` `pr` where (`pr`.`page_id` = `p1`.`id`) order by `pr`.`price` limit 1) AS `price` from (`yu_popular_pages` `pp` join `yu_pages` `p1` on((`pp`.`page_id` = `p1`.`id`))); ;

-- ----------------------------
-- View structure for yu_special
-- ----------------------------
DROP VIEW IF EXISTS `yu_special`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `yu_special` AS SELECT
	p1.id AS id,
	p1.title AS title,
	(
		SELECT
			cl.image
		FROM
			yu_color_to_page cl
		WHERE
			cl.page_id = p1.id
		ORDER BY
			cl.color_id
		LIMIT 1
	) AS image,
	(
		SELECT
			pr.price
		FROM
			yu_volume_to_page pr
		WHERE
			pr.page_id = p1.id
		ORDER BY
			pr.price
		LIMIT 1
	) AS price
FROM
	yu_special_pages pp
JOIN yu_pages p1 ON pp.page_id = p1.id ;
