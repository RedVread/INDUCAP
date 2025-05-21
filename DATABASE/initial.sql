DROP DATABASE incuap-cotxes IF EXISTS;

CREATE DATABASE `incuap-cotxes`;

-- `incuap-cotxes`.cotxes definition

CREATE TABLE cotxes (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fabricant` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `any` int DEFAULT NULL,
  `fotos` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO cotxes
(fabricant, model, color, `any`, fotos)
VALUES("Audi", "A4", "Plata", 2003, "https://subastacar.com/coches-segunda-mano-ocasion/comprar-audi-a4_19_tdi_130_cv-sedan-manual-2003/67e3d5783c");

INSERT INTO cotxes
(fabricant, model, color, `any`, fotos)
VALUES("Honda", "Civic", "blanc", 1998, "https://www.sextamarcha.net/post/honda-civic-type-r-ek9-25-anos-del-type-r-parte-i");

INSERT INTO cotxes
(fabricant, model, color, `any`, fotos)
VALUES("Renault", "R5 Turbo", "vermell", 1992, "https://static.wikia.nocookie.net/gran-turismo/images/3/3a/Renault_5_Turbo_%2780_%28GT7%29.jpg/revision/latest?cb=20220419151840");

INSERT INTO cotxes
(fabricant, model, color, `any`, fotos)
VALUES("BMW", "M3 E46", "Blau", 2000, "https://storagegohistorics.blob.core.windows.net/stock/16950-2-medium.jpg?v=63860715297507");

INSERT INTO cotxes
(fabricant, model, color, `any`, fotos)
VALUES("Mitsubishi", "ASX", "Blanc", 2019, "https://procarautomotriz.cl/wp-content/uploads/2025/01/ASX-2019.jpg");