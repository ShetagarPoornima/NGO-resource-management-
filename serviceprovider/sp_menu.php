<link rel="stylesheet" type="text/css" href="css1.css">
<?php include 'menuheader.php';?>
<?php
session_start();
 $regid=$_SESSION["regid"];
$emailid=$_SESSION["emailid"];
echo "Email ID:$emailid";
echo "<br>";
echo "<br>";
echo "Register ID:$regid";
echo "<br>";
echo "<br>";


    /*echo"<a href=change1.php>change password</a><br>";
    echo"<a href=viewself_sp.php>view your infromation</a><br>";
    echo"<a href=createcal.php>register you free time</a><br>";
    echo"<a href=viewmycal.php>view your timings</a><br>";
    echo"<a href=viewmyschedule.php>View your schudule</a><br>";
    echo"<a href=logout.php>Logout</a>";*/
?>
<?php include 'footer.php';?>