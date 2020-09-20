<link rel="stylesheet" type="text/css" href="css3.css">
<?php include 'viewheader.php';?>

<?php
session_start();
$arr_pro = array();
$regid=$_SESSION["regid"];
echo "your register ID=$regid";
$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from serviceprovider where regid=?");
$stmt->bindParam(1, $regid);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($arr_pro, $row);
}
$conn = null;
$rows = count($arr_pro);

echo "<table border=1>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Birth date</td>";
echo "<td>PIN</td>";
echo "<td>Mobile No</td>";
echo "<td>Gender</td>";
echo "<td>City</td>";
echo "<td>Service Type</td>";
echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    echo "<tr>";
    echo "<td>" . $arr_pro[$i]["name"] . "</td>";
    
    echo "<td>" . $arr_pro[$i]["birthdate"] . "</td>";
    echo "<td>" . $arr_pro[$i]["pin"] . "</td>";
    echo "<td>" . $arr_pro[$i]["mobile"] . "</td>";
    echo "<td>" . $arr_pro[$i]["gender"] . "</td>";
    echo "<td>" . $arr_pro[$i]["city"] . "</td>";
    echo "<td>" . $arr_pro[$i]["servicetype"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<?php include 'footer.php';?>