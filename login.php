<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practitioners</b></center>
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
				<a href="contact.html">contact</a>
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
   <tr><td>User Name:</td><td><input name="us" type="text" class="form-control" required placeholder="user name" ></td></tr> <tr></tr>
    <tr><td>Password:</td><td><input name="ps" type="password" class="form-control" required placeholder="password" ></td></tr> <tr></tr>
    <tr><td></td><td><p>
      <label>
        <input type="radio" name="user" value="patient" id="RadioGroup1_0" class="form-control" required placeholder="user name" >
        Patient</label>
      
      <label>
        <input type="radio" name="user" value="doctor" id="RadioGroup1_1" class="form-control" required placeholder="user name" >
        Doctor</label>
     
     <label>
        <input type="radio" name="user" value="laboratory" id="RadioGroup1_2" class="form-control" required placeholder="user name" >
        Laboratory</label>
    </p></td></tr>
    <tr><td></td><td><input name="bt1" type="submit" value="Login"></td></tr>
    <tr></tr>
    </table>
    <table>
    <tr>
      <td><strong><h3>Register now</h3></strong></td></tr>
      <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="patreg.php" >Patient</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="docreg.php" >Doctor</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="labreg.php" >Laboratory</a></td></tr>
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
session_start();
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
if(isset($_POST['bt1']))
	{
		$us=$_POST['us'];
		$ps=$_POST['ps'];
		$user=$_POST['user'];
		echo $us;
	  echo $ps;
	  echo $user;
	if($user=="doctor")
		{ 
		$q=mysqli_query($con,"SELECT * FROM `doctor` WHERE `username`='$us' AND `password`='$ps' AND `status`=1");
		$row=mysqli_fetch_array($q);
		if(mysqli_num_rows($q)>0)
		 {
			  $_SESSION['id']=$row[0];
			  $_SESSION['us']=$row['username'];
     	  	 header('location:dochome.php');
	 	 }
		 else
		 {
			 echo "<script type='text/javascript'>alert('YOUR REGISTRATION IS UNDER VERIFICATION OR INVALID ENTRY')</script>";
		 }
		}
		if($user=="patient")
		{ 
		$q=mysqli_query($con,"SELECT * FROM `patient` WHERE `username`='$us' AND `password`='$ps'");
		$row=mysqli_fetch_array($q);
		if(mysqli_num_rows($q)>0)
		 {
			 $_SESSION['id']=$row[0];
			  $_SESSION['us']=$row['username'];
     	  	 header('location:pathome.php');
	 	 }
		 
		}
		if($user=="laboratory")
		{ 
		$q=mysqli_query($con,"SELECT * FROM `lab` WHERE `username`='$us' AND `password`='$ps' AND `status`=1");
		$row=mysqli_fetch_array($q);
		if(mysqli_num_rows($q)>0)
		 {
			 $_SESSION['id']=$row[0];
			  $_SESSION['us']=$row['username'];
     	  	 header('location:labhome.php');
	 	 }
		 else
		 {
			 echo "<script type='text/javascript'>alert('YOUR REGISTRATION IS UNDER VERIFICATION OR INVALID ENTRY')</script>";
		 }
		}
		
	}
	?>