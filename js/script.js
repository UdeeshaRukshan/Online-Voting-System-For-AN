
document.getElementById("submitBTN").onclick = function(){
    var fullname = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
    var occupation = document.getElementById("occupation").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var password = document.getElementById("password").value;
}

function checkPassword(){
    if(document.getElementById("password").value != document.getElementById("password2").value)
    {
        alert("Password isn.t matching!");
        return false;
    }
    else{
        alert("Success");
        return true;
    }
}
