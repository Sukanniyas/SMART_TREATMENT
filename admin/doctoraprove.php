<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>



	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practitioners</b>&nbsp; <h2>ADMIN AREA</h2></center>
		<ul>
			<li>
				
			</li>
			<li>
				
			</li>
			<li>
				<a href="adminhome.php">Home</a>
			</li>

			<li>
				<a href="adminreg.php">NEW ADMIN</a>
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
        
				<h3>FUNCTIONS</h3>
            <ul>
						<li>
				<a href="doctor.php">CURRENT DOCTORS</a>
			</li>
            <li >
				<a href="doctoraprove.php">APPROVE DOCTORS</a>
			</li>
			<li>
				<a href="lab.php">CURRENT LABORATORY</a>
			</li>
            <li>
				<a href="labaprove.php">APPROVE LABORATORY</a>
			</li>
			<li>
				<a href="pationt.php">PATIENTS</a>
			</li>
			
	  		</ul>
			
		
	</div>
    
	<center><h1>Requested Doctor Details</h1></center><BR><BR><BR><BR>
    
    
    <table border="1" bgcolor="#CCCCCC" align="right">
    <tr bgcolor="#999999"><td>NAME</td><td>CITY</td><td>ADDRESS</td><td>CONTACTNO</td><td>SPECIALIZATION</td><td>CERTIFICATE</td><td>REF_NAME</td><td>REF_MOBNO</td><td>REF_ADDRESS</td></tr>
    <?php 
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");

$q=mysqli_query($con,"SELECT * FROM `doctor` WHERE `status`=0");
while($row=mysqli_fetch_array($q))
{    
     $did=$row[0];
	echo "<tr><td>".$row[1]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><button onclick=\"viewCertificate('$row[10]')\">View Certificate</button></td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td><a href='approvedoc.php?did=$did'>Approve</a></td></tr>";
}

	?>
    </table>
	</div>
``    
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
<script>
function viewCertificate() {
    var myWindow = window.open("../doccertificate/"+arguments[0]+".jpg", "Certificate View", "width=800,height=500");
}
</script>
</html>



