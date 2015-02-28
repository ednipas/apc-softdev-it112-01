SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `softdev_Alo_Marc_ourspace`.`myaddress`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softdev_Alo_Marc_ourspace`.`myaddress` (
  `id` INT NOT NULL ,
  `firsname` VARCHAR(30) NULL ,
  `middlename` VARCHAR(30) NULL ,
  `lastname` VARCHAR(30) NULL ,
  `gender` VARCHAR(1) NULL ,
  `created_at` TIMESTAMP NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `softdev_Alo_Marc_ourspace`.`mycomment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `softdev_Alo_Marc_ourspace`.`mycomment` (
  `id` INT NOT NULL ,
  `myaddress_id` INT NOT NULL ,
  `author` VARCHAR(255) NULL ,
  `body` LONGTEXT NULL ,
  `created_at` TIMESTAMP NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_mycomment_myaddress_idx` (`myaddress_id` ASC) ,
  CONSTRAINT `fk_mycomment_myaddress`
    FOREIGN KEY (`myaddress_id` )
    REFERENCES `softdev_Alo_Marc_ourspace`.`myaddress` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
