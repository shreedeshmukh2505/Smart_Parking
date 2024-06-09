<?php
//Added later
// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"]);
//Till here

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

    $sql = "INSERT INTO `parkkaro` (`vehicle`, `mobile`, `dt`) VALUES ('$vehicle', '$mobile', current_timestamp())";

    // INSERT INTO `login` (`username`, `password`, `dt`) VALUES ('noname', '123', current_timestamp());
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showalert = true;
        header("location:test-parkkaro.php"); 
    } 
    else {
        echo 'We ran into problems! \n Sorry!';
    }
}

?> 