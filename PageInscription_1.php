<html>
     <h1>Inscris-toi!</h1> 
 
    <!-- Ci-dessous, le form à compléter pour s'inscrire. 
    Une fois validée, on est redirigée vers la page ApresSEtreInscrit. L'utilisateur sera enregistré si aucun problème n'est apparu --> 
    
    <form action="index.php?name=ApresSEtreInscrit" method="post">
    <div class="row">
        <div class="col-md-2 gris titre">login</div>
        <div class="col-md-2 gris titre"><input type="text" name="login" value="<?php echo $login ?>" required/></div>
    </div>

<div class="row">
        <div class="col-md-2 gris titre">mdp</div>
        <div class="col-md-2 gris titre"><input type="password" name="mdp" required/></div>
</div>   

<div class="row">
        <div class="col-md-2 gris titre">prénom</div>
        <div class="col-md-2 gris titre"><input type="text" name="prenom" value="<?php echo $prenom ?>"required/></div>
</div>    

<div class="row">
        <div class="col-md-2 gris titre">nom</div>
        <div class="col-md-2 gris titre"><input type="text" name="nom" value="<?php echo $nom ?>"required/></div>
</div>
    
<div class="row">
        <div class="col-md-2 gris titre">email</div>
        <div class="col-md-2 gris titre"><input type="email" name="email" value="<?php echo $email ?>" required/></div>
    </div>
    
<div class="row">
        <div class="col-md-2 gris titre">Rentre le lien de ton profil fb (si tu veux)!</div>
        <div class="col-md-2 gris titre"><input type="url" name="link" value="<?php echo $link ?>"/></div>
</div>
    <input type="submit" value="Valider" />
    
</p>
</form>
    
    
 
   
   

   
</html>
