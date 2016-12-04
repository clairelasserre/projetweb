
 
<html>
 
<head>
  <title>Printforms</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
 
<body>
 
  
  <?php  
  Class printForms {
  
    function printLoginForm ($askedPage) {
  echo '<form action="'.$askedPage.'php" method="get">';
  echo '<p>login : <input type="text" name="login" placeholder="login" required /></p>';
  echo '<p>password : <input type="password" name="password" placeholder = "password" required /></p>';
  echo'<p><input type="submit" value="Valider" /></p>';
  echo '</form>';
  }
  
  
  function printLogoutForm () {
    echo '<form action=".index.php" method="get">';
    echo '<p>login : <input type="text" name="login" placeholder="login" required /></p>';
    echo '<p>password : <input type="password" name="password" placeholder = "password" required /></p>';
    echo'<p><input type="submit" value="Valider" /></p>';
    echo '</form>'; 
  }
  }
  
  
  
  
  ?>

</body>
</html>