<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
        $currentpassword=$_POST["txtcurrentpassword"];
        $newpassword=$_POST["txtnewpassword"];
        $confpassword=$_POST["txtconfirmpassword"];
        
        $emailid=$_SESSION["emailid"];
        $password=$_SESSION["newpassword"];
        
        
        if($password==$currentpassword)
        {
            $username=null;
            $passwd=null;
            $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
            
            $stmt=$conn->prepare("update orphanage set newpassword=? where emailid=?");
            
            $stmt->bindParam(1,$newpassword);
            $stmt->bindParam(2,$emailid);
            try{
            if($stmt->execute())
            if($stmt->execute())
            {
                echo"<script>
                alert('Password has been Successfully Changed');
                window.location.href='http://localhost/anusha1402/orphanage/orphanagemenu.php';
                   </script>";
                
            }
            else
            
            {
                 echo"<script>
                alert('Your have Entered the wrong Password');
                window.location.href='http://localhost/anusha1402/orphanage/changepwd1.php';
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
                alert('Confirmation does not match, Please Re-Enter the Password');
                window.location.href='http://localhost/anusha1402/orphanage/changepwd1.php';
                   </script>";
                
            }
            echo $msg;
        
        ?>
    

























