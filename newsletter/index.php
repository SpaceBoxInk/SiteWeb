<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>La newsletter de MonSite.fr</title>
</head>
<body>
 
    La newsletter :
    <form method="post" action="inscription.php">
        Adresse e-mail : <input type="email" name="email" size="25" /><br>
        <input type="radio" name="new" value="0" id="inscr" />
        <label for="inscr">S'inscrire</label>

        <input type="radio" name="new" value="1" id="desinscr" />
        <label for="desinscr">Se désinscrire</label><br>

        <input type="submit" value="Envoyer" name="submit" />
    </form>
</body>
</html>
