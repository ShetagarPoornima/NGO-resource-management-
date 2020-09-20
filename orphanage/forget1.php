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
        $array_forget = array();
        
       $email=$_POST["txtemailid"];
       
       echo $email;
       $username = null;
        $passwd = null;
       $conn = new PDO("mysql:host=localhost;dbname=test", $username, $passwd);
        $stmt = $conn->prepare("select * from orphanage where emailid=?");
        
        $stmt->bindParam(1,$email);
         $stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
 {
    array_push($array_forget, $row);
}
$conn = null;
$mobile=$array_forget[0]["mobile"];
$passwordis=$array_forget[0]["newpassword"];

$ch = curl_init();
$user="anushkuratimani@gmail.com:ngokhk";
$receipientno=$mobile;
$senderID="TEST SMS";
$msgtxt="your password is ".$passwordis;
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; }
curl_close($ch);

?>
    </body>
</html>
