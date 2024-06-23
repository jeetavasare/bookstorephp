function addtocart(itemid){
    let xhr = new XMLHttpRequest();
    xhr.open("get","updatecartitemcount.php?itemid="+ "\"" +itemid + "\"",true);
    xhr.send();
    xhr.onload=function(){
        updatecartcount();
        console.log(this.responseText);
    }
    
}
