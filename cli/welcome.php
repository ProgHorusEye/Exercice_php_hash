<?php
$argc; //INT = nombre d'arguments fourni
$argv; //ARRAY = arguments

var_dump($argv);//affichage du contenu de la variable

if ($argc>=2)// s'il y a plus de 2 entrées
{
$username = $argv[1];   //je récupère la 2ème données saisie
}

else
{    
echo 'Coucou, que est ton nom ?' . PHP_EOL;// sinon j'écris la question et je fais un saut de ligne (PHP.EOL) dans la console 

$username = fgets(STDIN);//je récupère la saisie de l'utilisateur dans la console
}

echo PHP_EOL . "Welcome " . trim($username) . " !!!" . PHP_EOL ;//j'écris welcome avec le nom saisie par l'utilisateur

$names = require __DIR__ . '/welcome_2.php';//je stocke dans une variable mon mon tableau dans le welcome_2.php
//__DIR__ remplace le chemin, require fichier obligatoire, include ne stoppe pas l'exacution en cas d'erreur
// require_one ou include_one tente qu'une fois l'exécution

foreach($names as $key => $value)//rechercher dans les clés de mon tableau associatif
{
    if (preg_match('#'.$key.'#',$username))//fonction de recherche dans une chaîne, contient au moins l'un des prénoms du tableau
    {
        echo $value . PHP_EOL;//affiche la ou les valeurs trouvées
    }
}

?>