<link rel="stylesheet" type="text/css" href="css4.css">
<?php include 'viewheader.php';?>

<?php
session_start();

$talent=$_POST["talent"];
$array_talent=array();
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("select orphanagename,admin,emailid,mobile,landline,city,address,pin,state,name,birthdate,"
                . "gender,talent,t_id from orphanage inner join  talent on orphanage.orphanageid=talent.orphanageid where "
                . "talent=?");
        $stmt->bindParam(1, $talent);
        $stmt->execute();
while ($rows= $stmt->fetch(PDO::FETCH_ASSOC))
 {
    array_push($array_talent, $rows);
}
$conn = null;
$rows = count($array_talent);
echo"<br><br><br>";
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>Admin-Name</td>";
echo "<td>Email-ID</td>";
echo "<td>OrphanageName</td>";
echo "<td>Address</td>";
echo "<td>City</td>";

echo "<td>State</td>";
echo "<td>Mobile</td>";
echo "<td>Landline</td>";
echo"<td>Name</td>";
echo"<td>Birth-Date</td>";
echo"<td>Gender</td>";
echo"<td>Talent</td>";

echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    $name=$array_talent[$i]["name"];
    $t_id=$array_talent[$i]["t_id"];
    echo "<tr>";
    echo "<td>" . $array_talent[$i]["admin"]."</td>";
    echo "<td>" . $array_talent[$i]["emailid"]."</td>";
    echo "<td>" . $array_talent[$i]["orphanagename"]."</td>";
    echo "<td>" . $array_talent[$i]["address"]."</td>";
    echo "<td>" . $array_talent[$i]["city"]."</td>";
    
    echo "<td>" . $array_talent[$i]["state"]."</td>";
    echo "<td>" . $array_talent[$i]["mobile"]."</td>";
    echo "<td>" . $array_talent[$i]["landline"]."</td>";
    echo "<td><a href=gallery.php?param=$t_id>$name</a></td>";
    echo "<td>" . $array_talent[$i]["birthdate"]."</td>";
    echo "<td>" . $array_talent[$i]["gender"]."</td>";
    echo "<td>" . $array_talent[$i]["talent"]."</td>";
   echo "</tr>";
}
echo "</table>";
?>
<?php include 'footer.php';?>
