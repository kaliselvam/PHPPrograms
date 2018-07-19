<?php
$con=mysqli_connect("localhost","root","","book");
if(mysqli_connect_error())
{
echo "failed to connect mysql".mysqli_connect_errno();
}
else{
$t="drop table bookdetails;
if(mysqli_query($con,$t))
{
echo "Book details Table deleted Successfully";
}
else{
echo "Error in deleting Table";
}

}
?>