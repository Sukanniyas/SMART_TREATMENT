<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
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
         <center>
         <font face="Verdana, Geneva, sans-serif"size="+1" color="#330099">
        <h1>
        <?php
		session_start();
		
		echo  strtoupper($_SESSION['us']);
		
		?>
        </h1>
      <font face="Verdana, Geneva, sans-serif"size="+1" color="#CC0033">  <h2> <marquee direction="right">WELCOME</marquee></h2>
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

