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
				<a href="profile.php">Profile</a>
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
         <center>
         <font face="Verdana, Geneva, sans-serif"size="+1" color="#330099">
       
      
        </center>
        
        
	
   <center><h1>Doctor Details</h1></center><BR><BR><BR><BR>
    <form name="form1" method="POST" action="labdoc.php">
    <table>
    <tr><TD><h3></h3></TD></tr>
        <tr><td>Specialization</td><td> <select name="sp" class="form-control" required placeholder="your specialization" ><option>select</option><option>Psychiatrist</option><option>Cardiologist</option><option>Dermatologist</option><option>Gastroenterologist</option><option>Neurologist</option><option>Gynecologist</option><option>Ophthalmologist</option><option>Orthopaedic</option><option>Pediatrician</option><option>Urologist</option></select></td></tr>
        <tr><td></td><td><input type="submit" name="submit" id="bt" value="Submit"></td></tr>
        </table>
       
    </form>
    
       <table border="1" bgcolor="#CCCCCC" align="center">
    <tr bgcolor="#999999"><td>DOCTOR ID</td><td>NAME</td></tr>

<?php
session_start();
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");

if(isset($_POST['submit']))
	{
		$sp=$_POST['sp'];
		
		$q=mysqli_query($con,"SELECT * FROM `doctor` WHERE `status`=1 and `specialization`='$sp'");
		while($row=mysqli_fetch_array($q))
		{
			echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
			}
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
    </div>
</body>
</html>


