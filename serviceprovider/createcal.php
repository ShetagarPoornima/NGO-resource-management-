<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="css1.css">
    </head>
    <body>
       <?php include 'changeheader.php';?> 
        <form action="createcal_1.php" method="POST">
          
                    Available from
                    <input type="date" name="txtfrom" placeholder="Enter from date"required>
                    To Date<input type="date" name="txttodate" placeholder="Enter the to date"required>
                Details<textarea type="text" name="txtdetails" rows="5" cols="30" placeholder="Details" ></textarea>
                status<input type="text" name="txtstatus" value="New">
                <input type="submit" name="btnsubmit" value="create">
                
                    <input type="submit" name="btnsubmit" value="Reset">
                
        </form>
    </body>
    <?php include 'footer.php';?>
</html>
