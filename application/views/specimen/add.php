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
              <label>Patient ID</label>
              <div class="ui left icon input">
            <i class="stethoscope icon"></i>
              <input type="text" name="patient_id" placeholder="xxxxxx">
            </div>
          </div>    
        </div>
        <div class="fields">
          <div class="field">
            <label>Type ID</label>
            <div class="ui left icon input">
            <i class="folder icon"></i>
              <input type="text" name="type_id" placeholder="xxxxxx">
            </div>
          </div>
          <div class="field">
            <label>Condition ID</label>
            <div class="ui left icon input">
            <i class="plus icon"></i>
              <input type="text" name="condition_id" placeholder="xxxxxx">
            </div>
          </div>    
        </div>
         <div class="field">
          <label>Specimen Description</label>
          <div class="ui left icon input">
            <i class="plus icon"></i>
              <input type="text" name="description" placeholder="This specimen is...">
            </div>

          <!-- <textarea rows="2"></textarea> -->
        </div> 
        <input class="ui fluid small green submit button" type="submit" placeholder="Submit">
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>
</body>
</html>