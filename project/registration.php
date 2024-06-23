<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles new.css">
</head>
<body>
<div id="top" style="box-shadow:0px 1px 10px 1px #888888">
    <table cellpadding=12 id="navbar">
      <tr>
        <td style="color:snow;font-size: 190%;text-align: left;"><a
        href="main.php" class="nohighlightlink" id="title"><img src="Enchanting_Table_JE2.webp" height="40" width="40"
        height="30" width="30" align=center >
        &nbsp;BestBookBuy </a>
      </td>
      <td><a href="main.php" class="navbarlinks  nohighlightlink">Home </a>&nbsp; &nbsp; &nbsp;
      <a href="mybooks.php" class="navbarlinks nohighlightlink">My Books </a>&nbsp; &nbsp; &nbsp;
      <a href="cart.php" class="navbarlinks  nohighlightlink">Cart 
        (
          <span class="cartitemcount" ></span>
        )
      </a>&nbsp; &nbsp; &nbsp;
      <a href="login.php"><span class="navbarlinks accountlogo active3" id="logoacc">
      <?php
      $conn = mysqli_connect("localhost","root","","users");
      $result = mysqli_query($conn,"select username from signedinuser where id='1'");
      $letter = mysqli_fetch_assoc($result);
      $letter = implode(" ",$letter);
      if ($letter!=NULL){
        echo strtoupper($letter[0]);
      }
      ?>
      <script>
        function updatecartcount(){
          var xhr = new XMLHttpRequest();
          xhr.open("GET","getcartitem.php",true);
          xhr.send();
          xhr.onload= function(){
            var items = this.responseText;
            if(items=="")
            {
              carobj = document.getElementsByClassName("cartitemcount");
              for (let i = 0; i < carobj.length; i++) {
                carobj[i].innerHTML = 0;
              }
            }
            else{
              x = JSON.parse(items);            
              carobj = document.getElementsByClassName("cartitemcount");
              for (let i = 0; i < carobj.length; i++) {
                carobj[i].innerHTML = x.length;
              }

            }
          }
        }
        updatecartcount();
      </script>

      </span></a>
      &nbsp; &nbsp; &nbsp;

        </td>
      </tr>
    </table>
  </div>

  <div class="subheader">
          <h3 id="greetuser" align="center">HELLO USER
              </h1>
        </div>

    <form action="submit.php" method="post"  id="dform" align="center">
        <table  cellspacing="24" cellpadding="10" class="formtable" align="center">
            
            <tr>
                <td>
                    <h3 align="left" id="heading">Create Your Account</h3>
                    <input type="text" name="fname" id="fname" placeholder="First Name" class="dinput">
                </td>
            </tr>
            <tr >
                <td>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" class="dinput">
                </td>
            </tr>

            <tr >
                <td>
                    <input type="text" name="email" placeholder="Username" class="dinput"><br>
                    <span class="infotext">You can use letters numbers and periods</span>
                </td>
            </tr>

            <tr >
                <td>
                    <input type="password" name="password" placeholder="Password" class="dinput"><br>
                    <span class="infotext" style="transform:translateX(9%)">Use strong and easy to remember password</span>
                </td>
            </tr>

            <tr>
                <td align="left"><span class="signintext"><a href="login.php">Sign in instead</a> </span></td>
                <td align="right">
                    <button type="submit" class="dbutton">Create</button>                    
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>