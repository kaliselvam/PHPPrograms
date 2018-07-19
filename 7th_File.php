<html>
<body bgcolor="white">
<font color="blue">
<center><hr><h1>File Creation</h1></hr>
<form action="" method="POST">
Enter the file name:<br><input type="text" name="t1" value"
<?php
if(isset($_POST['t1']))
echo $_POST['t1'];
?>"><br><br>
Enter the Message: <br><textarea name="msg" rows="5" cols="20"></textarea><br><br>
<input type="submit" name="btn1" value="write">
<input type="submit" name="btn2" value="read"><br>
<?php
if(isset($_POST['btn1']))
{
$p=fopen($_POST['t1'],"w");
$line=$_POST['msg'];
fwrite($p,$line);
echo "Content was written to the File successfully";
fclose($p);
}
if(isset($_POST['btn2']))
{
$op=fopen($_POST['t1'],"r");
echo "content of line".$_POST['t1']."<br>";
while(!feof($op))
{
$msg=fgets($op,1024);
echo $msg;
}
fclose($op);
}
?>
</form>
</center>
</font>
</body>
</html>