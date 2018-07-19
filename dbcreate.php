<?php
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
$t1="drop table bookdetails";
mysqli_query($con,$t1);
echo "Deletion success";
}
else{
echo "Error in Creating Table";
}
}
?>