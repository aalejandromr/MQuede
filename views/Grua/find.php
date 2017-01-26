<div class="container">
  <form class="col s12" action="index.php?controller=Grua&action=edit" method="POST">
  <?php
      foreach($grua->find($id) as $row)
      {
        ?>
        <div class="row">
          <div class="input-field col s6">
            <input id="grua_name" name="grua_name" value='<?php echo($row['gruas_name'])?>' type="text" class="validate" >
            <label for="grua_name">Nombre de grua</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="grua_time" name="grua_time" value='<?php echo($row['gruas_time'])?>' type="text" class="validate" >
            <label for="grua_time">Nombre de grua</label>
          </div>
        </div>
        <input value='<?php echo($row['id'])?>' name="id" type="hidden" class="validate" >
        <button class="btn waves-effect waves-light" type="submit"> Enviar
          <i class="material-icons right">send</i>
        </button>
    <?php
      }
  ?>
  </form>
</div>