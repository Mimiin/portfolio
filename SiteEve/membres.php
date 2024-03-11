<?php
session_start();
$dbb = new PDO('mysql:host=localhost;dbname=espace_admin;','root','');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher tous les membres</title>
    <meta charset="utf-8">
</head>
<body>
    <!--affichercher tous les membres-->
    <?php
    $recupUsers = $dbb->query('SELECT * FROM membres');
    while($user = $recupUsers->fetch()){
    ?>
    <p><?= $user['pseudo']; ?>  <a href="bannir.php?id=<?= $user['id']?>" style="color:red; text-decoration: none;">Bannir le membre</a></p>
    <?php
    }
    ?>
<!--fin d'afficher tous les membres-->
</body>
</html>

