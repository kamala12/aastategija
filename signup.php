<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php';?>
<?php
    $db = new Database();
   if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
       if($name == '' || $email == '' || $password == ''){
          echo "Täida kõik väljad";
       }
       else{
           $query = "INSERT INTO user (name,email,password,user_type)
              VALUES ('$name','$email','$password',1) ";
           $insert_row = $db->insert($query);
           if($insert_row){
               $_SESSION['user'] = $email;
               header('Location:exam.php');
           }
       }
   }
?>
<?php if(isset($_SESSION['user'])): ?>
    <?php header("Location:index.php"); ?>
<?php else: ?>
<div class="container">
  <div class="row">
  	<div class="col-md-6">
    
          <form class="form-horizontal" action="signup.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Registeeru</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Isikukood</label>
              <div class="controls">
                <input id="name" name="name" placeholder="" class="form-control input-lg" type="text"/>
                <p class="help-block"></p>
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input id="email" name="email" placeholder="" class="form-control input-lg" type="email"/>
                <p class="help-block">Sisesta oma E-mail</p>
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="password">Parool</label>
              <div class="controls">
                <input id="password" name="password" placeholder="" class="form-control input-lg" type="password"/>
                <p class="help-block">Paroolis peab olema vähemalt 6 tähte</p>
              </div>
            </div>
         
            <div class="control-group">
              <!-- nupp -->
              <div class="controls">
                <input type="submit" name ="submit" class="btn btn-success" value="Registeeri"/>
              </div>
            </div>
          </fieldset>
        </form>
    
    </div> 
  </div>
</div>


<?php endif; ?>

<?php include 'includes/footer.php'; ?>