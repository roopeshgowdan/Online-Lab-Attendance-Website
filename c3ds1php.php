<?php

session_start();
unset($_SESSION["user"]);
unset($_SESSION["status"]);


                        $date=$_POST['date'];
			               $stud1=$_POST['attendence'];
			$stud2=$_POST['attendence1'];
                        $stud3=$_POST['attendence2'];
                        $stud4=$_POST['attendence3'];
						$stud5=$_POST['attendence4'];
						
                        
$servername = "localhost";
$username = "root";
$dbname = "attendence";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$checkFordup ="select * from attendence.c3ds where Date='$date'"; 
$sql = "INSERT INTO  attendence.c3ds (Date, std1, std2, std3, std4, std5)
VALUES ('$date',  '$stud1',  '$stud2',  '$stud3',  '$stud4', '$stud5')";
$res=mysqli_query($conn,$checkFordup) or die("NOT QUERRIED");
$rowCount=mysqli_num_rows($res);
if($rowCount==0 ){
	if ($conn->query($sql) === TRUE) {
   	   echo "New record created successfully";
	} else {
  	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}else {
    echo "Error: Record exists";
}

$conn->close();



?>
          