<div class="row">
    <form class="col s12" action="index.php?controller=Grua&action=add_now">
      <div class="row">
        <div class="input-field col s6">
          <input id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <select class="icons">
            <option value="" disabled selected>Choose your option</option>
            <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
            <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
            <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
          </select>
          <label>Images in select</label>
        </div>
        <div class="input-field col s12">
          <textarea id="descripcion" class="materialize-textarea" name="descripcion"></textarea>
          <label for="descripcion">Textarea</label>
        </div>
      </div>
    </form>
  </div>