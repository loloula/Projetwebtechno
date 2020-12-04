<?php

// connexion à la base de données SQL
function connexion() {
    $pdo = new PDO('sqlite:login.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

// création une table au bon format, pour contenir les annonces
function creationTable() {
    $pdo = connexion();
    $requeteSQLCreation = 'CREATE TABLE "login" (
        "id" INTEGER PRIMARY KEY AUTOINCREMENT,
        "nom" TEXT,
        "prenom" TEXT,
        "adressemail" TEXT,
        "motdepasse" TEXT,
        "date" INTEGER DEFAULT CURRENT_TIMESTAMP
    );';
    // exécution de la requête
    $pdo->query($requeteSQLCreation);
}

// insertions de 4 petites annonces d'exemple
function insertionDonneesExemple() {
    $pdo = connexion();
    $requeteSQLInsertion = "INSERT INTO login (nom,prenom,adressemail, motdepasse) VALUES
        ('fagaye','GUEYE','fagayee@gmail.com', 'Passer123'),
        ('lota','NDIAYE','lota@hotmail.fr','Passer1234')
    ";
    $stmt = $pdo->prepare($requeteSQLInsertion);
    // $stmt->debugDumpParams();
    return $stmt->execute();
}
function vidageTable() {
    $pdo = connexion();
    $requeteSQLVidage = "DELETE FROM login";
    $pdo->query($requeteSQLVidage);
}
