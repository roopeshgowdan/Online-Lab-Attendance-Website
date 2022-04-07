
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab Attendence Online(5)</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style type="text/css">
   body {background-color:#ADD8E6;}
   .abc {float: left;}
  </style>

</head>

<body>


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

  <div class="container">
  <h2>Attendance Status-Batch C3(WEB PROGRAMMING)</h2>
         
  <table class="table table-bordered">
    <thead>
      <tr align="center">
	  
        
        <th>USN</th>
        <th>NAME</th>
        <th >No of Classes Attended</th>
        <th>No of Classes Held</th>
        <th>Percentage</th>
      </tr>
    </thead>
    <tbody>
	
	<!--row1-->
      <tr>
       <?php
	   
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c3` WHERE std='std1' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c3` WHERE std='std1' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		
        
	    echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="SELECT sum( std1 ) FROM `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['sum( std1 )'];
		echo"</td>";
		
        
		echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="select count(*) from `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['count(*)'];
         echo "</td>";
        
		
		
		
        echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT 'std1' as name ,count(*)*100/(select count(*) from `c3wp`) as percentage FROM `c3wp` WHERE std1=1";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['percentage'];
          echo "</td>";
		  ?>
      </tr>
	  <!--row2-->
      <tr>
       <?php
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c3` WHERE std='std2' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
	        mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT * FROM  `c3` WHERE std='std2' ";
            $res=mysql_query($sql,$md) or die("nq");

            $a=mysql_fetch_array($res);
            echo $a['name'];
		echo"</td>";
		
		echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="SELECT sum( std2 ) FROM `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['sum( std2 )'];
		echo"</td>";
		
         echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="select count(*) from `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['count(*)'];
            echo "</td>";
        
      
        
        echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT 'std2' as name ,count(*)*100/(select count(*) from `c3wp`) as percentage FROM `c3wp` WHERE std2=1";
            $res=mysql_query($sql,$md) or die("nq");

           $a=mysql_fetch_array($res);
          echo $a['percentage'];
          echo "</td>";
		  ?>
      </tr>
	  <!--row3-->
      <tr>
       <?php
        echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

        $sql="SELECT * FROM  `c3` WHERE std='std3' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

       $sql="SELECT * FROM  `c3` WHERE std='std3' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['name'];
		echo"</td>";
		
	    echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="SELECT sum( std3 ) FROM `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['sum( std3 )'];
		echo"</td>";
		
		
         echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="select count(*) from `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['count(*)'];
            echo "</td>";
        
        
        
        echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT 'std3' as name ,count(*)*100/(select count(*) from `c3wp`) as percentage FROM `c3wp` WHERE std3=1";
            $res=mysql_query($sql,$md) or die("nq");

           $a=mysql_fetch_array($res);
          echo $a['percentage'];
          echo "</td>";
		  ?>
      </tr>
	  <!--row4-->
      <tr>
       <?php
        echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

        $sql="SELECT * FROM  `c3` WHERE std='std4' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

        $sql="SELECT * FROM  `c3` WHERE std='std4' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['name'];
		echo"</td>";
		
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="SELECT sum( std4 ) FROM `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['sum( std4 )'];
		echo"</td>";
		
		
         echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="select count(*) from `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['count(*)'];
            echo "</td>";
        
       
        
        echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT 'std4' as name ,count(*)*100/(select count(*) from `c3wp`) as percentage FROM `c3wp` WHERE std4=1";
            $res=mysql_query($sql,$md) or die("nq");

           $a=mysql_fetch_array($res);
          echo $a['percentage'];
          echo "</td>";
		  ?>
      </tr>
	  
	  <!--row5-->
      <tr>
       <?php
        echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

        $sql="SELECT * FROM  `c3` WHERE std='std5' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['usn'];
		echo "</td>";
        
		echo "<td>";
		$md=mysql_connect("localhost","root","") or die("unable to connect");
	    mysql_selectdb("attendence",$md) or die("no db");

        $sql="SELECT * FROM  `c3` WHERE std='std5' ";
        $res=mysql_query($sql,$md) or die("nq");

        $a=mysql_fetch_array($res);
        echo $a['name'];
		echo"</td>";
		
        echo "<td>";
		    $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="SELECT sum( std5 ) FROM `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['sum( std5 )'];
		echo"</td>";
		
		
         echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");
            
			$sql="select count(*) from `c3wp`";
			$res=mysql_query($sql,$md) or die("nq");
            $a=mysql_fetch_array($res);
            echo $a['count(*)'];
            echo "</td>";
        
       
        
        echo "<td>";
            $md=mysql_connect("localhost","root","") or die("unable to connect");
            mysql_selectdb("attendence",$md) or die("no db");

            $sql="SELECT 'std4' as name ,count(*)*100/(select count(*) from `c3wp`) as percentage FROM `c3wp` WHERE std5=1";
            $res=mysql_query($sql,$md) or die("nq");

           $a=mysql_fetch_array($res);
          echo $a['percentage'];
          echo "</td>";
		  ?>
      </tr>
	  
	 
    </tbody>
  </table>
</div>
<br />
<br />
<br />

<p align="right">
<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</p>
 
</div>
</body>
</html>
