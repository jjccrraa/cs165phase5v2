<div class="ui top aligned center aligned grid">
  <div class="eight wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Edit an existing specimen
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('specimen/update'); ?>
    <?php foreach ($Specimen as $element) : ?>
    <form class="ui equal width form">
      <div class="ui stacked segment">

        <div class="fields">
          <div class="field">
              <label>Patient ID</label>
              <div class="ui left icon input">
                <i class="stethoscope icon"></i>
                <input 
                  type="text" 
                  name="patient_id" 
                  value="<?php echo $element->patient_id;  ?>"
                >
              </div>
          </div>  

        </div>

        <div class="fields">
          <div class="field">
            <label>Type ID</label>
            <div class="ui left icon input">
            <i class="folder icon"></i>
              <input 
                type="text" 
                name="type_id" 
                value="<?php echo $element->type_id;  ?>"
              >

            </div>
          </div>
          <div class="field">
            <label>Condition ID</label>

            <div class="ui left icon input">
            <i class="plus icon"></i>
              <input 
                type="text" 
                name="condition_id" 
                value="<?php echo $element->condition_id;  ?>"
              >
            </div>

          </div>    
        </div>
         <div class="field">
          <label>Specimen Description</label>
          <div class="ui left icon input">
            <i class="plus icon"></i>
              <input 
                type="text" 
                name="description" 
                placeholder="This specimen is..."
                value="<?php echo $element->description;  ?>"
              >
            </div>

          <!-- <textarea rows="2"></textarea> -->
        </div> 
        <input 
          class="ui fluid small green submit button" 
          type="submit" 
          placeholder="Submit"
        >
      </div>
      <div class="ui error message"></div>
    </form>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>