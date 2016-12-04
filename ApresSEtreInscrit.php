<html>
    
    <?php
        
        
        require ("ClassesAssocieesBDD/Database.php");
        require ("ClassesAssocieesBDD/Utilisateurs.php");
        $dbh = Database::connect();
        $form_values_valid=true; 
        $login = "";
        $email="";
        $link="";
        $prenom = "";
        $nom = ""
        
        if (Utilisateurs::getUtilisateur($dbh, $_POST['login']) != NULL) { /* Cherche si le login a déjà été utilisé ; si oui, il faut en trouver un autre*/    
            global $form_values_valid;
            echo'ce login est déjà choisi, veuillez en trouver un autre';
            echo "<button type='button' class='btn btn-success' style='text-align: center; font-size: 1.5em'><a href='index.php?name=PageInscription'>Retournez à la page d inscription</a></button>";
            $form_values_valid=false; 
            
        }
        
        if (Utilisateurs::getUtilisateur($dbh, $_POST['login']) == NULL) { 
            global $login;
            $login = $_POST["login"];
        }
        if (Utilisateurs::emailExisted($dbh,$_POST['email'])){
            global $form_values_valid;
            $form_values_valid=false; 
            echo'ce mail est déjà utilisé, veuillez en indiquer un autre';
            echo "<button type='button' class='btn btn-success' style='text-align: center; font-size: 1.5em'><a href='index.php?name=PageInscription'>Retournez à la page d inscription</a></button>";
        }
        if (!Utilisateurs::emailExisted($dbh,$_POST['email'])){
            global $email;
            $email = $_POST["email"];
        }
        if(isset($_POST['link'])){
            if (Utilisateurs::profilFbExisted($dbh,$_POST['link'])){
                global $form_values_valid;
                $form_values_valid=false; 
                echo'ce profil facebook est déjà utilisé, veuillez en indiquer un autre';
                echo "<button type='button' class='btn btn-success' style='text-align: center; font-size: 1.5em'><a href='index.php?name=PageInscription'>Retournez à la page d inscription</a></button>";
            
            }
            else {
                global $link;
                $link = $_POST['link'];
            }
        }
       
        if (isset($_POST["prenom"])) $prenom = $_POST["prenom"];
       
        if (isset($_POST["nom"])) $prenom = $_POST["nom"];
        
        
         if ($form_values_valid=false) { 
         
         if ($form_values_valid=true) {
            Utilisateurs::insererUtilisateur($dbh, $_POST['login'], $_POST['mdp'], $_POST['prenom'],  $_POST['nom'], $_POST['email'], null) ;   
            
            echo 'Bravo, votre compte a été enregistré avec succès!';
         }
        $dbh = null;
        
        
    ?>

    
    <br></br>
    
    <button type="button" class="btn btn-success" style="text-align: center; font-size: 1.5em"><a href="index.php?name=Offrir">Offrez dès maintenant!!</a></button>
    
    <h2>Ou bien...</h2>

    <br></br>
    
    <button type="button" class="btn btn-success" style="text-align: center; font-size: 1.5em"><a href="index.php?name=ListeOffres">Trouver un repas près de chez vous!</a></button>   


</html>
