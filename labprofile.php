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
				<a href="labhome.php">Home</a>
			</li>
			<li>
				<a href="labprofile.php?id=1">Profile</a>
			</li>

			<li>
				<a href="labdoc.php">Doctors</a>
			</li>
			<li>
				<a href="feedback.php">Feedback</a>
			</li>
			<li>
				<a href="index.html">Logout</a>
			</li>
	  </ul>
</div>



<div align="center" >
    <table>
 <?php 
	   session_start();
	   $id=$_SESSION['id'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$lid=$_SESSION['id'];
$q=mysqli_query($con,"select * from lab where lid=$lid");
while($row=mysqli_fetch_array($q))
{
	if($_GET['id']==1)
	{
		$did=$row[0];
		echo "<tr><td>Lab Name</td><td>:</td><td>$row[1]</td></tr>";
		echo "<tr><td>Place</td><td>:</td><td>$row[2]</td></tr>";
		echo "<tr><td>Address</td><td>:</td><td>$row[3]</td></tr>";
		echo "<tr><td>ContactNo</td><td>:</td><td>$row[4]</td></tr>";
		echo "<tr><td>Licenceno</td><td>:</td><td>$row[5]</td></tr>";
		echo "<tr><td>OwnerName</td><td>:</td><td>$row[9]</td></tr>";
		echo "<tr><td>Owner MobNo</td><td>:</td><td>$row[10]</td></tr>";
		echo "<tr><td>Owner Address</td><td>:</td><td>$row[11]</td></tr>";
		echo "<tr><td>Aadar</td><td>:</td><td>$row[12]</td></tr>";
		echo "<tr colspan='3'><td><a href='?id=2'>Update Profile</a></td></tr>";
	}else if($_GET['id']==2){
		echo "<tr colspan='3'><td><form method='post' action='?id=3'><input type='hidden' name='lab_id' value='$row[0]'></td></tr>";
		echo "<tr><td>Lab Name</td><td>:</td><td><input type='text' name='lab_name' value='$row[1]'></td></tr>";
		echo "<tr><td>Place</td><td>:</td><td><input type='text' name='lab_place' value='$row[2]'></td></tr>";
		echo "<tr><td>Address</td><td>:</td><td><input type='text' name='lab_address' value='$row[3]'></td></tr>";
		echo "<tr><td>ContactNo</td><td>:</td><td><input type='text' name='lab_no' value='$row[4]'></td></tr>";
		echo "<tr><td>LicenceNo</td><td>:</td><td><input type='text' name='lab_licno' value='$row[5]'></td></tr>";
		echo "<tr><td>OwnerName</td><td>:</td><td><input type='text' name='lab_ownername' value='$row[9]'></td></tr>";
		echo "<tr><td>MobNO</td><td>:</td><td><input type='text' name='lab_mobno' value='$row[10]'></td></tr>";
		echo "<tr><td>OwnerAddress</td><td>:</td><td><input type='text' name='lab_address' value='$row[11]'></td></tr>";
		echo "<tr><td>OwnerAadar</td><td>:</td><td><input type='text' name='lab_aadar' value='$row[12]'></td></tr>";
		echo "<tr><td>UserName</td><td>:</td><td><input type='text' name='lab_username' value='$row[7]'></td></tr>";
		echo "<tr colspan='3'><td><input type='submit' value='Update Profile'></td></tr>";
	}else if($_GET['id']==3){
		$id=$_POST['lab_id'];
		$name=$_POST['lab_name'];
		$place=$_POST['lab_place'];
		$address=$_POST['lab_address'];
		$cno=$_POST['lab_no'];
		$licno=$_POST['lab_licno'];
		$oname=$_POST['lab_ownername'];
		$omn=$_POST['lab_mobno'];
		$oaddress=$_POST['lab_address'];
		$aadar=$_POST['lab_aadar'];
		$username=$_POST['lab_username'];
		
		$updateStatment="update lab set labname='$name',place=$place,address='$address',contactno='$cno', licenceno='$licno', oname='$oname', mobno='$omn', oaddress='$oaddress',aadar='$aadar' username='$username' where lid=$lid";
			//
			echo $updateStatment;
	$q=mysqli_query($con,$updateStatment);
	if($q){
			 echo "<script type='text/javascript'>alert('Profile updated.')</script>";
			 //
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


