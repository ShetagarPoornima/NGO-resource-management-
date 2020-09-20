<!DOCTYPE html>


        <html>
<head>
<title>login</title>

        <script>    
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<script>
function show()
{
var p = document.getElementById('pwd');
p.setAttribute('type','text');  
}

function hide()
{
   var p = document.getElementById('pwd');
p.setAttribute('type','password');   
}

function showHide()
{
    var pwShown = 0;

document.getElementById("eye").addEventListener("click", function() {
    if (pwShown == 0) 
    {
        pwShown = 1; 
        show();
    } 
    else {
        pwShow = 0;
        hide();
    }
            }, false);

}
</script> 
<link rel="stylesheet" type="text/css" href="css2.css"/>   
</head>

<br>
<br>
<body>
    <?php include 'header.php';?>
<form method="POST" action="login1.php"  name="login" onsubmit="validation()">

   

    <label>Email-Id</label>
<input type="text" name="txtemailid" placeholder="Enter your email-ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Please provide a requested format of email EX:john@gamil.com" maxlength="30" size="30" required/>


<label>Password</label>

<input type="password"  id="pwd" class="masked" name="txtpassword" placeholder="Enter your password" pattern= "^[\s\S]{5,30}$" title="Minimum 5 and Maximum 8 characters required."maxlength="30" size="30" required />
        <checkbox type="checkbox" onclick="showHide()" onmouseout="hide()" id="eye">
            <img src="eye.png" alt="eye" width="20px" height="20px"/>
        </checkbox> 

     <input type="submit" value="Login" name="btnlogin"/>
<a href="register.php">New Orphanage <br>Register Here</a>
 <br><br>
    
        <a href="forgetpassword.php">Forget Password? Click Here</a>
    </form>
   

</body>
<?php include 'footer.php';?>
</head>


