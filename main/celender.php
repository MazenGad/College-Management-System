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

		#resultTable thead tr th {
			text-align: center !important;
		}

		#resultTable tbody tr td {
			text-align: center !important;
			padding: 10px 0 !important;
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
				width: 70%
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
			}
		}
	</style>
	<!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->

	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
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
				<li style="margin-bottom:10px;"><a href="index-student.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
				<li style="margin-bottom:10px;"><a href="single-student.php"><i class="icon-group icon-2x"></i> Student Profile</a> </li>
				<li style="margin-bottom:10px;" class="active"><a href="celender.php"><i class="icon-user icon-2x"></i>Subjects</a> </li>
				<li style="margin-bottom:10px;"><a href="Grades.php"><i class="icon-user icon-2x"></i> Grades</a> </li>

				<br><br>
				<li>
					<div class="hero-unit-clock">

						<form name="clock">
							<h4>Time</h4><input type="submit" class="trans" name="face" value="">
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
			<i class="icon-table"></i> Subjects
		</div>
		<ul class="breadcrumb">
			<li><a href="index-student.php">Dashboard</a></li>
			<li class="active">Subjects</li>
		</ul>


		<div style=" margin-bottom: 21px;">
			<a href="index-student.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>


			<div style="text-align:center;">
				Total Number of Subjects: <font color="green" style="font:bold 22px 'Aleo';">6</font>
			</div>


		</div>


		<!-- <a href="addstudent.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;"><i class="icon-plus-sign icon-large"></i> Add Student</button></a><br><br> -->
		<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left; margin-top:50px;">
			<thead>
				<tr>
				<th style=" background-color: #222023;" width="10%">  Subject 1 </th>
				<th style=" background-color: #222023;" width="10%">  Subject 2 </th>
				<th style=" background-color: #222023;" width="10%">  Subject 3 </th>
				<th style=" background-color: #222023;" width="10%">  Subject 4 </th>
				<th style=" background-color: #222023;"width="10%">  Subject 5 </th>
				<th style=" background-color: #222023;" width="10%">  Subject 6 </th>
				</tr>
			</thead>
			<tbody>

				<?php

				include('../connect.php');
				// session_start();
				$student_id = $_SESSION['SESS_MEMBER_ID'];
				$result = $db->prepare("SELECT * FROM student WHERE student_id='$student_id' ");
				$result->execute();
				for ($i = 0; $row = $result->fetch(); $i++) {

				?>

					<td><?php echo $row['one']; ?></td>
					<td><?php echo $row['two']; ?></td>
					<td><?php echo $row['three']; ?></td>
					<td><?php echo $row['four']; ?></td>
					<td><?php echo $row['five']; ?></td>
					<td><?php echo $row['six']; ?></td>
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