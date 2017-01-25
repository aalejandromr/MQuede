<div class="container z-depth-5 loggueo">
  <div class="col s4 offset-s4"> 
    <form action="routes.php?controller=User&action=login" method="POST">
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
      <button class="btn waves-effect waves-light" type="submit" name="action"> Submit
        <i class="material-icons right">send</i>
      </button>
      </div>
    </form>
  </div>
</div>