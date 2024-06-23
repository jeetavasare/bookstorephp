<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles new.css">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
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
      <td><a href="main.php" class="navbarlinks nohighlightlink">Home </a>&nbsp; &nbsp; &nbsp;
      <a href="mybooks.php" class="navbarlinks nohighlightlink">My Books </a>&nbsp; &nbsp; &nbsp;
      <a href="cart.php" class="navbarlinks  nohighlightlink">Cart 
        (
          <span class="cartitemcount" ></span>
        )
      </a>&nbsp; &nbsp; &nbsp;
      <a href="login.php"><span class=" accountlogo active3" id="logoacc">
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
          <h3 id="greetuser" align="center">HELLO 
              
              <?php
                  $conn = mysqli_connect("localhost","root","","users");
                  $result = mysqli_query($conn,"select username from signedinuser where id='1'");
                  $letter = mysqli_fetch_assoc($result);
                  $letter = implode(" ",$letter);
                  echo strtoupper($letter);
                  ?>
              </h1>
        </div>

        <div id="formdiv">
        <!-- <h3 align="center" id="heading" style="font-size:large;padding:0%;padding-top:2%;margin:0%">Not you, Sign in with another account</h3> -->
                <form action="authenticate.php" method="post"  id="dform" align="center" >
                    <table  cellspacing="24" cellpadding="10" class="formtable" align="center" style="padding-top:0%;margin-top:70px">
                        <tr>
                            <td>

                                <h3 align="left" id="heading">Login to your Account</h3>
                                <input type="text" name="email" id="email" placeholder="example@domain.com" class="dinput">
                            </td>
                        </tr>
                        <tr >
                            <td>
                                <input type="password" name="password" id="password" placeholder="Password" class="dinput">
                                <span class="forgotpass" align="left" ><a href="passreset.php">Forgot Password?</a> </span>
                            </td>
                        </tr>
            
                        <tr>
                            <td align="left" >
                                <span class="signintext"><a href="registration.php">Create Account</a> </span></td>
                            <td align="right" >
                                <button type="submit" class="dbutton">Sign In</button>                    
                            </td>
                        </tr>
                    </table> 
                    <br>
                    <span class="notyoutext" onclick="toggle('hide')">Go back</span>
                </form>

          </div>
        <div id="logindiv">
  <!-- Hide elements -->
  <script>
          document.getElementById("formdiv").style.display = "none";
        </script>
        </div>
        <br>
        <br>
        <br>
        <div id="detailsdiv" align=center>
          <h1 id=subheading>Account Details</h1>
          <br>
          <br>
          
          <table cellspacing=10>
            
            <tr>
              <td>
                <span class="field">Full name:</span>
              </td> 
              <td>
              <span id="forfullname" class="record"></span>
              </td>
            </tr>

            <tr>
              <td>
                <span class="field">Email:</span>
              </td> 
              <td>
              <span id="foremail" class="record"></span>
              </td>
            </tr>

            <tr>
              <td>
                <span class="field">Created on:</span>
              </td> 
              <td>
              <span id="fordate" class="record"></span>
              </td>
            </tr>

            <tr>
              <td>
                <span class="field">No of items in cart:</span>
              </td> 
              <td>
              <span id="forcartitems" class="record"></span>
              </td>
            </tr>

          </table>
          
          <br>

          <span class="notyoutext" onclick="toggle('show')">Not you sign in</span>
        </div>
    
        <script src="login.js"></script>

</body>

</html>