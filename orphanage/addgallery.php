<link rel="stylesheet" type="text/css" href="css1.css">
<?php include 'changeheader.php';?>

<?php
session_start();
$email=$_SESSION["emailid"];
$id=$_SESSION["orphanageid"];
echo "Email-ID=$email";
echo"<br>";
echo"Orphanage-ID=$id";
echo"<br>";
              
 $array_talent = array();

$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from talent");


$stmt->execute();
while ($rows= $stmt->fetch(PDO::FETCH_ASSOC))
 {
    array_push($array_talent, $rows);
}
$conn = null;
$c=count($array_talent);
       echo"<table border=1 align=center width=300>";
       $j=0;
       for($i=0;$i<$c;$i++)
       {
           $gtalentid=$array_talent[$i]["t_id"];
           $gname=$array_talent[$i]["name"];
           $gbirthdate=$array_talent[$i]["birthdate"];
           $ggender=$array_talent[$i]["gender"];
           $gtalent=$array_talent[$i]["talent"];
           
           echo"<tr>";
       
      
             echo"<td>";
       echo $array_talent[$i]["t_id"];
       echo"</td>";
       
           echo"<td>";
       echo $array_talent[$i]["name"];
       echo"</td>"; 
       
       
       echo"<td>";
       echo $array_talent[$i]["birthdate"];
       echo"</td>";
       
       
       
       echo"<td>";
       echo $array_talent[$i]["gender"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_talent[$i]["talent"];
       echo"</td>";
       
       
       echo"<td>";
       echo"<a href= gallery_next.php?param_gtalentid=$gtalentid&param_gname=$gname&param_gbirthdate=$gbirthdate&param_ggender=$ggender&param_gtalent=$gtalent>TO Upload Image Click Next</a>";
       echo"</td>";
       echo"</tr>";
       }
       echo"<table>";
       ?>
   
  <?php include 'footer.php';?>
  




