
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`empresa` (
  `empresa_id` INT NOT NULL,
  `cnpj` INT NOT NULL,
  `razao_social` VARCHAR(100) NOT NULL,
  `logo` VARCHAR(45) NOT NULL,
  `foto` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cnpj`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `usuario_id` INT NOT NULL,
  `password` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(11) NOT NULL,
  `apelido` VARCHAR(100) NOT NULL,
  `foto` VARCHAR(45) NOT NULL,
  `empresa_cnpj` INT NOT NULL,
  PRIMARY KEY (`password`),
  INDEX `fk_usuario_empresa1_idx` (`empresa_cnpj` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_empresa1`
    FOREIGN KEY (`empresa_cnpj`)
    REFERENCES `mydb`.`empresa` (`cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`publicacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`publicacao` (
  `publicacao_id` INT NOT NULL,
  `foto` VARCHAR(45) NOT NULL,
  `titulo_prato` VARCHAR(45) NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `codigo_publicacao` VARCHAR(45) NOT NULL,
  `usuario_password` VARCHAR(11) NOT NULL,
  `empresa_cnpj` INT NOT NULL,
  PRIMARY KEY (`codigo_publicacao`),
  INDEX `fk_publicacao_usuario_idx` (`usuario_password` ASC) VISIBLE,
  INDEX `fk_publicacao_empresa1_idx` (`empresa_cnpj` ASC) VISIBLE,
  CONSTRAINT `fk_publicacao_usuario`
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
-- Table `mydb`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`avaliacao` (
  `avaliacao_id` INT NOT NULL,
  `codigo da avaliacao` VARCHAR(45) NOT NULL,
  `avaliacao` LONGTEXT NOT NULL,
  `nota` INT NULL,
  `publicacao_codigo_publicacao` VARCHAR(45) NOT NULL,
  `usuario_password` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`codigo da avaliacao`),
  INDEX `fk_avaliacao_publicacao1_idx` (`publicacao_codigo_publicacao` ASC) VISIBLE,
  INDEX `fk_avaliacao_usuario1_idx` (`usuario_password` ASC) VISIBLE,
  CONSTRAINT `fk_avaliacao_publicacao1`
    FOREIGN KEY (`publicacao_codigo_publicacao`)
    REFERENCES `mydb`.`publicacao` (`codigo_publicacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_usuario1`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cometario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cometario` (
  `cometario_id` INT NOT NULL,
  `conteudo` LONGTEXT NOT NULL,
  `data_cometario` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  `publicacao_codigo_publicacao` VARCHAR(45) NOT NULL,
  `usuario_password` VARCHAR(11) NOT NULL,
  INDEX `fk_cometario_publicacao1_idx` (`publicacao_codigo_publicacao` ASC) VISIBLE,
  INDEX `fk_cometario_usuario1_idx` (`usuario_password` ASC) VISIBLE,
  CONSTRAINT `fk_cometario_publicacao1`
    FOREIGN KEY (`publicacao_codigo_publicacao`)
    REFERENCES `mydb`.`publicacao` (`codigo_publicacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cometario_usuario1`
    FOREIGN KEY (`usuario_password`)
    REFERENCES `mydb`.`usuario` (`password`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



