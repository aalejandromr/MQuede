<html>
<head>
  <title> MQUEDE</title>
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="container z-depth-5 loggueo">
    <div class="col s4 offset-s4"> 
      <form action="controllers/UserController.php" method="POST">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_name" name="user_name" type="text" class="validate" required>
          <label for="user_name">User Name</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" name="password" type="password" class="validate" required>
          <label for="pasword">Password</label>
        </div>
        <div class="input-field col s6 offset-s3">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
        </div>      
      </form>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>

