
<!doctype html>
<hmtl>
    <head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="/ikleiber/favicon.ico" type="image/x-icon">
        
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"><!--appelle du fichier bootstrap-->
    <link rel="stylesheet" type="text/css" href="/ikleiber/exercice_php/assets/charge.css"><!--appelle demon fichier css perso-->
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="container" id="titre" ><!-- placement de mon container de titre-->
            <div class="row"><!-- formation des colonnes -->
               
                <header class="col-lg-12"><!-- utilisation du nombre de colonne 12/12 -->
        
            <h1><?php echo $h1 //appelle de la variable h1 défini sur la page pseudo frames?></h1>
            <h2><?php echo $name //appelle de la variable name défini sur la page pseudo frames?></h2>
                    
                </header>
            </div>
          
        </div>
        
        <div class="container" id="nav" >
            <div class="row">
            <?php require __DIR__ . '/nav.php' //après avoir créer un container pour le menu de navigation j'appelle la page de menu?>

        <main class="col-lg-10"><!-- utlisation des colonnes 10/12 le menu est à 2/12 -->
            <div class="container" id="corps">
                <div class="row">
            
                    <?php //chargement du corps de la page par mot clés dans l'url de la page "méthode GET"
                       
                        if(!empty($_GET['page']))//s'il y a l'attribut page dans l'URL ex : http://localhost/views/pseudoframes.php?page:hash
                        {
                                $page = $_GET['page'];//je récupère ladresse url contenant l'attribut pour connaitre la page à ouvrir
                        }
                
                        else
                        {
                            $page = 'home';//sinon je devrais charger la page home.php donc je stocke home comme attribut de la page
                        }
    
                        $page = basename($page);//base name permet de nettoyer l'adresse, virer tous ce qui se trouve avant l'attribut ex : hash
                
                        $chemin_page = __dir__ . '\\' . $page . '.php';//je reconstruit le chemin __dir__ me redonne le nom du répertoire de la page, je rajoute "\" , l'attribut et .php
                    
                        if (!is_file($chemin_page))//si la page n'existe pas, je charge la page d'erreur
                        {
                            header("HTTP/1.0 404 Not Found");
                            exit ('Erreur 404: La page ' . $chemin_page. ' demandée n\'existe pas !');//j'arrête la l'instruction php avec le message d'erreur
                        }
                
                    require $chemin_page; //sinon je charge ma page
                    
                    
                    ?>
                    
                </div>
            </div>
            
        </main>
        </div>
            </div>
            <div class="container" id="pieds"><!-- espace du pied de page-->
                    <div class="row">
                    <?php require __DIR__ . '/foot.php' //je charge ma page foot contenant ma balise footer?>
                    </div>
            </div>
        <script src="/assets/js/jquery-3.3.1.min.js"></script><!-- appelle de jquery utilisé par bootstrap-->
        <script src="/assets/js/bootstrap.min.js"></script><!-- appelle de la feuille javascript de bootstrap-->
        
    </body>
</hmtl>