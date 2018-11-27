  <div class="ui segment">
    <h3 class="ui header">Specimen Table</h3>
   <table class="ui striped table">
  <thead>
    <tr>
      <th>Specimen ID</th>
      <th>Patient ID</th>
      <th>Condition ID</th>
      <th>Type ID</th>
      <th>Description</th>
      <th>Date Acquired</th>
      <th><center>Actions</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Glenn Karlo</td>
      <td>September 14, 2013</td>
      <td>jhlilk22@yahoo.com</td>
      <td>No</td>
      <td>No</td>
      <td>No</td>
      <td><center>
        <a href="https://twitter.com"><button class="circular ui icon button"><i class="edit icon"></i></button></a>
        <a href="https://twitter.com/gkmanguiat"><button class="circular ui icon button"><i class="trash icon"></i></button></a>
      </center></td>
    </tr>
    <?php foreach ($Specimen as $element) : ?>
      <tr>
        <td><?php echo $element->specimen_id; ?></td>
        <td><?php echo $element->patient_id; ?></td>
        <td><?php echo $element->condition_id; ?></td>
        <td><?php echo $element->type_id; ?></td>
        <td><?php echo $element->description; ?></td>
        <td><?php echo $element->date_acquired; ?></td>
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
<a href="<?php echo site_url();?>/addspecimen"><button class="ui positive button" style="margin-left: 87.9%">Add New Specimen</button></a>
</div>