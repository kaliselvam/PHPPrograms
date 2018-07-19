<html>
<body bgcolor="yellow">
<center><h1>SESSION COUNTER</h1></center>
<hr>
<center><b>Reg.No : 15BIT021<br>
Name : kaliselvam G</b></center>

<br><br><br>
<?php
session_start();
if(isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "<center><table>";
echo "<tr><td><b>VIEWS COUNTS</b></td><td><center>".$_SESSION['views']."</center></td></tr>";
echo "<tr><td><b>SESSION ID</b></td><td>"  .session_id()."</td>";
echo "</table></center>";
?>
<br><Br>
<center><a href="9th_Session.php">Are You Need Refresh..?(Refresh Increases The Count)</a></center>
</html>