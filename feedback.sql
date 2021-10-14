CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `feedback`;

CREATE TABLE notes(
   note_Id INT,
   note_Valeur_Repas INT,
   note_Valeur_Environnement INT,
   note_Commentaire VARCHAR(1000),
   note_Classe_Id VARCHAR(30),
   note_Valeur_quantite INT,
   note_Valeur_Qualite INT,
   note_Valeur_Diversification INT,
   note_Valeur_Services INT,
   PRIMARY KEY(note_Id)
);

CREATE TABLE classes(
   classe_Id INT,
   classe_libelle VARCHAR(50),
   PRIMARY KEY(classe_Id)
);

CREATE TABLE eleve(
   classe_Id INT,
   note_Id INT,
   PRIMARY KEY(classe_Id, note_Id),
   FOREIGN KEY(classe_Id) REFERENCES classes(classe_Id),
   FOREIGN KEY(note_Id) REFERENCES notes(note_Id)
);

CREATE TABLE users(
   user_Id INT,
   user_Name VARCHAR(50),
   user_Password VARCHAR(50),
   user_Droit INT,
   classe_Id INT NOT NULL,
   PRIMARY KEY(user_Id),
   FOREIGN KEY(classe_Id) REFERENCES classes(classe_Id)
);
