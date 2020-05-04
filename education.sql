# Host: localhost  (Version: 5.5.53)
# Date: 2020-04-09 16:33:15
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "question"
#

CREATE TABLE `question` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `q_text` text,
  `q_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "question"
#

INSERT INTO `question` VALUES (1,'朱其旺','朱其旺','2020-04-09 15:48:16'),(2,'朱其旺','朱其旺123','2020-04-09 15:48:25'),(3,'朱其旺','朱其旺13124121231','2020-04-09 15:48:33'),(4,'朱其旺','朱其旺5346345235324','2020-04-09 15:48:43'),(5,'朱其旺','周大福啊撒打发撒旦阿三发射点发顺丰 阿斯顿发生发生发恶法啊','2020-04-09 15:48:56'),(6,'朱其旺','123123','2020-04-09 15:49:55'),(7,'朱其旺','123','2020-04-09 15:50:24'),(8,'朱其旺','123123','2020-04-09 15:50:43'),(9,'朱其旺','123123123从','2020-04-09 15:52:31'),(10,'朱其旺','12412123124124','2020-04-09 15:52:36'),(11,'朱其旺','1231231231','2020-04-09 15:52:41'),(12,'朱其旺','123123123123','2020-04-09 15:52:45'),(13,'朱其旺','124421请问人情味人情味率','2020-04-09 15:52:52'),(14,'朱其旺','其二请问人情味啊发射点发','2020-04-09 15:52:57'),(15,'朱其旺','全额万绮雯阿凡达 ','2020-04-09 15:53:02'),(16,'周婉迎','发生发大师傅','2020-04-09 15:54:07'),(17,'周婉迎','呃呃area二十Serra也让','2020-04-09 15:54:43'),(18,'周婉迎','官方态度一定要他的','2020-04-09 15:54:56'),(19,'周婉迎','朱其旺真厉害','2020-04-09 15:57:49'),(20,'周婉迎','朱其旺真厉害','2020-04-09 15:58:01'),(21,'周婉迎','我爱朱其旺\n','2020-04-09 15:58:11'),(22,'周婉迎','啊哈哈哈哈哈哈哈哈','2020-04-09 15:58:19');

#
# Structure for table "student"
#

CREATE TABLE `student` (
  `id` varchar(12) NOT NULL,
  `_name` varchar(30) NOT NULL DEFAULT '',
  `age` int(6) DEFAULT NULL,
  `gread` varchar(30) DEFAULT NULL,
  `pw` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "student"
#

INSERT INTO `student` VALUES ('17756119596','朱其旺',24,'8','123','male');

#
# Structure for table "teacher"
#

CREATE TABLE `teacher` (
  `id` varchar(12) NOT NULL,
  `_name` varchar(30) NOT NULL DEFAULT '',
  `age` int(6) DEFAULT NULL,
  `coloege` varchar(30) DEFAULT NULL,
  `subjects` varchar(20) DEFAULT NULL,
  `pw` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "teacher"
#

INSERT INTO `teacher` VALUES ('18715256025','周婉迎',24,'淮北师范大学','化学','123','female');

#
# Structure for table "video"
#

CREATE TABLE `video` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `gread` smallint(6) DEFAULT NULL,
  `subjects` varchar(10) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `v_source` varchar(255) DEFAULT NULL,
  `img_source` varchar(255) DEFAULT NULL,
  `t_id` varchar(30) DEFAULT NULL,
  `_describe` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "video"
#

INSERT INTO `video` VALUES (1,'爱莲说',6,'yuwen','2','../upload/20-04-07-14-20-47.mp4','../upload/2020-04-07 211644.png','18715256025','文言文'),(2,'100以内数的认识',1,'shuxue','1','../upload/20-04-08-22-34-42.mp4','../upload/2020-04-08 223855.png','18715256025','暂无简介'),(3,'Unit 6 Holidays',5,'yingyu','3','../upload/20-04-08-22-41-42.mp4','../upload/2020-04-08 224336.png','18715256025','本单元的主要内容是学习如何使用正确的疑问（词）句和时态询问他人度假计划和打算，同时能就计划与别人交流度假情况。本课时在第一、二课时的基础上，活用语境，继续深化有关拟定度假计划的对话和句型，同时通过 Welcome to Sanya的文本教学，了解如何从不同方面对一个地方进行描述。\r\n'),(4,'蚕变了新模样',3,'kexue','4','../upload/20-04-08-22-49-59.mp4','../upload/2020-04-08 225210.png','18715256025','暂无简介'),(5,'平凡的美',4,'yinyue','5','../upload/20-04-08-22-54-53.mp4','../upload/2020-04-08 225736.png','18715256025','暂无简介');
