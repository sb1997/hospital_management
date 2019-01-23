<?php

include 'dbmscore.php';
include 'dbmsconnect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
	echo 'You are logged in.<br><br><form action ="dbmslogout.php" method="GET"><input type="submit"  value="Log out"></form>';
}
else 
	include 'dbmsconn.php';


?>