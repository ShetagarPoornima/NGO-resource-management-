<?php
session_start();
$_SESSION["orphanageid"]=$_SESSION["orphanageid"];
 
$id=$_SESSION["orphanageid"];
$scalid=$_REQUEST["param_scalid"];
$resource=$_REQUEST["param_sservicetype"];
$smobile=$_REQUEST["param_smobile"];
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" type="text/css" href="css1.css">
    </head>
    <body>
        <?php include 'changeheader.php';?>
        <form method="POST" action=book1.php>
            <table border="1" align="center">
                
                <tr>
                    <td>Resource-Type</td>
                    <td><input type="text" name="txtresource" maxlength="30" size="30" value="<?php echo $resource;?>"readonly="true"/></td>
                </tr>
                
                 
                
                <tr>
                    <td>Calendar-ID</td>
                    <td><input type="text" name="txtcalid" maxlength="30" size="30" value="<?php echo $scalid;?>"readonly="true"/></td>
                </tr>
                
                
                
                <tr>
                    <td>Orphanage-ID</td>
                    <td><input type="text" name="txtorphanageid" maxlength="30" size="30" value="<?php echo $id;?>"readonly="true"/></td>
                </tr>
                
                <tr>
                    <td>Mobile-Number</td>
                    <td><input type="text" name="txtmobilenumber" maxlength="30" size="30" value="<?php echo $smobile;?>"readonly="true"/></td>
                </tr>
                
                
                <tr>
                    <td>From-Date </td>
                    <td><input type="date" placeholder="YYYY-MM-DD" required 
                          
                          title="Enter a date in this format YYYY-MM-DD" name="txtfromdate" maxlength="30" size="30" required/></td>
                </tr>
                
                <tr>
                    <td>To-Date</td>
                <td><input type="date" placeholder="YYYY-MM-DD" required
                            title="Enter a date in this format YYYY-MM-DD" name="txttodate" maxlength="30" size="30" required/></td>
                </tr>
                
                 <tr>
                     <td>Details</td>
                     <td><textarea type="textarea"  name="txtdetails"  placeholder="Enter Details" required></textarea></td>
                 </tr>
                 
                <tr>
                    <td><input type="submit" value="BOOK" name="btnsubmit"/></td>
                    <td><input type="submit" value="Cancle" name="btnsubmit"/></td>
                </tr>
                
                
            </table>
        </form>
        <?php include 'footer.php';?>
    </body>
</html>
