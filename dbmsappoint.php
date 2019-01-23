<div style="background:url(images/back.jpg)">
<?php
$link=mysql_connect('localhost','root','');
mysql_select_db('dbms');

if(isset($_POST['search']))
{
	$search= $_POST['search'];
	if(!empty($search))
	{
		$query = "SELECT * FROM `appointment` WHERE `Ap_id`='$search' ";
		$qrun = mysql_query($query,$link);
		//@$res= mysql_result($qrun, 0 ,'id');
		$num = mysql_num_rows($qrun);
		if($num == 0){
			echo '<br><br><br>';
			echo 'Invalid appointment id.<br>';}
		else if($num==1)
		{
			$row = mysql_fetch_array($qrun);
			echo '<br><br><br>';
			echo "<strong>Patient Name</strong>: {$row['Pat_name']}<br>";
			echo "<strong>Receptionist id</strong>: {$row['Rcp_id']}<br>";
			echo "<strong>Doctor id</strong>: {$row['Doc_id']}<br>";
			echo "<strong>Appointment date</strong>: {$row['apnmt_date']}<br>";
			echo "<strong><strong>Appointment time</strong>: {$row['apnmt_time']}<br>";
		
		}
	}
	else {
		echo '<br><br><br>';
		echo 'enter a appointment id.<br>';}
}

if(isset($_POST['docid'])&&isset($_POST['rcpid'])&&isset($_POST['date'])&&isset($_POST['time'])&&isset($_POST['name']))
{
		$docid=$_POST['docid'];
		$rcpid=$_POST['rcpid'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$name=$_POST['name'];

	if(!empty($_POST['docid'])&&!empty($_POST['rcpid'])&&!empty($_POST['date'])&&!empty($_POST['time'])&&!empty($_POST['name']))
	{
		
		$q2= "INSERT INTO `appointment` VALUES('','$docid', '$rcpid' ,'$date','$time','$name')";
				if(mysql_query($q2))
				{
					echo '<br><br><br>';
					echo 'Appointment added successfully';
				}
				else {
					echo '<br><br><br>';
					echo 'query failed';}
	}
	else {
		echo '<br><br><br>';
		echo 'fill all fields';}
}

if(isset($_POST['delete']))
{
	$delete= $_POST['delete'];
	if(!empty($delete))
	{
		$query = "DELETE FROM `appointment` WHERE `Ap_id`='$delete' ";
		$qrun = mysql_query($query,$link);
		//@$res= mysql_result($qrun, 0 ,'id');
		//$num = mysql_num_rows($qrun);
		if($qrun)
		{
			echo '<br><br><br>';
			echo 'Appointment deleted successfully.<br>';
		}
		else {
			echo '<br><br><br>';
			echo 'Invalid appointment id';}
		
	}
	else {
		echo '<br><br><br>';
		echo 'enter a appointment id.<br>';}
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
			<a href="#" class="navbar-brand"><strong>WELCOME User</strong> </a>
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
<br><br>
<p><strong>SEARCH FOR APPOINTMENT</strong><p>
<form action ="" method= "POST" style="padding-left:20px" >
	Enter appointment id:  <input type = "text " name= "search">   
	<input type= "submit" value="Search" class="btn btn-info">
</form>

<br>
<br>

<p><strong>ADD NEW APPOINTMENT</strong><p>
<form action ="" method="POST" style="padding-left:20px">
	Patient Name:<br><input type="text" name="name" value="" placeholder="name"><br><br>
	Doctor id:<br><input type="text" name="docid" value="" placeholder="doctorID"><br><br>
	Receptionist id: <br><input type="text" name="rcpid" placeholder="Rcp id"><br><br>
	Appointment date:<br> <input type="text" name="date" value="" placeholder="dd/mm/yyyy"><br><br>
	Appointment time: <br><input type= "text" name="time" value="" placeholder="hr:mm"><br><br>
	<input type="submit" value="ADD APPOINTMENT" class="btn btn-info"> 
</form>
<br>
<br>
<strong>DELETE APPOINTMENT</strong><p>
<form action ="" method= "POST" style="padding-left:20px">
	Enter appointment id: <input type = "text " name= "delete">   
	<input type= "submit" value="Delete" class="btn btn-info"><br><br> 
</form>
<div>

