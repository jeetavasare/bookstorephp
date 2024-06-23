function getdetails(){
    var xhr = new XMLHttpRequest();
    xhr.open("open","getdetails.php",true);
    xhr.send();
    xhr.onload = function(){
        str = this.responseText;
        // console.log(str);
        arr = JSON.parse(str);
        document.getElementById("forfullname").innerHTML = arr[0] + " "+arr[1];
        document.getElementById("foremail").innerHTML = arr[2];
        document.getElementById("fordate").innerHTML = arr[3];
        document.getElementById("forcartitems").innerHTML = arr[4].length; 
    }
}
getdetails();
function toggle(work){
    if(work=="show"){
        document.getElementById("formdiv").style.display = "block";
        document.getElementById("detailsdiv").style.display = "none";
    }
    else{
        document.getElementById("formdiv").style.display = "none";
        document.getElementById("detailsdiv").style.display = "inline-block";
    }
}