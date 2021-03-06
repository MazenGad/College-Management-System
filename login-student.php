<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect('localhost','root','');
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}
	
	//Select database
	$db = mysqli_select_db($link, 'model');
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	// function clean($str) {
	// 	$str = @trim($str);
	// 	if(get_magic_quotes_gpc()) {
	// 		$str = stripslashes($str);
	// 	}
	// 	return mysqli_real_escape_string($str);
	// }
	
	//Sanitize the POST values
	if(isset($_POST['submit1'])){
		$student_id = $_POST['student_id'];
		$pass = $_POST['pass'];

		//Input Validations
	if($student_id == '') {
		$errmsg_arr[] = 'id number is not correct';
		$errflag = true;
	}
	// if($password == '') {
	// 	$errmsg_arr[] = 'Password missing';
	// 	$errflag = true;

	// }

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index-student.php");
		exit();
	}
	}
		
	//Create query
	$qry="SELECT * FROM student WHERE student_id='$student_id' AND pass='$pass' ";
	$result=mysqli_query($link, $qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['student_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['last_name'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			// header("location: main/single-student.php");
			header("location: main/index-student.php");
			exit();
		}else {
			//Login failed
			header("location: index-student.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>