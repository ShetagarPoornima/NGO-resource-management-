<html>
    <head>
        <title>
         login   
        </title>
      
   <!--<script>
        function validation()
        {
             if (document.sp_login.txtemailid.value=="")
             {
                 alert("emailid cannot be left empty please renter");
                 return false;
             }
             var emailid=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             if(document.sp_login.txtemailid.value.search(emailid)==-1)
             {
                 alert("Improper Emailid,please re-enter ex:john@gmail.com");
                 return false;
             }
             if(document.sp_login.txtpassword.value=="")
             {
                 alert("password cannot be left empty,please enter");
                 return false;
             }
        }
    </script>-->
        

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
      
<link rel="stylesheet" type="text/css" href="css1.css"/>   
    
        
       
    </head>
   
    <body>
        
    <?php include 'header.php';?>
    <center><h1>LOGIN</h1></center>
    <form action="sp_loginfrom2.php" method="POST" name="sp_login" onsubmit="validation()">
    
    
    
        <label>Eail_ID</label>
    <input type="text" name="txtemailid" placeholder="Enter the Email-ID"  
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                           title="Please provide a requested format of email EX:john@gamil.com" maxlength="30" size="30" required>
    <label>Password</label>
   <input type="password"  id="pwd" class="masked" name="txtpassword" placeholder="Enter your password" pattern= "^[\s\S]{5,30}$" title="Minimum 5 and Maximum 8 characters required." />
        <checkbox type="checkbox" onclick="showHide()" onmouseout="hide()" id="eye" maxlength="30" size="30">
            <img src="eye.png" alt="eye" width="20px" height="20px"/>
        </checkbox> 
   
   <input type="Submit" name="btnsubmit"  value="login"></td>
   <br>
    <a href="serviceproviderreg.php">New? Register Here</a>
    <br>
    <br>
    <a href="forgot.php">Forgot Password</a>
    
    </form>
        
    </body>
   <?php include 'footer.php';?>
</html>
