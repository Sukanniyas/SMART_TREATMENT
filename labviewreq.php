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

	<div id="body">
		<div class="sidebar">
        
			<h3>Functions</h3>
            <ul>
			<li>
				<a href="labviewreq.php">View Request</a>
			</li>
			<li>
				<a href="labtoday.php">Today Appoinment</a>
			</li>
			<li>
				<a href="upload.php">Upload Result</a>
			</li>
            <li>
				<a href="sugdoc.php">Suggested Doctors</a>
			</li>
			
	  		</ul>
			
		</div>
         <?php
		session_start();
		
		
		
		$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");

		if($_GET['id']==2){
			$appid=$_POST['appid'];
			$appdate=$_POST['appdate'];
			$apptime=$_POST['apptime'].":00";
			$updateStatment="update labresult set atime='$apptime', adate='$appdate',status=1 where rid=$appid";
			echo $updateStatment;
	$q=mysqli_query($con,$updateStatment);
	if($q)
		 {
			 echo "<script type='text/javascript'>alert(Appoinments updated.')</script>";
		 }
			}
			$con->close();
		?>
		
        
        
        
        <table border="1" bgcolor="#CCCCCC" align="center" width="100%">
    <tr bgcolor="#999999"><td>NAME</td><td>AGE</td><td>GENDER</td><td>ADDRESS</td><td>CONTACT NUMBER</td><td>APPOINMENT DATE</td><td>APPOINMENT TIME</td><td>SUBMIT</td></tr>
    
     <?php 
	 error_reporting(0);
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select lab.rid,pat.* from patient pat join labresult lab on pat.pid=lab.pid where lab.pid in (select pid from labresult where lid=$id) and lab.status=2");
while($row=mysqli_fetch_array($q))
{
	$did=$row[0];
	echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[5]</td><td>$row[6]</td><td><form method='post' action='?id=2'><input type='hidden' value='$row[0]' name='appid'><input type='date' name='appdate'></td><td><input type='time' name='apptime'></td><td><input type='submit' value='Update'></form></td>";
}


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



	