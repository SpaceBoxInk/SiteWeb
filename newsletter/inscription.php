<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">

 
    <title>Validation de votre inscription à la newsletter de spaceboxink.fr</title>
 
</head>
<body>
<p align="center"><font size="5">Validation de votre inscription</font></p>

<?php



    if (isset($_POST['email'])){

        try {
            $db = new PDO("emails.php");
        } catch(PDOException $e){
            die("Erreur lors de l'inscription (code erreur 1)");
        }

        $adresse_mail = $_POST['email'];
        $cmd = "INSERT INTO emails values('".$adresse_mail."')";

        $r = $db->exec ( $cmd );

        if($r == 0){
            die("Erreur lors de votre inscription (code erreur 2)");
        } else {
            echo "Votre inscition a été éffectuée";
        }

    } else {
        echo "Adresse mail perdue";
        header("Location:index.php");
    }

?>


</body>
</html>
