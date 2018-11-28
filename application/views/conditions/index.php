  <div class="ui segment">
    <h3 class="ui header">Conditions Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name of Condition</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Conditions as $element) : ?>
      <tr>
        <td><?php echo $element->condition_id; ?></td>
        <td><?php echo $element->condition_name; ?></td>
        <td>
          <center>
            <a href="<?php echo site_url();?>editcondition/<?php echo $element -> condition_id; ?>"><button class="circular ui icon button"><i class="edit icon"></i></button></a>

            <a href="<?php echo site_url();?>deletecondition/<?php echo $element->condition_id; ?>"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url();?>/addcondition"><button class="ui positive button" style="margin-left: 87.5%">Add New Condition</button></a>
</div>
