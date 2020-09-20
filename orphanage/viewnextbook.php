<link rel="stylesheet" type="text/css" href="css1.css"> 
<?php include 'changeheader.php';?> 
<?php

session_start();
       
       $id=$_SESSION["orphanageid"];
        
        echo "<br>";
        //echo $emailid;
        echo "Orphanage-ID=$id";
       $from=$_POST["txtfromdate"];
       $to=$_POST["txttodate"];
       
      $array_viewbook = array();

$username = null;
$passwd = null;
$conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
$stmt = $conn->prepare("select * from schedule where fromdate=? and todate=?");

$stmt->bindParam(1,$from);
$stmt->bindParam(2,$to);
$stmt->execute();
while ($rows= $stmt->fetch(PDO::FETCH_ASSOC))
 {
    array_push($array_viewbook, $rows);
}
$conn = null;
$rows = count($array_viewbook);
echo"<br><br><br>";
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>Calendar-ID</td>";
echo "<td>Orphanage-ID</td>";
echo "<td>FromDate</td>";
echo "<td>ToDate</td>";
echo "<td>Details</td>";
echo "<td>Schedule-ID</td>";
echo "</tr>";
for ($i = 0; $i < $rows; $i++)
{
    
    echo "<tr>";
    echo "<td>" . $array_viewbook[$i]["calid"] . "</td>";
    echo "<td>" . $array_viewbook[$i]["orphanageid"] . "</td>";
     echo "<td>" . $array_viewbook[$i]["fromdate"] . "</td>";
    echo "<td>" . $array_viewbook[$i]["todate"] . "</td>";
    echo "<td>" . $array_viewbook[$i]["details"] . "</td>";
    echo "<td>" . $array_viewbook[$i]["scheduleid"] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
?>




 <?php include 'footer.php';?>