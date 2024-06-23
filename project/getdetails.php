<?php
$conn = mysqli_connect("localhost","root","","users");
$sql = "select fname,lname,email,date_time,cartitem from users where fname=(select username from signedinuser where 1)";
$result = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($result);
echo '[ "'.$result['fname'] . '", "'. $result['lname'] .'", "' .$result['email'] .'", "' .$result['date_time'] .'", ' .$result['cartitem']    .  ' ]' ;
?>