<!-- page pour le hachage d'un texte -->
<?php

require dirname(__DIR__) . '\\funk\\funkytown.php';//appelle de la page fynkytown avec le chemin de page et dirname qui permet de revenir un cran en arrière dans l'arborescence, l'appelle est obligatoire pour pouvoir ensuite appeler les fonctions qui sont dedans
?>

 <div class="container" id="saisie" >
            <div class="row">
                
<!-- la methode post est utilisé dans l'envoi du formulaire, passage par balise invisible, pas par l'URL, au moment de l'envoi les champs sont vidés, c'est pourquoi je remets les valeurs dans les champs -->
<form name="hash" id="hash" action="" onsubmit method="post" class="col-lg-6"><!-- je gère la balise forme la taille des colonnes et du coup la taille du champs de saisie -->
   <div>

<div class="input-group mb-3"><!-- groupement du texte et de la zone de texte pour l'affichage-->
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Input : </span>
  </div>
  <input type="text" class="form-control" placeholder="Your value here" aria-label="Username" aria-describedby="basic-addon1" name="mdp" id="mdp" value="<?php echo (empty($_POST['mdp'])) ? '' : $_POST['mdp']?>">
</div><!-- placeholder permet de mettre un texte dans le champ sans saisie, pour value, je regarde si la valueur mdp du POST est vide, si c'est vide, je laisse le champ vide sinon je reprend la valeur du mdp du POST pour la remettre dans le champs -->       
   
<?php echo listehash ()?><!-- lance l'écriture de la fonction qui crée la liste des hashs disponible -->  
<br />

<button type="submit" class="btn btn-primary" value="submit">Hasher</button><!-- bouton submit -->
<br />
<br />    
    </div>
    
       </form>
     </div>
</div>

<div class="container" id="resultat" >
            <div class="row">

<form name="res" class="col-lg-12"><!-- champs d'affichage du code hashé, taille du formulaire ajusté pour régler la taille su champ de récupération-->
    <div class="input-group mb-3">
  <div class="input-group-prepend"><!-- Groupement du bouton -->
    <span class="input-group-text" id="basic-addon2">Algorithm : </span>
  </div>
  <input type="text" class="form-control" placeholder="Your Hash Here" aria-label="Username" aria-describedby="basic-addon1" name="hachi" id="hachi" value="<?php echo (!empty($_POST['mdp'])) ? hash($_POST['listehash'],$_POST['mdp']) : '';?>"><!-- si le paramètre mdp contient une valeur, alors j'écris le résultat de la fonction hash avec le cryptage sélectionné dans ma liste et le contenu du champ texte input sinon je laisse le champs vide-->
</div>
    </form>
    </div>
</div>
    
    
    
   
    
