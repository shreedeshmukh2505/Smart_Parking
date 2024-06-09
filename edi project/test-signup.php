<?php
 $showalert=false;
 $showerror=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $showalert=false;
        $showerror=false;
    include 'partials/test-dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exists=false;
    if(($password==$cpassword) && $exists==false)
    {
$sql="INSERT INTO `login` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";

// INSERT INTO `login` (`username`, `password`, `dt`) VALUES ('noname', '123', current_timestamp());
$result=mysqli_query($conn,$sql);
        if($result)
        {
            $showalert=true;
        }
    }
    else
    {
        $showerror = "Passwords do not match";
    }
    }

?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test-login.css">
</head>
<body>
    <!-- Added later -->
    <?php
if($showalert){
    echo'<div id="success">
    <div id="inner-message" class="alert-warning alert-error">
       Success! Your account has been created and you can login.
    </div>
</div>';}
// if($showerror){
//     echo' <div class="alert alert-danger alert-dismissible fade show" role="alert" id=message>
//    <strong>Error!</strong> '.$showerror.'
//    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//      <span aria-hidden="true">&times;</span>
//    </button>
//  </div>';}
 
 if($showerror){
    echo'<div id="error">
    <div id="inner-message" class="alert-warning alert-error">
       Error! '.$showerror.'
    </div>
</div>';}
 
 ?>
 <!-- Added later -->

<div class="box">
    <form action="../Anurag/test-signup.php" method="post">

    <div class="form" >
        <h2>Sign Up</h2>
        <!--
            In case of failure of the username?password code connecting to the database use this code 
        <div class="inputBox">
        <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required="required" autocomplete="off">
            <i></i>
        </div> -->
         <div class="inputBox">
        <input type="text" required="required" required id="username" name="username" autocomplete="off">
                <span>Username</span>
                <i></i>
        </div> 

        <div class="inputBox">
        <input type="text" required="required" required id="password" name="password" autocomplete="off">
                <span>Password</span>
                <i></i>
        </div>
        <div class="inputBox">
        <input type="text" required="required" required id="cpassword" name="cpassword" autocomplete="off" >
                <span>Confirm Password</span>
                <i></i>
        </div>
    <input type="submit" name="signup" id="signup" value="Signup">
    
    </div>
    </form>
</div>
</body>
</html>