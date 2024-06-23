<?php
$user = $_POST['email'];
$pass = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "users") or die(mysqli_error());
$sql = "update users set pass='$pass' where email='$user'";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

if(mysqli_affected_rows($conn) ==1){
    echo "<h1>Password was updated</h1>";
}
else{
    echo "<h1>There was a problem,please try again</h1>";
}

mysqli_close($conn);
header("Location: login.php", true, 301);
?>
