function parsecartitem(itemarr) {
    let cartid = { b1: ["book1.jpg", "Show your Work", "589"],
    b2: ["book2.jpg", "The women in the window", "Out of stock"],
    b3: ["book3.jpg", "Grandma's bag of stories", "339"],
    b4: ["book4.jpg", "Attack on tian", "963"],
    b5: ["book5.jpg", "Gone girl", "1499"],
    b6: ["book6.jpg", "Think like a monk", "999"],
    b7: ["book7.jpg", "Steal like an artist", "349"],
    b8: ["book8.jpg", "Ikigai", "Out of stock"],
    b9: ["book9.jpg", "Twelve rules of life", "569"],
    b10: ["book10.jpg", "Essential's kit", "963"],
    b11: ["book11.jpg", "Haryy potter", "289"],
    b12: ["book12.jpg", "Think and grow Rich", "799"] };
    arr = JSON.parse(itemarr);
    let total=0;
    if (itemarr == "[]") {
        document.getElementById("carttable").style.border = 0;
        document.getElementById("carttable").innerHTML = '<div style="margin-left: 4%;">        <img src="cart.png" height="150px" width="150px">        <p style="font-size:180%;">Your Cart is Empty</p>      </div>'
    }
    else {
        for (let i = 0; i < arr.length; i++) {
            let item1 = arr[i];
            total+=parseInt(cartid[item1][2]);
            document.getElementById("carttable").innerHTML += "<tr><td>" + "<img height= '250px' src='" + cartid[item1][0] + "'><br>" +
                cartid[item1][1] + "</td>" +
                "<td>₹" + cartid[item1][2]

                + "</tr>";
        }
        document.getElementById("carttable").innerHTML += "<tr><td>Grand total</td><td>"+ total +"</td></tr>";
    }

}

function displaycartitems() {
    let xhr = new XMLHttpRequest();
    xhr.open("get", "displaycart.php", true);
    xhr.send();
    xhr.onload = function () {
        let arr = this.responseText;
        // document.getElementById("carttable").innerHTML = arr;
        parsecartitem(arr);

    }
}
displaycartitems();