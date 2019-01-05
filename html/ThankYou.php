<!DOCTYPE html>
<html>
<head>
    <title>Angel Touch Physical Therapy | Appointment</title>
    <meta name="keywords" content="" />
    <meta name="description" content="Our Physical Therapists are highly trained and licensed healthcare professionals who treat not only symptoms but individuals as a whole with injuries or health related problems that limit their ability to move/perform their daily activities." />
    <link rel="shortcut icon" href="assets/img/logo/ATPT logo.jpg" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Core Styles-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--External Styles-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="assets/css/external/jquery-ui.theme.css" rel="stylesheet" />
    <link href="assets/css/external/ytplayer.css" rel="stylesheet" />
    <link href="assets/css/external/jquery.bxslider.css" rel="stylesheet" />
    <link href="assets/css/external/yamm.css" rel="stylesheet" />
    <link href="assets/css/external/slick.css" rel="stylesheet" />
    <link href="assets/css/external/wfmi-style.css" rel="stylesheet" />
    <link href="assets/css/external/lightbox.css" rel="stylesheet" />
    <link href="assets/css/external/flexslider.css" rel="stylesheet" />
    <!--Project Styles-->
    <link href="assets/css/project/style.css" rel="stylesheet" />
    <!--Google Web Fonts-->

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php include("Header.php"); ?>
    <!-- Section Title -->
    <section id="section-title" class="bg-alternative">
        <div id="top-img-bg">
            <h3 class="text-center" style="color:white;padding-top:50px;">Your request has been sent.<br>Angel Touch will reach you soon.</h3>
        </div>
    </section>
    <!-- End Section Title -->
    <!-- Appointment -->
    <section id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Make An Appointment</h1>
                    <div class="vs-35">
                    </div>
                    <p class="text-center"></p>
                </div>
            </div>
            <div class="vs-35">   </div>
<?php include("MakeAppointment.php"); ?>
        </div>
    </section>
    <!-- End Appointment -->
	<?php include("Footer.php"); ?>
    <!-- Go Back Top-->
    <section id="go-back-top">
        <a class="scroll" href="#main-menu">
            <i class="fa fa-angle-up"></i>
        </a>
    </section>
    <!-- End Go Back Top-->
    <!--Core Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!--External Scripts-->
    <script src="assets/js/external/jquery.backstretch.min.js"></script>
    <script src="assets/js/external/jquery.countTo.js"></script>
    <script src="assets/js/external/jquery.easing.1.3.js"></script>
    <script src="assets/js/external/jquery.mb.YTPlayer.js"></script>
    <script src="assets/js/external/waypoints.min.js"></script>
    <script src="assets/js/external/jquery.bxslider.min.js"></script>
    <script src="assets/js/external/slick.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/external/lightbox-2.6.min.js"></script>
    <script src="assets/js/external/jquery.flexslider-min.js"></script>
    <!--Project Scripts-->
    <script src="assets/js/project/script.js"></script>
    <script>
        $('.basic-carousel').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5
        });
    </script>
</body>
</html>
