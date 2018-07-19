<html>
<body bgcolor="Gray">
<center><hr>
<h2> Searching String </h2> <hr>
<form action="" method="POST">
Enter the String : <br>
<input type="text" name="t1"><br><br>
Enter the Character : <br>
<input type="text" name="t2"> <br><br>
Enter the Starting range : <br>
<input type="text" name="t3"> <br><br>
Enter the Ending range : <br>
<input type="text" name="t4"> <br><br>
<input type="submit" name="task" value="position">
<input type="submit" name="task" value="substring">
<?php
global $t1,$t2,$t3,$t4,$a;
if(isset($_POST['t1']))
{
$t1=$_POST["t1"];
}
if(isset($_POST['t2']))
{
$t2=$_POST["t2"];
}
if(isset($_POST['t3']))
{
$t3=$_POST["t3"];
}
if(isset($_POST['t4']))
{
$t4=$_POST["t4"];
}
if(isset($_POST['task']))
{
$a=$_POST["task"];
}
switch($a)
{
case 'position' :
echo "<br> Position is -->".strpos($t1,$t2);
break;
case 'substring' :
echo "<br> Substring is -->".substr($t1,$t3,$t4);

}
?>
</form>
</body>
</html>