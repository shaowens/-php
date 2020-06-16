/*
 Navicat MySQL Data Transfer

 Source Server         : mytest
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : clothes

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 16/06/2020 22:27:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `old_price` float(11, 2) NULL DEFAULT 0.00,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES (1, '     连衣裙   ', '1', 98, '超漂亮的连衣裙', 597.00, 'images/连衣裙.jpg');
INSERT INTO `goods` VALUES (2, '半身裙', '2', 99, '超漂亮的半身裙', 339.00, 'images/半身裙1.jpg');
INSERT INTO `goods` VALUES (3, '工装裤', '3', 59, '帅气的工装裤', 329.00, 'images/工装裤1.jpg');
INSERT INTO `goods` VALUES (4, '格子衫', '4', 69, '帅气的格子衫', 349.00, 'images/格子衫1.jpg');

SET FOREIGN_KEY_CHECKS = 1;
