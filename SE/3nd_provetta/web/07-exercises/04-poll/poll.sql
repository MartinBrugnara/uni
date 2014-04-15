-- please replace db_swengXXX with your dbname
CREATE TABLE `db_swengXXX`.`yn_poll` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `db_swengXXX`.`yn_question` (
  `id` INT NOT NULL,
  `title` VARCHAR(500) NULL,
  `nyes` INT NULL DEFAULT 0,
  `nno` VARCHAR(45) NULL DEFAULT 0,
  PRIMARY KEY (`id`));
