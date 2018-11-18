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



	<?php
	include_once("patheader.php");
	?>
            
		</div>
        
    <form action="patresult.php" method="get">
    
    
    Test Id<input name="result_id" type="text"><br>
   <input type="submit" value='View Result'>
    
    </form>

	<?php
	include_once("footer.php");
	?>
</body>
</html>
