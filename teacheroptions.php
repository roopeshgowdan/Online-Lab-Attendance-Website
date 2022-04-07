<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab Attendance Online(2)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style type="text/css">
   body {background-color:#ADD8E6;}
   .abc {float: left;}
  </style>
</head>
<body>
<?php 

session_start();
$stat=$_SESSION["status"];
if($stat!=1){
header("location:http://localhost/./WP/mylogin.php");}

?>

<p align="right">
<a href="logout.php" class="f90-logout-button">Logout</a>
</p>



<div class="container">
  <div class="jumbotron">
    <p><img class="abc" src="images/BMS_College_of_Engineering.svg.png" width="100" height="100"> </p>
    <h1>BMS College Of Engineering</h1>
    <p>Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019.
       <u>Phone:</u> 080 2662 2130 </p> 
  </div>
  
  <form role="form" action="teacheroptionsphp.php" method="post">
  <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h3>SEMESTER</h3>
      
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="sem">
        <option>-----SELECT-----</option>
        <option>3</option> 
      </select>
      <br />
      </div>
	  </div>
	  
	  
     
	 
     <div class="col-lg-6">
      <h3>BRANCH</h3>
      
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="branch">
        <option>-----SELECT-----</option>
        <option>CSE</option>
      </select>
      <br />
      </div>
     
    </div>
    </div>
	
	
	
	<div class="row">
	  <div class="col-lg-6">
      <h3>BATCH</h3> 
      
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="batch">
        <option>-----SELECT-----</option>
        <option>C1</option> 
        <option>C2</option> 
        <option>C3</option> 
        <option>C4</option> 
      		
      </select>
      <br >
      </div>
     
    </div>       
    
  
  
    <div class="col-lg-6">
      <h3>COURSE</h3> 
      
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="course">
        <option>-----SELECT-----</option>
        <option>Web Programming</option>   
        <option>DS</option>
        <option>C++</option>		
      </select>
      <br>
      </div>
	  </div>
	  </div>
	  

<div class="row">
    <div class="col-lg-6">
      <h3>ATTENDANCE</h3> 
      
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="attendence">
        <option>-----SELECT-----</option>
        <option>View</option>   
        <option>Mark</option>
      </select>
      <br>
      </div>
	  </div>
	  </div>
	 </div>
        <input type="submit" value="SUBMIT"> 
	 </form>



</body>
</html>
