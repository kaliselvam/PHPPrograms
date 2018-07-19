<html>
<body bgcolor="orange">
<font color="red">
<center><h1><hr>Random Number</hr></h1>
<hr><h2>15BIT021</h2></hr>
<form action=" " method="get">
Enter The Starting value<br>
<input type="text" name="start"><br>
Enter The Ending Value<br>
<input type="text" name="end"><br>
<input type="submit" value="hit here">
<font color="black">
<?php
	global $x;
		if(isset($_GET['start']) && ($_GET['end']))
		$x = rand($_GET['start'],$_GET['end']);
		echo "<br>";
		echo "Answer:".$x;
		echo "<br>";
?>
</form>
</center
</font>
</body>
</html>