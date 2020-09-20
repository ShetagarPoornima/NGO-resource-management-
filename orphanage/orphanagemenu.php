<link rel="stylesheet" type="text/css" href="css2.css">
<?php include 'menuheader.php';?>

 <?php
        session_start();
        
      
        $email=$_SESSION["emailid"];
        $id=$_SESSION["orphanageid"];
        
        echo "<br>";
        //echo $emailid;
        echo "Orphanage-Id:$id";
        echo"<br>";
        echo "Email-ID:$email";
              
     /* echo" <table border=1 align=center>";
           
           echo "<tr>";
           echo "<td><a href=viewself.php>VIEWSELF</a></td>";
           echo "</tr>";
           echo "<tr>";
          
           echo "<td> <a href=searchresource.php>SEARCH RESOURCE</a></td>";
           echo"</tr>";
           
           
           echo "<tr>";
          
           echo "<td> <a href=addtalent.php>ADD-TALENT</a></td>";
           echo"</tr>";
           
           echo "<tr>";
          
           echo "<td> <a href=addgallery.php>VIEW-GALLERY</a></td>";
           echo"</tr>";
           
           echo "<tr>";
           echo "<td><a href=vieworphanages.php>VIEW-ORPHANAGES</a></td>";
           echo "</tr>";
           
           echo "<tr>";
           echo "<td><a href=viewbookings.php>VIEW-BOOKINGS</a></td>";
           echo "</tr>";
           
           echo "<tr>";
           echo "<td><a href=vieworphanages.php>VISITOR-ORPHANAGES</a></td>";
           echo "</tr>";
           
           
           echo "<tr>";
           echo "<td><a href=searchorphanage.php>SEARCH-ORPHANAGE</a></td>";
           echo "</tr>";
           
           
           echo "<tr>";
           echo "<td><a href=searchtalent.php>SEARCH-TALENT</a></td>";
           echo "</tr>";
           
           echo "<tr>";
           echo "<td><a href=changepwd.php>CHANGE PASSWORD</a></td>";
           echo "</tr>";
           
           echo "<tr>";
           echo "<td><a href=logout.php>LOGOUT</a></td>";
           echo "</tr>";
           
           
            
       echo" </table>";*/
       ?>
       
 
<?php include 'footer.php';?>




       
    
</html>
