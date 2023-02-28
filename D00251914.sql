

CREATE DATABASE IF NOT EXISTS D00251914;
USE D00251914;


create table Clinic ( Clinic_Id   int NOT NULL AUTO_INCREMENT,
					  Clinic_Name      VARCHAR(50),
					  Clinic_Address   VARCHAR(200),
					  Clinic_Telephone VARCHAR(20),
					  Clinic_Email     VARCHAR(200),
					  PRIMARY KEY (clinic_id));
		
CREATE TABLE Doctor (
    Doctor_Id VARCHAR(10) NOT NULL,
    First_Name_Doctor VARCHAR(50) NOT NULL,
    Last_Name_Doctor VARCHAR(50) NOT NULL,
    Doctor_Address VARCHAR(200),
    Doctor_Telephone VARCHAR(20),
    Doctor_Email VARCHAR(200),
    PRIMARY KEY (Doctor_Id)
);

 
INSERT INTO Doctor VALUES ("145256", "Cristobal","Colon", "14 Center City, Dundalk", "353 9876 6543","colon.cristobal@gmail.com");	
INSERT INTO Doctor VALUES ("145257", "Joel","Mcaffe", "45  South West, Dublin", "353 1244 6688","mcaffe.joel@gmail.com");
INSERT INTO Doctor VALUES ("145258", "Daniel","Cardenas", "27  Dundalk road, Ardee"," 353 7856 3412","cardenas.daniel@gmail.com");
INSERT INTO Doctor VALUES ("145260", "Pedro","Juarez", "19 Center City, Cork","353 4768 7865","juarez.pedro@gmail.com");
INSERT INTO Doctor VALUES ("145261", "Henry","Lopez", "25 South East , Galway", "353 9089 7473","lopez.henry@gmail.com");
INSERT INTO Doctor VALUES ("145262", "Marvin","Fernandez", "19 Street Road, Limerick","353 9009 1010","fernandez.marvin@gmail.com");
INSERT INTO Doctor VALUES ("145263", "Luis","Castro", "78 North West, Cavan ", "353 1000 5039","castro.luis@gmail.com");
INSERT INTO Doctor VALUES ("145264", "Eduardo","Cardenas", "90 City Center, Dublin", "353 8375 9009","cardenas.eduardo@gmail.com");
INSERT INTO Doctor VALUES ("145265", "Jose","Moreno", "45 St street, Wexfor", "353 4589 8787","moreno.jose@gmail.com");
INSERT INTO Doctor VALUES ("145266", "Jose","Castillo", "43 City Center, Skerry", "353 4589 8787","Castillo.jose@gmail.com");
INSERT INTO Doctor VALUES ("145267", "Manuel","Andez", "12 St street, Sord", "353 4589 8787","Andez.Manuel@gmail.com");



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