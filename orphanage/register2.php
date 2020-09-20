<?php
        session_start();
        
        $arr_login=array();
        $admin=$_POST["txtname"];
        $emailid=$_POST["txtemailid"];
        $orphanagename=$_POST["txtorphanagename"];
        $address=$_POST["txtaddress"];
        $city=$_POST["txtcity"];
        $pin=$_POST["txtpin"];
        $state=$_POST["ddlstate"];
        $mobile=$_POST["txtmobile"];
        $landline=$_POST["txtlandline"];
        $newpassword=$_POST["txtnewpassword"];
        $confirmpassword=$_POST["txtconfirmpassword"];
        
        
        $username=null;
        $passwd=null;
        
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("insert into orphanage"
                ."(admin,emailid,orphanagename,address,city,pin,state,mobile,landline,newpassword) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$admin);
        $stmt->bindParam(2,$emailid);
        $stmt->bindParam(3,$orphanagename);
        $stmt->bindParam(4,$address);
        $stmt->bindParam(5,$city);
        $stmt->bindParam(6,$pin);
        $stmt->bindParam(7,$state);
        $stmt->bindParam(8,$mobile);
        $stmt->bindParam(9,$landline);
        $stmt->bindParam(10,$newpassword);
        
        if($newpassword==$confirmpassword)
        {
            if($stmt->execute())
            {
               
                echo"<script>
                alert('Registrtaion is Successfully Completed');
                window.location.href='http://localhost/anusha1402/orphanage/login.php';
                   </script>";
               $_SESSION['emailid']=$emailid;
               
               
              
            }
            else 
            {
                 echo"<script>
                 alert(' Your Registrtaion is Failed,Please try again');
                 window.location.href='http://localhost/anusha1402/orphanage/register.php';
                   </script>"; 
               
            }
        }
        elseif($newpassword!=$confirmpassword)
        {
        
            echo"<script>
                alert('Mis-Match Password ,Re-Enter the Password');
                window.location.href='http://localhost/anusha1402/orphanage/register.php';
                   </script>";
            
                  
        }
            
         
        
      ?>  
  



