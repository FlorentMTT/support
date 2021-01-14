<?php
/**
 * Ce fichier est appelé depuis un appel Ajax
 * Les données sont présentes dans le post
 * Le nom des variables sont :
 * username pour le nom de l'utilisateur
 * pswd pour le mot de passe associé
 */
require_once $_SERVER["DOCUMENT_ROOT"]."/functions.php";

//Initialisation des variables
$user = "";
$pswd = "";

// récupère les données du post
// finalement, identique à votre code php dans la version Web1
if (isset($_POST["username"]))
    $user = $_POST["username"];
if (isset($_POST["password"]))
    $pswd = $_POST["password"];

// Dans notre exemple on retourne les données en format json
// On a décidé de retourner deux variables : ReturnCode et Message

// On vérifie qu'on a bien des données
if (strlen($user) > 0 && strlen($pswd) > 0)
{
        // Vérifier les données de login saisies
        if (checkUserLogin($user, $pswd))
        {
            echo '{ "ReturnCode": 0, "Message": "Nom et mot de passe correspondent."}';
            // Attention de bien mettre exit
            // autrement vous risquez d'avoir de l'output que se place dans le stream de retour
            exit();
        }
        else
        {
            echo '{ "ReturnCode": 2, "Message": "Nom et/ou mot de passe invalide."}';
            exit();
        }
}

// Problème
echo '{ "ReturnCode": 1, "Message": "Paramètres manquants ou invalides."}';


?>