<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['last_name'];
$s = $_POST['Year'];
$m = $_POST['one'];
$x = $_POST['two'];
$y = $_POST['three'];
$z = $_POST['four'];
$xx = $_POST['five'];
$zz = $_POST['six'];

// query

$sql = "UPDATE student 
        SET name=?,last_name=?, Year=? ,one=?, two=?, three=?, four=?, five=?, six=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$s,$m,$x,$y,$z,$xx,$zz,$id ));
header("location: students.php");

?>