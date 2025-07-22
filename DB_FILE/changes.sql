17/7/2024
ALTER TABLE `tbl_user` ADD `name` VARCHAR(255) NOT NULL AFTER `id`;
UPDATE `tbl_user` SET `name` = 'Admin' WHERE `tbl_user`.`id` = 1;
