
<?php
session_start();

$id=$_SESSION["orphanageid"];
?>
<html>
    <head>
        
        <title>Addtalent</title>
        <style type="text/css">     
    select {
        width:200px;
    }
    </style>
     <link rel="stylesheet" type="text/css" href="css1.css"> 
    </head>
    
    <body>
        <?php include 'changeheader.php';?>
        <form method="POST" action="addtalent1.php">
           Orphanage-ID<input type="text" name="txtorphanageid" maxlength="30" size="30" value="<?php echo $id;?>"readonly="true"/>
                Student-Name
                   <input type="text" name="txtstudentname" maxlength="30" size="30" placeholder="Enter student name" required/> 
                Birth-Date <input type="date" placeholder="YYYY-MM-DD" 
                             title="Enter a date in this format YYYY-MM-DD" name="txtbirthdate" maxlength="30" size="30" required/>
                Gender<br>
                        MALE<input type="radio" name="gender" value="M" maxlength="20" size="20"  required>
                    FEMALE<input type="radio" name="gender" value="F" maxlength="20" size="20"  required>
                
                    <br>
                    Talent<select name="ddltalent">
                            <option>Singing</option>
                            <option>Dancing</option>
                            <option>Mimicry</option>
                            <option>Drawing</option>
                            <option>Outdoor-Games</option>
                            <option>Indoor-Games</option>
                            <option>Special-talent</option>
                            <option>others</option>
                            
                        </select>
                    <input type="submit" name="btnsubmit" value="SUBMIT"/>
                   <input type="submit" name="btnsubmit" value="CANCEL"/>   
                
        </form>
    </body>
    <?php include 'footer.php';?>
</html>