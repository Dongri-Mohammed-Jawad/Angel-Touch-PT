    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0;
maximum-scale=1.0; user-scalable=no" />
	<meta name="keywords" content="" />
	<meta name="description" content="Our Physical Therapists are highly trained and licensed healthcare professionals who treat not only symptoms but individuals as a whole with injuries or health related problems that limit their ability to move/perform their daily activities. " />
	<link rel="shortcut icon" href="assets/img/logo/ATPT logo.jpg" />
    <!--Core Styles-->
    <link href="assets/css/core/bootstrap.min.css" rel="stylesheet" />
    <!--External Styles-->
    <link href="assets/css/external/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/external/jquery-ui.css" rel="stylesheet" />
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

<!--    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CRaleway:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
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
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<script>
$(document).ready(function() {
    $('.appointment').keyup(function() {

        var empty = false;
        $('.appointment').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.appointment-submit').attr('disabled', 'disabled');
        } else {
            $('.appointment-submit').removeAttr('disabled');
        }
    });
});
</script>
