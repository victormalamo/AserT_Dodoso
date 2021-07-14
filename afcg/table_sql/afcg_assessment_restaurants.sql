/*
MySQL Data Transfer
Source Host: localhost
Source Database: mnrtsafari
Target Host: localhost
Target Database: mnrtsafari
Date: 7/3/2021 8:49:52 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for afcg_assessment_town_hotel
-- ----------------------------
DROP TABLE IF EXISTS `afcg_assessment_motel`;
CREATE TABLE `afcg_assessment_restaurant` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `assessment_id` varchar(50) DEFAULT NULL,
  `facility_id` varchar(50) DEFAULT NULL,
  `assessor_category` varchar(50) NOT NULL,
  `assessment_score` varchar(5) DEFAULT NULL,
  `location_1_1_1_text` text,
  `location_1_1_1_A` varchar(5) DEFAULT NULL,
  `location_1_1_2_text` text,
  `location_1_1_2_A` varchar(5) DEFAULT NULL,
  `location_1_1_3_text` text,
  `location_1_1_3_A` varchar(5) DEFAULT NULL,
  `location_1_1_3_B` varchar(5) DEFAULT NULL,
  `location_1_1_3_C` varchar(5) DEFAULT NULL,
  `location_1_1_4_text` text,
  `location_1_1_4_A` varchar(5) DEFAULT NULL,
  `location_1_1_5_text` text,
  `location_1_1_5_A` varchar(5) DEFAULT NULL,
  `location_1_1_6_text` text,
  `location_1_1_6_A` varchar(5) DEFAULT NULL,
  `building_2_1_1_text` text,
  `building_2_1_1_A` varchar(5) DEFAULT NULL,
  `building_2_1_2_text` text,
  `building_2_1_2_A` varchar(5) DEFAULT NULL,
  `building_2_2_1_text` text,
  `building_2_2_1_A` varchar(5) DEFAULT NULL,
  `building_2_2_1_B` varchar(5) DEFAULT NULL,
  `building_2_2_2_text` text,
  `building_2_2_2_A` varchar(5) DEFAULT NULL,
  `building_2_2_2_B` varchar(5) DEFAULT NULL,
  `building_2_2_2_C` varchar(5) DEFAULT NULL,
  `building_2_2_2_D` varchar(5) DEFAULT NULL,
  `building_2_2_2_E` varchar(5) DEFAULT NULL,
  `building_2_2_2_F` varchar(5) DEFAULT NULL,
  `building_2_3_1_text` text,
  `building_2_3_1_A` varchar(5) DEFAULT NULL,
  `reception_3_1_1_text` text,
  `reception_3_1_1_A` varchar(5) DEFAULT NULL,
  `reception_3_1_1_B` varchar(5) DEFAULT NULL,
  `reception_3_1_1_C` varchar(5) DEFAULT NULL,
  `reception_3_1_1_D` varchar(5) DEFAULT NULL,
  `reception_3_1_1_E` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_text` text,
  `dining_area_4_1_1_A` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_B` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_C` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_D` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_E` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_F` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_G` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_H` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_I` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_J` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_K` varchar(5) DEFAULT NULL,
  `dining_area_4_1_1_L` varchar(5) DEFAULT NULL,
  `dining_area_4_2_1_text` text,
  `dining_area_4_2_1_A` varchar(5) DEFAULT NULL,
  `dining_area_4_2_1_B` varchar(5) DEFAULT NULL,
  `dining_area_4_2_1_C` varchar(5) DEFAULT NULL,
  `dining_area_4_2_1_D` varchar(5) DEFAULT NULL,
  `dining_area_4_3_1_text` text,
  `dining_area_4_3_1_A` varchar(5) DEFAULT NULL,
  `dining_area_4_3_1_B` varchar(5) DEFAULT NULL,
  `dining_area_4_3_1_C` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_text` text,
  `dining_area_4_4_1_A` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_B` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_C` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_D` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_E` varchar(5) DEFAULT NULL,
  `dining_area_4_4_1_F` varchar(5) DEFAULT NULL,
  `service_5_1_1_text` text,
  `service_5_1_1_A` varchar(5) DEFAULT NULL,
  `service_5_1_1_B` varchar(5) DEFAULT NULL,
  `service_5_1_1_C` varchar(5) DEFAULT NULL,
  `service_5_1_1_D` varchar(5) DEFAULT NULL,
  `service_5_1_1_E` varchar(5) DEFAULT NULL,
  `service_5_1_1_F` varchar(5) DEFAULT NULL,
  `service_5_1_1_G` varchar(5) DEFAULT NULL,
  `service_5_1_1_H` varchar(5) DEFAULT NULL,
  `service_5_1_1_I` varchar(5) DEFAULT NULL,
  `service_5_1_1_J` varchar(5) DEFAULT NULL,
  `service_5_1_1_K_a` varchar(5) DEFAULT NULL,
  `service_5_1_1_K_b` varchar(5) DEFAULT NULL,
  `service_5_1_1_K_c` varchar(5) DEFAULT NULL,
  `service_5_2_1_text` text,
  `service_5_2_1_A` varchar(5) DEFAULT NULL,
  `service_5_2_1_B` varchar(5) DEFAULT NULL,
  `service_5_2_1_C` varchar(5) DEFAULT NULL,
  `service_5_2_1_D` varchar(5) DEFAULT NULL,
  `service_5_2_1_E_a` varchar(5) DEFAULT NULL,
  `service_5_2_1_E_b` varchar(5) DEFAULT NULL,
  `service_5_2_1_E_c` varchar(5) DEFAULT NULL,
  `service_5_2_1_E_d` varchar(5) DEFAULT NULL,
  `service_5_2_1_F` varchar(5) DEFAULT NULL,
  `service_5_2_1_G_a` varchar(5) DEFAULT NULL,
  `service_5_2_1_G_b` varchar(5) DEFAULT NULL,
  `service_5_2_1_G_c` varchar(5) DEFAULT NULL,
  `service_5_2_1_H` varchar(5) DEFAULT NULL,
  `service_5_2_1_I` varchar(5) DEFAULT NULL,
  `service_5_2_1_J` varchar(5) DEFAULT NULL,
  `service_5_3_1_text` text,
  `service_5_3_1_A` varchar(5) DEFAULT NULL,
  `service_5_3_1_B` varchar(5) DEFAULT NULL,
  `entertainment_6_1_1_text` text,
  `entertainment_6_1_1_A` varchar(5) DEFAULT NULL,
  `entertainment_6_1_1_B` varchar(5) DEFAULT NULL,
  `entertainment_6_1_1_C` varchar(5) DEFAULT NULL,
  `bar_7_1_1_text` text,
  `bar_7_1_1_A` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_a` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_b` varchar(5) DEFAULT NULL,
  `bar_7_1_1_B_c` varchar(5) DEFAULT NULL,
  `bar_7_1_1_C` varchar(5) DEFAULT NULL,
  `bar_7_1_1_D` varchar(5) DEFAULT NULL,
  `bar_7_1_1_E` varchar(5) DEFAULT NULL,
  `bar_7_2_1_text` text,
  `bar_7_2_1_A` varchar(5) DEFAULT NULL,
  `bar_7_2_1_B` varchar(5) DEFAULT NULL,
  `bar_7_2_1_C` varchar(5) DEFAULT NULL,
  `bar_7_2_1_D` varchar(5) DEFAULT NULL,
  `bar_7_2_2_text` text,
  `bar_7_2_2_A` varchar(5) DEFAULT NULL,
  `bar_7_2_2_B` varchar(5) DEFAULT NULL,
  `bar_7_2_2_C` varchar(5) DEFAULT NULL,
  `bar_7_2_2_D` varchar(5) DEFAULT NULL,
  `bar_7_2_2_E` varchar(5) DEFAULT NULL,
  `bar_7_2_2_F` varchar(5) DEFAULT NULL,
  `bar_7_3_1_text` text,
  `bar_7_3_1_A` varchar(5) DEFAULT NULL,
  `bar_7_3_1_B` varchar(5) DEFAULT NULL,
  `bar_7_3_1_C` varchar(5) DEFAULT NULL,
  `bar_7_3_1_D` varchar(5) DEFAULT NULL,
  `bar_7_3_1_E` varchar(5) DEFAULT NULL,
  `bar_7_3_1_F` varchar(5) DEFAULT NULL,
  `bar_7_4_1_text` text,
  `bar_7_4_1_A` varchar(5) DEFAULT NULL,
  `bar_7_4_1_B` varchar(5) DEFAULT NULL,
  `bar_7_4_1_C` varchar(5) DEFAULT NULL,
  `bar_7_4_1_D` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_a` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_b` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_c` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_d` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_e` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_f` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_g` varchar(5) DEFAULT NULL,
  `bar_7_4_1_E_h` varchar(5) DEFAULT NULL,
  `bar_7_4_1_F` varchar(5) DEFAULT NULL,
  `bar_7_4_1_G` varchar(5) DEFAULT NULL,
  `bar_7_4_1_H` varchar(5) DEFAULT NULL,
  `bar_7_4_1_I` varchar(5) DEFAULT NULL,
  `bar_7_5_1_text` text,
  `bar_7_5_1_A` varchar(5) DEFAULT NULL,
  `bar_7_5_1_B` varchar(5) DEFAULT NULL,
  `bar_7_5_1_C` varchar(5) DEFAULT NULL,
  `bar_7_6_1_text` text,
  `bar_7_6_1_A` varchar(5) DEFAULT NULL,
  `bar_7_6_1_B` varchar(5) DEFAULT NULL,
  `bar_7_6_1_C` varchar(5) DEFAULT NULL,
  `bar_7_7_1_text` text,
  `bar_7_7_1_A` varchar(5) DEFAULT NULL,
  `bar_7_7_1_B` varchar(5) DEFAULT NULL,
  `bar_7_7_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_1_1_text` text,
  `kitchen_8_1_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_text` text,
  `kitchen_8_2_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_2_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_text` text,
  `kitchen_8_3_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_3_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_4_1_text` text,
  `kitchen_8_4_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_text` text,
  `kitchen_8_4_2_A` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_B` varchar(5) DEFAULT NULL,
  `kitchen_8_4_2_C` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_text` text,
  `kitchen_8_5_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_H` varchar(5) DEFAULT NULL,
  `kitchen_8_5_1_I` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_text` text,
  `kitchen_8_6_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_6_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_text` text,
  `kitchen_8_7_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_7_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_text` text,
  `kitchen_8_8_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_8_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_text` text,
  `kitchen_8_9_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_C_a` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_C_b` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_9_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_text` text,
  `kitchen_8_10_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_10_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_text` text,
  `kitchen_8_11_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_11_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_text` text,
  `kitchen_8_12_1_A_a` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_A_b` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_A_c` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_A_d` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_12_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_text` text,
  `kitchen_8_13_1_A_a` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_A_b` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_A_c` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_C_a` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_C_b` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_C_c` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_C_d` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_C_e` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_D_a` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_D_b` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_13_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_text` text,
  `kitchen_8_14_1_A` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_B` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_C` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_D` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_E` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_F` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_G` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_H` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_I` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_J` varchar(5) DEFAULT NULL,
  `kitchen_8_14_1_K` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_text` text,
  `hygiene_and_sanitation_9_1_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_D_f` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_E` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_G` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_H` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_I_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_I_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_I_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_I_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_I_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_J` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_1_1_K` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_text` text,
  `hygiene_and_sanitation_9_2_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_D` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_e` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_f` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_g` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_h` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_E_i` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_G` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_H_a` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_H_b` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_H_c` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_H_d` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_I` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_2_1_J` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_text` text,
  `hygiene_and_sanitation_9_3_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_D` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_E` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_3_1_F` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_4_1_text` text,
  `hygiene_and_sanitation_9_4_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_12_4_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_4_1_C` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_5_1_text` text,
  `hygiene_and_sanitation_9_5_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_5_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_6_1_text` text,
  `hygiene_and_sanitation_9_6_1_A` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_6_1_B` varchar(5) DEFAULT NULL,
  `hygiene_and_sanitation_9_6_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_text` text,
  `safety_and_security_10_1_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_a` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_b` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_c` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_d` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_e` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_f` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_E_g` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_F` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_G` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_H` varchar(5) DEFAULT NULL,
  `safety_and_security_10_1_1_I` varchar(5) DEFAULT NULL,
  `safety_and_security_10_2_1_text` text,
  `safety_and_security_10_2_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_10_2_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_text` text,
  `safety_and_security_10_3_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_F` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_G` varchar(5) DEFAULT NULL,
  `safety_and_security_10_3_1_H` varchar(5) DEFAULT NULL,
  `safety_and_security_10_4_1_text` text,
  `safety_and_security_10_4_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_10_4_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_10_4_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_10_5_1_text` text,
  `safety_and_security_10_5_1_A` varchar(5) DEFAULT NULL,
  `safety_and_security_10_5_1_B` varchar(5) DEFAULT NULL,
  `safety_and_security_10_5_1_C` varchar(5) DEFAULT NULL,
  `safety_and_security_10_5_1_D` varchar(5) DEFAULT NULL,
  `safety_and_security_10_5_1_E` varchar(5) DEFAULT NULL,
  `safety_and_security_10_6_1_text` text,
  `safety_and_security_10_6_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_1_1_text` text,
  `sundry_services_11_1_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_1_1_B` varchar(5) DEFAULT NULL,
  `sundry_services_11_2_1_text` text,
  `sundry_services_11_2_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_2_1_B` varchar(5) DEFAULT NULL,
  `sundry_services_11_2_1_C` varchar(5) DEFAULT NULL,
  `sundry_services_11_3_1_text` text,
  `sundry_services_11_3_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_4_1_text` text,
  `sundry_services_11_4_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_5_1_text` text,
  `sundry_services_11_5_1_A` varchar(5) DEFAULT NULL,
  `sundry_services_11_5_1_B` varchar(5) DEFAULT NULL,
  `sundry_services_11_6_1_text` text,
  `sundry_services_11_6_1_A` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_text` text,
  `human_resources_12_1_1_A` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_B` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_C` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_D` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_E_a` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_E_b` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_E_c` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_E_d` varchar(5) DEFAULT NULL,
  `human_resources_12_1_1_E_e` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_text` text,
  `human_resources_12_2_1_A_a` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_A_b` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_A_c` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_B_a` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_B_b` varchar(5) DEFAULT NULL,
  `human_resources_12_2_1_B_c` varchar(5) DEFAULT NULL,
  `human_resources_12_3_1_text` text,
  `human_resources_12_3_1_A` varchar(5) DEFAULT NULL,
  `human_resources_12_4_1_text` text,
  `human_resources_12_4_1_A` varchar(5) DEFAULT NULL,
  `human_resources_12_4_1_B` varchar(5) DEFAULT NULL,
  `human_resources_12_4_1_C` varchar(5) DEFAULT NULL,
  `human_resources_12_4_1_D` varchar(5) DEFAULT NULL,
  `general_13_1_1_text` text,
  `general_13_1_1_A_a` varchar(5) DEFAULT NULL,
  `general_13_1_1_A_b` varchar(5) DEFAULT NULL,
  `general_13_1_1_A_c` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`,`assessor_category`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
