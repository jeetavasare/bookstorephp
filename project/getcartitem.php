<?php
$conn = mysqli_connect("localhost","root","","users");
$result = mysqli_query($conn,"select cartitem from users where fname=(select username from signedinuser)");
$item = mysqli_fetch_assoc($result);
echo $item['cartitem'];
?>