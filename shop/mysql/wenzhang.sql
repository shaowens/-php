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

 Date: 16/06/2020 22:28:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for wenzhang
-- ----------------------------
DROP TABLE IF EXISTS `wenzhang`;
CREATE TABLE `wenzhang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` timestamp(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wenzhang
-- ----------------------------
INSERT INTO `wenzhang` VALUES (6, '三个秃头', '随便一段话', '邵文', '2020-06-03 03:35:56');
INSERT INTO `wenzhang` VALUES (3, '测试3', '33', '邵文', '2020-05-31 23:35:35');
INSERT INTO `wenzhang` VALUES (5, '测试4', '44', '邵文', '2020-05-31 23:35:44');

SET FOREIGN_KEY_CHECKS = 1;
