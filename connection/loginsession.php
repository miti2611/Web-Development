<?php
session_start();
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


	$uname=$_POST['username'];
	$pass1=$_POST['password'];
	$pass=md5($pass1);

		$login=mysql_query("SELECT * FROM reg where username='$uname' and password='$pass1'");
			if(mysql_num_rows($login) == 1)
			{	
					echo "<br>Username",$uname,"<br>password",$pass1,"<br>";
					$_session['username']=$uname;
					header('Location: ../souveniers/souveniers.html');	

			}		
			else
			{
				echo"couldn't connect<br>";
				header('Location: ../register/registrationform.html');
				session_write_close();
			}
?>			