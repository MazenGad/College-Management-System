<?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>
<html>

<head>
	<title>
		College System
	</title>
	<link rel="shortcut icon" href="main/images/pos.jpg">
	<link rel="stylesheet" href="main/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
	<link rel="stylesheet" href="main/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />

	<style type="text/css">
		* {
			-ms-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			border: 0;
		}

		html,
		body {
			width: 100%;
			background-image: url("./main/img/students.jpg");
			background-size: cover;
			font-family: "Open Sans", sans-serif;
			font-weight: 200;
			position: relative;
		}

		.overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			background-color: rgba(0, 0, 0, .5);
		}

		.login {
			position: relative;
			top: 50%;
			width: 350px;
			display: table;
			margin: -150px auto 0 auto;
			background: #fff;
			border-radius: 4px;
		}

		.legend {
			position: relative;
			width: 100%;
			display: block;
			background: #ff7052;
			padding: 15px;
			padding-left: 33px;
			color: #fff;
			font-size: 20px;
			border-radius: 4px 4px 0 0;

		}

		.legend:after {
			content: "";
			background-image: url(http://simpleicon.com/wp-content/uploads/multy-user.png);
			background-size: 100px 100px;
			background-repeat: no-repeat;
			background-position: 200px -16px;
			opacity: 0.06;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
		}

		.input {
			position: relative;
			width: 90%;
			margin: 15px auto;
		}

		.input span {
			position: absolute;
			display: block;
			color: #d4d4d4;
			left: 10px;
			top: 10px;
			font-size: 20px;
			transition: .3s;

		}

		.input input {
			width: 100%;
			padding: 18px 5px 15px 40px;
			display: block;
			border: 1px solid #ededed;
			border-radius: 4px;
			transition: 0.2s ease-out;
			color: #a1a1a1;
		}

		.input input:focus {
			padding: 18px 5px 15px 10px;
			outline: 0;
			border-color: #ff7052;
		}

		.students {
			width: 95%;
			text-align: right;
		}

		.students a {
			cursor: pointer;
			text-decoration: none;
			
		}

		.submit {
			width: 45px;
			height: 45px;
			display: block;
			margin: 0 auto -15px auto;
			background: #fff;
			border-radius: 100%;
			border: 1px solid #ff7052;
			color: #ff7052;
			font-size: 24px;
			cursor: pointer;
			box-shadow: 0px 0px 0px 7px #fff;
			transition: 0.2s ease-out;
		}

		.submit:hover,
		.submit:focus {
			background: #ff7052;
			color: #fff;
			outline: 0;
		}
	</style>
	<script>
		window.onload = function() {
			let ipt = document.querySelectorAll("input")
			let iptSpn = document.querySelectorAll(".input span")
			let lgn = document.querySelector(".login")
			let sbmt = document.querySelector(".submit")
			let icn = document.querySelector(".submit i")

			ipt.forEach(e => {
				e.addEventListener("focus", function(e) {
					iptSpn.forEach(e => {
						e.style.opacity = "0"
					})

				});
				e.addEventListener("blur", function(e) {
					iptSpn.forEach(e => {
						e.style.opacity = "1"
					})
				})
			})
			setTimeout((e) => {
				lgn.onsubmit = function() {
					icn.classList.remove("fa-long-arrow-alt-right")
					icn.classList.add("fa-check")
					icn.style.color = "#fff"
					sbmt.style.backgroundColor = "#2ecc71"
					sbmt.style.borderColor = "#2ecc71"
				}
			}, 1000);
		}
	</script>
</head>

<body>
	<div class="overlay"></div>
	<?php
	if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
		foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<div style="color: red; text-align: center;">', $msg, '</div><br>';
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
	?>
	<form class="login" action="login.php" method="POST">
		<fieldset>
			<legend class="legend">Admin Login</legend>

			<div class="input">
				<input type="text" name="username" placeholder="Username" required />
				<span><i class="far fa-envelope"></i></span>
			</div>

			<div class="input">
				<input type="password" name="password" placeholder="Password" required />
				<span><i class="fa fa-lock"></i></span>
			</div>
			<div class="students">
				<a href="index-student.php">Student Login</a>
			</div>


			<button type="submit" name="submit" href="dashboard.html" class="submit"><i class="fas fa-long-arrow-alt-right"></i></button>
		</fieldset>
	</form>
</body>

</html>