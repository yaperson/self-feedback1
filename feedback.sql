DROP DATABASE IF EXISTS feedback ;
CREATE DATABASE feedback ;

USE feedback ;

SET NAMES UTF8 ;

CREATE TABLE classes(
   classe_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   classe_libelle VARCHAR(50) NOT NULL
)ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE notes(
   note_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   note_Valeur_Repas INT NOT NULL,
   note_Valeur_Environnement INT NOT NULL ,
   note_Commentaire VARCHAR(1000),
   classe_Id INT NOT NULL ,
   FOREIGN KEY(classe_Id) REFERENCES classes(classe_Id)
)ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE eleve(
   eleve_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   classe_Id INT NOT NULL,
   note_Id INT,
   FOREIGN KEY(classe_Id) REFERENCES classes(classe_Id),
   FOREIGN KEY(note_Id) REFERENCES notes(note_Id)
)ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE users(
   user_Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   user_Name VARCHAR(50) NOT NULL,
   user_Password VARCHAR(50) NOT NULL,
   user_Droit INT
)ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

/*CREATE TABLE consulter(
   user_Id INT,
   note_Id INT,
   PRIMARY KEY(user_Id, note_Id),
   FOREIGN KEY(user_Id) REFERENCES users(user_Id),
   FOREIGN KEY(note_Id) REFERENCES notes(note_Id)
);*/
