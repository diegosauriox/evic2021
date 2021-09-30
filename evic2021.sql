-- MySQL Script generated by MySQL Workbench
-- Sun Aug 29 19:54:16 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema evic2021
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `evic2021` ;

-- -----------------------------------------------------
-- Schema evic2021
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `evic2021` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema evic2021
-- -----------------------------------------------------
USE `evic2021` ;

-- -----------------------------------------------------
-- Table `evic2021`.`inscritos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `evic2021`.`inscritos` ;

CREATE TABLE IF NOT EXISTS `evic2021`.`inscritos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  `pais` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `profesional` VARCHAR(45) NULL,
  `estudiante` VARCHAR(45) NULL,
  `carrera` VARCHAR(45) NULL,
  `universidad` VARCHAR(45) NULL,
  `pre_post` VARCHAR(45) NULL,
  `pueblo_originario` VARCHAR(45) NULL,
  `numero_ieee` INT NULL,
  `recluta` TINYINT NULL,
  `telefono` VARCHAR(45) NULL,
  `tecnicas` VARCHAR(255) NULL,
  `area_aplicacion` VARCHAR(255) NULL,
  `situacion_carrera` VARCHAR(255) NULL,
  `inscritoscol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evic2021`.`empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `evic2021`.`empresa` ;

CREATE TABLE IF NOT EXISTS `evic2021`.`empresa` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evic2021`.`tipo_trabajo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `evic2021`.`tipo_trabajo` ;

CREATE TABLE IF NOT EXISTS `evic2021`.`tipo_trabajo` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evic2021`.`inscritos_has_empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `evic2021`.`inscritos_has_empresa` ;

CREATE TABLE IF NOT EXISTS `evic2021`.`inscritos_has_empresa` (
  `inscritos_id` INT NOT NULL,
  `empresa_id` INT NOT NULL,
  `tipo_trabajo_id` INT NOT NULL,
  INDEX `fk_inscritos_has_empresa_tipo_trabajo1_idx` (`tipo_trabajo_id` ASC),
  INDEX `fk_inscritos_has_empresa_inscritos1_idx` (`inscritos_id` ASC),
  INDEX `fk_inscritos_has_empresa_empresa2_idx` (`empresa_id` ASC),
  CONSTRAINT `fk_inscritos_has_empresa_tipo_trabajo1`
    FOREIGN KEY (`tipo_trabajo_id`)
    REFERENCES `evic2021`.`tipo_trabajo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscritos_has_empresa_inscritos1`
    FOREIGN KEY (`inscritos_id`)
    REFERENCES `evic2021`.`inscritos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscritos_has_empresa_empresa2`
    FOREIGN KEY (`empresa_id`)
    REFERENCES `evic2021`.`empresa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


INSERT INTO `empresa`(`id`, `nombre`) VALUES (1,'Arauco');
INSERT INTO `empresa`(`id`, `nombre`) VALUES (2,'Unhoster');
INSERT INTO `empresa`(`id`, `nombre`) VALUES (3,'Anastasia');
INSERT INTO `empresa`(`id`, `nombre`) VALUES (4,'Alaya ');

INSERT INTO `tipo_trabajo`(`id`, `nombre`) VALUES (1,'trabajo full time');
INSERT INTO `tipo_trabajo`(`id`, `nombre`) VALUES (2,'trabajo part time');
INSERT INTO `tipo_trabajo`(`id`, `nombre`) VALUES (3,'práctica profesional');
INSERT INTO `tipo_trabajo`(`id`, `nombre`) VALUES (4,'práctica');
INSERT INTO `tipo_trabajo`(`id`, `nombre`) VALUES (5,'práctica 1');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;