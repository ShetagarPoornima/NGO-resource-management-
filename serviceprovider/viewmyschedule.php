<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type="text/css" href="css3.css">
<?php include 'viewheader.php';?>
<a href="viewmyschedule.php"></a>

<?php
session_start();
  $_SESSION["regid"]=$_SESSION["regid"];
$regid=$_SESSION["regid"];
echo "Service Provider ID:$regid";
$array_view=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select orphanage.orphanagename,orphanage.mobile,
                             schedule.fromdate,
                             schedule.todate,
                             schedule.details,
                             schedule.scheduleid, orphanage.orphanageid, schedule.calid from schedule inner join orphanage on
                             orphanage.orphanageid=schedule.orphanageid inner join
                             calendar on schedule.calid = calendar.calid WHERE calendar.regid=?");
$stmt->bindParam(1,$regid);

$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($array_view, $row);
}
$conn = null;
$rows = count($array_view);        





       
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>orphanagename</td>";
echo "<td>mobile</td>";
echo "<td>FromDate</td>";
echo "<td>ToDate</td>";
echo "<td>Details</td>";
echo "<td>Schedule-ID</td>";
echo "<td>orphanageid</td>";
echo "<td>calender_ID</td>";
echo "</tr>";
for($i=0;$i<$rows;$i++)
       {   echo "<tr>";
           echo "<td>" . $array_view[$i]["orphanagename"]. "</td>";
           echo "<td>" . $array_view[$i]["mobile"]. "</td>";
           echo "<td>" . $array_view[$i]["fromdate"]. "</td>";
           echo "<td>" . $array_view[$i]["todate"]. "</td>";
           echo "<td>" . $array_view[$i]["details"]. "</td>";
           echo "<td>" . $array_view[$i]["scheduleid"]. "</td>";
           echo "<td>" . $array_view[$i]["orphanageid"]. "</td>";
           echo "<td>" . $array_view[$i]["calid"]. "</td>";
           echo "</tr>";
}
echo "</table>";
?>
<?php include 'footer.php';?>                   
