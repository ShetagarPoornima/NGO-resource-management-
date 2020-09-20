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
        <link rel="stylesheet" type="text/css" href="css3.css">
    </head>
    <body>
        <?php include 'changeheader.php';?>
        <?php
        
       
        $servicetype=$_POST["ddlresourcetype"];
        
        $city=$_POST["txtcity"];
        $fromdate=$_POST["txtfromdate"];
        echo $fromdate;
        $array_select=array();
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("select calendar.calid,name,mobile,city,pin,servicetype,fromdate,todate,otherdetails from serviceprovider inner join calendar on calendar.regid=serviceprovider.regid where servicetype=? and fromdate>=? and city=?");
        $stmt->bindParam(1,$servicetype);
        $stmt->bindParam(2,$fromdate);
        $stmt->bindParam(3,$city);
       // $stmt=$conn->prepare("select * from calendar");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            array_push($array_select,$row);
        }
        $conn=null;
       $c=count($array_select);
       echo"<table border=1 align=center width=300>";
       $j=0;
       for($i=0;$i<$c;$i++)
       {
           $scalid=$array_select[$i]["calid"];
           
           
           $sname=$array_select[$i]["name"];
           $smobile=$array_select[$i]["mobile"];
           $scity=$array_select[$i]["city"];
           $spin=$array_select[$i]["pin"];
           $sservicetype=$array_select[$i]["servicetype"];
           $sfromdate=$array_select[$i]["fromdate"];
           $stodate=$array_select[$i]["todate"];
           $sotherdetails=$array_select[$i]["otherdetails"];
           
       echo"<tr>";
       echo"<td>";
       echo $array_select[$i]["calid"];
       echo"</td>";
       
       
       
      
       echo"<td>";
       echo $array_select[$i]["name"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_select[$i]["mobile"];
       echo"</td>";
       
       
       
       echo"<td>";
       echo $array_select[$i]["city"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_select[$i]["pin"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_select[$i]["servicetype"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_select[$i]["fromdate"];
       echo"</td>";
       
       
       echo"<td>";
       echo $array_select[$i]["todate"];
       echo"</td>";
       
      
       echo"<td>";
       echo $array_select[$i]["otherdetails"];
       echo"</td>";
       
       echo"<td>";
       echo"<a href= book.php?param_scalid=$scalid&param_sname=$sname&param_smobile=$smobile&param_scity=$scity&param_spin=$spin&param_sservicetype=$sservicetype&param_sfromdate=$sfromdate&param_stodate=$stodate&param_sotherdetails=$sotherdetails>BOOK</a>";
       echo"</td>";
       echo"</tr>";
       }
       echo"<table>";
       ?>
<?php include 'footer.php';?>