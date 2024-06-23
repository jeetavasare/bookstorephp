<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styles new.css">
  <style>
    #carttable{
      text-align:center;
      border:solid rgb(220,20,60) 2px;
    }
    table{
      border-collapse:collapse; 
    }
    #carttable{
      font-weight:bolder;
    }
    #cartdiv{
      padding-bottom:9vh;
      padding-left:10vw;
    }
  </style>
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
      <a href="cart.php" class="navbarlinks active nohighlightlink">Cart 
        (
          <span class="cartitemcount" ></span>
        )
      </a>&nbsp; &nbsp; &nbsp;
      <a href="login.php"><span class="navbarlinks accountlogo" id="logoacc">
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

    <p style="margin: 0%;margin-left: 2%;margin-bottom: 0%;" align=left>Cart Items
      &nbsp; &nbsp; &nbsp;
      <a href="main.php" class="nohighlightlink active"><button class="button2">Add items</button></a>
      &nbsp; &nbsp; &nbsp;
      <button class="button2-disabled">Buy All</button>
    </p>
  </div>


  <br>
  <br>


        <script src="cart.js">  
        </script>
        <div id="cartdiv">

          <table id="carttable" border="2" cellpadding=10 cellspacing=24>
          <tr><td>Item</td> <td>Price</td></tr>
  
        </table>
        </div>


  
</body>

</html>
