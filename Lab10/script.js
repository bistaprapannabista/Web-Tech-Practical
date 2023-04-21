function formValidation(){
    const username = document.getElementById("username").value;
    const pattern = /^[a-zA-Z0-9]+$/;
    const email = document.getElementById("email").value;
    const email_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const password1 = document.getElementById("password1").value;
    const password2 = document.getElementById("password2").value;
    if(username.length < 8) alert("Your username length must be of 8 or more characters. ");
    else if(!pattern.test(username)) alert("Your username should be alphanumberic. ");
    else if(!email_pattern.test(email)) alert("Please enter valid email. ");
    else if(password1.length<8||password2.length<8) alert("Your password must be of 8 or more length. ");
    else if(password1!==password2) alert("Password aren't same.");
    else document.getElementsByTagName("body")[0].innerHTML="Login Successfully.";
}