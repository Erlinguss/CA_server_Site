

CREATE DATABASE IF NOT EXISTS D00251914;
USE D00251914;


CREATE TABLE Clinic ( Clinic_Id   int NOT NULL AUTO_INCREMENT,
					  Clinic_Name      VARCHAR(50),
					  Clinic_Address   VARCHAR(200),
					  Clinic_Telephone VARCHAR(20),
					  Clinic_Email     VARCHAR(200),
					  PRIMARY KEY (clinic_id));

 CREATE TABLE Treatment_Type (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2),
    duration INT,
    materials VARCHAR(255)
);



INSERT INTO Clinic VALUES ("1", "Saint Patrick Dental Clinic", "13 Dublin road, Dundalk","353 8593 8372","spatrick.dentalclinic@gmail.com");				 
INSERT INTO Clinic VALUES ("2", "Saint Dominic Dental Clinic", "5 St Street, Dublin","353 5726 9422","sdominic.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("3", "Saint Joan  Dental Clinic", "15 Castle Road, Ardee","353 5893 3795","sjoan.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("4", "Saint Peter Detal Clinic ", "14 Oak drive, Drogheda","353 3573 9962","speter.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("5", "Saint Juan Detal Clinic", "15 Center City,Cork","353 3573 8798","sjuan.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("6", "Saint Abiel Detal Clinic  ", "6 St patrick, Galway ","353 9087 5634","sabiel.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("7", "Saint Raveena Detal Clinic ", "15 center city, Limerick","353 9868 2341","sravenna.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("8", "Saint Kosy Detal Clinic ", "19 elmwood,Cavan","353 6867 5648","skosy.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("9", "Saint Jose Detal Clinic ", "57 Martha Apartment, Dublin","353 3555 9666","sjose.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("10", "Saint Mathew Detal Clinic", "19 Oak drive, Wexfor","353 3577 9567","smathew.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("11", "Saint xyz Detal Clinic", "17 Drive, Skerry","353 3577 7777","xyz.dentalclinic@gmail.com");
INSERT INTO Clinic VALUES ("12", "Saint abc Detal Clinic", "16 Oak, Sord","353 3577 8888","abc.dentalclinic@gmail.com");



INSERT INTO Treatment_Type VALUES (1, "Surgery", 500.00, 120, "Surgical instruments, anesthesia");
INSERT INTO Treatment_Type VALUES (2, "Extraction", 100.00, 30, "Forceps, local anesthesia");
INSERT INTO Treatment_Type VALUES (3, "Cleaning", 80.00, 45, "Ultrasonic scaler, polishing equipment");
INSERT INTO Treatment_Type VALUES (4, "Reconstruction", 800.00, 180, "Composite resin, dental cement");
INSERT INTO Treatment_Type VALUES (5, "LED teeth Whitening", 150.00, 60, "LED light, hydrogen peroxide gel");
INSERT INTO Treatment_Type VALUES (6, "Dental Implants", 2000.00, 360, "Implant screw, abutment, crown");
INSERT INTO Treatment_Type VALUES (7, "Dental splint", 300.00, 90, "Acrylic resin, metal wire");
INSERT INTO Treatment_Type VALUES (8, "Orthodontic brackets", 1000.00, 360, "Metal or ceramic brackets, wires");
INSERT INTO Treatment_Type VALUES (9, "Removable dentures", 500.00, 90, "Acrylic resin, metal clasps");
INSERT INTO Treatment_Type VALUES (10, "Periodontal treatment", 200.00, 60, "Scalers, curettes, antibiotics");




