categoriasCREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`usuario` (
  `cpf` INT NOT NULL,
  `nome` VARCHAR(200) NOT NULL,
  `data_nascimento` VARCHAR(200) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(200) NOT NULL,
  `data_criacao` VARCHAR(200) NOT NULL,
  `data_atualizacao` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`postagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`postagens` (
  `idpostagens` INT NOT NULL,
  `titulo_postagens` VARCHAR(200) NOT NULL,
  `data_postagens` DATE NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `usuario_cpf` INT NOT NULL,
  `conteudo` VARCHAR(200) NOT NULL,
  `data_criacao` VARCHAR(200) NOT NULL,
  `data_atualiazacao` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idpostagens`),
  INDEX `fk_postagens_usuario_idx` (`usuario_cpf` ASC) VISIBLE,
  CONSTRAINT `fk_postagens_usuario`
    FOREIGN KEY (`usuario_cpf`)
    REFERENCES `blog`.`usuario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mesagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`mesagens` (
  `idmesagens` INT NOT NULL,
  `titulo_mesagens` VARCHAR(200) NOT NULL,
  `data_mesagens` VARCHAR(200) NOT NULL,
  `usuario_cpf` INT NOT NULL,
  `conteudo` VARCHAR(200) NOT NULL,
  `data_envior` VARCHAR(200) NOT NULL,
  `postagens_idpostagens` INT NOT NULL,
  PRIMARY KEY (`idmesagens`),
  INDEX `fk_mesagens_usuario1_idx` (`usuario_cpf` ASC) VISIBLE,
  INDEX `fk_mesagens_postagens1_idx` (`postagens_idpostagens` ASC) VISIBLE,
  CONSTRAINT `fk_mesagens_usuario1`
    FOREIGN KEY (`usuario_cpf`)
    REFERENCES `blog`.`usuario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mesagens_postagens1`
    FOREIGN KEY (`postagens_idpostagens`)
    REFERENCES `blog`.`postagens` (`idpostagens`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;