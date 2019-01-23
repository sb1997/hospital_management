<div style="background:url(images/back.jpg)">
<?php
$link=mysql_connect('localhost','root','');
mysql_select_db('dbms');

if(isset($_POST['doctors']))
{
	$doctors= $_POST['doctors'];
	if(!empty($doctors))
	{
		$query = "SELECT * FROM `doctor` WHERE `Doc_type`='$doctors' ";
		$qrun = mysql_query($query,$link);
		//@$res= mysql_result($qrun, 0 ,'id');
		$num = mysql_num_rows($qrun);
		if($num == 0){
			echo '<br><br><br>';
			echo 'No doctors for the department.<br>';}
		else if($num>0)
		{
			echo '<br><br><br>';
			while($row = mysql_fetch_array($qrun))
			{
			echo "<strong>Name</strong>: {$row['Doc_name']}<br>";
			echo "<strong>Age</strong>: {$row['Doc_Age']}<br>";
			echo "<strong>Address</strong>: {$row['Doc_Address']}<br>";
			echo "<strong>Mobile</strong>: {$row['Doc_MOB']}<br>";
			echo "<strong>Salary</strong>: {$row['Doc_Salary']}<br>";
			echo "<strong>Passed from</strong>: {$row['Passed_from']}<br>";
			echo "<br>";
			echo "<br>";
		}
		}
	}
	else {
		echo '<br><br><br>';
		echo 'enter a search department.<br>';}
}

if(isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['dept'])&&isset($_POST['mobile'])&&isset($_POST['salary'])&&isset($_POST['age'])&&isset($_POST['passed']))
{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dept=$_POST['dept'];
		$age=$_POST['age'];
		$salary=$_POST['salary'];
		$mobile=$_POST['mobile'];
		$passed=$_POST['passed'];

	if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['dept'])&&!empty($_POST['age'])&&!empty($_POST['mobile'])&&!empty($_POST['salary'])&&!empty($_POST['passed']))
	{
		
		$q2= "INSERT INTO `doctor` VALUES('','$name', '$dept' ,'$age','$address','$mobile','$passed','$salary' )";
				if(mysql_query($q2))
				{
					echo '<br><br><br>';
					echo 'Doctor added successfully';
				}
				else 
					{
						echo '<br><br><br>';
						echo 'query failed';}
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

<br><br><br>
<p><strong>SEARCH FOR DOCTORS</strong><p>
<form action ="" method= "POST" style="padding-left:20px">
	Enter Doctor Dept:  <select name="doctors">
	<option value=""></option>
    <option value="Gynaecologist">Gynaecologist</option>
    <option value="Orthopedist">Orthopedist</option>
    <option value="Heart Specialist">Heart Specialist</option>
    <option value="Ent">Ent</option>
    <option value="Medicine">Medicine</option>
    <option value="Emergency">Emergency</option>
  </select>
	<input type= "submit" value="Search" class="btn btn-info">
</form>

<br>
<br>

<p><strong>ADD NEW DOCTOR</strong><p>
<form action ="" method="POST" style="padding-left:20px">
	Name:<br><input type="text" name="name" value="" placeholder="name"><br><br>
	Address: <br><input type="text" name="address" placeholder="address"><br><br>
	Department:<br> <select name="dept">
    <option value="Gynaecologist">Gynaecologist</option>
    <option value="Orthopedist">Orthopedist</option>
    <option value="Heart Specialist">Heart Specialist</option>
     <option value="Ent">Ent</option>
    <option value="Medicine">Medicine</option>
    <option value="Emergency">Emergency</option>
  </select>
  </select><br><br>
	Age: <br><input type= "text" name="age" value="" placeholder="age"><br><br>
	Mobile : <br><input type="text" name="mobile" value="" placeholder="mobile"><br><br>
	Salary : <br><input type="text" name="salary" value="" placeholder="salary"><br><br>
	Passed from : <br><input type="text" name="passed" value="" placeholder="Passed From"><br><br>
	<input type="submit" value="ADD DOCTOR" class="btn btn-info"> 
</form>
<div>
