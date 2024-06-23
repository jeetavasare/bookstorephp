if(document.cookie== ''){
    document.cookie ='name=U; username=uwu; path=/';
    console.log("dd")
}
function resetCookie(){
    document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
}


