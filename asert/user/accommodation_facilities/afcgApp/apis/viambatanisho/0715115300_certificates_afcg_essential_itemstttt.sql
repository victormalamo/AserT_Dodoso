/*
MySQL Data Transfer
Source Host: localhost
Source Database: mnrtsafari
Target Host: localhost
Target Database: mnrtsafari
Date: 3/28/2021 10:27:32 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for afcg_essential_itemstttt
-- ----------------------------
DROP TABLE IF EXISTS `afcg_essential_itemstttt`;
CREATE TABLE `afcg_essential_itemstttt` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `facility_id` varchar(25) NOT NULL,
  `essential_item_score` varchar(25) DEFAULT NULL,
  `item_1_a_i` varchar(25) DEFAULT NULL,
  `item_1_a_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_1_a_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_1_a_ii` varchar(25) DEFAULT NULL,
  `item_1_a_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_1_a_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_1_b_i` varchar(25) DEFAULT NULL,
  `item_1_b_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_1_b_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_1_b_ii` varchar(25) DEFAULT NULL,
  `item_1_b_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_1_b_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_1_text` text,
  `item_2_i` varchar(25) DEFAULT NULL,
  `item_2_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_2_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_2_ii` varchar(25) DEFAULT NULL,
  `item_2_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_2_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_2_text` text,
  `item_3_i` varchar(25) DEFAULT NULL,
  `item_3_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_3_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_3_ii` varchar(25) DEFAULT NULL,
  `item_3_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_3_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_3_text` text,
  `item_4_i` varchar(25) DEFAULT NULL,
  `item_4_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_4_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_4_ii` varchar(25) DEFAULT NULL,
  `item_4_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_4_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_4_iii` varchar(25) DEFAULT NULL,
  `item_4_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_4_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_4_text` text,
  `item_5_i` varchar(25) DEFAULT NULL,
  `item_5_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_5_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_5_ii` varchar(25) DEFAULT NULL,
  `item_5_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_5_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_5_iii` varchar(25) DEFAULT NULL,
  `item_5_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_5_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_5_text` text,
  `item_6_i` varchar(25) DEFAULT NULL,
  `item_6_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_6_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_6_ii` varchar(25) DEFAULT NULL,
  `item_6_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_6_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_6_iii` varchar(25) DEFAULT NULL,
  `item_6_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_6_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_6_text` text,
  `item_7_i` varchar(25) DEFAULT NULL,
  `item_7_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_7_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_7_ii` varchar(25) DEFAULT NULL,
  `item_7_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_7_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_7_iii` varchar(25) DEFAULT NULL,
  `item_7_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_7_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_7_text` text,
  `item_8_i` varchar(25) DEFAULT NULL,
  `item_8_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_8_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_8_ii` varchar(25) DEFAULT NULL,
  `item_8_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_8_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_8_iii` varchar(25) DEFAULT NULL,
  `item_8_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_8_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_8_text` text,
  `item_9_i` varchar(25) DEFAULT NULL,
  `item_9_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_9_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_9_ii` varchar(25) DEFAULT NULL,
  `item_9_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_9_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_9_iii` varchar(25) DEFAULT NULL,
  `item_9_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_9_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_9_text` text,
  `item_10_i` varchar(25) DEFAULT NULL,
  `item_10_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_10_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_10_ii` varchar(25) DEFAULT NULL,
  `item_10_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_10_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_10_iii` varchar(25) DEFAULT NULL,
  `item_10_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_10_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_10_text` text,
  `item_11_i` varchar(25) DEFAULT NULL,
  `item_11_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_11_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_11_ii` varchar(25) DEFAULT NULL,
  `item_11_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_11_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_11_text` text,
  `item_12_i` varchar(25) DEFAULT NULL,
  `item_12_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_12_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_12_ii` varchar(25) DEFAULT NULL,
  `item_12_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_12_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_12_iii` varchar(25) DEFAULT NULL,
  `item_12_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_12_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_12_text` text,
  `item_13_i` varchar(25) DEFAULT NULL,
  `item_13_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_13_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_13_ii` varchar(25) DEFAULT NULL,
  `item_13_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_13_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_13_iii` varchar(25) DEFAULT NULL,
  `item_13_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_13_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_13_text` text,
  `item_14_i` varchar(25) DEFAULT NULL,
  `item_14_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_14_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_14_ii` varchar(25) DEFAULT NULL,
  `item_14_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_14_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_14_iii` varchar(25) DEFAULT NULL,
  `item_14_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_14_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_14_text` text,
  `item_15_i` varchar(25) DEFAULT NULL,
  `item_15_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_15_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_15_ii` varchar(25) DEFAULT NULL,
  `item_15_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_15_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_15_iii` varchar(25) DEFAULT NULL,
  `item_15_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_15_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_15_text` text,
  `item_16_i` varchar(25) DEFAULT NULL,
  `item_16_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_16_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_16_ii` varchar(25) DEFAULT NULL,
  `item_16_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_16_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_16_text` text,
  `item_17_i` varchar(25) DEFAULT NULL,
  `item_17_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_17_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_17_ii` varchar(25) DEFAULT NULL,
  `item_17_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_17_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_17_iii` varchar(25) DEFAULT NULL,
  `item_17_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_17_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_17_text` text,
  `item_18_i` varchar(25) DEFAULT NULL,
  `item_18_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_18_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_18_ii` varchar(25) DEFAULT NULL,
  `item_18_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_18_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_18_iii` varchar(25) DEFAULT NULL,
  `item_18_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_18_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_18_text` text,
  `item_19_i` varchar(25) DEFAULT NULL,
  `item_19_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_19_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_19_ii` varchar(25) DEFAULT NULL,
  `item_19_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_19_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_19_iii` varchar(25) DEFAULT NULL,
  `item_19_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_19_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_19_text` text,
  `item_20_i` varchar(25) DEFAULT NULL,
  `item_20_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_20_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_20_ii` varchar(25) DEFAULT NULL,
  `item_20_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_20_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_20_iii` varchar(25) DEFAULT NULL,
  `item_20_iii_assessor_2` varchar(25) DEFAULT NULL,
  `item_20_iii_assessor_3` varchar(25) DEFAULT NULL,
  `item_20_text` text,
  `item_21_i` varchar(25) DEFAULT NULL,
  `item_21_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_21_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_21_ii` varchar(25) DEFAULT NULL,
  `item_21_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_21_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_21_text` text,
  `item_22_i` varchar(25) DEFAULT NULL,
  `item_22_i_assessor_2` varchar(25) DEFAULT NULL,
  `item_22_i_assessor_3` varchar(25) DEFAULT NULL,
  `item_22_ii` varchar(25) DEFAULT NULL,
  `item_22_ii_assessor_2` varchar(25) DEFAULT NULL,
  `item_22_ii_assessor_3` varchar(25) DEFAULT NULL,
  `item_22_text` text,
  PRIMARY KEY (`id`,`facility_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------