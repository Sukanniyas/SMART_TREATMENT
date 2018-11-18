<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 90%;
}

th, td {
    text-align: left;
    padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>




<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practitioners</b></center>
		<ul>
			<li>
				
			</li>
			<li>
				<a href="dochome.php">Home</a>
			</li>
			<li>
				<a href="docprofile.php?id=1">Profile</a>
			</li>

			<li>
				<a href="doclablist.php">Labs</a>
			</li>
			<li>
				<a href="feedback.php">Feedback</a>
			</li>
			<li>
				<a href="index.html">Logout</a>
			</li>
	  </ul>
</div>
	</div>
    <div align="center" >
    <table>
 <?php 
	   session_start();
	   $id=$_SESSION['id'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$did=$_SESSION['id'];
$q=mysqli_query($con,"select * from doctor where did=$did");
while($row=mysqli_fetch_array($q))
{
	if($_GET['id']==1)
	{
		$did=$row[0];
		echo "<tr><td>Name</td><td>:</td><td>$row[1]</td></tr>";
		echo "<tr><td>Age</td><td>:</td><td>$row[2]</td></tr>";
		echo "<tr><td>Gender</td><td>:</td><td>$row[3]</td></tr>";
		echo "<tr><td>Place</td><td>:</td><td>$row[4]</td></tr>";
		echo "<tr><td>Address</td><td>:</td><td>$row[5]</td></tr>";
		echo "<tr><td>Contact No.</td><td>:</td><td>$row[6]</td></tr>";
		echo "<tr><td>Specialization</td><td>:</td><td>$row[7]</td></tr>";
		echo "<tr><td>Aadhar</td><td>:</td><td>$row[8]</td></tr>";
		echo "<tr><td>Username</td><td>:</td><td>$row[10]</td></tr>";
		echo "<tr colspan='3'><td><a href='?id=2'>Update Profile</a></td></tr>";
	}else if($_GET['id']==2){
		echo "<tr colspan='3'><td><form method='post' action='?id=3'><input type='hidden' name='doc_id' value='$row[0]'></td></tr>";
		echo "<tr><td>Name</td><td>:</td><td><input type='text' name='doc_name' value='$row[1]'></td></tr>";
		echo "<tr><td>Age</td><td>:</td><td><input type='text' name='doc_age' value='$row[2]'></td></tr>";
		echo "<tr><td>Gender</td><td>:</td><td><input type='text' name='doc_gender' value='$row[3]'></td></tr>";
		echo "<tr><td>Place</td><td>:</td><td><input type='text' name='doc_place' value='$row[4]'></td></tr>";
		echo "<tr><td>Address</td><td>:</td><td><input type='text' name='doc_address' value='$row[5]'></td></tr>";
		echo "<tr><td>Contact No.</td><td>:</td><td><input type='text' name='doc_phno' value='$row[6]'></td></tr>";
		echo "<tr><td>Specialization</td><td>:</td><td><input type='text' name='doc_specialization' value='$row[7]'></td></tr>";
		echo "<tr><td>Aadhar</td><td>:</td><td><input type='text' name='doc_aadhar' value='$row[8]'></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td><input type='text' name='doc_username' value='$row[10]'></td></tr>";
		echo "<tr colspan='3'><td><input type='submit' value='Update Profile'></td></tr>";
	}else if($_GET['id']==3){
		$id=$_POST['doc_id'];
		$name=$_POST['doc_name'];
		$age=$_POST['doc_age'];
		$gender=$_POST['doc_gender'];
		$place=$_POST['doc_place'];
		$address=$_POST['doc_address'];
		$cno=$_POST['doc_phno'];
		$spc=$_POST['doc_specialization'];
		$adadhar=$_POST['doc_aadhar'];
		$username=$_POST['doc_username'];
		
		$updateStatment="update doctor set name='$name',age=$age,gender='$gender',place='$place', address='$address', contactno='$cno', specialization='$spc', aadar='$adadhar', username='$username' where did=$did";
			//
			echo $updateStatment;
	$q=mysqli_query($con,$updateStatment);
	if($q){
			 echo "<script type='text/javascript'>alert('Profile updated.')</script>";
		 }
			
			$con->close();
	}
	
}

	
$con->close();
	?>   
    
    </table>
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













