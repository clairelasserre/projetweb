 <?php
        
        
    require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ClassesAssocieesBDD/Database.php");
    require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ClassesAssocieesBDD/Utilisateurs.php");
    $dbh = Database::connect();
    $form_values_valid=true;
    $login="";
    
        /*vérifier que les deux entrées pour le nouveau mot de passe sont identiques*/
        if ( isset($_POST['nouvmdp']) && isset($_POST['nouvmdpbis'])) {
            if ($_POST['nouvmdp'] != $_POST['nouvmdpbis']) { 
                $form_values_valid=false;
                echo"Votre nouveau mot de passe n'est pas valide";
                echo'<br></br>';
                require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ContenuDesPages/ApresModificationMDPEchec.php");
            }
            
            
         /*  vérifier qu'il existe dans la base un utilisateur dont le login est celui entré dans le formulaire ou dans la variable de session  */
        if (isset($_POST['login'])) {
            global $login;
            if (Utilisateurs::getUtilisateur($dbh, $_POST['login']) == NULL) {  
          
                $form_values_valid=false;
                echo"L'identifiant que vous avez entré n'est pas valide";
                echo'<br></br>';
                require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ContenuDesPages/ApresModificationMDPEchec.php");
            
            }
            else {$login=$_POST['login'];}
        }
        
        if ( isset($_SESSION['login'])) {
            global $login;
            if (Utilisateurs::getUtilisateur($dbh, $_SESSION['login'])==NULL ) {  
                $form_values_valid=false;
                echo"L'identifiant que vous avez entré n'est pas valide";
                echo'<br></br>';
                require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ContenuDesPages/ApresModificationMDPEchec.php");
            }
            else {$login= $_SESSION['login'];}
            
        }
        
        
        /*vérifier que l'ancien mot de passe entré dans le formulaire est identique au mot de passe associé dans la base à l'utilisateur en question */
         if (testerMdp($dbh, $login,$mdp)==false) {
             $form_values_valid=false;
             echo"Votre mot de passe ne correspond pas à l'identifiant indiqué";
                echo'<br></br>';
                require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ContenuDesPages/ApresModificationMDPEchec.php");
         } 
        
         /*Si tout va bien jusque là, mettre à jour le mot de passe haché (fonction SHA1($passwd)) dans la base de données.*/
        if ($form_values_valid==true ) {
            global $login;
            $user = getUtilisateur($dbh, $login);
            $sth = $dbh->prepare("UPDATE `nom_table` SET mdp=".SHA1($nouvmdp)." WHERE login =?)");
            $sth->execute(array($login));
            
             require ("/Applications/XAMPP/xamppfiles/htdocs/PasDeGaspX/ContenuDesPages/ApresModificationMDPAvecSucces.php");
            
        }
            
        }
         
         
    $dbh = null;
