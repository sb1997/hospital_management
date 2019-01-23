<?php

if(isset($_POST['name'])&&isset($_POST['pass']))
{
	$user= $_POST['name'];
	$pass= $_POST['pass'];
	$passhash = md5($pass);
	if(!empty($user)&&!empty($pass))
	{
		$query = "SELECT `id` FROM `login` WHERE `username`='$user' AND `password`='$passhash' ";
		$qrun = mysql_query($query);
		@$res= mysql_result($qrun, 0 ,'id');
		$num = mysql_num_rows($qrun);
		if($num == 0)
			echo 'invalid username / password.<br>';
		else if($num==1)
		{
			$_SESSION['user_id']=$res;
			header('Location: main2.html');
		}
	}
	else echo 'enter a username and password.<br>';
}


?>
<head>
		<title>Hospital Management</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>

<form action ="<?php echo $server ; ?>" method= "POST" style="padding-top:250px;padding-left:500px;padding-bottom:500px;background-image:url(images/back.jpg);" >
	Username: <input type = "text " name= "name"><br><br> password  : <input type= "password" name="pass"><br><br>
	<input type= "submit" value="Log in!" class="btn btn-danger"><br><br> 
</form>
