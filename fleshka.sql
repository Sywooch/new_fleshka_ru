/*
Navicat MySQL Data Transfer

Source Server         : localhost-MySQL
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : fleshka

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2017-02-03 17:19:33
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_categories
-- ----------------------------
INSERT INTO `yu_categories` VALUES ('4', 'Флешки', '0', '');
INSERT INTO `yu_categories` VALUES ('5', 'Пластиковые', '4', null);
INSERT INTO `yu_categories` VALUES ('6', 'Металлические', '4', null);
INSERT INTO `yu_categories` VALUES ('7', 'ПВХ (резиновые флешки)', '4', null);
INSERT INTO `yu_categories` VALUES ('8', 'Карточки', '4', null);
INSERT INTO `yu_categories` VALUES ('9', 'Кожаные', '4', null);
INSERT INTO `yu_categories` VALUES ('10', 'Стеклянные', '4', null);
INSERT INTO `yu_categories` VALUES ('11', 'Деревянные', '4', null);
INSERT INTO `yu_categories` VALUES ('12', 'Флешки-браслеты', '4', null);
INSERT INTO `yu_categories` VALUES ('13', 'Пластик-металл', '4', null);
INSERT INTO `yu_categories` VALUES ('14', 'Бумажные', '4', null);
INSERT INTO `yu_categories` VALUES ('15', 'С мини чипом', '4', null);
INSERT INTO `yu_categories` VALUES ('16', 'OTG-флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('17', 'Флешка-буклет', '4', null);
INSERT INTO `yu_categories` VALUES ('18', 'Флешки-ручки', '4', null);
INSERT INTO `yu_categories` VALUES ('19', 'Флешки-часы', '4', null);
INSERT INTO `yu_categories` VALUES ('20', 'Светящиеся флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('21', 'Аквафлешки', '4', null);
INSERT INTO `yu_categories` VALUES ('22', 'Металлические по индивидуальному дизайну', '4', null);
INSERT INTO `yu_categories` VALUES ('23', 'Детские флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('24', 'Сувенирные флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('25', 'Оригинальные флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('26', 'Подарочные флешки', '4', null);
INSERT INTO `yu_categories` VALUES ('27', 'Флешки-брелки', '4', null);
INSERT INTO `yu_categories` VALUES ('28', 'Зарядные устройства (powerbank)', '0', null);
INSERT INTO `yu_categories` VALUES ('29', 'Зарядные устройства Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('30', 'Подарочные наборы', '0', null);
INSERT INTO `yu_categories` VALUES ('31', 'Фитнес-браслеты Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('32', 'Продукция Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('33', 'IP-камера Xiaomi MiJia 360° Home Camera', '0', null);
INSERT INTO `yu_categories` VALUES ('34', 'Видеорегистратор Xiaomi Car Yi WiFi DVR', '0', null);
INSERT INTO `yu_categories` VALUES ('35', 'Гибкая USB-лампа Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('36', 'Камера Xiaomi Yi Action Camera', '0', null);
INSERT INTO `yu_categories` VALUES ('37', 'Наушники и гарнитуры Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('38', 'Портативные колонки Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('39', 'Умные напольные весы Xiaomi', '0', null);
INSERT INTO `yu_categories` VALUES ('40', 'Power Bank (по индивидуальному дизайну)', '0', null);
INSERT INTO `yu_categories` VALUES ('41', 'Фитнес-браслеты', '0', null);
INSERT INTO `yu_categories` VALUES ('42', 'Умные часы (Smart watch)', '0', null);
INSERT INTO `yu_categories` VALUES ('43', 'Жесткие диски', '0', null);
INSERT INTO `yu_categories` VALUES ('44', 'Чехлы для мобильных телефонов', '0', null);
INSERT INTO `yu_categories` VALUES ('45', 'Тестеры СОЭКС', '0', null);
INSERT INTO `yu_categories` VALUES ('46', 'Power Bank на солнечных батареях', '0', null);
INSERT INTO `yu_categories` VALUES ('47', 'Power Bank - чехол', '0', null);
INSERT INTO `yu_categories` VALUES ('48', 'Power Bank с беспроводной зарядкой (индукционный)', '0', null);
INSERT INTO `yu_categories` VALUES ('49', 'Беспроводная зарядка (индукционная)', '0', null);
INSERT INTO `yu_categories` VALUES ('50', 'Карты памяти', '0', null);
INSERT INTO `yu_categories` VALUES ('51', 'Упаковка', '0', null);
INSERT INTO `yu_categories` VALUES ('52', 'Power Bank - колонка', '0', null);
INSERT INTO `yu_categories` VALUES ('53', 'Компьютерные мышки', '0', null);
INSERT INTO `yu_categories` VALUES ('54', 'Монопод', '0', null);

-- ----------------------------
-- Table structure for yu_category_to_page
-- ----------------------------
DROP TABLE IF EXISTS `yu_category_to_page`;
CREATE TABLE `yu_category_to_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_category_to_page
-- ----------------------------
INSERT INTO `yu_category_to_page` VALUES ('22', '2', '4');
INSERT INTO `yu_category_to_page` VALUES ('23', '3', '4');
INSERT INTO `yu_category_to_page` VALUES ('26', '2', '5');

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
INSERT INTO `yu_checkout` VALUES ('10', '5', '', '[{\"count\":4,\"vol\":2,\"id\":1,\"price\":133},{\"count\":2,\"vol\":4,\"id\":2,\"price\":300}]', '[{\"val\":\"#ff0000\",\"id\":2,\"title\":\"\\u041a\\u0440\\u0430\\u0441\\u043d\\u044b\\u0439\"}]', '587273c78a28d', 'werwer', 'werwe@sfsdf.er', 'qwe', '324234', '1');
INSERT INTO `yu_checkout` VALUES ('11', '5', '', '[{\"count\":4,\"vol\":2,\"id\":1,\"price\":133},{\"count\":2,\"vol\":4,\"id\":2,\"price\":300}]', '[{\"val\":\"#ff0000\",\"id\":2,\"title\":\"\\u041a\\u0440\\u0430\\u0441\\u043d\\u044b\\u0439\"}]', '587273e2381e7', 'qwe', 'werwe@sfsdf.er', 'qwe', 'qwe', '1');
INSERT INTO `yu_checkout` VALUES ('12', '5', '', '[{\"count\":4,\"vol\":2,\"id\":1,\"price\":133},{\"count\":2,\"vol\":4,\"id\":2,\"price\":300}]', '[{\"val\":\"#ff0000\",\"id\":2,\"title\":\"\\u041a\\u0440\\u0430\\u0441\\u043d\\u044b\\u0439\"}]', '5872743c31564', 'werwer', 'werwe@sfsdf.er', 'qwe', 'qwe', '1');
INSERT INTO `yu_checkout` VALUES ('13', '5', '', '[{\"count\":4,\"vol\":2,\"id\":1,\"price\":133},{\"count\":2,\"vol\":4,\"id\":2,\"price\":300}]', '[{\"val\":\"#ff0000\",\"id\":2,\"title\":\"\\u041a\\u0440\\u0430\\u0441\\u043d\\u044b\\u0439\"}]', '587274ab53d52', 'werwer', 'werwe@sfsdf.er', 'qwd', 'qwe', '1');
INSERT INTO `yu_checkout` VALUES ('14', '5', '', '[{\"count\":4,\"vol\":2,\"id\":1,\"price\":133},{\"count\":2,\"vol\":4,\"id\":2,\"price\":300}]', '[{\"val\":\"#ff0000\",\"id\":2,\"title\":\"\\u041a\\u0440\\u0430\\u0441\\u043d\\u044b\\u0439\"}]', '587276e7b74a9', 'qwe', 'werwe@sfsdf.er', 'qwe', '324234', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_color_to_page
-- ----------------------------
INSERT INTO `yu_color_to_page` VALUES ('49', '4', '1', '58444dc1c8c61.jpg');
INSERT INTO `yu_color_to_page` VALUES ('50', '4', '2', '58444dcb47a71.jpg');
INSERT INTO `yu_color_to_page` VALUES ('53', '5', '1', '58444c61e1450.jpg');
INSERT INTO `yu_color_to_page` VALUES ('54', '5', '2', '58444dcb47a71.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yu_pages
-- ----------------------------
INSERT INTO `yu_pages` VALUES (' Флешка 501 TWIST Флешки оптом под нанесение логотипа', null, '<p>&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа</p>\r\n', '1', '1', '', '', '', '', 'fleshka', null, '0', '4', '0', null);
INSERT INTO `yu_pages` VALUES (' Флешка 234234 2 34 234', null, '<p>&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа&nbsp;Флешка 501 TWIST Флешки оптом под нанесение логотипа</p>\r\n', '1', '1', '', '', '', '', 'fleshka', null, '0', '5', '1', null);

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
INSERT INTO `yu_popular_pages` VALUES ('1', '4');

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
INSERT INTO `yu_session` VALUES ('d51fsb5kj1nv7o1uaja1g3gq55', '1485953556', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('er54eda35pnl3qd95h5k6vt9n5', '1485953719', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);
INSERT INTO `yu_session` VALUES ('pr1i8homv3rasett9gr62ilbq6', '1486029987', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `yu_session` VALUES ('qa7vp6f429jrd5lhplniqr4hc2', '1486029731', 0x5F5F666C6173687C613A303A7B7D726567696F6E7C613A353A7B733A353A227469746C65223B733A31323A22D09CD0BED181D0BAD0B2D0B0223B733A333A2274656C223B733A31373A2238202834393529203634362D38352D3037223B733A323A226964223B693A313B733A373A2261646472657373223B733A35333A22D183D0BB2E20D091D0B0D180D0BAD0BBD0B0D18F20372C20D091D0A620D0A0D183D0B1D0B8D0BD2C20D0BED184D0B8D18120353037223B733A343A226D6F6465223B733A33323A22D18120313020D0B4D0BE20323020D0B5D0B6D0B5D0B4D0BDD0B5D0B2D0BDD0BE223B7D);
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
INSERT INTO `yu_special_pages` VALUES ('1', '5');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_volumes
-- ----------------------------
INSERT INTO `yu_volumes` VALUES ('1', '2');
INSERT INTO `yu_volumes` VALUES ('2', '4');

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yu_volume_to_page
-- ----------------------------
INSERT INTO `yu_volume_to_page` VALUES ('31', '1', '5', '133', '22');
INSERT INTO `yu_volume_to_page` VALUES ('33', '1', '4', '150', '300');
INSERT INTO `yu_volume_to_page` VALUES ('34', '2', '4', '265', '300');
INSERT INTO `yu_volume_to_page` VALUES ('38', '2', '5', '300', '300');

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
