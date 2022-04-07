<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab Attendence Online(4)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <style type="text/css">
   body {background-color:#ADD8E6;}
   .abc {float: left;}
  </style>
  
  <script>
function myFunction() {

var currentDt = new Date();
    var mm = currentDt.getMonth() + 1;
    var dd = currentDt.getDate();
    var yyyy = currentDt.getFullYear();
    var date = dd + '/' + mm + '/' + yyyy;
document.getElementById('demo').value= date;
}

</script>

</head>
<body onload="myFunction()">

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
   
	<form class="form-inline" action="c2ds1php.php"  method="post" role="form">
  <div class="form-group">
  <label>Date:
   <input type="text"  id="demo" size="12" name="date" readonly /></label>
  </div>
<br />
<div class="container">
  <h2>Batch-C2(DATA STRUCTURES)</h2>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>USN</th>
        <th>STUDENT NAME</th>
        <th>Present</th>
	    <th>Absent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	   <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std1' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std1' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		?>
		
        <td>
		<form> <input type="radio" name="attendence"  value="1" required="" ></td>
 	    <td><form> <input type="radio" name="attendence"  value="0" required="" value=></td>   
 </tr>
      <tr>
        <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std2' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std2' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		?>
        <td> <form> <input type="radio" name="attendence1"  value="1" required="" ></td>
 	<td> <form> <input type="radio" name="attendence1" value="0" required=""></td> 
      </tr>
      <tr>
        <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std3' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std3' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		?>
        <td> <form> <input type="radio" name="attendence2" value="1" required="" ></td>
 	<td> <form> <input type="radio" name="attendence2" value="0" required=""></td> 
      </tr>
	<tr>
        <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std4' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std4' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		?>
        <td> <form> <input type="radio" name="attendence3" value="1" required="" ></td>
 	<td> <form> <input type="radio" name="attendence3" value="0" required=""></td> 
      </tr>
	  
	  
	  <tr>
        <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std5' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c2` WHERE std='std5' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		?>
        <td> <form> <input type="radio" name="attendence4" value="1" required="" ></td>
 	<td> <form> <input type="radio" name="attendence4" value="0" required=""></td> 
      </tr>
	  
	  
    </tbody>
  </table>
</div>
<br />
<form action="c2ds1php.php"  method="post">
     <input type="submit" value="SUBMIT">
</form>
    
  </div>
</div>

</body>
</html>
