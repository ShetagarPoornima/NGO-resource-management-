<?php
session_start();
$id=$_SESSION["orphanageid"];
?>
    
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css2.css">
    </head>
    <body>
      
        <?php include 'headerfor.php';?>
        <form method="POST" action="forget1.php">
        
            Enter your Register email-ID <input type="text" name="txtemailid" placeholder="Enter your email-ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Please provide a requested format of email EX:john@gamil.com" maxlength="30" size="30" required/>
          <input type="submit" name="btnsubmit" value="Send SMS"/>
        </form>
    </body>
    <?php    include 'footer.php';?>
</html>