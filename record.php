<?php
$Email=$_POST['em'];
$First=$_POST['fn'];
$Last=$_POST['ln'];
$Gender=$_POST['gen'];
$Pass=$_POST['pass'];



$server="localhost";
$username="root";
$password="";
$database="pranavv";

$con=new mysqli($server,$username,$password,$database);

$sql="INSERT INTO tbl_login(Email,First_Name,Last_Name,Gender,Password) VALUES($Email,$First,$Last,$Gender,$Pass)";

if($con->query($sql)===TRUE)
{

	echo"recorded";
	
}
else
{
	echo"not recorded";
}

$sqlfetch="select * from tbl_login";



$con->close();
?>