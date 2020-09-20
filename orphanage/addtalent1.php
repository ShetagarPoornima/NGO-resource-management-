

<?php
session_start();
$id=$_SESSION["orphanageid"];
$name=$_POST["txtstudentname"];
$birthdate=$_POST["txtbirthdate"];
$gender=$_POST["gender"];
$talent=$_POST["ddltalent"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into  talent"
        . "(orphanageid,name,birthdate,gender,talent) values(?,?,?,?,?)");

$stmt->bindParam(1,$id);
$stmt->bindParam(2,$name);

$stmt->bindParam(3,$birthdate);
$stmt->bindParam(4,$gender);
$stmt->bindParam(5,$talent);


if($stmt->execute())
{
               echo"<script>
                alert('Inserted Successfully');
                window.location.href=('http://localhost/anusha1402/orphanage/orphanagemenu.php');
                   </script>";
}
 else 
{
             echo"<script>
                alert('Insertion Failed');
                window.location.href=('http://localhost/anusha1402/orphanage/addtalent.php');
                   </script>";
  
 }
$conn=null;
echo $msg;
    

       