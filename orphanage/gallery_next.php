<?php
session_start();
$id=$_SESSION["orphanageid"];
$talentid=$_REQUEST["param_gtalentid"] ;      
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css1.css">
        <title>Gallery_Next</title>
    </head>
    <body>
        <?php include 'changeheader.php';?>
        <form method="POST" action=gallery_next1.php enctype="multipart/form-data">
            Talent-ID
                   <input type="text" name="txttalent" value="<?php echo $talentid;?>"readonly="true"/>
                  
                   <br>
                   Upload Photo<input type="file" name="image" /><br>
              Description<input type="text" name="txtdescription" required/>
              <input type="submit" name="btnimage" value="Upload" required/>
              <input type="submit" name="btnupload" value="Cancle" required/>
        </form>
         
    </body>
   <?php include 'footer.php';?>
             </html>