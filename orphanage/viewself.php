<link rel="stylesheet" type="text/css" href="css3.css">
<?php include 'viewheader.php';?>
    <?php
    
session_start();
$arr_pro = array();
$id=$_SESSION["orphanageid"];
echo "Your Orphanage ID=$id";
$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from orphanage where orphanageid=?");
$stmt->bindParam(1, $id);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($arr_pro, $row);
}
$conn = null;
$rows = count($arr_pro);
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
    echo "<td>" . $arr_pro[$i]["orphanageid"] . "</td>";
    echo "<td>" . $arr_pro[$i]["admin"] . "</td>";
     echo "<td>" . $arr_pro[$i]["emailid"] . "</td>";
    echo "<td>" . $arr_pro[$i]["orphanagename"] . "</td>";
    echo "<td>" . $arr_pro[$i]["address"] . "</td>";
    echo "<td>" . $arr_pro[$i]["city"] . "</td>";
    echo "<td>" . $arr_pro[$i]["pin"] . "</td>";
    echo "<td>" . $arr_pro[$i]["state"] . "</td>";
    echo "<td>" . $arr_pro[$i]["mobile"] . "</td>";
    echo "<td>" . $arr_pro[$i]["landline"] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
?>
<?php include 'footer.php';?>
