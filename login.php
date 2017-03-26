<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php'; ?>
<?php
$db = new Database();
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user WHERE email ='$username' AND password ='$password' AND user_type = 1";
  $result = $db->select($query);
  if($result){
    $row  = $result->fetch_assoc();
    $count = $result->num_rows;
    if($count == 1){
      $_SESSION['user'] = $row['email'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['user_type'] = $row['user_type'];
      header('Location: index.php');
    }
  }
  else{
    echo 'Sinu kasutajanimi või parool oli vale';
  }
}
?>
<?php if(isset($_SESSION['user'])): ?>
  <?php header("Location:index.php"); ?>
<?php else : ?>
  <div class="jumbotron">
    <h2 class="text-center">Õpilane</h2>
  </div>
  <div class="wrapper">
    <form action="login.php" method="post"class="form-signin">       
      <h2 class="form-signin-heading">Logi sisse</h2>
      <input type="text" class="form-control" name="username" placeholder="Email" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Parool" required=""/><br>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Logi sisse"/><br>
       <a href="signup.php" class="btn btn-info" role="button">Registeeru</a>
    </form>
  </div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>