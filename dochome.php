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
        <h1>Dr.
        <?php
		session_start();
		
		echo  strtoupper($_SESSION['us']);
		
		?>
        </h1>
      <font face="Verdana, Geneva, sans-serif"size="+1" color="#CC0033">  <h2> <marquee direction="right">WELCOME</marquee></h2>
        </center>
        
        
	</div>
    <div align="center">
     <marquee direction="left"><img src="images/doc4.jpg" alt="Norway" style="width:150pxs></marquee></h2>
     <marquee direction="right"><img src="images/doc2.jpg" alt=""></marquee></h2>
     <marquee direction="left"><img src="images/doc3.jpg" alt=""></marquee></h2>
     <marquee direction="right"><img src="images/doc1.jpg" alt="Norway"></marquee></h2>
    </div>
    	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>

<script>

  function FillBilling(f) 
{
  if(f.addressequal.checked == true) {

   f.t19.value = f.t11.value; 
   f.t20.value = f.t12.value;
   f.t21.value = f.t13.value;
  f.t22.value = f.t14.value;
  f.t23.value = f.t15.value ;
  f.t24.value = f.t16.value ;
  f.t25.value = f.t17.value ;
  f.t26.value = f.t18.value;
}
if(f.addressequal.checked == false) {
   f.t19.value = null; 
   f.t20.value = null; 
   f.t21.value = null; 
   f.t22.value=null; 
   f.t23.value=null; 
   f.t24.value=null; 
   f.t25.value=null; 
   f.t26.value=null; 
  }
}
</script>

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



	