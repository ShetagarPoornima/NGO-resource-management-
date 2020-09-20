<?php
session_start();
 
 $errors= array();
      $talentid=$_POST["txttalent"] ;  
      $description=$_POST["txtdescription"];
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Invalid file, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152){
         $errors[]='Please choose low resolution file';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../pics/".$file_name);
         
         $passwd=null;
        $username=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("insert into gallery(t_id,photo,description) value(?,?,?)");
        $stmt->bindParam(1, $talentid);
        $stmt->bindParam(2,$file_name);
        $stmt->bindParam(3,$description);
        
        if($stmt->execute())
        {
                 echo"<script>
                alert('Image Uploaded Successfully');
                window.location.href=('http://localhost/anusha1402/orphanage/orphanagemenu.php');
                   </script>";
        }
         else 
         {
             echo"<script>
                alert('Image Uploading Failed');
                window.location.href=('http://localhost/anusha1402/orphanage/gallery_next1.php');
                   </script>";
         }
         $conn=null;
         echo $msg;


              }else{
                 echo($errors);
              }
 ?>.