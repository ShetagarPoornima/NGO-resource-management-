<link rel="stylesheet" type="text/css" href="css3.css">
<?php include 'viewheader.php';?>

<?php
session_start();
$arr_cal = array();
$regid=$_SESSION["regid"];
echo "your register ID=$regid";
$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from calendar where regid=?");
$stmt->bindParam(1, $regid);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
    array_push($arr_cal, $row);
}
$conn = null;
$rows = count($arr_cal);

echo "<table border=1>";
echo "<tr>";
echo "<td>available From</td>";
echo "<td>To date</td>";
echo "<td>Details</td>";
echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    echo "<tr>";
    echo "<td>" . $arr_cal[$i]["fromdate"] . "</td>";
    echo "<td>" . $arr_cal[$i]["todate"] . "</td>";
    echo "<td>" . $arr_cal[$i]["otherdetails"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<?php include 'footer.php';?>

