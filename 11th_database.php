<html>
<body bgcolor="aqua">
<center>
<h1>BOOK DETAIL</h1>
</center>
<form action=" " method="POST">
<center>
<table><tr><td>
Book Name:</td><td>
<input type="text" name="bn"></td>
</tr><tr><td>
Book Price:</td><td>
<input type="text" name="bp"></td></tr>
<tr><td>
Book Quantity:</td><td>
<input type="text" name="qu"></td></tr>
<tr><td>
Amount:</td><td>
<input type="text" name="amt"></td></tr></table></center><br>
<center>
<input type="submit" name="insert" value="insert">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="update">
<input type="submit" name="view" value="view">
<input type="submit" name="table" value="Create Table">
</center>
</form>

<?php
$con=mysqli_connect("localhost","root","","book");
if(isset($_POST['insert']))
{
$bname=mysqli_real_escape_string($con,$_POST['bn']);
$bprice=mysqli_real_escape_string($con,$_POST['bp']);
$bquantity=mysqli_real_escape_string($con,$_POST['qu']);
$amount=mysqli_real_escape_string($con,$_POST['amt']);
$in="insert into bookdetails values('$bname','$bprice','$bquantity','$amount')";

if(mysqli_connect_errno())
{
echo "connection is failed".mysqli_connect_error();
}
if(mysqli_query($con,$in))
{
echo "values are inserted";
}
}

if(isset($_POST['view']))
{

$r="SELECT * FROM bookdetails";
$result=mysqli_query($con,$r);

echo "<table width=20 border=1 bordercolor='orange'cellpadding=1cellspacing=1>";
echo "<tr>";
echo "<th>Book NAME</th>";
echo "<th>Book Price</th>";
echo "<th>Book Quantity</th>";
echo "<th>Amount</th>";
echo "</tr>";

while($row=mysqli_fetch_array($result))
{
echo "<tr bgcolor=red colspan=5 width=20>";
echo "<td>  $row[0]  </td>";
echo "<td>  $row[1]  </td>";
echo "<td>  $row[2]  </td>";
echo "<td>  $row[3]  </td>";
echo "</tr>";
}
echo "</table>";
}
if(isset($_POST['delete']))
{
$bname=mysqli_real_escape_string($con,$_POST['bn']);
$de="delete from bookdetails where bn='$bname'";
if(mysqli_query($con,$de))
{
echo "records deleted";
}
}
if(isset($_POST['update']))
{
$bname=mysqli_real_escape_string($con,$_POST['bn']);
$bprice=mysqli_real_escape_string($con,$_POST['bp']);
$bquantity=mysqli_real_escape_string($con,$_POST['qu']);
$amount=mysqli_real_escape_string($con,$_POST['amt']);

$up="update bookdetails set bp='$bprice',qu='$bquantity',amt='$amount' where bn='$bname'";

if(mysqli_query($con,$up))
{
echo "records updated";
}
}
if(isset($_POST['table'])){
$t1 = "create table bookdetails (bn varchar(20) primary key,bp varchar(20),qu varchar(20),amt varchar(20))";
if(mysqli_query($con,$t1))
{
echo "Table Created";
}
else{
echo "Table Already there";
}
}
?>
</body>
</html>