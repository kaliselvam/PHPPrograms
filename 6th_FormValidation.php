<?php
if(isset($_POST['task']))
{
$nam=$_POST['t1'];
$no=$_POST['t2'];
$id=$_POST['t3'];
global $nam,$no,$id;
if($nam==""|| $nam==null)
$mg1="Name field is mandatory";
if($no=="" || $no==null)
$mg2="Contact no is mandatory";
else
{
if(!is_numeric($no))
$mg2="Enter the numberic value";
else if(strlen($no)<10)
$mg="The no should be less than ten digits";
}
if(isset($_POST['pwd1'])&&($_POST['pwd2']))
{
if(($_POST['pwd1']=="")&&($_POST['pwd2']==""))
$mg4="Enter the password";
if($_POST['pwd1']!=$_POST['pwd2'])
$mg4="Password doesnot match";
}
if($id==""||$id==null)
$mg3="Mail ID mandatory";
else
{
if(!filter_var($id,FILTER_VALIDATE_EMAIL))
$mg3="Enter the valid mail id";
}
if((!isset($mg1))&(!isset($mg2))&(!isset($mg3))&(!isset($mg4)))
$mg5="Login successfully!!!";
else
$mg5="Login Failed";
}
?>
<html>
<body bgcolor="pink">
<center><hr><h1>FORM VALIDATION</h1></hr>
<form action=" " method="post">
Enter the Name: <br><input type="text" name="t1" value="
<?php
if(isset($_POST['t1']))
echo $_POST['t1'];
?>"><br><br>
<?php global $mg1;
echo $mg1."<br>";
?>
Enter the password:<br><input type="password" name="pwd1" value="
<?php
if(isset($_POST['pwd1']))
echo $_POST['pwd1'];
?>"><br><br>
Confirm Password:<br><input type="password" name="pwd2" value="
<?php
if(isset($_POST['pwd2']))
echo $_POST['pwd2'];
?>"><br><br>
<?php global $mg4;
echo $mg4."<br>";
?>
Enter your contact no:<br><input type="text" name="t2" value="
<?php
if(isset($_POST['t2']))
echo $_POST['t2'];
?>"><br><br>
<?php global $mg2;
echo $mg2."<br>";
?>
Enter your Mail ID:<br><input type="text" name="t3" value="
<?php
if(isset($_POST['t3']))
echo $_POST['t3'];
?>"><br><br>
<?php
global $mg3;
echo $mg3."<br>";
?>
<input type="submit" name="task" value="submit">
<?php
global $mg5;
echo $mg5."<br>";
?>
</form>
</body>
</html> 