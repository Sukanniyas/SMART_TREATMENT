<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
	  <a href="index.html" class="logo">
	  <h1>SMART TREATMENT </h1>
	  </a>
	  <p><a href="index.html" class="logo">
      your helth your choice
      </h1>
      </a>
      <ul>
			<li class="">
				<a href="index.html">home</a>
			</li>
			<li>
<div align="center">
<p>LOGIN</p>
		<p>&nbsp;
        <form name="form1" method="post" action="admlog.php">
          <p>
            <label for="username">USER NAME</label>
            <input type="text" name="username" id="username">
          </p>
          <p>
            <label for="password">PASSWORD</label>
            <input type="text" name="password" id="password">
          </p>
          <p>
            <input type="submit" name="submit" id="submit" value="LOGIN">
          </p>
          <p>&nbsp;</p>
        </form>
        <ul>
			

     
        </p>
		
<p>&nbsp; </p>
	  <div id="footer">
		
		 
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div>
			<p>
				<span>2023 &copy; metrolabs Diagnostic Center.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
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
<?php
 $conn= mysql_connect('localhost','root','');
 $db=mysql_select_db('smart',$conn);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'SELECT username,password FROM admin';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      $a="{$row['username']}";
	  $b="{$row['password']}";
	 }
	if(isset($_POST['submit']))
	{
		$c=$_POST['username'];
		$d=$_POST['password'];

		if(($c==$a)&&($d==$a))
			header('location:adminhome.php');
		if(($c!=$a)||($d!=$b))
			{
				echo "<script type='text/javascript'>alert('INVALID USERNAME/PASSWORD')</script>";
			}
	}
  mysql_close($conn);
				?>