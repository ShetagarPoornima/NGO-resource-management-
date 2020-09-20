<?php
session_start();
        
      
       $_SESSION["emailid"]=$_SESSION["emailid"];
       $_SESSION["orphanageid"]=$_SESSION["orphanageid"];
        
?>


<html
    <head>
      <link rel="stylesheet" type="text/css" href="css1.css">   
   <style type="text/css">     
    select {
        width:200px;
    }
    </style>
    
    </head>
    
       
<body>
    <?php include 'changeheader.php';?> 
    <form method="POST" action="selectresource.php">

Resource-Type
<select name="ddlresourcetype"  required>
<option>Teacher</option>
<option>Singer</option>
<option>Dancer</option>
<option>Doctor</option>
<option>Sports-Trainer</option>
</select><br>
City
<input type="text" name="txtcity" maxlength="30" size="30" required/>
From-Date
<input type="date" placeholder="YYYY-MM-DD" maxlength="30" size="30"

title="Enter a date in this format YYYY-MM-DD" name="txtfromdate" required/>
<input type="submit" name="btnsubmit" value="SUBMIT"/>


    </body>
    <?php include"footer.php"?>
</html>

 