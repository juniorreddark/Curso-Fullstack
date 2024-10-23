CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NULL,
  `password` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `apelido` VARCHAR(100) NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`password`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`empresa` (
  `idempresa` INT NOT NULL,
  `razao_social` VARCHAR(200) NOT NULL,
  `cnpj` INT NOT NULL,
  `logo` VARCHAR(200) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `usuario_password` INT NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cnpj`),
  INDEX `fk_empresa_usuario_idx` (`usuario_password` ASC) VISIBLE,
  CONSTRAINT `fk_empresa_usuario`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`publicacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`publicacao` (
  `idpublicacao` INT NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `titulo_prato` VARCHAR(100) NOT NULL,
  `local` VARCHAR(100) NOT NULL,
  `created_at` DATETIME(200) NOT NULL,
  `updated_at` DATETIME(200) NOT NULL,
  `usuario_password` INT NOT NULL,
  `empresa_cnpj` INT NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpublicacao`),
  INDEX `fk_publicacao_usuario1_idx` (`usuario_password` ASC) VISIBLE,
  INDEX `fk_publicacao_empresa1_idx` (`empresa_cnpj` ASC) VISIBLE,
  CONSTRAINT `fk_publicacao_usuario1`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicacao_empresa1`
    FOREIGN KEY (`empresa_cnpj`)
    REFERENCES `mydb`.`empresa` (`cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comentario` (
  `idcomentario` INT NOT NULL,
  `conteudo` TEXT(200) NOT NULL,
  `data_comentario` DATE NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `usuario_password` INT NOT NULL,
  PRIMARY KEY (`idcomentario`),
  INDEX `fk_comentario_usuario1_idx` (`usuario_password` ASC) VISIBLE,
  CONSTRAINT `fk_comentario_usuario1`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`avaliacao` (
  `descricao` LONGTEXT NOT NULL,
  `nota` INT NOT NULL,
  `usuario_password` INT NOT NULL,
  `publicacao_idpublicacao` INT NOT NULL,
  `comentario_idcomentario` INT NOT NULL,
  INDEX `fk_avaliacao_usuario1_idx` (`usuario_password` ASC) VISIBLE,
  INDEX `fk_avaliacao_publicacao1_idx` (`publicacao_idpublicacao` ASC) VISIBLE,
  INDEX `fk_avaliacao_comentario1_idx` (`comentario_idcomentario` ASC) VISIBLE,
  CONSTRAINT `fk_avaliacao_usuario1`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_publicacao1`
    FOREIGN KEY (`publicacao_idpublicacao`)
    REFERENCES `mydb`.`publicacao` (`idpublicacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_comentario1`
    FOREIGN KEY (`comentario_idcomentario`)
    REFERENCES `mydb`.`comentario` (`idcomentario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
