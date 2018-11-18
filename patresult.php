<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
</head>
<body>



	<div id="header"><center><h1>SMART TREATMENT</h1>&nbsp;<b>From Private Practitioners</b></center>
		<ul>
			<li>
				<a href="pathome.php">Home</a>
			</li>
			<li>
				<a href="patprofile.php?id=1">Profile</a>
			</li>
			<li>
				<a href="doclist.php">Doctors</a>
			</li>
			<li>
				<a href="lablist.php">Labs</a>
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
				<a href="reqdoc.php">Request to Doctor</a>
			</li>
			<li>
				<a href="reqlab.php">Request to Laboratory</a>
			</li>
			<li>
				<a href="patresult.php">Result</a>
			</li>
            <li>
				<a href="notification.php">Notification</a>
			</li>
			
	  		</ul>
			
		</div>
         <center>
         <font face="Verdana, Geneva, sans-serif"size="+1" color="#CC0033">

         <div id="div_print">
		<table>
        <?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"smart");
$result_id=$_GET['result_id'];
$q=mysqli_query($con,"select doc.name,doc.specialization,re.result, re.rdate,pat.name,pat.age,pat.gender,pat.place,lab.labname,lab.oname from labresult re left join doctor doc on re.did=doc.did left join patient pat on re.pid=pat.pid left join lab lab on lab.lid=re.lid where re.rid=$result_id");
while($row=mysqli_fetch_array($q))
{
	echo "<tr><td>Date</td><td>:</td><td>$row[3]</td></tr>";
	echo "<tr><td>Patient Name</td><td>:</td><td>$row[4]</td></tr>";
	echo "<tr><td>Patient Age</td><td>:</td><td>$row[5]</td></tr>";
	echo "<tr><td>Patient Gender</td><td>:</td><td>$row[6]</td></tr>";
	echo "<tr><td>Patient Place</td><td>:</td><td>$row[7]</td></tr>";
	echo "<tr><td>Doctor's Name</td><td>:</td><td>$row[0]</td></tr>";
	echo "<tr><td>Doctor's Specialization</td><td>:</td><td>$row[1]</td></tr>";
	echo "<tr><td>Result</td><td>:</td><td>$row[2]</td></tr>";
	echo "<tr><td>Laboratory Name</td><td>:</td><td>$row[8]</td></tr>";
	echo "<tr><td>Technician</td><td>:</td><td>$row[9]</td></tr>";
}
	?>
    </table>
        </div>
        <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value="Print Result">
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
