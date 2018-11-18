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

	<div id="body">
		<div class="sidebar">
        
			<h3>Functions</h3>
            <ul>
			<li>
				<a href="viewreq.php?id=1">View Request</a>
			</li>
			<li>
				<a href="today.php">Today Appoinment</a>
			</li>
			<li>
				<a href="result.php">Lab Result</a>
			</li>
            <li>
				<a href="previous.php">Previous Appoinment</a>
			</li>
			
	  		</ul>
			
		</div>
        
          <table border="1" bgcolor="#CCCCCC" align="center" width="100%">
    <tr bgcolor="#999999"><td>NAME</td><td>AGE</td><td>GENDER</td><td>Place</td><td>CONTACT NUMBER</td><td>APPOINMENT DATE</td><td>APPOINMENT TIME</td></tr>
        
       <?php 
	   session_start();
	   $id=$_SESSION['id'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$id=$_SESSION['id'];
$q=mysqli_query($con,"select doc.daid,doc.adate,doc.atime,pat.* from patient pat join docappoinment doc on pat.pid=doc.pid where doc.pid in (select pid from docappoinment where did=$id) and doc.adate=CURRENT_DATE");
while($row=mysqli_fetch_array($q))
{
	$did=$row[0];
	echo "<tr><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[9]</td><td>$row[1]</td><td>$row[2]</td></tr>";
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



	