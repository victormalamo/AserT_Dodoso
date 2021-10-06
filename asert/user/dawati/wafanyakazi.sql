/*
MySQL Data Transfer
Source Host: localhost
Source Database: mnrtsafari
Target Host: localhost
Target Database: mnrtsafari
Date: 4/1/2020 9:52:10 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for wafanyakazi
-- ----------------------------
DROP TABLE IF EXISTS `wafanyakazi`;
CREATE TABLE `wafanyakazi` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `min_id` int(2) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `pf_no` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `e_add` varchar(50) DEFAULT NULL,
  `div_unit_ID` varchar(50) NOT NULL,
  `section_ID` varchar(50) DEFAULT NULL,
  `cheo_ID` varchar(50) NOT NULL,
  `ngazi_ya_mshahara` varchar(50) NOT NULL,
  `daraja_la_mshahara` varchar(50) DEFAULT NULL,
  `levelID` varchar(50) NOT NULL,
  `dereva_wake` varchar(50) DEFAULT NULL,
  `leseni` varchar(100) DEFAULT NULL,
  `namba_ya_gari` varchar(250) DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `password_mabadiliko` varchar(100) DEFAULT NULL,
  `active` varchar(10) NOT NULL,
  `deligatable` varchar(5) DEFAULT NULL,
  `cur_del_levelID` varchar(50) DEFAULT NULL,
  `cur_del_div_unit_ID` varchar(50) DEFAULT NULL,
  `cur_del_section_ID` varchar(50) DEFAULT NULL,
  `ukaimisho_id` bigint(10) DEFAULT NULL,
  `deligated_to` varchar(50) DEFAULT NULL,
  `uthibitisho` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `wafanyakazi` VALUES ('1', '69', 'Thadey', 'William', 'Msaki', 'PF.1234', '0713999999', 'thadeyw@yahoo.com', '1001', '100102', 'TZ1001NU02_2', 'TGS', 'D', 'nu', null, null, null, '10010202', 'e10adc3949ba59abbe56e057f20f883e', 'chg_1581487373', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('3', '69', 'Amani', 'Peter', 'John', 'PF.3591', '+255743846228', 'amani@gmail.com', '2001', '999999', 'TZ1001HOD', 'LSSE', '1', 'hod', '', null, 'STK 2099', '2001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('86', '69', 'Amitha', 'Bach', 'Bachan', 'PF. 289911', '0714114422', 'amitha@yahoo.com', '4001', '400102', 'TZ1000REGISTRY', 'TGS', 'H', 'nu', null, '', null, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('4', '69', 'Peter', 'William', 'Msaki', 'PF.3593', '+255658115300', 'rosa@yahoo.com', '1001', '999999', 'TZ1001DAHRM', 'LSSE', '1', 'dahrm', '', null, 'STL 1211', '1001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('5', '69', 'Maria', 'Joseph', 'Mosha', 'PF.3594', '+255715115300', 'mariamosha@yahoo.com', '1001', '999999', 'TZ1001PS', 'LSSJ', '1', 'ps', '', null, 'STK 9090', '22222222', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('13', '69', 'Richard', 'Mkude', 'Mbulu', 'PF.3595', '+255783992011', 'mbulu@mnrt.go.tz', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', null, '879227678', 'STL 2389', '10000004', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('6', '69', 'Jackson', 'Vincent', 'Msaki', 'PF.3596', '+255788256555', 'jjv@yahoo.com', '1002', '999999', 'TZ1000RA', 'TGS', 'E', 'ra', null, '', null, '55555555', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('7', '69', 'Gipson', 'Godfrey', 'Lyamuya', 'PF.3597', '+255715115388', 'gglyamuya@gmail.com', '1002', '999999', 'TZ1000CA', 'LSSE', '1', 'ca', '10000001', null, 'STL 0054', '66666666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('9', '69', 'Hamisi', 'Rush', 'Kashigi', 'PF.3598', '+255654555', 'kashigi@yahoo.com', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', null, '287991777', null, '10000005', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('10', '69', 'Mussa', 'Juma', 'Khatib', 'PF.3599', '+255768777888', 'khatibu@gmail.com', '1001', '100102', 'TZ1001HOS', 'LSSE', '2', 'hos', null, null, null, '10010200', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('11', '69', 'Omary', 'Yusuf', 'Mruchu', 'PF.35901', '+255715115300', 'mruchu@yahoo.com', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', null, '4000883201', '', '10000002', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('12', '69', 'Innocent', 'Amani', 'Ndossy', 'PF.35902', '+255715115300', 'ndossy@yahoo.com', '1001', '999999', 'TZ1000TO', 'TGS', 'E', 'to', null, null, null, '88888888', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('15', '69', 'Alphonce', 'Joseph', 'Minja', 'PF.35903', '+255715115300', 'aminja@gmail.com', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', null, '9000672877', 'STL 1920', '10000003', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('14', '69', 'Maimuna', 'Haji', 'Kawishe', 'PF.35904', '+255715115300', 'maimuna@gmail.com', '1001', '100102', 'TZ1000REGISTRY', 'TGS', 'D', 'masijala', null, null, null, '19999999', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('16', '69', 'Malick', 'Hussein', 'Kiria', 'PF.35905', '+255713879700', 'malick@gmail.com', '1001', '100101', 'TZ1001NU01_2', 'TGS', 'D', 'nu', null, null, null, '10010102', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('17', '69', 'Lucresia', 'Vincent', 'Mukajanga', 'PF.35906', '+255789009988', 'mukajanga@gmail.com', '1001', '100101', 'TZ1001HOS', 'LSSE', '2', 'hos', null, null, null, '10010100', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('88', '69', 'Suzan', 'Patrick', 'Lyimo', 'PF.8977', '0789262626', 'suzan@restade.com', '1003', '100301', 'TZ1000PO', 'TGS', 'D', 'nu', null, '', null, '298811992', '043121847e62383f856713ef6514aec7', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('19', '69', 'Servuli', 'Tomas', 'Songambele', 'PF.35908', '+255676897677', 'songambele@gmail.com', '1002', '999999', 'TZ1000TAE', 'TGS', 'E', 'tae', null, null, null, '55556666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('20', '69', 'Ibrahim', 'Rajab', 'Kilonzo', 'PF.7644', '+255675987652', 'ibrahimkilonzo@maliasili.go.tz', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', null, '897655446', 'STL 0054', '10000001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('22', '69', 'Mariana', 'Alphonce', 'Masika', 'PF.29100', '+255719876543', 'marianamasika@maliasili.go.tz', '1001', '999999', 'TZ1001HOD', 'LSSE', '1', 'hod', null, null, null, '10011001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('23', '69', 'Msimamizi', '-', '-', '-', '+255786242424', 'msimamizi@maliasili.go.tz', '-', '-', '-', '-', '-', 'msimamizi', '-', '-', '-', 'Msimamizi', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('77', '69', 'Maulid', 'Abubakar', 'Macha', 'PF/Ad.2009', '0712398979', 'macha@gmail.com', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', null, '189228377485', null, '23157788', null, 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('79', '69', 'Rukia', 'Swalehe', 'Mtui', 'PF.768822', '0782335562', 'rukia@restade.com', '4002', '400201', 'TZ1001NU02_1', 'LSSJ', '1', 'nu', null, '', null, 'eqwe', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
