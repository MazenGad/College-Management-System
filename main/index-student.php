<!DOCTYPE html>
<html>

<head>
	<title>
		College System
	</title>
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
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

		#mainmain {
			width: 100%;
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

			#mainmain a {
				margin: 0 0 5px 0;
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
				width: 70%
			}

			#mainmain a {
				width: 40%;
				margin: 0;
				margin-bottom: 5px;
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
				left: 18%;
				width: 75%
			}

			#mainmain a {
				width: 26.5%;
				margin: 7px;

			}

		}
	</style>
	<!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->
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
	<?php
	require_once('auth.php');
	?>
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

	<script language="javascript" type="text/javascript">
		/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
		<!-- Begin
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
		<style>
		body{
			background-color:#edecec;
		}
	</style>
</head>

<body>
	<?php include('navfixed.php'); ?>
	<?php
	$position = $_SESSION['SESS_LAST_NAME'];
	if ($position == 'cashier') {
	?>

		<a href="../index.php">Logout</a>
	<?php
	}
	if ($position) {
	?>



		<div class="head">
			<div class="well ">
				<ul class="nav bd">
					<li class="active" style="margin-bottom:10px;"><a href="index-student.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
					<li style="margin-bottom:10px;" ><a href="single-student.php"><i class="icon-group icon-2x"></i> Student Profile</a> </li>
					<li style="margin-bottom:10px;"><a href="celender.php"><i class="icon-user icon-2x"></i> Subjects</a> </li>
					<li style="margin-bottom:10px;"><a href="Grades.php"><i class="icon-user icon-2x"></i> Grades</a> </li>

					<br><br>
					<li>
						<div class="hero-unit-clock">

							<form name="clock">
								<h4>Time </h4><input type="submit" class="trans" name="face" value="">
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
				<i class="icon-dashboard" style="margin-right:5px;"></i> Dashboard
			</div>
			<ul class="breadcrumb" style="margin-bottom:70px;">
				<li class="active">Dashboard</li>
			</ul>
			<font style="  font:bold 44px 'Aleo'; color:#657786;">
				<center >College System
				</center>
			</font>
			<div id="mainmain">

				<?php

				include('../connect.php');
				// session_start();
				$student_id = $_SESSION['SESS_MEMBER_ID'];
				$result = $db->prepare("SELECT * FROM student WHERE student_id='$student_id' ");
				$result->execute();
				for ($i = 0; $row = $result->fetch(); $i++) {

				?>

					<a href="single-viewstudent.php?id=<?php echo $row['id']; ?>"><i class="icon-group icon-2x" style="color: #5c5ce7"></i><br> Status</a>

				<?php
				}
				?>

				<a href="single-student.php"><i class="icon-user icon-2x" style="color: #5c5ce7"></i><br>Profile </a>
				<a href="../index-student.php">
					<font><i class="icon-off icon-2x" style="color:red"></i></font><br> Logout
				</a>
			<?php
		}
			?>
			<div class="clearfix"></div>
			</div>
		</div>
</body>
<?php include('footer.php'); ?>

</html>