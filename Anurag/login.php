<?php
 $login=false;
 $showerror=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $showalert=false;
        $showerror=false;
    include 'partials/_dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    
$sql="Select * from users where username='$username' And password='$password'";
$result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
        if($num>=1)
        {
            $login=true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location:welcome.php");
        }
    else
    {
        $showerror = "Invalid Credentials";
    }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body background="../Anurag/wallpaper 1.jpg">
  
    <?php require 'partials/_nav.php'?>
<?php
if($login){
   echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}
if($showerror){
    echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> '.$showerror.'
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';}


?>
    <div class="container">
        <h1 class="text-center">Login to our website</h1>
        <form action="/Anurag/login.php" method="post">
  <div class="form-group col-md-6"  >
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username" required>
    
  </div>
  <div class="form-group col-md-6 " aria-required=""> 
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button></fieldset>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>