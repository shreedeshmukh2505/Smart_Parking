<?php
 $showalert=false;
 $showerror=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showalert = false;
    $showerror = false;
    include 'test-dbconnect-parkkaro.php';
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    $vehicle = $_POST["vehicle"];
    $mobile = $_POST["mobile"];

    $exists = false;

    $sql = "INSERT INTO `parkkaro` (`vehicle`, `mobile`, `dt`) VALUES ( '$vehicle', '$mobile', current_timestamp())";

    // INSERT INTO `login` (`username`, `password`, `dt`) VALUES ('noname', '123', current_timestamp());
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showalert = true;
        header("location:payment.html"); 
    } 
    else {
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
// if($showalert){
//      }
// if($showerror){
//     echo' <div class="alert alert-danger alert-dismissible fade show" role="alert" id=message>
//    <strong>Error!</strong> '.$showerror.'
//    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//      <span aria-hidden="true">&times;</span>
//    </button>
//  </div>';}
 
//  if($showerror){
//     echo'<div id="error">
//     <div id="inner-message" class="alert-warning alert-error">
//        Error! '.$showerror.'
//     </div>
// </div>';}
 
 ?>
 <!-- Added later -->

<div class="box">
    <form action="../edi project/test-parkkaro.php" method="post">
    

    <div class="form" >
        <h2>Park Karo</h2>
        <!--
            In case of failure of the username?password code connecting to the database use this code 
        <div class="inputBox">
        <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required="required" autocomplete="off">
            <i></i>
        </div> -->
         <!-- <div class="inputBox">
        <input type="text" required="required" required id="name" name="name" autocomplete="off">
                <span>Enter Name</span>
                <i></i>
        </div> 

        <div class="inputBox">
        <input type="email" required="required" required id="email" name="email" autocomplete="off">
                <span>Enter Email</span>
                <i></i>
        </div> -->

        <div class="inputBox">
        <input type="text" required="required" required id="vehicle" name="vehicle" autocomplete="off">
                <span>Enter Vehicle Number</span>
                <i></i>
        </div>

        <div class="inputBox">
        <input type="number" required="required" required id="mobile" name="mobile" autocomplete="off">
                <span>Enter Mobile Number</span>
                <i></i>
        </div>

        <!-- <div class="inputBox">
        <input type="text" required="required" required id="cpassword" name="cpassword" autocomplete="off" >
                <span>Confirm Password</span>
                <i></i>
        </div> -->
     <input type="submit" name="signup" id="signup" value="Pay Now" onclick="checker()">
     
    <!-- <a href="../Anurag/parkingallotment.html" id="">Parking Allotment</a> --> 
    <!-- <button type="submit" ><a href="../Anurag/parkingallotment.html"> Parking Allotment</a></button> -->
    <script>
        function checker() {
            var result= confirm('Are you sure ?');
            if (result==false) {
                event.preventDefault();
            }
        }
    </script>
    
    </div>
    </form>
</div>
</body>
</html>