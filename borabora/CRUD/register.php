<?php
require_once '../include/connexion.php';

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les valeurs des champs du formulaire
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Vérifiez si les mots de passe correspondent
    if ($password !== $confirm_password) {
        die("Les mots de passe ne correspondent pas");
    }
    // Cryptez le mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    // Préparez la requête SQL pour insérer l'utilisateur dans la table "client"
    $sql = "INSERT INTO client (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    // Exécutez la requête SQL
    if ($cnx->query($sql) === TRUE) {
        echo "Compte crée avec succès";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $cnx->error;
    }
}

// Fermez la connexion à la base de données
$cnx->close();
?>