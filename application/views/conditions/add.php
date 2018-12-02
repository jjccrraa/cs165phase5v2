<div class="ui top aligned center aligned grid">
  <div class="six wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new condition
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('conditions/add'); ?>
    <form class="ui equal width mini form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
              <label>Condition Name</label>
              <div class="ui left icon input">
                <i class="folder icon"></i>
              <input type="text" name="condition_name" placeholder="Condition Name">
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