/*
MySQL Data Transfer
Source Host: localhost
Source Database: mnrtsafari
Target Host: localhost
Target Database: mnrtsafari
Date: 2/8/2021 11:39:16 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for afcg_acc_facilities
-- ----------------------------
DROP TABLE IF EXISTS `afcg_acc_facilities`;
CREATE TABLE `afcg_acc_facilities` (
  `id` bigint(5) NOT NULL,
  `acc_facility_id` varchar(25) NOT NULL,
  `acc_facility_type` varchar(100) NOT NULL,
  `location_id_1` varchar(5) DEFAULT NULL,
  `location_id_2` varchar(5) DEFAULT NULL,
  `location_id_3` varchar(5) DEFAULT NULL,
  `location_id_4` varchar(5) DEFAULT NULL,
  `location_id_5` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`,`acc_facility_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_assessment_town_hotel
-- ----------------------------
DROP TABLE IF EXISTS `afcg_assessment_town_hotel`;
CREATE TABLE `afcg_assessment_town_hotel` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `assessment_id` varchar(50) DEFAULT NULL,
  `facility_id` varchar(50) DEFAULT NULL,
  `assessor_category` varchar(50) NOT NULL,
  `assessment_score` varchar(5) DEFAULT NULL,
  `location_1_1_1_A` varchar(5) DEFAULT NULL,
  `location_1_1_1_text` text,
  `location_1_1_2_A` varchar(5) DEFAULT NULL,
  `location_1_1_2_text` text,
  `location_1_1_3_A` varchar(5) DEFAULT NULL,
  `location_1_1_3_B` varchar(5) DEFAULT NULL,
  `location_1_1_3_text` text,
  `location_1_1_4_A` varchar(5) DEFAULT NULL,
  `location_1_1_4_B` varchar(5) DEFAULT NULL,
  `location_1_1_4_text` text,
  `location_1_1_5_A` varchar(5) DEFAULT NULL,
  `location_1_1_5_text` text,
  `location_1_1_6_A` varchar(5) DEFAULT NULL,
  `location_1_1_6_text` text,
  `location_1_2_1_A` varchar(5) DEFAULT NULL,
  `location_1_2_1_text` text,
  `location_1_2_2_A` varchar(5) DEFAULT NULL,
  `location_1_2_2_text` text,
  `location_1_2_3_A` varchar(5) DEFAULT NULL,
  `location_1_2_3_B_a` varchar(5) DEFAULT NULL,
  `location_1_2_3_B_b` varchar(5) DEFAULT NULL,
  `location_1_2_3_B_c` varchar(5) DEFAULT NULL,
  `location_1_2_3_B_d` varchar(5) DEFAULT NULL,
  `location_1_2_3_B_e` varchar(5) DEFAULT NULL,
  `location_1_2_3_text` text,
  `location_1_2_4_A` varchar(5) DEFAULT NULL,
  `location_1_2_4_B` varchar(5) DEFAULT NULL,
  `location_1_2_4_C` varchar(5) DEFAULT NULL,
  `location_1_2_4_text` text,
  `location_1_2_5_A` varchar(5) DEFAULT NULL,
  `location_1_2_5_B` varchar(5) DEFAULT NULL,
  `location_1_2_5_C` varchar(5) DEFAULT NULL,
  `location_1_2_5_D` varchar(5) DEFAULT NULL,
  `location_1_2_5_text` text,
  `building_2_1_1_A` varchar(5) DEFAULT NULL,
  `building_2_1_1_text` text,
  `building_2_1_2_A` varchar(5) DEFAULT NULL,
  `building_2_1_2_B` varchar(5) DEFAULT NULL,
  `building_2_1_2_C` varchar(5) DEFAULT NULL,
  `building_2_1_2_D` varchar(5) DEFAULT NULL,
  `building_2_1_2_text` text,
  `building_2_2_1_A` varchar(5) DEFAULT NULL,
  `building_2_2_1_B` varchar(5) DEFAULT NULL,
  `building_2_2_1_text` text,
  `building_2_2_2_A` varchar(5) DEFAULT NULL,
  `building_2_2_2_B` varchar(5) DEFAULT NULL,
  `building_2_2_2_C` varchar(5) DEFAULT NULL,
  `building_2_2_2_D` varchar(5) DEFAULT NULL,
  `building_2_2_2_E` varchar(5) DEFAULT NULL,
  `building_2_2_2_F` varchar(5) DEFAULT NULL,
  `building_2_2_2_G` varchar(5) DEFAULT NULL,
  `building_2_2_2_text` text,
  `building_2_3_1_A` varchar(5) DEFAULT NULL,
  `building_2_3_1_text` text,
  `building_2_4_1_A` varchar(5) DEFAULT NULL,
  `building_2_4_1_B` varchar(5) DEFAULT NULL,
  `building_2_4_1_C` varchar(5) DEFAULT NULL,
  `building_2_4_1_D` varchar(5) DEFAULT NULL,
  `building_2_4_1_E` varchar(5) DEFAULT NULL,
  `building_2_4_1_F` varchar(5) DEFAULT NULL,
  `building_2_4_1_G` varchar(5) DEFAULT NULL,
  `building_2_4_1_H` varchar(5) DEFAULT NULL,
  `building_2_4_1_I` varchar(5) DEFAULT NULL,
  `building_2_4_1_J` varchar(5) DEFAULT NULL,
  `building_2_4_1_K` varchar(5) DEFAULT NULL,
  `building_2_4_1_text` text,
  `front_office_3_1_1_text` text,
  `front_office_3_1_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_1_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_1_1_C` varchar(5) DEFAULT NULL,
  `front_office_3_1_1_D` varchar(5) DEFAULT NULL,
  `front_office_3_1_2_text` text,
  `front_office_3_1_2_A` varchar(5) DEFAULT NULL,
  `front_office_3_1_2_B` varchar(5) DEFAULT NULL,
  `front_office_3_1_2_C` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_text` text,
  `front_office_3_2_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_B_a` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_B_b` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_B_c` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_C_a` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_C_b` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_C_c` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_D_a` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_D_b` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_D_c` varchar(5) DEFAULT NULL,
  `front_office_3_2_1_D_d` varchar(5) DEFAULT NULL,
  `front_office_3_3_1_text` text,
  `front_office_3_3_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_3_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_4_1_text` text,
  `front_office_3_4_1_A_a` varchar(5) DEFAULT NULL,
  `front_office_3_4_1_A_b` varchar(5) DEFAULT NULL,
  `front_office_3_4_1_A_c` varchar(5) DEFAULT NULL,
  `front_office_3_4_1_A_d` varchar(5) DEFAULT NULL,
  `front_office_3_5_1_text` text,
  `front_office_3_5_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_5_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_5_1_C` varchar(5) DEFAULT NULL,
  `front_office_3_5_1_D` varchar(5) DEFAULT NULL,
  `front_office_3_6_1_text` text,
  `front_office_3_6_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_6_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_7_1_text` text,
  `front_office_3_7_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_7_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_7_1_C` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_text` text,
  `front_office_3_8_1_A_a` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_A_b` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_A_c` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_B_a` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_B_b` varchar(5) DEFAULT NULL,
  `front_office_3_8_1_B_c` varchar(5) DEFAULT NULL,
  `front_office_3_9_1_text` text,
  `front_office_3_9_1_A` varchar(5) DEFAULT NULL,
  `front_office_3_9_1_B` varchar(5) DEFAULT NULL,
  `front_office_3_9_1_C` varchar(5) DEFAULT NULL,
  `front_office_3_9_1_D` varchar(5) DEFAULT NULL,
  `front_office_3_9_1_E` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_D` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_E` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_1_1_text` text,
  `lobby_lounge_other_public_areas_4_2_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_2_1_text` text,
  `lobby_lounge_other_public_areas_4_3_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_B_a` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_B_b` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_B_c` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_B_d` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_3_1_text` text,
  `lobby_lounge_other_public_areas_4_4_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_D_a` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_D_b` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_E` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_F` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_4_1_text` text,
  `lobby_lounge_other_public_areas_4_5_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_5_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_5_1_text` text,
  `lobby_lounge_other_public_areas_4_6_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_D` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_E` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_F` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_6_1_text` text,
  `lobby_lounge_other_public_areas_4_7_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_7_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_7_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_7_1_text` text,
  `lobby_lounge_other_public_areas_4_8_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_a` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_b` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_c` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_d` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_e` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_B_f` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_8_1_text` text,
  `lobby_lounge_other_public_areas_4_9_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_9_1_B` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_9_1_C` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_9_1_D` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_9_1_text` text,
  `lobby_lounge_other_public_areas_4_10_1_A` varchar(5) DEFAULT NULL,
  `lobby_lounge_other_public_areas_4_10_1_text` text,
  `function_rooms_5_1_1_A` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_B` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_C` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_D` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_E` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_F` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_G` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_H` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_I` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_J` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_K` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_L` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_M` varchar(5) DEFAULT NULL,
  `function_rooms_5_1_1_text` text,
  `restaurants_6_1_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_1_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_1_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_1_1_D` varchar(5) DEFAULT NULL,
  `restaurants_6_1_1_text` text,
  `restaurants_6_2_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_D` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_E` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_F` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_G` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_H` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_I` varchar(5) DEFAULT NULL,
  `restaurants_6_2_1_text` text,
  `restaurants_6_3_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_3_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_3_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_3_1_text` text,
  `restaurants_6_4_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_D` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_E` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_F` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_G` varchar(5) DEFAULT NULL,
  `restaurants_6_4_1_text` text,
  `restaurants_6_5_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_D` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_E_a` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_E_b` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_E_c` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_E_d` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_F` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_G_a` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_G_b` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_G_c` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_H` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_I` varchar(5) DEFAULT NULL,
  `restaurants_6_5_1_text` text,
  `restaurants_6_6_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_6_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_6_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_6_1_D` varchar(5) DEFAULT NULL,
  `restaurants_6_6_1_text` text,
  `restaurants_6_7_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_7_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_7_1_C` varchar(5) DEFAULT NULL,
  `restaurants_6_7_1_text` text,
  `restaurants_6_8_1_A` varchar(5) DEFAULT NULL,
  `restaurants_6_8_1_B` varchar(5) DEFAULT NULL,
  `restaurants_6_8_1_text` text,
  `bar_7_1_1_A` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_a` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_b` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_c` varchar(5) DEFAULT NULL,
  `bar_7_1_1_C` varchar(5) DEFAULT NULL,
  `bar_7_1_1_D_a` varchar(5) DEFAULT NULL,
  `bar_7_1_1_D_b` varchar(5) DEFAULT NULL,
  `bar_7_1_1_D_c` varchar(5) DEFAULT NULL,
  `bar_7_1_1_E` varchar(5) DEFAULT NULL,
  `bar_7_1_1_F` varchar(5) DEFAULT NULL,
  `bar_7_1_1_G` varchar(5) DEFAULT NULL,
  `bar_7_1_1_text` text,
  `bar_7_2_1_A` varchar(5) DEFAULT NULL,
  `bar_7_2_1_B` varchar(5) DEFAULT NULL,
  `bar_7_2_1_C` varchar(5) DEFAULT NULL,
  `bar_7_2_1_D` varchar(5) DEFAULT NULL,
  `bar_7_2_1_E` varchar(5) DEFAULT NULL,
  `bar_7_2_1_F` varchar(5) DEFAULT NULL,
  `bar_7_2_1_G` varchar(5) DEFAULT NULL,
  `bar_7_2_1_H` varchar(5) DEFAULT NULL,
  `bar_7_2_1_I` varchar(5) DEFAULT NULL,
  `bar_7_2_1_J` varchar(5) DEFAULT NULL,
  `bar_7_2_1_text` text,
  `bar_7_3_1_A` varchar(5) DEFAULT NULL,
  `bar_7_3_1_B` varchar(5) DEFAULT NULL,
  `bar_7_3_1_C` varchar(5) DEFAULT NULL,
  `bar_7_3_1_D` varchar(5) DEFAULT NULL,
  `bar_7_3_1_text` text,
  `bar_7_4_1_A` varchar(5) DEFAULT NULL,
  `bar_7_4_1_B` varchar(5) DEFAULT NULL,
  `bar_7_4_1_C` varchar(5) DEFAULT NULL,
  `bar_7_4_1_text` text,
  `bar_7_5_1_A` varchar(5) DEFAULT NULL,
  `bar_7_5_1_B` varchar(5) DEFAULT NULL,
  `bar_7_5_1_C` varchar(5) DEFAULT NULL,
  `bar_7_5_1_D` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_a` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_b` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_c` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_d` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_e` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_f` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_g` varchar(5) DEFAULT NULL,
  `bar_7_5_1_E_h` varchar(5) DEFAULT NULL,
  `bar_7_5_1_F` varchar(5) DEFAULT NULL,
  `bar_7_5_1_G` varchar(5) DEFAULT NULL,
  `bar_7_5_1_H` varchar(5) DEFAULT NULL,
  `bar_7_5_1_I` varchar(5) DEFAULT NULL,
  `bar_7_5_1_text` text,
  `bar_7_6_1_A` varchar(5) DEFAULT NULL,
  `bar_7_6_1_B` varchar(5) DEFAULT NULL,
  `bar_7_6_1_C` varchar(5) DEFAULT NULL,
  `bar_7_6_1_text` text,
  `bar_7_7_1_A` varchar(5) DEFAULT NULL,
  `bar_7_7_1_B` varchar(5) DEFAULT NULL,
  `bar_7_7_1_C` varchar(5) DEFAULT NULL,
  `bar_7_7_1_text` text,
  `bar_7_8_1_A` varchar(5) DEFAULT NULL,
  `bar_7_8_1_B` varchar(5) DEFAULT NULL,
  `bar_7_8_1_C` varchar(5) DEFAULT NULL,
  `bar_7_8_1_text` text,
  `kitchen_8_1_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_1_1_text` text,
  `kitchen_8_2_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_text` text,
  `kitchen_8_3_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_text` text,
  `kitchen_8_4_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_4_1_text` text,
  `kitchen_8_4_2_A` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_B` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_C` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_text` text,
  `kitchen_8_5_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_H` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_I` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_text` text,
  `kitchen_8_6_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_text` text,
  `kitchen_8_7_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_text` text,
  `kitchen_8_8_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_C_a` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_C_b` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_text` text,
  `kitchen_8_9_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_text` text,
  `kitchen_8_10_1_A_a` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_A_b` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_A_c` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_A_d` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_text` text,
  `kitchen_8_11_1_A_a` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_A_b` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_A_c` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C_a` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C_b` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C_c` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C_d` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C_e` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_D_a` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_D_b` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_text` text,
  `kitchen_8_12_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_text` text,
  `guest_rooms_9_1_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_1_1_text` text,
  `guest_rooms_9_2_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_2_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_2_1_text` text,
  `guest_rooms_9_3_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_3_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_3_1_text` text,
  `guest_rooms_9_4_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_d` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_e` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_f` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_g` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_h` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_i` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_j` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_k` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_l` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_B_m` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_E` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_F` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_G` varchar(5) DEFAULT NULL,
  `guest_rooms_9_4_1_text` text,
  `guest_rooms_9_5_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_B_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_B_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_B_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_B_d` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_B_e` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_5_1_text` text,
  `guest_rooms_9_6_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_6_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_6_1_text` text,
  `guest_rooms_9_7_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_7_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_7_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_7_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_7_1_E` varchar(5) DEFAULT NULL,
  `guest_rooms_9_7_1_text` text,
  `guest_rooms_9_8_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_8_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_8_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_8_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_8_1_E` varchar(5) DEFAULT NULL,
  `guest_rooms_9_8_1_text` text,
  `guest_rooms_9_9_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_d` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_e` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_B_f` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_C_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_C_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_9_1_text` text,
  `guest_rooms_9_10_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_10_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_10_1_text` text,
  `guest_rooms_9_11_1_A_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_A_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_A_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_A_d` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_A_e` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_B_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_B_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_11_1_text` text,
  `guest_rooms_9_12_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_D` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_E` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_F` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_G` varchar(5) DEFAULT NULL,
  `guest_rooms_9_12_1_text` text,
  `guest_rooms_9_13_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_13_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_13_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_13_1_text` text,
  `guest_rooms_9_14_1_A` varchar(5) DEFAULT NULL,
  `guest_rooms_9_14_1_B_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_14_1_B_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_14_1_B_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_14_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_14_1_text` text,
  `guest_rooms_9_15_1_A_a` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_b` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_c` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_d` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_e` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_f` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_g` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_h` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_i` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_j` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_k` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_l` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_m` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_n` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_o` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_p` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_A_q` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_B` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_C` varchar(5) DEFAULT NULL,
  `guest_rooms_9_15_1_text` text,
  `guest_bathrooms_10_1_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_1_1_text` text,
  `guest_bathrooms_10_2_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_2_1_text` text,
  `guest_bathrooms_10_3_1_A_a` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_b` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_c` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_d` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_e` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_f` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_g` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_h` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_i` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_j` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_k` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_l` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_m` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_n` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_o` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_p` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_q` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_r` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_s` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_t` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_u` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_v` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_A_w` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_D` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_E` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_F` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_3_1_text` text,
  `guest_bathrooms_10_4_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_D` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_E` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_F` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_4_1_text` text,
  `guest_bathrooms_10_5_1_A_a` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_A_b` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_A_c` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_A_d` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_A_e` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_D` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_E` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_F` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_5_1_text` text,
  `guest_bathrooms_10_6_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_6_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_6_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_6_1_text` text,
  `guest_bathrooms_10_7_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_7_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_7_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_7_1_D` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_7_1_text` text,
  `guest_bathrooms_10_8_1_A_a` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_b` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_c` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_d` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_e` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_f` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_A_g` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_C` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_8_1_text` text,
  `guest_bathrooms_10_9_1_A` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_9_1_B` varchar(5) DEFAULT NULL,
  `guest_bathrooms_10_9_1_text` text,
  `suites_11_1_1_A` varchar(5) DEFAULT NULL,
  `suites_11_1_1_text` text,
  `suites_11_2_1_A` varchar(5) DEFAULT NULL,
  `suites_11_2_1_B` varchar(5) DEFAULT NULL,
  `suites_11_2_1_C` varchar(5) DEFAULT NULL,
  `suites_11_2_1_text` text,
  `suites_11_3_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_3_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_3_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_3_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_3_1_text` text,
  `suites_11_4_1_A` varchar(5) DEFAULT NULL,
  `suites_11_4_1_B` varchar(5) DEFAULT NULL,
  `suites_11_4_1_text` text,
  `suites_11_5_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_5_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_a` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_b` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_c` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_d` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_e` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_f` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_g` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_h` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_i` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_j` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_k` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_l` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_m` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_n` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_o` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_p` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_q` varchar(5) DEFAULT NULL,
  `suites_11_5_1_B_r` varchar(5) DEFAULT NULL,
  `suites_11_5_1_C` varchar(5) DEFAULT NULL,
  `suites_11_5_1_D` varchar(5) DEFAULT NULL,
  `suites_11_5_1_E` varchar(5) DEFAULT NULL,
  `suites_11_5_1_F` varchar(5) DEFAULT NULL,
  `suites_11_5_1_G` varchar(5) DEFAULT NULL,
  `suites_11_5_1_text` text,
  `suites_11_6_1_A` varchar(5) DEFAULT NULL,
  `suites_11_6_1_B` varchar(5) DEFAULT NULL,
  `suites_11_6_1_C` varchar(5) DEFAULT NULL,
  `suites_11_6_1_D` varchar(5) DEFAULT NULL,
  `suites_11_6_1_E` varchar(5) DEFAULT NULL,
  `suites_11_6_1_text` text,
  `suites_11_7_1_A` varchar(5) DEFAULT NULL,
  `suites_11_7_1_B_a` varchar(5) DEFAULT NULL,
  `suites_11_7_1_B_b` varchar(5) DEFAULT NULL,
  `suites_11_7_1_B_c` varchar(5) DEFAULT NULL,
  `suites_11_7_1_B_d` varchar(5) DEFAULT NULL,
  `suites_11_7_1_C` varchar(5) DEFAULT NULL,
  `suites_11_7_1_D` varchar(5) DEFAULT NULL,
  `suites_11_7_1_text` text,
  `suites_11_8_1_A` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_a` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_b` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_c` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_d` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_e` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_f` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_g` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_h` varchar(5) DEFAULT NULL,
  `suites_11_8_1_B_i` varchar(5) DEFAULT NULL,
  `suites_11_8_1_C_a` varchar(5) DEFAULT NULL,
  `suites_11_8_1_C_b` varchar(5) DEFAULT NULL,
  `suites_11_8_1_D` varchar(5) DEFAULT NULL,
  `suites_11_8_1_text` text,
  `suites_11_9_1_A` varchar(5) DEFAULT NULL,
  `suites_11_9_1_B` varchar(5) DEFAULT NULL,
  `suites_11_9_1_text` text,
  `suites_11_10_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_10_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_10_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_10_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_10_1_A_e` varchar(5) DEFAULT NULL,
  `suites_11_10_1_B_a` varchar(5) DEFAULT NULL,
  `suites_11_10_1_B_b` varchar(5) DEFAULT NULL,
  `suites_11_10_1_B_c` varchar(5) DEFAULT NULL,
  `suites_11_10_1_B_d` varchar(5) DEFAULT NULL,
  `suites_11_10_1_C` varchar(5) DEFAULT NULL,
  `suites_11_10_1_text` text,
  `suites_11_11_1_A` varchar(5) DEFAULT NULL,
  `suites_11_11_1_B` varchar(5) DEFAULT NULL,
  `suites_11_11_1_C_a` varchar(5) DEFAULT NULL,
  `suites_11_11_1_C_b` varchar(5) DEFAULT NULL,
  `suites_11_11_1_C_c` varchar(5) DEFAULT NULL,
  `suites_11_11_1_D` varchar(5) DEFAULT NULL,
  `suites_11_11_1_E` varchar(5) DEFAULT NULL,
  `suites_11_11_1_F` varchar(5) DEFAULT NULL,
  `suites_11_11_1_G` varchar(5) DEFAULT NULL,
  `suites_11_11_1_text` text,
  `suites_11_12_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_e` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_f` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_g` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_h` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_i` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_j` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_k` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_l` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_m` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_n` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_o` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_p` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_q` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_r` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_s` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_t` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_u` varchar(5) DEFAULT NULL,
  `suites_11_12_1_A_v` varchar(5) DEFAULT NULL,
  `suites_11_12_1_B` varchar(5) DEFAULT NULL,
  `suites_11_12_1_C` varchar(5) DEFAULT NULL,
  `suites_11_12_1_text` text,
  `suites_11_13_1_A` varchar(5) DEFAULT NULL,
  `suites_11_13_1_B` varchar(5) DEFAULT NULL,
  `suites_11_13_1_text` text,
  `suites_11_14_1_A` varchar(5) DEFAULT NULL,
  `suites_11_14_1_B_a` varchar(5) DEFAULT NULL,
  `suites_11_14_1_B_b` varchar(5) DEFAULT NULL,
  `suites_11_14_1_B_c` varchar(5) DEFAULT NULL,
  `suites_11_14_1_C` varchar(5) DEFAULT NULL,
  `suites_11_14_1_text` text,
  `suites_11_15_1_A` varchar(5) DEFAULT NULL,
  `suites_11_15_1_text` text,
  `suites_11_16_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_e` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_f` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_g` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_h` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_i` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_j` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_k` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_l` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_m` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_n` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_o` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_p` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_q` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_r` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_s` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_t` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_u` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_v` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_w` varchar(5) DEFAULT NULL,
  `suites_11_16_1_A_x` varchar(5) DEFAULT NULL,
  `suites_11_16_1_B` varchar(5) DEFAULT NULL,
  `suites_11_16_1_C` varchar(5) DEFAULT NULL,
  `suites_11_16_1_D` varchar(5) DEFAULT NULL,
  `suites_11_16_1_E` varchar(5) DEFAULT NULL,
  `suites_11_16_1_F` varchar(5) DEFAULT NULL,
  `suites_11_16_1_text` text,
  `suites_11_17_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_e` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_f` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_g` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_h` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_i` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_j` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_k` varchar(5) DEFAULT NULL,
  `suites_11_17_1_A_l` varchar(5) DEFAULT NULL,
  `suites_11_17_1_B` varchar(5) DEFAULT NULL,
  `suites_11_17_1_C` varchar(5) DEFAULT NULL,
  `suites_11_17_1_text` text,
  `suites_11_18_1_A` varchar(5) DEFAULT NULL,
  `suites_11_18_1_B` varchar(5) DEFAULT NULL,
  `suites_11_18_1_C` varchar(5) DEFAULT NULL,
  `suites_11_18_1_D` varchar(5) DEFAULT NULL,
  `suites_11_18_1_E` varchar(5) DEFAULT NULL,
  `suites_11_18_1_F` varchar(5) DEFAULT NULL,
  `suites_11_18_1_text` text,
  `suites_11_19_1_A_a` varchar(5) DEFAULT NULL,
  `suites_11_19_1_A_b` varchar(5) DEFAULT NULL,
  `suites_11_19_1_A_c` varchar(5) DEFAULT NULL,
  `suites_11_19_1_A_d` varchar(5) DEFAULT NULL,
  `suites_11_19_1_A_e` varchar(5) DEFAULT NULL,
  `suites_11_19_1_B` varchar(5) DEFAULT NULL,
  `suites_11_19_1_C` varchar(5) DEFAULT NULL,
  `suites_11_19_1_D` varchar(5) DEFAULT NULL,
  `suites_11_19_1_E` varchar(5) DEFAULT NULL,
  `suites_11_19_1_F` varchar(5) DEFAULT NULL,
  `suites_11_19_1_text` text,
  `suites_11_20_1_A` varchar(5) DEFAULT NULL,
  `suites_11_20_1_B` varchar(5) DEFAULT NULL,
  `suites_11_20_1_C` varchar(5) DEFAULT NULL,
  `suites_11_20_1_text` text,
  `suites_11_21_1_A` varchar(5) DEFAULT NULL,
  `suites_11_21_1_B` varchar(5) DEFAULT NULL,
  `suites_11_21_1_C` varchar(5) DEFAULT NULL,
  `suites_11_21_1_text` text,
  `hygiene_and_sanitation_12_1_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_f` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_g` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_D_h` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_E` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_G` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_H` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_I_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_I_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_I_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_I_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_I_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_J` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_K` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_L` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_1_1_text` text,
  `hygiene_and_sanitation_12_2_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_D` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_f` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_g` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_h` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_E_i` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_G` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_H_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_H_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_H_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_H_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_I` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_J` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_2_1_text` text,
  `hygiene_and_sanitation_12_3_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_D` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_E` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_3_1_text` text,
  `hygiene_and_sanitation_12_4_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_4_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_4_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_4_1_text` text,
  `hygiene_and_sanitation_12_5_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_5_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_5_1_text` text,
  `hygiene_and_sanitation_12_6_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_6_1_B_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_6_1_B_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_6_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_6_1_text` text,
  `hygiene_and_sanitation_12_7_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_7_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_7_1_text` text,
  `safety_and_security_13_1_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_a` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_b` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_c` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_d` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_e` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_f` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_F_g` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_G` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_H` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_I` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_J` varchar(5) DEFAULT NULL,
  `safety_and_security_13_1_1_text` text,
  `safety_and_security_13_2_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_13_2_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_13_2_1_text` text,
  `safety_and_security_13_3_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_F` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_G` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_H` varchar(5) DEFAULT NULL,
  `safety_and_security_13_3_1_text` text,
  `safety_and_security_13_4_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_13_4_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_13_4_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_13_4_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_13_4_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_13_4_1_text` text,
  `safety_and_security_13_5_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_13_5_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_13_5_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_13_5_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_13_5_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_13_5_1_text` text,
  `sundry_services_14_1_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_14_1_1_B` varchar(5) DEFAULT NULL,
  `sundry_services_14_1_1_C` varchar(5) DEFAULT NULL,
  `sundry_services_14_1_1_text` text,
  `sundry_services_14_2_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_14_2_1_text` text,
  `sundry_services_14_3_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_14_3_1_text` text,
  `sundry_services_14_4_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_14_4_1_text` text,
  `sundry_services_14_5_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_14_5_1_B` varchar(5) DEFAULT NULL,
  `sundry_services_14_5_1_C` varchar(5) DEFAULT NULL,
  `sundry_services_14_5_1_D` varchar(5) DEFAULT NULL,
  `sundry_services_14_5_1_text` text,
  `human_resources_15_1_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_a` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_b` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_c` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_d` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_e` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_B_f` varchar(5) DEFAULT NULL,
  `human_resources_15_1_1_text` text,
  `human_resources_15_2_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_2_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_2_1_text` text,
  `human_resources_15_3_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_3_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_3_1_text` text,
  `human_resources_15_4_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_4_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_4_1_C` varchar(5) DEFAULT NULL,
  `human_resources_15_4_1_text` text,
  `human_resources_15_5_1_A_a` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_A_b` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_A_c` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_B_a` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_B_b` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_B_c` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_C_a` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_C_b` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_C_c` varchar(5) DEFAULT NULL,
  `human_resources_15_5_1_text` text,
  `human_resources_15_6_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_6_1_text` text,
  `human_resources_15_7_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_7_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_7_1_C` varchar(5) DEFAULT NULL,
  `human_resources_15_7_1_D` varchar(5) DEFAULT NULL,
  `human_resources_15_7_1_text` text,
  `human_resources_15_8_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_8_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_8_1_C` varchar(5) DEFAULT NULL,
  `human_resources_15_8_1_text` text,
  `human_resources_15_9_1_A` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_B` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_C` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_D` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_E` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_F_a` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_F_b` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_F_c` varchar(5) DEFAULT NULL,
  `human_resources_15_9_1_text` text,
  `general_16_1_1_A` varchar(5) DEFAULT NULL,
  `general_16_1_1_text` text,
  `general_16_2_1_A` varchar(5) DEFAULT NULL,
  `general_16_2_1_B_a` varchar(5) DEFAULT NULL,
  `general_16_2_1_B_b` varchar(5) DEFAULT NULL,
  `general_16_2_1_B_c` varchar(5) DEFAULT NULL,
  `general_16_2_1_B_d` varchar(5) DEFAULT NULL,
  `general_16_2_1_B_e` varchar(5) DEFAULT NULL,
  `general_16_2_1_C` varchar(5) DEFAULT NULL,
  `general_16_2_1_text` text,
  `general_16_3_1_A_a` varchar(5) DEFAULT NULL,
  `general_16_3_1_A_b` varchar(5) DEFAULT NULL,
  `general_16_3_1_A_c` varchar(5) DEFAULT NULL,
  `general_16_3_1_B` varchar(5) DEFAULT NULL,
  `general_16_3_1_C_a` varchar(5) DEFAULT NULL,
  `general_16_3_1_C_b` varchar(5) DEFAULT NULL,
  `general_16_3_1_C_c` varchar(5) DEFAULT NULL,
  `general_16_3_1_C_d` varchar(5) DEFAULT NULL,
  `general_16_3_1_C_e` varchar(5) DEFAULT NULL,
  `general_16_3_1_D_a` varchar(5) DEFAULT NULL,
  `general_16_3_1_D_b` varchar(5) DEFAULT NULL,
  `general_16_3_1_E` varchar(5) DEFAULT NULL,
  `general_16_3_1_text` text,
  `general_16_4_1_A` varchar(5) DEFAULT NULL,
  `general_16_4_1_B` varchar(5) DEFAULT NULL,
  `general_16_4_1_text` text,
  `general_16_5_1_A` varchar(5) DEFAULT NULL,
  `general_16_5_1_B` varchar(5) DEFAULT NULL,
  `general_16_5_1_text` text,
  `general_16_6_1_A` varchar(5) DEFAULT NULL,
  `general_16_6_1_B` varchar(5) DEFAULT NULL,
  `general_16_6_1_text` text,
  `general_16_7_1_A` varchar(5) DEFAULT NULL,
  `general_16_7_1_B` varchar(5) DEFAULT NULL,
  `general_16_7_1_text` text,
  `general_16_8_1_A` varchar(5) DEFAULT NULL,
  `general_16_8_1_B` varchar(5) DEFAULT NULL,
  `general_16_8_1_C` varchar(5) DEFAULT NULL,
  `general_16_8_1_text` text,
  `general_16_9_1_A` varchar(5) DEFAULT NULL,
  `general_16_9_1_B` varchar(5) DEFAULT NULL,
  `general_16_9_1_C` varchar(5) DEFAULT NULL,
  `general_16_9_1_D` varchar(5) DEFAULT NULL,
  `general_16_9_1_text` text,
  `general_16_10_1_A` varchar(5) DEFAULT NULL,
  `general_16_10_1_B` varchar(5) DEFAULT NULL,
  `general_16_10_1_C` varchar(5) DEFAULT NULL,
  `general_16_10_1_text` text,
  `general_16_11_1_A` varchar(5) DEFAULT NULL,
  `general_16_11_1_B` varchar(5) DEFAULT NULL,
  `general_16_11_1_C` varchar(5) DEFAULT NULL,
  `general_16_11_1_D_a` varchar(5) DEFAULT NULL,
  `general_16_11_1_D_b` varchar(5) DEFAULT NULL,
  `general_16_11_1_D_c` varchar(5) DEFAULT NULL,
  `general_16_11_1_D_d` varchar(5) DEFAULT NULL,
  `general_16_11_1_D_e` varchar(5) DEFAULT NULL,
  `general_16_11_1_E` varchar(5) DEFAULT NULL,
  `general_16_11_1_F` varchar(5) DEFAULT NULL,
  `general_16_11_1_G` varchar(5) DEFAULT NULL,
  `general_16_11_1_H` varchar(5) DEFAULT NULL,
  `general_16_11_1_text` text,
  `general_16_12_1_A` varchar(5) DEFAULT NULL,
  `general_16_12_1_text` text,
  `general_16_13_1_A` varchar(5) DEFAULT NULL,
  `general_16_13_1_B_a` varchar(5) DEFAULT NULL,
  `general_16_13_1_B_b` varchar(5) DEFAULT NULL,
  `general_16_13_1_B_c` varchar(5) DEFAULT NULL,
  `general_16_13_1_B_d` varchar(5) DEFAULT NULL,
  `general_16_13_1_B_e` varchar(5) DEFAULT NULL,
  `general_16_13_1_C` varchar(5) DEFAULT NULL,
  `general_16_13_1_D` varchar(5) DEFAULT NULL,
  `general_16_13_1_E` varchar(5) DEFAULT NULL,
  `general_16_13_1_text` text,
  PRIMARY KEY (`id`,`assessor_category`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_assessors
-- ----------------------------
DROP TABLE IF EXISTS `afcg_assessors`;
CREATE TABLE `afcg_assessors` (
  `reg_assessor_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `assessor_full_name` varchar(50) DEFAULT NULL,
  `assessor_qualification` varchar(50) DEFAULT NULL,
  `assessor_firm` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `active` varchar(25) DEFAULT NULL,
  `assessor_created_by` varchar(25) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`reg_assessor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_assessors_filter
-- ----------------------------
DROP TABLE IF EXISTS `afcg_assessors_filter`;
CREATE TABLE `afcg_assessors_filter` (
  `assessor_group_id` bigint(2) NOT NULL,
  `assessor_group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`assessor_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_assessors_vs_facilities
-- ----------------------------
DROP TABLE IF EXISTS `afcg_assessors_vs_facilities`;
CREATE TABLE `afcg_assessors_vs_facilities` (
  `assigned_assessor_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `assessor_username` varchar(50) DEFAULT NULL,
  `assessor_category` varchar(50) DEFAULT NULL,
  `facility_id` varchar(50) DEFAULT NULL,
  `assessor_group_id` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`assigned_assessor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_blacklist
-- ----------------------------
DROP TABLE IF EXISTS `afcg_blacklist`;
CREATE TABLE `afcg_blacklist` (
  `bl_id` bigint(25) NOT NULL AUTO_INCREMENT,
  `field` varchar(100) NOT NULL,
  `number_of_attempts` varchar(25) NOT NULL,
  `blocked_date` varchar(25) DEFAULT NULL,
  `days_to_unblock` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`bl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_essential_items
-- ----------------------------
DROP TABLE IF EXISTS `afcg_essential_items`;
CREATE TABLE `afcg_essential_items` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `facility_id` varchar(25) NOT NULL,
  `essential_item_score` varchar(25) DEFAULT NULL,
  `item_1_a_i` varchar(25) DEFAULT NULL,
  `item_1_a_ii` varchar(25) DEFAULT NULL,
  `item_1_b_i` varchar(25) DEFAULT NULL,
  `item_1_b_ii` varchar(25) DEFAULT NULL,
  `item_1_text` text,
  `item_2_i` varchar(25) DEFAULT NULL,
  `item_2_ii` varchar(25) DEFAULT NULL,
  `item_2_text` text,
  `item_3_i` varchar(25) DEFAULT NULL,
  `item_3_ii` varchar(25) DEFAULT NULL,
  `item_3_text` text,
  `item_4_i` varchar(25) DEFAULT NULL,
  `item_4_ii` varchar(25) DEFAULT NULL,
  `item_4_iii` varchar(25) DEFAULT NULL,
  `item_4_text` text,
  `item_5_i` varchar(25) DEFAULT NULL,
  `item_5_ii` varchar(25) DEFAULT NULL,
  `item_5_iii` varchar(25) DEFAULT NULL,
  `item_5_text` text,
  `item_6_i` varchar(25) DEFAULT NULL,
  `item_6_ii` varchar(25) DEFAULT NULL,
  `item_6_iii` varchar(25) DEFAULT NULL,
  `item_6_text` text,
  `item_7_i` varchar(25) DEFAULT NULL,
  `item_7_ii` varchar(25) DEFAULT NULL,
  `item_7_iii` varchar(25) DEFAULT NULL,
  `item_7_text` text,
  `item_8_i` varchar(25) DEFAULT NULL,
  `item_8_ii` varchar(25) DEFAULT NULL,
  `item_8_iii` varchar(25) DEFAULT NULL,
  `item_8_text` text,
  `item_9_i` varchar(25) DEFAULT NULL,
  `item_9_ii` varchar(25) DEFAULT NULL,
  `item_9_iii` varchar(25) DEFAULT NULL,
  `item_9_text` text,
  `item_10_i` varchar(25) DEFAULT NULL,
  `item_10_ii` varchar(25) DEFAULT NULL,
  `item_10_iii` varchar(25) DEFAULT NULL,
  `item_10_text` text,
  `item_11_i` varchar(25) DEFAULT NULL,
  `item_11_ii` varchar(25) DEFAULT NULL,
  `item_11_text` text,
  `item_12_i` varchar(25) DEFAULT NULL,
  `item_12_ii` varchar(25) DEFAULT NULL,
  `item_12_iii` varchar(25) DEFAULT NULL,
  `item_12_text` text,
  `item_13_i` varchar(25) DEFAULT NULL,
  `item_13_ii` varchar(25) DEFAULT NULL,
  `item_13_iii` varchar(25) DEFAULT NULL,
  `item_13_text` text,
  `item_14_i` varchar(25) DEFAULT NULL,
  `item_14_ii` varchar(25) DEFAULT NULL,
  `item_14_iii` varchar(25) DEFAULT NULL,
  `item_14_text` text,
  `item_15_i` varchar(25) DEFAULT NULL,
  `item_15_ii` varchar(25) DEFAULT NULL,
  `item_15_iii` varchar(25) DEFAULT NULL,
  `item_15_text` text,
  `item_16_i` varchar(25) DEFAULT NULL,
  `item_16_ii` varchar(25) DEFAULT NULL,
  `item_16_text` text,
  `item_17_i` varchar(25) DEFAULT NULL,
  `item_17_ii` varchar(25) DEFAULT NULL,
  `item_17_iii` varchar(25) DEFAULT NULL,
  `item_17_text` text,
  `item_18_i` varchar(25) DEFAULT NULL,
  `item_18_ii` varchar(25) DEFAULT NULL,
  `item_18_iii` varchar(25) DEFAULT NULL,
  `item_18_text` text,
  `item_19_i` varchar(25) DEFAULT NULL,
  `item_19_ii` varchar(25) DEFAULT NULL,
  `item_19_iii` varchar(25) DEFAULT NULL,
  `item_19_text` text,
  `item_20_i` varchar(25) DEFAULT NULL,
  `item_20_ii` varchar(25) DEFAULT NULL,
  `item_20_iii` varchar(25) DEFAULT NULL,
  `item_20_text` text,
  `item_21_i` varchar(25) DEFAULT NULL,
  `item_21_ii` varchar(25) DEFAULT NULL,
  `item_21_text` text,
  `item_22_i` varchar(25) DEFAULT NULL,
  `item_22_ii` varchar(25) DEFAULT NULL,
  `item_22_text` text,
  PRIMARY KEY (`id`,`facility_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_facility_delete_reason
-- ----------------------------
DROP TABLE IF EXISTS `afcg_facility_delete_reason`;
CREATE TABLE `afcg_facility_delete_reason` (
  `id_facility_delete_reason` bigint(25) NOT NULL AUTO_INCREMENT,
  `facility_delete_reason_details` varchar(200) NOT NULL,
  PRIMARY KEY (`id_facility_delete_reason`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_facility_management_options
-- ----------------------------
DROP TABLE IF EXISTS `afcg_facility_management_options`;
CREATE TABLE `afcg_facility_management_options` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `id_management_option` varchar(25) NOT NULL,
  `management_option` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for afcg_location_group
-- ----------------------------
DROP TABLE IF EXISTS `afcg_location_group`;
CREATE TABLE `afcg_location_group` (
  `id` bigint(2) NOT NULL,
  `location_id` varchar(25) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for afcg_registered_facilities_deleted
-- ----------------------------
DROP TABLE IF EXISTS `afcg_registered_facilities_deleted`;
CREATE TABLE `afcg_registered_facilities_deleted` (
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for bei_za_mafuta
-- ----------------------------
DROP TABLE IF EXISTS `bei_za_mafuta`;
CREATE TABLE `bei_za_mafuta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bei_kwa_lita` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for dawati_la_wateja
-- ----------------------------
DROP TABLE IF EXISTS `dawati_la_wateja`;
CREATE TABLE `dawati_la_wateja` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(50) DEFAULT NULL,
  `majina_kamili` varchar(200) DEFAULT NULL,
  `jinsia` varchar(50) DEFAULT NULL,
  `barua_pepe` varchar(100) DEFAULT NULL,
  `simu` varchar(50) DEFAULT NULL,
  `nchi` varchar(200) DEFAULT NULL,
  `mkoa` varchar(200) DEFAULT NULL,
  `halmashauri` varchar(200) DEFAULT NULL,
  `taasisi` varchar(250) DEFAULT NULL,
  `kichwa_cha_maelezo` varchar(250) DEFAULT NULL,
  `maelezo` longtext,
  `kiambata` varchar(250) DEFAULT NULL,
  `tarehe_kutoka_kwa_mteja` varchar(100) DEFAULT NULL,
  `general_status` varchar(100) DEFAULT NULL,
  `tarehe_kupokelewa` varchar(100) DEFAULT NULL,
  `mpokeaji_username` varchar(50) DEFAULT NULL,
  `mpokeaji_title` varchar(250) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `private_public` varchar(25) DEFAULT NULL,
  `div_unit_ID` varchar(25) DEFAULT NULL,
  `div_unit` varchar(250) DEFAULT NULL,
  `hod_hou_username` varchar(50) DEFAULT NULL,
  `hod_hou_title` varchar(250) DEFAULT NULL,
  `hod_hou_input_to_section_afisa` varchar(250) DEFAULT NULL,
  `tarehe_hod_hou_section_afisa` varchar(50) DEFAULT NULL,
  `section_id` varchar(25) DEFAULT NULL,
  `section_name` varchar(250) DEFAULT NULL,
  `hos_username` varchar(50) DEFAULT NULL,
  `hos_title` varchar(250) DEFAULT NULL,
  `hos_input_to_afisa` varchar(250) DEFAULT NULL,
  `tarehe_hos_afisa` varchar(50) DEFAULT NULL,
  `afisa_username` varchar(50) DEFAULT NULL,
  `afisa_cheo` varchar(250) DEFAULT NULL,
  `afisa_input` longtext,
  `tarehe_afisa` varchar(50) DEFAULT NULL,
  `majibu_title` varchar(250) DEFAULT NULL,
  `majibu_maelezo` longtext,
  `majibu_kiambata` varchar(250) DEFAULT NULL,
  `hod_hou_input_to_ps` longtext,
  `tarehe_hod_hou_to_ps` varchar(50) DEFAULT NULL,
  `ps_input` longtext,
  `tarehe_ps` varchar(50) DEFAULT NULL,
  `ps_username` varchar(50) DEFAULT NULL,
  `ps_cheo` varchar(250) DEFAULT NULL,
  `afisa_status` varchar(25) DEFAULT NULL,
  `hos_status` varchar(25) DEFAULT NULL,
  `hod_hou_status` varchar(100) DEFAULT NULL,
  `ps_status` varchar(25) DEFAULT NULL,
  `ps_status_name` varchar(100) DEFAULT NULL,
  `tarehe_kutuma_majibu_taarifa` varchar(50) DEFAULT NULL,
  `dawati_mtumaji_username` varchar(50) DEFAULT NULL,
  `dawati_mtumaji_title` varchar(250) DEFAULT NULL,
  `mtumaji_mrejesho` varchar(100) DEFAULT NULL,
  `mtumaji_comments` longtext,
  `tarehe_mdau_mrejesho` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for defaultyear
-- ----------------------------
DROP TABLE IF EXISTS `defaultyear`;
CREATE TABLE `defaultyear` (
  `year_id` varchar(1) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for demo_live_search
-- ----------------------------
DROP TABLE IF EXISTS `demo_live_search`;
CREATE TABLE `demo_live_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for demo_search
-- ----------------------------
DROP TABLE IF EXISTS `demo_search`;
CREATE TABLE `demo_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(300) NOT NULL,
  `site_url` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for demo_web_information
-- ----------------------------
DROP TABLE IF EXISTS `demo_web_information`;
CREATE TABLE `demo_web_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` text NOT NULL,
  `site_url` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for divisions_units
-- ----------------------------
DROP TABLE IF EXISTS `divisions_units`;
CREATE TABLE `divisions_units` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `div_unit_ID` varchar(10) NOT NULL,
  `div_unit` varchar(200) NOT NULL,
  `div_unit_kirefu` varchar(200) NOT NULL,
  `div_au_unit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`div_unit_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for jinsia
-- ----------------------------
DROP TABLE IF EXISTS `jinsia`;
CREATE TABLE `jinsia` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `jinsia` text NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for lgas
-- ----------------------------
DROP TABLE IF EXISTS `lgas`;
CREATE TABLE `lgas` (
  `country_code` varchar(25) NOT NULL,
  `regID` varchar(25) NOT NULL,
  `lgaID` varchar(25) NOT NULL,
  `lgaNam` varchar(200) NOT NULL,
  `category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`country_code`,`regID`,`lgaID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for logbooks_za_magari
-- ----------------------------
DROP TABLE IF EXISTS `logbooks_za_magari`;
CREATE TABLE `logbooks_za_magari` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `chassis_no` varchar(50) DEFAULT NULL,
  `namba_ya_gari` varchar(25) DEFAULT NULL,
  `entry_counter` bigint(50) NOT NULL DEFAULT '0',
  `kutoka_mahali` varchar(250) DEFAULT NULL,
  `kutoka_tarehe` varchar(25) DEFAULT NULL,
  `kutoka_muda` varchar(25) DEFAULT NULL,
  `kutoka_sababu` varchar(250) DEFAULT NULL,
  `kutoka_idhini_f_name` varchar(50) DEFAULT NULL,
  `kutoka_idhini_m_name` varchar(50) DEFAULT NULL,
  `kutoka_idhini_l_name` varchar(50) DEFAULT NULL,
  `kutoka_idhini_cheo_ID` varchar(50) DEFAULT NULL,
  `kutoka_idhini_username` varchar(25) DEFAULT NULL,
  `kufika_mahali` varchar(250) DEFAULT NULL,
  `kufika_tarehe` varchar(25) DEFAULT NULL,
  `kufika_muda` varchar(25) DEFAULT NULL,
  `kufika_sababu` varchar(250) DEFAULT NULL,
  `kufika_idhini_f_name` varchar(50) DEFAULT NULL,
  `kufika_idhini_m_name` varchar(50) DEFAULT NULL,
  `kufika_idhini_l_name` varchar(50) DEFAULT NULL,
  `kufika_idhini_cheo_ID` varchar(50) DEFAULT NULL,
  `kufika_idhini_username` varchar(25) DEFAULT NULL,
  `kutoka_km_za_gari` varchar(25) DEFAULT NULL,
  `kutoka_mafuta_yaliyomo` varchar(25) DEFAULT NULL,
  `kufika_km_za_gari` varchar(25) DEFAULT NULL,
  `kufika_mafuta_yaliyomo` varchar(25) DEFAULT NULL,
  `mafuta_yaliyoongezwa` varchar(25) DEFAULT NULL,
  `entry_km_zilizotembewa` varchar(25) DEFAULT NULL,
  `entry_mafuta_yaliyotumiwa` varchar(25) DEFAULT NULL,
  `entry_umbali_kwa_lita` varchar(25) DEFAULT NULL,
  `kutoka_driver_name` varchar(100) DEFAULT NULL,
  `kutoka_driver_username` varchar(25) DEFAULT NULL,
  `kufika_driver_name` varchar(100) DEFAULT NULL,
  `kufika_driver_username` varchar(25) DEFAULT NULL,
  `kutoka_afisa_f_name` varchar(50) DEFAULT NULL,
  `kutoka_afisa_m_name` varchar(50) DEFAULT NULL,
  `kutoka_afisa_l_name` varchar(50) DEFAULT NULL,
  `kutoka_afisa_cheo_ID` varchar(50) DEFAULT NULL,
  `kutoka_afisa_username` varchar(25) DEFAULT NULL,
  `kutoka_afisa_approval` varchar(25) DEFAULT NULL,
  `kufika_afisa_f_name` varchar(50) DEFAULT NULL,
  `kufika_afisa_m_name` varchar(50) DEFAULT NULL,
  `kufika_afisa_l_name` varchar(50) DEFAULT NULL,
  `kufika_afisa_cheo_ID` varchar(50) DEFAULT NULL,
  `kufika_afisa_username` varchar(25) DEFAULT NULL,
  `kufika_afisa_approval` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`,`entry_counter`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for maamuzi_dahrm
-- ----------------------------
DROP TABLE IF EXISTS `maamuzi_dahrm`;
CREATE TABLE `maamuzi_dahrm` (
  `id` int(1) NOT NULL,
  `maamuzi_ID` varchar(100) NOT NULL,
  `maamuzi` varchar(100) NOT NULL,
  PRIMARY KEY (`maamuzi_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for maamuzi_hod_u
-- ----------------------------
DROP TABLE IF EXISTS `maamuzi_hod_u`;
CREATE TABLE `maamuzi_hod_u` (
  `id` int(1) NOT NULL,
  `maamuzi_ID` varchar(100) NOT NULL,
  `maamuzi` varchar(100) NOT NULL,
  PRIMARY KEY (`maamuzi_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for maamuzi_hos
-- ----------------------------
DROP TABLE IF EXISTS `maamuzi_hos`;
CREATE TABLE `maamuzi_hos` (
  `id` int(1) NOT NULL,
  `maamuzi_ID` varchar(100) NOT NULL,
  `maamuzi` varchar(100) NOT NULL,
  PRIMARY KEY (`maamuzi_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for maamuzi_ps
-- ----------------------------
DROP TABLE IF EXISTS `maamuzi_ps`;
CREATE TABLE `maamuzi_ps` (
  `id` int(1) NOT NULL,
  `maamuzi_ID` varchar(100) NOT NULL,
  `maamuzi` varchar(100) NOT NULL,
  PRIMARY KEY (`maamuzi_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for madhumuni
-- ----------------------------
DROP TABLE IF EXISTS `madhumuni`;
CREATE TABLE `madhumuni` (
  `madhumuniID` int(4) NOT NULL AUTO_INCREMENT,
  `madhumuni` varchar(50) NOT NULL,
  PRIMARY KEY (`madhumuniID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mafuta
-- ----------------------------
DROP TABLE IF EXISTS `mafuta`;
CREATE TABLE `mafuta` (
  `mafuta_id` varchar(25) NOT NULL,
  `kibali_cha_gari` varchar(25) DEFAULT NULL,
  `kibali_cha_gari_submitDate` varchar(25) DEFAULT NULL,
  `kibali_id` varchar(25) NOT NULL,
  `marejesho_id` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL DEFAULT '',
  `makisio_kiasi_cha_mafuta` varchar(25) DEFAULT NULL,
  `tofauti_mafuta_yanayotakiwa_yaliyomo` varchar(25) DEFAULT NULL,
  `fedha_ya_mafuta` varchar(25) DEFAULT NULL,
  `mafuta_kabla` varchar(25) DEFAULT NULL,
  `mafuta_yamwisho_nyongeza` varchar(25) DEFAULT NULL,
  `mafuta_yamwisho` varchar(25) NOT NULL,
  `mafuta_yanayoombwa` varchar(25) NOT NULL,
  `km_zilizopita` varchar(25) NOT NULL,
  `km_zasasa` varchar(25) NOT NULL,
  `km_zilizotembea` varchar(25) NOT NULL,
  `mafuta_yaliyomo` varchar(25) NOT NULL,
  `submitDate` varchar(25) NOT NULL,
  `sign` varchar(25) DEFAULT NULL,
  `mafuta_general_status` varchar(100) DEFAULT NULL,
  `maoni_ya_ofisa` varchar(250) DEFAULT NULL,
  `submitDate_ofisa` varchar(25) DEFAULT NULL,
  `sign_ofisa` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_to` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe_to` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_lita_to` varchar(25) DEFAULT NULL,
  `submitDate_to` varchar(25) DEFAULT NULL,
  `sign_to` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_dahrm` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe_dahrm` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_lita_dahrm` varchar(25) DEFAULT NULL,
  `submitDate_dahrm` varchar(25) DEFAULT NULL,
  `sign_dahrm` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`mafuta_id`,`kibali_id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for mafuta_ya_ziada
-- ----------------------------
DROP TABLE IF EXISTS `mafuta_ya_ziada`;
CREATE TABLE `mafuta_ya_ziada` (
  `mafuta_ya_ziada_id` bigint(25) NOT NULL AUTO_INCREMENT,
  `chassis_no` varchar(25) DEFAULT NULL,
  `namba_ya_gari` varchar(25) DEFAULT NULL,
  `driver_username` varchar(25) DEFAULT NULL,
  `mafuta_kabla` varchar(25) DEFAULT NULL,
  `mafuta_yamwisho_nyongeza` varchar(25) DEFAULT NULL,
  `mafuta_yamwisho` varchar(25) NOT NULL,
  `mafuta_yanayoombwa` varchar(25) NOT NULL,
  `km_zilizopita` varchar(25) NOT NULL,
  `km_zasasa` varchar(25) NOT NULL,
  `km_zilizotembea` varchar(25) NOT NULL,
  `mafuta_yaliyomo` varchar(25) NOT NULL,
  `submitDate` varchar(25) NOT NULL,
  `sign` varchar(25) DEFAULT NULL,
  `mafuta_general_status` varchar(100) DEFAULT NULL,
  `maoni_ya_ofisa` varchar(250) DEFAULT NULL,
  `submitDate_ofisa` varchar(25) DEFAULT NULL,
  `sign_ofisa` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_to` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe_to` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_lita_to` varchar(25) DEFAULT NULL,
  `submitDate_to` varchar(25) DEFAULT NULL,
  `sign_to` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_dahrm` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe_dahrm` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_lita_dahrm` varchar(25) DEFAULT NULL,
  `submitDate_dahrm` varchar(25) DEFAULT NULL,
  `sign_dahrm` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`mafuta_ya_ziada_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for magari
-- ----------------------------
DROP TABLE IF EXISTS `magari`;
CREATE TABLE `magari` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `chassis_no` varchar(50) DEFAULT NULL,
  `fuel_type` varchar(25) DEFAULT NULL,
  `fuel_tank_volume` varchar(10) DEFAULT NULL,
  `namba_ya_gari` varchar(50) NOT NULL,
  `aina_ya_gari` varchar(250) NOT NULL,
  `umbali_iliyotembea` varchar(50) DEFAULT NULL,
  `gari` varchar(250) DEFAULT NULL,
  `umbali_kwa_lita` varchar(50) NOT NULL,
  `gharama_za_matengenezo` varchar(50) DEFAULT NULL,
  `dereva` varchar(100) DEFAULT NULL,
  `driver_username` varchar(50) DEFAULT NULL,
  `afisa` varchar(100) DEFAULT NULL,
  `afisa_username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`namba_ya_gari`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for marejesho
-- ----------------------------
DROP TABLE IF EXISTS `marejesho`;
CREATE TABLE `marejesho` (
  `marejesho_id` varchar(25) NOT NULL,
  `masurufu_id` varchar(25) DEFAULT NULL,
  `driver_masurufu_id` varchar(25) DEFAULT NULL,
  `kibali_id` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `dokezo` longtext,
  `namba_ya_masurufu_niliyochukua` varchar(100) DEFAULT NULL,
  `kiasi_nilichochukua` varchar(25) DEFAULT NULL,
  `masurufu_ya_tarehe` varchar(25) DEFAULT NULL,
  `aina_ya_masurufu` varchar(25) DEFAULT NULL,
  `masurufu_ya_sh` varchar(25) DEFAULT NULL,
  `madai_ya_sh` varchar(25) DEFAULT NULL,
  `madai_ya_sh_hod_u` varchar(25) DEFAULT NULL,
  `madai_kifungu` varchar(100) DEFAULT NULL,
  `tarehe_ya_kuondoka_1` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_2` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_3` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_4` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_5` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_6` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_7` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_8` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_9` varchar(25) DEFAULT NULL,
  `tarehe_ya_kuondoka_10` varchar(25) DEFAULT NULL,
  `mahali_pakuondokea_1` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_2` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_3` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_4` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_5` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_6` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_7` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_8` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_9` varchar(100) DEFAULT NULL,
  `mahali_pakuondokea_10` varchar(100) DEFAULT NULL,
  `tarehe_ya_kufika_1` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_2` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_3` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_4` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_5` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_6` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_7` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_8` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_9` varchar(25) DEFAULT NULL,
  `tarehe_ya_kufika_10` varchar(25) DEFAULT NULL,
  `mahali_pakufikia_1` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_2` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_3` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_4` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_5` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_6` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_7` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_8` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_9` varchar(100) DEFAULT NULL,
  `mahali_pakufikia_10` varchar(100) DEFAULT NULL,
  `gharama_nyingine_units_1` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_2` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_3` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_4` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_5` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_6` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_7` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_8` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_9` varchar(10) DEFAULT NULL,
  `gharama_nyingine_units_10` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_1` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_2` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_3` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_4` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_5` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_6` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_7` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_8` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_9` varchar(10) DEFAULT NULL,
  `gharama_nyingine_unitcost_10` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_1` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_2` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_3` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_4` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_5` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_6` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_7` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_8` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_9` varchar(10) DEFAULT NULL,
  `gharama_nyingine_amount_10` varchar(10) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_1` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_2` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_3` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_4` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_5` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_6` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_7` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_8` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_9` varchar(100) DEFAULT NULL,
  `gharama_nyingine_nyingine_jina_10` varchar(100) DEFAULT NULL,
  `stakabadhi_nyingine_na_1` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_2` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_3` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_4` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_5` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_6` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_7` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_8` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_9` varchar(50) DEFAULT NULL,
  `stakabadhi_nyingine_na_10` varchar(50) DEFAULT NULL,
  `stakabadhi_mahali_1` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_2` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_3` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_4` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_5` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_6` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_7` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_8` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_9` varchar(250) DEFAULT NULL,
  `stakabadhi_mahali_10` varchar(250) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_1` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_2` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_3` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_4` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_5` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_6` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_7` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_8` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_9` varchar(25) DEFAULT NULL,
  `tarehe_nyingine_ya_stakabadhi_10` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_units_10` varchar(25) DEFAULT NULL,
  `unitmeasure_1` varchar(25) DEFAULT NULL,
  `unitmeasure_2` varchar(25) DEFAULT NULL,
  `unitmeasure_3` varchar(25) DEFAULT NULL,
  `unitmeasure_4` varchar(25) DEFAULT NULL,
  `unitmeasure_5` varchar(25) DEFAULT NULL,
  `unitmeasure_6` varchar(25) DEFAULT NULL,
  `unitmeasure_7` varchar(25) DEFAULT NULL,
  `unitmeasure_8` varchar(25) DEFAULT NULL,
  `unitmeasure_9` varchar(25) DEFAULT NULL,
  `unitmeasure_10` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_unitcost_10` varchar(25) DEFAULT NULL,
  `second_unitmeasure_1` varchar(25) DEFAULT NULL,
  `second_unitmeasure_2` varchar(25) DEFAULT NULL,
  `second_unitmeasure_3` varchar(25) DEFAULT NULL,
  `second_unitmeasure_4` varchar(25) DEFAULT NULL,
  `second_unitmeasure_5` varchar(25) DEFAULT NULL,
  `second_unitmeasure_6` varchar(25) DEFAULT NULL,
  `second_unitmeasure_7` varchar(25) DEFAULT NULL,
  `second_unitmeasure_8` varchar(25) DEFAULT NULL,
  `second_unitmeasure_9` varchar(25) DEFAULT NULL,
  `second_unitmeasure_10` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_second_units_10` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_nyingine_amount_10` varchar(25) DEFAULT NULL,
  `nimesafiri_kwenda` varchar(500) DEFAULT NULL,
  `nimekaa_siku` varchar(25) DEFAULT NULL,
  `ninastahili_posho_sh` varchar(25) DEFAULT NULL,
  `ninastahili_gharama_nyingine_sh` varchar(25) DEFAULT NULL,
  `jina_kiambata` varchar(200) DEFAULT NULL,
  `final_kiambata` varchar(200) DEFAULT NULL,
  `submitDate` varchar(25) DEFAULT NULL,
  `sign` varchar(25) DEFAULT NULL,
  `masurufu_marejesho_general_status` varchar(25) DEFAULT NULL,
  `nathibitisha_sithibitishi_hod_u` varchar(50) DEFAULT NULL,
  `sithibitishi_sababu` varchar(250) DEFAULT NULL,
  `submitDate_hod_u` varchar(25) DEFAULT NULL,
  `nathibitisha_sithibitishi_ca` varchar(50) DEFAULT NULL,
  `sithibitishi_sababu_ca` varchar(250) DEFAULT NULL,
  `marejesho_risiti` varchar(250) DEFAULT NULL,
  `jina_kiambata_ca` varchar(200) DEFAULT NULL,
  `final_kiambata_ca` varchar(200) DEFAULT NULL,
  `submitDate_ca` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`marejesho_id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for masurufu
-- ----------------------------
DROP TABLE IF EXISTS `masurufu`;
CREATE TABLE `masurufu` (
  `masurufu_id` varchar(25) NOT NULL,
  `driver_masurufu_id` varchar(25) DEFAULT NULL,
  `file_ref_number` varchar(50) DEFAULT NULL,
  `masurufu_ref_number` varchar(50) DEFAULT NULL,
  `masurufu_ref_number_date` varchar(25) DEFAULT NULL,
  `financial_year` varchar(50) NOT NULL,
  `aina_ya_masurufu` varchar(25) DEFAULT NULL,
  `kibali_id` varchar(10) NOT NULL,
  `marejesho_id` varchar(10) DEFAULT NULL,
  `safari_ripoti_id` varchar(10) DEFAULT NULL,
  `username` varchar(25) NOT NULL DEFAULT '',
  `dokezo` longtext,
  `masurufu_ya_sh` varchar(25) NOT NULL,
  `rate_posho_ya_kujikimu` varchar(10) DEFAULT NULL,
  `posho_ya_kujikimu` varchar(10) DEFAULT NULL,
  `posho_ya_njiani` varchar(10) DEFAULT NULL,
  `nauli` varchar(10) DEFAULT NULL,
  `taxi` varchar(10) DEFAULT NULL,
  `mafuta` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_1` varchar(100) DEFAULT NULL,
  `unitmeasure_1` varchar(25) DEFAULT NULL,
  `second_unitmeasure_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_1` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_1` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_1` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_1` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_2` varchar(100) DEFAULT NULL,
  `unitmeasure_2` varchar(25) DEFAULT NULL,
  `second_unitmeasure_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_2` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_2` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_2` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_2` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_3` varchar(100) DEFAULT NULL,
  `unitmeasure_3` varchar(25) DEFAULT NULL,
  `second_unitmeasure_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_3` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_3` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_3` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_3` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_4` varchar(100) DEFAULT NULL,
  `unitmeasure_4` varchar(25) DEFAULT NULL,
  `second_unitmeasure_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_4` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_4` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_4` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_4` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_5` varchar(100) DEFAULT NULL,
  `unitmeasure_5` varchar(25) DEFAULT NULL,
  `second_unitmeasure_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_5` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_5` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_5` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_5` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_6` varchar(100) DEFAULT NULL,
  `unitmeasure_6` varchar(25) DEFAULT NULL,
  `second_unitmeasure_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_6` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_6` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_6` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_6` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_7` varchar(100) DEFAULT NULL,
  `unitmeasure_7` varchar(25) DEFAULT NULL,
  `second_unitmeasure_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_7` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_7` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_7` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_7` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_8` varchar(100) DEFAULT NULL,
  `unitmeasure_8` varchar(25) DEFAULT NULL,
  `second_unitmeasure_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_8` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_8` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_8` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_8` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_9` varchar(100) DEFAULT NULL,
  `unitmeasure_9` varchar(25) DEFAULT NULL,
  `second_unitmeasure_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_9` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_9` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_9` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_9` varchar(25) DEFAULT NULL,
  `gharama_nyingine_jina_10` varchar(100) DEFAULT NULL,
  `unitmeasure_10` varchar(25) DEFAULT NULL,
  `second_unitmeasure_10` varchar(25) DEFAULT NULL,
  `gharama_nyingine_units_10` varchar(100) DEFAULT NULL,
  `gharama_nyingine_second_units_10` varchar(100) DEFAULT NULL,
  `gharama_nyingine_unitcost_10` varchar(100) DEFAULT NULL,
  `gharama_nyingine_amount_10` varchar(25) DEFAULT NULL,
  `nadaiwa_sidaiwi` varchar(25) DEFAULT NULL,
  `kiasi_unachodaiwa` varchar(25) DEFAULT NULL,
  `namba_ya_masurufu` varchar(50) DEFAULT NULL,
  `submitDate` varchar(25) NOT NULL,
  `sign` varchar(25) DEFAULT NULL,
  `masurufu_general_status` varchar(100) DEFAULT NULL,
  `anadaiwa_hadaiwi_ra` varchar(25) DEFAULT NULL,
  `kiasi_anachodaiwa` varchar(25) DEFAULT NULL,
  `namba_ya_masurufu_yanayodaiwa` varchar(50) DEFAULT NULL,
  `masurufu_ya_tarehe` varchar(25) DEFAULT NULL,
  `submitDate_ra` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_hod_u` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_sh` varchar(25) DEFAULT NULL,
  `to_km_napendekeza_apewe_sh` varchar(25) DEFAULT NULL,
  `submitDate_hod_u` varchar(25) DEFAULT NULL,
  `napendekeza_sipendekezi_ps` varchar(25) DEFAULT NULL,
  `napendekeza_asipewe_ps` varchar(100) DEFAULT NULL,
  `napendekeza_apewe_sh_ps` varchar(25) DEFAULT NULL,
  `submitDate_ps` varchar(25) DEFAULT NULL,
  `naidhinisha_siidhinishi_ca` varchar(25) DEFAULT NULL,
  `siidhinishi` varchar(200) DEFAULT NULL,
  `naidhinisha_sh` varchar(25) DEFAULT NULL,
  `vifungu_ca` varchar(500) DEFAULT NULL,
  `submitDate_ca` varchar(25) DEFAULT NULL,
  `naidhinisha_siidhinishi_tae` varchar(25) DEFAULT NULL,
  `siidhinishi_tae` varchar(200) DEFAULT NULL,
  `naidhinisha_tae_sh` varchar(25) DEFAULT NULL,
  `submitDate_tae` varchar(25) DEFAULT NULL,
  `siku_zilizobaki_kufanya_marejesho` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`masurufu_id`,`kibali_id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for mdau_mrejesho
-- ----------------------------
DROP TABLE IF EXISTS `mdau_mrejesho`;
CREATE TABLE `mdau_mrejesho` (
  `id` bigint(2) NOT NULL AUTO_INCREMENT,
  `mdau_mrejesho` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for mdau_ps_action
-- ----------------------------
DROP TABLE IF EXISTS `mdau_ps_action`;
CREATE TABLE `mdau_ps_action` (
  `id` int(10) NOT NULL,
  `ps_action_id` varchar(10) NOT NULL,
  `ps_action_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`ps_action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for miezi
-- ----------------------------
DROP TABLE IF EXISTS `miezi`;
CREATE TABLE `miezi` (
  `id` int(2) NOT NULL,
  `mweziID` varchar(10) NOT NULL,
  `mwezi` varchar(10) NOT NULL,
  `QID` varchar(2) NOT NULL,
  PRIMARY KEY (`mweziID`)
) ENGINE=MyISAM AUTO_INCREMENT=2889 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for mlipaji
-- ----------------------------
DROP TABLE IF EXISTS `mlipaji`;
CREATE TABLE `mlipaji` (
  `id` int(4) DEFAULT NULL,
  `mlipajiID` varchar(10) NOT NULL,
  `mlipaji` varchar(100) NOT NULL,
  `mlipaji_kirefu` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`mlipajiID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nchi
-- ----------------------------
DROP TABLE IF EXISTS `nchi`;
CREATE TABLE `nchi` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(50) NOT NULL,
  `country_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ongeza_mafuta
-- ----------------------------
DROP TABLE IF EXISTS `ongeza_mafuta`;
CREATE TABLE `ongeza_mafuta` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `mafuta_entry_counter` bigint(50) DEFAULT NULL,
  `id_mafuta_yalipoongezwa` bigint(50) DEFAULT NULL,
  `chassis_no` varchar(50) DEFAULT NULL,
  `namba_ya_gari` varchar(50) DEFAULT NULL,
  `mahali_pa_kuongezea_mafuta` varchar(100) DEFAULT NULL,
  `tarehe_ya_kuweka_mafuta` varchar(50) DEFAULT NULL,
  `muda_wa_kuweka_mafuta` varchar(50) DEFAULT NULL,
  `km_za_gari_mafuta_yanapoongezwa` varchar(50) DEFAULT NULL,
  `mafuta_yaliyokuwepo_kabla_ya_kuongeza` varchar(50) DEFAULT NULL,
  `mafuta_yaliyoongezwa` varchar(50) DEFAULT NULL,
  `jumla_ya_mafuta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for orglevels
-- ----------------------------
DROP TABLE IF EXISTS `orglevels`;
CREATE TABLE `orglevels` (
  `catID` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for posho_za_safari
-- ----------------------------
DROP TABLE IF EXISTS `posho_za_safari`;
CREATE TABLE `posho_za_safari` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `ngazi_ya_mshahara` varchar(25) NOT NULL,
  `daraja_la_mshahara` varchar(25) NOT NULL,
  `kiwango_cc_mc` bigint(10) NOT NULL,
  `kiwango_tc_dc` bigint(10) NOT NULL,
  `kiwango_other` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for private_public
-- ----------------------------
DROP TABLE IF EXISTS `private_public`;
CREATE TABLE `private_public` (
  `id` int(10) NOT NULL,
  `private_public_id` varchar(25) NOT NULL,
  `private_public_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`private_public_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions` (
  `country_code` varchar(25) NOT NULL,
  `regID` varchar(25) NOT NULL,
  `regNam` varchar(100) NOT NULL,
  PRIMARY KEY (`country_code`,`regID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for request_categories
-- ----------------------------
DROP TABLE IF EXISTS `request_categories`;
CREATE TABLE `request_categories` (
  `id` bigint(2) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ruti_ya_safari
-- ----------------------------
DROP TABLE IF EXISTS `ruti_ya_safari`;
CREATE TABLE `ruti_ya_safari` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `ruti_ID` varchar(50) NOT NULL,
  `aina_ya_ruti` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for safari_ripoti
-- ----------------------------
DROP TABLE IF EXISTS `safari_ripoti`;
CREATE TABLE `safari_ripoti` (
  `safari_ripoti_id` varchar(10) NOT NULL,
  `masurufu_id` varchar(10) DEFAULT NULL,
  `kibali_id` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `madhumuni` mediumtext NOT NULL,
  `muda` varchar(250) DEFAULT NULL,
  `summoned_by` varchar(250) DEFAULT NULL,
  `activity_objective` varchar(250) DEFAULT NULL,
  `participants` varchar(250) DEFAULT NULL,
  `relevance_to_office` varchar(50) DEFAULT NULL,
  `outputs` mediumtext,
  `further_actions` varchar(1000) DEFAULT NULL,
  `jina_kiambata` varchar(200) DEFAULT NULL,
  `final_kiambata` varchar(200) DEFAULT NULL,
  `submitDate` varchar(25) DEFAULT NULL,
  `safari_ripoti_general_status` varchar(25) DEFAULT NULL,
  `nathibitisha_sithibitishi_hos` varchar(25) DEFAULT NULL,
  `sithibitishi_hos` varchar(250) DEFAULT NULL,
  `submitDate_hos` varchar(25) DEFAULT NULL,
  `nathibitisha_sithibitishi_hod_u` varchar(25) DEFAULT NULL,
  `sithibitishi_hod_u` varchar(250) DEFAULT NULL,
  `submitDate_hod_u` varchar(25) DEFAULT NULL,
  `nathibitisha_sithibitishi_ps` varchar(25) DEFAULT NULL,
  `sithibitishi_ps` varchar(250) DEFAULT NULL,
  `submitDate_ps` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`safari_ripoti_id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sections
-- ----------------------------
DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `division_ID` varchar(10) NOT NULL,
  `section_ID` varchar(10) NOT NULL,
  `section_name` varchar(200) NOT NULL,
  `hos_title` varchar(25) DEFAULT NULL,
  `section_name_kirefu` varchar(200) NOT NULL,
  PRIMARY KEY (`id`,`section_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for send_to_options_idarani
-- ----------------------------
DROP TABLE IF EXISTS `send_to_options_idarani`;
CREATE TABLE `send_to_options_idarani` (
  `id` int(10) NOT NULL,
  `id_mhusika` varchar(10) NOT NULL,
  `mhusika` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`id_mhusika`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ukaimisho
-- ----------------------------
DROP TABLE IF EXISTS `ukaimisho`;
CREATE TABLE `ukaimisho` (
  `ukaimisho_id` bigint(25) NOT NULL,
  `kibali_id` bigint(25) NOT NULL,
  `aliyekaimisha_username` varchar(25) NOT NULL,
  `kazi_zilizokaimishwa` text,
  `aliyekaimishwa_username` varchar(25) NOT NULL,
  `cheo_alichokaimishwa` varchar(25) NOT NULL,
  `aliyekaimishwa_levelID` varchar(15) NOT NULL,
  `div_unit_ID` varchar(25) NOT NULL,
  `section_ID` varchar(25) NOT NULL,
  `tarehe_ya_kuanzia` varchar(25) NOT NULL,
  `tarehe_ya_kukabidhi` varchar(25) NOT NULL,
  `muda_wa_ukaimisho` varchar(25) NOT NULL,
  `jina_kiambata` varchar(250) DEFAULT NULL,
  `final_kiambata` varchar(250) DEFAULT NULL,
  `submitDate` varchar(25) NOT NULL,
  `ripoti_ya_ukaimisho` text,
  `jina_kiambata_2` varchar(250) DEFAULT NULL,
  `final_kiambata_2` varchar(250) DEFAULT NULL,
  `submitDate_ripoti` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ukaimisho_id`,`kibali_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for usafiri
-- ----------------------------
DROP TABLE IF EXISTS `usafiri`;
CREATE TABLE `usafiri` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `usafiriID` varchar(10) NOT NULL,
  `usafiri` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`usafiriID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_level
-- ----------------------------
DROP TABLE IF EXISTS `user_level`;
CREATE TABLE `user_level` (
  `id` int(25) NOT NULL,
  `levelID` varchar(25) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`levelID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for uthibitisho_maelekezo
-- ----------------------------
DROP TABLE IF EXISTS `uthibitisho_maelekezo`;
CREATE TABLE `uthibitisho_maelekezo` (
  `id` int(1) NOT NULL,
  `uthibitisho_ID` varchar(100) NOT NULL,
  `uthibitisho` varchar(250) NOT NULL,
  PRIMARY KEY (`uthibitisho_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for vibali
-- ----------------------------
DROP TABLE IF EXISTS `vibali`;
CREATE TABLE `vibali` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `file_ref_number` varchar(100) DEFAULT NULL,
  `subject_file_number` varchar(100) DEFAULT NULL,
  `file_ref_number_date` varchar(25) DEFAULT NULL,
  `masurufu_id` bigint(10) DEFAULT NULL,
  `ukaimisho_id` bigint(10) DEFAULT NULL,
  `handed_back` varchar(25) DEFAULT NULL,
  `financial_year` varchar(20) NOT NULL,
  `min_ID` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `levelID` varchar(100) NOT NULL,
  `cheo_ID` varchar(100) NOT NULL,
  `div_unit_ID` int(10) NOT NULL,
  `section_ID` int(10) DEFAULT NULL,
  `ruti_ID` varchar(50) NOT NULL,
  `safari_n` int(2) DEFAULT NULL,
  `jina_la_halmashauri` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_2` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_3` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_4` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_5` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_6` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_7` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_8` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_9` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_10` varchar(200) DEFAULT NULL,
  `jina_la_halmashauri_11` varchar(200) DEFAULT NULL,
  `catID` varchar(3) NOT NULL,
  `catID_2` varchar(3) DEFAULT NULL,
  `catID_3` varchar(3) DEFAULT NULL,
  `catID_4` varchar(3) DEFAULT NULL,
  `catID_5` varchar(3) DEFAULT NULL,
  `catID_6` varchar(3) DEFAULT NULL,
  `catID_7` varchar(3) DEFAULT NULL,
  `catID_8` varchar(3) DEFAULT NULL,
  `catID_9` varchar(3) DEFAULT NULL,
  `catID_10` varchar(3) DEFAULT NULL,
  `catID_11` varchar(3) DEFAULT NULL,
  `regID` int(3) NOT NULL,
  `regID_2` int(3) DEFAULT NULL,
  `regID_3` int(3) DEFAULT NULL,
  `regID_4` int(3) DEFAULT NULL,
  `regID_5` int(3) DEFAULT NULL,
  `regID_6` int(3) DEFAULT NULL,
  `regID_7` int(3) DEFAULT NULL,
  `regID_8` int(3) DEFAULT NULL,
  `regID_9` int(3) DEFAULT NULL,
  `regID_10` int(3) DEFAULT NULL,
  `regID_11` int(3) DEFAULT NULL,
  `lgaID` int(5) DEFAULT NULL,
  `lgaID_2` int(5) DEFAULT NULL,
  `lgaID_3` int(5) DEFAULT NULL,
  `lgaID_4` int(5) DEFAULT NULL,
  `lgaID_5` int(5) DEFAULT NULL,
  `lgaID_6` int(5) DEFAULT NULL,
  `lgaID_7` int(5) DEFAULT NULL,
  `lgaID_8` int(5) DEFAULT NULL,
  `lgaID_9` int(5) DEFAULT NULL,
  `lgaID_10` int(5) DEFAULT NULL,
  `lgaID_11` int(5) DEFAULT NULL,
  `sDate` varchar(100) NOT NULL,
  `sDate_2` varchar(100) DEFAULT NULL,
  `sDate_3` varchar(100) DEFAULT NULL,
  `sDate_4` varchar(100) DEFAULT NULL,
  `sDate_5` varchar(100) DEFAULT NULL,
  `sDate_6` varchar(100) DEFAULT NULL,
  `sDate_7` varchar(100) DEFAULT NULL,
  `sDate_8` varchar(100) DEFAULT NULL,
  `sDate_9` varchar(100) DEFAULT NULL,
  `sDate_10` varchar(100) DEFAULT NULL,
  `sDate_11` varchar(100) DEFAULT NULL,
  `eDate` varchar(100) NOT NULL,
  `eDate_2` varchar(100) DEFAULT NULL,
  `eDate_3` varchar(100) DEFAULT NULL,
  `eDate_4` varchar(100) DEFAULT NULL,
  `eDate_5` varchar(100) DEFAULT NULL,
  `eDate_6` varchar(100) DEFAULT NULL,
  `eDate_7` varchar(100) DEFAULT NULL,
  `eDate_8` varchar(100) DEFAULT NULL,
  `eDate_9` varchar(100) DEFAULT NULL,
  `eDate_10` varchar(100) DEFAULT NULL,
  `eDate_11` varchar(100) DEFAULT NULL,
  `distance` varchar(30) DEFAULT NULL,
  `distance_1` varchar(30) DEFAULT NULL,
  `distance_2` varchar(30) DEFAULT NULL,
  `distance_3` varchar(30) DEFAULT NULL,
  `distance_4` varchar(30) DEFAULT NULL,
  `distance_5` varchar(30) DEFAULT NULL,
  `distance_6` varchar(30) DEFAULT NULL,
  `distance_7` varchar(30) DEFAULT NULL,
  `distance_8` varchar(30) DEFAULT NULL,
  `distance_9` varchar(30) DEFAULT NULL,
  `distance_10` varchar(30) DEFAULT NULL,
  `distance_11` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `duration_1` varchar(30) DEFAULT NULL,
  `duration_2` varchar(30) DEFAULT NULL,
  `duration_3` varchar(30) DEFAULT NULL,
  `duration_4` varchar(30) DEFAULT NULL,
  `duration_5` varchar(30) DEFAULT NULL,
  `duration_6` varchar(30) DEFAULT NULL,
  `duration_7` varchar(30) DEFAULT NULL,
  `duration_8` varchar(30) DEFAULT NULL,
  `duration_9` varchar(30) DEFAULT NULL,
  `duration_10` varchar(30) DEFAULT NULL,
  `duration_11` varchar(30) DEFAULT NULL,
  `duration_safarini` int(30) NOT NULL,
  `duration_safarini_1` int(30) DEFAULT NULL,
  `duration_safarini_2` int(30) DEFAULT NULL,
  `duration_safarini_3` int(30) DEFAULT NULL,
  `duration_safarini_4` int(30) DEFAULT NULL,
  `duration_safarini_5` int(30) DEFAULT NULL,
  `duration_safarini_6` int(30) DEFAULT NULL,
  `duration_safarini_7` int(30) DEFAULT NULL,
  `duration_safarini_8` int(30) DEFAULT NULL,
  `duration_safarini_9` int(30) DEFAULT NULL,
  `duration_safarini_10` int(30) DEFAULT NULL,
  `duration_safarini_11` int(30) DEFAULT NULL,
  `usafiriID` varchar(100) NOT NULL,
  `usafiriID_2` varchar(100) DEFAULT NULL,
  `usafiriID_3` varchar(100) DEFAULT NULL,
  `usafiriID_4` varchar(100) DEFAULT NULL,
  `usafiriID_5` varchar(100) DEFAULT NULL,
  `usafiriID_6` varchar(100) DEFAULT NULL,
  `usafiriID_7` varchar(100) DEFAULT NULL,
  `usafiriID_8` varchar(100) DEFAULT NULL,
  `usafiriID_9` varchar(100) DEFAULT NULL,
  `usafiriID_10` varchar(100) DEFAULT NULL,
  `usafiriID_11` varchar(100) DEFAULT NULL,
  `madhumuniID` varchar(100) NOT NULL,
  `madhumuniID_2` varchar(100) DEFAULT NULL,
  `madhumuniID_3` varchar(100) DEFAULT NULL,
  `madhumuniID_4` varchar(100) DEFAULT NULL,
  `madhumuniID_5` varchar(100) DEFAULT NULL,
  `madhumuniID_6` varchar(100) DEFAULT NULL,
  `madhumuniID_7` varchar(100) DEFAULT NULL,
  `madhumuniID_8` varchar(100) DEFAULT NULL,
  `madhumuniID_9` varchar(100) DEFAULT NULL,
  `madhumuniID_10` varchar(100) DEFAULT NULL,
  `madhumuniID_11` varchar(100) DEFAULT NULL,
  `muhtasari` varchar(500) DEFAULT NULL,
  `muhtasari_2` varchar(500) DEFAULT NULL,
  `muhtasari_3` varchar(500) DEFAULT NULL,
  `muhtasari_4` varchar(500) DEFAULT NULL,
  `muhtasari_5` varchar(500) DEFAULT NULL,
  `muhtasari_6` varchar(500) DEFAULT NULL,
  `muhtasari_7` varchar(500) DEFAULT NULL,
  `muhtasari_8` varchar(500) DEFAULT NULL,
  `muhtasari_9` varchar(500) DEFAULT NULL,
  `muhtasari_10` varchar(500) DEFAULT NULL,
  `muhtasari_11` varchar(500) DEFAULT NULL,
  `mlipajiID` varchar(100) NOT NULL,
  `mlipajiID_2` varchar(100) DEFAULT NULL,
  `mlipajiID_3` varchar(100) DEFAULT NULL,
  `mlipajiID_4` varchar(100) DEFAULT NULL,
  `mlipajiID_5` varchar(100) DEFAULT NULL,
  `mlipajiID_6` varchar(100) DEFAULT NULL,
  `mlipajiID_7` varchar(100) DEFAULT NULL,
  `mlipajiID_8` varchar(100) DEFAULT NULL,
  `mlipajiID_9` varchar(100) DEFAULT NULL,
  `mlipajiID_10` varchar(100) DEFAULT NULL,
  `mlipajiID_11` varchar(100) DEFAULT NULL,
  `wengine` varchar(100) DEFAULT NULL,
  `wengine_2` varchar(100) DEFAULT NULL,
  `wengine_3` varchar(100) DEFAULT NULL,
  `wengine_4` varchar(100) DEFAULT NULL,
  `wengine_5` varchar(100) DEFAULT NULL,
  `wengine_6` varchar(100) DEFAULT NULL,
  `wengine_7` varchar(100) DEFAULT NULL,
  `wengine_8` varchar(100) DEFAULT NULL,
  `wengine_9` varchar(100) DEFAULT NULL,
  `wengine_10` varchar(100) DEFAULT NULL,
  `wengine_11` varchar(100) DEFAULT NULL,
  `jina_kiambata` varchar(200) DEFAULT NULL,
  `final_kiambata` varchar(200) DEFAULT NULL,
  `submitDate` varchar(100) DEFAULT NULL,
  `sign` varchar(100) DEFAULT NULL,
  `zimebaki_siku` varchar(10) DEFAULT NULL,
  `last_edited` varchar(100) DEFAULT NULL,
  `aina_ya_kibali` varchar(100) DEFAULT NULL,
  `sababu_ya_aina` varchar(200) DEFAULT NULL,
  `udharura` varchar(100) DEFAULT NULL,
  `sababu_ya_udharura` varchar(100) DEFAULT NULL,
  `general_status` varchar(50) DEFAULT NULL,
  `uthibitisho` varchar(100) DEFAULT NULL,
  `sababu_za_uthibitisho` varchar(200) DEFAULT NULL,
  `hos_username` varchar(100) DEFAULT NULL,
  `hos_status` varchar(100) DEFAULT NULL,
  `hos_rsn_chg` varchar(200) DEFAULT NULL,
  `hos_submitDate` varchar(100) DEFAULT NULL,
  `hos_sign` varchar(100) DEFAULT NULL,
  `last_edited_hos` varchar(100) DEFAULT NULL,
  `hodu_username` varchar(50) DEFAULT NULL,
  `hodu_levelID` varchar(50) DEFAULT NULL,
  `hodu_status` varchar(100) DEFAULT NULL,
  `hodu_rsn_chg` varchar(200) DEFAULT NULL,
  `hodu_submitDate` varchar(100) DEFAULT NULL,
  `hodu_sign` varchar(100) DEFAULT NULL,
  `last_edited_hodu` varchar(100) DEFAULT NULL,
  `dahrm_username` varchar(50) DEFAULT NULL,
  `dahrm_levelID` varchar(50) DEFAULT NULL,
  `dahrm_status` varchar(100) DEFAULT NULL,
  `dahrm_rsn_chg` varchar(200) DEFAULT NULL,
  `dahrm_submitDate` varchar(100) DEFAULT NULL,
  `dahrm_sign` varchar(100) DEFAULT NULL,
  `last_edited_dahrm` varchar(100) DEFAULT NULL,
  `ca_username` varchar(50) DEFAULT NULL,
  `ca_levelID` varchar(50) DEFAULT NULL,
  `ca_status` varchar(100) DEFAULT NULL,
  `ca_rsn_chg` varchar(200) DEFAULT NULL,
  `ca_submitDate` varchar(100) DEFAULT NULL,
  `ca_sign` varchar(100) DEFAULT NULL,
  `ra_username` varchar(50) DEFAULT NULL,
  `ra_levelID` varchar(50) DEFAULT NULL,
  `ra_status` varchar(100) DEFAULT NULL,
  `ra_rsn_chg` varchar(200) DEFAULT NULL,
  `ra_submitDate` varchar(100) DEFAULT NULL,
  `ra_sign` varchar(100) DEFAULT NULL,
  `pmu_username` varchar(50) DEFAULT NULL,
  `pmu_levelID` varchar(50) DEFAULT NULL,
  `pmu_status` varchar(100) DEFAULT NULL,
  `pmu_rsn_chg` varchar(200) DEFAULT NULL,
  `pmu_submitDate` varchar(100) DEFAULT NULL,
  `pmu_sign` varchar(100) DEFAULT NULL,
  `driver_username` varchar(100) DEFAULT NULL,
  `namba_ya_gari` varchar(25) DEFAULT NULL,
  `aina_ya_gari` varchar(250) DEFAULT NULL,
  `driver_masurufu_id` bigint(10) DEFAULT NULL,
  `driver_mafuta_id` bigint(10) DEFAULT NULL,
  `to_username` varchar(50) DEFAULT NULL,
  `to_levelID` varchar(50) DEFAULT NULL,
  `to_status` varchar(100) DEFAULT NULL,
  `to_rsn_chg` varchar(200) DEFAULT NULL,
  `to_submitDate` varchar(100) DEFAULT NULL,
  `to_sign` varchar(100) DEFAULT NULL,
  `ps_username` varchar(50) DEFAULT NULL,
  `ps_levelID` varchar(50) DEFAULT NULL,
  `ps_status` varchar(100) DEFAULT NULL,
  `ps_rsn_chg` varchar(200) DEFAULT NULL,
  `ps_submitDate` varchar(100) DEFAULT NULL,
  `ps_sign` varchar(100) DEFAULT NULL,
  `last_edited_ps` varchar(100) DEFAULT NULL,
  `w_username` varchar(50) DEFAULT NULL,
  `w_levelID` varchar(50) DEFAULT NULL,
  `w_status` varchar(100) DEFAULT NULL,
  `w_rsn_chg` varchar(200) DEFAULT NULL,
  `w_submitDate` varchar(100) DEFAULT NULL,
  `w_sign` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for vifungu_vya_malipo
-- ----------------------------
DROP TABLE IF EXISTS `vifungu_vya_malipo`;
CREATE TABLE `vifungu_vya_malipo` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `div_unit_ID` varchar(25) DEFAULT NULL,
  `kifungu` varchar(100) NOT NULL,
  `maelezo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for vyeo
-- ----------------------------
DROP TABLE IF EXISTS `vyeo`;
CREATE TABLE `vyeo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cheo_ID` varchar(25) NOT NULL,
  `jina_la_cheo` varchar(200) NOT NULL,
  `job_title_description` varchar(200) NOT NULL,
  `ngazi_ya_mshahara` varchar(10) NOT NULL,
  `daraja_la_mshahara` varchar(10) NOT NULL,
  `levelID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`cheo_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for wafanyakazi
-- ----------------------------
DROP TABLE IF EXISTS `wafanyakazi`;
CREATE TABLE `wafanyakazi` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `min_id` int(2) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `pf_no` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `e_add` varchar(50) NOT NULL,
  `div_unit_ID` varchar(50) NOT NULL,
  `div_au_unit` varchar(10) DEFAULT NULL,
  `section_ID` varchar(50) NOT NULL,
  `cheo_ID` varchar(50) NOT NULL,
  `ngazi_ya_mshahara` varchar(50) NOT NULL,
  `daraja_la_mshahara` varchar(50) DEFAULT NULL,
  `levelID` varchar(50) NOT NULL,
  `levelID_group` varchar(100) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for wafanyakazi_copy
-- ----------------------------
DROP TABLE IF EXISTS `wafanyakazi_copy`;
CREATE TABLE `wafanyakazi_copy` (
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
  `levelID_group` varchar(100) DEFAULT NULL,
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
-- Table structure for wafanyakazi_copy1
-- ----------------------------
DROP TABLE IF EXISTS `wafanyakazi_copy1`;
CREATE TABLE `wafanyakazi_copy1` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `min_id` int(2) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `pf_no` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `e_add` varchar(50) NOT NULL,
  `div_unit_ID` varchar(50) NOT NULL,
  `div_au_unit` varchar(10) DEFAULT NULL,
  `section_ID` varchar(50) NOT NULL,
  `cheo_ID` varchar(50) NOT NULL,
  `ngazi_ya_mshahara` varchar(50) NOT NULL,
  `daraja_la_mshahara` varchar(50) DEFAULT NULL,
  `levelID` varchar(50) NOT NULL,
  `levelID_group` varchar(100) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for wafanyakazi_online
-- ----------------------------
DROP TABLE IF EXISTS `wafanyakazi_online`;
CREATE TABLE `wafanyakazi_online` (
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
INSERT INTO `afcg_acc_facilities` VALUES ('1', 'TH', 'Town Hotel', 'U', null, null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('2', 'VH', 'Vacation Hotel', 'SU', null, null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('3', 'Lodge', 'Lodge', 'IA', 'OA', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('4', 'TC', 'Tented Camp', 'IA', 'OA', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('5', 'Villa', 'Villa', 'U', 'SU', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('6', 'Cottage', 'Cottage', 'U', 'SU', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('7', 'SA', 'Serviced Apartment', 'U', 'SU', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('8', 'Restaurant', 'Restaurant', 'U', 'SU', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('9', 'Motel', 'Motel', 'AH', null, null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('10', 'AH', 'Approved Hotel', 'U', 'SU', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('11', 'GH', 'Guest House', 'U', 'SU', 'AH', null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('12', 'Hostel', 'Hostel', 'U', 'SU', 'IA', 'OA', null);
INSERT INTO `afcg_acc_facilities` VALUES ('13', 'HS', 'Home Stay', 'U', 'OA', null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('14', 'Caravan', 'Caravan', 'SU', null, null, null, null);
INSERT INTO `afcg_acc_facilities` VALUES ('15', 'Campsite', 'Campsite', 'IA', 'OA', null, null, null);
INSERT INTO `afcg_assessors` VALUES ('1', 'eeeee fff', 'ffffff', 'ffffff', '8888888888', '4b1e0a37158f4d133e94f7f49f7afca5', null, '1111111111', null);
INSERT INTO `afcg_assessors` VALUES ('2', 'weeeee hhh', 'eeeee', 'eeee', '1111111111', null, null, '1111111111', null);
INSERT INTO `afcg_assessors_filter` VALUES ('2', 'Certified Assessors');
INSERT INTO `afcg_assessors_filter` VALUES ('1', 'Own Assessors');
INSERT INTO `afcg_assessors_filter` VALUES ('3', 'All Assessors');
INSERT INTO `afcg_assessors_vs_facilities` VALUES ('1', '1111111111', 'self_self', '25', '1');
INSERT INTO `afcg_essential_items` VALUES ('9', '25', '77.3', '3', '3', '3', '3', '', '6', '6', '', '6', '6', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '6', '6', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '4', '4', '4', '', '6', '6', '', '4', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `afcg_facility_delete_reason` VALUES ('1', 'The facility is closed');
INSERT INTO `afcg_facility_delete_reason` VALUES ('2', 'The faciliy is shifted');
INSERT INTO `afcg_facility_delete_reason` VALUES ('3', 'The faciliy is sold');
INSERT INTO `afcg_facility_delete_reason` VALUES ('4', 'Other');
INSERT INTO `afcg_facility_management_options` VALUES ('1', 'me', 'By me');
INSERT INTO `afcg_facility_management_options` VALUES ('2', 'another_person', 'By another person');
INSERT INTO `afcg_location_group` VALUES ('1', 'IA', 'Inside attraction');
INSERT INTO `afcg_location_group` VALUES ('2', 'OA', 'Outside near attraction');
INSERT INTO `afcg_location_group` VALUES ('3', 'AH', 'Along highway');
INSERT INTO `afcg_location_group` VALUES ('4', 'SU', 'Sub urban');
INSERT INTO `afcg_location_group` VALUES ('5', 'U', 'Town, Urban or City center');
INSERT INTO `afcg_registered_facilities` VALUES ('28', '10001', '75', 'Kilimanjaro', '3025', 'Moshi DC', 'OA', 'Outside near attraction', 'HS', 'Home Stay', null, null, null, '123123', 'ROSALIA INVESTMENT', 'Rosalia Sweet Home', 'rosalia@rosalia.org', '0715115300', '123123123123', 'P.O.Box 212211 Moshi - Tanzania', 'Block 12 Plot F Uru East Ward, Mwasi South Village, Mamboleo Hamlet, Moshi District - Tanzania', '05-01-2021 10:25:47', 'mapya', '0715115300', '0715115300', 'fabf6e600f53329c6f29a92783c645ed', 'yes', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `bei_za_mafuta` VALUES ('1', '2400');
INSERT INTO `dawati_la_wateja` VALUES ('1', '1000001', 'Thadey Masika Msaki', 'Male', 'thadeyw@yahoo.com', '0715115300', 'Tanzania', 'Kilimanjaro', 'Moshi DC', 'KICS Tanzania P.O.Box 544 Moshi', 'MALALAMIKO KUHUSU WANYAMA TOKA PORI LA KIBARUZI WANAOVAMIA MAKAZI YA WANAKIJIJI, KIJIJI CHA PANGASENI, KATA YA LUBAVU', 'From Wizara - I am writing on behalf of Moshi Wildlife Society to request your support for an initiative to include animal protection principles in our constitution. We are approaching you in the context of Moshi Wildlife Society  Constitution Project, which has launched a regional movement in favor of placing animals in constitutions. We would be grateful for your views on the importance of animal protection and the feasibility of including this in our own country constitution', '1000001_demo_attachment_empty.docx', '16-05-2020 10:10:27', 'mrejesho_mdau', '25-05-2020 12:27:42', 'Dawati', '', 'Malalamiko', 'public', '2001', 'DW', '2001', 'Mkuu wa Idara', null, null, null, null, null, null, null, null, null, null, null, null, 'MAJIBU: MALALAMIKO KUHUSU WANYAMA TOKA PORI LA KIBARUZI WANAOVAMIA MAKAZI YA WANAKIJIJI, KIJIJI CHA PANGASENI, KATA YA LUBAVU', 'MAJIBU: I am writing on behalf of Moshi Wildlife Society to request your support for an initiative to include animal protection principles in our constitution. We are approaching you in the context of Moshi Wildlife Society Constitution Project, which has launched a regional movement in favor of placing animals in constitutions. We would be grateful for your views on the importance of animal protection and the feasibility of including this in our own country constitution', '1000001_majibu_maoni_ya_fomu.docx', null, '02-06-2020 11:43:31', '', '02-06-2020 10:55:08', '22222222', '', null, null, 'yamefanyiwa_kazi_idarani', 'vetted', 'Vetted', '02-06-2020 11:57:59', 'Dawati', '', 'Average', '', '02-06-2020 12:02:19');
INSERT INTO `defaultyear` VALUES ('1', 'FY 2019-2020');
INSERT INTO `demo_live_search` VALUES ('1', 'Introduction to codeignitor', 'Codeignitor is php based MVC framework. Its framework is so easy and popular.\r\n\r\nCI (codeignitor) use for building small and large database web application and also for small websites.\r\n\r\nIt is good and easy mvc structure for starter programmer.\r\n\r\nMVC stand for Model View Controller.\r\nIn a simple way when an end user comes to web app its firstly intract with view(simple php or html page) .', 'http://webrocom.net/introduction-to-codeignitor/', '2014-09-11');
INSERT INTO `demo_live_search` VALUES ('2', 'create a simpe website using codeignitor', 'ollow the below steps for create a simple website using codeignitor.\r\n\r\nStep 1. Download the codeignitor and extract zip file. Now put codeignitor folder on server folder like(www or htdocs).\r\n\r\nStep 2. Configure your codeignitor webiste.\r\n\r\nopen file (config.php) under the directory application/config/config.php. and set base url and save file.', 'http://webrocom.net/create-a-simpe-website-using-codeignitor/', '2014-09-11');
INSERT INTO `demo_live_search` VALUES ('3', 'codeignitor pagination using ajax', 'Before read this tutorials i want to tell you that i m not using any codeigniter pagination class. So its so simple and fast pagination skill and tips , just enjoy this snippet.\r\n\r\nCreate simple ajax pagination in codeigniter.  Lets follow this tutorial.\r\n\r\nDownload the codeigniter from here.  Now unzip the file and put this folder in your local server folder(www or htdocs).\r\n\r\nwe need to create a database table. so create a countries table in mysql database', 'http://webrocom.net/codeignitor-pagination-using-ajax/', '2014-09-15');
INSERT INTO `demo_live_search` VALUES ('4', 'generate dynamic excel file using phpexcel in codeigniter', 'In this tutorial we learn how to generate a excel file in php codeigniter with help for php excel library. And excel data will come through mysql database.\r\nWe will also format the the text and row in excel file. So achieve this goal follow these steps.\r\nStep 1.\r\n\r\nDownload the codeigniter framework for codeigniter website and set up on local server. and config it.\r\nStep 2.', 'http://webrocom.net/generate-excel-file-using-phpexcel-in-codeigniter/', '2014-09-19');
INSERT INTO `demo_live_search` VALUES ('5', 'ajax login system in php codeigniter', 'Create a simple ajax login system using codeigniter\r\n\r\n.\r\nStep 1.\r\n\r\nDownload codeigniter from codeigniter’s website and configure it on local server(www/htdocs).\r\nStep 2.\r\n\r\nwe are using authentication process so create a mysql table(auth).', 'http://webrocom.net/ajax-login-system-php-codeigniter/', '2014-09-24');
INSERT INTO `demo_live_search` VALUES ('6', 'delete multiple record based on checkbox using ajax in php codeigniter', 'Today we are going to built a interesting codeigniter code snippet. “How to delete multiple recodes based on checkbox selection in php codeigniter”, so achieve this goal just follow below steps.\r\nStep 1.\r\n\r\nDownload codeigniter framework then unzip the folder using winzip or winrar and then put the framework folder in local server(htdocs or www).\r\nStep 2.\r\n\r\nSet up basic configuration.\r\nupdate the config.php under the directory(application/config/)', 'http://webrocom.net/delete-multiple-recoed-based-checkbox-using-ajax-php-codeigniter/', '2014-10-06');
INSERT INTO `demo_live_search` VALUES ('7', 'Facebook Login using javascript sdk', ' Its is very interesting and simple way to create a login flow using facebook api in our web app. So lets enjoy this code.\r\nStep 1.\r\n\r\nCreate a directory structure like this:\r\nroot\r\n——-index.php\r\n——-home.php\r\n——-fb.js\r\nStep 2.\r\n\r\nBefore starting your code you have to create a facebook app.\r\nhere is link Create a facebook app\r\nPlease follow facebook app developer guide line.\r\nAfter finishing this app move to step 3.', 'http://webrocom.net/facebook-login-using-javascript-sdk/', '2014-10-07');
INSERT INTO `demo_search` VALUES ('1', 'Bulk Product Data Insert,Update CSV File into Database Using PHP and Mysqli', 'In this post we will discuses about how to insert and update bulk CSV file data into the database. php script to import csv file into mysql database,import csv file into mysql using php demo,how to read csv file in php and store in mysql,import data from excel to mysql using php code,php import csv ', 'http://www.mostlikers.com/2016/04/bulk-product-data-insertupdate-csv-file.html');
INSERT INTO `demo_search` VALUES ('2', 'Codeigniter SEO Friendly URL Structure', 'Codeigniter SEO Friendly URL Structure codeigniter seo friendly url htaccess,codeigniter seo plugin,codeigniter seo library\ncodeigniter url routing,how to remove index.php from url in codeigniter,codeigniter htaccess file\ncodeigniter url segment,codeigniter 3 htaccess,codeigniter seo tips,codeignite', 'http://www.mostlikers.com/2016/04/codeigniter-seo-friendly-url-structure.html');
INSERT INTO `demo_search` VALUES ('3', 'Providing Security to the website forms', 'Most of the website forms face security issues.how to provide security to website in php,providing security to restful web services\nproviding security in 4g systems unveiling the challenges,secure website forms\nhow to create a secure web form,creating a secure website,how to create a secure website ', 'http://www.mostlikers.com/2016/03/providing-security-to-website-forms.html');
INSERT INTO `demo_search` VALUES ('4', 'Read Your Gmails Using PHP and IMAP', 'Int this post i will explain about how to access gmail inbox  mail via php code. Here i am using PHP 5 IMAP  function to retrieve gmail inbox emails. IMAP function used to open streams to POP3 and NNTP servers.php imap_open\nphp imap gmail', 'http://www.mostlikers.com/2016/01/read-your-gmails-using-php-and-imap.html');
INSERT INTO `demo_search` VALUES ('5', 'Git Tutorial - Git Configurations #1', 'git tutorial There are three levels that the Git stores the configurations.System Level Configurations, User Level Configurations and Project Level Configurations.git tutorial for beginners,git tutorial pdf,github tutorial,git commands\ngit cheat sheet,git tutorial video,git push ,git tutorial window', 'http://www.mostlikers.com/2016/01/git-tutorial-git-configurations-1.html');
INSERT INTO `demo_search` VALUES ('6', 'Git Tutorial - Installation', 'It is a software that keeps a track of files and directories that we make; especially the text changes and allows us to compare between the versions that we created. GIT is referred as a version control system (VCS). The primary purpose of the VCS is to manage the source code, i.e., the source code ', 'http://www.mostlikers.com/2016/01/git-tutorial-installation.html');
INSERT INTO `demo_search` VALUES ('7', 'Git Tutorial - Introduction', 'It is a software that keeps a track of files and directories that we make; especially the text changes and allows us to compare between the versions that we created. GIT is referred as a version control system (VCS). The primary purpose of the VCS is to manage the source code, i.e., the source code ', 'http://www.mostlikers.com/2016/01/git-tutorial-introduction.html');
INSERT INTO `demo_search` VALUES ('8', 'HTML4 vs HTML5 Page Structure', 'This post is about the differences between HTML4 and HTML5, the difference between the HTML elements, tags, page structure, browser support and which one to choose. This post is a lengthier one so it will be divided into two parts. All the website follow a common structure of header, navigation, sid', 'http://www.mostlikers.com/2016/01/html4-vs-html5-page-structure_12.html');
INSERT INTO `demo_search` VALUES ('9', 'Bootstrap Tutorial - My First Code', 'Bootstrap uses the HTML elements for creating the layouts and CSS for styling the layout, that means you will not have to learn any other coding language just the HTML, CSS and JavaScript which are the website languages.', 'http://www.mostlikers.com/2015/12/bootstrap-tutorial-my-first-code.html');
INSERT INTO `demo_search` VALUES ('10', 'Bootstrap Tutorial - Introduction', 'Bootstrap was developed by Mark Otto and Jacob Thornton on August 2011. Bootstrap is a front end framework built using HTML, CSS and JavaScript, for building for responsive web sites. It is faster and easier to use and sometimes a little tricky. It is called as a mobile first framework. It is an ope', 'http://www.mostlikers.com/2015/12/bootstrap-tutorial-introduction.html');
INSERT INTO `demo_search` VALUES ('11', 'Fetch Random rows records from Database Using Mysqli and PHP', 'In this tutorial you will learn various techniques to how to Fetch Random rows records from Database. Using this code you can display random gallery profile, Online examination random questions, multiple choice quiz system. I used following simple query for retrieving random records from database ta', 'http://www.mostlikers.com/2015/12/fetch-random-rows-records-from-database.html');
INSERT INTO `demo_search` VALUES ('12', 'Simple Subscribe and Unsubscribe Script in PHP', 'A newsletter is a regularly distributed publication via email in register subscribe user. In this post i have explain about How to create simple news letter subscription script in php. Here i have created very simple code to Subscribe and Unsubscribe email user list.', 'http://www.mostlikers.com/2015/11/simple-subscribe-and-unsubscribe-script.html');
INSERT INTO `demo_search` VALUES ('13', 'Text fade in fade out effect using jquery', 'Text fade in fade out effect using jquery, fadeIn   - This method used to hidden the element. fadeIn callback parameter is a function to be executed after the fading completes.\n\nfadeOut() - This method used to visible the hidden element. It can take the slow and fast effect based on milliseconds. \n\n', 'http://www.mostlikers.com/2015/11/text-fade-in-fade-out-effect-using.html');
INSERT INTO `demo_search` VALUES ('14', 'Facebook like fetch YouTube embed videos from url using PHP and Ajax', 'Have you shared YouTube video url in facebook timeline.  while typing the link YouTube video will preview the timeline. I had developed Facebook like fetch YouTube embed videos from url using PHP and Ajax with live demo.', 'http://www.mostlikers.com/2015/11/facebook-like-fetch-youtube-embed.html');
INSERT INTO `demo_search` VALUES ('15', 'New User Registration With Email Verification Using PHP and Mysqli', 'In this post i have explain about how to implement New user registration with email verification script. if your using register form in a website, you need to use email verification because it will be reduce spam register user and make sure you will get correct registered user in your website.', 'http://www.mostlikers.com/2015/11/new-user-registration-with-email-verifcation.html');
INSERT INTO `demo_search` VALUES ('16', 'Get all child, grandchild etc nodes under parent array using php with mysqli', 'In this post i have explain about how to implement New user registration with email verification script. if your using register form in a website, you need to use email verification because it will be reduce spam register user and make sure you will get correct registered user in your website.', 'http://www.mostlikers.com/2015/10/get-all-child-grandchild-etc-nodes.html');
INSERT INTO `demo_search` VALUES ('17', 'Youtube video embed code tricks', 'How to Remove YouTube Logo & Branding from Embedded code,codeigniter youtube channel embed,Disable Related Videos,Autoplay and loop youtube video,Remove YouTube Player Controls and Title,Remove YouTube annotations', 'http://www.mostlikers.com/2015/10/youtube-video-embed-code-tricks.html');
INSERT INTO `demo_search` VALUES ('18', 'Remove row from table with fadeOut effect using jquery and php', 'delete data from database fadeout In this post i have explain about Remove row from table with fadeOut effect using jquery and php. Here i have used ajax to delete the database record. It will work without refresh page and row table data delete with fadeOut effect. jquery delete table row animation\n', 'http://www.mostlikers.com/2015/09/remove-row-from-table-with-fadeout.html');
INSERT INTO `demo_search` VALUES ('19', ' Image Mouse Over Effect using CSS3 and jQuery', 'image hover effect jquery free download,mouse over effect in css,image hover effect css3,jquery image hover effect using one image,jquery image hover effect with caption,jquery hover effects on div,jquery text hover effects,jquery image hover zoom,', 'http://www.mostlikers.com/2015/09/image-mouse-over-effect-using-css3-and.html');
INSERT INTO `demo_search` VALUES ('20', 'CSS3 image zoom fade effect', 'image hover effect jquery free download,mouse over effect in css,image hover effect css3,jquery image hover effect using one image,jquery image hover effect with caption,jquery hover effects on div,jquery text hover effects,jquery image hover zoom,', 'http://www.mostlikers.com/2015/08/css3-image-zoom-fade-effect.html');
INSERT INTO `demo_search` VALUES ('21', 'Product search filtering using php and ajax', 'In this post i have created product filters in a webpage like that of Flipkart and Amazon. Here i have used ajax function, It will get result without refresh page. Follow this simple code create ecommerce site search filter. Search filter like amazon filpkart, ecommerce site search filter in php, se', 'http://www.mostlikers.com/2015/08/product-search-filtering-using-php-and.html');
INSERT INTO `demo_search` VALUES ('22', 'Convert PHP data to JSON API url', 'Convert PHP data to JSON API url. Today i have discussed about Convert php result array to json api url. JSON is a light-weight data-interchange format. Current trend to develop the api and web app server side exchanging data between their servers  XML or JSON format. JSON is the easiest way to tran', 'http://www.mostlikers.com/2015/08/convert-php-data-to-json-api-url.html');
INSERT INTO `demo_search` VALUES ('23', 'Forget password recovery using Ajax, php and mysqli', 'In this tutorial i want to discuses about Forget password recovery using php and mysqli.forgot password code in php example\nforgot password code in php free download\nforgot password code in php mysql\nforgot password code in php with demo', 'http://www.mostlikers.com/2015/07/forget-password-recovery-using-ajax-php.html');
INSERT INTO `demo_search` VALUES ('24', 'Make seo trick for title tag using javascript', 'Make seo trick for title tag using javascript,Make your html title tag website traffic .Title tags are part of the meta tags that appear at the top of your HTML inside the < head> area. it will display on browser tab title.Blink Effect in title tag script,Marquee Effect in title tag script', 'http://www.mostlikers.com/2015/06/make-seo-trick-for-title-tag-using.html');
INSERT INTO `demo_search` VALUES ('25', 'CSS3 image rotate animation effect', 'CSS3 image rotate animation effect,', 'http://www.mostlikers.com/2015/06/css3-image-rotate-animation-effect.html');
INSERT INTO `demo_search` VALUES ('26', 'Display Flash Message in CodeIgniter', 'Display Flash Message in CodeIgniter,How to Display Error Message in CodeIgniter,Set flash data in controller', 'http://www.mostlikers.com/2015/06/display-flash-message-in-codeigniter.html');
INSERT INTO `demo_search` VALUES ('27', 'Generate RSS Feed for website using php and json script', 'Generate RSS Feed for website using php and json script,Generate RSS Feed with PHP, rss feed in blog', 'http://www.mostlikers.com/2015/06/generate-rss-feed-for-website-using-php.html');
INSERT INTO `demo_search` VALUES ('28', 'CodeIgniter Remove index.php in URL', 'In this post i want to discuses about how to remove CodeIgniter  index.php in URL. Previously i have posted CodeIgniter related topics. While i am creating new CodeIgniter project i have to set config file url configuration index.php and i feel my url path also not looking good. i have used below ht', 'http://www.mostlikers.com/2015/05/codeigniter-remove-indexphp-in-url.html');
INSERT INTO `demo_search` VALUES ('29', 'Login with facebook using codeigniter', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/login-with-facebook-using-codeigniter.html');
INSERT INTO `demo_search` VALUES ('30', 'Jquery image on click effects', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/jquery-image-on-click-effects.html');
INSERT INTO `demo_search` VALUES ('31', 'CodeIgniter My Model', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/codeigniter-my-model.html');
INSERT INTO `demo_search` VALUES ('32', 'Codeigniter load CSS and Javascript files', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/in-this-post-i-have-explan-about-how-we.html');
INSERT INTO `demo_search` VALUES ('33', 'Analyze and optimize your website with google PageSpeed tools', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/03/analyze-and-optimize-your-website-with.html');
INSERT INTO `demo_search` VALUES ('34', 'Convert html to codeigniter and basic steps of codeigniter', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/03/convert-html-to-codeigniter-and-basic.html');
INSERT INTO `demo_search` VALUES ('35', 'PDO basic insert,view,update,delete with php function', 'PDO basic insert,view,update,delete with php function. The mysql extension is deprecated and will be removed in the future use mysqli or PDO. mysqli based on object oriented better i would have suggested PDO. The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for access', 'http://www.mostlikers.com/2015/03/pdo-basic-insertviewupdatedelete-with.html');
INSERT INTO `demo_search` VALUES ('36', 'Ajax add,view and delete using mysqli', 'insert delete update data using ajax in php,insert update delete in php with source code\ninsert update delete in php in one form,insert update delete in php in one page\nmysqli update query example,insert update delete in php using oops,insert update delete in php on same page\nphp insert update delet', 'http://www.mostlikers.com/2015/03/ajax-addview-and-delete-using-mysqli.html');
INSERT INTO `demo_search` VALUES ('37', 'Sql Basic functions', 'insert delete update data using ajax in php,insert update delete in php with source code\ninsert update delete in php in one form,insert update delete in php in one page\nmysqli update query example,insert update delete in php using oops,insert update delete in php on same page\nphp insert update delet', 'http://www.mostlikers.com/2015/02/sql-basic-functions.html');
INSERT INTO `demo_search` VALUES ('38', 'Send email with html template using  php', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/send-email-with-html-template-using-php.html');
INSERT INTO `demo_search` VALUES ('39', 'Active and inactive users concept using php and Ajax', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/active-and-inactive-users-concept-using.html');
INSERT INTO `demo_search` VALUES ('40', 'Auto suggest username like gmail using php with ajax', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/auto-suggest-username-like-gmail-using.html');
INSERT INTO `demo_search` VALUES ('41', 'Google style app container drop down using bootstrap with jquery', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/google-style-app-container-drop-down.html');
INSERT INTO `demo_search` VALUES ('42', 'Share your website link to social media website (New)', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/01/share-your-website-link-to-social-media.html');
INSERT INTO `demo_search` VALUES ('43', 'Ajax PHP Login Page with bootstrap design', 'Ajax PHP Login Page with boostrap design concept. Simple Ajax Login form with jQuery and PHP, How make a login system using ajax without refreshing', 'http://www.mostlikers.com/2015/01/ajax-php-login-page-with-boostrap-design.html');
INSERT INTO `demo_search` VALUES ('44', 'Php contact form captcha code using Ajax', 'what is use of captcha, How to Create CAPTCHA Protection using PHP and AJAX,PHP Built-In Ajax CAPTCHA Validation Code Sample,Today i am going explain about Php contact form captcha code using Ajax concept. Why we use to captch in website, This protects your website for spammers and robots. Here i wa', 'http://www.mostlikers.com/2015/01/php-contact-form-captcha-code-using-ajax.html');
INSERT INTO `demo_search` VALUES ('45', 'Export html table data to csv file using JavaScript', 'Export html table data to csv file using JavaScript,Recently i have posted Import CSV File Data Into Database Using PHP article this concept based import excel sheet data into database.Similar like i have posted this topic, here i am using JavaScript for converting html table data into excel (CSV) d', 'http://www.mostlikers.com/2015/01/export-html-table-data-to-csv-file.html');
INSERT INTO `demo_search` VALUES ('46', 'Dynamically adding HTML form field using jQuery', 'Dynamically adding HTML form field using jQuery, Div generator jquery', 'http://www.mostlikers.com/2015/01/dynamically-adding-html-form-field.html');
INSERT INTO `demo_search` VALUES ('47', 'Show loading image while Page is loading using jQuery', 'Show loading image while Page is loading using jQuery, page loader script', 'http://www.mostlikers.com/2014/12/show-loading-image-while-page-is.html');
INSERT INTO `demo_search` VALUES ('48', 'Expiry date code in php', '$startTime = strtotime($puechese_date);\n    $endTime = strtotime($dateofreg1);\n    $timeDiff = abs($startTime-$endTime);\n    $numberDays = $timeDiff/86400;\n    $numberDays = intval($numberDays);', 'http://www.mostlikers.com/2014/08/expiry-date-code-in-php.html');
INSERT INTO `demo_search` VALUES ('49', 'First and Last Record in Mysql ', 'SELECT * FROM table_name ORDER BY column_id DESC;', 'http://www.mostlikers.com/2014/08/first-and-last-record-in-mysql.html');
INSERT INTO `demo_search` VALUES ('50', 'Get current date and time in PHP', 'Get your current date and time in php, set your location default time zone get your current time zone.\nmanually set the timezone by using date_default_timezone_set before the date() or time().', 'http://www.mostlikers.com/2014/07/get-current-date-and-time-in-php.html');
INSERT INTO `demo_search` VALUES ('51', 'PHP switch case Statement', 'Php value compare to multi value in the sense we use if else statement method that time we use lot of value comparison method  in if else statement method. 10 or 20 value comparison statement execute time take delay, that case use switch statement this multiple value check time and comparison method', 'http://www.mostlikers.com/2014/07/php-switch-case-statement.html');
INSERT INTO `demo_search` VALUES ('52', 'PHP user defind function', 'PHP user defind function reduce program code. create your own function pass the parameters value to check the conditions. PHP gives you option to pass your parameters inside a function. You can pass as many as parameters.', 'http://www.mostlikers.com/2014/07/php-user-defind-function.html');
INSERT INTO `demo_search` VALUES ('53', 'Find latitude and longitude with Google Maps', 'Google Maps is an application that allows users to find and search for locations. that Map to find the location based latitude and longitude coordinates. for any place Your search loction find on  latitude and longitude in google map.', 'http://www.mostlikers.com/2014/07/find-latitude-and-longitude-with-google.html');
INSERT INTO `demo_search` VALUES ('54', 'SQL BETWEEN Operator', 'Sql Between operator find the database in between two database values. this operator used between and not between data filtering database', 'http://www.mostlikers.com/2014/07/sql-between-operator.html');
INSERT INTO `demo_search` VALUES ('55', 'Rename file directory in php ', 'PHP rename() function changed old directory to new directory If new name exists, it will be overwritten. Sometime wrongly uploaded file images or folder that time use this function easy to rename the new directory or image name.', 'http://www.mostlikers.com/2014/07/rename-file-directory-in-php.html');
INSERT INTO `demo_search` VALUES ('56', 'HTML input file accept Attribute', 'PHP rename() function changed old directory to new directory If new name exists, it will be overwritten. Sometime wrongly uploaded file images or folder that time use this function easy to rename the new directory or image name.', 'http://www.mostlikers.com/2014/07/html-input-accept-attribute.html');
INSERT INTO `demo_search` VALUES ('57', 'Delete image from folder in php', 'Delete image from folder in php,Image Deleting From The Image Source Folder - PHP,How can I delete file from my uploads folder', 'http://www.mostlikers.com/2014/07/delete-image-from-folder-in-php.html');
INSERT INTO `demo_search` VALUES ('58', 'Facebook style photo comment system', 'Facebook style photo gallery comment, facebook style comment system php,Facebook Style Wall Posting and Comments System,Facebook-like comment system using AJAX, PHP', 'http://www.mostlikers.com/2014/07/facebook-style-photo-comment-system.html');
INSERT INTO `demo_search` VALUES ('59', 'How to Make a Simple Search Engine using PHP and MySQLi', 'How to Make a Simple Search Engine,How to Make a Simple Search Engine using PHP and MySQLi, search engine in php, google search box,search engin concept in php', 'http://www.mostlikers.com/2013/08/search-engine.html');
INSERT INTO `demo_search` VALUES ('60', 'phpmyadmin sql query builder', 'phpmyadmin sql query builder,  How to generate a create table script for an existing', 'http://www.mostlikers.com/2014/05/phpmyadmin-sql-query-builder.html');
INSERT INTO `demo_search` VALUES ('61', 'Facebook Style Drop Down Log out Menu', 'i have tried to facebook style drop down menu list. i used some few line simple jquery function. click down arrow drop down menu list display here i use div show and hide based on jquery code. i make some own css to designed the drop down menu.', 'http://www.mostlikers.com/2013/05/facebook-style-drop-down-log-out-menu.html');
INSERT INTO `demo_search` VALUES ('62', 'Facebook style login system using Mysqli and CSS', 'Today i posted on facebook style login form using PHP and CSS 3. facebook login form username accept on 3 types email id, Phone number, facebook email id this are 3 ways to login to facebook if user can enter wrong password  search to the databasse to fetch the matching  username to display image in', 'http://www.mostlikers.com/2014/03/facebook-login.html');
INSERT INTO `demo_search` VALUES ('63', 'PHP age calculator script', 'PHP age calculator script ,Find your age using PHP age calculator script. This code easy find your age and calculate total no.of days . try this simple coding make your own age calculator.', 'http://www.mostlikers.com/2014/03/php-age-calculator-script.html');
INSERT INTO `demo_search` VALUES ('64', 'Multiple image upload concept using php & mysql', 'In this post i have explained How to upload multiple images in database. upload multiple images in php mysql, multiple image upload in php with database, multiple image upload in php code with databases,multiple file upload in php mysql database, upload multiple images in php mysql demo,how to uploa', 'http://www.mostlikers.com/2014/03/multiple-image-upload-concept-using-php.html');
INSERT INTO `demo_search` VALUES ('65', 'PHP implode and explode concept', 'PHP implode and explode concept', 'http://www.mostlikers.com/2014/03/php-implode-and-explode-concept.html');
INSERT INTO `demo_search` VALUES ('66', 'Simple Human verification code in php ', 'Simple Human verification code', 'http://www.mostlikers.com/2014/02/simple-human-verification-code-in-php.html');
INSERT INTO `demo_search` VALUES ('67', 'PDO Form value inserting into Database ', 'Form for inserting using php and pdo', 'http://www.mostlikers.com/2014/02/pdo-inser-delete.html');
INSERT INTO `demo_search` VALUES ('68', 'PDO tutorials ', 'mysqli to PDO connection, Pdo (Php data object)', 'http://www.mostlikers.com/2014/02/pdo-tutorials.html');
INSERT INTO `demo_search` VALUES ('69', 'How to make a website in Photoshop', 'How to make a website in Photoshop, PSD to Html', 'http://www.mostlikers.com/2014/02/how-to-make-website-in-photoshop.html');
INSERT INTO `demo_search` VALUES ('70', ' Find all your computer information', 'Find your all system information, dxdiag', 'http://www.mostlikers.com/2014/02/find-all-your-computer-information.html');
INSERT INTO `demo_search` VALUES ('71', 'custom search engine', 'Google custom search engine', 'http://www.mostlikers.com/2014/02/custom-search-engine.html');
INSERT INTO `demo_search` VALUES ('72', 'change the html 5 form validation defult error message', 'change the html 5 form validation defult error message, This post make on custom to change the HTML 5 Form validation error message. previously Error message Display on default so now you change custom message on input validation field.', 'http://www.mostlikers.com/2014/02/change-html5-msgs.html');
INSERT INTO `demo_search` VALUES ('73', 'Dynamic menu with sub-menu using php and mysql', 'Dynamic menu with sub-menu using php and mysql', 'http://www.mostlikers.com/2014/02/php-menu-submenu.html');
INSERT INTO `demo_search` VALUES ('74', 'PHP Email and mobile number validation script', 'In this post i have explain about how to validate the email address and mobile number in server side. Usually we use form validation scripts. It will work only client side,  But we need check the form values in server side.', 'http://www.mostlikers.com/2014/02/php-email-and-mobile-number-validation.html');
INSERT INTO `demo_search` VALUES ('75', 'Newsletter subscription in php', 'Newsletter subscription in php, Subscribe to Newsletters,  Group mail', 'http://www.mostlikers.com/2013/09/News-lettet.html');
INSERT INTO `demo_search` VALUES ('76', 'Gmail style chat user display online and offline concept ', 'Gmail chat, offline and online concept, Gmail style chat user display online and offline concept', 'http://www.mostlikers.com/2013/09/Gmail-chat.html');
INSERT INTO `demo_search` VALUES ('77', 'Simple comments form using in php', 'Creating simple PHP contact form, Comments form in php, Creating a simple feedback form using PHP, How to Create a Contact Form, Simple PHP contact form Script', 'http://www.mostlikers.com/2013/08/comments-form.html');
INSERT INTO `demo_search` VALUES ('78', 'How to create Dynamic Menu using php and mysqli', 'Dynamic menu, Mysqli,Css menu, How to make css menu in php, Admin panel menu,WordPress menu', 'http://www.mostlikers.com/2013/08/dynamic-menu.html');
INSERT INTO `demo_search` VALUES ('79', 'Email subscription concept using php and mysqli ', 'Email subscription concept using php and mysqli , how to send email, News letter', 'http://www.mostlikers.com/2013/08/Email-subscription.html');
INSERT INTO `demo_search` VALUES ('80', 'Random Number generator in php ', 'This coding using on mobile number verification codes , captcha , forget password, comments verification, its such as some authenticate to check user.', 'http://www.mostlikers.com/2013/08/random-number-generator-in-php.html');
INSERT INTO `demo_search` VALUES ('81', 'Send Email concept using in php', 'Email send concept using in php, feedback form, form post value in email', 'http://www.mostlikers.com/2013/08/Email-concept-php.html');
INSERT INTO `demo_search` VALUES ('82', 'Twitter style compose box', 'css style box, Twitter style box, compose box', 'http://www.mostlikers.com/2013/08/Twiter-input-box.html');
INSERT INTO `demo_search` VALUES ('83', 'Mysqli using in php', 'Mysqli, How to connect database in mysqli, mysqli using in php, php in mysqli, Mysqli_real_escape,', 'http://www.mostlikers.com/2013/07/mysqli-php.html');
INSERT INTO `demo_search` VALUES ('84', 'php simple login script', 'php simple login script, login script, how How to Create Login Page in PHP/MySQL, Create User Login in PHP', 'http://www.mostlikers.com/2013/07/Login-php.html');
INSERT INTO `demo_search` VALUES ('85', 'pagination concept in php', 'This post concept based on pagination its simplify to view count the number of the database value make paging method simple to access first last database values . I make the company employee status using pagination concept just try and download this coding also include sql file', 'http://www.mostlikers.com/2013/07/pagination-concept-in-php.html');
INSERT INTO `demo_search` VALUES ('86', 'Password reset concept in php', 'This concept based on login user reset forget password. Sometime use forget the login password  that time user send  request through  admin .the admin generate some authentication code send email on request user email id . The user can get the authentication code and again login to provide new passw', 'http://www.mostlikers.com/2013/07/password-reset-concept-in-php.html');
INSERT INTO `demo_search` VALUES ('87', 'change password in php mysql code', 'Change password is an important feature in password protected website. Using this feature user have the option to change the current password to new password. In this post i have explain how to change the old password using php and mysqli.', 'http://www.mostlikers.com/2013/07/change-password-in-php-mysql-code.html');
INSERT INTO `demo_search` VALUES ('88', 'Password Encryption function in php', 'This article is about how to password encrypt method . For an overview of cryptography technology encryption function password plain-text convert cipher-text this is use of hackers cannot read our given password. the password convert to md5 algorithm this usually needs a key-generation algorithm to ', 'http://www.mostlikers.com/2013/07/password-encryption.html');
INSERT INTO `demo_search` VALUES ('89', 'Make simple page counter using php and mysql', 'A hit counter or a page counter counts the number of people that visit your page. If you have created a new website you might be interested how many people are visiting. so try this simple method count how many people visit on your website. this coding make MySQL update query using in php.', 'http://www.mostlikers.com/2013/07/page-count-php.html');
INSERT INTO `demo_search` VALUES ('90', ' To check whether an email id exists or not in database using PHP', 'email check in php', 'http://www.mostlikers.com/2013/07/to-check-whether-email-id-exists-or-not.html');
INSERT INTO `demo_search` VALUES ('91', 'Array / object using fetch query in php oops concept', 'Array / object using fetch query in php oops concept. \nObject Oriented Programming, or OPP  refers to the method of programming that invokes the use of classes to organize the data and structure of an application. object function code easy to fetch in database most of the programmer using oops princ', 'http://www.mostlikers.com/2013/07/array-object-using-fetch-query-in-php.html');
INSERT INTO `demo_search` VALUES ('92', 'Post Database values one table to another table ', 'Post Database values one table to another table', 'http://www.mostlikers.com/2013/06/post-database-values-one-table-to.html');
INSERT INTO `demo_search` VALUES ('93', 'Login and Signup tab using jquery', 'Login and Signup form tab using jquery', 'http://www.mostlikers.com/2013/06/login-and-signup-tab-using-jquery.html');
INSERT INTO `demo_search` VALUES ('94', 'Image Zoom In and Zoom Out concept', 'Image Zoom In and Zoom Out concept', 'http://www.mostlikers.com/2013/06/image-zoom-in-and-zoom-out-concept.html');
INSERT INTO `demo_search` VALUES ('95', 'Multiple Values selected of select box ', 'Multiple Values selected of select box', 'http://www.mostlikers.com/2013/06/multiple-values-selected-of-select-box.html');
INSERT INTO `demo_search` VALUES ('96', 'search concept using html5', 'This post make on simple search concept making list on text box like Google search. store the values in option box <data list> tag this data list id  in search box. used to display a repeated list of items that are bound to the control.', 'http://www.mostlikers.com/2013/06/search-concept-using-html5.html');
INSERT INTO `demo_search` VALUES ('97', 'Html5 form validation', 'HTML5 validations using attributes like pattern, required, autofocus on the input field type text, tel, email, search, password, datetime, color, range.', 'http://www.mostlikers.com/2013/06/html5-form-validation.html');
INSERT INTO `demo_search` VALUES ('98', 'Typing animation text using Javascript', 'Typing animation text using Javascript', 'http://www.mostlikers.com/2013/06/News-Text.html');
INSERT INTO `demo_search` VALUES ('99', 'select box disabled and pass the value concept', 'select box disabled and pass the value concept', 'http://www.mostlikers.com/2013/05/select-box-disabled-and-pass-value.html');
INSERT INTO `demo_search` VALUES ('100', 'Html 5 Mobile number validation', 'Html5 Mobile number validation, html5 mobile number validation,mobile number validation in html5,10 digit mobile number validation in html5,html mobile number validation,pattern for mobile number validation in html5,pattern=\"[7-9]{1}[0-9]{9}\"', 'http://www.mostlikers.com/2013/05/html-5-mobile-number-validation.html');
INSERT INTO `demo_search` VALUES ('101', 'form action value move another form in php', 'form action value move another form in php', 'http://www.mostlikers.com/2013/05/form-action-value-move-another-form-in.html');
INSERT INTO `demo_search` VALUES ('102', 'Css style Tab concept using Radio button', 'Css style Tab concept using Radio button', 'http://www.mostlikers.com/2013/05/css-style-tab-concept-using-radio-button.html');
INSERT INTO `demo_search` VALUES ('103', 'Hidden username mobile number using sub string Method', 'Hidden username mobile number using sub string Method', 'http://www.mostlikers.com/2013/05/hidden-username-mobile-number-using-sub.html');
INSERT INTO `demo_search` VALUES ('104', 'How to show web browser saved password ', 'This is one new step hack trick normally most of the user can saved the login password in our browser they will not remember about the saved password. This notes help to how to show our saved password on our browser.', 'http://www.mostlikers.com/2013/05/how-to-show-web-browser-saved-password.html');
INSERT INTO `demo_search` VALUES ('105', 'Share links to social network sites with Yoursite', 'Share my Web page and url Directly link in Social media networks, social media  icons,', 'http://www.mostlikers.com/2013/05/share-your-web-page-and-url-directly.html');
INSERT INTO `demo_search` VALUES ('106', 'javascript check retype password', 'Password Recheck script just call the values in get id to check the password matching or wrong. make this get password and retype password values simple method watch also have live demo', 'http://www.mostlikers.com/2013/05/recheck-password-using-javascript.html');
INSERT INTO `demo_search` VALUES ('107', 'Style Login Light Box coding', 'Style Login Light Box coding', 'http://www.mostlikers.com/2013/05/style-login-light-box.html');
INSERT INTO `demo_search` VALUES ('108', 'CSS style input box design coding', 'CSS style input box design coding,css text box design code\ntext box design in css examples\ncss text box style.This topic we discuss about CSS3 code. CSS3 they release lot of style code, here i am using text box design. CSS3 induced cursor focus script and hover change style also. Just follow this no', 'http://www.mostlikers.com/2013/04/css-input-box-design-style-coding.html');
INSERT INTO `demo_search` VALUES ('109', 'website Popup Ads script', 'This Script have simply make to  Popup windows Ads through your website. just try this coding put on <head> tag after refresh page the pop windows automatically  open your website.', 'http://www.mostlikers.com/2013/04/website-popup-ads-script.html');
INSERT INTO `demo_search` VALUES ('110', 'Download flash files from the website through an browser', 'Download flash files from the website through an browser', 'http://www.mostlikers.com/2013/04/download-flash-files-from-website.html');
INSERT INTO `demo_search` VALUES ('111', 'Html 5 Validate in Text box', 'This required code use text box email, name , empty column, just give the name mention name=\"email\"', 'http://www.mostlikers.com/2013/04/html-5-validate-in-text-box-coding.html');
INSERT INTO `demo_search` VALUES ('112', 'Div Split coding ', 'This method Easy way Split Div basically Div split using only Grid but this coding simple method try this code.', 'http://www.mostlikers.com/2013/04/div-split-coding.html');
INSERT INTO `demo_search` VALUES ('113', 'Show And Hide Concept in Radio Button ', 'Show hide concept based on similar div hide and show concept but choose the radio button div will be display function make on jquery. radio button value name call on div just choose radio button value increased div action show/ hide. jquery function called input names to changes the divs values.', 'http://www.mostlikers.com/2013/04/show-and-hide-concept-in-radio-button.html');
INSERT INTO `demo_search` VALUES ('114', 'How to  hack windows 7 password', 'How to  hack windows 7 password, how,Hack Windows 7 / 8 Password Without Software,windows 7 password reset,windows 7 password hack cmd', 'http://www.mostlikers.com/2013/03/how-to-hack-windows-7-password.html');
INSERT INTO `demo_search` VALUES ('115', 'Hover Change the image', 'This is make simple tricks about css concept based on multiple image choose on css just positions will be changed the image location most of the website designers use this method all small images to combine single image and use image positions. just try this below css code also have live demos', 'http://www.mostlikers.com/2013/01/onclick-change-photo.html');
INSERT INTO `demo_search` VALUES ('116', 'On-click Select Box Link using Javascript', 'On-click Select Box Link using Javascript give link location..', 'http://www.mostlikers.com/2013/01/select-box-link-without-ajax-javascript.html');
INSERT INTO `demo_search` VALUES ('117', 'Select All Check box java Script', 'Select All Check box java Script', 'http://www.mostlikers.com/2013/01/select-all-check-box-in-javascript.html');
INSERT INTO `demo_search` VALUES ('118', 'Add multiple email accounts to your Gmail account using SMTP Configuration', 'how to configure your multiple emails accounts to google gmail account, Gmail account has more features, here im going to tell you the one, which is more useful to everyone. here im going to configure how to add multiple email id in single email account. if your adding like this, you can send email ', 'http://www.2my4edge.com/2016/02/add-multiple-email-accounts-to-your_3.html');
INSERT INTO `demo_search` VALUES ('119', 'Create ZIP format and download whole folder or file using php', 'create or make zip file using php, by using php we can make .zip format, here we are going make whole folder or particular file as in zip format. let me show the php code.', 'http://www.2my4edge.com/2016/01/create-zip-format-whole-folder-or-file.html');
INSERT INTO `demo_search` VALUES ('120', 'When we click on mobile number on webpage, Call through skype or show in mobile dialer screen to cal', 'Usually in webpage we are displaying mobile number for contact us, When we are giving that number we are just simply giving only number, her ei have solution for that, When we are clicking on that number it will show mobile dialer screen to dial directly in mobile or if you want to call in skype, yo', 'http://www.2my4edge.com/2015/12/when-click-on-mobile-number-on-webpage.html');
INSERT INTO `demo_search` VALUES ('121', 'Complete basic insert, view, edit, delete and update in Codeigniter', 'Codeigniter is one of the popular framework in php, here we are going to learn about complete basic functionality of codeignter like insert, view, edit, delete and update. This will help all the codeignter workers. with this functionality they manage codeignter and easy learn the functionality. Let ', 'http://www.2my4edge.com/2015/12/complete-basic-insert-view-edit-delete.html');
INSERT INTO `demo_search` VALUES ('122', 'Show menu bar in scroll up, hide in scroll down using Javascript with Bootstrap', 'Now a days most of the sites are using this kind of nav bar,  like when we are scrolling down hiding the menu nav bar, When we are scrolling up showing the menu nav bar, actually it is really nice one. here we are going to create like that kind of functionality only using jquery javascript and with ', 'http://www.2my4edge.com/2015/12/show-menu-bar-in-scroll-up-hide-in.html');
INSERT INTO `demo_search` VALUES ('123', 'Save the particular div in PDF format onclick using Jquery', 'Save or download the particular div as in the PDF format onclick using jsPDF jquery file. This is very simple one. i already showed you one tutorial to save and print the whole web page. here for the particular div. let see the code. using jquery', 'http://www.2my4edge.com/2015/11/save-particular-div-in-pdf-format.html');
INSERT INTO `demo_search` VALUES ('124', 'Unlimited repeating data loading scroll using Jquery', 'loading unlimited data while scrolling down to the page. im going to use iscroll.js to make this kind of function. most of the site are using this kind of script to make the data lengthy. this make help to stay people in the page. like that in the load-data.html also we are loading the same page ins', 'http://www.2my4edge.com/2015/11/unlimited-repeating-data-loading-scroll.html');
INSERT INTO `demo_search` VALUES ('125', 'Auto complete Google map in form input type using geocomplete Jquery', 'interesting thing regarding web development. now a days most of the website need google map location while we are entering location name, for that we have one solution. When we are entering the location name in input type you will get map for that particular location by using Jquery', 'http://www.2my4edge.com/2015/10/auto-complete-google-map-in-form-input.html');
INSERT INTO `demo_search` VALUES ('126', 'Multiple image upload preview before image uploading to the server using Jquery', 'useful tip for multiple image uploading preview, when ever we are uploading image we need instant image preview, for that we are going to use html5 filereader. and here we are going to use the jquery for instant image preview. let see the simple code.', 'http://www.2my4edge.com/2015/10/multiple-image-upload-preview-before.html');
INSERT INTO `demo_search` VALUES ('127', 'Usage of Animate.css. One of the finest CSS library for animations', 'This is one the finest CSS library file to make you web page with attractive animated designs. it is cross browser library css file. it very easy to use in web page. it contains more Effects. We can use this library in our project make the page very neat and attractive. let see the details about the', 'http://www.2my4edge.com/2015/07/usage-of-animatecss-one-of-finest-css.html');
INSERT INTO `demo_search` VALUES ('128', 'Remove repeated entries in select option dropdown using Javascript', 'Avoid duplicate entries in selection option dropdown using javascript, this is mostly used in php, while fetching multiple data in dropdown select, that time we need to avoid duplicate entries, that time we need this script, or else we have to use group by query, here we are using that without mysql', 'http://www.2my4edge.com/2015/06/remove-repeated-entries-in-select.html');
INSERT INTO `demo_search` VALUES ('129', 'Very flexible Hover css effects using Hover.css', 'I was used this css to my recent project, This is really nice and time consumes for css hover effects. Here it is very simple we just have to give to class name in the class and it will automatically takes that realted effect. this is very simple for hover effects. let me tell the details about the ', 'http://www.2my4edge.com/2015/05/very-flexible-hover-css-effects-using.html');
INSERT INTO `demo_search` VALUES ('130', 'Simple textarea text counter using bootstrap', 'Twitter style textarea character counter using Bootstrap and javascript, here is the one of the simple method use the textarea counter, this is very useful to limited character field in forms. after a long time this post is about bootstrap. It is very simple one. text counter with validation until y', 'http://www.2my4edge.com/2015/05/simple-textarea-text-counter-using.html');
INSERT INTO `demo_search` VALUES ('131', 'Allow html tags and files only to particular page URL using php', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/04/allow-html-tags-and-files-only-to-particular-url.html');
INSERT INTO `demo_search` VALUES ('132', 'Simple blinking effect using css3 and Jquery', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/04/simple-blinking-effect-using-css3-and.html');
INSERT INTO `demo_search` VALUES ('133', 'Connect website through LAN without internet using WAMP server ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/connect-website-through-lan-without.html');
INSERT INTO `demo_search` VALUES ('134', 'Responsive back to top using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/responsive-back-to-top-using-bootstrap.html');
INSERT INTO `demo_search` VALUES ('135', 'Animated background Color changer using Jquery UI', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/animated-background-color-changer-using.html');
INSERT INTO `demo_search` VALUES ('136', 'Google Doodles style animation using Jquery', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/google-doodles-style-animation-using.html');
INSERT INTO `demo_search` VALUES ('137', 'Set custom username url for your facebook account', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/set-custom-username-url-for-your.html');
INSERT INTO `demo_search` VALUES ('138', 'Peeling style on top corner of browser using peelback jquery ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/peeling-style-on-top-corner-of-browser.html');
INSERT INTO `demo_search` VALUES ('139', 'Get Google alerts to your mail ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/get-google-alerts-to-your-mail.html');
INSERT INTO `demo_search` VALUES ('140', 'Confirmation alert on before closing browser tab using Javascript ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/confirmation-alert-on-before-closing.html');
INSERT INTO `demo_search` VALUES ('141', 'Responsive navbar menu using bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/responsive-navbar-menu-using-bootstrap.html');
INSERT INTO `demo_search` VALUES ('142', 'Connect Whats app to computer through Android phone ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/connect-whats-app-to-computer-through.html');
INSERT INTO `demo_search` VALUES ('143', 'How to add custom google search engine to our websites', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/how-to-add-custom-google-search-engine.html');
INSERT INTO `demo_search` VALUES ('144', 'How to add Google translator to our website', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/how-to-add-google-translator-to-our.html');
INSERT INTO `demo_search` VALUES ('145', 'Live HTML Compiler using PHP like W3schools tryit editor', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/live-html-compiler-using-php-like.html');
INSERT INTO `demo_search` VALUES ('146', 'How to create a form in Google Drive for Request and Response', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/how-to-create-form-in-google-drive-for.html');
INSERT INTO `demo_search` VALUES ('147', 'Simple updated dynamic datatable using Bootstrap (NEW)', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/simple-updated-dynamic-datatable-using.html');
INSERT INTO `demo_search` VALUES ('148', 'Responsive Full screen slider using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/responsive-full-screen-slider-using.html');
INSERT INTO `demo_search` VALUES ('149', 'Simple voting concept based on ip address using php with Ajax', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-voting-concept-based-on-ip.html');
INSERT INTO `demo_search` VALUES ('150', 'Simple Responsive Quote style Carousel Slider', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-responsive-quote-style-carousel.html');
INSERT INTO `demo_search` VALUES ('151', 'Simple dropdown menu with Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-dropdown-menu-with-bootstrap.html');
INSERT INTO `demo_search` VALUES ('152', 'Step by step tab style form validation Wizard using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/step-by-step-tab-style-form-validation.html');
INSERT INTO `demo_search` VALUES ('153', 'Subscribe pop up alert box on scroll down and onload using subscribe better js', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/subscribe-pop-up-alert-box-on-scroll.html');
INSERT INTO `demo_search` VALUES ('154', 'Fetch two different table data in single page using PHP and MySql', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/fetch-two-different-table-data-in.html');
INSERT INTO `demo_search` VALUES ('155', 'Basic insert, view, edit, delete and update using PHP and Mysql', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/basic-insert-view-edit-delete-and.html');
INSERT INTO `demo_search` VALUES ('156', 'PHP Email template for contact user and admin', 'Template based Email sending,HTML Email template in PHP,PHP Mailer with HTML template and sending variables,Send email with a template using php,Free Email Templates for HTML Newsletter Campaign', 'http://www.2my4edge.com/2014/11/php-email-template-for-contact-user-and.html');
INSERT INTO `demo_search` VALUES ('157', 'Dynamic data binding using angularjs', 'Dynamic data binding in angularjs,data binding in angularjs example,How to display Database data using Angular JS', 'http://www.2my4edge.com/2014/11/dynamic-data-binding-using-angularjs.html');
INSERT INTO `demo_search` VALUES ('158', 'Gird and List style view onclick by using Jquery', 'how to do the grid/list style view mode onclick by using javascript and jquery. this is very simple one. but in this post you have to concentrate on girds in css. but here i done only one gird for my sample. making grid to list and list to gird by clicking the icon.', 'http://www.2my4edge.com/2014/07/gird-and-list-style-view-onclick-by.html');
INSERT INTO `demo_search` VALUES ('159', 'Set current time using javascript for websites', 'Set current time using javascritpt, most of the websites need time to display time in their website, for that, here we are going to set simple javascript digital timer in our website. it is one of the simple one. let see the coding.', 'http://www.2my4edge.com/2014/07/set-current-time-using-javascript-for.html');
INSERT INTO `demo_search` VALUES ('160', 'Portfolio Design and sorting with Animation Effect', 'how to make simple and attractive portfolio design and sorting with Animation effects. In this post, we are going to use Jquery and CSS to make this function. this is one of the simple way. let see the coding with details.', 'http://www.2my4edge.com/2014/06/portfolio-design-and-sorting-with.html');
INSERT INTO `demo_search` VALUES ('161', 'Send an Email by using PHPmailer ', 'how to send a Email using phpmailer, it is a simple one. here we have class.phpmailer.php file, that make send mail operation very simple and calm. here we just have to do some simple steps to do this method. check this by the live demo. this phpmailer class file makes to attach a file with a mail. ', 'http://www.2my4edge.com/2014/05/send-email-by-using-phpmailer.html');
INSERT INTO `demo_search` VALUES ('162', 'Onload Fancy box Using Jquery', 'Onload Fancy box using Jquery, yes it may harmful to web page. it is like a popup box. popup box is one of the most irritating thing in web designing and web development, but most of them need this script for their own, personal and e-commerce site. jquery, popup window, onload,', 'http://www.2my4edge.com/2014/01/onload-fancy-box-using-jquery.html');
INSERT INTO `demo_search` VALUES ('163', 'Accordion toggle using Jquery with Bootstrap', 'Accordion toggle is new style of toggle, this accordion is mostly using for FAQ and design features, so this kind of toggle is make the web page as very attractive, and here we are going to use this with Bootstrap plugin. let see the coding.', 'http://www.2my4edge.com/2013/12/accordion-toggle-using-jquery-with.html');
INSERT INTO `demo_search` VALUES ('164', 'Go back to previous and next page onClick in browser using Javascript', 'Sometimes this script may very useful to every web designers, go back to previous or next page in browser using javascript. here we are going to see how make, go back to previous and next page onclick in browser using javascript. let see the simple code.', 'http://www.2my4edge.com/2013/11/go-back-to-previous-and-next-page.html');
INSERT INTO `demo_search` VALUES ('165', 'Dynamic Data Table using DataTable Jquery', 'Dynamic Data table using dataTable Query is very simple and useful plugin technique, here we are going to see about that DataTable functions and features. this Dynamic data table has more feature within it, such as Search, Sorting, Pagination, field count, views per page. Those all features contains', 'http://www.2my4edge.com/2013/11/dynamic-data-table-using-datatable.html');
INSERT INTO `demo_search` VALUES ('166', 'Image zoom on hover using css3', 'Image zoom on hover using css3, this is actually very simple and useful tip to all web designers. here we have already discussed more tutorials about designing and here one more thing. it may useful to make portfolio and other designing purpose. let see the details about that.', 'http://www.2my4edge.com/2013/10/image-zoom-on-hover-using-css3.html');
INSERT INTO `demo_search` VALUES ('167', 'Resize the font using Query', 'Resize the font size using JQuery is very simple one, Onclick how to make font size increase and decrease using Jquery. here we are going to see thing about designing. just make simple thing, it is also like magnifying the text onclick. usually we are using shortcut key CTRL + + or CTRL + - to zoom ', 'http://www.2my4edge.com/2013/08/resize-font-using-query.html');
INSERT INTO `demo_search` VALUES ('168', 'Get support with foreign and regional language in php and mysql', 'Usually you may know  or donâ€™t know, in a PhpMyadmin default setting does not support the foreign and regional language. It default supporting language is English. Iâ€™m from India, so here most of them using so many languages. So today Iâ€™m going to show you that how to insert the foreign and re', 'http://www.2my4edge.com/2013/08/get-support-with-foreign-and-regional.html');
INSERT INTO `demo_search` VALUES ('169', 'Ajax delete with PHP and MySql', 'Ajax delete with confirm box, here we are going to see about how to delete the data without refreshing page and with confirmation box, and this is what most of them searching, so today going to show you that, how to make this alert style box delete with ajax and php, mysql.', 'http://www.2my4edge.com/2013/08/ajax-delete-with-php-and-mysql.html');
INSERT INTO `demo_search` VALUES ('170', 'How to create an animated .jpg image', 'Here Iâ€™m going to show you that, how to make animated image with the extension of .jpg. we all know that, the .jpg file (joint photography experts group) does not support animation and all. But here we have some tricks to make it.', 'http://www.2my4edge.com/2013/08/how-to-create-animated-jpg-image.html');
INSERT INTO `demo_search` VALUES ('171', 'Animated scroll to top by using Jquery', 'Animated Scroll to top by using JQuery is one the simple technique, here we going to see that. how i made this with simple coding. this back to top or scroll to top is mostly used for the purpose of going down to the page by scrolling. and have go back to the top of the page. so for we are using thi', 'http://www.2my4edge.com/2013/08/animated-scroll-to-top-by-using-jquery.html');
INSERT INTO `demo_search` VALUES ('172', 'Rotate image on hover using CSS3', 'Rotate image on image hover using CSS3. now in CSS3 in most flexible to make more animations and more design by using CSS coding. similarly here we are going to see how to make animated rotating image on image hover by using CSS transform code. by using this transform we can rotate the image. and al', 'http://www.2my4edge.com/2013/08/rotate-image-on-hover-using-css3.html');
INSERT INTO `demo_search` VALUES ('173', 'Autocomplete search using php, mysql and ajax', 'We know what is autocomplete in input type, that is make some predefined entered texts come under the input type box, while focusing on the input type, similarly we are searching some content from mysql database, this actually facebook style search concept to suggest some data for select before we g', 'http://www.2my4edge.com/2013/08/autocomplete-search-using-php-mysql-and.html');
INSERT INTO `demo_search` VALUES ('174', 'Enable right click in right click disabled web pages by disable javascript in browser', 'Most of the site are disabled the right click button for the security purpose. But what we do is try to hack this site, as I said in the previous tutorial right click disabled is not much secured, so we have to use some tricks to enable right click in the right click disable pages. So let see.  This', 'http://www.2my4edge.com/2013/07/enable-right-click-in-right-click.html');
INSERT INTO `demo_search` VALUES ('175', 'Disable right click and protect your content from coping using Java script', 'Disable right click button in mouse using javascript, this concept is mostly used for protect your content from coping your copy right content and all, most of the hacker trying to copy your content and try to reveal your secret of your web page, thatâ€™s why this script is using for protect. If we ', 'http://www.2my4edge.com/2013/07/disable-right-click-and-protect-your.html');
INSERT INTO `demo_search` VALUES ('176', 'Most popular posts in 2my4edge', 'most popular post in 2my4edge.com, and all kind of tutorials and demos with examples what i done in 2my4edge. focused on php, javascript, mysql, html, css, css3, html5, jquery, plugins, .htaccess, style, design. and more.', 'http://www.2my4edge.com/2013/07/most-popular-posts-in-2my4edge.html');
INSERT INTO `demo_search` VALUES ('177', 'Export the MySQL database table as CSV format using PHP', 'Export the database as in the format of CSV to open it in the Microsft office (MS)-Excel. Most the social media sites and E-commerce site and more sites or this kind of database export coding for without going to admin panel, just in one click export the database table as in the format of CSV to ope', 'http://www.2my4edge.com/2013/07/export-mysql-database-table-as-csv.html');
INSERT INTO `demo_search` VALUES ('178', 'Create custom file chosen input type using Css and Jquery', 'Usually we know how to give input type file for upload any kind of file in the database, for that we are using form, and in that form we have to give input type=\"file\" for file upload, usually while we are calling the input type as like the above, that will change for each browser, for that and make', 'http://www.2my4edge.com/2013/07/create-custom-file-chosen-input-type.html');
INSERT INTO `demo_search` VALUES ('179', 'Change text & background color while selecting text using CSS3', 'Change text color and background color while you are selecting text for copy or any other purpose, make your web page impressive with extra design using this css selection text color change, getting bored of usual selecting color on your web page, so try this code. While selecting content of any web', 'http://www.2my4edge.com/2013/07/change-text-background-color-while.html');
INSERT INTO `demo_search` VALUES ('180', 'Marquee style in different manner with PHP and MySql', 'Marquee style scroll using in different manner, such as top to bottom, bottom to top, left to right, right to left, and scroll speed control, like all those details we are going to discuss here. usually all web developer must this tag that is marquee tag, which this marquee tag is used for the purpo', 'http://www.2my4edge.com/2013/07/marquee-tag-style-in-different-manner.html');
INSERT INTO `demo_search` VALUES ('181', 'My Demos page design details with all my tutorials', 'php, html, ajax, javascript, jquery, all web development process, web solution. my blogging expreiance, initial stage of my blog, demo pages, every thing comes here under the page demo, check all your needs.', 'http://www.2my4edge.com/2013/07/my-demos-page-design-details-and-all-my.html');
INSERT INTO `demo_search` VALUES ('182', 'Simple Login logout system using php', 'Login and logout system is the most important thing for the user management, session management is one important thing for manage the user for the whole time of login time. for that we have to use session for this. it should have 5 files for this. we have to fetch the same value for the user and che', 'http://www.2my4edge.com/2013/07/simple-login-logout-system-using-php.html');
INSERT INTO `demo_search` VALUES ('183', 'Username live availability Check using php and Ajax', 'Username live availability is one of the most important thing the database field, why because mostly we have to different kind of username and unique name for all users. then only we can identify the individual user, so for here we are going to check the database field for already existing username ', 'http://www.2my4edge.com/2013/07/username-live-availability-check-using.html');
INSERT INTO `demo_search` VALUES ('184', 'How to create custom 404 error page using .htaccess', 'Most of the web pages show the error like 404 page error.  So here we have solution to make the custom web page for that 404 page error by using .HTACCESS.  This 404 error make your website uneasy. So here we are using the HTACCESS file for that. As we know already we discussed here about how to mak', 'http://www.2my4edge.com/2013/07/how-to-create-custom-404-error-page.html');
INSERT INTO `demo_search` VALUES ('185', 'Image Zoommer like E-commerce site using multizoom.js', 'Usually we need this kind of image zoom is using in E-commerce site, Why because, they want to show their product with some extra quality, thatâ€™s why they are using this image zoom on their product, here we are going to see how the image zoom get works.', 'http://www.2my4edge.com/2013/07/image-zoommer-like-e-commerce-site.html');
INSERT INTO `demo_search` VALUES ('186', 'Facebook style Scroll bar using Jquery', 'Most of them eager to know about facebook and itâ€™s functionality, so here we just know about facebook style scroll bar, how the scroll bar is seems in the facebook, the black color scroll bar and it presence when we hover the part where the scroll is presence, similar like the same style the scrol', 'http://www.2my4edge.com/2013/06/facebook-style-scroll-bar-using-jquery.html');
INSERT INTO `demo_search` VALUES ('187', 'Change background image while page refresh using Javascript', 'Are you getting bore of the same background image on your web page, no worries. For each refresh/reload of your web page, change new and new background images using javascript. It is very simple concept by using javascript. This page background change is make is your web page more impressive and not', 'http://www.2my4edge.com/2013/06/change-background-image-while-page.html');
INSERT INTO `demo_search` VALUES ('188', 'Browser full screen API using Query', 'Full screen mode of browser, usually for this full screen mode we just press button f11 key, here we are going to see that in coding using fullscreen Jquery. By the help of this coding when we press the location the browser will be as full screen mode, in most of the social media network sites using', 'http://www.2my4edge.com/2013/06/browser-full-screen-api-using-query.html');
INSERT INTO `demo_search` VALUES ('189', 'Facebook Style Textarea Auto Grow Using JQuery Plugin and Css', 'Usually textarea is one of the form input type, it is identified by rows and cols, while using Rows and Cols the textarea will be comes like scrolled type for that we are going to disable the scroll bar and grow the textarea.\n\nFor that we are using Textarea autogrow plugin to expand the textarea and', 'http://www.2my4edge.com/2013/06/facebook-style-textarea-auto-grow-using.html');
INSERT INTO `demo_search` VALUES ('190', 'Print or Save the Web page as .PDF  Using Java Script', 'Save the web page as .PDF format or directly print the page using printer, we have to connect the printer through the computer and then choose the Designation where and what it should have to do the function, whether print or save the page.', 'http://www.2my4edge.com/2013/06/print-or-save-web-page-as-pdf-using.html');
INSERT INTO `demo_search` VALUES ('191', '.htaccess uses and redirect www to non-www and non-www to www', 'Initially I donâ€™t the purpose of .htaccess and now I bought my own domain so, I realized the need of .htaccess, here I just use this .htaccess for redirect website URL www to non-www and non-www to www. Let see how the .htaccess code is works here, and how we want to use this .htaccess.', 'http://www.2my4edge.com/2013/06/htaccess-uses-and-redirect-www-to-non.html');
INSERT INTO `demo_search` VALUES ('192', 'Choose state and city based on country using Jquery', 'Itâ€™s  for choosing state and city based on choosing the country, when we choose a country, in a second select option field will show the states, what are all presents in the country, that is the concept. Let see how it works', 'http://www.2my4edge.com/2013/06/choose-state-and-city-based-on-country.html');
INSERT INTO `demo_search` VALUES ('193', 'Change the colored image into black and white image on image hover', 'Here we go, changing of colored image into black and white image on image hover. So here we are going to apply the gray-scale property, when the grayscale is on 100% the image will become intoblack and white image. gray-scale', 'http://www.2my4edge.com/2013/06/change-colored-image-into-black-and.html');
INSERT INTO `demo_search` VALUES ('194', 'Comment System using PHP and MySql', 'Here we are going to see about comment system suing PHP and MySql, here it is useful to all webpage feedback system like user comments Displays at the end of all WebPages thatâ€™s what we are going to see here', 'http://www.2my4edge.com/2013/05/comment-system-using-php-and-mysql.html');
INSERT INTO `demo_search` VALUES ('195', 'Simple concept for Select All text OnClick in textarea', 'generating any kind of code, that will shown in textarea, after that we just click on that textarea that will select all the texts in the textarea, how it works', 'http://www.2my4edge.com/2013/05/simple-concept-for-select-all-text.html');
INSERT INTO `demo_search` VALUES ('196', 'Create Database with MySql and INSERT coding in php', 'It is basics of PHP, here we are going to see about How to crate database and how insert the field values in the database table.', 'http://www.2my4edge.com/2013/05/create-database-with-mysql-and-insert.html');
INSERT INTO `demo_search` VALUES ('197', 'Create facebook app and invite or bring your friends to site', 'invite facebook friends and bring friends using that facebook application we can bring your facebook friends to your site, for that we have create a facebook app and have to proceed some steps, let see what it is.', 'http://www.2my4edge.com/2013/05/create-facebook-app-and-invite-or-bring.html');
INSERT INTO `demo_search` VALUES ('198', 'Floating menu using Jquery plugin', 'floating div or floating menu concept is usually used for the purpose of fixed or absolute positions of ads or some other important thing, so that we are using this floating menu concept, let see how it works with Jquery plugin', 'http://www.2my4edge.com/2013/05/floating-menu-using-jquery-plugin.html');
INSERT INTO `demo_web_information` VALUES ('1', 'Bulk Product Data Insert,Update CSV File into Database Using PHP and Mysqli', 'In this post we will discuses about how to insert and update bulk CSV file data into the database. php script to import csv file into mysql database,import csv file into mysql using php demo,how to read csv file in php and store in mysql,import data from excel to mysql using php code,php import csv .In this post we will discuses about how to insert and update bulk CSV file data into the database. php script to import csv file into mysql database,import csv file into mysql using php demo,how to read csv file in php and store in mysql,import data from excel to mysql using php code,php import csv.In this post we will discuses about how to insert and update bulk CSV file data into the database. php script to import csv file into mysql database,import csv file into mysql using php demo,how to read csv file in php and store in mysql,import data from excel to mysql using php code,php import csv.In this post we will discuses about how to insert and update bulk CSV file data into the database. php script to import csv file into mysql database,import csv file into mysql using php demo,how to read csv file in php and store in mysql,import data from excel to mysql using php code,php import csv', 'http://www.mostlikers.com/2016/04/bulk-product-data-insertupdate-csv-file.html');
INSERT INTO `demo_web_information` VALUES ('2', 'Codeigniter SEO Friendly URL Structure', 'Codeigniter SEO Friendly URL Structure codeigniter seo friendly url htaccess,codeigniter seo plugin,codeigniter seo library\ncodeigniter url routing,how to remove index.php from url in codeigniter,codeigniter htaccess file\ncodeigniter url segment,codeigniter 3 htaccess,codeigniter seo tips,codeignite', 'http://www.mostlikers.com/2016/04/codeigniter-seo-friendly-url-structure.html');
INSERT INTO `demo_web_information` VALUES ('3', 'Providing Security to the website forms', 'Most of the website forms face security issues.how to provide security to website in php,providing security to restful web services\nproviding security in 4g systems unveiling the challenges,secure website forms\nhow to create a secure web form,creating a secure website,how to create a secure website ', 'http://www.mostlikers.com/2016/03/providing-security-to-website-forms.html');
INSERT INTO `demo_web_information` VALUES ('4', 'Read Your Gmails Using PHP and IMAP', 'Int this post i will explain about how to access gmail inbox  mail via php code. Here i am using PHP 5 IMAP  function to retrieve gmail inbox emails. IMAP function used to open streams to POP3 and NNTP servers.php imap_open\nphp imap gmail', 'http://www.mostlikers.com/2016/01/read-your-gmails-using-php-and-imap.html');
INSERT INTO `demo_web_information` VALUES ('5', 'Git Tutorial - Git Configurations #1', 'git tutorial There are three levels that the Git stores the configurations.System Level Configurations, User Level Configurations and Project Level Configurations.git tutorial for beginners,git tutorial pdf,github tutorial,git commands\ngit cheat sheet,git tutorial video,git push ,git tutorial window', 'http://www.mostlikers.com/2016/01/git-tutorial-git-configurations-1.html');
INSERT INTO `demo_web_information` VALUES ('6', 'Git Tutorial - Installation', 'It is a software that keeps a track of files and directories that we make; especially the text changes and allows us to compare between the versions that we created. GIT is referred as a version control system (VCS). The primary purpose of the VCS is to manage the source code, i.e., the source code ', 'http://www.mostlikers.com/2016/01/git-tutorial-installation.html');
INSERT INTO `demo_web_information` VALUES ('7', 'Git Tutorial - Introduction', 'It is a software that keeps a track of files and directories that we make; especially the text changes and allows us to compare between the versions that we created. GIT is referred as a version control system (VCS). The primary purpose of the VCS is to manage the source code, i.e., the source code ', 'http://www.mostlikers.com/2016/01/git-tutorial-introduction.html');
INSERT INTO `demo_web_information` VALUES ('8', 'HTML4 vs HTML5 Page Structure', 'This post is about the differences between HTML4 and HTML5, the difference between the HTML elements, tags, page structure, browser support and which one to choose. This post is a lengthier one so it will be divided into two parts. All the website follow a common structure of header, navigation, sid', 'http://www.mostlikers.com/2016/01/html4-vs-html5-page-structure_12.html');
INSERT INTO `demo_web_information` VALUES ('9', 'Bootstrap Tutorial - My First Code', 'Bootstrap uses the HTML elements for creating the layouts and CSS for styling the layout, that means you will not have to learn any other coding language just the HTML, CSS and JavaScript which are the website languages.', 'http://www.mostlikers.com/2015/12/bootstrap-tutorial-my-first-code.html');
INSERT INTO `demo_web_information` VALUES ('10', 'Bootstrap Tutorial - Introduction', 'Bootstrap was developed by Mark Otto and Jacob Thornton on August 2011. Bootstrap is a front end framework built using HTML, CSS and JavaScript, for building for responsive web sites. It is faster and easier to use and sometimes a little tricky. It is called as a mobile first framework. It is an ope', 'http://www.mostlikers.com/2015/12/bootstrap-tutorial-introduction.html');
INSERT INTO `demo_web_information` VALUES ('11', 'Fetch Random rows records from Database Using Mysqli and PHP', 'In this tutorial you will learn various techniques to how to Fetch Random rows records from Database. Using this code you can display random gallery profile, Online examination random questions, multiple choice quiz system. I used following simple query for retrieving random records from database ta', 'http://www.mostlikers.com/2015/12/fetch-random-rows-records-from-database.html');
INSERT INTO `demo_web_information` VALUES ('12', 'Simple Subscribe and Unsubscribe Script in PHP', 'A newsletter is a regularly distributed publication via email in register subscribe user. In this post i have explain about How to create simple news letter subscription script in php. Here i have created very simple code to Subscribe and Unsubscribe email user list.', 'http://www.mostlikers.com/2015/11/simple-subscribe-and-unsubscribe-script.html');
INSERT INTO `demo_web_information` VALUES ('13', 'Text fade in fade out effect using jquery', 'Text fade in fade out effect using jquery, fadeIn   - This method used to hidden the element. fadeIn callback parameter is a function to be executed after the fading completes.\n\nfadeOut() - This method used to visible the hidden element. It can take the slow and fast effect based on milliseconds. \n\n', 'http://www.mostlikers.com/2015/11/text-fade-in-fade-out-effect-using.html');
INSERT INTO `demo_web_information` VALUES ('14', 'Facebook like fetch YouTube embed videos from url using PHP and Ajax', 'Have you shared YouTube video url in facebook timeline.  while typing the link YouTube video will preview the timeline. I had developed Facebook like fetch YouTube embed videos from url using PHP and Ajax with live demo.', 'http://www.mostlikers.com/2015/11/facebook-like-fetch-youtube-embed.html');
INSERT INTO `demo_web_information` VALUES ('15', 'New User Registration With Email Verification Using PHP and Mysqli', 'In this post i have explain about how to implement New user registration with email verification script. if your using register form in a website, you need to use email verification because it will be reduce spam register user and make sure you will get correct registered user in your website.', 'http://www.mostlikers.com/2015/11/new-user-registration-with-email-verifcation.html');
INSERT INTO `demo_web_information` VALUES ('16', 'Get all child, grandchild etc nodes under parent array using php with mysqli', 'In this post i have explain about how to implement New user registration with email verification script. if your using register form in a website, you need to use email verification because it will be reduce spam register user and make sure you will get correct registered user in your website.', 'http://www.mostlikers.com/2015/10/get-all-child-grandchild-etc-nodes.html');
INSERT INTO `demo_web_information` VALUES ('17', 'Youtube video embed code tricks', 'How to Remove YouTube Logo & Branding from Embedded code,codeigniter youtube channel embed,Disable Related Videos,Autoplay and loop youtube video,Remove YouTube Player Controls and Title,Remove YouTube annotations', 'http://www.mostlikers.com/2015/10/youtube-video-embed-code-tricks.html');
INSERT INTO `demo_web_information` VALUES ('18', 'Remove row from table with fadeOut effect using jquery and php', 'delete data from database fadeout In this post i have explain about Remove row from table with fadeOut effect using jquery and php. Here i have used ajax to delete the database record. It will work without refresh page and row table data delete with fadeOut effect. jquery delete table row animation\n', 'http://www.mostlikers.com/2015/09/remove-row-from-table-with-fadeout.html');
INSERT INTO `demo_web_information` VALUES ('19', ' Image Mouse Over Effect using CSS3 and jQuery', 'image hover effect jquery free download,mouse over effect in css,image hover effect css3,jquery image hover effect using one image,jquery image hover effect with caption,jquery hover effects on div,jquery text hover effects,jquery image hover zoom,', 'http://www.mostlikers.com/2015/09/image-mouse-over-effect-using-css3-and.html');
INSERT INTO `demo_web_information` VALUES ('20', 'CSS3 image zoom fade effect', 'image hover effect jquery free download,mouse over effect in css,image hover effect css3,jquery image hover effect using one image,jquery image hover effect with caption,jquery hover effects on div,jquery text hover effects,jquery image hover zoom,', 'http://www.mostlikers.com/2015/08/css3-image-zoom-fade-effect.html');
INSERT INTO `demo_web_information` VALUES ('21', 'Product search filtering using php and ajax', 'In this post i have created product filters in a webpage like that of Flipkart and Amazon. Here i have used ajax function, It will get result without refresh page. Follow this simple code create ecommerce site search filter. Search filter like amazon filpkart, ecommerce site search filter in php, se', 'http://www.mostlikers.com/2015/08/product-search-filtering-using-php-and.html');
INSERT INTO `demo_web_information` VALUES ('22', 'Convert PHP data to JSON API url', 'Convert PHP data to JSON API url. Today i have discussed about Convert php result array to json api url. JSON is a light-weight data-interchange format. Current trend to develop the api and web app server side exchanging data between their servers  XML or JSON format. JSON is the easiest way to tran', 'http://www.mostlikers.com/2015/08/convert-php-data-to-json-api-url.html');
INSERT INTO `demo_web_information` VALUES ('23', 'Forget password recovery using Ajax, php and mysqli', 'In this tutorial i want to discuses about Forget password recovery using php and mysqli.forgot password code in php example\nforgot password code in php free download\nforgot password code in php mysql\nforgot password code in php with demo', 'http://www.mostlikers.com/2015/07/forget-password-recovery-using-ajax-php.html');
INSERT INTO `demo_web_information` VALUES ('24', 'Make seo trick for title tag using javascript', 'Make seo trick for title tag using javascript,Make your html title tag website traffic .Title tags are part of the meta tags that appear at the top of your HTML inside the < head> area. it will display on browser tab title.Blink Effect in title tag script,Marquee Effect in title tag script', 'http://www.mostlikers.com/2015/06/make-seo-trick-for-title-tag-using.html');
INSERT INTO `demo_web_information` VALUES ('25', 'CSS3 image rotate animation effect', 'CSS3 image rotate animation effect,', 'http://www.mostlikers.com/2015/06/css3-image-rotate-animation-effect.html');
INSERT INTO `demo_web_information` VALUES ('26', 'Display Flash Message in CodeIgniter', 'Display Flash Message in CodeIgniter,How to Display Error Message in CodeIgniter,Set flash data in controller', 'http://www.mostlikers.com/2015/06/display-flash-message-in-codeigniter.html');
INSERT INTO `demo_web_information` VALUES ('27', 'Generate RSS Feed for website using php and json script', 'Generate RSS Feed for website using php and json script,Generate RSS Feed with PHP, rss feed in blog', 'http://www.mostlikers.com/2015/06/generate-rss-feed-for-website-using-php.html');
INSERT INTO `demo_web_information` VALUES ('28', 'CodeIgniter Remove index.php in URL', 'In this post i want to discuses about how to remove CodeIgniter  index.php in URL. Previously i have posted CodeIgniter related topics. While i am creating new CodeIgniter project i have to set config file url configuration index.php and i feel my url path also not looking good. i have used below ht', 'http://www.mostlikers.com/2015/05/codeigniter-remove-indexphp-in-url.html');
INSERT INTO `demo_web_information` VALUES ('29', 'Login with facebook using codeigniter', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/login-with-facebook-using-codeigniter.html');
INSERT INTO `demo_web_information` VALUES ('30', 'Jquery image on click effects', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/jquery-image-on-click-effects.html');
INSERT INTO `demo_web_information` VALUES ('31', 'CodeIgniter My Model', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/codeigniter-my-model.html');
INSERT INTO `demo_web_information` VALUES ('32', 'Codeigniter load CSS and Javascript files', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/04/in-this-post-i-have-explan-about-how-we.html');
INSERT INTO `demo_web_information` VALUES ('33', 'Analyze and optimize your website with google PageSpeed tools', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/03/analyze-and-optimize-your-website-with.html');
INSERT INTO `demo_web_information` VALUES ('34', 'Convert html to codeigniter and basic steps of codeigniter', 'facebook login codeigniter tutorial,codeigniter facebook auth,codeigniter facebook login example,codeigniter facebook login tutorial,codeigniter facebook login integration,facebook connect php example,codeigniter facebook login library,codeigniter login system,codeigniter login script,codeigniter lo', 'http://www.mostlikers.com/2015/03/convert-html-to-codeigniter-and-basic.html');
INSERT INTO `demo_web_information` VALUES ('35', 'PDO basic insert,view,update,delete with php function', 'PDO basic insert,view,update,delete with php function. The mysql extension is deprecated and will be removed in the future use mysqli or PDO. mysqli based on object oriented better i would have suggested PDO. The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for access', 'http://www.mostlikers.com/2015/03/pdo-basic-insertviewupdatedelete-with.html');
INSERT INTO `demo_web_information` VALUES ('36', 'Ajax add,view and delete using mysqli', 'insert delete update data using ajax in php,insert update delete in php with source code\ninsert update delete in php in one form,insert update delete in php in one page\nmysqli update query example,insert update delete in php using oops,insert update delete in php on same page\nphp insert update delet', 'http://www.mostlikers.com/2015/03/ajax-addview-and-delete-using-mysqli.html');
INSERT INTO `demo_web_information` VALUES ('37', 'Sql Basic functions', 'insert delete update data using ajax in php,insert update delete in php with source code\ninsert update delete in php in one form,insert update delete in php in one page\nmysqli update query example,insert update delete in php using oops,insert update delete in php on same page\nphp insert update delet', 'http://www.mostlikers.com/2015/02/sql-basic-functions.html');
INSERT INTO `demo_web_information` VALUES ('38', 'Send email with html template using  php', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/send-email-with-html-template-using-php.html');
INSERT INTO `demo_web_information` VALUES ('39', 'Active and inactive users concept using php and Ajax', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/active-and-inactive-users-concept-using.html');
INSERT INTO `demo_web_information` VALUES ('40', 'Auto suggest username like gmail using php with ajax', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/auto-suggest-username-like-gmail-using.html');
INSERT INTO `demo_web_information` VALUES ('41', 'Google style app container drop down using bootstrap with jquery', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/02/google-style-app-container-drop-down.html');
INSERT INTO `demo_web_information` VALUES ('42', 'Share your website link to social media website (New)', 'Today i want explain about send email with html template using php\nphp mail html template,email html template generator,email html template code\nsimple email html template\nemail html template design\nemail html template free\nemail html template example\nemail html template tutorial', 'http://www.mostlikers.com/2015/01/share-your-website-link-to-social-media.html');
INSERT INTO `demo_web_information` VALUES ('43', 'Ajax PHP Login Page with bootstrap design', 'Ajax PHP Login Page with boostrap design concept. Simple Ajax Login form with jQuery and PHP, How make a login system using ajax without refreshing', 'http://www.mostlikers.com/2015/01/ajax-php-login-page-with-boostrap-design.html');
INSERT INTO `demo_web_information` VALUES ('44', 'Php contact form captcha code using Ajax', 'what is use of captcha, How to Create CAPTCHA Protection using PHP and AJAX,PHP Built-In Ajax CAPTCHA Validation Code Sample,Today i am going explain about Php contact form captcha code using Ajax concept. Why we use to captch in website, This protects your website for spammers and robots. Here i wa', 'http://www.mostlikers.com/2015/01/php-contact-form-captcha-code-using-ajax.html');
INSERT INTO `demo_web_information` VALUES ('45', 'Export html table data to csv file using JavaScript', 'Export html table data to csv file using JavaScript,Recently i have posted Import CSV File Data Into Database Using PHP article this concept based import excel sheet data into database.Similar like i have posted this topic, here i am using JavaScript for converting html table data into excel (CSV) d', 'http://www.mostlikers.com/2015/01/export-html-table-data-to-csv-file.html');
INSERT INTO `demo_web_information` VALUES ('46', 'Dynamically adding HTML form field using jQuery', 'Dynamically adding HTML form field using jQuery, Div generator jquery', 'http://www.mostlikers.com/2015/01/dynamically-adding-html-form-field.html');
INSERT INTO `demo_web_information` VALUES ('47', 'Show loading image while Page is loading using jQuery', 'Show loading image while Page is loading using jQuery, page loader script', 'http://www.mostlikers.com/2014/12/show-loading-image-while-page-is.html');
INSERT INTO `demo_web_information` VALUES ('48', 'Expiry date code in php', '$startTime = strtotime($puechese_date);\n    $endTime = strtotime($dateofreg1);\n    $timeDiff = abs($startTime-$endTime);\n    $numberDays = $timeDiff/86400;\n    $numberDays = intval($numberDays);', 'http://www.mostlikers.com/2014/08/expiry-date-code-in-php.html');
INSERT INTO `demo_web_information` VALUES ('49', 'First and Last Record in Mysql ', 'SELECT * FROM table_name ORDER BY column_id DESC;', 'http://www.mostlikers.com/2014/08/first-and-last-record-in-mysql.html');
INSERT INTO `demo_web_information` VALUES ('50', 'Get current date and time in PHP', 'Get your current date and time in php, set your location default time zone get your current time zone.\nmanually set the timezone by using date_default_timezone_set before the date() or time().', 'http://www.mostlikers.com/2014/07/get-current-date-and-time-in-php.html');
INSERT INTO `demo_web_information` VALUES ('51', 'PHP switch case Statement', 'Php value compare to multi value in the sense we use if else statement method that time we use lot of value comparison method  in if else statement method. 10 or 20 value comparison statement execute time take delay, that case use switch statement this multiple value check time and comparison method', 'http://www.mostlikers.com/2014/07/php-switch-case-statement.html');
INSERT INTO `demo_web_information` VALUES ('52', 'PHP user defind function', 'PHP user defind function reduce program code. create your own function pass the parameters value to check the conditions. PHP gives you option to pass your parameters inside a function. You can pass as many as parameters.', 'http://www.mostlikers.com/2014/07/php-user-defind-function.html');
INSERT INTO `demo_web_information` VALUES ('53', 'Find latitude and longitude with Google Maps', 'Google Maps is an application that allows users to find and search for locations. that Map to find the location based latitude and longitude coordinates. for any place Your search loction find on  latitude and longitude in google map.', 'http://www.mostlikers.com/2014/07/find-latitude-and-longitude-with-google.html');
INSERT INTO `demo_web_information` VALUES ('54', 'SQL BETWEEN Operator', 'Sql Between operator find the database in between two database values. this operator used between and not between data filtering database', 'http://www.mostlikers.com/2014/07/sql-between-operator.html');
INSERT INTO `demo_web_information` VALUES ('55', 'Rename file directory in php ', 'PHP rename() function changed old directory to new directory If new name exists, it will be overwritten. Sometime wrongly uploaded file images or folder that time use this function easy to rename the new directory or image name.', 'http://www.mostlikers.com/2014/07/rename-file-directory-in-php.html');
INSERT INTO `demo_web_information` VALUES ('56', 'HTML input file accept Attribute', 'PHP rename() function changed old directory to new directory If new name exists, it will be overwritten. Sometime wrongly uploaded file images or folder that time use this function easy to rename the new directory or image name.', 'http://www.mostlikers.com/2014/07/html-input-accept-attribute.html');
INSERT INTO `demo_web_information` VALUES ('57', 'Delete image from folder in php', 'Delete image from folder in php,Image Deleting From The Image Source Folder - PHP,How can I delete file from my uploads folder', 'http://www.mostlikers.com/2014/07/delete-image-from-folder-in-php.html');
INSERT INTO `demo_web_information` VALUES ('58', 'Facebook style photo comment system', 'Facebook style photo gallery comment, facebook style comment system php,Facebook Style Wall Posting and Comments System,Facebook-like comment system using AJAX, PHP', 'http://www.mostlikers.com/2014/07/facebook-style-photo-comment-system.html');
INSERT INTO `demo_web_information` VALUES ('59', 'How to Make a Simple Search Engine using PHP and MySQLi', 'How to Make a Simple Search Engine,How to Make a Simple Search Engine using PHP and MySQLi, search engine in php, google search box,search engin concept in php', 'http://www.mostlikers.com/2013/08/search-engine.html');
INSERT INTO `demo_web_information` VALUES ('60', 'phpmyadmin sql query builder', 'phpmyadmin sql query builder,  How to generate a create table script for an existing', 'http://www.mostlikers.com/2014/05/phpmyadmin-sql-query-builder.html');
INSERT INTO `demo_web_information` VALUES ('61', 'Facebook Style Drop Down Log out Menu', 'i have tried to facebook style drop down menu list. i used some few line simple jquery function. click down arrow drop down menu list display here i use div show and hide based on jquery code. i make some own css to designed the drop down menu.', 'http://www.mostlikers.com/2013/05/facebook-style-drop-down-log-out-menu.html');
INSERT INTO `demo_web_information` VALUES ('62', 'Facebook style login system using Mysqli and CSS', 'Today i posted on facebook style login form using PHP and CSS 3. facebook login form username accept on 3 types email id, Phone number, facebook email id this are 3 ways to login to facebook if user can enter wrong password  search to the databasse to fetch the matching  username to display image in', 'http://www.mostlikers.com/2014/03/facebook-login.html');
INSERT INTO `demo_web_information` VALUES ('63', 'PHP age calculator script', 'PHP age calculator script ,Find your age using PHP age calculator script. This code easy find your age and calculate total no.of days . try this simple coding make your own age calculator.', 'http://www.mostlikers.com/2014/03/php-age-calculator-script.html');
INSERT INTO `demo_web_information` VALUES ('64', 'Multiple image upload concept using php & mysql', 'In this post i have explained How to upload multiple images in database. upload multiple images in php mysql, multiple image upload in php with database, multiple image upload in php code with databases,multiple file upload in php mysql database, upload multiple images in php mysql demo,how to uploa', 'http://www.mostlikers.com/2014/03/multiple-image-upload-concept-using-php.html');
INSERT INTO `demo_web_information` VALUES ('65', 'PHP implode and explode concept', 'PHP implode and explode concept', 'http://www.mostlikers.com/2014/03/php-implode-and-explode-concept.html');
INSERT INTO `demo_web_information` VALUES ('66', 'Simple Human verification code in php ', 'Simple Human verification code', 'http://www.mostlikers.com/2014/02/simple-human-verification-code-in-php.html');
INSERT INTO `demo_web_information` VALUES ('67', 'PDO Form value inserting into Database ', 'Form for inserting using php and pdo', 'http://www.mostlikers.com/2014/02/pdo-inser-delete.html');
INSERT INTO `demo_web_information` VALUES ('68', 'PDO tutorials ', 'mysqli to PDO connection, Pdo (Php data object)', 'http://www.mostlikers.com/2014/02/pdo-tutorials.html');
INSERT INTO `demo_web_information` VALUES ('69', 'How to make a website in Photoshop', 'How to make a website in Photoshop, PSD to Html', 'http://www.mostlikers.com/2014/02/how-to-make-website-in-photoshop.html');
INSERT INTO `demo_web_information` VALUES ('70', ' Find all your computer information', 'Find your all system information, dxdiag', 'http://www.mostlikers.com/2014/02/find-all-your-computer-information.html');
INSERT INTO `demo_web_information` VALUES ('71', 'custom search engine', 'Google custom search engine', 'http://www.mostlikers.com/2014/02/custom-search-engine.html');
INSERT INTO `demo_web_information` VALUES ('72', 'change the html 5 form validation defult error message', 'change the html 5 form validation defult error message, This post make on custom to change the HTML 5 Form validation error message. previously Error message Display on default so now you change custom message on input validation field.', 'http://www.mostlikers.com/2014/02/change-html5-msgs.html');
INSERT INTO `demo_web_information` VALUES ('73', 'Dynamic menu with sub-menu using php and mysql', 'Dynamic menu with sub-menu using php and mysql', 'http://www.mostlikers.com/2014/02/php-menu-submenu.html');
INSERT INTO `demo_web_information` VALUES ('74', 'PHP Email and mobile number validation script', 'In this post i have explain about how to validate the email address and mobile number in server side. Usually we use form validation scripts. It will work only client side,  But we need check the form values in server side.', 'http://www.mostlikers.com/2014/02/php-email-and-mobile-number-validation.html');
INSERT INTO `demo_web_information` VALUES ('75', 'Newsletter subscription in php', 'Newsletter subscription in php, Subscribe to Newsletters,  Group mail', 'http://www.mostlikers.com/2013/09/News-lettet.html');
INSERT INTO `demo_web_information` VALUES ('76', 'Gmail style chat user display online and offline concept ', 'Gmail chat, offline and online concept, Gmail style chat user display online and offline concept', 'http://www.mostlikers.com/2013/09/Gmail-chat.html');
INSERT INTO `demo_web_information` VALUES ('77', 'Simple comments form using in php', 'Creating simple PHP contact form, Comments form in php, Creating a simple feedback form using PHP, How to Create a Contact Form, Simple PHP contact form Script', 'http://www.mostlikers.com/2013/08/comments-form.html');
INSERT INTO `demo_web_information` VALUES ('78', 'How to create Dynamic Menu using php and mysqli', 'Dynamic menu, Mysqli,Css menu, How to make css menu in php, Admin panel menu,WordPress menu', 'http://www.mostlikers.com/2013/08/dynamic-menu.html');
INSERT INTO `demo_web_information` VALUES ('79', 'Email subscription concept using php and mysqli ', 'Email subscription concept using php and mysqli , how to send email, News letter', 'http://www.mostlikers.com/2013/08/Email-subscription.html');
INSERT INTO `demo_web_information` VALUES ('80', 'Random Number generator in php ', 'This coding using on mobile number verification codes , captcha , forget password, comments verification, its such as some authenticate to check user.', 'http://www.mostlikers.com/2013/08/random-number-generator-in-php.html');
INSERT INTO `demo_web_information` VALUES ('81', 'Send Email concept using in php', 'Email send concept using in php, feedback form, form post value in email', 'http://www.mostlikers.com/2013/08/Email-concept-php.html');
INSERT INTO `demo_web_information` VALUES ('82', 'Twitter style compose box', 'css style box, Twitter style box, compose box', 'http://www.mostlikers.com/2013/08/Twiter-input-box.html');
INSERT INTO `demo_web_information` VALUES ('83', 'Mysqli using in php', 'Mysqli, How to connect database in mysqli, mysqli using in php, php in mysqli, Mysqli_real_escape,', 'http://www.mostlikers.com/2013/07/mysqli-php.html');
INSERT INTO `demo_web_information` VALUES ('84', 'php simple login script', 'php simple login script, login script, how How to Create Login Page in PHP/MySQL, Create User Login in PHP', 'http://www.mostlikers.com/2013/07/Login-php.html');
INSERT INTO `demo_web_information` VALUES ('85', 'pagination concept in php', 'This post concept based on pagination its simplify to view count the number of the database value make paging method simple to access first last database values . I make the company employee status using pagination concept just try and download this coding also include sql file', 'http://www.mostlikers.com/2013/07/pagination-concept-in-php.html');
INSERT INTO `demo_web_information` VALUES ('86', 'Password reset concept in php', 'This concept based on login user reset forget password. Sometime use forget the login password  that time user send  request through  admin .the admin generate some authentication code send email on request user email id . The user can get the authentication code and again login to provide new passw', 'http://www.mostlikers.com/2013/07/password-reset-concept-in-php.html');
INSERT INTO `demo_web_information` VALUES ('87', 'change password in php mysql code', 'Change password is an important feature in password protected website. Using this feature user have the option to change the current password to new password. In this post i have explain how to change the old password using php and mysqli.', 'http://www.mostlikers.com/2013/07/change-password-in-php-mysql-code.html');
INSERT INTO `demo_web_information` VALUES ('88', 'Password Encryption function in php', 'This article is about how to password encrypt method . For an overview of cryptography technology encryption function password plain-text convert cipher-text this is use of hackers cannot read our given password. the password convert to md5 algorithm this usually needs a key-generation algorithm to ', 'http://www.mostlikers.com/2013/07/password-encryption.html');
INSERT INTO `demo_web_information` VALUES ('89', 'Make simple page counter using php and mysql', 'A hit counter or a page counter counts the number of people that visit your page. If you have created a new website you might be interested how many people are visiting. so try this simple method count how many people visit on your website. this coding make MySQL update query using in php.', 'http://www.mostlikers.com/2013/07/page-count-php.html');
INSERT INTO `demo_web_information` VALUES ('90', ' To check whether an email id exists or not in database using PHP', 'email check in php', 'http://www.mostlikers.com/2013/07/to-check-whether-email-id-exists-or-not.html');
INSERT INTO `demo_web_information` VALUES ('91', 'Array / object using fetch query in php oops concept', 'Array / object using fetch query in php oops concept. \nObject Oriented Programming, or OPP  refers to the method of programming that invokes the use of classes to organize the data and structure of an application. object function code easy to fetch in database most of the programmer using oops princ', 'http://www.mostlikers.com/2013/07/array-object-using-fetch-query-in-php.html');
INSERT INTO `demo_web_information` VALUES ('92', 'Post Database values one table to another table ', 'Post Database values one table to another table', 'http://www.mostlikers.com/2013/06/post-database-values-one-table-to.html');
INSERT INTO `demo_web_information` VALUES ('93', 'Login and Signup tab using jquery', 'Login and Signup form tab using jquery', 'http://www.mostlikers.com/2013/06/login-and-signup-tab-using-jquery.html');
INSERT INTO `demo_web_information` VALUES ('94', 'Image Zoom In and Zoom Out concept', 'Image Zoom In and Zoom Out concept', 'http://www.mostlikers.com/2013/06/image-zoom-in-and-zoom-out-concept.html');
INSERT INTO `demo_web_information` VALUES ('95', 'Multiple Values selected of select box ', 'Multiple Values selected of select box', 'http://www.mostlikers.com/2013/06/multiple-values-selected-of-select-box.html');
INSERT INTO `demo_web_information` VALUES ('96', 'search concept using html5', 'This post make on simple search concept making list on text box like Google search. store the values in option box <data list> tag this data list id  in search box. used to display a repeated list of items that are bound to the control.', 'http://www.mostlikers.com/2013/06/search-concept-using-html5.html');
INSERT INTO `demo_web_information` VALUES ('97', 'Html5 form validation', 'HTML5 validations using attributes like pattern, required, autofocus on the input field type text, tel, email, search, password, datetime, color, range.', 'http://www.mostlikers.com/2013/06/html5-form-validation.html');
INSERT INTO `demo_web_information` VALUES ('98', 'Typing animation text using Javascript', 'Typing animation text using Javascript', 'http://www.mostlikers.com/2013/06/News-Text.html');
INSERT INTO `demo_web_information` VALUES ('99', 'select box disabled and pass the value concept', 'select box disabled and pass the value concept', 'http://www.mostlikers.com/2013/05/select-box-disabled-and-pass-value.html');
INSERT INTO `demo_web_information` VALUES ('100', 'Html 5 Mobile number validation', 'Html5 Mobile number validation, html5 mobile number validation,mobile number validation in html5,10 digit mobile number validation in html5,html mobile number validation,pattern for mobile number validation in html5,pattern=\"[7-9]{1}[0-9]{9}\"', 'http://www.mostlikers.com/2013/05/html-5-mobile-number-validation.html');
INSERT INTO `demo_web_information` VALUES ('101', 'form action value move another form in php', 'form action value move another form in php', 'http://www.mostlikers.com/2013/05/form-action-value-move-another-form-in.html');
INSERT INTO `demo_web_information` VALUES ('102', 'Css style Tab concept using Radio button', 'Css style Tab concept using Radio button', 'http://www.mostlikers.com/2013/05/css-style-tab-concept-using-radio-button.html');
INSERT INTO `demo_web_information` VALUES ('103', 'Hidden username mobile number using sub string Method', 'Hidden username mobile number using sub string Method', 'http://www.mostlikers.com/2013/05/hidden-username-mobile-number-using-sub.html');
INSERT INTO `demo_web_information` VALUES ('104', 'How to show web browser saved password ', 'This is one new step hack trick normally most of the user can saved the login password in our browser they will not remember about the saved password. This notes help to how to show our saved password on our browser.', 'http://www.mostlikers.com/2013/05/how-to-show-web-browser-saved-password.html');
INSERT INTO `demo_web_information` VALUES ('105', 'Share links to social network sites with Yoursite', 'Share my Web page and url Directly link in Social media networks, social media  icons,', 'http://www.mostlikers.com/2013/05/share-your-web-page-and-url-directly.html');
INSERT INTO `demo_web_information` VALUES ('106', 'javascript check retype password', 'Password Recheck script just call the values in get id to check the password matching or wrong. make this get password and retype password values simple method watch also have live demo', 'http://www.mostlikers.com/2013/05/recheck-password-using-javascript.html');
INSERT INTO `demo_web_information` VALUES ('107', 'Style Login Light Box coding', 'Style Login Light Box coding', 'http://www.mostlikers.com/2013/05/style-login-light-box.html');
INSERT INTO `demo_web_information` VALUES ('108', 'CSS style input box design coding', 'CSS style input box design coding,css text box design code\ntext box design in css examples\ncss text box style.This topic we discuss about CSS3 code. CSS3 they release lot of style code, here i am using text box design. CSS3 induced cursor focus script and hover change style also. Just follow this no', 'http://www.mostlikers.com/2013/04/css-input-box-design-style-coding.html');
INSERT INTO `demo_web_information` VALUES ('109', 'website Popup Ads script', 'This Script have simply make to  Popup windows Ads through your website. just try this coding put on <head> tag after refresh page the pop windows automatically  open your website.', 'http://www.mostlikers.com/2013/04/website-popup-ads-script.html');
INSERT INTO `demo_web_information` VALUES ('110', 'Download flash files from the website through an browser', 'Download flash files from the website through an browser', 'http://www.mostlikers.com/2013/04/download-flash-files-from-website.html');
INSERT INTO `demo_web_information` VALUES ('111', 'Html 5 Validate in Text box', 'This required code use text box email, name , empty column, just give the name mention name=\"email\"', 'http://www.mostlikers.com/2013/04/html-5-validate-in-text-box-coding.html');
INSERT INTO `demo_web_information` VALUES ('112', 'Div Split coding ', 'This method Easy way Split Div basically Div split using only Grid but this coding simple method try this code.', 'http://www.mostlikers.com/2013/04/div-split-coding.html');
INSERT INTO `demo_web_information` VALUES ('113', 'Show And Hide Concept in Radio Button ', 'Show hide concept based on similar div hide and show concept but choose the radio button div will be display function make on jquery. radio button value name call on div just choose radio button value increased div action show/ hide. jquery function called input names to changes the divs values.', 'http://www.mostlikers.com/2013/04/show-and-hide-concept-in-radio-button.html');
INSERT INTO `demo_web_information` VALUES ('114', 'How to  hack windows 7 password', 'How to  hack windows 7 password, how,Hack Windows 7 / 8 Password Without Software,windows 7 password reset,windows 7 password hack cmd', 'http://www.mostlikers.com/2013/03/how-to-hack-windows-7-password.html');
INSERT INTO `demo_web_information` VALUES ('115', 'Hover Change the image', 'This is make simple tricks about css concept based on multiple image choose on css just positions will be changed the image location most of the website designers use this method all small images to combine single image and use image positions. just try this below css code also have live demos', 'http://www.mostlikers.com/2013/01/onclick-change-photo.html');
INSERT INTO `demo_web_information` VALUES ('116', 'On-click Select Box Link using Javascript', 'On-click Select Box Link using Javascript give link location..', 'http://www.mostlikers.com/2013/01/select-box-link-without-ajax-javascript.html');
INSERT INTO `demo_web_information` VALUES ('117', 'Select All Check box java Script', 'Select All Check box java Script', 'http://www.mostlikers.com/2013/01/select-all-check-box-in-javascript.html');
INSERT INTO `demo_web_information` VALUES ('118', 'Add multiple email accounts to your Gmail account using SMTP Configuration', 'how to configure your multiple emails accounts to google gmail account, Gmail account has more features, here im going to tell you the one, which is more useful to everyone. here im going to configure how to add multiple email id in single email account. if your adding like this, you can send email ', 'http://www.2my4edge.com/2016/02/add-multiple-email-accounts-to-your_3.html');
INSERT INTO `demo_web_information` VALUES ('119', 'Create ZIP format and download whole folder or file using php', 'create or make zip file using php, by using php we can make .zip format, here we are going make whole folder or particular file as in zip format. let me show the php code.', 'http://www.2my4edge.com/2016/01/create-zip-format-whole-folder-or-file.html');
INSERT INTO `demo_web_information` VALUES ('120', 'When we click on mobile number on webpage, Call through skype or show in mobile dialer screen to cal', 'Usually in webpage we are displaying mobile number for contact us, When we are giving that number we are just simply giving only number, her ei have solution for that, When we are clicking on that number it will show mobile dialer screen to dial directly in mobile or if you want to call in skype, yo', 'http://www.2my4edge.com/2015/12/when-click-on-mobile-number-on-webpage.html');
INSERT INTO `demo_web_information` VALUES ('121', 'Complete basic insert, view, edit, delete and update in Codeigniter', 'Codeigniter is one of the popular framework in php, here we are going to learn about complete basic functionality of codeignter like insert, view, edit, delete and update. This will help all the codeignter workers. with this functionality they manage codeignter and easy learn the functionality. Let ', 'http://www.2my4edge.com/2015/12/complete-basic-insert-view-edit-delete.html');
INSERT INTO `demo_web_information` VALUES ('122', 'Show menu bar in scroll up, hide in scroll down using Javascript with Bootstrap', 'Now a days most of the sites are using this kind of nav bar,  like when we are scrolling down hiding the menu nav bar, When we are scrolling up showing the menu nav bar, actually it is really nice one. here we are going to create like that kind of functionality only using jquery javascript and with ', 'http://www.2my4edge.com/2015/12/show-menu-bar-in-scroll-up-hide-in.html');
INSERT INTO `demo_web_information` VALUES ('123', 'Save the particular div in PDF format onclick using Jquery', 'Save or download the particular div as in the PDF format onclick using jsPDF jquery file. This is very simple one. i already showed you one tutorial to save and print the whole web page. here for the particular div. let see the code. using jquery', 'http://www.2my4edge.com/2015/11/save-particular-div-in-pdf-format.html');
INSERT INTO `demo_web_information` VALUES ('124', 'Unlimited repeating data loading scroll using Jquery', 'loading unlimited data while scrolling down to the page. im going to use iscroll.js to make this kind of function. most of the site are using this kind of script to make the data lengthy. this make help to stay people in the page. like that in the load-data.html also we are loading the same page ins', 'http://www.2my4edge.com/2015/11/unlimited-repeating-data-loading-scroll.html');
INSERT INTO `demo_web_information` VALUES ('125', 'Auto complete Google map in form input type using geocomplete Jquery', 'interesting thing regarding web development. now a days most of the website need google map location while we are entering location name, for that we have one solution. When we are entering the location name in input type you will get map for that particular location by using Jquery', 'http://www.2my4edge.com/2015/10/auto-complete-google-map-in-form-input.html');
INSERT INTO `demo_web_information` VALUES ('126', 'Multiple image upload preview before image uploading to the server using Jquery', 'useful tip for multiple image uploading preview, when ever we are uploading image we need instant image preview, for that we are going to use html5 filereader. and here we are going to use the jquery for instant image preview. let see the simple code.', 'http://www.2my4edge.com/2015/10/multiple-image-upload-preview-before.html');
INSERT INTO `demo_web_information` VALUES ('127', 'Usage of Animate.css. One of the finest CSS library for animations', 'This is one the finest CSS library file to make you web page with attractive animated designs. it is cross browser library css file. it very easy to use in web page. it contains more Effects. We can use this library in our project make the page very neat and attractive. let see the details about the', 'http://www.2my4edge.com/2015/07/usage-of-animatecss-one-of-finest-css.html');
INSERT INTO `demo_web_information` VALUES ('128', 'Remove repeated entries in select option dropdown using Javascript', 'Avoid duplicate entries in selection option dropdown using javascript, this is mostly used in php, while fetching multiple data in dropdown select, that time we need to avoid duplicate entries, that time we need this script, or else we have to use group by query, here we are using that without mysql', 'http://www.2my4edge.com/2015/06/remove-repeated-entries-in-select.html');
INSERT INTO `demo_web_information` VALUES ('129', 'Very flexible Hover css effects using Hover.css', 'I was used this css to my recent project, This is really nice and time consumes for css hover effects. Here it is very simple we just have to give to class name in the class and it will automatically takes that realted effect. this is very simple for hover effects. let me tell the details about the ', 'http://www.2my4edge.com/2015/05/very-flexible-hover-css-effects-using.html');
INSERT INTO `demo_web_information` VALUES ('130', 'Simple textarea text counter using bootstrap', 'Twitter style textarea character counter using Bootstrap and javascript, here is the one of the simple method use the textarea counter, this is very useful to limited character field in forms. after a long time this post is about bootstrap. It is very simple one. text counter with validation until y', 'http://www.2my4edge.com/2015/05/simple-textarea-text-counter-using.html');
INSERT INTO `demo_web_information` VALUES ('131', 'Allow html tags and files only to particular page URL using php', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/04/allow-html-tags-and-files-only-to-particular-url.html');
INSERT INTO `demo_web_information` VALUES ('132', 'Simple blinking effect using css3 and Jquery', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/04/simple-blinking-effect-using-css3-and.html');
INSERT INTO `demo_web_information` VALUES ('133', 'Connect website through LAN without internet using WAMP server ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/connect-website-through-lan-without.html');
INSERT INTO `demo_web_information` VALUES ('134', 'Responsive back to top using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/responsive-back-to-top-using-bootstrap.html');
INSERT INTO `demo_web_information` VALUES ('135', 'Animated background Color changer using Jquery UI', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/03/animated-background-color-changer-using.html');
INSERT INTO `demo_web_information` VALUES ('136', 'Google Doodles style animation using Jquery', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/google-doodles-style-animation-using.html');
INSERT INTO `demo_web_information` VALUES ('137', 'Set custom username url for your facebook account', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/set-custom-username-url-for-your.html');
INSERT INTO `demo_web_information` VALUES ('138', 'Peeling style on top corner of browser using peelback jquery ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/peeling-style-on-top-corner-of-browser.html');
INSERT INTO `demo_web_information` VALUES ('139', 'Get Google alerts to your mail ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/get-google-alerts-to-your-mail.html');
INSERT INTO `demo_web_information` VALUES ('140', 'Confirmation alert on before closing browser tab using Javascript ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/confirmation-alert-on-before-closing.html');
INSERT INTO `demo_web_information` VALUES ('141', 'Responsive navbar menu using bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/responsive-navbar-menu-using-bootstrap.html');
INSERT INTO `demo_web_information` VALUES ('142', 'Connect Whats app to computer through Android phone ', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/connect-whats-app-to-computer-through.html');
INSERT INTO `demo_web_information` VALUES ('143', 'How to add custom google search engine to our websites', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/how-to-add-custom-google-search-engine.html');
INSERT INTO `demo_web_information` VALUES ('144', 'How to add Google translator to our website', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/how-to-add-google-translator-to-our.html');
INSERT INTO `demo_web_information` VALUES ('145', 'Live HTML Compiler using PHP like W3schools tryit editor', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/02/live-html-compiler-using-php-like.html');
INSERT INTO `demo_web_information` VALUES ('146', 'How to create a form in Google Drive for Request and Response', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/how-to-create-form-in-google-drive-for.html');
INSERT INTO `demo_web_information` VALUES ('147', 'Simple updated dynamic datatable using Bootstrap (NEW)', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/simple-updated-dynamic-datatable-using.html');
INSERT INTO `demo_web_information` VALUES ('148', 'Responsive Full screen slider using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2015/01/responsive-full-screen-slider-using.html');
INSERT INTO `demo_web_information` VALUES ('149', 'Simple voting concept based on ip address using php with Ajax', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-voting-concept-based-on-ip.html');
INSERT INTO `demo_web_information` VALUES ('150', 'Simple Responsive Quote style Carousel Slider', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-responsive-quote-style-carousel.html');
INSERT INTO `demo_web_information` VALUES ('151', 'Simple dropdown menu with Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/simple-dropdown-menu-with-bootstrap.html');
INSERT INTO `demo_web_information` VALUES ('152', 'Step by step tab style form validation Wizard using Bootstrap', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/step-by-step-tab-style-form-validation.html');
INSERT INTO `demo_web_information` VALUES ('153', 'Subscribe pop up alert box on scroll down and onload using subscribe better js', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/subscribe-pop-up-alert-box-on-scroll.html');
INSERT INTO `demo_web_information` VALUES ('154', 'Fetch two different table data in single page using PHP and MySql', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/fetch-two-different-table-data-in.html');
INSERT INTO `demo_web_information` VALUES ('155', 'Basic insert, view, edit, delete and update using PHP and Mysql', 'We are mostly using header and footer as separate page. so that time when we are adding one in header or footer file it will affect all the files that, so for we have to take that files only to the particular url, then only it will works well. we can add css, javascript and jquery to particular page', 'http://www.2my4edge.com/2014/12/basic-insert-view-edit-delete-and.html');
INSERT INTO `demo_web_information` VALUES ('156', 'PHP Email template for contact user and admin', 'Template based Email sending,HTML Email template in PHP,PHP Mailer with HTML template and sending variables,Send email with a template using php,Free Email Templates for HTML Newsletter Campaign', 'http://www.2my4edge.com/2014/11/php-email-template-for-contact-user-and.html');
INSERT INTO `demo_web_information` VALUES ('157', 'Dynamic data binding using angularjs', 'Dynamic data binding in angularjs,data binding in angularjs example,How to display Database data using Angular JS', 'http://www.2my4edge.com/2014/11/dynamic-data-binding-using-angularjs.html');
INSERT INTO `demo_web_information` VALUES ('158', 'Gird and List style view onclick by using Jquery', 'how to do the grid/list style view mode onclick by using javascript and jquery. this is very simple one. but in this post you have to concentrate on girds in css. but here i done only one gird for my sample. making grid to list and list to gird by clicking the icon.', 'http://www.2my4edge.com/2014/07/gird-and-list-style-view-onclick-by.html');
INSERT INTO `demo_web_information` VALUES ('159', 'Set current time using javascript for websites', 'Set current time using javascritpt, most of the websites need time to display time in their website, for that, here we are going to set simple javascript digital timer in our website. it is one of the simple one. let see the coding.', 'http://www.2my4edge.com/2014/07/set-current-time-using-javascript-for.html');
INSERT INTO `demo_web_information` VALUES ('160', 'Portfolio Design and sorting with Animation Effect', 'how to make simple and attractive portfolio design and sorting with Animation effects. In this post, we are going to use Jquery and CSS to make this function. this is one of the simple way. let see the coding with details.', 'http://www.2my4edge.com/2014/06/portfolio-design-and-sorting-with.html');
INSERT INTO `demo_web_information` VALUES ('161', 'Send an Email by using PHPmailer ', 'how to send a Email using phpmailer, it is a simple one. here we have class.phpmailer.php file, that make send mail operation very simple and calm. here we just have to do some simple steps to do this method. check this by the live demo. this phpmailer class file makes to attach a file with a mail. ', 'http://www.2my4edge.com/2014/05/send-email-by-using-phpmailer.html');
INSERT INTO `demo_web_information` VALUES ('162', 'Onload Fancy box Using Jquery', 'Onload Fancy box using Jquery, yes it may harmful to web page. it is like a popup box. popup box is one of the most irritating thing in web designing and web development, but most of them need this script for their own, personal and e-commerce site. jquery, popup window, onload,', 'http://www.2my4edge.com/2014/01/onload-fancy-box-using-jquery.html');
INSERT INTO `demo_web_information` VALUES ('163', 'Accordion toggle using Jquery with Bootstrap', 'Accordion toggle is new style of toggle, this accordion is mostly using for FAQ and design features, so this kind of toggle is make the web page as very attractive, and here we are going to use this with Bootstrap plugin. let see the coding.', 'http://www.2my4edge.com/2013/12/accordion-toggle-using-jquery-with.html');
INSERT INTO `demo_web_information` VALUES ('164', 'Go back to previous and next page onClick in browser using Javascript', 'Sometimes this script may very useful to every web designers, go back to previous or next page in browser using javascript. here we are going to see how make, go back to previous and next page onclick in browser using javascript. let see the simple code.', 'http://www.2my4edge.com/2013/11/go-back-to-previous-and-next-page.html');
INSERT INTO `demo_web_information` VALUES ('165', 'Dynamic Data Table using DataTable Jquery', 'Dynamic Data table using dataTable Query is very simple and useful plugin technique, here we are going to see about that DataTable functions and features. this Dynamic data table has more feature within it, such as Search, Sorting, Pagination, field count, views per page. Those all features contains', 'http://www.2my4edge.com/2013/11/dynamic-data-table-using-datatable.html');
INSERT INTO `demo_web_information` VALUES ('166', 'Image zoom on hover using css3', 'Image zoom on hover using css3, this is actually very simple and useful tip to all web designers. here we have already discussed more tutorials about designing and here one more thing. it may useful to make portfolio and other designing purpose. let see the details about that.', 'http://www.2my4edge.com/2013/10/image-zoom-on-hover-using-css3.html');
INSERT INTO `demo_web_information` VALUES ('167', 'Resize the font using Query', 'Resize the font size using JQuery is very simple one, Onclick how to make font size increase and decrease using Jquery. here we are going to see thing about designing. just make simple thing, it is also like magnifying the text onclick. usually we are using shortcut key CTRL + + or CTRL + - to zoom ', 'http://www.2my4edge.com/2013/08/resize-font-using-query.html');
INSERT INTO `demo_web_information` VALUES ('168', 'Get support with foreign and regional language in php and mysql', 'Usually you may know  or donâ€™t know, in a PhpMyadmin default setting does not support the foreign and regional language. It default supporting language is English. Iâ€™m from India, so here most of them using so many languages. So today Iâ€™m going to show you that how to insert the foreign and re', 'http://www.2my4edge.com/2013/08/get-support-with-foreign-and-regional.html');
INSERT INTO `demo_web_information` VALUES ('169', 'Ajax delete with PHP and MySql', 'Ajax delete with confirm box, here we are going to see about how to delete the data without refreshing page and with confirmation box, and this is what most of them searching, so today going to show you that, how to make this alert style box delete with ajax and php, mysql.', 'http://www.2my4edge.com/2013/08/ajax-delete-with-php-and-mysql.html');
INSERT INTO `demo_web_information` VALUES ('170', 'How to create an animated .jpg image', 'Here Iâ€™m going to show you that, how to make animated image with the extension of .jpg. we all know that, the .jpg file (joint photography experts group) does not support animation and all. But here we have some tricks to make it.', 'http://www.2my4edge.com/2013/08/how-to-create-animated-jpg-image.html');
INSERT INTO `demo_web_information` VALUES ('171', 'Animated scroll to top by using Jquery', 'Animated Scroll to top by using JQuery is one the simple technique, here we going to see that. how i made this with simple coding. this back to top or scroll to top is mostly used for the purpose of going down to the page by scrolling. and have go back to the top of the page. so for we are using thi', 'http://www.2my4edge.com/2013/08/animated-scroll-to-top-by-using-jquery.html');
INSERT INTO `demo_web_information` VALUES ('172', 'Rotate image on hover using CSS3', 'Rotate image on image hover using CSS3. now in CSS3 in most flexible to make more animations and more design by using CSS coding. similarly here we are going to see how to make animated rotating image on image hover by using CSS transform code. by using this transform we can rotate the image. and al', 'http://www.2my4edge.com/2013/08/rotate-image-on-hover-using-css3.html');
INSERT INTO `demo_web_information` VALUES ('173', 'Autocomplete search using php, mysql and ajax', 'We know what is autocomplete in input type, that is make some predefined entered texts come under the input type box, while focusing on the input type, similarly we are searching some content from mysql database, this actually facebook style search concept to suggest some data for select before we g', 'http://www.2my4edge.com/2013/08/autocomplete-search-using-php-mysql-and.html');
INSERT INTO `demo_web_information` VALUES ('174', 'Enable right click in right click disabled web pages by disable javascript in browser', 'Most of the site are disabled the right click button for the security purpose. But what we do is try to hack this site, as I said in the previous tutorial right click disabled is not much secured, so we have to use some tricks to enable right click in the right click disable pages. So let see.  This', 'http://www.2my4edge.com/2013/07/enable-right-click-in-right-click.html');
INSERT INTO `demo_web_information` VALUES ('175', 'Disable right click and protect your content from coping using Java script', 'Disable right click button in mouse using javascript, this concept is mostly used for protect your content from coping your copy right content and all, most of the hacker trying to copy your content and try to reveal your secret of your web page, thatâ€™s why this script is using for protect. If we ', 'http://www.2my4edge.com/2013/07/disable-right-click-and-protect-your.html');
INSERT INTO `demo_web_information` VALUES ('176', 'Most popular posts in 2my4edge', 'most popular post in 2my4edge.com, and all kind of tutorials and demos with examples what i done in 2my4edge. focused on php, javascript, mysql, html, css, css3, html5, jquery, plugins, .htaccess, style, design. and more.', 'http://www.2my4edge.com/2013/07/most-popular-posts-in-2my4edge.html');
INSERT INTO `demo_web_information` VALUES ('177', 'Export the MySQL database table as CSV format using PHP', 'Export the database as in the format of CSV to open it in the Microsft office (MS)-Excel. Most the social media sites and E-commerce site and more sites or this kind of database export coding for without going to admin panel, just in one click export the database table as in the format of CSV to ope', 'http://www.2my4edge.com/2013/07/export-mysql-database-table-as-csv.html');
INSERT INTO `demo_web_information` VALUES ('178', 'Create custom file chosen input type using Css and Jquery', 'Usually we know how to give input type file for upload any kind of file in the database, for that we are using form, and in that form we have to give input type=\"file\" for file upload, usually while we are calling the input type as like the above, that will change for each browser, for that and make', 'http://www.2my4edge.com/2013/07/create-custom-file-chosen-input-type.html');
INSERT INTO `demo_web_information` VALUES ('179', 'Change text & background color while selecting text using CSS3', 'Change text color and background color while you are selecting text for copy or any other purpose, make your web page impressive with extra design using this css selection text color change, getting bored of usual selecting color on your web page, so try this code. While selecting content of any web', 'http://www.2my4edge.com/2013/07/change-text-background-color-while.html');
INSERT INTO `demo_web_information` VALUES ('180', 'Marquee style in different manner with PHP and MySql', 'Marquee style scroll using in different manner, such as top to bottom, bottom to top, left to right, right to left, and scroll speed control, like all those details we are going to discuss here. usually all web developer must this tag that is marquee tag, which this marquee tag is used for the purpo', 'http://www.2my4edge.com/2013/07/marquee-tag-style-in-different-manner.html');
INSERT INTO `demo_web_information` VALUES ('181', 'My Demos page design details with all my tutorials', 'php, html, ajax, javascript, jquery, all web development process, web solution. my blogging expreiance, initial stage of my blog, demo pages, every thing comes here under the page demo, check all your needs.', 'http://www.2my4edge.com/2013/07/my-demos-page-design-details-and-all-my.html');
INSERT INTO `demo_web_information` VALUES ('182', 'Simple Login logout system using php', 'Login and logout system is the most important thing for the user management, session management is one important thing for manage the user for the whole time of login time. for that we have to use session for this. it should have 5 files for this. we have to fetch the same value for the user and che', 'http://www.2my4edge.com/2013/07/simple-login-logout-system-using-php.html');
INSERT INTO `demo_web_information` VALUES ('183', 'Username live availability Check using php and Ajax', 'Username live availability is one of the most important thing the database field, why because mostly we have to different kind of username and unique name for all users. then only we can identify the individual user, so for here we are going to check the database field for already existing username ', 'http://www.2my4edge.com/2013/07/username-live-availability-check-using.html');
INSERT INTO `demo_web_information` VALUES ('184', 'How to create custom 404 error page using .htaccess', 'Most of the web pages show the error like 404 page error.  So here we have solution to make the custom web page for that 404 page error by using .HTACCESS.  This 404 error make your website uneasy. So here we are using the HTACCESS file for that. As we know already we discussed here about how to mak', 'http://www.2my4edge.com/2013/07/how-to-create-custom-404-error-page.html');
INSERT INTO `demo_web_information` VALUES ('185', 'Image Zoommer like E-commerce site using multizoom.js', 'Usually we need this kind of image zoom is using in E-commerce site, Why because, they want to show their product with some extra quality, thatâ€™s why they are using this image zoom on their product, here we are going to see how the image zoom get works.', 'http://www.2my4edge.com/2013/07/image-zoommer-like-e-commerce-site.html');
INSERT INTO `demo_web_information` VALUES ('186', 'Facebook style Scroll bar using Jquery', 'Most of them eager to know about facebook and itâ€™s functionality, so here we just know about facebook style scroll bar, how the scroll bar is seems in the facebook, the black color scroll bar and it presence when we hover the part where the scroll is presence, similar like the same style the scrol', 'http://www.2my4edge.com/2013/06/facebook-style-scroll-bar-using-jquery.html');
INSERT INTO `demo_web_information` VALUES ('187', 'Change background image while page refresh using Javascript', 'Are you getting bore of the same background image on your web page, no worries. For each refresh/reload of your web page, change new and new background images using javascript. It is very simple concept by using javascript. This page background change is make is your web page more impressive and not', 'http://www.2my4edge.com/2013/06/change-background-image-while-page.html');
INSERT INTO `demo_web_information` VALUES ('188', 'Browser full screen API using Query', 'Full screen mode of browser, usually for this full screen mode we just press button f11 key, here we are going to see that in coding using fullscreen Jquery. By the help of this coding when we press the location the browser will be as full screen mode, in most of the social media network sites using', 'http://www.2my4edge.com/2013/06/browser-full-screen-api-using-query.html');
INSERT INTO `demo_web_information` VALUES ('189', 'Facebook Style Textarea Auto Grow Using JQuery Plugin and Css', 'Usually textarea is one of the form input type, it is identified by rows and cols, while using Rows and Cols the textarea will be comes like scrolled type for that we are going to disable the scroll bar and grow the textarea.\n\nFor that we are using Textarea autogrow plugin to expand the textarea and', 'http://www.2my4edge.com/2013/06/facebook-style-textarea-auto-grow-using.html');
INSERT INTO `demo_web_information` VALUES ('190', 'Print or Save the Web page as .PDF  Using Java Script', 'Save the web page as .PDF format or directly print the page using printer, we have to connect the printer through the computer and then choose the Designation where and what it should have to do the function, whether print or save the page.', 'http://www.2my4edge.com/2013/06/print-or-save-web-page-as-pdf-using.html');
INSERT INTO `demo_web_information` VALUES ('191', '.htaccess uses and redirect www to non-www and non-www to www', 'Initially I donâ€™t the purpose of .htaccess and now I bought my own domain so, I realized the need of .htaccess, here I just use this .htaccess for redirect website URL www to non-www and non-www to www. Let see how the .htaccess code is works here, and how we want to use this .htaccess.', 'http://www.2my4edge.com/2013/06/htaccess-uses-and-redirect-www-to-non.html');
INSERT INTO `demo_web_information` VALUES ('192', 'Choose state and city based on country using Jquery', 'Itâ€™s  for choosing state and city based on choosing the country, when we choose a country, in a second select option field will show the states, what are all presents in the country, that is the concept. Let see how it works', 'http://www.2my4edge.com/2013/06/choose-state-and-city-based-on-country.html');
INSERT INTO `demo_web_information` VALUES ('193', 'Change the colored image into black and white image on image hover', 'Here we go, changing of colored image into black and white image on image hover. So here we are going to apply the gray-scale property, when the grayscale is on 100% the image will become intoblack and white image. gray-scale', 'http://www.2my4edge.com/2013/06/change-colored-image-into-black-and.html');
INSERT INTO `demo_web_information` VALUES ('194', 'Comment System using PHP and MySql', 'Here we are going to see about comment system suing PHP and MySql, here it is useful to all webpage feedback system like user comments Displays at the end of all WebPages thatâ€™s what we are going to see here', 'http://www.2my4edge.com/2013/05/comment-system-using-php-and-mysql.html');
INSERT INTO `demo_web_information` VALUES ('195', 'Simple concept for Select All text OnClick in textarea', 'generating any kind of code, that will shown in textarea, after that we just click on that textarea that will select all the texts in the textarea, how it works', 'http://www.2my4edge.com/2013/05/simple-concept-for-select-all-text.html');
INSERT INTO `demo_web_information` VALUES ('196', 'Create Database with MySql and INSERT coding in php', 'It is basics of PHP, here we are going to see about How to crate database and how insert the field values in the database table.', 'http://www.2my4edge.com/2013/05/create-database-with-mysql-and-insert.html');
INSERT INTO `demo_web_information` VALUES ('197', 'Create facebook app and invite or bring your friends to site', 'invite facebook friends and bring friends using that facebook application we can bring your facebook friends to your site, for that we have create a facebook app and have to proceed some steps, let see what it is.', 'http://www.2my4edge.com/2013/05/create-facebook-app-and-invite-or-bring.html');
INSERT INTO `demo_web_information` VALUES ('198', 'Floating menu using Jquery plugin', 'floating div or floating menu concept is usually used for the purpose of fixed or absolute positions of ads or some other important thing, so that we are using this floating menu concept, let see how it works with Jquery plugin', 'http://www.2my4edge.com/2013/05/floating-menu-using-jquery-plugin.html');
INSERT INTO `divisions_units` VALUES ('1', '1001', 'DAHRM', 'Administration and Human Resources Management', 'div');
INSERT INTO `divisions_units` VALUES ('2', '1003', 'DPP', 'Planning and Policy', 'div');
INSERT INTO `divisions_units` VALUES ('3', '2001', 'DW', 'Wildlife', 'div');
INSERT INTO `divisions_units` VALUES ('4', '3001', 'DFoB', 'Forestry and Beekeeping', 'div');
INSERT INTO `divisions_units` VALUES ('5', '4001', 'DT', 'Tourism', 'div');
INSERT INTO `divisions_units` VALUES ('6', '4002', 'DOA', 'Antiquities', 'div');
INSERT INTO `divisions_units` VALUES ('7', '1004', 'GCU', 'Government Communication', 'unit');
INSERT INTO `divisions_units` VALUES ('8', '1005', 'CIA', 'Internal Audit', 'unit');
INSERT INTO `divisions_units` VALUES ('9', '1006', 'PMU', 'Procurement Management', 'unit');
INSERT INTO `divisions_units` VALUES ('10', '1007', 'LU', 'Legal', 'unit');
INSERT INTO `divisions_units` VALUES ('11', '1008', 'ICT', 'Information, Communications and Technology', 'unit');
INSERT INTO `divisions_units` VALUES ('12', '1009', 'RTU', 'Research and Training', 'unit');
INSERT INTO `divisions_units` VALUES ('13', '1002', 'CA', 'Finance and Accounts', 'unit');
INSERT INTO `jinsia` VALUES ('1', 'Female', 'Female');
INSERT INTO `jinsia` VALUES ('2', 'Male', 'Male');
INSERT INTO `lgas` VALUES ('255', '36', '2027', 'Mpanda MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '36', '3079', 'Mpanda DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '36', '3140', 'Mlele DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '36', '3142', 'Nsimbo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '36', '3150', 'Mpimbwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '47', '2036', 'Bariadi TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '47', '3059', 'Maswa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '47', '3060', 'Bariadi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '47', '3082', 'Meatu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '47', '3116', 'Busega DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '47', '3139', 'Itilima DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '54', '2026', 'Njombe TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '54', '2028', 'Makambako TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '54', '3018', 'Njombe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '54', '3019', 'Ludewa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '54', '3020', 'Makete DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '54', '3137', 'Wanging\'ombe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '63', '2035', 'Geita TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '63', '3052', 'Geita DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '63', '3090', 'Bukombe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '63', '3107', 'Chato DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '63', '3120', 'Mbogwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '63', '3138', 'Nyang\'hwale DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '2001', 'Arusha CC', 'CC');
INSERT INTO `lgas` VALUES ('255', '70', '3006', 'Monduli DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '3007', 'Ngorongoro DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '3084', 'Karatu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '3098', 'Meru DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '3099', 'Arusha DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '70', '3100', 'Longido DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '2023', 'Kibaha TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '71', '3008', 'Bagamoyo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3009', 'Mafia DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3010', 'Kisarawe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3011', 'Kibaha DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3012', 'Rufiji DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3085', 'Mkuranga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3146', 'Chalinze DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '71', '3147', 'Kibiti DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '2003', 'Dodoma CC', 'CC');
INSERT INTO `lgas` VALUES ('255', '72', '2043', 'Kondoa TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '72', '3014', 'Kondoa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '3015', 'Mpwapwa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '3086', 'Kongwa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '3101', 'Bahi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '3102', 'Chamwino DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '72', '3109', 'Chemba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '73', '2004', 'Iringa MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '73', '2038', 'Mafinga TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '73', '3016', 'Iringa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '73', '3017', 'Mufindi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '73', '3094', 'Kilolo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '2005', 'Kigoma/Ujiji MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '74', '2029', 'Kasulu TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '74', '3021', 'Kigoma DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '3022', 'Kasulu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '3023', 'Kibondo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '3110', 'Kakonko DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '3111', 'Buhigwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '74', '3112', 'Uvinza DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '2009', 'Moshi MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '75', '3024', 'Hai DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '3025', 'Moshi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '3026', 'Rombo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '3027', 'Same  DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '3028', 'Mwanga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '75', '3103', 'Siha DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '76', '2006', 'Lindi MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '76', '3029', 'Nachingwea DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '76', '3030', 'Kilwa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '76', '3031', 'Liwale DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '76', '3032', 'Lindi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '76', '3092', 'Ruangwa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '2011', 'Musoma MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '77', '2037', 'Tarime TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '77', '2040', 'Bunda TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '77', '3033', 'Bunda DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '3034', 'Musoma DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '3035', 'Serengeti DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '3036', 'Tarime DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '3104', 'Rorya DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '77', '3113', 'Butiama DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '2007', 'Mbeya CC', 'CC');
INSERT INTO `lgas` VALUES ('255', '78', '3037', 'Chunya DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '3039', 'Kyela DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '3040', 'Mbeya DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '3042', 'Rungwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '3087', 'Mbarali DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '78', '3152', 'Busokelo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '2008', 'Morogoro MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '79', '2041', 'Ifakara TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '79', '3043', 'Morogoro DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3044', 'Kilosa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3045', 'Kilombero DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3046', 'Ulanga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3096', 'Mvomero DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3115', 'Gairo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '79', '3144', 'Malinyi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '80', '2010', 'Mtwara Mikindani MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '80', '2031', 'Masasi TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '80', '2039', 'Nanyamba TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '80', '2042', 'Newala TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '80', '3047', 'Mtwara DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '80', '3048', 'Newala DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '80', '3049', 'Masasi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '80', '3088', 'Tandahimba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '80', '3105', 'Nanyumbu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '2012', 'Mwanza CC', 'CC');
INSERT INTO `lgas` VALUES ('255', '81', '2032', 'Ilemela MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '81', '3050', 'Ukerewe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '3051', 'Sengerema DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '3053', 'Kwimba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '3054', 'Magu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '3089', 'Misungwi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '81', '3151', 'Buchosa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '2015', 'Songea MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '82', '2045', 'Mbinga TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '82', '3055', 'Songea DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '3056', 'Tunduru DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '3057', 'Mbinga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '3097', 'Namtumbo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '3117', 'Nyasa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '82', '3148', 'Madaba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '83', '2013', 'Shinyanga MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '83', '2033', 'Kahama TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '83', '3058', 'Shinyanga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '83', '3095', 'Kishapu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '83', '3118', 'Ushetu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '83', '3119', 'Msalala DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '2014', 'Singida MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '84', '3062', 'Singida DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '3063', 'Iramba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '3064', 'Manyoni DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '3121', 'Ikungi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '3122', 'Mkalama DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '84', '3145', 'Itigi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '2017', 'Tabora MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '85', '2034', 'Nzega TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '85', '3065', 'Igunga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '3066', 'Nzega DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '3067', 'Tabora - Uyui DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '3068', 'Urambo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '3091', 'Sikonge DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '85', '3123', 'Kaliua DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '2018', 'Tanga CC', 'CC');
INSERT INTO `lgas` VALUES ('255', '86', '2025', 'Korogwe TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '86', '2048', 'Handeni TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '86', '3069', 'Muheza DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3070', 'Pangani DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3071', 'Korogwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3072', 'Handeni DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3073', 'Lushoto DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3093', 'Kilindi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3106', 'Mkinga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '86', '3141', 'Bumbuli DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '2002', 'Bukoba MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '87', '3074', 'Karagwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3075', 'Biharamulo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3076', 'Muleba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3077', 'Bukoba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3078', 'Ngara DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3108', 'Missenyi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '87', '3125', 'Kyerwa DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '88', '2019', 'Ilala MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '88', '2020', 'Kinondoni MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '88', '2021', 'Temeke MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '88', '2049', 'Kigamboni MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '88', '2050', 'Ubungo MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '89', '2016', 'Sumbawanga MC', 'MC');
INSERT INTO `lgas` VALUES ('255', '89', '3080', 'Sumbawanga DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '89', '3081', 'Nkasi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '89', '3136', 'Kalambo DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '90', '2030', 'Tunduma TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '90', '3038', 'Ileje DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '90', '3041', 'Mbozi DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '90', '3114', 'Momba DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '90', '3149', 'Songwe DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '95', '2024', 'Babati TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '95', '2044', 'Mbulu TC', 'TC');
INSERT INTO `lgas` VALUES ('255', '95', '3002', 'Babati DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '95', '3003', 'Hanang DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '95', '3004', 'Kiteto DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '95', '3005', 'Mbulu DC', 'DC');
INSERT INTO `lgas` VALUES ('255', '95', '3083', 'Simanjiro DC', 'DC');
INSERT INTO `logbooks_za_magari` VALUES ('3', 'RSTD0000000001', 'STL 0054', '1', 'Swaga', '27-07-2020', '23:55', 'Kikazi', 'Rosalia', 'William', 'Msaki', 'TZ100003', '11111111', 'Mtumba', '27-07-2020', '23:59', 'Kikazi', 'Rosalia', 'William', 'Msaki', 'TZ100003', '11111111', '200', '80', '208', '78.67', null, '8', '1.33', '6.02', 'Alphonce D. Milazo', '22224444', 'Alphonce D. Milazo', '22224444', 'William', 'Alphonce', 'Masika', 'TZ100001', '22222222', null, 'William', 'Alphonce', 'Masika', 'TZ100001', '22222222', null);
INSERT INTO `logbooks_za_magari` VALUES ('4', 'RSTD0000000001', 'STL 0054', '2', 'Mtumba', '01-08-2020', '13:20', 'Ofisi', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', 'Swagaswaga', '01-08-2020', '13:23', 'Ofisi', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', '208', '78.67', '233', '74.5', null, '25', '4.17', '6.00', 'Alphonce D. Milazo', '22224444', 'Alphonce D. Milazo', '22224444', '', '', '', '', '', null, '', '', '', '', '', null);
INSERT INTO `logbooks_za_magari` VALUES ('5', 'RSTD0000000001', 'STL 0054', '3', 'Swagaswaga', '01-08-2020', '13:28', 'Mafuta', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', 'Bohari', '01-08-2020', '13:30', 'Mafuta', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', '233', '74.5', '247', '142.5', '70', '14', '2', '7.00', 'Alphonce D. Milazo', '22224444', 'Alphonce D. Milazo', '22224444', '', '', '', '', '', null, '', '', '', '', '', null);
INSERT INTO `logbooks_za_magari` VALUES ('6', 'RSTD0000000001', 'STL 0054', '4', 'Bohari', '01-08-2020', '17:05', 'Kuweka mafuta', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', 'Swagaswaga', '01-08-2020', '17:58', 'Kurudi ofisini', 'Jackson', 'Vincent', 'Msaki', 'TZ210075', '33333333', '247', '142.5', '258', '140.93', null, '11', '1.57', '7.01', 'Alphonce D. Milazo', '22224444', 'Alphonce D. Milazo', '22224444', '', '', '', '', '', null, '', '', '', '', '', null);
INSERT INTO `maamuzi_dahrm` VALUES ('2', 'kimekataliwa_dahrm', 'Sikubali');
INSERT INTO `maamuzi_dahrm` VALUES ('1', 'kimepitishwa_dahrm', 'Nakubali');
INSERT INTO `maamuzi_dahrm` VALUES ('3', 'maelekezo_dahrm', 'Maelekezo');
INSERT INTO `maamuzi_hod_u` VALUES ('2', 'kimekataliwa_hod_u', 'Sikubali');
INSERT INTO `maamuzi_hod_u` VALUES ('1', 'kimepitishwa_hod_u', 'Nakubali');
INSERT INTO `maamuzi_hod_u` VALUES ('3', 'maelekezo_hod_u', 'Maelekezo');
INSERT INTO `maamuzi_hos` VALUES ('2', 'kimekataliwa_hos', 'Sikubali');
INSERT INTO `maamuzi_hos` VALUES ('1', 'kimepitishwa_hos', 'Nakubali');
INSERT INTO `maamuzi_hos` VALUES ('3', 'maelekezo_hos', 'Maelekezo');
INSERT INTO `maamuzi_ps` VALUES ('2', 'kimekataliwa_ps', 'Sikubali');
INSERT INTO `maamuzi_ps` VALUES ('1', 'kimepitishwa_ps', 'Nakubali');
INSERT INTO `maamuzi_ps` VALUES ('3', 'maelekezo_ps', 'Maelekezo');
INSERT INTO `madhumuni` VALUES ('1', 'Warsha');
INSERT INTO `madhumuni` VALUES ('2', 'Semina');
INSERT INTO `madhumuni` VALUES ('3', 'Mafunzo');
INSERT INTO `madhumuni` VALUES ('4', 'Ukaguzi');
INSERT INTO `madhumuni` VALUES ('5', 'Maonesho');
INSERT INTO `madhumuni` VALUES ('6', 'Kikao Kazi');
INSERT INTO `madhumuni` VALUES ('8', 'Tathmini na Ufuatiliaji');
INSERT INTO `madhumuni` VALUES ('7', 'Shughuli za Kitafiti');
INSERT INTO `madhumuni` VALUES ('9', 'Kuazimwa Kikazi Nje ya Wizara');
INSERT INTO `madhumuni` VALUES ('10', 'Kuhudhuria Kongamano');
INSERT INTO `madhumuni` VALUES ('11', 'Masomo ya Muda Mfupi');
INSERT INTO `madhumuni` VALUES ('12', 'Masomo ya Muda Mrefu');
INSERT INTO `madhumuni` VALUES ('13', 'Mashindano ya Sanaa/Michezo');
INSERT INTO `mafuta` VALUES ('2', null, null, '2', null, '22224444', '154.80', '13.87', '80000.00', '72.50', '70.00', '142.50', '13.87', '247.00', '258.00', '11.00', '140.93', '06-08-2020', null, 'ameona_dahrm', null, null, null, 'napendekeza', null, '13.87', '06-08-2020', null, 'napendekeza', null, '13.87', '06-08-2020', null);
INSERT INTO `magari` VALUES ('1', 'RSTD0000000001', 'Diesel', '200', 'STL 0054', 'Toyota Landcruiser V8', '250000', 'STL 0054 Toyota Landcruiser V8', '6.46', '3200000', 'A.D Milazo', '22224444', 'R.P John - Afisa Sheria Mkuu I', '98989898');
INSERT INTO `magari` VALUES ('2', 'RSTD0000000002', 'Diesel', '200', 'STL 1920', 'Toyota Landcruiser Hard Top', '320000', 'STL 1920 Toyota Landcruiser Hard Top', '6', '1500000', '', '', '', '');
INSERT INTO `magari` VALUES ('3', 'RSTD0000000003', 'Diesel', '200', 'STL 7685', 'Toyota Landcruiser V8', '90000', 'STL 7685 Toyota Landcruiser V8', '6', '640000', '', '', null, null);
INSERT INTO `magari` VALUES ('4', 'RSTD0000000004', 'Diesel', '200', 'STL 2389', 'Toyota Landcruiser Prado TL', '198000', 'STL 2389 Toyota Landcruiser Prado TL', '6', '220000', '', null, null, null);
INSERT INTO `magari` VALUES ('5', 'RSTD0000000005', 'Petrol', '200', 'STL 1211', 'Toyota Landcruiser VX', '450000', 'STL 1211 Toyota Landcruiser VX', '6', '12000000', '', '', '', '');
INSERT INTO `magari` VALUES ('13', 'RSTD0000000050', 'Diesel', '200', 'STL 212', 'Toyota Landcruiser TLX', '0', 'STL 212 Toyota Landcruiser TLX', '6', '0', '', null, null, null);
INSERT INTO `magari` VALUES ('14', 'RSTD0000000033', 'Diesel', '200', 'SXL 2010', 'BMW X5', '21', 'SXL 2010 BMW X5', '6', '0', '', null, null, null);
INSERT INTO `masurufu` VALUES ('0', '2', 'PPPP2222', '2', '01-08-2020', 'FY 2019-2020', 'ya_safari', '2', null, null, '22224444', null, '180000.00', null, '100000.00', null, null, null, '80000.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Sidaiwi', null, null, '01-08-2020', null, 'ameona_tae', 'Anadaiwa', '180000.00', null, null, '01-08-2020', 'napendekeza', null, '80000.00', null, '01-08-2020', null, null, null, null, 'naidhinisha', null, '180000.00', '691008000000-E01S03-0000-020201101', '01-08-2020', 'naidhinisha', null, '180000', '01-08-2020', '-20');
INSERT INTO `masurufu` VALUES ('2', 'amejaza_dereva', 'PPPPQQQQ', '1', '01-08-2020', 'FY 2019-2020', 'ya_safari', '2', null, null, '98989898', 'rewsfsfsfsfsfsfsfsfsfdfsdffsf', '120000.00', '120000', '120000.00', null, null, null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, null, null, null, null, '1.00', null, null, 'Sidaiwi', null, null, '28-07-2020', null, 'ameona_tae', 'Anadaiwa', '120000.00', null, null, '01-08-2020', 'napendekeza', null, '120000.00', null, '01-08-2020', null, null, null, null, 'naidhinisha', null, '120000.00', '691008000000-E01S03-0000-020201101', '01-08-2020', 'naidhinisha', null, '120000', '01-08-2020', '-20');
INSERT INTO `mdau_mrejesho` VALUES ('1', 'Satisfied');
INSERT INTO `mdau_mrejesho` VALUES ('2', 'Average');
INSERT INTO `mdau_mrejesho` VALUES ('3', 'Not satisfied');
INSERT INTO `mdau_ps_action` VALUES ('1', 'vetted', 'Vetted');
INSERT INTO `mdau_ps_action` VALUES ('2', 'not_vetted', 'Not Vetted');
INSERT INTO `miezi` VALUES ('1', 'July', 'July', 'Q1');
INSERT INTO `miezi` VALUES ('2', 'August', 'August', 'Q1');
INSERT INTO `miezi` VALUES ('3', 'September', 'September', 'Q1');
INSERT INTO `miezi` VALUES ('4', 'October', 'October', 'Q2');
INSERT INTO `miezi` VALUES ('5', 'November', 'November', 'Q2');
INSERT INTO `miezi` VALUES ('6', 'December', 'December', 'Q2');
INSERT INTO `miezi` VALUES ('7', 'January', 'January', 'Q3');
INSERT INTO `miezi` VALUES ('8', 'February', 'February', 'Q3');
INSERT INTO `miezi` VALUES ('9', 'March', 'March', 'Q3');
INSERT INTO `miezi` VALUES ('10', 'April', 'April', 'Q4');
INSERT INTO `miezi` VALUES ('11', 'May', 'May', 'Q4');
INSERT INTO `miezi` VALUES ('12', 'June', 'June', 'Q4');
INSERT INTO `mlipaji` VALUES ('1', '1001', 'DAHRM', 'Division of Administration and Human Resource Management');
INSERT INTO `mlipaji` VALUES ('2', '1003', 'DPP', 'Division of Planning and Policy');
INSERT INTO `mlipaji` VALUES ('3', '2001', 'DW', 'Division of Wildlife');
INSERT INTO `mlipaji` VALUES ('4', '3001', 'DFoB', 'Division of Forestry and Beekeeping');
INSERT INTO `mlipaji` VALUES ('5', '4001', 'DT', 'Division of Tourism');
INSERT INTO `mlipaji` VALUES ('6', '4002', 'DOA', 'Division of Antiquities');
INSERT INTO `mlipaji` VALUES ('7', '1004', 'GCU', 'Government Communication Unit');
INSERT INTO `mlipaji` VALUES ('8', '1005', 'CIA', 'Internal Audit Unit');
INSERT INTO `mlipaji` VALUES ('9', '1006', 'PMU', 'Procurement Management Unit');
INSERT INTO `mlipaji` VALUES ('10', '1007', 'LU', 'Legal Unit');
INSERT INTO `mlipaji` VALUES ('11', '1008', 'ICT', 'Information, Communications and Technology Unit');
INSERT INTO `mlipaji` VALUES ('12', '1009', 'RTU', 'Research and Training Unit');
INSERT INTO `mlipaji` VALUES ('13', '30', 'Project:  CBGRAU', 'Project:  Capacity Building in Game Reserves and Anti-Poaching Unit in Tanzania');
INSERT INTO `mlipaji` VALUES ('14', '31', 'Project:  SNRM', 'Project:  Sustainable Natural Resources Managemnet in Tanzania');
INSERT INTO `mlipaji` VALUES ('15', '32', 'Project:  EFNRBC', 'Project:  Enhancing the Forest Nature Reserves Network for Biodiversity Conservation in TZ');
INSERT INTO `mlipaji` VALUES ('16', '33', 'Project:  CBFB', 'Project:  Capacity Building in Forestry and Beekeeping');
INSERT INTO `mlipaji` VALUES ('17', '34', 'Project:  NRM-LED', 'Project:  Natural Resources Management for Local Economic Development');
INSERT INTO `mlipaji` VALUES ('18', '35', 'Project:  FORVAC', 'Project:  Forest and Value Chain Development');
INSERT INTO `mlipaji` VALUES ('19', '36', 'Project:  REGROW', 'Project:  Resillient Natural Resources for Tourism and Growth');
INSERT INTO `mlipaji` VALUES ('20', 'wengine', 'Mlipaji Mwingine...', '');
INSERT INTO `nchi` VALUES ('1', '93', 'Afghanistan');
INSERT INTO `nchi` VALUES ('2', '355', 'Albania');
INSERT INTO `nchi` VALUES ('3', '213', 'Algeria');
INSERT INTO `nchi` VALUES ('4', '1-684', 'American Samoa');
INSERT INTO `nchi` VALUES ('5', '376', 'Andorra');
INSERT INTO `nchi` VALUES ('6', '244', 'Angola');
INSERT INTO `nchi` VALUES ('7', '1-264', 'Anguilla');
INSERT INTO `nchi` VALUES ('8', '672', 'Antarctica');
INSERT INTO `nchi` VALUES ('9', '1-268', 'Antigua and Barbuda');
INSERT INTO `nchi` VALUES ('10', '54', 'Argentina');
INSERT INTO `nchi` VALUES ('11', '374', 'Armenia');
INSERT INTO `nchi` VALUES ('12', '297', 'Aruba');
INSERT INTO `nchi` VALUES ('13', '61', 'Australia');
INSERT INTO `nchi` VALUES ('14', '43', 'Austria');
INSERT INTO `nchi` VALUES ('15', '994', 'Azerbaijan');
INSERT INTO `nchi` VALUES ('16', '1-242', 'Bahamas');
INSERT INTO `nchi` VALUES ('17', '973', 'Bahrain');
INSERT INTO `nchi` VALUES ('18', '880', 'Bangladesh');
INSERT INTO `nchi` VALUES ('19', '1-246', 'Barbados');
INSERT INTO `nchi` VALUES ('20', '375', 'Belarus');
INSERT INTO `nchi` VALUES ('21', '32', 'Belgium');
INSERT INTO `nchi` VALUES ('22', '501', 'Belize');
INSERT INTO `nchi` VALUES ('23', '229', 'Benin');
INSERT INTO `nchi` VALUES ('24', '1-441', 'Bermuda');
INSERT INTO `nchi` VALUES ('25', '975', 'Bhutan');
INSERT INTO `nchi` VALUES ('26', '591', 'Bolivia');
INSERT INTO `nchi` VALUES ('27', '387', 'Bosnia and Herzegovina');
INSERT INTO `nchi` VALUES ('28', '267', 'Botswana');
INSERT INTO `nchi` VALUES ('29', '55', 'Brazil');
INSERT INTO `nchi` VALUES ('30', '246', 'British Indian Ocean Territory');
INSERT INTO `nchi` VALUES ('31', '1-284', 'British Virgin Islands');
INSERT INTO `nchi` VALUES ('32', '673', 'Brunei');
INSERT INTO `nchi` VALUES ('33', '359', 'Bulgaria');
INSERT INTO `nchi` VALUES ('34', '226', 'Burkina Faso');
INSERT INTO `nchi` VALUES ('35', '257', 'Burundi');
INSERT INTO `nchi` VALUES ('36', '855', 'Cambodia');
INSERT INTO `nchi` VALUES ('37', '237', 'Cameroon');
INSERT INTO `nchi` VALUES ('38', '1', 'Canada');
INSERT INTO `nchi` VALUES ('39', '238', 'Cape Verde');
INSERT INTO `nchi` VALUES ('40', '1-345', 'Cayman Islands');
INSERT INTO `nchi` VALUES ('41', '236', 'Central African Republic');
INSERT INTO `nchi` VALUES ('42', '235', 'Chad');
INSERT INTO `nchi` VALUES ('43', '56', 'Chile');
INSERT INTO `nchi` VALUES ('44', '86', 'China');
INSERT INTO `nchi` VALUES ('45', '61', 'Christmas Island');
INSERT INTO `nchi` VALUES ('46', '61', 'Cocos Islands');
INSERT INTO `nchi` VALUES ('47', '57', 'Colombia');
INSERT INTO `nchi` VALUES ('48', '269', 'Comoros');
INSERT INTO `nchi` VALUES ('49', '682', 'Cook Islands');
INSERT INTO `nchi` VALUES ('50', '506', 'Costa Rica');
INSERT INTO `nchi` VALUES ('51', '385', 'Croatia');
INSERT INTO `nchi` VALUES ('52', '53', 'Cuba');
INSERT INTO `nchi` VALUES ('53', '599', 'Curacao');
INSERT INTO `nchi` VALUES ('54', '357', 'Cyprus');
INSERT INTO `nchi` VALUES ('55', '420', 'Czech Republic');
INSERT INTO `nchi` VALUES ('56', '243', 'Democratic Republic of the Congo');
INSERT INTO `nchi` VALUES ('57', '45', 'Denmark');
INSERT INTO `nchi` VALUES ('58', '253', 'Djibouti');
INSERT INTO `nchi` VALUES ('59', '1-767', 'Dominica');
INSERT INTO `nchi` VALUES ('60', '1-809, 1-829, 1-849', 'Dominican Republic');
INSERT INTO `nchi` VALUES ('61', '670', 'East Timor');
INSERT INTO `nchi` VALUES ('62', '593', 'Ecuador');
INSERT INTO `nchi` VALUES ('63', '20', 'Egypt');
INSERT INTO `nchi` VALUES ('64', '503', 'El Salvador');
INSERT INTO `nchi` VALUES ('65', '240', 'Equatorial Guinea');
INSERT INTO `nchi` VALUES ('66', '291', 'Eritrea');
INSERT INTO `nchi` VALUES ('67', '372', 'Estonia');
INSERT INTO `nchi` VALUES ('68', '251', 'Ethiopia');
INSERT INTO `nchi` VALUES ('69', '500', 'Falkland Islands');
INSERT INTO `nchi` VALUES ('70', '298', 'Faroe Islands');
INSERT INTO `nchi` VALUES ('71', '679', 'Fiji');
INSERT INTO `nchi` VALUES ('72', '358', 'Finland');
INSERT INTO `nchi` VALUES ('73', '33', 'France');
INSERT INTO `nchi` VALUES ('74', '689', 'French Polynesia');
INSERT INTO `nchi` VALUES ('75', '241', 'Gabon');
INSERT INTO `nchi` VALUES ('76', '220', 'Gambia');
INSERT INTO `nchi` VALUES ('77', '995', 'Georgia');
INSERT INTO `nchi` VALUES ('78', '49', 'Germany');
INSERT INTO `nchi` VALUES ('79', '233', 'Ghana');
INSERT INTO `nchi` VALUES ('80', '350', 'Gibraltar');
INSERT INTO `nchi` VALUES ('81', '30', 'Greece');
INSERT INTO `nchi` VALUES ('82', '299', 'Greenland');
INSERT INTO `nchi` VALUES ('83', '1-473', 'Grenada');
INSERT INTO `nchi` VALUES ('84', '1-671', 'Guam');
INSERT INTO `nchi` VALUES ('85', '502', 'Guatemala');
INSERT INTO `nchi` VALUES ('86', '44-1481', 'Guernsey');
INSERT INTO `nchi` VALUES ('87', '224', 'Guinea');
INSERT INTO `nchi` VALUES ('88', '245', 'Guinea-Bissau');
INSERT INTO `nchi` VALUES ('89', '592', 'Guyana');
INSERT INTO `nchi` VALUES ('90', '509', 'Haiti');
INSERT INTO `nchi` VALUES ('91', '504', 'Honduras');
INSERT INTO `nchi` VALUES ('92', '852', 'Hong Kong');
INSERT INTO `nchi` VALUES ('93', '36', 'Hungary');
INSERT INTO `nchi` VALUES ('94', '354', 'Iceland');
INSERT INTO `nchi` VALUES ('95', '91', 'India');
INSERT INTO `nchi` VALUES ('96', '62', 'Indonesia');
INSERT INTO `nchi` VALUES ('97', '98', 'Iran');
INSERT INTO `nchi` VALUES ('98', '964', 'Iraq');
INSERT INTO `nchi` VALUES ('99', '353', 'Ireland');
INSERT INTO `nchi` VALUES ('100', '44-1624', 'Isle of Man');
INSERT INTO `nchi` VALUES ('101', '972', 'Israel');
INSERT INTO `nchi` VALUES ('102', '39', 'Italy');
INSERT INTO `nchi` VALUES ('103', '225', 'Ivory Coast');
INSERT INTO `nchi` VALUES ('104', '1-876', 'Jamaica');
INSERT INTO `nchi` VALUES ('105', '81', 'Japan');
INSERT INTO `nchi` VALUES ('106', '44-1534', 'Jersey');
INSERT INTO `nchi` VALUES ('107', '962', 'Jordan');
INSERT INTO `nchi` VALUES ('108', '7', 'Kazakhstan');
INSERT INTO `nchi` VALUES ('109', '254', 'Kenya');
INSERT INTO `nchi` VALUES ('110', '686', 'Kiribati');
INSERT INTO `nchi` VALUES ('111', '383', 'Kosovo');
INSERT INTO `nchi` VALUES ('112', '965', 'Kuwait');
INSERT INTO `nchi` VALUES ('113', '996', 'Kyrgyzstan');
INSERT INTO `nchi` VALUES ('114', '856', 'Laos');
INSERT INTO `nchi` VALUES ('115', '371', 'Latvia');
INSERT INTO `nchi` VALUES ('116', '961', 'Lebanon');
INSERT INTO `nchi` VALUES ('117', '266', 'Lesotho');
INSERT INTO `nchi` VALUES ('118', '231', 'Liberia');
INSERT INTO `nchi` VALUES ('119', '218', 'Libya');
INSERT INTO `nchi` VALUES ('120', '423', 'Liechtenstein');
INSERT INTO `nchi` VALUES ('121', '370', 'Lithuania');
INSERT INTO `nchi` VALUES ('122', '352', 'Luxembourg');
INSERT INTO `nchi` VALUES ('123', '853', 'Macau');
INSERT INTO `nchi` VALUES ('124', '389', 'Macedonia');
INSERT INTO `nchi` VALUES ('125', '261', 'Madagascar');
INSERT INTO `nchi` VALUES ('126', '265', 'Malawi');
INSERT INTO `nchi` VALUES ('127', '60', 'Malaysia');
INSERT INTO `nchi` VALUES ('128', '960', 'Maldives');
INSERT INTO `nchi` VALUES ('129', '223', 'Mali');
INSERT INTO `nchi` VALUES ('130', '356', 'Malta');
INSERT INTO `nchi` VALUES ('131', '692', 'Marshall Islands');
INSERT INTO `nchi` VALUES ('132', '222', 'Mauritania');
INSERT INTO `nchi` VALUES ('133', '230', 'Mauritius');
INSERT INTO `nchi` VALUES ('134', '262', 'Mayotte');
INSERT INTO `nchi` VALUES ('135', '52', 'Mexico');
INSERT INTO `nchi` VALUES ('136', '691', 'Micronesia');
INSERT INTO `nchi` VALUES ('137', '373', 'Moldova');
INSERT INTO `nchi` VALUES ('138', '377', 'Monaco');
INSERT INTO `nchi` VALUES ('139', '976', 'Mongolia');
INSERT INTO `nchi` VALUES ('140', '382', 'Montenegro');
INSERT INTO `nchi` VALUES ('141', '1-664', 'Montserrat');
INSERT INTO `nchi` VALUES ('142', '212', 'Morocco');
INSERT INTO `nchi` VALUES ('143', '258', 'Mozambique');
INSERT INTO `nchi` VALUES ('144', '95', 'Myanmar');
INSERT INTO `nchi` VALUES ('145', '264', 'Namibia');
INSERT INTO `nchi` VALUES ('146', '674', 'Nauru');
INSERT INTO `nchi` VALUES ('147', '977', 'Nepal');
INSERT INTO `nchi` VALUES ('148', '31', 'Netherlands');
INSERT INTO `nchi` VALUES ('149', '599', 'Netherlands Antilles');
INSERT INTO `nchi` VALUES ('150', '687', 'New Caledonia');
INSERT INTO `nchi` VALUES ('151', '64', 'New Zealand');
INSERT INTO `nchi` VALUES ('152', '505', 'Nicaragua');
INSERT INTO `nchi` VALUES ('153', '227', 'Niger');
INSERT INTO `nchi` VALUES ('154', '234', 'Nigeria');
INSERT INTO `nchi` VALUES ('155', '683', 'Niue');
INSERT INTO `nchi` VALUES ('156', '850', 'North Korea');
INSERT INTO `nchi` VALUES ('157', '1-670', 'Northern Mariana Islands');
INSERT INTO `nchi` VALUES ('158', '47', 'Norway');
INSERT INTO `nchi` VALUES ('159', '968', 'Oman');
INSERT INTO `nchi` VALUES ('160', '92', 'Pakistan');
INSERT INTO `nchi` VALUES ('161', '680', 'Palau');
INSERT INTO `nchi` VALUES ('162', '970', 'Palestine');
INSERT INTO `nchi` VALUES ('163', '507', 'Panama');
INSERT INTO `nchi` VALUES ('164', '675', 'Papua New Guinea');
INSERT INTO `nchi` VALUES ('165', '595', 'Paraguay');
INSERT INTO `nchi` VALUES ('166', '51', 'Peru');
INSERT INTO `nchi` VALUES ('167', '63', 'Philippines');
INSERT INTO `nchi` VALUES ('168', '64', 'Pitcairn');
INSERT INTO `nchi` VALUES ('169', '48', 'Poland');
INSERT INTO `nchi` VALUES ('170', '351', 'Portugal');
INSERT INTO `nchi` VALUES ('171', '1-787, 1-939', 'Puerto Rico');
INSERT INTO `nchi` VALUES ('172', '974', 'Qatar');
INSERT INTO `nchi` VALUES ('173', '242', 'Republic of the Congo');
INSERT INTO `nchi` VALUES ('174', '262', 'Reunion');
INSERT INTO `nchi` VALUES ('175', '40', 'Romania');
INSERT INTO `nchi` VALUES ('176', '7', 'Russia');
INSERT INTO `nchi` VALUES ('177', '250', 'Rwanda');
INSERT INTO `nchi` VALUES ('178', '590', 'Saint Barthelemy');
INSERT INTO `nchi` VALUES ('179', '290', 'Saint Helena');
INSERT INTO `nchi` VALUES ('180', '1-869', 'Saint Kitts and Nevis');
INSERT INTO `nchi` VALUES ('181', '1-758', 'Saint Lucia');
INSERT INTO `nchi` VALUES ('182', '590', 'Saint Martin');
INSERT INTO `nchi` VALUES ('183', '508', 'Saint Pierre and Miquelon');
INSERT INTO `nchi` VALUES ('184', '1-784', 'Saint Vincent and the Grenadines');
INSERT INTO `nchi` VALUES ('185', '685', 'Samoa');
INSERT INTO `nchi` VALUES ('186', '378', 'San Marino');
INSERT INTO `nchi` VALUES ('187', '239', 'Sao Tome and Principe');
INSERT INTO `nchi` VALUES ('188', '966', 'Saudi Arabia');
INSERT INTO `nchi` VALUES ('189', '221', 'Senegal');
INSERT INTO `nchi` VALUES ('190', '381', 'Serbia');
INSERT INTO `nchi` VALUES ('191', '248', 'Seychelles');
INSERT INTO `nchi` VALUES ('192', '232', 'Sierra Leone');
INSERT INTO `nchi` VALUES ('193', '65', 'Singapore');
INSERT INTO `nchi` VALUES ('194', '1-721', 'Sint Maarten');
INSERT INTO `nchi` VALUES ('195', '421', 'Slovakia');
INSERT INTO `nchi` VALUES ('196', '386', 'Slovenia');
INSERT INTO `nchi` VALUES ('197', '677', 'Solomon Islands');
INSERT INTO `nchi` VALUES ('198', '252', 'Somalia');
INSERT INTO `nchi` VALUES ('199', '27', 'South Africa');
INSERT INTO `nchi` VALUES ('200', '82', 'South Korea');
INSERT INTO `nchi` VALUES ('201', '211', 'South Sudan');
INSERT INTO `nchi` VALUES ('202', '34', 'Spain');
INSERT INTO `nchi` VALUES ('203', '94', 'Sri Lanka');
INSERT INTO `nchi` VALUES ('204', '249', 'Sudan');
INSERT INTO `nchi` VALUES ('205', '597', 'Suriname');
INSERT INTO `nchi` VALUES ('206', '47', 'Svalbard and Jan Mayen');
INSERT INTO `nchi` VALUES ('207', '268', 'Swaziland');
INSERT INTO `nchi` VALUES ('208', '46', 'Sweden');
INSERT INTO `nchi` VALUES ('209', '41', 'Switzerland');
INSERT INTO `nchi` VALUES ('210', '963', 'Syria');
INSERT INTO `nchi` VALUES ('211', '886', 'Taiwan');
INSERT INTO `nchi` VALUES ('212', '992', 'Tajikistan');
INSERT INTO `nchi` VALUES ('213', '255', 'Tanzania');
INSERT INTO `nchi` VALUES ('214', '66', 'Thailand');
INSERT INTO `nchi` VALUES ('215', '228', 'Togo');
INSERT INTO `nchi` VALUES ('216', '690', 'Tokelau');
INSERT INTO `nchi` VALUES ('217', '676', 'Tonga');
INSERT INTO `nchi` VALUES ('218', '1-868', 'Trinidad and Tobago');
INSERT INTO `nchi` VALUES ('219', '216', 'Tunisia');
INSERT INTO `nchi` VALUES ('220', '90', 'Turkey');
INSERT INTO `nchi` VALUES ('221', '993', 'Turkmenistan');
INSERT INTO `nchi` VALUES ('222', '1-649', 'Turks and Caicos Islands');
INSERT INTO `nchi` VALUES ('223', '688', 'Tuvalu');
INSERT INTO `nchi` VALUES ('224', '1-340', 'U.S. Virgin Islands');
INSERT INTO `nchi` VALUES ('225', '256', 'Uganda');
INSERT INTO `nchi` VALUES ('226', '380', 'Ukraine');
INSERT INTO `nchi` VALUES ('227', '971', 'United Arab Emirates');
INSERT INTO `nchi` VALUES ('228', '44', 'United Kingdom');
INSERT INTO `nchi` VALUES ('229', '1', 'United States');
INSERT INTO `nchi` VALUES ('230', '598', 'Uruguay');
INSERT INTO `nchi` VALUES ('231', '998', 'Uzbekistan');
INSERT INTO `nchi` VALUES ('232', '678', 'Vanuatu');
INSERT INTO `nchi` VALUES ('233', '379', 'Vatican');
INSERT INTO `nchi` VALUES ('234', '58', 'Venezuela');
INSERT INTO `nchi` VALUES ('235', '84', 'Vietnam');
INSERT INTO `nchi` VALUES ('236', '681', 'Wallis and Futuna');
INSERT INTO `nchi` VALUES ('237', '212', 'Western Sahara');
INSERT INTO `nchi` VALUES ('238', '967', 'Yemen');
INSERT INTO `nchi` VALUES ('239', '260', 'Zambia');
INSERT INTO `nchi` VALUES ('240', '263', 'Zimbabwe');
INSERT INTO `ongeza_mafuta` VALUES ('3', '3', '5', 'RSTD0000000001', 'STL 0054', 'Bohari', '01-08-2020', '13:32', '247', '72.5', '70', '142.5');
INSERT INTO `orglevels` VALUES ('rs', 'Mkoani');
INSERT INTO `orglevels` VALUES ('lga', 'Halmashauri');
INSERT INTO `posho_za_safari` VALUES ('1', 'LSSJ ', '1', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('2', 'LSSJ ', '2', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('3', 'LSSJ ', '3', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('4', 'LSSE ', '1', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('5', 'LSSE ', '2', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('6', 'LSSE ', '3', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('7', 'LSSE ', '4', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('8', 'LSSE ', '5', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('9', 'LSSE ', '6', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('10', 'LSSE ', '7', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('11', 'LSSE ', '8', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('12', 'LSSE ', '9', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('13', 'LSSP1', '1', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('14', 'LSSP2', '2', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('15', 'LSSP3', '3', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('16', 'LSSP4', '4', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('17', 'LSSP5', '5', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('18', 'LSSP6', '6', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('19', 'TGS ', 'I', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('20', 'TGS ', 'H', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('21', 'TGS ', 'G', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('22', 'TGS ', 'F', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('23', 'TGS ', 'E', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('24', 'TGS ', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('25', 'TGS ', 'C', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('26', 'TGS ', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('27', 'TGS ', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('28', 'TGOS', 'C', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('29', 'TGOS', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('30', 'TGOS', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('31', 'SAIS ', 'Q', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('32', 'SAIS ', 'P', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('33', 'SAIS ', 'O', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('34', 'SAIS ', 'N', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('35', 'SAIS ', 'M', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('36', 'SAIS ', 'L', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('37', 'SAIS ', 'K', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('38', 'SAIS ', 'J', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('39', 'SAIS ', 'I', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('40', 'SAIS ', 'H', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('41', 'SAIS ', 'G', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('42', 'SAIS ', 'F', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('43', 'SAIS ', 'E', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('44', 'SAIS ', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('45', 'SAIS ', 'C', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('46', 'SAIS ', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('47', 'SAIS ', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('48', 'TGTS ', 'J', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('49', 'TGTS ', 'I', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('50', 'TGTS ', 'H', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('51', 'TGTS ', 'G', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('52', 'TGTS ', 'F', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('53', 'TGTS ', 'E', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('54', 'TGTS ', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('55', 'TGTS ', 'C', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('56', 'TGTS ', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('57', 'TGTS ', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('58', 'TGHS ', 'L', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('59', 'TGHS ', 'K', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('60', 'TGHS ', 'J', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('61', 'TGHS ', 'I', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('62', 'TGHS ', 'H', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('63', 'TGHS ', 'G', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('64', 'TGHS ', 'F', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('65', 'TGHS ', 'E', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('66', 'TGHS ', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('67', 'TGHS ', 'C', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('68', 'TGHS ', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('69', 'TGHS ', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('70', 'PSS', 'L', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('71', 'PSS', 'K', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('72', 'PSS', 'J', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('73', 'PSS', 'I', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('74', 'PSS', 'H', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('75', 'PSS', 'G', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('76', 'PSS', 'F', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('77', 'PSS', 'E', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('78', 'PSS', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('79', 'PSS', 'C', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('80', 'PSS', 'B', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('81', 'PSS', 'A', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('82', 'TJS', '10', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('83', 'TJS', '9', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('84', 'TJS', '8', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('85', 'TJS', '7', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('86', 'TJS', '6', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('87', 'TJS', '5', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('88', 'TJS', '4', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('89', 'TJS', '3', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('90', 'TJS', '2', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('91', 'TGRS', '', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('92', 'TGRS', '', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('93', 'TGRS', '', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('94', 'TGRS', 'E', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('95', 'TGRS', 'D', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('96', 'TGRS', 'C', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('97', 'TGRS', 'B', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('98', 'TGRS', 'A', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('99', 'AGCS ', '13', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('100', 'AGCS ', '12', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('101', 'AGCS ', '11', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('102', 'AGCS ', '10', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('103', 'AGCS ', '9', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('104', 'AGCS ', '8', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('105', 'AGCS ', '7', '120000', '100000', '70000');
INSERT INTO `posho_za_safari` VALUES ('106', 'AGCS ', '6', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('107', 'AGCS ', '5', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('108', 'AGCS ', '4', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('109', 'AGCS ', '3', '100000', '80000', '60000');
INSERT INTO `posho_za_safari` VALUES ('110', 'AGCS ', '2', '80000', '60000', '50000');
INSERT INTO `posho_za_safari` VALUES ('111', 'AGCS ', '1', '80000', '60000', '50000');
INSERT INTO `private_public` VALUES ('1', 'private', 'Private');
INSERT INTO `private_public` VALUES ('2', 'public', 'Public');
INSERT INTO `regions` VALUES ('255', '36', 'Katavi');
INSERT INTO `regions` VALUES ('255', '47', 'Simiyu');
INSERT INTO `regions` VALUES ('255', '54', 'Njombe');
INSERT INTO `regions` VALUES ('255', '63', 'Geita');
INSERT INTO `regions` VALUES ('255', '70', 'Arusha');
INSERT INTO `regions` VALUES ('255', '71', 'Pwani');
INSERT INTO `regions` VALUES ('255', '72', 'Dodoma');
INSERT INTO `regions` VALUES ('255', '73', 'Iringa');
INSERT INTO `regions` VALUES ('255', '74', 'Kigoma');
INSERT INTO `regions` VALUES ('255', '75', 'Kilimanjaro');
INSERT INTO `regions` VALUES ('255', '76', 'Lindi');
INSERT INTO `regions` VALUES ('255', '77', 'Mara');
INSERT INTO `regions` VALUES ('255', '78', 'Mbeya');
INSERT INTO `regions` VALUES ('255', '79', 'Morogoro');
INSERT INTO `regions` VALUES ('255', '80', 'Mtwara');
INSERT INTO `regions` VALUES ('255', '81', 'Mwanza');
INSERT INTO `regions` VALUES ('255', '82', 'Ruvuma');
INSERT INTO `regions` VALUES ('255', '83', 'Shinyanga');
INSERT INTO `regions` VALUES ('255', '84', 'Singida');
INSERT INTO `regions` VALUES ('255', '85', 'Tabora');
INSERT INTO `regions` VALUES ('255', '86', 'Tanga');
INSERT INTO `regions` VALUES ('255', '87', 'Kagera');
INSERT INTO `regions` VALUES ('255', '88', 'Dar es Salaam');
INSERT INTO `regions` VALUES ('255', '89', 'Rukwa');
INSERT INTO `regions` VALUES ('255', '90', 'Songwe');
INSERT INTO `regions` VALUES ('255', '95', 'Manyara');
INSERT INTO `request_categories` VALUES ('1', 'Kero');
INSERT INTO `request_categories` VALUES ('2', 'Maoni');
INSERT INTO `request_categories` VALUES ('3', 'Taarifa');
INSERT INTO `request_categories` VALUES ('4', 'Malalamiko');
INSERT INTO `request_categories` VALUES ('5', 'Maswali');
INSERT INTO `request_categories` VALUES ('6', 'Pongezi');
INSERT INTO `request_categories` VALUES ('7', 'Maombi');
INSERT INTO `ruti_ya_safari` VALUES ('1', 'ruti_moja', 'Safari Moja');
INSERT INTO `ruti_ya_safari` VALUES ('2', 'ruti_zaidi_ya_moja', 'Zaidi ya Moja');
INSERT INTO `sections` VALUES ('1', '1001', '100101', 'ADHRM', null, 'Administration');
INSERT INTO `sections` VALUES ('2', '1001', '100102', 'HRM', null, 'Human Resources Management');
INSERT INTO `sections` VALUES ('3', '1003', '100301', 'PP', null, 'Policy and Planning');
INSERT INTO `sections` VALUES ('4', '1003', '100302', 'ME', null, 'Monitoring and Evaluation');
INSERT INTO `sections` VALUES ('5', '2001', '200101', 'WD', null, 'Wildlife Development');
INSERT INTO `sections` VALUES ('6', '2001', '200102', 'WU', null, 'Wildlife Utilization');
INSERT INTO `sections` VALUES ('7', '2001', '200103', 'APO', null, 'Anti-Poaching Operations');
INSERT INTO `sections` VALUES ('8', '3001', '300101', 'FD', null, 'Forest Development');
INSERT INTO `sections` VALUES ('9', '3001', '300102', 'BD', null, 'Beekeeping Development');
INSERT INTO `sections` VALUES ('10', '4001', '400101', 'TD', null, 'Tourism Development');
INSERT INTO `sections` VALUES ('11', '4001', '400102', 'LC', null, 'Licensing and Control');
INSERT INTO `sections` VALUES ('12', '4002', '400201', 'CT', null, 'Conservation and Technology');
INSERT INTO `sections` VALUES ('13', '4002', '400202', 'CHDC', null, 'Cultural Heritage Development and Communication');
INSERT INTO `sections` VALUES ('14', '-', '999999', '-', '-', '-');
INSERT INTO `send_to_options_idarani` VALUES ('1', 'ps', 'Kwa Katibu Mkuu');
INSERT INTO `send_to_options_idarani` VALUES ('2', 'hos', 'Kwa Mkuu wa Sehemu');
INSERT INTO `send_to_options_idarani` VALUES ('3', 'nu', 'Kwa Afisa');
INSERT INTO `send_to_options_idarani` VALUES ('4', 'dawati', 'Dawati la Wadau');
INSERT INTO `ukaimisho` VALUES ('2', '2', '98989898', 'ttrrtrr trtrtrrt<br>', '11119999', 'hod', 'nu', '1009', '999999', '28-07-2020', '29-07-2020', '1', null, null, '28-07-2020', null, null, null, null);
INSERT INTO `usafiri` VALUES ('1', 'gls', 'Gari la Serikali');
INSERT INTO `usafiri` VALUES ('2', 'uwub', 'Usafiri wa Uma (barabara)');
INSERT INTO `usafiri` VALUES ('4', 'nys', 'Ndege ya Serikali');
INSERT INTO `usafiri` VALUES ('3', 'uwun', 'Usafiri wa Umma (ndege)');
INSERT INTO `usafiri` VALUES ('5', 'uwut', 'Treni');
INSERT INTO `usafiri` VALUES ('6', 'uwum', 'Meli');
INSERT INTO `user_level` VALUES ('1', 'w', 'Waziri');
INSERT INTO `user_level` VALUES ('2', 'nw', 'Naibu Waziri');
INSERT INTO `user_level` VALUES ('3', 'ps', 'Katibu Mkuu');
INSERT INTO `user_level` VALUES ('4', 'dps', 'Naibu Katibu Mkuu');
INSERT INTO `user_level` VALUES ('5', 'dahrm', 'DAHRM');
INSERT INTO `user_level` VALUES ('6', 'ca', 'Mhasibu Mkuu');
INSERT INTO `user_level` VALUES ('7', 'hod', 'Mkurugenzi');
INSERT INTO `user_level` VALUES ('8', 'hu', 'Mkuu wa Kitengo');
INSERT INTO `user_level` VALUES ('9', 'hos', 'Mkurugenzi Msaidizi');
INSERT INTO `user_level` VALUES ('10', 'to', 'Transport Officer');
INSERT INTO `user_level` VALUES ('11', 'pmu', 'Manunuzi');
INSERT INTO `user_level` VALUES ('12', 'ra', 'Mhasibu Masurufu');
INSERT INTO `user_level` VALUES ('13', 'tae', 'TAE');
INSERT INTO `user_level` VALUES ('14', 'driver', 'Dereva');
INSERT INTO `user_level` VALUES ('15', 'nu', 'Mtumishi Mwingine');
INSERT INTO `user_level` VALUES ('16', 'masijala', 'Masijala');
INSERT INTO `uthibitisho_maelekezo` VALUES ('1', 'Nimetekeleza', 'Nimetekeleza Mkuu');
INSERT INTO `uthibitisho_maelekezo` VALUES ('2', 'Nitatekeleza', 'Nitatekeleza Mkuu');
INSERT INTO `uthibitisho_maelekezo` VALUES ('3', 'Ondoa', 'Sintatekeleza Mkuu');
INSERT INTO `vibali` VALUES ('2', 'PPPPQQQQ', 'SFN/REGROW/1230', '27-07-2020', '2', '2', null, 'FY 2019-2020', '69', '98989898', 'hod', 'TZ800142', '1009', '999999', 'ruti_moja', null, 'Arusha City Centre, Arusha ', null, null, null, null, null, null, null, null, null, null, 'lga', null, null, null, null, null, null, null, null, null, null, '70', null, null, null, null, null, null, null, null, null, null, '2001', null, null, null, null, null, null, null, null, null, null, '28-07-2020', null, null, null, null, null, null, null, null, null, null, '29-07-2020', null, null, null, null, null, null, null, null, null, null, '500', null, null, null, null, null, null, null, null, null, null, null, '5', null, null, null, null, null, null, null, null, null, null, null, '1', null, null, null, null, null, null, null, null, null, null, null, 'gls', null, null, null, null, null, null, null, null, null, null, '1', null, null, null, null, null, null, null, null, null, null, 'Maandalizi maboresho kanda a ksini', null, null, null, null, null, null, null, null, null, null, '1009', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '27-07-2020', null, '1', null, 'Kibali cha Kawaida', null, 'Kibali cha Dharura', 'Safari ni chini ya siku mbili', 'kimepitishwa_ps', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '22224444', 'STL 0054', 'Toyota Landcruiser V8', '2', '2', '33333333', 'to', null, null, '28-07-2020', null, '11111111', 'ps', 'kimepitishwa_ps', 'Manfaa kwa wizara', '27-07-2020', null, null, null, null, null, null, null, null);
INSERT INTO `vifungu_vya_malipo` VALUES ('1', '1008', '691008000000-E01S03-0000-020201100', 'Ukaguzi');
INSERT INTO `vifungu_vya_malipo` VALUES ('2', '1008', '691008000000-E01S03-0000-020201101', 'Mafunzo');
INSERT INTO `vifungu_vya_malipo` VALUES ('3', '1001', '691001000000-E01S03-0000-020201199', 'Likizo');
INSERT INTO `vifungu_vya_malipo` VALUES ('4', '1001', '691001000000-E01S03-0000-020201156', 'Vikao, semina na warsha');
INSERT INTO `vifungu_vya_malipo` VALUES ('5', '2001', '692001000000-E01S03-0000-020202983', 'Posho');
INSERT INTO `vifungu_vya_malipo` VALUES ('6', '2001', '692001000000-E01S03-0000-020209087', 'Mafunzo');
INSERT INTO `vifungu_vya_malipo` VALUES ('7', '1001', '691001000000-E01S03-0000-02020392', 'Uwezeshaji');
INSERT INTO `vifungu_vya_malipo` VALUES ('8', '2001', '692001000000-E01S03-0000-020201908', 'Mazingira');
INSERT INTO `vyeo` VALUES ('1', 'TZ100001', 'Waziri', 'Minister', 'LSSE', '1', 'w');
INSERT INTO `vyeo` VALUES ('2', 'TZ100002', 'Naibu Waziri', 'Deputy Minister', 'LSSE', '2', 'nw');
INSERT INTO `vyeo` VALUES ('3', 'TZ100003', 'Katibu Mkuu ', 'Permanent Secretary ', 'LSSE', '3', 'ps');
INSERT INTO `vyeo` VALUES ('4', 'TZ100004', 'Naibu Katibu Mkuu', 'Deputy Permanent Secretary ', 'LSSE', '4', 'dps');
INSERT INTO `vyeo` VALUES ('5', 'TZ800077', 'Director/Key Ministry', 'Director/Key Ministry', 'LSSE', '5', 'XX');
INSERT INTO `vyeo` VALUES ('6', 'TZ100066', 'Mkurugenzi', 'Director', 'LSSE', '6', 'hod');
INSERT INTO `vyeo` VALUES ('7', 'TZ100073', 'Mkurugenzi Msaidizi', 'Assistant Director', 'LSSE', '7', 'hos');
INSERT INTO `vyeo` VALUES ('8', 'TZ100074', 'Mhasibu Mkuu', 'Chief Accountant', 'LSSE', '8', 'ca');
INSERT INTO `vyeo` VALUES ('9', 'TZ200140', 'Afisa Utawala Mkuu I', 'Principal Administrative Officer I ', 'TGS', 'H', null);
INSERT INTO `vyeo` VALUES ('10', 'TZ200141', 'Afisa Utawala Mkuu II', 'Principal Administrative Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('11', 'TZ300140', 'Afisa Utawala Mwandamizi', 'Senior Administrative Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('12', 'TZ300141', 'Afisa Utawala I', 'Administrative Officer I ', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('13', 'TZ300142', 'Afisa Utawala II', 'Administrative Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('14', 'TZ200150', 'Afisa Rasilimali Watu Mkuu I', 'Principal Human Resources Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('15', 'TZ200151', 'Afisa Rasilimali Watu Mkuu II', 'Principal Human Resources Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('16', 'TZ300150', 'Afisa Rasilimali Watu Mwandamizi', 'Senior Human Resources Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('17', 'TZ300151', 'Afisa Rasilimali Watu I', 'Human Resources Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('18', 'TZ300152', 'Afisa Rasilimali Watu II', 'Human Resources Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('19', 'TZ800142', 'Afisa Sheria Mkuu I', 'Principal Legal Officer I', 'TGS', 'I', '');
INSERT INTO `vyeo` VALUES ('20', 'TZ800143', 'Afisa Sheria Mkuu II', 'Principal Legal Officer II', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('21', 'TZ800144', 'Afisa Sheria Mwandamizi', 'Senior Legal Officer ', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('22', 'TZ800145', 'Afisa Sheria I', 'Legal Officer I', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('23', 'TZ800146', 'Afisa Sheria II', 'Legal Officer II', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('24', 'TZ200480', 'Mkaguzi wa Hesabu Mkuu I', 'Principal Auditor I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('25', 'TZ200481', 'Mkaguzi wa Hesabu Mkuu II', 'Principal Auditor II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('26', 'TZ300480', 'Mkaguzi wa Hesabu Mwandamizi', 'Senior Auditor', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('27', 'TZ300481', 'Mkaguzi wa Hesabu I', 'Auditor I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('28', 'TZ300482', 'Mkaguzi wa Hesabu II', 'Auditor II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('29', 'TZ500480', 'Mkaguzi wa Hesabu Msaidizi I', 'Assistant Auditor II', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('30', 'TZ200590', 'Afisa Ugavi Mkuu I', 'Principal Supplies Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('31', 'TZ200591', 'Afisa Ugavi Mkuu II', 'Principal Supplies Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('32', 'TZ300590', 'Afisa Ugavi Mwandamizi', 'Senior Supplies Officer ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('33', 'TZ300591', 'Afisa Ugavi I', 'Supplies Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('34', 'TZ300592', 'Afisa Ugavi II', 'Supplies Officer II', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('35', 'TZ500590', 'Msaidizi Ugavi ', 'Supplies Assistant ', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('36', 'TZ200760', 'Mhasibu Mkuu I', 'Principal Accountant I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('37', 'TZ200761', 'Mhasibu Mkuu II', 'Principal Accountant II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('38', 'TZ300760', 'Mhasibu Mwandamizi', 'Senior Accountant ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('39', 'TZ300761', 'Mhasibu I', 'Accountant I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('40', 'TZ300762', 'Mhasibu II', 'Accountant II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('41', 'TZ500760', 'Mhasibu Msaidizi', 'Assistant Accountant', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('42', 'TZ500761', 'Msaidizi wa Hesabu', 'Accounts Assistant', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('43', 'TZXXXXX1', 'Afisa TEHAMA Mkuu I', 'Principal ICT Officer I', 'TGS', 'I', '');
INSERT INTO `vyeo` VALUES ('44', 'TZXXXXX2', 'Afisa TEHAMA Mkuu II', 'Principal ICT Officer II', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('45', 'TZXXXXX3', 'Afisa TEHAMA Mwandamizi', 'Senior ICT Officer', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('46', 'TZ300381', 'Afisa TEHAMA I', 'ICT Officer I', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('47', 'TZ300782', 'Afisa TEHAMA II', 'ICT Officer II', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('48', 'TZ200780', 'Mchambuzi wa Mifumo ya Kompyuta Mkuu I', 'Principal Computer System Analyst I', 'TGS', 'I', '');
INSERT INTO `vyeo` VALUES ('49', 'TZ200781', 'Mchambuzi wa Mifumo ya Kompyuta Mkuu II', 'Principal Computer System Analyst II', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('50', 'TZ200782', 'Mchambuzi wa Mifumo ya Kompyuta Mkuu III', 'Principal Computer System Analyst III', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('51', 'TZ300380', 'Mchambuzi wa Mifumo ya Kompyuta Mwandamizi', 'Senior Computer System Analyst ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('52', 'TZ300381', 'Mchambuzi wa Mifumo ya Kompyuta I', 'Computer System Analyst I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('53', 'TZ300782', 'Mchambuzi wa Mifumo ya Kompyuta II', 'Computer System Analyst II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('54', 'TZ200785', 'Afisa Usimamizi Fedha Mkuu I', 'Principal Finance Management Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('55', 'TZ200786', 'Afisa Usimamizi Fedha Mkuu II', 'Principal Finance Management Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('56', 'TZ300785', 'Afisa Usimamizi Fedha Mwandamizi', 'Senior Finance Management Officer ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('57', 'TZ300786', 'Afisa Usimamizi Fedha I', 'Finance Management Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('58', 'TZ300787', 'Afisa Usimamizi Fedha II', 'Finance Management Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('59', 'TZ200790', 'Mkaguzi Hesabu wa Ndani Mkuu I', 'Principal Internal Auditor I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('60', 'TZ200791', 'Mkaguzi Hesabu wa Ndani Mkuu II', 'Principal Internal Auditor II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('61', 'TZ300790', 'Mkaguzi Hesabu wa Ndani Mwandamizi', 'Senior Internal Auditor ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('62', 'TZ300791', 'Mkaguzi Hesabu wa Ndani I', 'Internal Auditor I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('63', 'TZ300792', 'Mkaguzi Hesabu wa Ndani II', 'Internal Auditor II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('64', 'TZ200230', 'Afisa Kumbukumbu Mkuu I', 'Principal Records Officers I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('65', 'TZ200231', 'Afisa Kumbukumbu Mkuu II', 'Principal Records Officers II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('66', 'TZ300230', 'Afisa Kumbukumbu Mwandamizi', 'Senior Records Officers', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('67', 'TZ300231', 'Afisa Kumbukumbu I', 'Records Officers I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('68', 'TZ300232', 'Afisa Kumbukumbu II', 'Records Officers II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('69', 'TZ500210', 'Msadizi wa Kumbukumbu Mkuu I', 'Principal Records Management Assistant I', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('70', 'TZ500211', 'Msadizi wa Kumbukumbu Mkuu II', 'Principal Records Management Assistant II', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('71', 'TZ500212', 'Msadizi wa Kumbukumbu Mwandamizi', 'Senior Records Management Assistant', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('72', 'TZ500213', 'Msadizi wa Kumbukumbu I', 'Records Management Assistant I', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('73', 'TZ500214', 'Msadizi wa Kumbukumbu II', 'Records Management Assistant II ', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('74', 'TZ210110', 'Mchumi Mkuu I', 'Principal Economist I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('75', 'TZ210111', 'Mchumi Mkuu I', 'Principal Economist II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('76', 'TZ310110', 'Mchumi Mwandamizi', 'Senior Economist ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('77', 'TZ310111', 'Mchumi I', 'Economist I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('78', 'TZ310112', 'Mchumi II', 'Economist II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('79', 'TZ210115', 'Mtakwimu Mkuu I', 'Principal Statistician I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('80', 'TZ210116', 'Mtakwimu Mkuu II', 'Principal Statistician II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('81', 'TZ310115', 'Mtakwimu Mwandamizi', 'Senior Statistician ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('82', 'TZ310116', 'Mtakwimu I', 'Statistician I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('83', 'TZ310117', 'Mtakwimu II', 'Statistician II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('84', 'TZ510115', 'Mtakwimu Msaidizi Mkuu', 'Principal Statistical Assistant', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('85', 'TZ510116', 'Mtakwimu Msaidizi Mwandamizi', 'Senior Statistical Assistant', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('86', 'TZ510117', 'Mtakwimu Msaidizi I', 'Statistical Assistant I', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('87', 'TZ510118', 'Mtakwimu Msaidizi I', 'Statistical Assistant II', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('88', 'TZ210120', 'Mhifadhi Mambo ya Kale Mkuu I', 'Principal Conservator of Antiquities I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('89', 'TZ210121', 'Mhifadhi Mambo ya Kale Mkuu II', 'Principal Conservator of Antiquities II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('90', 'TZ310120', 'Mhifadhi Mambo ya Kale Mwandamizi', 'Senior Conservator of Antiquities II', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('91', 'TZ310121', 'Mhifadhi Mambo ya Kale I', 'Conservator of Antiquities I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('92', 'TZ310122', 'Mhifadhi Mambo ya Kale II', 'Conservator of Antiquities II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('93', 'TZ210125', 'Afisa Ufugaji Nyuki Mkuu I', 'Principal Bee-Keeping Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('94', 'TZ210126', 'Afisa Ufugaji Nyuki Mkuu II', 'Principal Bee-Keeping Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('95', 'TZ310125', 'Afisa Ufugaji Nyuki Mwandamizi', 'Senior Bee-Keeping Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('96', 'TZ310126', 'Afisa Ufugaji Nyuki I', 'Bee-Keeping Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('97', 'TZ310127', 'Afisa Ufugaji Nyuki II', 'Bee-Keeping Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('98', 'TZ510174', 'Msaidizi Ufugaji nyuki Mkuu', 'Principal Beekeeping Assistant', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('99', 'TZ510175', 'Msaidizi Ufugaji nyuki Mwandamizi', 'Senior Beekeeping Assistant', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('100', 'TZ510176', 'Msaidizi Ufugaji nyuki I', 'Beekeeping Assistant I', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('101', 'TZ510177', 'Msaidizi Ufugaji nyuki II', 'Beekeeping Assistant II', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('102', 'TZ210135', 'Afisa Misitu Mkuu I', 'Principal Forest Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('103', 'TZ210136', 'Afisa Misitu Mkuu II', 'Principal Forest Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('104', 'TZ310135', 'Afisa Misitu Mwandamizi', 'Senior Forest Officer ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('105', 'TZ310136', 'Afisa Misitu I', 'Forest Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('106', 'TZ310137', 'Afisa Misitu II', 'Forest Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('107', 'TZ510150', 'Msaidizi wa Misitu Mkuu', 'Principal Forest Assistant ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('108', 'TZ510151', 'Msaidizi wa Misitu Mwandamizi', 'Senior Forest Assistant ', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('109', 'TZ510152', 'Msaidizi wa Misitu I', 'Forest Assistant I', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('110', 'TZ510153', 'Msaidizi wa Misitu II', 'Forest Assistant II', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('111', 'TZ610150', 'Msaidizi wa Misitu ', 'Forest Assistant', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('112', 'TZ210140', 'Afisa Wanyamapori Mkuu I', 'Principal Game Officer I ', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('113', 'TZ210141', 'Afisa Wanyamapori Mkuu Ii', 'Principal Game Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('114', 'TZ310140', 'Afisa Wanyamapori Mwandamizi', 'Senior Game Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('115', 'TZ310141', 'Afisa Wanyamapori I', 'Game Officer I ', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('116', 'TZ310142', 'Afisa Wanyamapori II', 'Game Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('117', 'TZ510185', 'Mhifadhi Wanyamapori Mkuu', 'Principal Game Warden', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('118', 'TZ510186', 'Mhifadhi Wanyamapori Mwandamizi', 'Senior Game Warden', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('119', 'TZ510187', 'Mhifadhi Wanyapori I', 'Game Warden I', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('120', 'TZ510188', 'Mhifadhi Wanyapori II', 'Game Warden II', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('121', 'TZ510189', 'Mhifadhi Wanyapori III', 'Assistant Game Warden ', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('122', 'TZ210165', 'Afisa Utalii Mkuu I', 'Principal Tourism Officer I', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('123', 'TZ210166', 'Afisa Utalii Mkuu II', 'Principal Tourism Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('124', 'TZ310165', 'Afisa Utalii Mwandamizi', 'Senior Tourism Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('125', 'TZ310166', 'Afisa Utalii I', 'Tourism Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('126', 'TZ310167', 'Afisa Utalii II', 'Tourism Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('127', 'TZ500190', 'Msaidizi wa Mtendaji Mkuu I', 'Assistant Executive Secretary I', 'TGS', '', '');
INSERT INTO `vyeo` VALUES ('128', 'TZ800290', 'Msaidizi wa Mtendaji Mkuu II', 'Assistant Executive Secretary II', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('129', 'TZ500191', 'Mwandishi Mwendesha Ofisi', 'Office Management Secretary', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('130', 'TZ500192', 'Katibu Mahsusi I', 'Personal Secretary I', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('131', 'TZ500193', 'Katibu Mahsusi II', 'Personal Secretary II ', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('132', 'TZ500194', 'Katibu Mahsusi III', 'Personal Secretary III', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('133', 'TZ210075', 'Afisa Usafiri Mkuu I', 'Principal Transport Officer I ', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('134', 'TZ210076', 'Afisa Usafiri Mkuu II', 'Principal Transport Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('135', 'TZ310075', 'Afisa Usafiri Mwandamizi', 'Senior Transport Officer ', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('136', 'TZ310076', 'Afisa Usafiri I', 'Transport Officer I ', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('137', 'TZ310077', 'Afisa Usafiri II', 'Transport Officer II', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('138', 'TZ500600', 'Fundisanifu Mkuu', 'Principal Technician', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('139', 'TZ500601', 'Fundisanifu Mwandamizi', 'Senior Technician ', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('140', 'TZ500602', 'Fundisanifu I', 'Technician I', 'TGS', 'D', '');
INSERT INTO `vyeo` VALUES ('141', 'TZ500603', 'Fundisanifu II', 'Technician II', 'TGS', 'C', '');
INSERT INTO `vyeo` VALUES ('142', 'TZ500604', 'Fundisanifu Msaidizi', 'Assistant Technician', 'TGS', 'B', '');
INSERT INTO `vyeo` VALUES ('143', 'TZ700535', 'Dereva Mwandamizi', 'Senior Driver', 'TGS', 'F', 'driver');
INSERT INTO `vyeo` VALUES ('144', 'TZ700536', 'Dereva I', 'Driver I', 'TGS', 'D', 'driver');
INSERT INTO `vyeo` VALUES ('145', 'TZ700537', 'Dereva II', 'Driver II', 'TGS', 'C', 'driver');
INSERT INTO `vyeo` VALUES ('146', 'TZ200270', 'Afisa Habari Mkuu I', 'Principal Information Officer I ', 'TGS', 'H', '');
INSERT INTO `vyeo` VALUES ('147', 'TZ200271', 'Afisa Habari Mkuu II', 'Principal Information Officer II', 'TGS', 'G', '');
INSERT INTO `vyeo` VALUES ('148', 'TZ300270', 'Afisa Habari Mwandamizi', 'Senior Information Officer', 'TGS', 'F', '');
INSERT INTO `vyeo` VALUES ('149', 'TZ300271', 'Afisa Habari I', 'Information Officer I', 'TGS', 'E', '');
INSERT INTO `vyeo` VALUES ('150', 'TZ300272', 'Afisa Habari II', 'Information Officer II', 'TGS', 'D', '');
INSERT INTO `wafanyakazi` VALUES ('135', '69', 'Alphonce', 'Denis', 'Milazo', 'PPPP2222', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ700535', 'TGS ', 'F', 'driver', 'Dereva', '', 'LLLL2222', 'STL 0054', '22224444', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595659789', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('136', '69', 'Jackson', 'Vincent', 'Msaki', 'PPPP3333', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ210075', 'TGS ', 'H', 'to', 'Mtumishi Mwingine', null, '', null, '33333333', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595660678', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('141', '69', 'Thadey', 'William', 'Msaki', 'PPPP9090', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ100004', 'LSSE ', '4', 'dps', 'Naibu Katibu Mkuu', '', '', '', '90909090', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595840665', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('146', '69', 'William', 'Masika', 'Msaki', 'PFDDHH', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ100066', 'LSSE ', '6', 'dahrm', 'Mkuu wa Idara', null, '', null, '11119999', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1596705285', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('142', '69', 'Joseph', 'John', 'Misine', 'WWWW2222', '0715115300', 'thadeyw@yahoo.com', '1009', 'unit', '999999', 'TZ510117', 'TGS ', 'C', 'nu', 'Mtumishi Mwingine', null, '', null, '11119999', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595963295', 'yes', 'yes', 'hod', '1009', '999999', '2', null, null);
INSERT INTO `wafanyakazi` VALUES ('140', '69', 'Rest', 'Peter', 'John', 'PPPPQQQQ', '0715115300', 'thadeyw@yahoo.com', '1009', 'unit', '999999', 'TZ800142', 'TGS ', 'I', 'hod', 'Mkuu wa Kitengo', '22224444', '', 'STL 0054', '98989898', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595708724', 'yes', 'yes', null, null, null, null, '11119999', 'imekubaliwa');
INSERT INTO `wafanyakazi` VALUES ('1', '69', 'Msimamizi', '-', '-', '-', '+255786242424', 'msimamizi@maliasili.go.tz', '-', null, '-', '-', '-', '-', 'msimamizi', null, '-', '-', '-', 'Msimamizi', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', '', '', '', '', null, '', '');
INSERT INTO `wafanyakazi` VALUES ('2', '69', 'Msimamizi', '-', '-', '-', '02290992200', 'km@maliasili.go.tz', '-', null, '-', '-', '-', '-', 'z_msimamizi_dawati', 'Dawati la Mteja', '-', '-', '-', 'Dawati', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('143', '69', 'Gipson', 'Nelson', 'Lyamuya', 'GGGGNNNN', '0715115300', 'thadeyw@yahoo.com', '1002', 'unit', '999999', 'TZ100074', 'LSSE ', '8', 'ca', 'Mkuu wa Kitengo', null, '', null, '55555555', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595963438', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('144', '69', 'Venance', 'Nicholas', 'Shao', 'VVVVAAAA', '0715115300', 'thadeyw@yahoo.com', '1002', 'unit', '999999', 'TZ210111', 'TGS ', 'G', 'ra', 'Mtumishi Mwingine', null, '', null, '51515151', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595963530', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('145', '69', 'Boniface', 'Lameck', 'Massawe', 'asasasasasas', '0715115300', 'thadeyw@yahoo.com', '1002', 'unit', '999999', 'TZ300761', 'TGS ', 'E', 'tae', 'Mtumishi Mwingine', null, '', null, '52525252', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595963818', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('134', '69', 'William', 'Alphonce', 'Masika', 'PPPP2222', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ100001', 'LSSE ', '1', 'w', 'Waziri', '', '', '', '22222222', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595659251', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi` VALUES ('133', '69', 'Rosalia', 'William', 'Msaki', 'PPPP1111', '0715115300', 'thadeyw@yahoo.com', '1001', 'div', '999999', 'TZ100003', 'LSSE ', '3', 'ps', 'Katibu Mkuu', '', '', '', '11111111', '0e1a57f86df2723ad5a3ce78461cc56c', 'tmp_1595658928', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('1', '69', 'Thadey', 'William', 'Msaki', 'PF.1234', '0713999999', 'thadeyw@yahoo.com', '1001', '100102', 'TZ1001NU02_2', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, null, null, '10010202', 'e10adc3949ba59abbe56e057f20f883e', 'chg_1581487373', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('3', '69', 'Amani', 'Peter', 'John', 'PF.3591', '+255743846228', 'amani@gmail.com', '2001', '999999', 'TZ1001HOD', 'LSSE', '1', 'hod', 'Mkuu wa Idara', '', null, 'STK 2099', '2001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('86', '69', 'Amitha', 'Bach', 'Bachan', 'PF. 289911', '0714114422', 'amitha@yahoo.com', '2001', '400102', 'TZ1000REGISTRY', 'TGS', 'H', 'nu', 'Mtumishi Mwingine', null, '', null, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('4', '69', 'Peter', 'William', 'Msaki', 'PF.3593', '+255658115300', 'rosa@yahoo.com', '1001', '999999', 'TZ1001DAHRM', 'LSSE', '1', 'dahrm', 'Mkuu wa Idara', '', null, 'STL 1211', '1001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('5', '69', 'Maria', 'Joseph', 'Mosha', 'PF.3594', '+255715115300', 'mariamosha@yahoo.com', '1001', '999999', 'KM', 'LSSJ', '1', 'ps', 'Katibu Mkuu', '', null, 'STK 9090', '22222222', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('13', '69', 'Richard', 'Mkude', 'Mbulu', 'PF.3595', '+255783992011', 'mbulu@mnrt.go.tz', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', 'Dereva', null, '879227678', 'STL 2389', '10000004', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('6', '69', 'Jackson', 'Vincent', 'Msaki', 'PF.3596', '+255788256555', 'jjv@yahoo.com', '1002', '999999', 'TZ1000RA', 'TGS', 'E', 'ra', 'Mtumishi Mwingine', null, '', null, '55555555', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('7', '69', 'Gipson', 'Godfrey', 'Lyamuya', 'PF.3597', '+255715115388', 'gglyamuya@gmail.com', '1002', '999999', 'TZ1000CA', 'LSSE', '1', 'ca', 'Mkuu wa Kitengo', '10000001', null, 'STL 0054', '66666666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('9', '69', 'Hamisi', 'Rush', 'Kashigi', 'PF.3598', '+255654555', 'kashigi@yahoo.com', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', 'Dereva', null, '287991777', null, '10000005', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('10', '69', 'Mussa', 'Juma', 'Khatib', 'PF.3599', '+255768777888', 'khatibu@gmail.com', '2001', '200101', 'TZ2001HOS1', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, null, null, '10010200', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('11', '69', 'Omary', 'Yusuf', 'Mruchu', 'PF.35901', '+255715115300', 'mruchu@yahoo.com', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', 'Dereva', null, '4000883201', '', '10000002', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('12', '69', 'Innocent', 'Amani', 'Ndossy', 'PF.35902', '+255715115300', 'ndossy@yahoo.com', '1001', '999999', 'TZ1000TO', 'TGS', 'E', 'to', 'Mtumishi Mwingine', null, null, null, '88888888', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('15', '69', 'Alphonce', 'Joseph', 'Minja', 'PF.35903', '+255715115300', 'aminja@gmail.com', '1001', '999999', 'TZ1001DRIVER_2', 'TGS', 'D', 'driver', 'Dereva', null, '9000672877', 'STL 1920', '10000003', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('14', '69', 'Maimuna', 'Haji', 'Kawishe', 'PF.35904', '+255715115300', 'maimuna@gmail.com', '1001', '100102', 'TZ1000REGISTRY', 'TGS', 'D', 'masijala', 'Mtumishi Mwingine', null, null, null, '19999999', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('16', '69', 'Malick', 'Hussein', 'Kiria', 'PF.35905', '+255713879700', 'malick@gmail.com', '2001', '100101', 'TZ1001NU01_2', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, null, null, '10010102', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('17', '69', 'Lucresia', 'Vincent', 'Mukajanga', 'PF.35906', '+255789009988', 'mukajanga@gmail.com', '2001', '200102', 'TZ2001HOS2', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, null, null, '10010100', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('88', '69', 'Suzan', 'Patrick', 'Lyimo', 'PF.8977', '0789262626', 'suzan@restade.com', '1003', '100301', 'TZ1000PO', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, '', null, '298811992', '043121847e62383f856713ef6514aec7', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('19', '69', 'Servuli', 'Tomas', 'Songambele', 'PF.35908', '+255676897677', 'songambele@gmail.com', '1002', '999999', 'TZ1000TAE', 'TGS', 'E', 'tae', 'Mtumishi Mwingine', null, null, null, '55556666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('20', '69', 'Ibrahim', 'Rajab', 'Kilonzo', 'PF.7644', '+255675987652', 'ibrahimkilonzo@maliasili.go.tz', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', 'Dereva', null, '897655446', 'STL 0054', '10000001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('22', '69', 'Mariana', 'Alphonce', 'Masika', 'PF.29100', '+255719876543', 'marianamasika@maliasili.go.tz', '1001', '999999', 'TZ1001HOD', 'LSSE', '1', 'hod', 'Mkuu wa Idara', null, null, null, '10011001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('23', '69', 'Msimamizi', '-', '-', '-', '+255786242424', 'msimamizi@maliasili.go.tz', '-', '-', '-', '-', '-', 'msimamizi', null, '-', '-', '-', 'Msimamizi', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', '', '', '', '', null, '', '');
INSERT INTO `wafanyakazi_copy` VALUES ('77', '69', 'Maulid', 'Abubakar', 'Macha', 'PF/Ad.2009', '0712398979', 'macha@gmail.com', '1001', '999999', 'TZ1001DRIVER_1', 'TGS', 'F', 'driver', 'Dereva', null, '189228377485', null, '23157788', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('79', '69', 'Rukia', 'Swalehe', 'Mtui', 'PF.768822', '0782335562', 'rukia@restade.com', '2001', '400201', 'TZ1001NU02_1', 'LSSJ', '1', 'nu', 'Mtumishi Mwingine', null, '', null, 'eqwe', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy` VALUES ('80', '69', 'Msimamizi', '-', '-', '-', '02290992200', 'km@maliasili.go.tz', '-', '-', '-', '-', '-', 'z_msimamizi_dawati', 'Dawati la Mteja', '-', '-', '-', 'Dawati', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('1', '69', 'Thadey', 'William', 'Msaki', 'PF.1234', '0713999999', 'thadeyw@yahoo.com', '1001', null, '100102', 'TZ100003', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, null, null, '10010202', 'e10adc3949ba59abbe56e057f20f883e', 'chg_1581487373', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('3', '69', 'Amani', 'Peter', 'John', 'PF.3591', '+255743846228', 'amani@gmail.com', '2001', 'div', '999999', 'TZ100003', 'LSSE', '1', 'hod', 'Mkuu wa Idara', '', null, 'STK 2099', '2001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('86', '69', 'Amitha', 'Bach', 'Bachan', 'PF. 289911', '0714114422', 'amitha@yahoo.com', '2001', null, '400102', 'TZ100003', 'TGS', 'H', 'nu', 'Mtumishi Mwingine', null, '', null, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('4', '69', 'Peter', 'William', 'Msaki', 'PF.3593', '+255658115300', 'rosa@yahoo.com', '1001', 'div', '999999', 'TZ100003', 'LSSE', '1', 'dahrm', 'Mkuu wa Idara', '', null, 'STL 1211', '1001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('5', '69', 'Maria', 'Joseph', 'Mosha', 'PF.3594', '+255715115300', 'mariamosha@yahoo.com', '1001', null, '999999', 'TZ100003', 'LSSJ', '1', 'ps', 'Katibu Mkuu', '', null, 'STK 9090', '22222222', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('13', '69', 'Richard', 'Mkude', 'Mbulu', 'PF.3595', '+255783992011', 'mbulu@mnrt.go.tz', '1001', null, '999999', 'TZ100003', 'TGS', 'D', 'driver', 'Dereva', null, '879227678', 'STL 2389', '10000004', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('6', '69', 'Jackson', 'Vincent', 'Msaki', 'PF.3596', '+255788256555', 'jjv@yahoo.com', '1002', null, '999999', 'TZ100003', 'TGS', 'E', 'raTTT', 'Mtumishi Mwingine', null, '', null, '55555555', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('7', '69', 'Gipson', 'Godfrey', 'Lyamuya', 'PF.3597', '+255715115388', 'gglyamuya@gmail.com', '1002', null, '999999', 'TZ100003', 'LSSE', '1', 'caTTT', 'Mkuu wa Kitengo', '10000001', null, 'STL 0054', '66666666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('9', '69', 'Hamisi', 'Rush', 'Kashigi', 'PF.3598', '+255654555', 'kashigi@yahoo.com', '1001', null, '999999', 'TZ100003', 'TGS', 'D', 'driver', 'Dereva', null, '287991777', null, '10000005', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('10', '69', 'Mussa', 'Juma', 'Khatib', 'PF.3599', '+255768777888', 'khatibu@gmail.com', '2001', null, '200101', 'TZ100003', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, null, null, '10010200', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('11', '69', 'Omary', 'Yusuf', 'Mruchu', 'PF.35901', '+255715115300', 'mruchu@yahoo.com', '1001', null, '999999', 'TZ100003', 'TGS', 'F', 'driver', 'Dereva', null, '4000883201', '', '10000002', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('12', '69', 'Innocent', 'Amani', 'Ndossy', 'PF.35902', '+255715115300', 'ndossy@yahoo.com', '1001', null, '999999', 'TZ100003', 'TGS', 'E', 'toTTT', 'Mtumishi Mwingine', null, null, null, '88888888', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('15', '69', 'Alphonce', 'Joseph', 'Minja', 'PF.35903', '+255715115300', 'aminja@gmail.com', '1001', null, '999999', 'TZ100003', 'TGS', 'D', 'driver', 'Dereva', null, '9000672877', 'STL 1920', '10000003', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('14', '69', 'Maimuna', 'Haji', 'Kawishe', 'PF.35904', '+255715115300', 'maimuna@gmail.com', '1001', null, '100102', 'TZ100003', 'TGS', 'D', 'masijalaTTT', 'Mtumishi Mwingine', null, null, null, '19999999', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('16', '69', 'Malick', 'Hussein', 'Kiria', 'PF.35905', '+255713879700', 'malick@gmail.com', '2001', null, '100101', 'TZ100003', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, null, null, '10010102', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('17', '69', 'Lucresia', 'Vincent', 'Mukajanga', 'PF.35906', '+255789009988', 'mukajanga@gmail.com', '2001', null, '200102', 'TZ100003', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, null, null, '10010100', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('88', '69', 'Suzan', 'Patrick', 'Lyimo', 'PF.8977', '0789262626', 'suzan@restade.com', '1003', null, '100301', 'TZ100003', 'TGS', 'D', 'nu', 'Mtumishi Mwingine', null, '', null, '298811992', '043121847e62383f856713ef6514aec7', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('19', '69', 'Servuli', 'Tomas', 'Songambele', 'PF.35908', '+255676897677', 'songambele@gmail.com', '1002', null, '999999', 'TZ100003', 'TGS', 'E', 'taeTTT', 'Mtumishi Mwingine', null, null, null, '55556666', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('20', '69', 'Ibrahim', 'Rajab', 'Kilonzo', 'PF.7644', '+255675987652', 'ibrahimkilonzo@maliasili.go.tz', '1001', null, '999999', 'TZ100003', 'TGS', 'F', 'driver', 'Dereva', null, '897655446', 'STL 0054', '10000001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('109', '69', 'aasdas', 'asdasd', 'dasdas', '213123123', '2312313123', 'asda@adas.das', '4002', 'div', '999999', 'TZ100003', 'TGS', 'E', 'hod', 'Mkuu wa Idara', null, '', null, '123123123', 'b5c4349f8eee07233828b78f0443ae22', 'tmp_1594193542', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('23', '69', 'Msimamizi', '-', '-', '-', '+255786242424', 'msimamizi@maliasili.go.tz', '-', null, '-', '-', '-', '-', 'msimamizi', null, '-', '-', '-', 'Msimamizi', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', '', '', '', '', null, '', '');
INSERT INTO `wafanyakazi_copy1` VALUES ('77', '69', 'Maulid', 'Abubakar', 'Macha', 'PF/Ad.2009', '0712398979', 'macha@gmail.com', '1001', null, '999999', 'TZ100003', 'TGS', 'F', 'driver', 'Dereva', null, '189228377485', null, '23157788', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('79', '69', 'Rukia', 'Swalehe', 'Mtui', 'PF.768822', '0782335562', 'rukia@restade.com', '2001', null, '400201', 'TZ100003', 'LSSJ', '1', 'nu', 'Mtumishi Mwingine', null, '', null, 'eqwe', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('80', '69', 'Msimamizi', '-', '-', '-', '02290992200', 'km@maliasili.go.tz', '-', null, '-', '-', '-', '-', 'z_msimamizi_dawati', 'Dawati la Mteja', '-', '-', '-', 'Dawati', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('92', '69', 'aaaaaaaaaaaa', 'aaaaaaa', 'aaaaaaa', '11111111', '11111111111111111111111', 'aaa@asas.as', '1001', null, '100101', 'TZ100003', 'TGS', 'E', 'nu', 'Mtumishi Mwingine', null, '', null, '11111111111', '4d6e0517a8166caee8ba1d94f1036feb', 'tmp_1594114376', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('93', '69', 'wwww', 'wwww', 'wwwww', '22222222', '222222222222', 'ww@ww.ww', '1001', null, '999999', 'TZ100003', 'LSSE', '2', 'w', 'Waziri', null, '', null, '2222222222222', '4d18e2c96bb0f39c6d6dc690542b0bdc', 'tmp_1594115061', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('97', '69', 'nw', 'nw', 'nw', '32323232', '232323232323', 'nw@nw.nw', '1001', null, '999999', 'TZ100003', 'TGS', 'F', 'nw', 'Naibu Waziri', null, '', null, '23232323232', '96ed10157acd312bbc2c8b5e75c62a6c', 'tmp_1594115743', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('103', '69', 'cccccc', 'cccccc', 'ccccccc', '888888888888888', '88888888888888', 'cc@cc.cc', '1002', 'unit', '999999', 'TZ100003', 'TGS', 'F', 'ca', 'Mkuu wa Kitengo', null, '', null, '8888888888888', 'd838cb69c0b12e39dcb82400057099cf', 'tmp_1594191856', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('102', '69', 'bbbbbb', 'bbbbbb', 'bbbbbb', '323232323', '232323232323', 'bb@vvv.vv', '1001', null, '999999', 'TZ100003', 'LSSE', '1', 'dps', 'Naibu Katibu Mkuu', null, '', null, '323232323', '96ed10157acd312bbc2c8b5e75c62a6c', 'tmp_1594191787', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('104', '69', 'ttttttttttt', 'tttttttttttt', 'tttttttttttttt', '3333333333333', '3333333333333', 'tt@tt.tt', '1002', null, '999999', 'TZ100003', 'TGS', 'E', 'ra', 'Mtumishi Mwingine', null, '', null, '3333333333333', 'e050df3853101290257255d94b028db2', 'tmp_1594191932', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('105', '69', 'rrrrr', 'rrrr', 'rrrr', '333333333333', '33333333333333', 'rrrr@rr.rr', '1002', null, '999999', 'TZ100003', 'LSSE', '2', 'tae', 'Mtumishi Mwingine', null, '', null, '33333333333333', '1829b546ae77fd75f7f1c39936fadb25', 'tmp_1594192009', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('106', '69', 'to', 'to', 'to', '3333333333333333', '333333333333333333', 'to@to.cc', '1001', null, '999999', 'TZ100003', 'TGS', 'F', 'to', 'Mtumishi Mwingine', null, '', null, '33333333333333', 'dd94c6e208e5a46fecb663897bd8554d', 'tmp_1594192059', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('107', '69', 'wwwww', 'wwwww', 'wwwww', '121212121212', '121212121212', 'ww@ww.ss', '1006', 'unit', '999999', 'TZ100003', 'LSSE', '2', 'pmu', 'Mkuu wa Kitengo', null, '', null, '1212121212', '1d1803570245aa620446518b2154f324', 'tmp_1594192116', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('108', '69', 'mmmmm', 'mmmm', 'mmmmmmm', '212121212', '21212121212', 'mmm@mmm.mmm', '1001', null, '999999', 'TZ100003', 'LSSE', '1', 'masijala', 'Mtumishi Mwingine', null, '', null, '2121212121', '422ab839e204eb9b81ec00272dc01a36', 'tmp_1594192194', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('110', '69', 'dadasdasd', 'asdasdasd', 'asdasdasd', '42342342342', '2342342344234', 'asdasd@sfsdf.sdfs', '3001', 'div', '999999', 'TZ100003', 'TGS', 'F', 'hod', 'Mkuu wa Idara', null, '', null, '234324234', '992397438fcb4e264f08a93b1f422381', 'tmp_1594193584', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('111', '69', 'asdasdasd', 'asdasdas', 'asdasdas', '4234234234', '342342342342342', 'asdasd@adad.das', '1003', 'div', '999999', 'TZ100003', 'TGS', 'E', 'hod', 'Mkuu wa Idara', null, '', null, '234234234234', 'f2380b25a19635cca28cea27206d324c', 'tmp_1594193623', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('112', '69', 'fsfsdf', 'sdfsdf', 'sdfdsf', '23423423423', '32434234234234', 'sdffffffffffff@dasdas.sad', '4001', 'div', '999999', 'TZ100003', 'TGS', 'F', 'hod', 'Mkuu wa Idara', null, '', null, '4234234234', 'c1008928785a314f51dcf7041df88851', 'tmp_1594193658', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('113', '69', 'dagfdsfsdfsd', 'sdfsdfs', 'fsdfsdf', '89898989', '98998989989', 'sdfs@sada.das', '1004', 'unit', '999999', 'TZ100003', 'LSSE', '2', 'hod', 'Mkuu wa Idara', null, '', null, '8989898', 'f97747d8dd4770661ae90308d06fb9be', 'tmp_1594193696', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('115', '69', 'adadasd', 'asdasdas', 'sadasdasd', '23223232', '23232323232323', 'asdas@sdad.ad', '1008', 'unit', '999999', 'TZ100003', 'TGS', 'F', 'hod', 'Mkuu wa Idara', null, '', null, '3232323232', '1bd14a9a01bc384c8d5b4532aa61f076', 'tmp_1594204233', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('116', '69', 'dasdasd', 'dasdasd', 'asdasdasd', '323232323', '23232323232', 'sadas@sdas.sad', '1005', 'unit', '999999', 'TZ100003', 'TGS', 'D', 'hod', 'Mkuu wa Idara', null, '', null, '3232323232', '1f839a6f81727fc54c06d4e4be5bc51e', 'tmp_1594204276', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('117', '69', 'dsfsdfdsf', 'sdfsdfsdf', 'sdfsdfsdf', '434343434', '3434343343', 'dsfsd@dsf.fdf', '1007', 'unit', '999999', 'TZ100003', 'TGS', 'F', 'hod', 'Mkuu wa Idara', null, '', null, '4343434343', '34d386f855079c33dc85f9d43bef6f2b', 'tmp_1594204313', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('122', '69', 'asadad', 'asdsad', 'asdasd', '32323232', '232323232323', 'asdas@sda.asd', '1001', null, '100101', 'TZ100003', 'TGS', 'H', 'hos', 'Mkuu wa Sehemu', null, '', null, '232323232323', '96ed10157acd312bbc2c8b5e75c62a6c', 'tmp_1594367572', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('119', '69', 'fsdffsdfsd', 'fdsfsdfsdf', 'sdfsdfsdfsd', '34343434343', '343434343343', 'sdfsd@fsdf.sdf', '1009', 'unit', '999999', 'TZ100003', 'TGS', 'E', 'hod', 'Mkuu wa Idara', null, '', null, '3434343443', 'ab80447fc073b005aeac08dc1bee0b55', 'tmp_1594204379', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('120', '69', 'dasdasd', 'asdsadas', 'asdasdas', '323423423', '3434343434', 'asdasd@dasdas.das', '2001', null, '200103', 'TZ100003', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, '', null, '32423423423', '22be0926f98c5185e95f45915b3a7b2d', 'tmp_1594207074', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('123', '69', 'fsdfsdfsd', 'fsdfsdf', 'sdfsdfsdf', '2323232323232', '23232323223', 'dsfsdf@dfsd.dsf', '1001', null, '100102', 'TZ100003', 'TGS', 'H', 'hos', 'Mkuu wa Sehemu', null, '', null, '323232332', '15dd7745fc1bafa549d948fe1287252a', 'tmp_1594367637', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('124', '69', 'erwrwer', 'werwerwe', 'werwerew', '3232323232', '2323232323232', 'erwe@sdfsd.sdf', '4002', null, '400202', 'TZ100003', 'LSSJ', '1', 'hos', 'Mkuu wa Sehemu', null, '', null, '32323232323', '1498ab69ea9cf35c107700d7023fb592', 'tmp_1594367727', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('125', '69', 'sdfsdfsd', 'fsdfsdfsd', 'sdfsdfsd', '423423423423', '24234234324234', 'dsfsd@fsdfs.fdsf', '4002', null, '400201', 'TZ100003', 'LSSJ', '1', 'hos', 'Mkuu wa Sehemu', null, '', null, '2342342342342', 'bce9de2734f467940c539d5c822b0edd', 'tmp_1594368248', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('126', '69', 'fsfdsfsdfsdfsd', 'fsdfsdf', 'sdfsdfsdf', '2342342342', '4342423423423', 'sdfs@fsd.fsd', '3001', null, '300102', 'TZ100003', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, '', null, '423423423', 'a563c70e07a4f32ac34dc584b9b4f14d', 'tmp_1594368299', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('127', '69', 'sdfsdfsdf', 'sdfsdfs', 'fsdfsdfsd', '23432423423', '4234234234324', 'wrwe@fsd.sdfs', '3001', null, '300101', 'TZ100003', 'TGS', 'F', 'hos', 'Mkuu wa Sehemu', null, '', null, '4234234324', 'e8e8684152543223f547aaeed3a1565f', 'tmp_1594368340', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('128', '69', 'sdfsdfsd', 'fsdfsdf', 'sdfsdfsd', '23232323232', '23232323232', 'sdfsdf@fsdf.sdf', '1003', null, '100302', 'TZ100003', 'TGS', 'E', 'hos', 'Mkuu wa Sehemu', null, '', null, '3232323232', '1f839a6f81727fc54c06d4e4be5bc51e', 'tmp_1594368382', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('129', '69', 'ewrwerwer', 'werewrwe', 'werewrwer', '3434343', '3434343434', 'werwer@fsf.sdf', '1003', null, '100301', 'TZ100003', 'TGS', 'F', 'hos', 'Mkuu wa Sehemu', null, '', null, '34343434', '22be0926f98c5185e95f45915b3a7b2d', 'tmp_1594368418', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('130', '69', 'fsfsdfsd', 'sdfsdfsd', 'sdfsdfs', '343434343', '34343434343', 'sdfs@fsdf.fds', '4001', null, '400102', 'TZ100003', 'LSSE', '2', 'hos', 'Mkuu wa Sehemu', null, '', null, '3434344343', '4f335fa35a63cd8f4ba56a6833d0bb6a', 'tmp_1594368456', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('131', '69', 'sdfsdfsdf', 'sdfsdfsd', 'sdfsdfsdf', '4324234234', '34343434343', 'sdfsd@fsdf.fsd', '4001', null, '400101', 'TZ1001HOS', 'TGS', 'E', 'hos', 'Mkuu wa Sehemu', null, '', null, '43423424', '4f335fa35a63cd8f4ba56a6833d0bb6a', 'tmp_1594368494', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_copy1` VALUES ('132', '69', 'Bil Thadey', 'www', 'www', '232323', '323232323232', 'ww@ww.ww', '1001', null, '999999', 'TZ1001DRIVER_2', 'TGS', 'F', 'driver', 'Dereva', null, '2323323', null, '2323232332', '8a1344d998114fab247746ff3add27ae', 'tmp_1594373494', 'yes', 'yes', null, null, null, null, null, null);
INSERT INTO `wafanyakazi_online` VALUES ('3', '69', 'Amani', 'Peter', 'John', 'PF.3591', '+255743846228', 'amani@gmail.com', '2001', '999999', 'TZ1001HOD', 'LSSE', '1', 'hod', '', null, 'STK 2099', '2001', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_online` VALUES ('5', '69', 'Maria', 'Joseph', 'Mosha', 'PF.3594', '+255715115300', 'mariamosha@yahoo.com', '1001', '999999', 'TZ1001PS', 'LSSJ', '1', 'ps', '', null, 'STK 9090', '22222222', 'e10adc3949ba59abbe56e057f20f883e', 'tmp_1580586634', 'yes', null, null, null, null, null, null, null);
INSERT INTO `wafanyakazi_online` VALUES ('23', '69', 'Msimamizi', '-', '-', '-', '+255786242424', 'msimamizi@maliasili.go.tz', '-', '-', '-', '-', '-', 'msimamizi', '-', '-', '-', 'Msimamizi', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', '', '', '', '', null, '', '');
INSERT INTO `wafanyakazi_online` VALUES ('80', '69', 'Msimamizi', '-', '-', '-', '02290992200', 'km@maliasili.go.tz', '-', '-', '-', '-', '-', 'msimamizi_mdau', '-', '-', '-', 'Dawati', '25d55ad283aa400af464c76d713c07ad', 'tmp_1580577068', 'yes', null, null, null, null, null, null, null);
