<?php 
	$d=date("D");
	echo $d;
	echo "\n";
	$n1=$_POST['num1'];
	$n2=$_POST['num2'];
	$str= $n1 + $n2;
	echo $str;
	for($i=0;$i<10;$i++)
	{
		print "\n";
		echo "goodmornin";
	}
 	if ($d=="Tue") 
 	{ 	
 		echo "\nHello!<br />"; 
 		echo "Have a nice weekend!"; 
 		echo "See you on Monday!";
 	}
 	else {
 		 	echo "be happy"; # code...
 		 }	 
?>