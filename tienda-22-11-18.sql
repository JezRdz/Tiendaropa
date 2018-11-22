/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : tienda

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-22 03:56:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Hombre');
INSERT INTO `categories` VALUES ('2', 'Mujer');

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', '5bf66874cd85222112018092732.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:27:32', '2018-11-22 09:27:32', '0');
INSERT INTO `images` VALUES ('2', '5bf66874e422d22112018092732.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:27:32', '2018-11-22 09:27:32', '0');
INSERT INTO `images` VALUES ('3', '5bf66874eb9c822112018092732.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:27:32', '2018-11-22 09:27:32', '0');
INSERT INTO `images` VALUES ('4', '5bf669ab1464b22112018093243.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:32:43', '2018-11-22 09:32:43', '0');
INSERT INTO `images` VALUES ('5', '5bf669e72b13922112018093343.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:33:43', '2018-11-22 09:33:43', '0');
INSERT INTO `images` VALUES ('6', '5bf66aa04bfcf22112018093648.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:36:48', '2018-11-22 09:36:48', '0');
INSERT INTO `images` VALUES ('7', '5bf66aa5c016b22112018093653.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:36:53', '2018-11-22 09:36:53', '0');
INSERT INTO `images` VALUES ('8', '5bf66fc61146622112018095846.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 09:58:46', '2018-11-22 09:58:46', '0');
INSERT INTO `images` VALUES ('9', '5bf6708ae63b822112018100202.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 10:02:02', '2018-11-22 10:02:02', '0');
INSERT INTO `images` VALUES ('10', '5bf67b4b790ba22112018104755.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 10:47:55', '2018-11-22 10:47:55', '0');
INSERT INTO `images` VALUES ('11', '5bf67bb86c8eb22112018104944.jpg', 'img/admin/productos/', 'image/jpeg', '2018-11-22 10:49:44', '2018-11-22 10:49:44', '0');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `image2_id` int(11) NOT NULL,
  `image3_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'producto1', 'abb', '100', '1', '1', '6', '0', '0', 'camisa azul');
INSERT INTO `products` VALUES ('2', 'mujer2', 'aaaa', '200', '1', '2', '9', '0', '0', 'vestido rosa');
INSERT INTO `products` VALUES ('4', 'hombre1', 'hhh', '300', '1', '1', '1', '5', '3', 'camisa blanca');
INSERT INTO `products` VALUES ('5', 'mujer1', 'mmm', '222', '1', '2', '8', '0', '0', 'asasasasa');
INSERT INTO `products` VALUES ('6', 'mujer3', 'aaazul', '400', '1', '2', '10', '0', '0', 'vestido azul');
INSERT INTO `products` VALUES ('7', 'mujer4', 'dots', '500', '1', '2', '11', '0', '0', 'vestido azul con puntos blancos');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` enum('cliente','admin') NOT NULL DEFAULT 'cliente',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `name` char(255) NOT NULL,
  `lastname` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin', '$2a$10$q6L.aIzf0Mxlo1Xoa0iOOO63cctfwH8hm4kwSUfB6sLKLHVP5ru5W', '1', 'admin', 'ad');
INSERT INTO `users` VALUES ('2', 'admin', 'jairadmin', '$2a$10$Olqiw9ItnYdXgQ86MtM48.NdCCikQCjGVyu7gTuokvuo.HOeITVb6', '1', 'JAIR', 'RODRIGUEZ');
INSERT INTO `users` VALUES ('3', 'cliente', 'AAAAJUA', '$2a$10$MENjGqt/ZycGaZ3he.kV/eZ8XLddlOdhCqbjsOAZQYTu/xuN/ps.u', '1', 'JOSEFA', 'PEREZ');
