<html>
<body bgcolor="black">
<title>RANDOM ADVERTISMENT</title>
<font color="yellow">
<head><center><h1>Snacks</h1></center></head>
<?php
$files = array("cho.html","coo.html","chi.html");
$title = array("Click ","Click ","Click ");
$des = array("to Know About chocolates","to Know About cookies","to Know About chips");
$size = count($files);
$r = rand(0,$size-1);
echo "<br>";
echo "<center><a href=\"$files[$r]\">$title[$r]</a>$des[$r]</center>";
 ?>
<center><a href="Homepage.php">Refresh</a></center>
</form>
</body>
</html>