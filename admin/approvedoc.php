    <?php 
	
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
		$did1=$_GET['did'];
		
			$q2=mysqli_query($con,"UPDATE `doctor` SET `status`=1 WHERE `did`='$did1'");
			header('location:doctoraprove.php');
	
	?>