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
						$stud6=$_POST['attendence5'];
						$stud7=$_POST['attendence6'];
                        
$servername = "localhost";
$username = "root";
$dbname = "attendence";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$checkFordup ="select * from attendence.c1wp where Date='$date'"; 
$sql = "INSERT INTO  attendence.c1wp (Date, std1, std2, std3, std4, std5, std6, std7)
VALUES ('$date',  '$stud1',  '$stud2',  '$stud3',  '$stud4', '$stud5', '$stud6', '$stud7')";
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
          