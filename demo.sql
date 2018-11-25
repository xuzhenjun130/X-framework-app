/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : demo

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 25/11/2018 12:45:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` bigint(11) UNSIGNED NOT NULL COMMENT '电话',
  `username` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '登陆密码',
  `created_at` datetime(0) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `phone`(`phone`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES (1, 15323323424, 'sherman', '$2y$10$m3l81MQ37jSLXwUnHc1.YOf49cWStIG2IT4etGOb5P0CGvx71nqFO', '2018-11-25 10:11:55');
INSERT INTO `member` VALUES (2, 15323423434, 'hello', '$2y$10$hoyBlFGUeQb.dDzduiUrVeDe2QNzVEyc0jBAPxKQ/9UIAl/KES.K.', '2018-11-25 10:11:27');
INSERT INTO `member` VALUES (3, 15323323425, 'php_man', '$2y$10$tAsdPKVFjjWkNBxbP.iby.Gg564ePpQM9t0uOTDS7aQoxP9L.9ih.', '2018-11-25 11:11:45');

SET FOREIGN_KEY_CHECKS = 1;
