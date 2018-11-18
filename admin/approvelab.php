
 <?php 
	
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
		$lid1=$_GET['lid'];
		
			$q2=mysqli_query($con,"UPDATE `lab` SET `status`=1 WHERE `lid`='$lid1'");
			header('location:labaprove.php');
	
	?>