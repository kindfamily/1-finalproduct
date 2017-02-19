<?php // rnheader.php
include 'rnfunctions.php';
session_start();

if (isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$loggedin = TRUE;
}
else $loggedin = FALSE;

echo "<html><head><title>$appname";
if ($loggedin) echo " ($user)";

echo "</title></head><body><font face='verdana' size='2'>";
//echo "<h2>$appname</h2>";

if ($loggedin)
{
	echo "<span>$user</span>:
		 <a href='http://localhost/1-finalproduct/main.php?view=$user'>Home</a> |
		 <a href='robinsnest/rnmembers.php'>Members</a> |
		 <a href='robinsnest/rnfriends.php'>Friends</a> |
		 <a href='robinsnest/rnmessages.php'>Messages</a> |
		 <a href='robinsnest/rnprofile.php'>Profile</a> |
		 <a href='robinsnest/rnlogout.php'>Log out</a>";
}
else
{
	echo "<a href='http://localhost/1-finalproduct/main.php'>Home</a> |
		 <a href='robinsnest/rnsignup.php'>Sign up</a> |
		 <a href='robinsnest/rnlogin.php'>Log in</a>";
}
?>
