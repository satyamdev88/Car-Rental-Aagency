<?php
// Fetxhing Data from Form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$num = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$rePassword = $_POST['c-password'];
$gender = $_POST['gender'];

//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "car_rental_agency";

$conn  =  mysqli_connect($servername,$username,$password,$dbname);

if (!$conn)
{
    die("Error :".mysqli_connect_error());
}
else
{
    // if($password == $rePassword){
    //     $sql = "insert into `Registration`(`fname`,`lname`,`age`, `contact`,`email`,`password`,`gender`) values('$fname', '$lname', '$age', '$num', '$email', '$password', '$gender')"

    // }
    echo "Connection Success";
}
?>