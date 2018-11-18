<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 75%;
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
        
         <!--Starting of body-->
        <?php 
		 session_start();
	   $id=$_SESSION['id'];
	   $result_id=$_GET['result_id'];
		?>
        <form method='post' action='?id=2'>
        <table>
        <tr><td>Result ID</td><td>:</td><td><?php echo $result_id; ?><input type='hidden' name='result_id' value='<?php echo $result_id; ?>'></td>
         <tr><td>Result Details</td><td>:</td><td><textarea name='result_data' rows='10' cols='40'>Please fill result data here!</textarea></td></tr>
        <tr align='center'><td colspan='3' align='center'><input type='submit' value='Update Result'></td></tr>
        </form>
        <!--Ending of body-->
        </div>
        <?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
if($_GET['id']==2)
	{
		$result_id=$_POST['result_id'];
		$result_data=$_POST['result_data'];
		$updateQuery="update labresult set result='$result_data', rdate=CURRENT_DATE, rtime=CURRENT_TIME, status=1 where rid=$result_id";
		echo $updateQuery;
		$q=mysqli_query($con,$updateQuery);
	if($q)
		 {
			 echo "<script type='text/javascript'>alert('Result updated')</script>";
		 }
	}	
        
?>
        
      
</body>
</html>
