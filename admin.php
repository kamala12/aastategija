<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
 //Grab Post Data
  $db = new Database();
 if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     //validation check
     if($username == '' || $password == ''){
        echo "Please Fill the details";
     }
     else{
        //query
         $query = "SELECT * FROM user WHERE email = '$username' AND password = '$password' AND user_type = 2";
         $result = $db->select($query);
         if($result){
            $row = $result->fetch_assoc();
            $count = $result->num_rows;
             if($count == 1){
                 $_SESSION['user'] = $row['email'];
                 $_SESSION['id'] = $row['id'];
                 $_SESSION['user_type'] = $row['user_type'];
                 header('Location: add.php');
             }
         }
         else{
             echo "Sisenemine ebaõnnestus";
         }
     }
 }

?>
   <div class="jumbotron">
      <h2 class="text-center">Administraatori Paneel</h2>
   </div>

    <div class="wrapper">
        <form action="admin.php" method="post" class="form-signin">
            <h2 class="form-signin-heading">Logi sisse</h2>
            <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
            <br>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login"/>
        </form>
    </div>
<?php include 'includes/footer.php';?>