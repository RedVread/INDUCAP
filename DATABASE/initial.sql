DROP DATABASE incuap-cotxes IF EXISTS;

CREATE DATABASE `incuap-cotxes`;

-- `incuap-cotxes`.cotxes definition

CREATE TABLE vehicles (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `year` year DEFAULT NULL,
  `kms` int DEFAULT NULL,
  `numPlate` varchar(100) DEFAULT NULL,
  `fuel` varchar(100) DEFAULT NULL,
  `doors` int DEFAULT NULL,
  `seats` int DEFAULT NULL,
  `numPlateDate` DATE DEFAULT NULL,
  `transmission` int DEFAULT NULL,
  `displacement` int DEFAULT NULL,
  `hp` int DEFAULT NULL,
  `guarantee` varchar(100) DEFAULT 'A consultar',
  `equipment` JSON DEFAULT NULL,
  `pics` JSON DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(1, 'Toyota', 'Corolla', 'Blanco', 2020, 35000, '1234ABC', 'Gasolina', 5, 5, '2020-05-10', 1, 1600, 110, '12', '["Aire acondicionado","ABS","Bluetooth"]', '["https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/2020_Toyota_Corolla_SE%2C_front_2.29.20.jpg/2560px-2020_Toyota_Corolla_SE%2C_front_2.29.20.jpg"]', 'Coche compacto, económico y fiable.', 10000.0, 'car');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(2, 'Volkswagen', 'Golf', 'Negro', 2019, 58000, '2345BCD', 'Diésel', 5, 5, '2019-03-22', 1, 2000, 150, '6', '["Navegador","Sensor de lluvia","Control crucero"]', '["https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20190411_0094/full-original.jpg"]', 'Golf en excelente estado, único propietario.', 10000.0, 'car');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(3, 'Renault', 'Clio', 'Rojo', 2021, 15000, '3456CDE', 'Gasolina', 5, 5, '2021-08-14', 1, 1200, 90, '12', '["Bluetooth","Cámara trasera","USB"]', '["https://getrentacar.com/storage/cache/images/960-640-100-fit-179847.jpeg"]', 'Vehículo urbano, ideal para ciudad.', 10000.0, 'car');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(4, 'Seat', 'Leon', 'Gris', 2022, 22000, '4567DEF', 'Gasolina', 5, 5, '2022-01-10', 1, 1400, 130, '24', '["Start/Stop","Climatizador","Volante multifunción"]', '["https://soymotor.com/sites/default/files/usuarios/redaccion/portal/jmorillo/seat_leon_2020_3.jpg"]', 'Modelo reciente, perfecto estado.', 10000.0, 'car');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(5, 'Honda', 'Civic', 'Azul', 2018, 68000, '5678EFG', 'Gasolina', 4, 5, '2018-07-30', 1, 1800, 140, '6', '["Freno automático","Faros LED","Apple CarPlay"]', '["https://img.lavdg.com/sc/ho11nXaQc1eO70igECHt-1WDBlU=/480x/2018/05/24/00121527156023237292665/Foto/c2.jpg"]', 'Deportivo y económico, ideal para carretera.', 10000.0, 'car');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(6, 'Ford', 'Transit', 'Blanco', 2021, 40000, '6789FGH', 'Diésel', 4, 3, '2021-06-12', 2, 2200, 130, '12', '["Control estabilidad","Puerta lateral","Bluetooth"]', '["https://a.ccdn.es/cnet/vehicles/18118570/c70df37b-d32e-4b6f-96ff-b4760e0c95c8.jpg/374x281cut/"]', 'Furgoneta ideal para reparto urbano.', 10000.0, 'van');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(7, 'Peugeot', 'Partner', 'Gris', 2020, 30000, '7890GHI', 'Diésel', 4, 3, '2020-10-05', 2, 1600, 100, '6', '["Aire acondicionado","Sensor aparcamiento","USB"]', '["https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/0b1264d9-6039-42b2-96f4-5ed9fd6c85bf/Peugeot_Partner__6_.jpg"]', 'Compacta y versátil para trabajo diario.', 10000.0, 'van');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(8, 'Citroën', 'Jumpy', 'Blanco', 2019, 60000, '8901HIJ', 'Diésel', 4, 3, '2019-02-18', 2, 2000, 120, '6', '["Volante multifunción","Bluetooth","Elevalunas eléctricos"]', '["https://subastacar.com/img/img_g/11488_14.jpg"]', 'Capacidad y eficiencia para el trabajo.', 10000.0, 'van');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(9, 'Mercedes-Benz', 'Vito', 'Negro', 2022, 18000, '9012IJK', 'Diésel', 4, 6, '2022-09-22', 2, 2200, 150, '12', '["Climatizador","Cámara 360","Sensor de lluvia"]', '["https://ccautosales.au/wp-content/uploads/2023/08/L1000267_%E5%89%AF%E6%9C%AC-876x535.jpg"]', 'Alta gama y versátil.', 10000.0, 'van');

INSERT INTO vehicles
(id, make, model, color, `year`, kms, numPlate, fuel, doors, seats, numPlateDate, transmission, displacement, hp, guarantee, equipment, pics, description, price, `type`)
VALUES(10, 'Nissan', 'NV200', 'Blanco', 2021, 25000, '0123JKL', 'Gasolina', 4, 5, '2021-04-15', 2, 1600, 110, '6', '["Bluetooth","Sensor de aparcamiento","USB"]', '["https://static.cargurus.com/images/forsale/2025/05/22/05/01/2021_nissan_nv200-pic-7874064111257861732-1024x768.jpeg"]', 'Perfecta para paquetería ligera.', 10000.0, 'van');

