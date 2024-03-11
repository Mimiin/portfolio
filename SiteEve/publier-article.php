<?php
session_start();
$dbb = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}

if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['article'])){
        $titre = htmlspecialchars($_POST['titre']);
        $article = nl2br(htmlspecialchars($_POST['article']));

        $insererArticle = $dbb->prepare('INSERT INTO articles(titre, article)VALUES(?, ?)');
        $insererArticle->execute(array($titre, $article));

        echo "L'article a bien été envoyé";
    }else{
        echo "Veuillez compléter tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Publier un article</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="titre">
        <br>
        <textarea name="article"></textarea>
        <br>
        <input type="submit" name="envoi">

    </form>
</body>
</html>
