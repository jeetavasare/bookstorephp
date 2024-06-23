<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "users");


$sql = "select * from users where email='$email' and pass='$password'";
$result = mysqli_query($conn,$sql);
$countusers = mysqli_num_rows($result);
if($countusers==1){
    $rs = mysqli_query($conn,"select fname from users where email='$email'");
    $fname = mysqli_fetch_assoc($rs);
    $fname = implode(" ",$fname);
    mysqli_query($conn,"update signedinuser set username='$fname' ");
    echo "
    <script src='master.js'></script>
    <script>
    console.log(resetCookie());
    document.cookie = 'name=$fname; username=$email; path=/';
    x = document.cookie;
    console.log(x);
    </script>
    ";
    // header("Location: main.php", true, 302);
}
else{
    echo "<h1>Username or password do not match</h1>";
    echo "<h3>Check for typo in username or password</h3>";
}
mysqli_close($conn);
?>
