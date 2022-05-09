/**
 * Author:  koriss
 * Created: 17 mars 2022
 */

UPDATE `menu` SET `menu_url` = 'parametres/equipement/famille_liste' WHERE `menu`.`menu_id` = 11051;  

/**
 * Author:  simon
 * Created: 24 mars 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/component/famille_liste' WHERE `menu`.`menu_id` = 11101; 
UPDATE `menu` SET `menu_url` = 'parametres/component/sub_family_list' WHERE `menu`.`menu_id` = 11102; 

/**
 * Author:  simon
 * Created: 25 mars 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/component/group' WHERE `menu`.`menu_id` = 11103; 
UPDATE `menu` SET `menu_url` = 'parametres/component/state' WHERE `menu`.`menu_id` = 11104; 
UPDATE `menu` SET `menu_url` = 'parametres/component/type' WHERE `menu`.`menu_id` = 11105; 
UPDATE `menu` SET `menu_url` = 'parametres/item/family_list' WHERE `menu`.`menu_id` = 11151;
UPDATE `menu` SET `menu_url` = 'parametres/item/sub_family_list' WHERE `menu`.`menu_id` = 11152; 
UPDATE `menu` SET `menu_url` = 'parametres/item/group_list' WHERE `menu`.`menu_id` = 11153; 
UPDATE `menu` SET `menu_url` = 'parametres/item/unit_list' WHERE `menu`.`menu_id` = 11154; 
UPDATE `menu` SET `menu_url` = 'parametres/item/stock_room_list' WHERE `menu`.`menu_id` = 11155;  

/**
 * Author:  simon
 * Created: 28 mars 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/item/stock_sheet_list' WHERE `menu`.`menu_id` = 11156;
UPDATE `menu` SET `menu_url` = 'parametres/member/family_list' WHERE `menu`.`menu_id` = 11201; 
UPDATE `menu` SET `menu_url` = 'parametres/member/team_list' WHERE `menu`.`menu_id` = 11202;
UPDATE `menu` SET `menu_url` = 'parametres/member/qualification_list' WHERE `menu`.`menu_id` = 11203; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/family_list' WHERE `menu`.`menu_id` = 11251; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/payment_method_list' WHERE `menu`.`menu_id` = 11254; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/payment_term_list' WHERE `menu`.`menu_id` = 11255; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/term_delivery_list' WHERE `menu`.`menu_id` = 11256; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/supplier_function_list' WHERE `menu`.`menu_id` = 11258; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/litigation_list' WHERE `menu`.`menu_id` = 11259; 
UPDATE `menu` SET `menu_url` = 'parametres/routine/family_list' WHERE `menu`.`menu_id` = 11301; 

ALTER TABLE `qualification` CHANGE `qualification_deactivated_date` `qualification_deactivated_date` DATETIME NULL DEFAULT NULL;

/**
 * Author:  simon
 * Created: 29 mars 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/routine/sub_family_list' WHERE `menu`.`menu_id` = 11302;    
UPDATE `menu` SET `menu_url` = 'parametres/member/member_qualification_list' WHERE `menu`.`menu_id` = 11204; 
UPDATE `menu` SET `menu_url` = 'parametres/member/member_document_list' WHERE `menu`.`menu_id` = 11205; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/contact_list' WHERE `menu`.`menu_id` = 11257; 
UPDATE `menu` SET `menu_url` = 'parametres/supplier/activity_area_list' WHERE `menu`.`menu_id` = 11252; 
UPDATE `menu` SET `menu_url` = 'parametres/routine/routine_item_list' WHERE `menu`.`menu_id` = 11303; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/nature_group_list' WHERE `menu`.`menu_id` = 11351; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/symptom_list' WHERE `menu`.`menu_id` = 11353; 

/**
 * Author:  simon
 * Created: 30 mars 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/intervention/diagnosis_list' WHERE `menu`.`menu_id` = 11354; 
ALTER TABLE `diagnosis` DROP `equipment_family`;
UPDATE `menu` SET `menu_code` = 'remedy', `menu_english_designation` = 'Remedy', `menu_url` = 'parametres/intervention/remedy_list' WHERE `menu`.`menu_id` = 11355; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/priority_list' WHERE `menu`.`menu_id` = 11356; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/work_order_status_list' WHERE `menu`.`menu_id` = 11358; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/nature_list' WHERE `menu`.`menu_id` = 11352; 
UPDATE `menu` SET `menu_url` = 'parametres/intervention/activity_type_list' WHERE `menu`.`menu_id` = 11357; 
UPDATE `menu` SET `menu_url` = 'parametres/meter/meter_unit_list' WHERE `menu`.`menu_id` = 11401; 
UPDATE `menu` SET `menu_url` = 'parametres/preventive/calendar_list' WHERE `menu`.`menu_id` = 11451; 
ALTER TABLE `calendar` CHANGE `calendar_days_1` `calendar_days_1` TINYINT NULL DEFAULT NULL; 
ALTER TABLE `calendar` CHANGE `calendar_days_2` `calendar_days_2` TINYINT NULL DEFAULT NULL, CHANGE `calendar_days_3` `calendar_days_3` TINYINT NULL DEFAULT NULL, CHANGE `calendar_days_4` `calendar_days_4` TINYINT NULL DEFAULT NULL, CHANGE `calendar_days_5` `calendar_days_5` TINYINT NULL DEFAULT NULL, CHANGE `calendar_days_6` `calendar_days_6` TINYINT NULL DEFAULT NULL, CHANGE `calendar_days_7` `calendar_days_7` TINYINT NULL DEFAULT NULL; 
UPDATE `menu` SET `menu_url` = 'parametres/preventive/planning_type_list' WHERE `menu`.`menu_id` = 11452; 
UPDATE `menu` SET `menu_url` = 'parametres/contract/family_list' WHERE `menu`.`menu_id` = 11501; 
UPDATE `menu` SET `menu_url` = 'parametres/project/family_list' WHERE `menu`.`menu_id` = 11551;
DELETE FROM `user_profile_privacy_settings` WHERE `user_profile_privacy_settings`.`privacy_settings_user_profile_id` = 1 AND `user_profile_privacy_settings`.`privacy_settings_menu_id` = 11601; 
DELETE FROM `menu` WHERE `menu`.`menu_id` = 11601;
UPDATE `menu` SET `menu_code` = 'type_document', `menu_english_designation` = 'Type document', `menu_french_designation` = 'Type document' WHERE `menu`.`menu_id` = 11600; 
UPDATE `menu` SET `menu_url` = 'parametres/typedocument/type_document_list' WHERE `menu`.`menu_id` = 11600;

/**
 * Author:  simon
 * Created: 31 mars 2022
 */ 
UPDATE `menu` SET `menu_url` = 'parametres/currency/currency_list' WHERE `menu`.`menu_id` = 11650; 
UPDATE `menu` SET `menu_url` = 'parametres/country/country_list' WHERE `menu`.`menu_id` = 11700; 
UPDATE `menu` SET `menu_url` = 'parametres/vat/vat_list' WHERE `menu`.`menu_id` = 11750; 
UPDATE `menu` SET `menu_url` = 'parametres/meter/meter_list' WHERE `menu`.`menu_id` = 11402; 
ALTER TABLE `settings` CHANGE `settings_color_code` `settings_color_code` VARCHAR(24) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#fff4de'; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/sub_family_list' WHERE `menu`.`menu_id` = 11052; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/group_list' WHERE `menu`.`menu_id` = 11053; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/state_list' WHERE `menu`.`menu_id` = 11054; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/mark_list' WHERE `menu`.`menu_id` = 11055; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/type_list' WHERE `menu`.`menu_id` = 11056; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/criticality_list' WHERE `menu`.`menu_id` = 11057; 
UPDATE `menu` SET `menu_code` = 'criticality', `menu_english_designation` = 'Criticality' WHERE `menu`.`menu_id` = 11057; 
UPDATE `menu` SET `menu_url` = 'parametres/equipement/planning_list' WHERE `menu`.`menu_id` = 11058; 


/**
 * Author:  simon
 * Created: 05 mai 2022
 */ 
ALTER TABLE `component_family` CHANGE `component_family_automaticnumbering` `component_family_automatic_numbering` INT(11) NULL DEFAULT '0', CHANGE `component_family_formatnumber` `component_family_format_number` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '', CHANGE `component_family_lastnumber` `component_family_last_number` INT(20) NULL DEFAULT NULL; 
ALTER TABLE `item_family` CHANGE `item_family_automaticnumbering` `item_family_automatic_numbering` TINYINT(4) NULL DEFAULT '0', CHANGE `item_family_formatnumber` `item_family_format_number` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '', CHANGE `item_family_lastnumber` `item_family_last_number` INT(11) NULL DEFAULT NULL; 

/**
 * Author:  simon
 * Created: 06 mai 2022
 */ 
ALTER TABLE `type_document` CHANGE `type_document_automaticnumbering` `type_document_automatic_numbering` TINYINT(4) NULL DEFAULT '0', CHANGE `type_document_formatnumber` `type_document_format_number` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '', CHANGE `type_document_lastnumber` `type_document_last_number` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL; 


/**
 * Author:  simon
 * Created: 07 mai 2022
 */
ALTER TABLE `routine_subfamily` CHANGE `routine_user_creation` `routine_subfamily_user_creation` INT(11) NOT NULL DEFAULT '0', CHANGE `routine_user_modification` `routine_subfamily_user_modification` INT(11) NOT NULL DEFAULT '0'; 
ALTER TABLE `routine_subfamily` CHANGE `routine_deactivated_date` `routine_subfamily_deactivated_date` DATETIME NULL DEFAULT NULL; 


UPDATE `menu` SET `menu_url` = 'administration/user_profile' WHERE `menu`.`menu_id` = 12100; 
UPDATE `menu` SET `menu_url` = 'administration/user_accounts' WHERE `menu`.`menu_id` = 12200; 
UPDATE `menu` SET `menu_url` = 'administration/system_preference' WHERE `menu`.`menu_id` = 12300; 
UPDATE `menu` SET `menu_url` = 'administration/system_upgrade' WHERE `menu`.`menu_id` = 12400; 

/**
 * Author:  simon
 * Created: 08 mai 2022
 */
ALTER TABLE `user_profile` CHANGE `user_profile_is_valid_profile` `user_profile_is_valid_profile` TINYINT(4) NULL DEFAULT '1'; 

/**
 * Author:  simon
 * Created: 11 mai 2022
 */
ALTER TABLE `meter` CHANGE `meter_date_initialize_meter_value` `meter_date_initialize_meter_value` DATETIME NULL DEFAULT NULL;
ALTER TABLE `meter` CHANGE `meter_user_creation` `meter_user_creation` INT(11) NOT NULL, CHANGE `meter_user_modification` `meter_user_modification` INT(11) NOT NULL; 


/**
 * Author:  simon
 * Created: 13 mai 2022
 */
UPDATE `menu` SET `menu_url` = 'nomenclature/sector/sector_list' WHERE `menu`.`menu_id` = 7202; 
UPDATE `menu` SET `menu_url` = 'nomenclature/sector/sector_new' WHERE `menu`.`menu_id` = 7201; 
ALTER TABLE `sector` CHANGE `sector_code` `sector_code` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL; 
UPDATE `menu` SET `menu_url` = 'nomenclature/branch/branch_list' WHERE `menu`.`menu_id` = 7302; 
UPDATE `menu` SET `menu_url` = 'nomenclature/branch/branch_new' WHERE `menu`.`menu_id` = 7301; 

/**
 * Author:  simon
 * Created: 14 mai 2022
 */

ALTER TABLE `branch` CHANGE `branch_parent` `branch_parent_id` INT(11) NULL DEFAULT NULL; 
UPDATE `menu` SET `menu_url` = 'nomenclature/cost_center/cost_center_list' WHERE `menu`.`menu_id` = 7402; 
UPDATE `menu` SET `menu_url` = 'nomenclature/cost_center/cost_center_new' WHERE `menu`.`menu_id` = 7401; 
UPDATE `menu` SET `menu_url` = 'nomenclature/analytical_center/analytical_center_new' WHERE `menu`.`menu_id` = 7501; 
UPDATE `menu` SET `menu_url` = 'nomenclature/analytical_center/analytical_center_list' WHERE `menu`.`menu_id` = 7502; 
ALTER TABLE `equipment` CHANGE `equip_equipment_parent` `equip_equipment_parent_id` INT(11) NULL DEFAULT NULL;  

/**
 * Author:  simon
 * Created: 15 mai 2022
 */

UPDATE `menu` SET `menu_url` = 'nomenclature/equipment/equipment_list' WHERE `menu`.`menu_id` = 7602; 
UPDATE `menu` SET `menu_url` = 'nomenclature/equipment/equipment_new' WHERE `menu`.`menu_id` = 7601; 


/**
 * Author:  simon
 * Created: 19 mai 2022
 */

ALTER TABLE `equipment` CHANGE `equip_warranty_date` `equip_end_warranty_date` DATETIME NULL DEFAULT NULL; 



/**
 * Author:  koris
 * Created: 27 04 2022
 */
UPDATE `menu` SET `menu_url` = 'suivi_equipement/transfert_component' WHERE `menu`.`menu_id` = 2300; 
UPDATE `menu` SET `menu_url` = 'suivi_equipement/transfert_equipement' WHERE `menu`.`menu_id` = 2200; 
UPDATE `menu` SET `menu_url` = 'suivi_equipement/releve_mesure' WHERE `menu`.`menu_id` = 2100; 
/**
 * Author:  simon
 * Created: 25 avril 2022
 */

UPDATE `menu` SET `menu_url` = 'nomenclature/component/component_list' WHERE `menu`.`menu_id` = 7702; 

/**
 * Author:  simon
 * Created: 26 avril 2022
 */
UPDATE `menu` SET `menu_url` = 'nomenclature/component/component_new' WHERE `menu`.`menu_id` = 7701; 
UPDATE `menu` SET `menu_url` = 'nomenclature/item/item_list' WHERE `menu`.`menu_id` = 7802; 

/**
 * Author:  simon
 * Created: 27 avril 2022
 */

ALTER TABLE `item` CHANGE `item_is_stored` `item_is_not_stored` TINYINT(4) NULL DEFAULT '0'; 
UPDATE `menu` SET `menu_url` = 'nomenclature/item/item_new' WHERE `menu`.`menu_id` = 7801; 


/**
 * Author:  simon
 * Created: 28 avril 2022
 */
UPDATE `menu` SET `menu_url` = 'parametres/users/company_profile' WHERE `menu`.`menu_id` = 7150; 
UPDATE `menu` SET `menu_url` = 'users/company_profile' WHERE `menu`.`menu_id` = 7150; 
UPDATE `menu` SET `menu_url` = 'actors/member/member_list' WHERE `menu`.`menu_id` = 8102; 
UPDATE `menu` SET `menu_url` = 'actors/member/member_new' WHERE `menu`.`menu_id` = 8101; 


INSERT INTO `member` (`member_id`, `member_code`, `member_name`, `member_cost_center_id`, `member_family_id`, `member_image`, `member_person_in_charge_id`, `member_supplier_id`, `member_hourly_wage_rate`, `member_address`, `member_zip_code`, `member_city`, `member_country_id`, `member_phone_number`, `member_email`, `member_secondary_mail`, `member_is_sender_wr_wo`, `member_is_recipient_wr_wo`, `member_is_entry_of_activity`, `member_is_closure_wo`, `member_is_wo_tpm_activity`, `member_is_stock_movement`, `member_is_stock_receipt`, `member_is_quality_control`, `member_is_deactivated`, `member_deactivated_date`, `member_created_date`, `member_updated_date`, `member_user_creation`, `member_user_modification`, `company_id`) VALUES
(1, 'SS', 'SIEZA Simon', 1, 2, 'default.png', NULL, 1, 25000, 'BP10000', NULL, 'Ouagadougou', 1, '20202020', 'simon@gmail.fr', NULL, 1, 1, 1, 1, 0, 0, 0, 0, 0, NULL, '2022-04-28 14:22:50', '2022-04-28 14:22:50', 0, 0, 1);
COMMIT;

/**
 * Author:  simon
 * Created: 29 avril 2022
 */
INSERT INTO `menu` (`menu_id`, `menu_code`, `menu_english_designation`, `menu_french_designation`, `menu_id_parent`, `menu_icon`, `menu_url`, `menu_order_by`, `menu_is_activated`, `menu_is_action`, `menu_is_not_view_in_saas`, `menu_created_date`, `menu_updated_date`, `menu_user_creation`, `menu_user_modification`) VALUES ('11601', 'document', 'Document', 'Document', '11600', '', '', '1', '1', '0', '0', current_timestamp(), '2022-04-29 12:05:27.000000', '0', '0'), ('11602', 'type_document', 'Document type', 'Type document', '11600', '', 'parametres/typedocument/type_document_list', '2', '1', '0', '0', current_timestamp(), '2022-04-29 12:05:27.000000', '0', '0'); 
UPDATE `menu` SET `menu_code` = 'documents', `menu_english_designation` = 'Documents', `menu_french_designation` = 'Documents', `menu_url` = '' WHERE `menu`.`menu_id` = 11600; 
INSERT INTO `user_profile_privacy_settings` (`privacy_settings_user_profile_id`, `privacy_settings_menu_id`, `privacy_settings_view`, `privacy_settings_add`, `privacy_settings_edit`, `privacy_settings_delete`, `privacy_settings_created_date`, `privacy_settings_updated_date`, `privacy_settings_user_creation`, `privacy_settings_user_modification`, `company_id`) VALUES ('1', '11601', '1', '1', '1', '1', '2022-04-29 12:19:09.000000', '2022-04-29 12:19:09.000000', '0', '0', '1'), ('1', '11602', '1', '1', '1', '1', '2022-04-29 12:19:09.000000', '2022-04-29 12:19:09.000000', '0', '0', '1'); 
INSERT INTO `document` (`doc_id`, `doc_code`, `doc_designation`, `doc_type_document_id`, `doc_last_num`, `doc_file_attach`, `doc_original_name`, `doc_is_deactivated`, `doc_deactivated_date`, `doc_created_date`, `doc_updated_date`, `doc_user_creation`, `doc_user_modification`, `company_id`) VALUES ('1', 'TXT', 'maintex', '3', NULL, 'maintex.txt', 'maintex.txt', '0', NULL, '2022-04-29 17:43:50.000000', '2022-04-29 17:43:50.000000', '0', '0', '1'); 
UPDATE `menu` SET `menu_url` = 'parametres/document/document_list' WHERE `menu`.`menu_id` = 11601; 

/**
 * Author:  simon
 * Created: 03 mai 2022
 */
ALTER TABLE `item` CHANGE `item_stock_room_id` `item_stock_room_id` INT(11) NULL DEFAULT NULL; 

/**
 * Author:  simon
 * Created: 04 mai 2022
 */
ALTER TABLE `member_document` CHANGE `member_doc_comment` `member_doc_comment` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL; 

/**
 * Author:  simon
 * Created: 05 mai 2022
 */
UPDATE `menu` SET `menu_url` = 'actors/supplier/supplier_list' WHERE `menu`.`menu_id` = 8202; 

/**
 * Author:  simon
 * Created: 06 mai 2022
 */
UPDATE `menu` SET `menu_url` = 'actors/supplier/supplier_new' WHERE `menu`.`menu_id` = 8201; 


SELECT DISTINCT `member_cost_center_member_id` 
FROM `member`, `member_cost_center`
WHERE
`member`.`member_id` = `member_cost_center`.`member_cost_center_member_id`
AND  `member_cost_center`.`member_cost_center_cost_center_id`
IN (SELECT `user_cost_center_cost_center_id` 
	FROM `user_cost_center` WHERE
	`user_cost_center`.`user_cost_center_user_id` = 1);
