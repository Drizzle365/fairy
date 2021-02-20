/*
 Navicat Premium Data Transfer

 Source Server         : 仙之梦
 Source Server Type    : MySQL
 Source Server Version : 80020
 Source Schema         : xm

 Target Server Type    : MySQL
 Target Server Version : 80020
 File Encoding         : 65001

 Date: 20/02/2021 13:55:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES (1, '石化·六臂魔佛', '一个奇怪的雕像');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES (1, '铁剑', '制作精良的铁剑', 1);
INSERT INTO `goods` VALUES (2, '皮革盔甲', '用老虎的皮制作的坚韧的盔甲', 1);

-- ----------------------------
-- Table structure for goods_equip
-- ----------------------------
DROP TABLE IF EXISTS `goods_equip`;
CREATE TABLE `goods_equip`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hp` int NULL DEFAULT NULL,
  `mp` int NULL DEFAULT NULL,
  `atk` int NULL DEFAULT NULL,
  `def` int NULL DEFAULT NULL,
  `spd` int NULL DEFAULT NULL,
  `grow` float NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods_equip
-- ----------------------------
INSERT INTO `goods_equip` VALUES (1, '铁剑', NULL, 20, 15, NULL, NULL, 1.1);
INSERT INTO `goods_equip` VALUES (2, '皮革盔甲', 100, NULL, NULL, 15, NULL, 1.1);

-- ----------------------------
-- Table structure for lv
-- ----------------------------
DROP TABLE IF EXISTS `lv`;
CREATE TABLE `lv`  (
  `Lv` int NULL DEFAULT NULL,
  `exp` bigint NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lv
-- ----------------------------
INSERT INTO `lv` VALUES (1, 100);
INSERT INTO `lv` VALUES (2, 150);
INSERT INTO `lv` VALUES (3, 150);
INSERT INTO `lv` VALUES (5, 150);
INSERT INTO `lv` VALUES (6, 300);
INSERT INTO `lv` VALUES (7, 300);
INSERT INTO `lv` VALUES (8, 300);
INSERT INTO `lv` VALUES (9, 300);
INSERT INTO `lv` VALUES (10, 400);
INSERT INTO `lv` VALUES (11, 500);
INSERT INTO `lv` VALUES (12, 600);
INSERT INTO `lv` VALUES (13, 700);
INSERT INTO `lv` VALUES (14, 700);
INSERT INTO `lv` VALUES (15, 700);
INSERT INTO `lv` VALUES (16, 1000);
INSERT INTO `lv` VALUES (17, 1000);
INSERT INTO `lv` VALUES (18, 1000);
INSERT INTO `lv` VALUES (19, 1000);

-- ----------------------------
-- Table structure for map
-- ----------------------------
DROP TABLE IF EXISTS `map`;
CREATE TABLE `map`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `N` int NULL DEFAULT NULL,
  `S` int NULL DEFAULT NULL,
  `W` int NULL DEFAULT NULL,
  `E` int NULL DEFAULT NULL,
  `npc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activity` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `monster` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of map
-- ----------------------------
INSERT INTO `map` VALUES (1, '桃花村', '此村土地平旷，屋舍俨然，有良田、美池、桑竹之属。阡陌交通，鸡犬相闻。', 2, 7, 4, 6, '2,1', '10016', '1', '1,2');
INSERT INTO `map` VALUES (2, '铁匠铺', '打铁的老王做出来的装备贼强', 1, 3, NULL, NULL, '5', NULL, NULL, NULL);
INSERT INTO `map` VALUES (3, '后山', '神秘的大山', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `map` VALUES (4, '学堂', '学习的地方', NULL, NULL, 5, 1, '3,4', NULL, NULL, NULL);
INSERT INTO `map` VALUES (5, '山洞', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL);
INSERT INTO `map` VALUES (6, '杂货铺', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `map` VALUES (7, '村长住宅', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for monster
-- ----------------------------
DROP TABLE IF EXISTS `monster`;
CREATE TABLE `monster`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of monster
-- ----------------------------
INSERT INTO `monster` VALUES (1, '小鸡', '人畜无害的小鸡');
INSERT INTO `monster` VALUES (2, '小鸭', '人畜无害的小鸭');

-- ----------------------------
-- Table structure for npc
-- ----------------------------
DROP TABLE IF EXISTS `npc`;
CREATE TABLE `npc`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `talk` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of npc
-- ----------------------------
INSERT INTO `npc` VALUES (1, '老村长', '桃花村的老村长', NULL);
INSERT INTO `npc` VALUES (2, '司婆婆', '村里神秘的老婆婆', '你来了呀');
INSERT INTO `npc` VALUES (3, '小润润', '可可爱爱的小女孩', '我是笨蛋！');
INSERT INTO `npc` VALUES (4, '小康康', '调皮的小男孩', '没错，小润润是笨蛋！');
INSERT INTO `npc` VALUES (5, '牛老二', '大名鼎鼎的桃花村第一铁匠', '来看看装备吗');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `major` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `silver` bigint NULL DEFAULT NULL,
  `Exp` bigint NULL DEFAULT NULL,
  `Lv` int NULL DEFAULT NULL,
  `Hp` int NULL DEFAULT NULL,
  `Mp` int NULL DEFAULT NULL,
  `Atk` int NULL DEFAULT NULL,
  `Def` int NULL DEFAULT NULL,
  `Spd` int NULL DEFAULT NULL,
  `Hp_ing` int NULL DEFAULT NULL,
  `Mp_ing` int NULL DEFAULT NULL,
  `map` int NULL DEFAULT NULL,
  `task` int NULL DEFAULT NULL,
  `sidequest` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (10016, '秦牧', '男', NULL, NULL, 10, 2, 120, 100, 10, 10, 10, 100, 50, 3, 3, NULL);
INSERT INTO `role` VALUES (10023, '大笨蛋', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10024, '1’and’1’=’1', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10025, '工会积极', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10026, '笨蛋', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10027, 'wdwda', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10030, '白老师', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, NULL, 1, NULL);
INSERT INTO `role` VALUES (10031, '大笨猪', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, NULL, 1, NULL);
INSERT INTO `role` VALUES (10036, '23', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10037, 'emoji', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 7, 1, NULL);
INSERT INTO `role` VALUES (10038, '何鹏飞', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 2, 1, NULL);
INSERT INTO `role` VALUES (10039, '龙吟天下', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10040, '513', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 2, 1, NULL);
INSERT INTO `role` VALUES (10041, '9', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10042, '哈哈', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10043, '奥利给', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10044, 'i的拒绝', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10045, '沐雨', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10046, '伶仙', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 2, NULL, NULL);
INSERT INTO `role` VALUES (10047, '木之又', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10048, '小俊', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10049, '爸爸', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10050, '啦啦啦', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10051, '虞姬', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10052, '小占', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10053, 'baize', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 4, NULL, NULL);
INSERT INTO `role` VALUES (10054, '刘威宏', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, NULL, NULL);
INSERT INTO `role` VALUES (10056, '圆圆小可爱ya', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10057, 'admin@pengge.vip', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10058, '吾王万岁', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10059, 'GVH-039', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10060, '111', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 7, 1, NULL);
INSERT INTO `role` VALUES (10061, '看看啥', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 4, 1, NULL);
INSERT INTO `role` VALUES (10062, '天咗', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10063, '习讯云', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10064, 'a', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10065, '故人容若丶', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 2, NULL);
INSERT INTO `role` VALUES (10066, '狗蛋', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 6, 2, NULL);
INSERT INTO `role` VALUES (10067, '玩玩看', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 2, NULL);
INSERT INTO `role` VALUES (10068, '', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10069, '我以我为傲', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 2, NULL);
INSERT INTO `role` VALUES (10070, 'test', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 2, NULL);
INSERT INTO `role` VALUES (10071, '324', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10072, 'Andy', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 5, NULL);
INSERT INTO `role` VALUES (10073, '小成', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10074, 'panglei', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 4, 1, NULL);
INSERT INTO `role` VALUES (10075, '屁屁仔', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 3, NULL);
INSERT INTO `role` VALUES (10076, '123456789', '女', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 5, NULL);
INSERT INTO `role` VALUES (10077, '温某某', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 2, NULL);
INSERT INTO `role` VALUES (10078, '346', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);
INSERT INTO `role` VALUES (10079, '沐辰', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 2, 2, NULL);
INSERT INTO `role` VALUES (10080, '789', '男', NULL, NULL, 10, 1, 100, 50, 10, 10, 10, 100, 50, 1, 1, NULL);

-- ----------------------------
-- Table structure for role_goods
-- ----------------------------
DROP TABLE IF EXISTS `role_goods`;
CREATE TABLE `role_goods`  (
  `Id` int NOT NULL,
  `goods_id` int NOT NULL,
  `goods_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `num` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id`, `goods_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_goods
-- ----------------------------
INSERT INTO `role_goods` VALUES (10016, 1, '铁剑', 5);
INSERT INTO `role_goods` VALUES (10016, 2, '皮革盔甲', 3);

-- ----------------------------
-- Table structure for task
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task`  (
  `Id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `talk` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `goods` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `silver` int NULL DEFAULT NULL,
  `class` int NULL DEFAULT NULL,
  `point_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of task
-- ----------------------------
INSERT INTO `task` VALUES (1, '寻找司婆婆', '去桃源村找到司婆婆并与之对话', '小屁孩长大了呢，是时候放你出去历练历练了，婆婆给你点钱去北边铁匠铺买点趁手的兵器吧。', NULL, 2000, 1, 2);
INSERT INTO `task` VALUES (3, '购买装备', '去铁匠铺，购买装备', '准备出门历练了吗，司婆婆已经提前打好招呼啦，这就给您拿来装备', '1,2', -2000, 1, 5);
INSERT INTO `task` VALUES (5, '来一场战斗吧', '去桃源村挑战怪物小鸡', NULL, NULL, 1500, 2, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10081 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (10016, '时雨', 'i@drizzle.vip', '20011205', '2021年02月20日01时31分pm', '27.218.74.91');
INSERT INTO `user` VALUES (10017, 'HanFengA7', 'tancan137@foxmail.com', '1091044631', NULL, NULL);
INSERT INTO `user` VALUES (10019, '恶魔', '3162274149', '1314520', NULL, NULL);
INSERT INTO `user` VALUES (10020, '牛牛', '719586684@qq.com', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10021, '寒神', '1764378198@qq.com', 'wa684572', NULL, NULL);
INSERT INTO `user` VALUES (10022, '随风落叶', '1054114709@qq.com', 'qazwsxedcrfv', NULL, NULL);
INSERT INTO `user` VALUES (10023, '10016', '396823203@qq.com', '20011205', NULL, NULL);
INSERT INTO `user` VALUES (10024, '123’ or 1=1 #', '123456@qq.com', '123’ or 1=1 #', NULL, NULL);
INSERT INTO `user` VALUES (10025, 'qwer', '123@qq.com', 'qwer', NULL, NULL);
INSERT INTO `user` VALUES (10026, '拉拉裤', '吞吐', 'ggdrgh', NULL, NULL);
INSERT INTO `user` VALUES (10027, 'swdas', 'sas', 'dasdas', NULL, NULL);
INSERT INTO `user` VALUES (10028, '时雨', 'i@drizzle.vipasd', 'asd', NULL, NULL);
INSERT INTO `user` VALUES (10029, 'xxxx', '2020@x.xxx', '?', NULL, NULL);
INSERT INTO `user` VALUES (10030, '白老师', '1723757166@qq.com', 's123190776', NULL, NULL);
INSERT INTO `user` VALUES (10036, '4+45', '89654', '486', NULL, NULL);
INSERT INTO `user` VALUES (10037, '111', '11111@qqq', '111', NULL, NULL);
INSERT INTO `user` VALUES (10038, '何鹏飞', '2363894951@qq.com', 'hpf19981030', NULL, NULL);
INSERT INTO `user` VALUES (10039, '龙吟天下', '928721935@qq.com', '111111', NULL, NULL);
INSERT INTO `user` VALUES (10040, '153', '654343', '153', NULL, NULL);
INSERT INTO `user` VALUES (10041, '9', '9', '9', NULL, NULL);
INSERT INTO `user` VALUES (10042, 'admin', '2942720906@qq.com', '2942720906', NULL, NULL);
INSERT INTO `user` VALUES (10043, '22829', '4648@qq.com', '408060', NULL, NULL);
INSERT INTO `user` VALUES (10044, 'jjdjjd', 'hjdjdj', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10045, '沐雨', '65189848@qq.com', 'a1314520', NULL, NULL);
INSERT INTO `user` VALUES (10046, '伶仙', 'admin@qq.com', 'admin', NULL, NULL);
INSERT INTO `user` VALUES (10047, '大白白', '1537416660@qq.com', 'sc981016', NULL, NULL);
INSERT INTO `user` VALUES (10048, '小俊', 'eternally@97hjh.cn', '971013hjh', NULL, NULL);
INSERT INTO `user` VALUES (10049, 'ti0s', '619191544@qq.com', 'kaixin', NULL, NULL);
INSERT INTO `user` VALUES (10050, '555', '376497506@qq.com', '8301086602', NULL, NULL);
INSERT INTO `user` VALUES (10051, '虞姬', '53081145@qq.com', 'zzz1213', NULL, NULL);
INSERT INTO `user` VALUES (10052, '小占', '445040112@qq.com', '1111lh88', NULL, NULL);
INSERT INTO `user` VALUES (10053, 'baize', '1403150612@qq.com', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10054, 'Julyan', 'Julyaner@vip.qq.com', 'Julyan', NULL, NULL);
INSERT INTO `user` VALUES (10055, '1', '1', '1', NULL, NULL);
INSERT INTO `user` VALUES (10056, 'aujsjz', 'z@loli.vip', 'aujsjz', NULL, NULL);
INSERT INTO `user` VALUES (10057, '21121', 'admin@pengge.vip', 'admin@pengge.vip', NULL, NULL);
INSERT INTO `user` VALUES (10058, '吾王万岁', '1343914869@qq.com', '022994', NULL, NULL);
INSERT INTO `user` VALUES (10059, 'GVH-039', 'admin@qqmzb.xin', '3453457375', NULL, NULL);
INSERT INTO `user` VALUES (10060, '111', '111@qq.com', '111', NULL, NULL);
INSERT INTO `user` VALUES (10061, '你妈B里放C4', 'dabenyou123@qq.com', '511025955', NULL, NULL);
INSERT INTO `user` VALUES (10062, '天咗', '1@qq.com', '1', NULL, NULL);
INSERT INTO `user` VALUES (10063, 'chenjunwen', '2157406815@qq.com', 'junwen', NULL, NULL);
INSERT INTO `user` VALUES (10064, 'adminAA', '159357123@qq.com', 'qwe123', NULL, NULL);
INSERT INTO `user` VALUES (10065, '故人容若丶', '3193878751@qq.com', 'zxc2580', NULL, NULL);
INSERT INTO `user` VALUES (10066, '123456', '1349175814', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10067, '玩玩看', '454614729@qq.com', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10068, 'shshhd', 'hdhsjsjjs@qq.com', 'shshbssh', NULL, NULL);
INSERT INTO `user` VALUES (10069, '我以我为傲', '1279883280@qq.com', 'a2129892', NULL, NULL);
INSERT INTO `user` VALUES (10070, 'test', 'a751993231@163.com', '123456', NULL, NULL);
INSERT INTO `user` VALUES (10071, '123', '213', '4', '2021年02月19日10时25分pm', '27.218.130.126');
INSERT INTO `user` VALUES (10072, '梦中甜汤', '1140419524@qq.com', 'taomama311', '2021年02月19日10时26分pm', '36.170.33.142');
INSERT INTO `user` VALUES (10073, '111', '1234566@qq.com', '123456', '2021年02月19日10时54分pm', '123.234.64.216');
INSERT INTO `user` VALUES (10074, 'mcpanglei', 'sd_leilei@163.com', '123412345', '2021年02月19日11时56分pm', '111.194.50.141');
INSERT INTO `user` VALUES (10075, 'ppz', 'pokemonfan88@126.com', '123456', '2021年02月20日12时30分am', '61.48.211.58');
INSERT INTO `user` VALUES (10076, '123456789', '123456789@qq.com', '123456789', '2021年02月20日02时33分am', '223.91.115.243');
INSERT INTO `user` VALUES (10077, '在上温某某', 'wenmoux@gmail.com', 'mmling123', '2021年02月20日01时00分pm', '1.81.201.223');
INSERT INTO `user` VALUES (10078, '9', '997', '9', '2021年02月20日01时15分pm', '27.218.74.91');
INSERT INTO `user` VALUES (10079, '沐辰', '894091945@qq.com', 'baobei520', '2021年02月20日01时18分pm', '114.101.235.108');
INSERT INTO `user` VALUES (10080, '789', '9789', '789', '2021年02月20日01时17分pm', '27.218.74.91');

SET FOREIGN_KEY_CHECKS = 1;
