 <?php
			
			$username=$_POST['username'];
			$passwd=$_POST['pwd'];
			
		if(isset($_POST['username'])) {
			
			$md=mysql_connect("localhost","root","") or die("Unable to Connect");
			mysql_select_db("attendence",$md) or die("No DB Selected");
			
			$sql="select * from teacherlogin where usrn='$username'";
			$res=mysql_query($sql,$md) or die("NOT QUERRIED");
			$bool=false;
			while($a=mysql_fetch_array($res)) {
				
				if($a['pass']==$passwd) {
					$bool=true;
					break;
				}
					
			}
			if($bool) {
				
				session_start();
				$_SESSION["user"]="$username";
				$_SESSION["status"]=1;
		       
			   header("location:http://localhost/./WP/teacheroptions.php");
			} else {
				echo("<h1>PLEASE ENTER CORRECT USERNAME AND PASSWORD</h1>");
				
			}
		} else {
			
			echo("<h1>YOUR FORM IS NOT COMPLETE</h1>");
		}
	?>
