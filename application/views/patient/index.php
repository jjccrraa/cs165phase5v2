  <div class="ui fluid container segment">
    <h3 class="ui header">Patient Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Creation Date</th>
      <th>Birth date</th>
      <th>Sex</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Patient as $element) : ?>
      <tr>
        <td><?php echo $element->patient_id; ?></td>
        <td><?php echo $element->first_name." ".$element->middle_name." ".$element->last_name." ".$element->name_suffix; ?></td>
        <!--<td><?php// echo $element->middle_name; ?></td>
        <td><?php// echo $element->last_name; ?></td>-->
        <td><?php echo $element->creation_date; ?></td>
        <td><?php echo $element->birthdate; ?></td>
        <td><?php echo $element->sex; ?></td>
        <td>
          <center>
            <!-- code for update -->
            <a href="https://twitter.com"><button class="circular ui icon button"><i class="edit icon"></i></button></a>

            <!-- code for delete -->

            <a href="<?php echo site_url();?>delpatient/<?php echo $element -> patient_id; ?>"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url();?>addpatient"><button class="ui positive button" style="margin-left: 89%">Add New Patient</button></a>
</div>

