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
				<a href="pathome.php">Home</a>
			</li>
			<li>
				<a href="patprofile.php?id=1">Profile</a>
			</li>
			<li>
				<a href="doclist.php">Doctors</a>
			</li>
			<li> 
				<a href="lablist.php">Labs</a>
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
		
         <center>
         <font face="Verdana, Geneva, sans-serif"size="+1" color="#CC0033">
        <h1>
       
        </h1>
     
        </center>
        
        
	
    <div align="center" >
    <table>
 <?php 
	   session_start();
	   $id=$_SESSION['id'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$pid=$_SESSION['id'];
$q=mysqli_query($con,"select * from patient where pid=$pid");
while($row=mysqli_fetch_array($q))
{
	if($_GET['id']==1)
	{
		$pid=$row[0];
		echo "<tr><td>Name</td><td>:</td><td>$row[1]</td></tr>";
		echo "<tr><td>Age</td><td>:</td><td>$row[2]</td></tr>";
		echo "<tr><td>Gender</td><td>:</td><td>$row[3]</td></tr>";
		echo "<tr><td>Place</td><td>:</td><td>$row[4]</td></tr>";
		echo "<tr><td>Address</td><td>:</td><td>$row[5]</td></tr>";
		echo "<tr><td>Contact No.</td><td>:</td><td>$row[6]</td></tr>";
		echo "<tr><td>E-Mail</td><td>:</td><td>$row[7]</td></tr>";
		echo "<tr><td>Aadhar</td><td>:</td><td>$row[8]</td></tr>";
		echo "<tr><td>Username</td><td>:</td><td>$row[9]</td></tr>";
		echo "<tr colspan='3'><td><a href='?id=2'>Update Profile</a></td></tr>";
	}else if($_GET['id']==2){
		echo "<tr colspan='3'><td><form method='post' action='?id=3'><input type='hidden' name='pat_id' value='$row[0]'></td></tr>";
		echo "<tr><td>Name</td><td>:</td><td><input type='text' name='pat_name' value='$row[1]'></td></tr>";
		echo "<tr><td>Age</td><td>:</td><td><input type='text' name='pat_age' value='$row[2]'></td></tr>";
		echo "<tr><td>Gender</td><td>:</td><td><input type='text' name='pat_gender' value='$row[3]'></td></tr>";
		echo "<tr><td>Place</td><td>:</td><td><input type='text' name='pat_place' value='$row[4]'></td></tr>";
		echo "<tr><td>Address</td><td>:</td><td><input type='text' name='pat_address' value='$row[5]'></td></tr>";
		echo "<tr><td>Contact No.</td><td>:</td><td><input type='text' name='pat_phno' value='$row[6]'></td></tr>";
		echo "<tr><td>E-Mail</td><td>:</td><td><input type='text' name='pat_email' value='$row[7]'></td></tr>";
		echo "<tr><td>Aadhar</td><td>:</td><td><input type='text' name='pat_aadhar' value='$row[8]'></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td><input type='text' name='pat_username' value='$row[9]'></td></tr>";
		echo "<tr colspan='3'><td><input type='submit' value='Update Profile'></td></tr>";
	}else if($_GET['id']==3){
		$id=$_POST['pat_id'];
		$name=$_POST['pat_name'];
		$age=$_POST['pat_age'];
		$gender=$_POST['pat_gender'];
		$place=$_POST['pat_place'];
		$address=$_POST['pat_address'];
		$cno=$_POST['pat_phno'];
		$email=$_POST['pat_email'];
		$adadhar=$_POST['pat_aadhar'];
		$username=$_POST['pat_username'];
		
		$updateStatment="update patient set name='$name',age=$age,gender='$gender',place='$place', address='$address', contactno='$cno', email='$email', aadar='$adadhar', username='$username' where pid=$pid";
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
