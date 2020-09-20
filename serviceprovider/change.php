<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
        $currentpwd=$_POST["txtcurrentpassword"];
        $newpwd=$_POST["txtnewpassword"];
        $confpwd=$_POST["txtconfirmpassword"];
        
        $emailid=$_SESSION["emailid"];
        $password=$_SESSION["newpassword"];
        
        
        if($password==$currentpwd)
        {
            $username=null;
            $passwd=null;
            $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
            
            $stmt=$conn->prepare("update serviceprovider set newpassword=? where emailid=?");
            
            $stmt->bindParam(1,$newpwd);
            $stmt->bindParam(2,$emailid);
            try{
            if($stmt->execute())
                 if($stmt->execute())
            {
                   echo"<script>
                alert('Password has been Successfully Changed');
                window.location.href='http://localhost/anusha1402/serviceprovider/sp_menu.php';
                   </script>";
            }
            else
            {
                echo"<script>
                   alert('Entered wrong Password');
                   window.location.href('http://localhost/anusha1402/serviceprovider/sp_loginfrom.php');
                   </script>";
                 
            }
            } catch (Exception $exception)
            {
                $msg=$exception->getMessage();
            }
            }
            else
            {
                 echo"<script>
                   alert('Confirmation Password does not match');
                   window.location.href('http://localhost/anusha1402/serviceprovider/sp_loginfrom.php');
                   </script>";
                
            }
            
        
        ?>
    












