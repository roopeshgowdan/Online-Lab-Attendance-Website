<?php

$sem=$_POST["sem"];
$branch=$_POST["branch"];
$course=$_POST["course"];
$batch=$_POST["batch"];

if($sem=='3'&&$branch=='CSE'&&$course=='Web Programming'&&$batch=='C1'){
	header("location:http://localhost/./WP/c1wp2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='DS'&&$batch=='C1'){
	header("location:http://localhost/./WP/c1ds2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='C++'&&$batch=='C1'){
	header("location:http://localhost/./WP/c1cp2.php");
}




if($sem=='3'&&$branch=='CSE'&&$course=='Web Programming'&&$batch=='C2'){
	header("location:http://localhost/./WP/c2wp2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='DS'&&$batch=='C2'){
	header("location:http://localhost/./WP/c2ds2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='C++'&&$batch=='C2'){
	header("location:http://localhost/./WP/c2cp2.php");
}



if($sem=='3'&&$branch=='CSE'&&$course=='Web Programming'&&$batch=='C3'){
	header("location:http://localhost/./WP/c3wp2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='DS'&&$batch=='C3'){
	header("location:http://localhost/./WP/c3ds2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='C++'&&$batch=='C3'){
	header("location:http://localhost/./WP/c3cp2.php");
}


if($sem=='3'&&$branch=='CSE'&&$course=='Web Programming'&&$batch=='C4'){
	header("location:http://localhost/./WP/c4wp2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='DS'&&$batch=='C4'){
	header("location:http://localhost/./WP/c4ds2.php");
}
if($sem=='3'&&$branch=='CSE'&&$course=='C++'&&$batch=='C4'){
	header("location:http://localhost/./WP/c4cp2.php");
}

	else
		echo "All The Options are Not Selected";
?>
