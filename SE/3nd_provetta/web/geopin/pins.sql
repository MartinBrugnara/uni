CREATE TABLE `db_sweng001`.`places` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `lat` FLOAT NULL,
  `lng` FLOAT NULL,
  PRIMARY KEY (`id`));


INSERT INTO places (id, name, address, lat, lng) VALUES (1, 'Ristorante Rosa D''oro', 'Piazza Santa Maria Maggiore, 21',  46.0684497, 11.1198718);
INSERT INTO places (id, name, address, lat, lng) VALUES (2, 'Picaro', 'Via Giovanni Segantini, 36', 46.0750164, 11.1221272);
INSERT INTO places (id, name, address, lat, lng) VALUES (3, 'Antica Trattoria Due Mori', 'Via San Marco, 11', 46.0702168, 11.1250814);
INSERT INTO places (id, name, address, lat, lng) VALUES (4, 'Pizzeria Ristorante Alla Grotta', 'Vicolo San Marco, 6', 46.0697032, 11.1247381);