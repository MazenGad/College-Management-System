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
        body {
            padding-top: 60px;
            padding-bottom: 10px;
        }

        .sidebar-nav {
            padding: 9px 0;
            background-color: green;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 0px;
        }

        .item2 {
            background-color: #657786;
            padding: 50px;
            border-radius: 30px;
            color: #ffffff;
        }

        .table tr {
            border-top: 2px solid #fafafa;
            color: #000000;
        }

        .table tr td {

            color: #000000;
        }

        /* .item1 {
  grid-row-start: 1;
  grid-row-end: 2;
} */
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
    <!--sa poip up-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

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
    // Begin
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
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li><a href="index-student.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
                        <li class="active"><a href="single-student.php"><i class="icon-group icon-2x"></i>Student Profile</a> </li>
                        <li><a href="index-student.php"><i class="icon-group icon-2x"></i>Main Menu</a> </li>
                        <li><a href="#"><i class="icon-group icon-2x"></i>Status</a> </li>


                        <br><br>
                        <li>
                            <div class="hero-unit-clock">

                                <form name="clock">
                                    <font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
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
                    <li><a href="index-student.php">Dashboard</a></li>
                    <li class="active">Students</li>
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="index-student.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

                    <?php
                    include('../connect.php');
                    $id = $_GET['id'];
                    $result = $db->prepare("SELECT * FROM student WHERE id= :userid");
                    $result->bindParam(':userid', $id);
                    $result->execute();
                    for ($i = 0; $row = $result->fetch(); $i++) {
                    ?>
                        <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
                        <center>
                            <h4><i class="icon-edit icon-large"></i> Student Information</h4>
                        </center>
                        <hr>

                        <div class="item2" style="margin: auto;  padding:70px;">
                            <center>
                                <img src="../uploads/<?php echo $row['file']; ?>" class="roundimage2" alt="" />
                                <br><br>

                                <table class="table">
                                    <tr>
                                        <td> Student ID. : </td>
                                        <td style="padding: 10px 50px 10px 50px;  
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['student_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> Full Name : </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['name']; ?> <?php echo $row['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> Gender: </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> D.O.B: </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['dob']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> Admission Year : </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['yoa']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> Parent Phone: </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['parent']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> Report : </td>
                                        <td style="padding: 10px 50px 10px 50px;
				border-top: 1px solid #fafafa;
	
				text-align: center;"> <?php echo $row['report']; ?></td>
                                    </tr>


                                </table>
                            </center>
                            <br>

                        </div>

                </div>
            </div>
        <?php
                    }
        ?>

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