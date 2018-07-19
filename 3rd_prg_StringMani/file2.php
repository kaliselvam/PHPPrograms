<html>
<body bgcolor="yellow">
<center> <hr> <h2>  String Manupulation </h2><hr>
<form action="" method="POST">
Enter the String : <br>
<input type="text" name="t1"><br>
<input type="submit" name="task" value="length"><br><br>
<input type="submit" name="task" value="uppercase"><br><br>
<input type="submit" name="task" value="lowercase"><br><br>
<input type="submit" name="task" value="ucfirst"><br><br>
<input type="submit" name="task" value="ucword"><br><br>
<input type="submit" name="task" value="trim"><br><br>
</form>
<?php
global $t1,$d;
if(isset($_POST['t1']))
{
$t1=$_POST['t1'];
}
if(isset($_POST['task']))
{
$d=$_POST['task'];
}
switch($d)
{
case "length":
echo "Length is --> ".strlen($t1);
break;
case "uppercase":
echo "Upper Case is --> ".strtoupper($t1);
break;
case "lowercase":
echo "Lower case is --> ".strtolower($t1);
break;
case "ucfirst":
echo "ucfirst is --> ".ucfirst($t1);
break;
case "ucword":
echo "UC word is --> ".ucwords($t1);
break;
case "trim":
echo "TRIM is --> ".trim($t1);
break;
}
?>
</center>
</body>
</html>