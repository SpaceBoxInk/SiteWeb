<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">

 
    <title>Inscription à la newsletter de spaceboxink.fr</title>
 
</head>
<body>

<?php

    if (isset($_POST['new'])) {

        ///// INSCRIPTION /////
        if ($_POST['new'] == 1) {

            echo "<p align=\"center\"><font size=\"5\">Inscription à la Newsletter de A Space Story</font></p>";

            if (isset($_POST['email'])){

                try {
                    $db = new PDO('sqlite:emails.db');
                } catch(PDOException $e){
                    die("Erreur lors de l'inscription (code erreur 1)");
                }

                $adresse_mail = $_POST['email'];

                $cmd = "SELECT * from emails where email='".$adresse_mail."'";
                $result = $db->query($cmd)->fetchAll();
                
                if (! $result){ // Pas inscrit, donc on le fait

                    $cmd = "INSERT INTO emails values('".$adresse_mail."')";

                    $r = $db->exec ( $cmd );

                    if ($r == 0){
                        die("Erreur lors de votre inscription (code erreur 2)");
                    } else {
                        echo "Votre inscription a été éffectuée !";
                    }

                } else {
                    echo "Vous êtes déjà inscrit.";
                }

            } else {
                echo "Adresse mail perdue";
                header("Location:index.php");
            }

        ///// DESINSCRIPTION /////
        } elseif ($_POST['new'] == 0) {

            echo "<p align=\"center\"><font size=\"5\">Désinscription à la Newsletter de A Space Story</font></p>";

            if (isset($_POST['email'])){

                try {
                    $db = new PDO('sqlite:emails.db');
                } catch(PDOException $e){
                    die("Erreur lors de la désinscription (code erreur 3)");
                }

                $adresse_mail = $_POST['email'];

                $cmd = "SELECT * from emails where email='".$adresse_mail."'";
                $result = $db->query($cmd)->fetchAll();

                // Déjà inscrit donc on le supprime
                if (! $result){

                    echo "Vous n'êtes pas inscrit à cette newsletter";
                
                } else {

                    $cmd = "DELETE FROM emails where email='".$adresse_mail."'";

                    $r = $db->exec ( $cmd );

                    if ($r == 0){
                        die("Erreur lors de la désinscription (code erreur 4)");
                    } else {
                        echo "Votre désinscription a été éffectuée !";
                    }
                }

            } else {
                echo "Adresse mail perdue";
                header("Location:index.php");
            }

        
        } else {
            header("Location:index.php");
        }
    }

?>


</body>
</html>
