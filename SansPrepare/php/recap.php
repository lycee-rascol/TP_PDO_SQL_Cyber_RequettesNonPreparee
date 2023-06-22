<!DOCTYPE html>
<html>
    <head>
        <title>Laser quest Albi </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Insertion fichier Css --> 
    </head>
    <body>
    <div class="degrade"> <h1> 
    <?php

           //insertion fichier connexion.php


        $nm = $_POST['nom'];

        try {
            // Connexion à la base de données avec PDO
                
            //requette sql :

                
            //si au moins un résultat :
            //on récupère chaque enregistrements et on affiche :


            //sinon  on affiche : aucunne plage reserve a ce nom 
                

        } catch (PDOException $e) {
                
            //gestion erreur :

        }

        // Fermeture de la connexion

    ?>

</h1> 
</div >

</body>
</html>