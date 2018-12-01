<div class="ui top aligned center aligned grid">
  <div class="eight wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new specimen
    </div>

    <?php echo validation_errors(); ?>
    <?php echo form_open('specimen/add'); ?>
    <form class="ui equal width form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
            <label>Patient</label>
              <select name="patient_id" class="ui dropdown">
                <?php foreach ($Patient as $element) : ?>
                <option value="<?php echo $element->patient_id; ?>"><?php echo $element->first_name." ".$element->middle_name." ".$element->last_name." ".$element->name_suffix; ?></option>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="field">
            <label>Pathologist</label>
              <select name="user_id" class="ui dropdown">
                <?php foreach ($Pathologist as $element) : ?>
                <option value="<?php echo $element->user_id; ?>"><?php echo $element->first_name_path." ".$element->middle_name_path." ".$element->last_name_path." ".$element->name_suffix_path; ?></option>
                <?php endforeach; ?>
              </select>
          </div>    
          <div class="field">
            <label>Type</label>
              <select name="type_id" class="ui dropdown">
                <?php foreach ($Type as $element) : ?>
                <option value="<?php echo $element->type_id; ?>"><?php echo $element->type_name; ?></option>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="field">
            <label>Condition</label>
              <select name="condition_id" class="ui dropdown">
                <?php foreach ($Conditions as $element) : ?>
                <option value="<?php echo $element->condition_id; ?>"><?php echo $element->condition_name; ?></option>
                <?php endforeach; ?>
              </select>
          </div>    
         <div class="field">
          <label>Specimen Description</label>
          <textarea rows="3" name="description" placeholder="This specimen is..."></textarea>
        </div> 
      </div>
        <input class="ui fluid small green submit button" type="submit" placeholder="Submit">
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>
</body>
</html>