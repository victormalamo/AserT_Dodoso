/*
MySQL Data Transfer
Source Host: localhost
Source Database: mnrtsafari
Target Host: localhost
Target Database: mnrtsafari
Date: 2/8/2021 11:29:11 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for afcg_registered_facilities
-- ----------------------------
DROP TABLE IF EXISTS `afcg_registered_facilities`;
CREATE TABLE `afcg_registered_facilities` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(50) DEFAULT NULL,
  `regID` varchar(25) DEFAULT NULL,
  `mkoa` varchar(100) DEFAULT NULL,
  `lgaID` varchar(25) DEFAULT NULL,
  `halmashauri` varchar(100) DEFAULT NULL,
  `location_id` varchar(25) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `acc_facility_id` varchar(25) DEFAULT NULL,
  `type_of_accomodation_facilities` varchar(200) DEFAULT NULL,
  `ttbl` varchar(100) DEFAULT NULL,
  `counclil_bl` varchar(100) DEFAULT NULL,
  `vat_in` varchar(100) DEFAULT NULL,
  `tin` varchar(100) DEFAULT NULL,
  `trading_name` varchar(200) DEFAULT NULL,
  `facility_name` varchar(200) DEFAULT NULL,
  `barua_pepe` varchar(100) DEFAULT NULL,
  `simu_mobile` varchar(50) DEFAULT NULL,
  `simu_landline` varchar(50) DEFAULT NULL,
  `postal_address` varchar(250) DEFAULT NULL,
  `physical_address` longtext,
  `tarehe_kutoka_kwa_mteja` varchar(100) DEFAULT NULL,
  `general_status` varchar(100) DEFAULT NULL,
  `group_admin_username` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `active` varchar(25) DEFAULT NULL,
  `facility_delete_reason_details` longtext,
  `facility_delete_date` varchar(100) DEFAULT NULL,
  `delete_stage` varchar(100) DEFAULT NULL,
  `tarehe_kupokelewa` varchar(100) DEFAULT NULL,
  `mpokeaji_username` varchar(100) DEFAULT NULL,
  `mpokeaji_title` varchar(250) DEFAULT NULL,
  `approval_status_online` varchar(10) DEFAULT NULL,
  `approval_comments_online` longtext,
  `approval_date_online` varchar(100) DEFAULT NULL,
  `essential_items_id` varchar(25) DEFAULT NULL,
  `essential_item_score` varchar(50) DEFAULT NULL,
  `assessment_id` varchar(25) DEFAULT NULL,
  `assessment_score_self_self` varchar(50) DEFAULT NULL,
  `assessment_score_self_assessor_1` varchar(50) DEFAULT NULL,
  `assessment_score_self_assessor_2` varchar(50) DEFAULT NULL,
  `assessment_score_self_assessor_3` varchar(50) DEFAULT NULL,
  `assessment_score_self_assessors_average` varchar(50) DEFAULT NULL,
  `assessment_score_gov_assessor_1` varchar(50) DEFAULT NULL,
  `assessment_score_gov_assessor_2` varchar(50) DEFAULT NULL,
  `assessment_score_gov_assessor_3` varchar(50) DEFAULT NULL,
  `assessment_score_gov_assessors_average` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `afcg_registered_facilities` VALUES ('28', '10001', '75', 'Kilimanjaro', '3025', 'Moshi DC', 'OA', 'Outside near attraction', 'HS', 'Home Stay', null, null, null, '123123', 'ROSALIA INVESTMENT', 'Rosalia Sweet Home', 'rosalia@rosalia.org', '0715115300', '123123123123', 'P.O.Box 212211 Moshi - Tanzania', 'Block 12 Plot F Uru East Ward, Mwasi South Village, Mamboleo Hamlet, Moshi District - Tanzania', '05-01-2021 10:25:47', 'mapya', '0715115300', '0715115300', 'fabf6e600f53329c6f29a92783c645ed', 'yes', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
