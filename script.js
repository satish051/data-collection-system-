
function abc()
{
    var fullname =document.getElementById("fullname").value;
    var email =document.getElementById("email").value;
    var username =document.getElementById("username").value;
    var password =document.getElementById("password").value;

/**if(fullname== "" ||fullname ==  null || fullname.length ==0)
    {
        alert("enter fullname");
        return false;
    }

if(email== "" ||email ==  null || email.length ==0)
    {
        alert("enter email");
        return false;
    }

if(username== "" || username ==  null || username.length ==0)
    {
        alert("enter username");
        return false;
    }

if(password== "" ||password ==  null || password.length == 0)
    {
        alert("enter password");
        return false;
    }
    **/
   var flag =0;
   var flds ="";

}

if (fullname == "" || fullname == null ||fullname.length == 0)
{
    flag =1;
    flds +="fullname";
}

if (email == "" || email == null ||email.length == 0)
{
    flag =1;
    flds +="email";
}

if (username == "" || username == null ||username.length == 0)
{
    flag =1;
    flds +="username";
}

if (password == "" || password == null ||password.length == 0)
{
    flag =1;
    flds +="password";
}
if (errorflag == true)
{
    var msg ="*plese fill all the fields " +flds;
    document.getElementById("fullnameerror").innerText =msg;
    return false;

}