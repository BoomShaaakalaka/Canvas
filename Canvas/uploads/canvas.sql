/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : canvas

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2019-10-28 11:11:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `chatfile`
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
-- Records of chatfile
-- ----------------------------

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `ID` int(8) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `startdate` char(20) DEFAULT NULL,
  `enddate` char(20) DEFAULT NULL,
  `file1` int(11) DEFAULT NULL,
  `file2` int(11) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `TID` int(8) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('0', 'Software Engineering', '2019.9.1', '2020.1.2', null, '0', 'img/avatar-12.jpg', '0', '7');

-- ----------------------------
-- Table structure for `file`
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `ID` int(11) NOT NULL,
  `route` char(255) DEFAULT NULL,
  `label` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES ('0', 'week.txt', null);

-- ----------------------------
-- Table structure for `stucour`
-- ----------------------------
DROP TABLE IF EXISTS `stucour`;
CREATE TABLE `stucour` (
  `SID` int(8) NOT NULL,
  `CID` int(8) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`SID`,`CID`),
  KEY `CCID` (`CID`),
  CONSTRAINT `CCID` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `SSID` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stucour
-- ----------------------------

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `SID` int(8) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `TID` int(8) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('0', 'Tie Feng', null);

-- ----------------------------
-- Table structure for `week`
-- ----------------------------
DROP TABLE IF EXISTS `week`;
CREATE TABLE `week` (
  `ID` int(8) NOT NULL DEFAULT '0',
  `week` int(11) NOT NULL DEFAULT '0',
  `startday` char(255) DEFAULT NULL,
  `endday` char(255) DEFAULT NULL,
  `discussion` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `starttime` char(255) DEFAULT NULL,
  `endtime` char(255) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`week`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of week
-- ----------------------------
INSERT INTO `week` VALUES ('0', '7', '2019.10.28', '2019.10.29', '1', '0', 'Unit 1: Introduction', '9:00', '8:00', 'img/week.jpg');
