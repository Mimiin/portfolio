<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "C0stonEve";
        $mdp_par_defaut = "123456";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location:index.php');

        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else{
    echo "veuillez compléter tous les champs...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace de connexion admin</title>
    <link rel="stylesheet" href="admin.css"
</head>
<body>
    <form method="POST" action="" align="center">
    <input type="pseudo" name="pseudo" autocomplete="off" placeholder="Entrez votre pseudo">
        <br>
    <input id="mdp" type="password" name="mdp" placeholder="Entrez votre mot de passe">
        <br><br>
    <input type="submit" name="valider">
    </form>
</body>
</html>


