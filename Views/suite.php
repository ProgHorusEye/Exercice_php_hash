<!doctype html>
<hmtl>
    <head>
    <meta charset="UTF-8" />
    <title><?php echo $_GET['title']; ?></title>
    
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/ikleiber/exercice_php/assets/charge.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="container" id="titre">
            <div class="row">
               
                <header class="col-lg-12">
        
            <h1><?php echo $_GET['h1']; ?></h1>
            
                    
                </header>
            </div>
          
        </div>
        
        <div class="container" id="nav" >
            <div class="row">
            <?php require __DIR__ . '/nav.php' ?>
            
        
        
        
       
           
        <main class="col-lg-10">
            <div class="container" id="corps">
                <div class="row">
            <article class="col-lg-12">
                
                <header>
                    
                    Bonjour <?php echo $_GET['prenom'] ?> <?php echo $_GET['nom']; ?> 
                    
                </header>
               
               
                
            </article>
                </div>
            </div>
            
        </main>
        </div>
            </div>
            
       <?php require __DIR__ . '/foot.php' ?>
        
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        
    </body>
</hmtl>