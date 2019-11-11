/*
 Navicat Premium Data Transfer

 Source Server         : canvas
 Source Server Type    : MySQL
 Source Server Version : 50725
 Source Host           : localhost
 Source Database       : canvas

 Target Server Type    : MySQL
 Target Server Version : 50725
 File Encoding         : utf-8

 Date: 11/09/2019 19:49:18 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` char(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `email` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin`
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('32345678', 'dfsdfsfe', '1adbb3178591fd5bb0c248518f39bf6d', 'adsd@qq.com'), ('32345679', 'sdladw1', '3sfasfas', '11dadsa@126.com'), ('32345785', 'zhangsan', '7f31c778d8785a05d2de7f3e22c9468a', 'sdasd@qq.com');
COMMIT;

-- ----------------------------
--  Table structure for `assignment`
-- ----------------------------
DROP TABLE IF EXISTS `assignment`;
CREATE TABLE `assignment` (
  `ID` int(8) NOT NULL DEFAULT '0',
  `week` int(11) NOT NULL DEFAULT '0',
  `SID` int(8) NOT NULL,
  `file` char(255) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`,`week`,`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `assignment`
-- ----------------------------
BEGIN;
INSERT INTO `assignment` VALUES ('0', '8', '11111111', 'uploads/adduserchuli_admin.php', '66'), ('0', '8', '12345670', 'uploads/guidance.txt', '100'), ('0', '8', '12345678', 'uploads/account.php', '87'), ('0', '8', '12345679', 'uploads/file1.txt', '1'), ('0', '8', '13456789', 'files/aaa.txt', '1'), ('1', '8', '11111111', 'uploads/assignments.php', '0');
COMMIT;

-- ----------------------------
--  Table structure for `asstea`
-- ----------------------------
DROP TABLE IF EXISTS `asstea`;
CREATE TABLE `asstea` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `week` int(11) NOT NULL DEFAULT '0',
  `enddate` char(255) DEFAULT NULL,
  `file` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`week`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `asstea`
-- ----------------------------
BEGIN;
INSERT INTO `asstea` VALUES ('0', '8', '2019.11.3', 'files/aaa.txt'), ('1', '8', '2019.11.6', 'files/bbbb.txt');
COMMIT;

-- ----------------------------
--  Table structure for `chatfile`
-- ----------------------------
DROP TABLE IF EXISTS `chatfile`;
CREATE TABLE `chatfile` (
  `send` int(11) DEFAULT NULL,
  `accept` int(11) DEFAULT NULL,
  `content` char(255) DEFAULT NULL,
  `date` char(20) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `ID` int(8) NOT NULL,
  `name` char(225) DEFAULT NULL,
  `startdate` char(225) DEFAULT NULL,
  `enddate` char(225) DEFAULT NULL,
  `file1` int(11) DEFAULT NULL,
  `file2` int(11) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `TID` int(8) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `course`
-- ----------------------------
BEGIN;
INSERT INTO `course` VALUES ('0', 'Software Engineering', '2019.11.15', '2019.12.30', '11', null, 'img/soen.jpg', '22222222', '10'), ('1', 'Computer English', '2019.11.20', '2019.12.30', '55', '0', 'img/', '21234567', '8'), ('2', 'Software Engineering Practice', '2019.12.30', '2019.1.12', '33', '44', 'img/template-mac.png', '20987654', '7'), ('3', 'NET', '2019.12.29', '2019.1.15', '55', '66', 'img/mockup5.jpg', '22223333', '7');
COMMIT;

-- ----------------------------
--  Table structure for `file`
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `ID` int(11) NOT NULL,
  `route` char(255) NOT NULL DEFAULT '',
  `label` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`,`label`,`route`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `file`
-- ----------------------------
BEGIN;
INSERT INTO `file` VALUES ('0', 'files/guidance.txt', '0'), ('0', 'files/problems.txt', '0'), ('0', 'week.txt', '0'), ('0', 'files/softwared.txt', '1'), ('0', 'files/softwareg.txt', '2'), ('0', 'files/softwarej.txt', '3'), ('0', 'files/pd.txt', '4'), ('0', 'files/file15.txt', '5'), ('0', 'files/IS.doc', '5'), ('1', 'files/ed.txt', '1'), ('1', 'files/eg.txt', '2'), ('1', 'files/ej.txt', '3'), ('1', 'files/file11.txt', '6'), ('1', 'files/IS.doc', '7'), ('2', 'files/pd.txt', '1'), ('2', 'files/pg.txt', '2'), ('2', 'files/pj.txt', '3'), ('3', 'files/netd.txt', '1'), ('3', 'files/netg.txt', '2'), ('3', 'files/netj.txt', '3'), ('8', 'uploads/canvas.sql', '0'), ('9', 'uploads/avatar-2.jpg', '0'), ('10', 'uploads/avatar-2.jpg', '0'), ('11', 'files/details.txt', '0'), ('33', 'files/details1.txt', '0'), ('55', 'files/details2.txt', '0');
COMMIT;

-- ----------------------------
--  Table structure for `huifu`
-- ----------------------------
DROP TABLE IF EXISTS `huifu`;
CREATE TABLE `huifu` (
  `ids` int(11) NOT NULL DEFAULT '0',
  `jieshouid` int(11) DEFAULT NULL,
  `fasong` char(255) NOT NULL DEFAULT '',
  `Times` char(255) NOT NULL DEFAULT '',
  `Comment` char(255) NOT NULL DEFAULT '',
  `time` char(255) DEFAULT NULL,
  PRIMARY KEY (`Times`,`ids`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `huifu`
-- ----------------------------
BEGIN;
INSERT INTO `huifu` VALUES ('1', '1', '2', '2019-10-29 23:18:45', '14124', ''), ('1', '1', '2', '2019-10-29 23:19:10', '1241244', ''), ('1', '1', '2', '2019-10-29 23:21:18', '1241244', ''), ('1', '1', '2', '2019-10-29 23:24:09', '1244', ''), ('11111111', '11111111', 'zzzzz', '2019-10-31 11:08:10', '12214', '2019-10-31 11:08:05'), ('11111111', '11111111', 'zzzzz', '2019-10-31 11:09:15', '1321321', '2019-10-31 11:08:05');
COMMIT;

-- ----------------------------
--  Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `senduid` int(11) NOT NULL DEFAULT '0',
  `getuid` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL DEFAULT '',
  `watch` int(11) DEFAULT NULL,
  PRIMARY KEY (`senduid`,`getuid`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `message`
-- ----------------------------
BEGIN;
INSERT INTO `message` VALUES ('1', '0', 'd', '2019.08.07.07:55', '0'), ('1', '0', 'nihaoya', '2019.08.07.07:60', '0'), ('1', '0', 'cd', '2019.10.28.03.29.49', '0'), ('1', '0', 'fg', '2019.10.28.03:31', '0'), ('1', '1', 'dfg', '2019.10.28.03:49', '0'), ('1', '2', 'gh', '2019.08.07.07:54', '0'), ('1', '3', 'tg', '2019.08.07.09:56', '0'), ('1', '3', 'where are you?', '2019.10.29.05:38', '0'), ('1', '112', 'hjd', '2019.10.28.03:31', '0'), ('1', '123', 'ui ', '2019.10.29.08:11', '0'), ('1', '456', 'gjkl', '2019.10.29.08:12', '0'), ('1', '456', 'uio', '2019.10.29.08:13', '0'), ('2', '1', 'tg', '2019.10.28.03.29.44', '0'), ('2', '3', '2gei1', '2019.08.07.15:50', '0'), ('2', '12468086', 'tg', '2019.10.28.03.29.44', '0'), ('3', '12468086', 'rt', '2019.10.28.03:32', '0'), ('11111111', '22222222', 'nihao', '2019.08.07.07:50', '0'), ('11111111', '22222222', '          12323424', '2019.10.31.03:04', '0'), ('12345678', '12468086', 'nihao', '2019.08.07.07:50', '0'), ('12345678', '12468086', 'der', '2019.08.07.07:56', null), ('12468086', '2', 'gh', '2019.08.07.07:54', '0'), ('12468086', '3', 'tg', '2019.08.07.09:56', '0'), ('12468086', '112', 'hjd', '2019.10.28.03:31', '0'), ('12468086', '123', 'ui ', '2019.10.29.08:11', '0'), ('12468086', '456', 'gjkl', '2019.10.29.08:12', '0'), ('12468086', '456', 'uio', '2019.10.29.08:13', '0'), ('12468086', '12345678', 'd', '2019.08.07.07:55', '0'), ('12468086', '12345678', 'nihaoya', '2019.08.07.07:60', '0'), ('12468086', '12345678', 'cd', '2019.10.28.03.29.49', '0'), ('12468086', '12345678', 'fg', '2019.10.28.03:31', '0'), ('12468086', '12468086', 'dfg', '2019.10.28.03:49', '0'), ('22222222', '11111111', 'der', '2019.08.07.07:56', null), ('222222222', '11111111', 'where are you?', '2019.10.29.05:37', '0');
COMMIT;

-- ----------------------------
--  Table structure for `pinglun`
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `id` int(11) NOT NULL DEFAULT '0',
  `yonghu` char(255) DEFAULT NULL,
  `content` char(255) DEFAULT NULL,
  `time` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `pinglun`
-- ----------------------------
BEGIN;
INSERT INTO `pinglun` VALUES ('11111111', 'zzzzz', '1234', '2019-10-31 11:08:05');
COMMIT;

-- ----------------------------
--  Table structure for `quiz`
-- ----------------------------
DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` char(255) NOT NULL DEFAULT '',
  `title` char(255) DEFAULT '',
  `answer_A` char(255) DEFAULT NULL,
  `answer_B` char(255) DEFAULT NULL,
  `answer_C` char(255) DEFAULT NULL,
  `answer_D` char(255) DEFAULT NULL,
  `true` char(255) DEFAULT NULL,
  `score` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `quiz`
-- ----------------------------
BEGIN;
INSERT INTO `quiz` VALUES ('1', '1+1=?', '1', '2', '3', '4', '2', '5'), ('2', '2+2=?', '2', '2', '3', '4', '4', '5'), ('3', '3+3=?', '3', '4', '6', '8', '6', '5'), ('4', '4+4=?', '4', '8', '10', '12', '8', '5');
COMMIT;

-- ----------------------------
--  Table structure for `quiz0`
-- ----------------------------
DROP TABLE IF EXISTS `quiz0`;
CREATE TABLE `quiz0` (
  `CID` int(255) NOT NULL,
  `question` char(255) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `quiz0`
-- ----------------------------
BEGIN;
INSERT INTO `quiz0` VALUES ('0', 'What is Software?');
COMMIT;

-- ----------------------------
--  Table structure for `quiz1`
-- ----------------------------
DROP TABLE IF EXISTS `quiz1`;
CREATE TABLE `quiz1` (
  `SID` int(255) NOT NULL,
  `CID` int(255) NOT NULL,
  `answer` char(255) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `quiz1`
-- ----------------------------
BEGIN;
INSERT INTO `quiz1` VALUES ('11111111', '0', 'sssd');
COMMIT;

-- ----------------------------
--  Table structure for `stucour`
-- ----------------------------
DROP TABLE IF EXISTS `stucour`;
CREATE TABLE `stucour` (
  `SID` int(8) NOT NULL,
  `CID` int(8) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `label` int(11) DEFAULT NULL,
  PRIMARY KEY (`SID`,`CID`),
  KEY `CCID` (`CID`),
  CONSTRAINT `CCID` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SSID` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `stucour`
-- ----------------------------
BEGIN;
INSERT INTO `stucour` VALUES ('11111111', '0', '80', '1');
COMMIT;

-- ----------------------------
--  Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `SID` int(8) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `email` char(255) DEFAULT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `student`
-- ----------------------------
BEGIN;
INSERT INTO `student` VALUES ('11111111', 'zzzzz', '7f31c778d8785a05d2de7f3e22c9468a', 'dsd@126.com'), ('11112222', 'NULL', '7f31c778d8785a05d2de7f3e22c9468a', 'ssdd@126.com'), ('12468086', 'shuihanzhang', '9a84ee41aa72de59c63006aad670bcce', 'sadsdsa@126.com');
COMMIT;

-- ----------------------------
--  Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `TID` int(8) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `email` char(255) DEFAULT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `teacher`
-- ----------------------------
BEGIN;
INSERT INTO `teacher` VALUES ('22222222', 'Chu Tong', '7f31c778d8785a05d2de7f3e22c9468a', '1444@126.com'), ('22345678', 'Chu', 'e19d5cd5af0378da05f63f891c7467af', 'sfsdf@126.com'), ('23232177', 'NULL', 'd2325cc5deaf8b9e3fdad8c2c818a3b0', 'dssdw@126.com');
COMMIT;

-- ----------------------------
--  Table structure for `week`
-- ----------------------------
DROP TABLE IF EXISTS `week`;
CREATE TABLE `week` (
  `ID` int(8) NOT NULL DEFAULT '0',
  `week` int(11) NOT NULL DEFAULT '0',
  `startday` char(255) DEFAULT NULL,
  `endday` char(255) DEFAULT NULL,
  `home` char(255) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `starttime` char(255) DEFAULT NULL,
  `endtime` char(255) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `filelabel` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`,`week`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `week`
-- ----------------------------
BEGIN;
INSERT INTO `week` VALUES ('0', '8', '2019.10.28', '2019.10.29', 'files/week.txt', 'Unit 1: Introduction', '9:00:00', '8:00:09', 'img/week.jpg', '4'), ('0', '9', '2019.10.28', '2019.10.29', 'files/week.txt', 'Unit 2: Introduction', '9:00:00', '8:00:09', 'img/week.jpg', '4'), ('0', '10', '2019.10.28', '2019.10.29', 'files/week.txt', 'Unit 3: Introduction', '9:00:00', '8:00:09', 'img/week.jpg', '5'), ('1', '7', '2019.10.28', '2019.10.29', 'files/aaa.txt', 'Unit 2: Start Class', '10:00:00', '11:00:59', 'img/avatar-14.jpg', '7'), ('1', '8', '2019.12.23', '2020.02.02', 'files/details1.txt', 'Unit 2: English', '9:00:00', '12:34:21', 'img/paul-morris-116514-unsplash.jpg', '6');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
