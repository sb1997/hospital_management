<div style="background-image:url(images/back.jpg)">
<?php
$link=mysql_connect('localhost','root','');
mysql_select_db('dbms');

if(isset($_POST['search']))
{
	$search= $_POST['search'];
	if(!empty($search))
	{
		$query = "SELECT * FROM `patient` WHERE `Pat_id`='$search' ";
		$qrun = mysql_query($query,$link);
		//@$res= mysql_result($qrun, 0 ,'id');
		$num = mysql_num_rows($qrun);
		if($num == 0){
			echo '<br><br><br>';
			echo 'invalid id.<br>';}
		else if($num==1)
		{

			$row = mysql_fetch_array($qrun);
			echo '<br><br><br>';
			echo "<strong>name</strong>: {$row['Pat_name']}<br>";
			echo "<strong>address</strong>: {$row['Pat_Address']}<br>";
			echo "<strong>sex</strong>: {$row['Pat_Sex']}<br>";
			echo "<strong>age</strong>: {$row['Pat_Age']}<br>";
			echo "<strong>mobile</strong>: {$row['Pat_MOB']}<br>";
			echo "<strong>DOB</strong>: {$row['Pat_DOB']}<br>";
		}
	}
	else {
		echo '<br><br><br>';
		echo 'enter a search id.<br>';}
}

if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['sex'])&&isset($_POST['mobile'])&&isset($_POST['dob'])&&isset($_POST['age']))
{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$dob=$_POST['dob'];
		$mobile=$_POST['mobile'];

	if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['sex'])&&!empty($_POST['age'])&&!empty($_POST['mobile'])&&!empty($_POST['dob']))
	{
		
		$q2= "INSERT INTO `patient` VALUES('','$name','$address','$sex','$age','$mobile','$dob' )";
				if(mysql_query($q2))
				{
					echo '<br><br><br>';
					echo 'Patient added successfully';
				}
	}
	else {
		echo '<br><br><br>';
		echo 'fill all fields';}
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
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><strong>WELCOME User</strong></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="main2.html" class="smoothScroll"><strong>HOME</strong></a></li>
				<li><a href="dbmssearch.php" class="smoothScroll"><strong>PATIENTS</strong></a></li>
				<li><a href="dbmsdoctors.php" class="smoothScroll"><strong>DOCTORS</strong></a></li>
				<li><a href="dbmsappoint.php" class="smoothScroll"><strong>APPOINTMENTS</strong></a></li>
				<li><a href="main2.html#dept" class="smoothScroll"><strong>DEPARTMENTS</strong></a></li>
				<li><a href="main2.html#contact" class="smoothScroll"><strong>CONTACT US</strong></a></li>
				<li><a href="dbmslogout.php" class="smoothScroll"><strong>LOGOUT</strong></a></li>
				
			</ul>
		</div>
	</div>
</section>
<br>
<br>
<br>
<p ><strong>SEARCH FOR PATIENT</strong><p>
<form action ="" method= "POST" style="padding-left:20px" >
	Enter patient id:  <input type = "text " name= "search"> 
	<input type= "submit" value="Search" class="btn btn-info">
</form>
<br>
<br>

<p><strong>ADD NEW PATIENT</strong><p>
<form action ="" method="POST" style="padding-left:20px">
	Name:<br><input type="text" name="name" value="" placeholder="name"><br><br>
	Address: <br><input type="text" name="address" placeholder="address"><br><br>
	Sex:<br> <input type="text" name="sex" placeholder="male/female"><br><br>
	Age: <br><input type= "text" name="age" value="" placeholder="age"><br><br>
	Mobile : <br><input type="text" name="mobile" value="" placeholder="mobile"><br><br>
	DOB : <br><input type="text" name="dob" value="" placeholder="dd/mm/yyyy"><br><br>
	<input type="submit" value="ADD PATIENT" class="btn btn-info"> 
</form>
<div>

