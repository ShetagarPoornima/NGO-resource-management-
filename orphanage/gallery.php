<link rel="stylesheet" type="text/css" href="css3.css">
<?php include 'viewheader.php';?>

<?php
session_start();
$talentid=$_REQUEST["param"] ;
$email=$_SESSION["emailid"];
$id=$_SESSION["orphanageid"];
        
        echo "<br>";
        //echo $emailid;
        echo "$talentid";
        echo"<br>";
        echo "Email-ID=$email";
              
 $array_gallery = array();

$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from gallery where t_id=?");
$stmt->bindParam(1, $talentid);
$stmt->execute();
while ($rows= $stmt->fetch(PDO::FETCH_ASSOC))
 {
    array_push($array_gallery, $rows);
}
$conn = null;
$rows = count($array_gallery);
echo"<br><br><br>";
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>Talent-ID</td>";
echo "<td>Serial-NO</td>";
echo "<td>Photo</td>";
echo "<td>Description</td>";
echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    
    echo "<tr>";
    $photo="../pics/".$array_gallery[$i]["photo"];
    echo "<td>" .$array_gallery[$i]["t_id"]. "</td>";
    echo "<td>" .$array_gallery[$i]["slno"]. "</td>";
    echo "<td><img src=$photo height=300 width=300 /></td>";
    echo "<td>" .$array_gallery[$i]["description"]. "</td>";
     
    
    echo "</tr>";
}
echo "</table>";
?>




<?php include 'footer.php';?>
