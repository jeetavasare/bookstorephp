<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cart = "[]";
$conn = mysqli_connect("localhost", "root", "", "users");
mysqli_query($conn,"insert into users(fname,lname,email,pass,cartitem,date_time) values('$fname', '$lname','$email','$password' , '$cart',now())") or die(mysqli_error($conn));
mysqli_close($conn);
header("Location: login.php", true, 301);
?>