<?php
session_start();
$regid=$_SESSION["regid"];
echo "your register ID=$regid <br>";
$availablefrom=$_POST["txtfrom"];
$todate=$_POST["txttodate"];
$details=$_POST["txtdetails"];
$status=$_POST["txtstatus"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into calendar"
                ."(fromdate,todate,otherdetails,status,regid)values(?,?,?,?,?)");
$stmt->bindParam(1,$availablefrom);
$stmt->bindParam(2,$todate);
$stmt->bindParam(3,$details);
$stmt->bindParam(4,$status);
$stmt->bindParam(5, $regid);
try{
            if($stmt->execute())
            {
                echo"<script>
                alert('We have noticed your request');
                window.location.href='http://localhost/anusha1402/serviceprovider/sp_menu.php';
                   </script>";
                
            }
            else
            {
                 echo"<script>
                alert('We did not noticed your Request, Please try once again ');
                window.location.href='http://localhost/anusha1402/serviceprovider/createcal.php.php';
                   </script>";
            }
            } catch (Exception $exception)
            {
                $msg=$exception->getMessage();
            }
            
            
            echo $msg;
        
