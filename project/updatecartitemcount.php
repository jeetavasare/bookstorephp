<?php
$items = $_GET['itemid'];
$conn = mysqli_connect("localhost","root","","users");
$result = mysqli_query($conn,"select cartitem from users where fname=(select username from signedinuser)");
$item = mysqli_fetch_assoc($result);

$itemname = $item['cartitem'];
if ($itemname == "[]"){
    $itemname =  substr($itemname,0,-1) ."$items" ."]";
}
else{
    $itemname =  substr($itemname,0,-1) . ",". "$items" ."]";
}
$sql = "update users set cartitem=" . "'$itemname'" ."  where fname= (select username from signedinuser where id=1);";
echo $sql;
echo $itemname;
mysqli_query($conn,$sql);
?>