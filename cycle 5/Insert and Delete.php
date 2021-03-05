


<html>
<form method="post" >
Insert: <input type="text" name="txtName">
<br><br>

Delete: <input type="text" name="delName">
<br><br>
<input type="submit" name="btnSubmit" value="Save">
<input type="submit" name="delsubmit" value="del">
</form>
<html>

<?php
$servername = "localhost";
$username = "20mca001";
$password = "2251";
$dbname = "20mca001";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST["btnSubmit"]))
{

$name = $_POST["txtName"];

$sql ="insert into Test_Insert (Name) values ('$name'); ";
echo $sql ;

    mysqli_query($conn, $sql);

}


if(isset($_POST["delsubmit"]))
{
$name = $_POST["delName"];
$sql="delete from Test_Insert WHERE Name='$name' ";

echo $sql;
mysqli_query($conn,$sql);
}