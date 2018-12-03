<div class="ui top aligned center aligned grid">
  <div class="eight wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new specimen
    </div>

    <?php echo validation_errors(); ?>
    <?php echo form_open('specimen/update'); ?>
    <form class="ui equal width form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
            <label>Patient</label>
              <select name="patient_id" class="ui dropdown">
                <?php foreach ($Specimen as $orig) : ?>
                  <?php foreach ($Patient as $element) : ?>
                    <?php if ( $orig->patient_id === $element->patient_id ) : ?>
                      <option value="<?php echo $element->patient_id; ?>" selected><?php echo $element->first_name." ".$element->middle_name." ".$element->last_name." ".$element->name_suffix; ?></option>
                    <?php else : ?>
                      <option value="<?php echo $element->patient_id; ?>"><?php echo $element->first_name." ".$element->middle_name." ".$element->last_name." ".$element->name_suffix; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>    
                <?php endforeach; ?>
              </select>
              <input type="hidden" name="specimen_id" value="<?php echo $orig->specimen_id;  ?>">
          </div>
          <div class="field">
            <label>Pathologist</label>
              <select name="user_id" class="ui dropdown">
                <?php foreach ($Specimen as $orig) : ?>
                  <?php foreach ($Pathologist as $element) : ?>
                    <?php if ( $orig->user_id === $element->user_id ) : ?>
                      <option value="<?php echo $element->user_id; ?>" selected><?php echo $element->first_name_path." ".$element->middle_name_path." ".$element->last_name_path." ".$element->name_suffix_path; ?></option>
                    <?php else : ?>
                      <option value="<?php echo $element->user_id; ?>" selected><?php echo $element->first_name_path." ".$element->middle_name_path." ".$element->last_name_path." ".$element->name_suffix_path; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>    
                <?php endforeach; ?>
              </select>
              <input type="hidden" name="specimen_id" value="<?php echo $orig->specimen_id;  ?>">
          </div>    
          <div class="field">
            <label>Type</label>
              <select name="type_id" class="ui dropdown">
                <?php foreach ($Specimen as $orig) : ?>
                  <?php foreach ($Type as $element) : ?>
                    <?php if ( $orig->type_id === $element->type_id ) : ?>
                      <option value="<?php echo $element->type_id; ?>" selected><?php echo $element->type_name; ?></option>
                    <?php else : ?>
                      <option value="<?php echo $element->type_id; ?>"><?php echo $element->type_name; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="field">
            <label>Condition</label>
              <select name="condition_id" class="ui dropdown">
                <?php foreach ($Specimen as $orig) : ?>
                  <?php foreach ($Conditions as $element) : ?>
                    <?php if ( $orig->condition_id === $element->condition_id ) : ?>
                      <option value="<?php echo $element->condition_id; ?>" selected><?php echo $element->condition_name; ?></option>
                    <?php else : ?>
                      <option value="<?php echo $element->condition_id; ?>"><?php echo $element->condition_name; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </select>
          </div>
         <div class="field">
          <label>Specimen Description</label>
          <?php foreach ($Specimen as $orig) : ?>
          <textarea rows="3" name="description" placeholder="This specimen is..."><?php echo $orig->description; ?></textarea>
          <?php endforeach; ?>
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