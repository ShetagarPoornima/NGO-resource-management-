


<?php
session_start();
        
      
       
       $_SESSION["orphanageid"]=$_SESSION["orphanageid"];
       $id=$_SESSION["orphanageid"];
 ?>

<html>
    <head>
         <link rel="stylesheet" type="text/css" href="css1.css"> 
        <title>TODO supply a title</title>
          </head>
          
    <body>
         <?php include 'changeheader.php';?> 
        <form method="POST" action="viewnextbook.php">
        <Orphanage-ID<input type="text" name="txtid"  value="<?php echo $id;?>"readonly="true" />
            From-Date<input type="date" placeholder="YYYY-MM-DD" required 
                           pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                            title="Enter a date in this format YYYY-MM-DD" name="txtfromdate" required/>
            To-Date<input type="date" name="txttodate" required/>
            <input type="submit" name="btnsubmit" value="SUBMIT" />
            
            
        </form>
       
    </body>
    <?php include 'footer.php';?>
</html>

