<?php
include_once("connection-pdo.php");

$sql = "SELECT * FROM `profile` ";
$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_trade = $query->fetchAll(PDO::FETCH_ASSOC);
$slno=1;
$html='';
foreach($arr_trade as $val)                  
{
    $roll=$val['roll'];
    $regno=$val['regno'];
    $fname=$val['fname'];
    $mname=$val['mname'];
    $lname=$val['lname'];
    $dob=$val['dob'];
    $bgrp=$val['bgrp'];
    $sex=$val['sex'];
    $sname=$val['sname'];
    $percent=$val['percent'];
    $ssname=$val['ssname'];
    $spercent=$val['spercent'];
    $course=$val['course'];
    $stream=$val['stream'];
    $semester=$val['semester'];
    $phno=$val['phno'];
    $email=$val['email'];
    $address=$val['address'];

    $html.='<tr>
    <td><b>University Roll Number<b></td>
    <td>'.$roll.'</td>
</tr>
<tr>
    <td><b>Registration Number<b></td>
    <td>'.$regno.'</td>
</tr>
<tr>
    <td><b>Name<b></td>
    <td>'.$fname.' '.$mname.' '.$lname.'</td>
</tr>
<tr>
    <td><b>Date Of Birth<b></td>
    <td>'.$dob.'</td>
</tr>
<tr>
    <td><b>Blood Group<b></td>
    <td>'.$bgrp.'</td>
</tr>
<tr>
    <td><b>Sex<b></td>
    <td>'.$sex.'</td>
</tr>
<tr>
    <td><b>Secondary Education(School Name)<b></td>
    <td>'.$sname.'</td>
</tr>
<tr>
    <td><b>Secondary Education(Percentage Obtained)<b></td>
    <td>'.$percent.'%</td>
</tr>
<tr>
    <td><b>Senior Secondary Education(School Name)<b></td>
    <td>'.$ssname.'</td>
</tr>
<tr>
    <td><b>Senior Secondary Education(Percentage Obtained)<b></td>
    <td>'.$spercent.'%</td>
</tr>
<tr>
    <td><b>Course<b></td>
    <td>'.$course.'</td>
</tr>
<tr>
    <td><b>Stream<b></td>
    <td>'.$stream.'</td>
</tr>
<tr>
    <td><b>Semester<b></td>
    <td>'.$semester.'</td>
</tr>
<tr>
    <td><b>Contact Number<b></td>
    <td>'.$phno.'</td>
</tr>
<tr>
    <td><b>Email Id<b></td>
    <td>'.$email.'</td>
</tr>
<tr>
    <td><b>Address<b></td>
    <td>'.$address.'</td>
</tr>';

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/aa.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>My Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    student name
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home.html">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="profile.html">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="pe-7s-date"></i>
                        <p>Academic Calendar</p>
                    </a>
                </li>
                <li>
                    <a href="timetable.html">
                        <i class="pe-7s-clock"></i>
                        <p>Time Table</p>
                    </a>
                </li>
                <li>
                    <a href="syllabus.html">
                        <i class="pe-7s-note2"></i>
                        <p>Course Syllabus</p>
                    </a>
                </li>
                <li>
                    <a href="schedule.html">
                        <i class="pe-7s-hourglass"></i>
                        <p>Exam Schedule</p>
                    </a>
                </li>
                <li>
                    <a href="notes.html">
                        <i class="pe-7s-note"></i>
                        <p>Notes And Assignments</p>
                    </a>
                </li>
                <li>
                    <a href="results.html">
                        <i class="pe-7s-study"></i>
                        <p>RESULTS</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="../login.php">
                        <i class="pe-7s-power"></i>
                        <p>LOGOUT</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">My Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">   
                                    <p>
										Settings
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="edit.html">Edit Profile</a></li>
                                <li><a href="password.html">Change Password</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../login.php">
                                <p> Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        <?php echo $html ; ?>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; All Right Reserved. Designed by <a href="https://www.facebook.com/swapnil.kishore.5" rel="nofollow">Swapnil Kishore</a></p>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
