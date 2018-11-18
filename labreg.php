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
			<li>
				<a href="index.html">home</a>
			</li>
			<li>
				<a href="about.html">about</a>
			</li>
			<li>
				<a href="services.html">services</a>
			</li>
			<li  class="selected">
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
  <br><br><h2 align="center">CREATE LABORATORY PROFILE</h2><br>
	  <form name="form1" method="POST" action="labreg.php" enctype="multipart/form-data">
       <center>
        <table>
        <tr><td>LAB NAME</td><td><input type="text" name="name" id="name" class="form-control" required placeholder="lab name"></td></tr><tr></tr><tr></tr>
	     <tr><td>CITY</td><td><input type="text" name="place" id="place" class="form-control" required placeholder="city"></td></tr><tr></tr><tr></tr>
		<tr><td>ADDRESS</td><td><textarea name="address" id="address" cols="22" rows="5" class="form-control" required placeholder="address"></textarea></td></tr><tr></tr><tr></tr>
        <tr><td>CONTACT NUMBER</td><td><input type="text" name="cno" id="cno" class="form-control" required placeholder="contact number"></td></tr><tr></tr><tr></tr>
     <tr><td>LICENCE NUMBER</td><td><input type="text" name="lno" id="sp" class="form-control" required placeholder="licence number"></td></tr><tr></tr><tr></tr>
	
	   <tr><td>LICENCE CERTIFICATE</td><td><input type="file" name="cer" id="cer" class="form-control" required placeholder="licence certificate"></td></tr><tr></tr><tr></tr>
      <tr><td>USER NAME</td><td><input type="text" name="username" id="username" class="form-control" required placeholder="your name"></td></tr><tr></tr><tr></tr>  
	   <tr><td>PASSWORD</td><td><input type="password" name="password" id="password" class="form-control" required placeholder="your name"></td></tr><tr></tr><tr></tr>
       </table>
       
	     
       <p><h4>OWNER DETAILS</h4></p>
       <table>
	   <tr></tr><tr></tr>
	     <tr><td>NAME</td><td><input type="text" name="oname" id="oname" class="form-control" required placeholder="owner name"></td></tr><tr></tr><tr></tr>
	      <tr><td>MOBILE NO</td><td><input type="text" name="mobno" id="mobno" class="form-control" required placeholder="owner mob no"></td></tr><tr></tr><tr></tr>
	     <tr><td>ADDRESS</td><td><textarea name="oaddress" id="oaddress" cols="22" rows="5" class="form-control" required placeholder="owner address"></textarea></td></tr><tr></tr><tr></tr>
         <tr><td>AADAR</td><td><input type="text" name="aadar" id="aadar" class="form-control" required placeholder="owner aadar"></td></tr><tr></tr><tr></tr>
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
		$b=$_POST['place'];
		$c=$_POST['address'];
		$d=$_POST['cno'];
		$e=$_POST['lno'];
		$f=$_POST['cer'];
		$g=$_POST['username'];
		$h=$_POST['password'];
		$i=$_POST['oname'];
		$j=$_POST['mobno'];
		$k=$_POST['oaddress'];
		$l=$_POST['aadar'];
		$m=date('y/m/d');
        $n=0;
		$path="lablicence/"; // temporay path
		$file=$path.basename($_FILES['cer']['name']);
		if(move_uploaded_file($_FILES['cer']['tmp_name'],$file)){
			echo "suceess";
		}else echo "failed";
		
	
	$q=mysqli_query($con,"INSERT INTO `lab`(`labname`, `place`, `address`, `contactno`, `licenceno`, `certificate`, `username`, `password`, `oname`, `mobno`, `oaddress`, `aadar`, `date`, `status`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')");
	if($q)
		 {
			 echo "<script type='text/javascript'>alert('YOUR REGISTRATION IS UNDER VERIFICATION')</script>";
		 }
	}
	?>