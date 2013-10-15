<?php
// Instead if using  a direct connection to db it would be a good idea to use include serverdb.cfg file! or use encryption
$mysqliconnect = mysqli_connect("changemeserveraddress","serverusername","serverpassword","serverdb");
$username = $_GET['Username'];
$password =  $_GET['Password'];
$seckey = $_GET['token'];
//Band or Fan 1 or 0 bool.... 1 = fan, 0 = band
$bandorfan = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE BorF ='$BorF'");
//Getting Username And Password
$dbusername = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE Username ='$username'");
$dbpassword = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE Password ='$password'");
// Getting the security token associated with account
$dbsecuritykey = mysqli_query($mysqliconnect, "SELECT * FROM serverdb WHERE Security = '$security'");
if($username == $dbusername){
	if($password == $dbpassword){
		if($seckey == $dbsecuritykey){
			header ('Location: http://bandstand.me/U&BProfile.html');
		}
		// If security key is not the same ... still directs you to profile page
		else{
			header ('Location: http://bandstand.me/U&BProfile.html');
			// Insert some kind of alert here!
		}
	}
	// if password is no good
	else
	{
	header ('Location: http://bandstand.me');
	}
}
// if username is no good
else 
{
	header ('Location: http://bandstand.me');
}
?>