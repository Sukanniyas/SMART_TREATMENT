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
				<a href="profile.php">Profile</a>
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
				<a href="viewreq.php">View Request</a>
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
        <center>
         <font face="Verdana, Geneva, sans-serif"size="+1" color="#330099">
       
       <center><h1>Laboratory Details</h1></center><BR><BR><BR><BR>
    <form name="form1" method="POST" action="doclablist.php">
    <table>
    <tr><TD><h3></h3></TD></tr>
        <tr><td>Place</td><td><input name="pl" type="text" class="form-control" required placeholder="place"/></td></tr>
        <tr><td></td><td><input type="submit" name="submit" id="bt" value="Submit"></td></tr>
        </table>
       
    </form>
    
       <table border="1" bgcolor="#CCCCCC" align="center">
    <tr bgcolor="#999999"><td>LAB ID</td><td>NAME</td></tr>

<?php
session_start();
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");

if(isset($_POST['submit']))
	{
		$pl=$_POST['pl'];
		
		$q=mysqli_query($con,"SELECT * FROM `lab` WHERE `status`=1 and `place`='$pl'");
		while($row=mysqli_fetch_array($q))
		{
			echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
			}
	}

?>
</table>
        </center>
        
        
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



	