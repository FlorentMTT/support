<?php


/**
 * Vérifier l'email et le mot de passe associé
 *
 * @param [string] $email   L'email de l'utilisateur
 * @param [string] $pswd    Le mot de passe
 * @return boolean True si le mot de passe associé à l'email correspond, autrement False.
 * 
 * @remark  Pour simplifier la démonstration, la validation est codée en dur.
 *          Dans du code réel, la validation se ferait en récupérant les données
 *          provenant d'une base de données ou d'un système autre.
 * 
 *          Le mot de passe serait également passé de manière encryptée.
 *          Mais ici, nous voulons démontrer l'utilisation d'Ajax !!!!
 */
function checkUserLogin($email, $pswd)
{
    if ($email == "cfpt@demo.com" && $pswd == "1234")
        return true;
    // Fail
    return false;
}