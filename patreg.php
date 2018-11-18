<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practioners</b></center>
		<ul>
			<li >
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
      <div id="content">
  <br><br><h2 align="center">CREATE YOUR PROFILE</h2><br>
	  <form name="form1" method="POST" action="patreg.php">
       <center>
        <table>
        <tr><td>NAME</td><td><input type="text" name="name" id="name" class="form-control" required placeholder="patient name"></td></tr><tr></tr><tr></tr>
          <tr><td>AGE</td><td><input type="text" name="age" id="age" class="form-control" required placeholder="your age"></td></tr><tr></tr><tr></tr>
	    <tr><td>GENDER</td><td><select name="gender" class="form-control" required placeholder="your gender"><option>select</option><option>male</option><option>female</option></select></td></tr><tr></tr><tr></tr>
	     <tr><td>CITY</td><td><input type="text" name="place" id="place" class="form-control" required placeholder="your city"></td></tr><tr></tr><tr></tr>
	<tr><td>ADDRESS</td><td><textarea name="address" id="address" cols="22" rows="5" class="form-control" required placeholder="your address"></textarea></td></tr><tr></tr><tr></tr>
       <tr><td>CONTACT NUMBER</td><td><input type="text" name="cno" id="cno" class="form-control" required placeholder="your mobno"></td></tr><tr></tr><tr></tr>
     <tr><td>E-MAIL</td><td><input type="email" name="email" id="sp" class="form-control" required placeholder="your mail id"></td></tr><tr></tr><tr></tr>
	<tr><td>AADAR</td><td><input type="text" name="aadar" id="aadar" class="form-control" required placeholder="your aadar no"></td></tr><tr></tr><tr></tr>
<tr><td>USER NAME</td><td><input type="text" name="username" id="username" class="form-control" required placeholder="your user name"></td></tr><tr></tr>
<tr></tr><tr><td>PASSWORD</td><td><input type="password" name="password" id="password" class="form-control" required placeholder="your password"></td></tr><tr></tr><tr></tr>  
 <tr><td></td><td><input type="submit" name="submit" id="bt" value="Submit"></td></tr><tr></tr><tr></tr>  
	  </table>
      
      </center>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
      </form>
	  <p>&nbsp;</p>
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
		$b=$_POST['age'];
		$c=$_POST['gender'];
		$d=$_POST['place'];
		$e=$_POST['address'];
		$f=$_POST['cno'];
		$g=$_POST['email'];
		$h=$_POST['aadar'];
		$i=$_POST['username'];
		$j=$_POST['password'];
		
		$q=mysqli_query($con,"INSERT INTO `patient`(`name`, `age`, `gender`, `place`, `address`, `contactno`, `email`, `aadar`, `username`, `password`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
		if($q)
		 {
			 echo "<script type='text/javascript'>alert('YOUR REGISTRATION IS SUCCESSFUL')</script>";
		 }
	}
	?>