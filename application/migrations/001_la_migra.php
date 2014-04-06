<?php
class Migration_La_migra extends CI_Migration {

	public function up()
	{
    $this->db->query('
      CREATE  TABLE IF NOT EXISTS `cms_administrators` (
        `id` INT(11) NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(45) NULL DEFAULT NULL ,
        `email` VARCHAR(225) NULL DEFAULT NULL ,
        `password` VARCHAR(40) NULL DEFAULT NULL ,
        `token` VARCHAR(225) NULL ,
        `active` INT(1) NULL DEFAULT NULL ,
        `created` TIMESTAMP NULL DEFAULT NULL ,
        `updated` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,
        PRIMARY KEY (`id`) )
      ENGINE = InnoDB
      AUTO_INCREMENT = 1
      DEFAULT CHARACTER SET = utf8'
    );
    $this->db->query('
      CREATE  TABLE IF NOT EXISTS `cms`.`cms_languages` (
        `id` INT(11) NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(45) NULL DEFAULT NULL ,
        `iso_code` VARCHAR(7) NULL DEFAULT NULL ,
        `active` INT(1) NULL DEFAULT NULL ,
        `created` TIMESTAMP NULL DEFAULT NULL ,
        `updated` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,
        PRIMARY KEY (`id`) )
      ENGINE = InnoDB
      AUTO_INCREMENT = 1
      DEFAULT CHARACTER SET = utf8'
    );
	}

	public function down()
	{
		//$this->dbforge->drop_table('blog');
	}
}
