<nav class="col-lg-2"><!-- balise nav pour indiquer la partie navigation du site -->
                    <!-- lien sur les différentes pages, passage de paramètre à partir du ?-->
                    <a href="/ikleiber/exercice_php/Views/suite.php?nom=Kleiber&amp;prenom=Ivan&amp;title=<?php echo $title; ?>" class="badge badge-primary">Paramètre par URL</a><br /><!-- la balise php permet l'écriture et l'affichage de la variable title, le class change la mise en forme du lien -->
                    <a href="/ikleiber/exercice_php/Views/suite.php?nom=Kleiber&prenom=Ivan&title=<?php echo $title; ?>&h1=<?php echo $h1; ?>" class="badge badge-primary">Comme avant + titre</a><br />
                    <a href="/ikleiber/exercice_php/pseudo_frames.php?page=home" class="badge badge-primary">Maison</a><br /><!-- vu que l'on charge la page selon le paramètre et non l'adresse, on appelle dans le lien la même page et on passe en paramètre le nom de la page que l'on veut ouvrir -->
                    <a href="/ikleiber/exercice_php/pseudo_frames.php?page=articles" class="badge badge-primary">Articles</a><br />
                    <a href="pseudo_frames.php?page=contact" class="badge badge-primary">Contact</a><br />
                    <a href="/ikleiber/exercice_php/pseudo_frames.php?page=hash" class="badge badge-primary">Hash</a><br />
               
</nav>