<html>
<body bgcolor="white">
<font color="blue">
<center><hr><h1>Table Creation and Deletion</h1></hr>
<form action="" method="POST">
<input type="submit" name="btn1" value="Create booksdetails Table">
<input type="submit" name="btn2" value="Delete Bookdetails Table"><br>
<?php

if(isset($_POST['btn1']))
{
$con=mysqli_connect("localhost","root","","book");
if(mysqli_connect_error())
{
echo "failed to connect mysql".mysqli_connect_errno();
}
else{
$t="create table bookdetails(bookname varchar(20),price int,quantity int,amount int)";
if(mysqli_query($con,$t))
{
echo "Book details Table Created Successfully";
}
else{
echo "Error in Creating Table";
}
}
}
if(isset($_POST['btn2']))
{
$con=mysqli_connect("localhost","root","","book");
if(mysqli_connect_error())
{
echo "failed to connect mysql".mysqli_connect_errno();
}
else{
$t1="drop table bookdetails";
if(mysqli_query($con,$t1))
{
echo "Deletion success";
}
else{
echo "Error in deleting Table";
}
}
}
?>
</form>
</center>
</font>
</body>
</html>