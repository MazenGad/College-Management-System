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

    <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

    <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
        body {
            background-color: #ffffff;
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }

        #login {
            background-color: green;
            color: #ffffff;
            padding: 60px;
        }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

    <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">
            </div>



            <div id="login">

                <?php
                if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
                    foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                        echo '<div style="color: red; text-align: center;">', $msg, '</div><br>';
                    }
                    unset($_SESSION['ERRMSG_ARR']);
                }
                ?>
                <form action="login.php" method="POST">

                    <font style=" font:bold 44px 'Aleo'; color: #ffffff;">
                        <center>Admin Login</center>
                    </font>
                    <br>


                    <div class="input-prepend">
                        <input style="height:40px;" type="text" name="username" Placeholder="Username" required /><br>
                    </div>
                    <div class="input-prepend">
                        <input type="password" style="height:40px;" name="password" Placeholder="Password" required /><br>
                    </div>
                    <div class="qwe">
                        <button class="btn btn-large btn-primary btn-block pull-right" name="submit" href="dashboard.html" type="submit"><i class="icon-signin icon-large"></i> Login</button>
                        <br>
                        <br>
                        <div style="text-align: center; color: #000000; font-size: 18px; font-weight: 400px ">
                            <a href="index-student.php" style="text-decoration: none; color: #ffffff"> click here to login as a student.. </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>