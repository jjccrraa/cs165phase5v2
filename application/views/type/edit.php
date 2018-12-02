<div class="ui top aligned center aligned grid">
  <div class="six wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Edit a type
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('type/update'); ?>
    <form class="ui equal width mini form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
              <label>Type Name</label>
              <div class="ui left icon input">
                <i class="folder icon"></i>
              <?php foreach ($Type as $element) : ?>
              <input type="hidden" name="type_id" value="<?php echo $element->type_id;  ?>">
              <input type="text" name="type_name" placeholder="Type Name" value="<?php echo $element->type_name; ?>">
              <?php endforeach; ?>
            </div>
          </div>    
        </div>
        <input class="ui fluid small green submit button" type="submit" placeholder="Save">
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>
</body>
</html>