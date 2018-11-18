<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>docregnew</title>
</head>

<body>
</body>
</html>
<?php 

$con= mysql_connect('localhost','root','');
$db=mysql_select_db('smart',$con);
if(isset($_POST['submit']))
	{
		$a=$_POST['name'];
		$b=$_POST['age'];
		$c=$_POST['gender'];
		$d=$_POST['place'];
		$e=$_POST['address'];
		$f=$_POST['cno'];
		$g=$_POST['sp'];
		$h=$_POST['aadar'];
		$i=$_POST['cer'];
		$j=$_POST['rname'];
		$k=$_POST['mobno'];
		$l=$_POST['raddress'];
		$m=$_POST['username'];
		$n=$_POST['password'];
		$o="10-jan-2018";
        $p="0";
	 $q=mysql_query("INSERT INTO `doctor`(`name`, `age`, `gender`, `place`, `address`, `contactno`, `specialization`, `aadar`, `certificate`, `rname`, `rcontactno`, `raddress`, `username`, `password`, `regdate`, `status`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')");
	}
	if($q==1)
	{
		echo "insert";
	}
	echo $a;
	echo $b;
	echo $c;
	echo $d;

echo $e;
	echo $f;

echo $g;
	echo $h;

echo $i;
	echo $j;

echo $k;
	echo $l;

echo $m;
	echo $n;

echo $o;
	echo $p;

	//header("location:index.html");
	?>
	