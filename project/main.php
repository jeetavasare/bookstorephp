<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styles new.css">
</head>

<body>

  <div id="top" style="box-shadow:0px -1px 10px 1px #888888 ;position: sticky;top:0;">
    <table cellpadding=12 id="navbar">
      <tr id="top" >
        <td style="color:snow;font-size: 190%;text-align: left;"><a
        href="main.php" class="nohighlightlink" id="title"><img src="Enchanting_Table_JE2.webp" height="40" width="40"
        height="30" width="30" align=center >
        &nbsp;BestBookBuy </a>
      </td>
      <td ><a href="main.php" class="navbarlinks active nohighlightlink">Home </a>&nbsp; &nbsp; &nbsp;
      <a href="mybooks.php" class="navbarlinks nohighlightlink">My Books </a>&nbsp; &nbsp; &nbsp;
      <a href="cart.php" class="navbarlinks nohighlightlink">Cart 
        (
          <span class="cartitemcount" ></span>
        )
      </a>&nbsp; &nbsp; &nbsp;
      <a href="login.php"><span class="navbarlinks accountlogo" id="logoacc">
        <script src='master.js'></script>
        <script>
          function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(';');
         for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
             c = c.substring(1);
             }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
           }
         }
        return "";
        }
          x = document.cookie;
          // console.log(getCookie('name'));
          document.getElementById("logoacc").innerHTML = getCookie('name')[0].toUpperCase();
        </script>
      <!-- <?php
      $conn = mysqli_connect("localhost","root","","users");
      $result = mysqli_query($conn,"select username from signedinuser where id='1'");
      $letter = mysqli_fetch_assoc($result);
      $letter = implode(" ",$letter);
      if ($letter!=NULL){
        echo strtoupper($letter[0]);
      }
      ?> -->
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
        
      </script>

      </span></a>
      &nbsp; &nbsp; &nbsp;

        </td>
      </tr>
    </table>
  </div>



  <div class="subheader2" align=center>
    Top Titles
  </div>
  <table align=center cellspacing=90 cellpadding=50 >
    <tr>

      <td>
        <a href="login.html"><img src="book1.jpg" align=center height="250px"></a>
        <p class="booktitle">Show Your Work</p>
        <p>Ratings: 4.1 / 5 </p>
        <p>₹589-/</p>
        <p>
        <button class="formbutton" onclick="addtocart('b1')">Add to Cart</button>
        </p>
      </td>
      <td>
        <img src="book2.jpg" height="200" align=center height="250px">
        <p class="booktitle">The women in the window</p>
        <p>Ratings: 3.9 / 5 </p>
        <p>
        <p style="color:red;font-size: 90%;">Out of Stock</p>
        </p>

      </td>
      <td>
        <img src="book3.jpg" align=center height="250px">
        <p class="booktitle">Grandma's bag of stories</p>
        <p>Ratings: 4.0 / 5 </p>
        <p>₹339-/</p>
        <p>
        <button class="formbutton" onclick="addtocart('b3')">Add to Cart</button>
        </p>
      </td>
      <td><button style="background-color: sandybrown;border:none">Best Selling</button><br><br>
        <img src="book4.jpg" align=center height="250px">
        <p class="booktitle">Attack on titan</p>
        <p>Ratings: 4.5 / 5 </p>
        <p><strike>₹1963-/</strike>&nbsp;&nbsp;&nbsp;<mark> ₹963-/</mark>
        </p>
        <p>
        <button class="formbutton" onclick="addtocart('b4')">Add to Cart</button>
        </p>
      </td>

    </tr>

    <tr>

      <td>
        <img src="book5.jpg" align=center height="250px">
        <p class="booktitle">Gone girl</p>
        <p>Ratings: 4.5 / 5 </p>
        <p>₹1499-/</p>
        <button class="formbutton" onclick="addtocart('b5')">Add to Cart</button>
      </td>
      <td>
        <img src="book6.jpg" align=center>
        <p class="booktitle">Think Like a Monk</p>
        <p>Ratings: 4.5 / 5 </p>
        <p>₹999-/</p>
        <button class="formbutton" onclick="addtocart('b6')">Add to Cart</button>
      </td>
      <td>
        <img src="book7.jpg" height="200" align=center>
        <p class="booktitle">Steal like an artist</p>
        <p>Ratings: 4.5 / 5 </p>
        <p>₹349-/</p>
        <button class="formbutton" onclick="addtocart('b7')">Add to Cart</button>
      </td>
      <td>
        <img src="book8.jpg" align=center>
        <p class="booktitle">Ikigai</p>
        <p>Ratings: 3.5 / 5 </p>
        <p style="color:red;font-size: 90%;">Out of Stock</p>
      </td>

    </tr>
  </table>

  <div class="subheader2">
    Top Selling
  </div>
  <table align=center cellspacing=90 cellpadding=50>
    <tr>

      <td>
        <img src="book9.jpg" align=center>
        <p class="booktitle">Twelve rules of life</p>
        <p>Ratings: 4.1 / 5 </p>
        <p>₹569-/</p>
        <button class="formbutton" onclick="addtocart('b9')">Add to Cart</button>
      </td>
      <td><button style="background-color: sandybrown;border:none">Best Selling</button><br><br>
        <img src="book10.jpg" align=center>
        <p class="booktitle">Essential's Kit</p>
        <p>Ratings: 3.9 / 5 </p>
        <p><strike>₹5338-/</strike>&nbsp;&nbsp;&nbsp;<mark> ₹963-/</marke>
        </p>
        <button class="formbutton" onclick="addtocart('b10')">Add to Cart</button>
      </td>
      <td>
        <img src="book11.jpg" align=center>
        <p class="booktitle">Harry potter</p>
        <p>Ratings: 4.0 / 5 </p>
        <p>₹289-/</p>
        <button class="formbutton" onclick="addtocart('b11')">Add to Cart</button>
      </td>
      <td>
        <img src="book12.jpg" align=center>
        <p class="booktitle">Think and grow Rich</p>
        <p>Ratings: 4.5 / 5 </p>
        <p><strike>₹540-/</strike>&nbsp;&nbsp;&nbsp;<mark> ₹799-/</marke>
        </p>
        <button class="formbutton" onclick="addtocart('b12')">Add to Cart</button>
      </td>


    </tr>

  </table>

  <div class="subheader2">
    Featured Authors
  </div>
  <table align=center cellspacing=20 cellpadding=20>
    <tr>
      <td>
        <img src="author1.png" height="250" align=left>
        <p align=center class="booktitle">GAYLE FORMAN</p>
      </td>
      <td>
        <img src="author2.png" height="250">
        <p align=center class="booktitle">ERICH SEGAL</p>
      </td>
      <td>
        <img src="author3.png" height="250">
        <p align=center class="booktitle">SYLVIA PLATH</p>
      </td>
      <td>
        <img src="author4.png" height="250">
        <p align=center class="booktitle">SHASHI THAROOR</p>
      </td>
    </tr>
    <tr>
      <td colspan=4 align=right>
        <a href="nopage.html"><button class="button2">See All </button><br></a>
      </td>
    </tr>
  </table>

  <div class="subheader" style="padding-top: 1%;padding-bottom: 1%;">
    <p style="font-size:80%;line-height: 80%;margin:0%">^<br><a href="#top" class="nohighlightlink active">TOP OF THE
        PAGE</p></a>
  </div>

  <div class="footer" id="footer">
    <p class="footerelement1" id="support">Quick Links</p>

    <table cellspacing=0 cellpadding="40" style="padding-left:10%">
      <tr>
        <td>
          <a href="login.php" class="nohighlightlink active2">Your Account</a>
        </td>
        <td>
          <a href="cart.php" class="nohighlightlink active2">Cart (
            <span class="cartitemcount"></span>
            <script>
              updatecartcount();
            </script>
            )</a>
        </td>
        <td>
          <a href="mybooks.php" class="nohighlightlink active2">Owned Books (0)</a>
        </td>
        <td>
          <a href="mybooks.php" class="nohighlightlink active2">Ordered Books</a>
        </td>
      </tr>
    </table>

    <p style="font-size: 175%;;text-align: center;font-weight: lighter;">Query</p>
    <form class="formoutline" style="margin-right: 35%;margin-left: 35%;" action="main.php">
      <br><br>
      <input type="text" placeholder="Name" class="formelement-dark active">
      <br>
      <br>
      <input type="email" placeholder="email@example.com" class="formelement-dark active">
      <br>
      <br>
      <br>
      
      <input type="text" placeholder="Subject" class="formelement-dark active" style="height: 30px;width:269px;">
      <br>
      <br>

      <textarea placeholder="Type your Query" class="formelement-dark active"
        style="height: 100px;width:269px;"></textarea>
      <br>
      <br>
      <br>
      <button type="reset" class="formbutton">Reset</button>
      &nbsp;&nbsp;
      <button type="submit" class="formbutton">Submit</button>
    </form>
    <br>
    <br>
    <p class="footerelement1" style="margin:0%;padding: 0%;text-align: center;"> </p>
    <p class="footerelement1" style="margin:0%;padding: 0%;text-align: center;">100% Secure Payment </p>
    <table cellspacing=30 align=center>
      <tr>
        <td><img src="mastercard.png" height="45" width="60"></td>
        <td><img src="visa.png" height="45" width="45"></td>
        <td><img src="paytm.png" height="20" width="60"></td>
      </tr>
      <tr>
        <td colspan="3"><p class="footerelement1" style="margin:0%;padding: 0%;text-align: center;font-size: 90%;color: rgb(211, 211, 211);">All major Payment Methods accepted </p></td>
      </tr>
    </table>

    <br>
    
    <p class="footerelement1" style="margin:0%;padding: 0%;text-align: center;">Follow</p>
    <table cellspacing=30 align=center>
      <tr>
        <td><a href="https://instagram.com/"><img src="insta logo.png" height="40" width="40"></a></td>
        <td><a href="https://facebook.com"><img src="facebook logo.png" height="35" width="35"></a></td>
        <td><a href="https://twitter.com"><img src="twitter logo.png" height="40" width="40"></a></td>
      </tr>
    </table>
    


    <p style="font-size: 70%;color: rgb(219, 214, 214);text-align: center;margin: 0%;">&copy;2022, Jeet</p>
  </div>
</body>

</html>
<script src="main.js">

</script>