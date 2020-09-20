<?php
session_start();

$arr_login=array();
$emailid=$_POST["txtemailid"];
$password=$_POST["txtpassword"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from orphanage where emailid=?  and newpassword=?");
$stmt->bindParam(1,$emailid);
$stmt->bindParam(2,$password);
$stmt->execute();
while($rows= $stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_login, $rows);  
}
$conn=null;
$c=count($arr_login);
$msg="";
if($c!=0)
{
   
    $_SESSION['emailid']=$emailid;
    $_SESSION['newpassword']=$password;
    $_SESSION['orphanageid']=$arr_login[0]['orphanageid'];
    header("Location:orphanagemenu.php");
    
}
else
{
    echo"<script>
                 alert(' Invalid login');
                 window.location.href='http://localhost/anusha1402/orphanage/login.php';
                   </script>"; 
               
}
?>


