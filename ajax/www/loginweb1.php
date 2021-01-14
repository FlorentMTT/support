<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>

<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/functions.php";
//Initialisation des variables
$user = "";
$pswd = "";
$error = false;
// Contrôler si le bouton login a été cliqué
if (isset($_POST["send"]))
{
       // Récupère le contenu de mes champs de saisie
       if (isset($_POST["username"]))
            $user = $_POST["username"];
       if (isset($_POST["pswd"]))
            $pswd = $_POST["pswd"];

        // Vérifier les données de login saisies
        if (checkUserLogin($user, $pswd))
        {
            // si c’est valide appelle une autre page
            header('Location: ./done.html');
            exit();
        }
        else
        {
            // si c’est invalide on affiche un message d’erreur
            $error = true;
        }
}

?>
    <body>
        <h1>Démonstration d'une validation de données d'un formulaire en Web 1</h1>

        <p>Mettez le debugger en marche dans Visual Studio Code, et placez un point d'arrêt sur la première ligne de code php, et exécutez pas à pas.</p>

        <?php
            if ($error)
                echo "<p>Le d'utilisateur ou le mot de passe sont incorrectes.</p>";
        ?>
        <form name="login" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <span>Nom d"utilisateur: </span><input type="text" name="username" value="<?php echo $user;?>"/>
            <br/>
            <span>Mot de passe: </span><input type="password" name="pswd" />
            <input type="submit" name="send" value="Login" />
        </form>
    </body>
</html>

