<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['student_id'];
$m = $_POST['one'];
$x = $_POST['two'];
$y = $_POST['three'];
$z = $_POST['four'];
$xx = $_POST['five'];
$zz = $_POST['six'];
// query

$sql = "UPDATE grades 
        SET one=?, two=?, three=?, four=?, five=?, six=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($m,$x,$y,$xx,$zz,$z,$id));
header("location: students.php");

?>