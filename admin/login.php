<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practioners</b>&nbsp; <h2>ADMIN AREA</h2></center>
		<ul>
			<li>
				<a href="index.html">home</a>
			</li>
			<li>
				<a href="about.html">about</a>
			</li>
			<li>
				<a href="services.html">services</a>
			</li>
			<li class="selected">
				<a href="login.php">login</a>
			</li>
			
			<li>
				<a href="blog.html">blog</a>
			</li>
	  </ul>
</div>
    <div id="body">
    <div style="alignment-adjust:central">
    <form action="login.php" method="post">
    &nbsp;&nbsp;
  <br><br><h1 align="center">Login</h1><br>
   <center> <table>
   <tr><td>User Name:</td><td><input name="us" type="text" class="form-control" required placeholder="user name"></td></tr> <tr></tr>
    <tr><td>Password:</td><td><input name="ps" type="password" class="form-control" required placeholder="password"></td></tr> <tr></tr>
    
    <tr><td></td><td><input name="bt1" type="submit" value="Login"></td></tr>
    <tr></tr>
    </table></center>    </form>
    
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
if(isset($_POST['bt1']))
	{
		$us=$_POST['us'];
		$ps=$_POST['ps'];
		
	
	$q=mysqli_query($con,"SELECT `username`,`password` FROM `admin` WHERE `username`='$us' AND `password`='$ps'");
	if(mysqli_num_rows($q)>0)
	 {
      echo $us;
	  echo $ps;
	  header('location:adminhome.php');
	 }
	  else
		 {
			 echo "<script type='text/javascript'>alert('INVALID ENTRY')</script>";
		 }
   
	}
	?>