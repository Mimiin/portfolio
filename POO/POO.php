<?php
//On définit la classe
class Animal {
//On lui donne une propriété
public $nom;
public $type;

//On lui donne une méthode
public function parler() {
echo “Je suis un animal de type $this->type et mon nom est $this->nom. ”;
}
}
//On crée les objets
$chien = new Animal ();
$chat = new Animal ();

// On donne une valeur à nos objets
$chien->nom = “Isis”;
$chien->type = “Chien”;

$chat->nom = “Nyx”;
$chat->type = “Chat”;

//Et là on appelle les méthodes
$chien->parler();
$chat->parler();
?>

