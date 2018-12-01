  <div class="ui segment">
    <h3 class="ui header">Specimen Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>Specimen ID</th>
      <th>Patient</th>
      <th>Pathologist</th>
      <th>Condition</th>
      <th>Type</th>
      <th>Description</th>
      <th>Date Acquired</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Specimen as $element) : ?>
      <tr>
        <td><?php echo $element->specimen_id; ?></td>
        <td><?php echo $element->first_name." ".$element->middle_name." ".$element->last_name." ".$element->name_suffix; ?></td>
        <td><?php echo $element->first_name_path." ".$element->middle_name_path." ".$element->last_name_path." ".$element->name_suffix_path; ?></td>
        <td><?php echo $element->condition_name; ?></td>
        <td><?php echo $element->type_name; ?></td>
        <td><?php echo $element->description; ?></td>
        <td><?php echo $element->date_acquired; ?></td>
        <td>
          <center>
            <a href="<?php echo site_url();?>editspecimen/<?php echo $element -> specimen_id; ?>"><button class="circular ui icon button"><i class="edit icon"></i></button></a>
            <a href="<?php echo site_url();?>delspecimen/<?php echo $element -> specimen_id; ?>"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
          </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo site_url();?>addspecimen"><button class="ui positive button" style="margin-left: 87.9%">Add New Specimen</button></a>
</div>