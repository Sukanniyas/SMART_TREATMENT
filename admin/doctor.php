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
    padding: 10px;
}
table.a {
    table-layout: auto;
    width: 180px;    
}
table.b {
    table-layout: fixed;
    width: 180px; 
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
    
	<center><h1>Doctor Details</h1></center><BR>
    
    
    <table border="1">
    <thead>
    <tr bgcolor="#94acb3"><th>NAME</th><th>ADDRESS</th><th>CONTACTNO</th><th>SPECIALIZATION</th><th>STATUS</th></tr>
    <?php 
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");

$q=mysqli_query($con,"SELECT * FROM `doctor` WHERE `status`=1");
while($row=mysqli_fetch_array($q))
{
	$did=$row[0];
	echo "<tr><td>".$row[1]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><a href='deletedoc.php?did=$did'>Deny</a></td></tr>";
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

