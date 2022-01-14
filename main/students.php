<html>

<head>
	<title>
		Model :: College System
	</title>

	<?php
	require_once('auth.php');
	?>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
		.navbar-inverse .nav li a:hover {
			background-color: #fff;
			color: #000;
		}

		.well {
			margin-left: 0;
			height: 100vh;
			padding: 45px 0px;
			margin-bottom: 0px;
			z-index: 3;
			background-color: #58595b;
		}

		.well li {
			background-color: #646464;
		}

		.well a {
			transition: .3s;
		}

		.well li.active a {
			text-decoration: none;
			background-color: #fff;
			color: #722290;
		}

		.hero-unit-clock {
			padding: 20px;
			text-align: center;
			background-color: #8581815c;
		}

		.hero-unit-clock h4 {
			margin-top: 0px;
			margin-bottom: 20px;
			color: #fbb450;
		}

		.hero-unit-clock input {
			background: #464141;
			border: none;
			box-shadow: 0px 0px 10px 0px black;
			border-radius: 10px;
			color: #ffff;
		}

		.span10 {
			position: relative;
		}

		#resultTable tbody tr td {
			padding: 7px
		}

		#resultTable tbody tr td button {
			margin-bottom: 5px;
		}

		@media (min-width:576px) {
			.well {
				width: 138px
			}

			.well a {
				font-size: 12px;
				padding: 10px 0;
			}

			.span10 {
				left: 24%;
				width: 55%
			}
		}

		@media (min-width:768px) {
			.well {
				width: 189px;
			}

			.well a {
				font-size: medium;
				padding: 10px;
			}

			.span10 {
				left: 25%;
				width: 50%
			}
		}

		@media (min-width:992px) {
			.well {
				width: 189px;
			}

			.well a {
				font-size: medium;
				padding: 10px;
			}

			.span10 {
				left: 20%;
				width: 70%
			}
		}
	</style>
	<!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->

	<!--sa poip up-->
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>
		<style>
		body{
			background-color:#edecec;
		}
	</style>
</head>
<?php
function createRandomPassword()
{
	$chars = "003232303232023232023456789";
	srand((float)microtime() * 1000000);
	$i = 0;
	$pass = '';
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;
	}
	return $pass;
}
$finalcode = 'RS-' . createRandomPassword();
?>

<script>
	function sum() {
		var txtFirstNumberValue = document.getElementById('txt1').value;
		var txtSecondNumberValue = document.getElementById('txt2').value;
		var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt3').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt22').value = result;
		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var txtSecondNumberValue = document.getElementById('txt33').value;
		var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt55').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt4').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt5').value = result;
		}

	}
</script>


<script language="javascript" type="text/javascript">
	/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
	//  Begin
	var timerID = null;
	var timerRunning = false;

	function stopclock() {
		if (timerRunning)
			clearTimeout(timerID);
		timerRunning = false;
	}

	function showtime() {
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds()
		var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
		if (timeValue == "0") timeValue = 12;
		timeValue += ((minutes < 10) ? ":0" : ":") + minutes
		timeValue += ((seconds < 10) ? ":0" : ":") + seconds
		timeValue += (hours >= 12) ? " P.M." : " A.M."
		document.clock.face.value = timeValue;
		timerID = setTimeout("showtime()", 1000);
		timerRunning = true;
	}

	function startclock() {
		stopclock();
		showtime();
	}
	window.onload = startclock;
	// End -->
</SCRIPT>

<body>
	<?php include('navfixed.php'); ?>
	<div class="head">
		<div class="well">
			<ul class="nav">
			<li style="margin-bottom:10px; " ><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
				<li style="margin-bottom:10px; " class="active"><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a> </li>
				<li style="margin-bottom:10px; "><a href="addstudent.php"><i class="icon-group icon-2x"></i>Add Student</a> </li>

				<br><br>
				<li>
					<div class="hero-unit-clock">

						<form name="clock">
							<h4>Time <br></h4><input type="submit" class="trans" name="face" value="">
						</form>
					</div>
				</li>

			</ul>
		</div>
		<!--/.well -->
	</div>
	<!--/span-->
	<div class="span10">
		<div class="contentheader">
			<i class="icon-table"></i> Students
		</div>
		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Students</li>
		</ul>


		<div style=" margin-bottom: 21px;">
			<a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM student ORDER BY id DESC");
			$result->execute();
			$rowcount = $result->rowcount();
			?>


			<div style="text-align:center;">
				Total Number of Students: <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount; ?>]</font>
			</div>


		</div>


		<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Students..." autocomplete="off" />
		<a href="addstudent.php"><Button type="submit" class="btn btn-info" style="max-width:35%; margin-left:3px; height:35px; background-color: #222023;"><i class="icon-plus-sign icon-large"></i> Add Student</button></a><br><br>
		<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
			<thead>
				<tr>
				<th style=" background-color: #222023;"  width="15%"> Student ID</th>
				<th style=" background-color: #222023;"  width="20%"> Full Name </th>
				<th style=" background-color: #222023;"  width="10%"> Gender </th>
				<th style=" background-color: #222023;"  width="15%"> Admittion Year </th>
				<th style=" background-color: #222023;"  width="10%"> Parent Phone </th>
				<th style=" background-color: #222023;"  width="30%"> Action </th>
				</tr>
			</thead>
			<tbody>

				<?php

				include('../connect.php');
				$result = $db->prepare("SELECT * FROM student ORDER BY id DESC");
				$result->execute();
				for ($i = 0; $row = $result->fetch(); $i++) {

				?>

					<td><?php echo $row['student_id']; ?></td>
					<td><?php echo $row['name']; ?> 
					<?php echo $row['last_name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['yoa']; ?></td>
					<td><?php echo $row['parent']; ?></td>	
					<td><a title="Click to view the Student" href="viewstudent.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
						<a title="Click to edit the Student" href="editstudent.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button> </a>
						<a title="Click to Add Grades" href="addgrades.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> AddGrades</button> </a>
						<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a>
					</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<div class="clearfix"></div>
	</div>

	<script src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function() {


			$(".delbutton").click(function() {

				//Save the link in a variable called element
				var element = $(this);

				//Find the id of the link that was clicked
				var del_id = element.attr("id");

				//Built a url to send
				var info = 'id=' + del_id;
				if (confirm("Sure you want to delete this Student? There is NO undo!")) {

					$.ajax({
						type: "GET",
						url: "deletestudent.php",
						data: info,
						success: function() {

						}
					});
					$(this).parents(".record").animate({
							backgroundColor: "#fbc7c7"
						}, "fast")
						.animate({
							opacity: "hide"
						}, "slow");

				}

				return false;

			});

		});
	</script>
</body>
<?php include('footer.php'); ?>

</html>