<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: center;
    background: #aaa;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 65%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 35%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}

.container {
    position: relative;
    font-family: Arial;
}

.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: black;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}
.success {background-color: #333;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #333;} /* Blue */
.info:hover {background: #0b7dda;}


</style>
</head>
<body>

<div class="header">
  <h1>Resource Planning For NGO</h1>
  <p>Helping one person might change the whole world , But it could change the world for one person.</p>
</div>
    
    
    


<div class="row">
  <div class="leftcolumn">
      <div class="card">
      <h2>LOGIN AS SERVICE PROVIDER</h2>
      
      <div class="container">
          <a href="serviceprovider/sp_loginfrom.php"><img src="vol1.jpg" alt="Nature" style="width:100%;"></a>
          
  <div class="text-block">
      <p>If you are the voluntary service provider then login,Click on the image to get the login page</p>
    
  </div>
</div>
      
    </div>
    <div class="card">
      <h2>LOGIN AS ORPHANAGE ADMIN</h2>
      <div class="container">
          <a href="orphanage/login.php"><img src="NGO.jpg" alt="Nature" style="width:100%;"></a>
  <div class="text-block">
    <p>If you are the admin of the orphanage then login,Click on the image
    to get the login page</p>
  </div>
</div>
      
     
    </div>
  </div>
  <div class="rightcolumn">
   
      <h2>About NGO</h2>
      <center><div class="fakeimg"><img src="ngos.png" style="height:250px;" style="width:250px";></div></center>
      <p>A non-governmental organization (NGO) is any non-profit, voluntary citizens group which is organized on a local, national or international level. Task-oriented and driven by people with a common interest, NGOs perform a variety of services and humanitarian functions,So the main contribution of this website is to bring voluntary service providers like teachers,trainers in different fileds and book the timings for the teaching.</p>
    </div>
    
    <div class="card">
        <br><br>
        <h2>About Us</h2>
        <div class="fakeimg"><p>This project id developed for a NGO's(Non Government Organization).This system provides a common platfrom through which NGO/orphanages and service providers such as docyors/teachers can register in one particular place so that service can be made available one time.</p> </p></div>
       <center> <div class="fakeimg"><img src="2.jpeg.jpeg" style="height:250px;" style="width:250px";></div></center>
    </div>
    
  </div>
</div>

<div class="footer">
  </center> Copyright  2017-2018 RESOURCE FOR NGO All rights Reservec || Designed and Developed By Poornima shetagar,Anusha R,Prithvi C,Vidya D and Shewtha A </center>
</div>

</body>
</html>
    