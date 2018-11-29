
<div class="ui top aligned center aligned grid">
  <div class="six wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Edit a Specimen
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('specimen/update'); ?>

    <?php foreach ($Specimen as $element) : ?>

      <form class="ui equal width mini form">
        <div class="ui stacked segment">
          <div class="fields">
            <div class="field">
                <label>Patient ID</label>
                <div class="ui left icon input">
                  <i class="folder icon"></i>
                <input type="hidden" name="specimen_id" value="<?php echo $element->specimen_id;  ?>">
              </div>

              <div class="field">
                <label>Patient ID</label>
                <div class="ui left icon input">
                  <i class="user circle icon"></i>
                  <input type="text" name="patient_id" placeholder="Patient ID" value="<?php echo $element->patient_id; ?>">
                </div>
              </div>

              <div class="field">
                <label>Type ID</label>
                <div class="ui left icon input">
                  <i class="user circle icon"></i>
                  <input type="text" name="type_id" placeholder="Type ID" value="<?php echo $element->type_id; ?>">
                </div>
              </div>

              <div class="field">
                <label>Condition ID</label>
                <div class="ui left icon input">
                  <i class="user circle icon"></i>
                  <input type="text" name="condition_id" placeholder="Condition ID" value="<?php echo $element->condition_id; ?>">
                </div>
              </div>

              <div class="field">
                <label>Description</label>
                <div class="ui left icon input">
                  <i class="user circle icon"></i>
                  <input type="text" name="description" placeholder="Description" value="<?php echo $element->description; ?>">
                </div>
              </div>


            </div>    
          </div>
          <input class="ui fluid small green submit button" type="submit" placeholder="Save">
        </div>
        <div class="ui error message"></div>
      </form>
      <?php endforeach; ?>
  </div>
</div>
</body>
</html>