
<div class="row container dashboard">  
  <table class="striped">
    <thead>
      <tr>
          <?php
            foreach(($info = $grua->columns()->fetch_fields()) as $row)
              {
          ?>
                <th data-field="id"><?php echo($row->name); ?> </th>
          <?php
              }
          ?>
          <th>
            <a href="index.php?controller=Grua&action=add">
              <li class="material-icons"> library_add </li>
            </a>
          </th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($grua->all() as $row){
      ?>
        <tr>
          <td><?php echo($row['id']) ?></td>
          <td><?php echo($row['gruas_name']) ?></td>
          <td><?php echo $row['gruas_time'] ?></td>
          <td>
            <form action="index.php?controller=Grua&action=find" method="POST">
              <input type="hidden" name="id" value='<?php echo($row['id']) ?>'>
            <button class="btn waves-effect waves-light" type="submit">
              <i id='<?php echo($row['id']) ?>' class="small material-icons" name="grua">settings</i>
            </button>
            </form>
            <form action="index.php?controller=Grua&action=delete" method="POST">
              <input type="hidden" name="id" value='<?php echo($row['id']) ?>'>
            <button class="btn waves-effect waves-light" type="submit">
              <i id='<?php echo($row['id']) ?>' class="small material-icons" name="grua">delete</i>
            </button>
            </form>
          </td>
        </tr>
      <?php
        }
      ?>  
    </tbody>
  </table>
</div>