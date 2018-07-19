<html>
<head><title>Cookies Programs</title></head>
<body bgcolor="yellow">
<center><h1>COOKIE TO STORE DATE AND TIME</h1><hr><br>
<b>Reg.No : 15BIT021<br>
Name : kaliselvam G</b></center>
<br><br>
<?php
	
	$itm=60*60*24*60+time();
	echo time();
	setcookie('last_visit',date("G:i -d/m/y"),$itm);
	if(isset($_COOKIE['last_visit'])){
		$visit=$_COOKIE['last_visit'];
		echo "<center>Last Visited date and Time In Cookie :- ".$visit."</center>";
	}
	else{
		echo "There was some problem in cookie // try refresh";
	}
	?>
	<center><a href="8th_Cookie.php">Are You Need Refresh..?</a></center>
</html>