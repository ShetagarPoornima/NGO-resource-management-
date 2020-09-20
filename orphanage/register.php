<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


 <html>
<head>
<title>Register</title>
<script>
        
        function confunction()
        {
          if(document.register.txtconfirmpassword.value=="")
             {
                 alert("confirm password cannot be left empty,please enter");
                 return false;
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
   
    <style type="text/css">     
    select {
        width:200px;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
    <?php include 'headerreg1.php'; ?>
<form method="POST" action="register2.php" >
    <label>Admin-Name:</label><input type="text" name="txtname" placeholder="Enter your name" pattern= "^[\s\S]{5,30}$" title="Minimum 5 and Maximum 30 characters required." maxlength="30" size="30" required/>



    <label>Admin-Email:</label><input type="text" name="txtemailid" placeholder="Enter your email-ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Please provide a requested format of email EX:john@gamil.com"  maxlength="30" size="30" required/>

    <label>Orphanage-Name:</label><input type="text" name="txtorphanagename" placeholder="Enter your orphanage name" maxlength="30" size="30" required/>
    <label>Address:</label><input type="text" name="txtaddress" placeholder="Enter your address" maxlength="30" size="30" required/>
    <label>City:</label><input type="text" name="txtcity" placeholder="Enter your city" maxlength="30" size="30" required/>

    <label>Pin:</label><input type="text" name="txtpin" placeholder="Enter your pin" maxlength="30" size="30" required/>
    <label>State:</label><select name="ddlstate"  placeholder="Enter your state"  required/>
                <option value="Andra Pradesh">Andra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
            </select>



    <label>Mobile:</label>
    <input type="text" name="txtmobile" placeholder="Enter your mobile number"   title="Enter the mobile number in rquested format 000-000-0000" maxlength="23" size="23" required/>
    



<label>Landline:</label><input type="text" name="txtlandline"  placeholder="Enter your landline"   maxlength="30" size="30" required/>

<label>New-Password:</label><input type="password" id="pwd" class="masked" name="txtnewpassword" placeholder="Enter your password" pattern= "^[\s\S]{5,8}$" title="Minimum 5 and Maximum 8 characters required." maxlength="30" size="30" required/>
    <checkbox type="checkbox" onclick="showHide()" onmouseout="hide()" id="eye">
            <img src="eye.png" alt="eye" width="20px" height="20px"/>
    </checkbox>  <br>  
<label>Confirm-Password:</label><input type="password" id="pwd" class="masked" name="txtconfirmpassword" placeholder="Re-Enter your password" maxlength="30" size="30" required/>
     <checkbox type="checkbox" onclick="showHide()" onmouseout="hide()" id="eye">
            <img src="eye.png" alt="eye" width="20px" height="20px"/>
    </checkbox>   
<input type="submit" name="btnsubmit" value="Register" onsubmit="confunction()"/>



</form>
</body>
<?php include 'footer.php';?>
</html>

        
 

  