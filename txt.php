 <form class="form-horizontal" action="add.php" method="post">
  <fieldset>
            <div id="legend">
              <legend class="text-center">Lisa küsimus</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Küsimuse number</label>
               <div class="controls">
                <input name="question_number" value="<?php echo $next; ?>" placeholder="" class="form-control input-lg" type="number" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label" for="text">Küsimus</label>
              <div class="controls">
                <input name="question_text" placeholder="" class="form-control input-lg" type="text" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="choice1">#Valik 1</label>
              <div class="controls">
                <input  name="choices1" placeholder="" class="form-control input-lg" type="text" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">#Valik 2</label>
              <div class="controls">
                <input name="choices2" placeholder="" class="form-control input-lg" type="text"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">#Valik 3</label>
              <div class="controls">
                <input id="choices3" name="choices3" placeholder="" class="form-control input-lg" type="text"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">#Valik 4</label>
              <div class="controls">
                <input name="choices4" placeholder="" class="form-control input-lg" type="text"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Õige vastuse Number</label>
               <div class="controls">
                <input id="username" name="correct_choice" placeholder="" class="form-control input-lg" type="number"/>
              </div>
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Submit"/>
  </fieldset>         
 </form>