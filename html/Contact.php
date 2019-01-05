<!DOCTYPE html>
<html>
<head>
    <title>Angel Touch Physical Therapy | Contact Us</title>
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
            <h1 class="text-center">Contact</h1>
        </div>
    </section>
    <!-- End Section Title -->
    <!-- Contact -->
    <section id="contact" class="bg-alternative">
        <div class="contact-wrapper">
            <!-- Seperator -->
            <section id="seperator1" class="seperator">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="font-icon">
                                <h1 class="text-center color-text"><i class="fa fa-map-o"></i> &nbsp; Contact</h1>
						  <p style="font-size:17px;">“We are conveniently located at 341 N Central Ave, Valley Stream, NY, 11580<br>
THE N1 BUS WILL DROP YOU RIGHT INFRONT OF OUR OFFICE!”</p>
                            </div>
<!--                            <div class="vs-25"></div>
                            <div class="seperator-text">
                                <p> </p>
                            </div>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Seperator -->
            <section id="contact-details">

                <div class="container pt-0">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="contact-map">

<!--                                <div class="embed-responsive embed-responsive-16by9 ">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12042.38341328123!2d28.962356227081358!3d41.01221819455958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9eb9d587135%3A0x8aa0bb6b1dd6ffb7!2zRW1pbsO2bsO8LCBSw7xzdGVtIFBhxZ9hLCAzNDExNiBGYXRpaC_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1464594595424" width="800" height="445" style="border:0; pointer-events:none" allowfullscreen class="embed-responsive-item "></iframe>
                                </div>-->
						  <?php include("Location.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-details-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contact-details">
                                    <h3 class="color-text">Contact Details</h3>
                                    <p></p>
                                    <div class="company-meta">
                                        <div class="width-half">
                                            <h3>
                                                <span>
                                                    <i class="fa fa-map-marker"></i>
                                                </span> Our Offices
                                            </h3>
                                            <p>
										<a href='Contact.php#map'>341 N Central Ave, <br>
										Valley Stream, <br>
										New York 11580</a>
                                            </p>
                                            
                                        </div>
                                        <div class="width-half">
                                            <h3>
                                                <span>
                                                    <i class="fa fa-comment-o"></i>
                                                </span> Contact Info
                                            </h3>
                                            <p>
                                                <abbr>Email:</abbr><a href="mailto:angeltouchphysicaltherapy@gmail.com" class="link"> angeltouchphysicaltherapy@gmail.com</a>
                                            </p>
                                            <p>
                                                <abbr>Tel:</abbr> +1 516-568-7619
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contact-form">
                                    <h3 class="color-text">Contact Form</h3>
                                    <p></p>
                                    <!-- Contact Form -->
                                    <form id="contact-form" method="post" action="ContactSendMail.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input id="contact-name" class="form-control" name="ContactName" required="" placeholder="Name" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input id="contact-email" class="form-control" name="ContactEmail" required="" placeholder="Email" type="email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input id="contact-subject" name="ContactSubject" class="form-control" required="" placeholder="Subject" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <textarea id="contact-message" class="form-control" name="ContactMessage" rows="6" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" name="ContactSubmit" class="btn btn-normal btn-block" id="contact-send"><i class="fa fa-envelope-o fa-2x"></i> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <!-- End Contact Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </section>
    <!-- End Contact -->
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
    <!--Project Scripts-->
    <script src="assets/js/project/script.js"></script>

</body>
</html>
