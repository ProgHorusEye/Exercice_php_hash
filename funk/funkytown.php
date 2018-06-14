<?php

/*création en php de la liste de déroulante des différentes methose de cryptage*/

function listehash ()
{
    $hash = hash_algos();//récupération dans une variable un tableau avec les différente methode de cryptage
    
    $existe = array_key_exists('listehash', $_POST) ? $_POST['listehash'] : null ; //ternaire pour vérifier si le formulaire à déjà été envoyé et qu'une sélection de hash à été créé en POST
    
    $tab = '';//je cré une chaîne tab vide
    $tab.='<div class="input-group mb-3">';//je concaténe à ma chaine la création du groupe pour l'apparence de ma liste déroulante
    $tab .='<div class="input-group-prepend">';
    $tab .='<span class="input-group-text" id="basic-addon1">Hash : </span>';
    $tab .='</div>';
    
    $tab .= '<select name="listehash" id="listehash">';//je concaténe ma balise select pour créer la liste
    
    //echo (empty($_POST['listehash'])) ? '' : $_POST['listehash']
    
foreach ($hash as $value) //j'utilise un foreach pour parcourir mon tableau de hash
    {
    //$tab .= ('<option value= "' .$value. '"'.(($value == $_POST['listehash']) ? ' selected="selected"' : '').'>'. $value . '</option>');    
    $tab .= ('<option value= "' .$value. '"'.(($existe == $value) ? ' selected="selected"' : '').'>'. $value . '</option>');
    //à chaque entrée de mon  tableau contenant les hashs, je crée une ligne dans ma liste déroulante
    //j'ajoute un ternaire pour quand la valeur existante, sélectionné lors de l'envoi deu formulaire, l'attribut selected soit rajouté
    //le but est de sélectionné la dernière ligne sélactionné avant l"envoi du formulaire
    }
    
    $tab .= '</select>';//je concaténe les fins de balise select et div
    $tab .= '</div>';
    
    return $tab;//je retourne ma variable qui se appelé et écrite dans ma page
    
}



?>