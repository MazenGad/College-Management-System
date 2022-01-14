<?php
session_start();
include('../connect.php');
$pp = $_POST['pass'];
$a = $_POST['name'];
$k = $_POST['last_name'];
$s = $_POST['Year'];
$b = $_POST['report'];
$c = $_POST['yoa'];
$d = $_POST['parent'];
$e = $_POST['dob'];
$f = $_POST['student_id'];
$g = $_POST['gender'];
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;




    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
  //do your write to the database filename and other details   
  $sql = "INSERT INTO student (pass,name,last_name,Year,report,yoa,parent,dob,student_id,gender,file) VALUES (:pp,:a,:k,:s,:b,:c,:d,:e,:f,:g,:h)";
  $q = $db->prepare($sql);
  $q->execute(array(':pp'=>$pp,':a'=>$a,':k'=>$k,':s'=>$s,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$file_name_new  ));
  header("location: students.php");

  $sql = "INSERT INTO grades (id) VALUES (:f)";
$q = $db->prepare($sql);
$q->execute(array(':f'=>$f));
header("location: students.php");
      }
  
 

//  /* check if the file uploaded successfully */
//  if(@move_uploaded_file($_FILES['file1']['tmp_name1'], $path1)) {

//   //do your write to the database filename and other details   
// $sql = "INSERT INTO student (name,last_name,report,yoa,parent,dob,student_id,gender,file1) VALUES (:a,:k,:b,:c,:d,:e,:f,:g,:i)";
// $q = $db->prepare($sql);
// $q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':i'=>$file_name_new1));
// header("location: students.php");

//   }
