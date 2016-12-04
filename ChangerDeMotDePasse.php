<html>
     <h1>Modifie ton mot de passe</h1> 
 
    <!-- Ci-dessous, le form à compléter pour changer de mot de passe. 
    Une fois validée, on est redirigée vers la page ApresModificationMDP. L'utilisateur sera enregistré si aucun problème n'est apparu --> 
    
    <form action="index.php?name=ApresModificationMDP" method="post">
    <div class="row">
        <div class="col-md-2 gris titre">login</div>
        <div class="col-md-2 gris titre"><input type="text" name="login" required/></div>
    </div>

<div class="row">
        <div class="col-md-2 gris titre">Ancien mdp</div>
        <div class="col-md-2 gris titre"><input type="password" name="mdp" required/></div>
</div>   
        
        

<div class="row">
        <div class="col-md-2 gris titre">Nouveau mdp </div>
        <div class="col-md-2 gris titre"><input type="password" name="nouvmdp" required/></div>
</div> 
        
<div class="row">
        <div class="col-md-2 gris titre">Confirme ton ouveau mdp </div>
        <div class="col-md-2 gris titre"><input type="password" name="nouvmdpbis" required/></div>
</div> 

<div>
    <input type="submit" value="Valider" />
    
</div> 
</form>
    

   
</html>