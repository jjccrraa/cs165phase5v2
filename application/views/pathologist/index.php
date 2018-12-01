  <div class="ui fluid container segment">
    <h3 class="ui header">Pathologist Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Creation Date</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Pathologist as $element) : ?>
      <tr>
        <td><?php echo $element->user_id; ?></td>
        <td><?php echo $element->first_name_path." ".$element->middle_name_path." ".$element->last_name_path." ".$element->name_suffix_path; ?></td>
        <td><?php echo $element->creation_date; ?></td>
        <td>
          <center>
            <!-- code for update -->
            <a href="<?php echo site_url();?>editpathologist/<?php echo $element->user_id; ?>"><button class="circular ui icon button"><i class="edit icon"></i></button></a>

            <!-- code for delete -->

            <a href="<?php echo site_url();?>delpathologist/<?php echo $element -> user_id; ?>"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url();?>addpathologist"><button class="ui positive button" style="margin-left: 89%">Add New Pathologist</button></a>
</div>

