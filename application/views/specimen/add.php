<div class="ui top aligned center aligned grid">
  <div class="six wide column">
   <div class="ui tiny green message">
      <i class="plus icon"></i> Add a new specimen
    </div>
    <form class="ui equal width form">
      <div class="ui stacked segment">
        <div class="fields">
          <div class="field">
              <label>Patient ID</label>
              <div class="ui left icon input">
            <i class="stethoscope icon"></i>
              <input type="text" name="PatientID" placeholder="xxxxxx">
            </div>
          </div>    
        </div>
        <div class="fields">
          <div class="field">
            <label>Type ID</label>
            <div class="ui left icon input">
            <i class="folder icon"></i>
              <input type="text" name="TypeID" placeholder="xxxxxx">
            </div>
          </div>
          <div class="field">
              <label>Condition ID</label>
              <div class="ui left icon input">
            <i class="plus icon"></i>
              <input type="text" name="ConditionID" placeholder="xxxxxx">
            </div>
          </div>    
        </div>
         <div class="field">
          <label>Specimen Description</label>
          <textarea rows="2"></textarea>
        </div> 
        <div class="ui fluid small green submit button">Submit</div>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>
</body>
</html>