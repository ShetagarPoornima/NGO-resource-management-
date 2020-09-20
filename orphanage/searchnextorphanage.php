 <link rel="stylesheet" type="text/css" href="css3.css">  
 
<?php include 'viewheader.php';?>
 <h1>Orphanages List</h1>
<?php
session_start();
$city=$_POST["city"];


$array_city=array();
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("select * from orphanage where city=?");
        $stmt->bindParam(1,$city);
        
 $stmt->execute();
while ($rows= $stmt->fetch(PDO::FETCH_ASSOC))
 {
    array_push($array_city, $rows);
}
$conn = null;
$rows = count($array_city);
echo"<br><br><br>";
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>Orphanage-ID</td>";
echo "<td>Admin-Name</td>";
echo "<td>Email-ID</td>";
echo "<td>OrphanageName</td>";
echo "<td>Address</td>";
echo "<td>City</td>";
echo "<td>Pin</td>";
echo "<td>State</td>";
echo "<td>Mobile</td>";
echo "<td>Landline</td>";


echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    echo "<tr>";
    echo "<td>" . $array_city[$i]["orphanageid"]."</td>";
    echo "<td>" . $array_city[$i]["admin"]."</td>";
    echo "<td>" . $array_city[$i]["emailid"]."</td>";
    echo "<td>" . $array_city[$i]["orphanagename"]."</td>";
    echo "<td>" . $array_city[$i]["address"]."</td>";
    echo "<td>" . $array_city[$i]["city"]."</td>";
    echo "<td>" . $array_city[$i]["pin"]."</td>";
    echo "<td>" . $array_city[$i]["state"]."</td>";
    echo "<td>" .$array_city[$i]["mobile"]."</td>";
    echo "<td>" . $array_city[$i]["landline"]."</td>";
    
   echo "</tr>";
}
echo "</table>";
?>
<?php include 'footer.php';?>