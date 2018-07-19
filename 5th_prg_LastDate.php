<html>
<body bgcolor="red">
<center><h1><hr>LAST MODIFIED DATE<hr></h1>
<form aciton =""method="POST">
<input type="file" name="str"><br>
<input type="submit" method="click"><br>
<?php
if(isset($_POST['str']))
{
$d=$_POST['str'];
global $d;
if(file_exists($d))
{
$lst_mod=filemtime($d);
echo "last modified on";
echo "".date("j/m/y h:i",$lst_mod);

}
else
{
echo "the file does not exists";
}
}
?>