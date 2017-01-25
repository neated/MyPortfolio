/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : test2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-22 03:10:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `imgsnews`
-- ----------------------------
DROP TABLE IF EXISTS `imgsnews`;
CREATE TABLE `imgsnews` (
  `id` int(255) NOT NULL,
  `linkimgs` text NOT NULL,
  `textsimgbox` text NOT NULL,
  `titleimgsbox` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of imgsnews
-- ----------------------------
INSERT INTO `imgsnews` VALUES ('1', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'Core Dofus interface d\'identification', 'Core - Login');
INSERT INTO `imgsnews` VALUES ('2', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('3', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('4', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('5', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('7', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('8', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');
INSERT INTO `imgsnews` VALUES ('6', 'http://www.planwallpaper.com/static/images/494303a2cb59b5103ed095867f3d5dbd.jpg', 'test', 'test');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `TitleNewz` char(255) NOT NULL DEFAULT '',
  `NewsDate` date NOT NULL,
  `commentaires` text NOT NULL,
  `id` int(255) NOT NULL,
  `poster` char(255) NOT NULL,
  `link` char(255) NOT NULL,
  `NewsText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('Dofus une bonne inspiration !', '2017-01-15', 'Deux équipes de 6 joueurs chacune s\'affronte dans une partit de ville avec différend sort et combo de sort', '3', 'Neated', 'http://geekhebdo.com/wp-content/uploads/2015/11/edition-html.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.');
INSERT INTO `news` VALUES ('L\'isometrie plus qu\'une passion !', '2017-01-15', 'Deux équipes de 6 joueurs chacune s\'affronte dans une partit de ville avec différend sort et combo de sort', '2', 'Neated', 'http://geekhebdo.com/wp-content/uploads/2015/11/edition-html.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.');
