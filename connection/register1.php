<?php
//session_start();
include 'connection1.php';
$link=mysql_connect('localhost','root','');
$db_selected=mysql_select_db($db,$link);
if(!$db_selected)
{
	die("cant use the db ");
}
else
{
	echo "<br>connected to the database<br>";
}
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
echo "firstname",$fname;
$sql="INSERT INTO reg
       (firstname, lastname, username, password, email)
       VALUES ( '$fname', '$lname','$uname' ,'$pass', '$email')";

if(!mysql_query($sql))
{
	die("cannot enter data");
}
else
{
	echo "<br>data has been inserted<br>";
	//$_session['username']=$uname;
					header('Location: ../login/loginpage.html');	
}
?>

