<?php
/* la page pseudo ph n'est que la page d'appelle pour la page layout*/
$title = 'MyHorusEye';//renseignement de la variable title devant s'afficher

$h1 = "$title est un badass !"; //renseignement de la balise H1 qui prends en compte aussi la balise title

$name = !empty($_GET['name']) ? $_GET['name'] : 'Osiris';//renseignement de la variable name avec un ternaire
//si l'attribut name dans l'url de la page est plein alors la variable name prendra sa valeur sinon elle prend anonymous

require __DIR__ . '/Views/layout.php';//je lance le chargement de la page layout require indique l'obligation de l'existence de la page sinon on aurait mis "include"

?>