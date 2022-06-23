<?php
if(isset ($_POST['inscription'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire D'enregistrement dans une Banque</title>
</head>
<body>
    <form action="", method="POST">
        <input type="text" name="nom" placeholder="Votre nom">
        <input type="text" name="prenom" placeholder="Votre prenom">
        <input type="password" name="password" placeholder="Votre mot de passe">
        
        <input type="submit" name="inscription" value="s'inscrire">
    </form>
    <hr>
    <form action="", method="POST">
        <input type="text" name="nom" placeholder="Votre nom">
        <input type="password" name="mdp" placeholder="Votre mot de passe">
        <input type="submit" name="connexion" value="se connecter">
    </form>
</body>
</html>