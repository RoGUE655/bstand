<?php
// Instead if using  a direct connection to db it would be a good idea to use include serverdb.cfg file!
$mysqliconnect = mysqli_connect("changemeserveraddress","serverusername","serverpassword","serverdb");
$username = $_GET['Username'];
$password =  $_GET['Password'];
//Band or Fan 1 or 0 bool.... 1 = fan, 0 = band
$bandorfan = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE BorF ='$BorF'");
$dbusername = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE Username ='$username'");
$dbpassword = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE Password ='$password'");

if($username == $dbusername)
{
	if($password == $dbpassword){		
		while($bandorfan = 1){
		header('Location: http://bandstand.me/U&BProfile.html');
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Password Is Invalid")';
		echo '</script>';
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Username is not registered!")';
		echo '</script>';
	}
?>