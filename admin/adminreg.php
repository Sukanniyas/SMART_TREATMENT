<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>



	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practitioners</b>&nbsp; <h2>ADMIN AREA</h2></center>
		<ul>
			<li>
				
			</li>
			<li>
				
			</li>
			<li>
				<a href="adminhome.php">Home</a>
			</li>

			<li class="selected">
				<a href="adminreg.php">NEW ADMIN</a>
			</li>

			<li>
				<a href="feedback.php">Feedback</a>
			</li>
			<li>
				<a href="index.html">Logout</a>
			</li>
	  </ul>
        
</div>

	<div id="body">
		<div class="sidebar">
        
				<h3>FUNCTIONS</h3>
            <ul>
						<li>
				<a href="doctor.php">CURRENT DOCTORS</a>
			</li>
            <li >
				<a href="doctoraprove.php">APPROVE DOCTORS</a>
			</li>
			<li>
				<a href="lab.php">CURRENT LABORATORY</a>
			</li>
            <li>
				<a href="labaprove.php">APPROVE LABORATORY</a>
			</li>
			<li>
				<a href="pationt.php">PATIENTS</a>
			</li>
			
	  		</ul>
			
		</div>
        
        <div id="content">
  <br><br><h2 align="center">New Admin Registration</h2><br>
	  <form name="form1" method="POST" action="adminreg.php">
       <center>
        <table>
        <tr><td>NAME</td><td><input type="text" name="name" id="name" class="form-control" required placeholder="name"></td></tr><tr></tr><tr></tr>
         <tr><td>USER NAME</td><td><input type="text" name="username" id="name" class="form-control" required placeholder="user name"></td></tr><tr></tr><tr></tr>
          <tr><td>PASSWORD</td><td><input type="password" name="password" id="name" class="form-control" required placeholder="password"></td></tr><tr></tr><tr></tr>
          <tr><td></td><td><input type="submit" name="submit" id="bt" value="Submit"></td></tr>
          </table>
          </center>
        	</form>
	</div>
    </div>
    

	<div id="footer">
	    <div>
			<p>
				<span>2023 &copy; Smart Treatment From Private Practioners.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li id="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li id="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>


<?php 
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
if(isset($_POST['submit']))
	{
		$a=$_POST['name'];
		$b=$_POST['username'];
		$c=$_POST['password'];
		
	
	$q=mysqli_query($con,"INSERT INTO `admin`(`name`, `username`, `password`) VALUES ('$a','$b','$c')");
	}
	?>