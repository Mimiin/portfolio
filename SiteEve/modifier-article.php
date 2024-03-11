<?php
session_start();
$dbb = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Afficher tous les articles</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $recupArticles = $dbb->query('SELECT * FROM articles');
        while($article = $recupArticles->fetch()){
            ?>
            <div class="article">
                <h1><?article['titre']</h1>
            </div>
        }
</body>
</html>
