<div class="ui top aligned center aligned grid">
  <div class="eight wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Edit an existing pathologist
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('pathologist/update'); ?>
    <?php foreach ($Pathologist as $element) : ?>
    <form class="ui equal width mini form">
      <div class="ui stacked segment">

        <div class="field">
          <label>First Name</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input type="hidden" name="user_id" value="<?php echo $element->user_id;  ?>">
            <input type="text" name="first_name_path" placeholder="First Name" value="<?php echo $element->first_name_path;  ?>">
          </div>
        </div>

        <div class="field">
          <label>Middle Name</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input type="text" name="middle_name_path" placeholder="Middle Name" value="<?php echo $element->middle_name_path;  ?>">
          </div>
        </div>
        <div class="field">
          <label>Surname</label>
          <div class="ui left icon input">
            <i class="user circle icon"></i>
            <input 
              type="text" 
              name="last_name_path" 
              placeholder="Last Name" 
              value="<?php echo $element->last_name_path;  ?>"
            >
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Name Suffix</label>

            <div class="ui left icon input">
            <i class="user circle icon"></i>
              <input 
                type="text" 
                name="name_suffix_path" 
                placeholder="Suffix (e.g. Jr. / III)" 
                value="<?php echo $element->name_suffix_path;  ?>"
              >
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