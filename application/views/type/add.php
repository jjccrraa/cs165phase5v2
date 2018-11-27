<div class="ui top aligned center aligned grid">
  <div class="six wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new type
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('type/add'); ?>
    <form class="ui equal width mini form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
              <label>Type Name</label>
              <div class="ui left icon input">
                <i class="folder icon"></i>
              <input type="text" name="type_name" placeholder="Type Name">
            </div>
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