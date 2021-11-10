function validate()
{
 var username = document.getElementById("username").value;
 var password = document.getElementById("password").value;
 
 if(username == "sahayadmin" && password == "1234567")
 {
    window.location.href="about.html";

 }
 else{
     alert("Login Failed");
 }


}