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


    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateA = $_POST['date'];
    $plage_horaire = $_POST['plage_horaire'];



    try {

        // Connexion à la base de données avec PDO + setAttribute
        $host = 'mysql:host=localhost;dbname='.$bdd;
        $pdo = new PDO( $host, $user, $passwd ) ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection ok <br>";

        //insertion suivre cet ordre : email, date, plage_horaire, nom, prenom
        // requette sql :
        //affichage : Votre réservation a été enregistrée avec succès! 

        
    } catch (PDOException $e) {
        //affichage : Une erreur s'est produite lors de l'enregistrement de votre réservation : 
        die($e->getMessage());
    // Fermeture de la connexion
    }    
    ?>
    </h1></div>
    </body>
</html>