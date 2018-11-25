  <div class="ui segment">
    <h3 class="ui header">Type Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Type Name</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Type as $element) : ?>
      <tr>
        <td><?php echo $element->type_id; ?></td>
        <td><?php echo $element->type_name; ?></td>
        <td>
          <center>
            <a href="https://twitter.com"><button class="circular ui icon button"><i class="edit icon"></i></button></a>
            <a href="https://twitter.com/gkmanguiat"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
          </center>
        </td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url();?>/addtype"><button class="ui positive button" style="margin-left: 90%">Add New Type</button></a>
</div>