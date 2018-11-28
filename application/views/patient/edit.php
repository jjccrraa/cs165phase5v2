<div class="ui top aligned center aligned grid">
  <div class="eight wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new patient
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('patient/update'); ?>
    <?php foreach ($Type as $element) : ?>
    <form class="ui equal width mini form">
      <div class="ui stacked segment">
        <div class="field">
          <label>First Name</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input type="hidden" name="type_id" value="<?php echo $element->patient_id;  ?>">
            <input type="text" name="first_name" placeholder="First Name" value="<?php echo $element->first_name;  ?>">
          </div>
        </div>
        <div class="field">
          <label>Middle Name</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input type="text" name="middle_ame" placeholder="Middle Name" value="<?php echo $element->middle_name;  ?>">
          </div>
        </div>
        <div class="field">
          <label>Surname</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $element->last_name;  ?>">
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Name Suffix</label>
            <div class="ui left icon input">
            <i class="user circle icon"></i>
              <input type="text" name="name_suffix" placeholder="Suffix (e.g. Jr. / III)" value="<?php echo $element->name_suffix;  ?>">
            </div>
          </div>
          <div class="field">
              <label>Gender</label>
              <div class="ui left icon input">
            <i class="venus double icon"></i>
              <input type="text" name="sex" placeholder="Gender (Male/Female/Others)" value="<?php echo $element->sex;  ?>">
            </div>
          </div> 
          <div class="date field">
          <label>Birthday</label>
            <div class="ui left icon input">
            <i class="gift icon"></i>
            <input type="text" name="birthdate" placeholder="YYYY-MM-DD" value="<?php echo $element->birthdate;  ?>">
          </div>
        </div>   
        </div>
        <input class="ui fluid small green submit button" type="submit" placeholder="Submit">
      </div>
      <div class="ui error message"></div>
    </form>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>