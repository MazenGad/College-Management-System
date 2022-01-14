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

      .saveBtn {
        width: 270px;
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

      .saveBtn {
        width: 160px;
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
  /* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
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
    <div class="well ">
      <ul class="nav ">
        <li style="margin-bottom:10px; "><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
        <li style="margin-bottom:10px; "><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a> </li>
        <li style="margin-bottom:10px; "><a href="addstudent.php"><i class="icon-user icon-2x"></i>Add Student</a> </li>

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
      <i class="icon-table"></i> Students
    </div>
    <ul class="breadcrumb">
      <li><a href="index.php">Dashboard</a></li>
      <li class="active">Students</li>
    </ul>


    <div style="margin-bottom: 21px;">
      <a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
      <center><?php
              include('../connect.php');
              $id = $_GET['id'];
              $result = $db->prepare("SELECT * FROM student WHERE id= :userid");
              $result->bindParam(':userid', $id);
              $result->execute();
              for ($i = 0; $row = $result->fetch(); $i++) {
              ?>
          <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
          <form action="savedgrades.php" method="post" enctype="multipart/form-data">
            <center>
              <h4><i class="icon-edit icon-large"></i> Add Grades</h4>
            </center>
            <hr>
            <div id="ac">
              <input type="hidden" name="memi" value="<?php echo $id; ?>" />
              <span style="  font-weight: 800;">Reg No. : </span><input type="text" style="width:265px; height:30px;" name="student_id" value="<?php echo $row['student_id']; ?>" readonly Required /><br>
              <span style="  font-weight: 800;">First Name : </span><input type="text" style="width:265px; height:30px;" name="name" value="<?php echo $row['name']; ?>" readonly Required /><br>
              <span style="  font-weight: 800;">Last Name : </span><input type="text" style="width:265px; height:30px;" name="last_name" value="<?php echo $row['last_name']; ?>" readonly Required /><br>
              <span style="  font-weight: 800;"><?php echo $row['one']; ?> : </span><input type="text" style="width:265px; height:30px;" name="one" value="" /><br>
              <span style="  font-weight: 800;"><?php echo $row['two']; ?> : </span><input type="text" style="width:265px; height:30px;" name="two" value="" /><br>
              <span style="  font-weight: 800;"><?php echo $row['three']; ?> : </span><input type="text" style="width:265px; height:30px;" name="three" value="" /><br>
              <span style="  font-weight: 800;"><?php echo $row['four']; ?> : </span><input type="text" style="width:265px; height:30px;" name="four" value="" /><br>
              <span style="  font-weight: 800;"><?php echo $row['five']; ?> : </span><input type="text" style="width:265px; height:30px;" name="five" value="" /><br>
              <span style="  font-weight: 800;"><?php echo $row['six']; ?> : </span><input type="text" style="width:265px; height:30px;" name="six" value="" /><br>

              <div class="saveBtn">

                <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
              </div>
            </div>
          </form>
        <?php
              }
        ?>
      </center>

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