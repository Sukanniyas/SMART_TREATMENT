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
        
         <table border="1" bgcolor="#CCCCCC" align="center" width="100%">
    <tr bgcolor="#999999"><td>NAME</td><td>AGE</td><td>GENDER</td><td>Place</td><td>CONTACT NUMBER</td><td>APPOINMENT DATE</td><td>APPOINMENT TIME</td><td>&nbsp;</td></tr>
        
       <?php 
	   session_start();
	   $id=$_SESSION['id'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select lab.rid,lab.adate,lab.atime,pat.* from patient pat join labresult lab on pat.pid=lab.pid where lab.pid in (select pid from labresult where lid=$id) and lab.adate=CURRENT_DATE and lab.status=1");
while($row=mysqli_fetch_array($q))
{
	$did=$row[0];
	echo "<tr><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[9]</td><td>$row[1]</td><td>$row[2]</td><td><form method='get' action='upload.php'><input type='hidden' name='id' value='1'><input type='hidden' name='result_id' value='$row[0]'><input type='submit' value='Update Result'></form></td></tr>";
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
