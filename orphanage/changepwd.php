<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css1.css"> 
        <title>Change Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php include 'changeheader.php';?>
        <form method="POST" action="changepwd1.php">
            
                   Current Password
                    <input type="password" name="txtcurrentpassword" placeholder="current password"required/>
                
                    New Password<input type="password" name="txtnewpassword" placeholder="New password"required/>
                
                    Confirm Password<input type="password" name="txtconfirmpassword" placeholder="Confirm password" required/>
                <input type="submit" value="CHANGE" name="txtbtnchange"/>
                
        </form>
    </body>
    <?php include 'footer.php';?>
</html>


   

