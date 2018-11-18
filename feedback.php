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
				  </ul>
</div>
	<div id="body">
		<div class="content">
			<img src="images/telephone.jpg" alt="">
			<h2>send us a message</h2>
            
			<form action="feedback.php" method="post">
            <table>
            <tr><td>SUBJECT</td><td><input name="sub" type="text" id="sub"></td></tr>
            <tr><td>MESSAGE</td><td><textarea name="msg" id="msg" cols="30" rows="10"></textarea></td></tr>
            <tr><td></td><td><input name="submit" type="submit" value="send"></td></tr>
            </table>
            </form>
            
		</div>
		<div class="sidebar">
			<h3>contact</h3>
			<ul>
				<li>
					<span class="address">address</span>
					<ul>
						<li>
							Smart Treatment
						</li>
						<li>
							MCA Department
						</li>
						<li>
							College Of Engineering
						</li>
						<li>
							Triruvananthapuram
						</li>
					</ul>
				</li>
				<li>
					<span class="phone">telephone</span>
					<ul>
						<li>
							9074436028
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/misc/contact">smarttreatment@gmail.com</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="twitter">twitter</span>
					<ul>
						<li>
							<a href="http://freewebsitetemplates.com/go/twitter/">@smarttreatment</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="http://freewebsitetemplates.com/go/facebook/">www.facebook/smarttreatment</a>
						</li>
					</ul>
				</li>
			</ul>
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
		$a=$_POST['sub'];
		$b=$_POST['msg'];
		$c=50;
		
		
	
	$q=mysqli_query($con,"INSERT INTO `feedback`(`uid`, `subject`, `comment`) VALUES ('$c','$a','$b')");
	}
	?>