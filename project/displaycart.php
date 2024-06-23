<?php
$conn = mysqli_connect("localhost","root","","users");
$sql = "select cartitem from users where fname=(select username from signedinuser where id=1)";
$result = mysqli_query($conn,$sql);
$arr = mysqli_fetch_assoc($result);
echo $arr['cartitem'];

?>