<?php
require 'Utilisateurs.php';
function logIn($dbh){
    $login = $_GET['login'];
    $mdp = $_GET['mdp'];
    if (Utilisateurs::getUtilisateur($dbh,$login )){
        if(Utilisateurs::testerMdp($dbh, $login, $mdp)){
            $_SESSION['loggedIn'] = true;
        }
        else{
            echo "Vous avez oublié votre mdp??";
        }    
    }
    else{
        echo 'Vous vous êtes trompés de mdp';
    }
}
function logOut(){
    unset($_SESSION['loggedIn']);
}
?>