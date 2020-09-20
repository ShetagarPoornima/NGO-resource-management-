<?php

session_start();
        
      
       
 $array_select = array();
$id=$_SESSION["orphanageid"];
$mobile=$_POST["txtmobilenumber"];
$scalid=$_POST["txtcalid"];
$fromdate=$_POST["txtfromdate"];
$todate=$_POST["txttodate"];
$details=$_POST["txtdetails"];
echo"$mobile";
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into  schedule"
        . "(calid,orphanageid,fromdate,todate,details) values(?,?,?,?,?)");
$stmt->bindParam(1,$scalid);

$stmt->bindParam(2,$id);

$stmt->bindParam(3,$fromdate);
$stmt->bindParam(4,$todate);
$stmt->bindParam(5,$details);

if($stmt->execute())
{
   $msg="INSERTED";
    $stmt=$conn->prepare("UPDATE calendar SET status = 'booked'");
    if($stmt->execute())
    {
         
//       $mobile=$array_select[0]["mobile"];
         $ch = curl_init();
         $user="anushkuratimani@gmail.com:ngokhk";
         $receipientno=$mobile;
         $senderID="TEST SMS";
         $msgtxt=" Dear provider ,you have booked to the orphanage for service ,for more details call to the Orphanage-Number avaliable in View-Schedule menu in Resource for NGO website";
         curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
         $buffer = curl_exec($ch);
         
         curl_close($ch);

          echo"<script>
                alert('Successfully Updated');
                window.location.href='http://localhost/anusha1402/orphanage/orphanagemenu.php';
                   </script>";
    }
 else {
               echo"<script>
                alert('Fail to Update');
                window.location.href='http://localhost/anusha1402/orphanage/book.php';
                   </script>";
      }
}
 else
{
     $msg="INSERTION FAILED";
    
}
$conn=null;
echo $msg;
    

