<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $name=$_POST["txtname"];
        $bd=$_POST["txtbd"];
        $city=$_POST["txtcity"];
        $pin=$_POST["txtpin"];
        $gender=$_POST["txtgender"];
        $state=$_POST["ddlstate"];
        $moblie=$_POST["txtmobile"];
        $emailid=$_POST["txtemailid"];
        $service=$_POST["ddlst"];
        $newpassword=$_POST["txtpassword"];
        $confirmpassword=$_POST["txtconfirmpassword"];
        $username=null;
        $passwd=null;
        
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("insert into serviceprovider"
                ."(newpassword,name,city,pin,mobile,servicetype,emailid,gender,birthdate)values(?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$newpassword);
        $stmt->bindParam(2,$name);
        $stmt->bindParam(3,$city);
        $stmt->bindParam(4,$pin);
        $stmt->bindParam(5,$moblie);
        $stmt->bindParam(6,$service);
        $stmt->bindParam(7,$emailid);
        $stmt->bindParam(8,$gender);
        $stmt->bindParam(9,$bd);
        
        if($newpassword==$confirmpassword)
        {
            if($stmt->execute())
            {
              echo"<script>
                alert('Welcome you are registered');
                window.location.href='http://localhost/anusha1402/serviceprovider/sp_loginfrom.php';
                   </script>";
              $_SESSION['emailid']=$emailid;
            }
            else 
            {
               echo"<script>
                alert('Your registration is failed ,Please try again');
                window.location.href='http://localhost/anusha1402/serviceprovider/serviceproviderreg.php';
                   </script>";
            }
        }
        elseif($newpassword!=$confirmpassword)
        {
        
            echo"<script>
                alert('Mis-match password ,Please re-enter the password ');
                window.location.href='http://localhost/anusha1402/serviceprovider/serviceproviderreg.php';
                   </script>";
         
        }
        
        echo $msg1;
        
      ?>  
    </body>
</html>
