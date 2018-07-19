<?php
if(isset($_POST['day']))
{
	$d = $_POST['day'];
	if($d == "sunday")
	{
	$color = "red";
	}
	else if($d =="monday")
	{
	$color = "blue";
	}
	else if($d =="tuesday")
	{
	$color = "yellow";
	}
	else if($d =="wednesday")
	{
	$color = "pink";
	}
	else if($d =="thursday")
	{
	$color = "green";
	}
	else if($d =="friday")
	{
	$color = "blue";
	}
	else if($d =="saturday")
	{
	$color = "orange";
	}
	else
	{
	$color = "pink";
	}
}
?>
<html>
<body bgcolor="<?php
if(isset($color))
{
	echo $color;
}
?>">
<center><b><h1>Days in week</h1>
<font type= "comic sans MS">
<form action="" method= "POST">
<b>Kaliselvam G</b>
<br>
<b>III BSc (IT)</b>
<br>
<br>
Enter the Day<input type = "text" name= "day"><br><br>
<input type="submit" value="display">
<br><br>
<?php
echo "<br>";
echo date("d-m-y");
?>
</font>
</center>
</form>
</body>
</html>