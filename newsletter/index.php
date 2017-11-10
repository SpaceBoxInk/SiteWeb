<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>La newsletter de MonSite.fr</title>
</head>
<body>
 <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if(isset($_GET['email'])) // On vérifie que la variable $_GET['email'] existe.
    {
 
        if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new'])) /* On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email'] est égale à 1 et que la variable $_POST['new'] existe. */
        {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) // On vérifie qu'on a bien rentré une adresse e-mail valide.
        {
 
            if($_POST['new']==0) // Si la variable $_POST['new'] est égale à 0, cela signifie que l'on veut s'inscrire.
            {

                

 
                // On définit les paramètres de l'e-mail.
                $email = $_POST['email'];
                //$message = 'Pour valider votre inscription à la newsletter de MonSite.fr, <a href="http://www.spaceboxink.fr/ASpaceStory/newsletter/inscription.php?tru=1&amp;email='.$email.'">cliquez ici</a>.';
                // $message = "Test";
                // $message = str_replace("\n.", "\n..", $message);
     
                // $destinataire = $email;

                // $objet = "Inscription newsletter de SpaceBoxInk.fr" ;

                // $encoding = "utf-8";

                // // Preferences for Subject field
                // $subject_preferences = array(
                //     "input-charset" => $encoding,
                //     "output-charset" => $encoding,
                //     "line-length" => 76,
                //     "line-break-chars" => "\r\n"
                // );

                // // Mail header
                // $header = "Content-type: text/html; charset=".$encoding." \r\n";
                // $header .= "From: SpaceBoxInk <sbi@gmail.com> \r\n";
                // $header .= "MIME-Version: 1.0 \r\n";
                // $header .= "Content-Transfer-Encoding: 8bit \r\n";
                // $header .= "Date: ".date("r (T)")." \r\n";
                // $header .= iconv_mime_encode("Objet", $objet, $subject_preferences);

     
                // $header  = 'MIME-Version: 1.0' . "\r\n";
                // $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // $header .= 'From: flechebleue38@hotmail.com' . "\r\n";

                $to      = 'nobody@example.com';
                $subject = 'the subject';
                $message = 'hello';
                $headers = 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();



                // var_dump($destinataire);echo "<br>";
                // var_dump($objet);echo "<br>";
                // var_dump($message);echo "<br>";
                // var_dump($header);echo "<br>";

                // mail($destinataire, $objet, $message, $header)
                

                if ( mail($to, $subject, $message, $headers) ) // On envoie l'e-mail.
                {
 
                    echo "Pour valider votre inscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                } else {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre inscription.";
                }
            } elseif($_POST['new']==1) // Si la variable $_POST['new'] est égale à 1, cela signifie que l'on veut se désinscrire.
            {
 
            // On définit les paramètres de l'e-mail.
            $email = $_POST['email'];
            $message = 'Pour valider votre désinscription de la newsletter de MonSite.fr, <a href="http://www.monsite.fr/desinscription.php?tru=1&amp;email='.$email.'">cliquez ici</a>.';
 
            $destinataire = $email;
            $objet = "Désinscription de la newsletter de MonSite.fr" ;
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: monsite@monsite.fr' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) 
                {
 
                echo "Pour valider votre désinscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
                else
                {
                echo "Il y a eu une erreur lors de l'envoi du mail pour votre désinscription.";
                }
            }
            else
            {
            echo "Il y a eu une erreur !";
            }
        }
        else
        {
        echo "Vous n'avez pas entré une adresse e-mail valide ! Veuillez recommencer !";
        }
        }
        else
        {
        echo "Il y a eu une erreur.";
        }
    }
    else // Si les champs n'ont pas été remplis.
    {
?>
La newsletter :
<form method="post" action="index.php?email=1">
Adresse e-mail : <input type="text" name="email" size="25" /><br>
<input type="radio" name="new" value="0" id="inscr" />
<label for="inscr">S'inscrire</label>

<input type="radio" name="new" value="1" id="desinscr" />
<label for="desinscr">Se désinscrire</label><br>

<input type="submit" value="Envoyer" name="submit" />
</form>
<?php
    }
?>
</body>
</html>
