<!DOCTYPE html>
<html lang="en">

    <head>
    <title>Lab Attendence Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <link href="http://v1.optraservice.com/assets/bluemoon/icomoon/style.css" rel="stylesheet">
    <link href="http://v1.optraservice.com/assets/bluemoon/css/main.css" rel="stylesheet">
    <script src="login-page-files/css/icomoon-font/lte-ie7.js">
    </script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	<style type="text/css">
    body {background-color:#ADD8E6;}
    .abc {float: left;}
    </style>
    <style>
   .carousel-inner > .item > img,
   .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
    </style>
    <style type="text/css">
    h2 {font-style:italic;} 
    body {background-color:#ADD8E6;}
    .abc {float: left;}
    </style> 
</head>
    <body>
<p align="center">
<h1 align="center" font size="10">ONLINE LAB ATTENDANCE</h1>
</p>
<div class="container">
  <div class="jumbotron">
    <p><img class="abc" src="images/BMS_College_of_Engineering.svg.png" width="100" height="100"> </p>
    <h1>BMS College Of Engineering</h1>
    <p>Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019.
       <u>Phone:</u> 080 2662 2130 </p> 
  </div>
 
</div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bms-college-of-engineering.jpg" alt="pg block" width="100" height="100">
      </div>

      <div class="item">
        <img src="images/aboutbmsce.jpg" alt="BMSCE" width="100" height="100">
      </div>
    
      <div class="item">
        <img src="images/bmsce_campus.jpg" alt="Campus" width="100" height="100">
      </div>

      <div class="item">
        <img src="images/499a57d968c6faabfdedbb04fa81deb9.jpg" alt="Terrace view" width="100" height="100">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br /> <br />
	
    	
 			
		
			
        	<div class="row-fluid" >
            	<div class="span4 offset4">            
					<div class="widget-body" style="border:1px solid #0066FF;
					-moz-box-shadow: 3px 3px 4px #444;
					-webkit-box-shadow: 3px 3px 4px #444;
					box-shadow: 3px 3px 4px #444;
					-ms-filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#444444');
					filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#444444'); "  >
						<ul class="nav nav-tabs no-margin myTabBeauty" >
							<li class="active" > <a data-toggle="tab" href="#home" data-original-title="" id="teacher" style='border-width:1px 1px 1px' > Teacher</a> </li>
							<li class=""> <a data-toggle="tab" href="#profile" data-original-title="" id="student" style='border-width:1px 1px 1px' > Student </a> </li>
							
						</ul>
						 <div class="tab-content bg-white" id="myTabContent" >
					<div id="home" class="tab-pane fade active in" >
						<p>
							<form name='teacher' action="teacherlogin.php" class="login-wrapper" method="post">
								<div class="header">
									<div class="row-fluid">
										<div class="span12" style="color:#000000;"  >
										  <h3>Teacher Login</h3>
										</div>
									</div>
								</div>
								<div class="content">
									<div class="row-fluid">
										<div class="span12">
										  <input type="hidden" name="usertype" id="usertype" value="110" />
										  <input class="input span12 number" placeholder="USERNAME" required type="text" name="username" id="username" value="" maxlength="12">
										</div>
									</div>
									 <div class="row-fluid">
										<div class="span12">
										  <input class="input span12 password" name="pwd" id="password" placeholder="Password" required type="password">
										</div>
									</div>
								</div>
								<div class="actions">
									<input class="btn btn-info" name="Login" type="submit" value="Login" id='submit' >
									<a href="forgot.php">Forgot Password?</a>
									<div class="clearfix"></div>
								</div>
							</form>
						 </p>
					</div>
					<div id="profile" class="tab-pane fade">
						<p>
							<form name='student' action="studentlogin.php" class="login-wrapper" method="post">
								<div class="header">
									<div class="row-fluid">
										<div class="span12" style="color:#000000; " >
										<h3>Student Login</h3>
										</div>
									</div>
								</div>
								<div class="content">
									<div class="row-fluid">
										<div class="span12">
										  <input type="hidden" name="usertype" id="usertype" value="120" />
										  <input name="username" id="user_other" class="input span12 text" placeholder="USERNAME" required type="text" value="">
										</div>
									</div>
									<div class="row-fluid">
										<div class="span12">					
											<input name="pwd" id="psw_other" class="input span12 password" placeholder="Password" required type="password">
										</div>
									</div>
								</div>
								<div class="actions">
									<input class="btn btn-success" name="Login" type="submit" value="Login" id='submit1' >
									<a href="forgot.php">Forgot Password?</a>
									<div class="clearfix"></div>
								</div>
							</form>
						 </p>
					</div>
					
							</form>
						 </p>
					</div>
					
					
				</div>
				
            </div>
        </div>
    </div>
</div>
  </div>


      <!--/.fluid-container--> 
   
<script src="http://v1.optraservice.com/assets/bluemoon/js/jquery.min.js"></script> 
<script src="http://v1.optraservice.com/assets/bluemoon/js/bootstrap.js"></script> 
<script type="text/javascript"> 	 
	//Tooltip
    $('a').tooltip('hide');
	
	//Popover
    $('.popover-pop').popover('hide');
	
	//Collapse
    $('#myCollapsible').collapse({
        toggle: false
      });
	  
	$('#teacher').click(function(){	
		$('#usertype').val('110');							
	});
	
	$('#student').click(function(){	
									
	$('#usertype').val('120');						
	});
	
	$('#others').click(function(){	
									
	$('#usertype').val('');						
	});
	
    </script>
</body>
</html>