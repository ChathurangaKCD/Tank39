<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tank39</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/contactusstyles.css" type="text/css">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic'
        rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
</head>
<body>
<?php
$logo_md = "4";
$statCounter = "";
$active_home = "";
$active_info = "";
$active_clientinfo = "";
$active_aboutus = "";
$active_contactus = " active";
include("php/headerx.php");
?>
<div class="container-fluid contact" id="section4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center portfolio-text">Contact Us</h2>

                <div class="col-md-6 col-sm-12 col-xs-12contact-form">
                    <form action="php/feedback.php" method="post" onsubmit="check_if_capcha_is_filled(e)">

                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="fullname" class="form-control" placeholder="Name" id="tswname"
                                
                                    required="required"/>
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" required="required"
                                   id=" tswemail" class="form-control"
                            placeholder="Email" name="email"/>
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-edit"></span>
                            </span>
                            <textarea rows="5" cols="30" class="form-control" placeholder="Message" name="comments"
                                      required="required"

                                      id="tswcomments"></textarea>
                        </div>
                        </br>

                        <div class="g-recaptcha" data-sitekey="6Lc6vhATAAAAAIVXW5UJ8BCKejkvXMctPxvx_1lB"  data-callback="capcha_filled"></div>
                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                        <noscript>
                            <div style="width: 302px; height: 352px;">
                                <div style="width: 302px; height: 352px; position: relative;">
                                    <div style="width: 302px; height: 352px; position: absolute;">
                                        <iframe
                                            src="https://www.google.com/recaptcha/api/fallback?hl=en&amp;k=6Lc6vhATAAAAAIVXW5UJ8BCKejkvXMctPxvx_1lB"
                                            frameborder="0" scrolling="no"
                                            style="width: 302px; height:352px; border-style: none;"
                                            title="Test for Homo Sapiens"></iframe>
                                    </div>
                                    <label for="g-recaptcha-response">Please enter the information requested into the
                                        box below</label>

                                    <div
                                        style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
          style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;"
          cols="20" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </noscript>
                        <br>
                        <input type="submit" class="btnSend" value="Send Feedback" onclick="check_if_capcha_is_filled(e)"/>
                        <br>
                    </form>
                    <div id="msgdiv" class="opinv" role="alert"><p id="msg"></p></div>
                    <br>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 address-space">
                    <div id="map-canvas"></div>
                    <div class="address">
                        <!--<h3>Address</h3>--><br/>

                        <p><i class="glyphicon glyphicon-map-marker"></i>University of Moratuwa, Katubadda, Sri Lanka
                        </p>

                        <p><i class="glyphicon glyphicon-earphone"></i>(+94) 71-3633037 | (+94) 71-6124114</p>

                        <p><i class="glyphicon glyphicon-envelope"></i>group39@outlook.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("php/footer.php"); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/lightbox.min.js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(6.796877, 79.9017781),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="js/events.js"></script>
<script>
    var recaptcha = "You need to pass the recaptcha test!";
    var success = "Thank you!";
    var empty = "Please fill all the fields!";
    var invalid = "Please check your name and email address!";
    var div = document.getElementById("msgdiv");
    var msg = document.getElementById("msg");
    function feedback(response) {
        if (response == 0) {
            div.className = "alert alert-success";
            msg.innerHTML = success;
        }
        else if (response == 1) {
            div.className = "alert alert-warning";
            msg.innerHTML = recaptcha;
        }
        else if (response == 2) {
            div.className = "alert alert-warning";
            msg.innerHTML = empty;
        }
        else {
            div.className = "alert alert-warning";
            msg.innerHTML = invalid;
        }
        div.className += " opvis";
        setTimeout(function () {
            div.className = "opinv";
            msg.innerHTML = "";
        }, 2000);
    }
</script>
<script type="text/javascript" >var submit = false;
    function capcha_filled () {
        submit = true;
    }
    function check_if_capcha_is_filled (e) {alert('Fill in the capcha!');
        if(submit) return true;
        e.preventDefault();
        alert('Fill in the capcha!');
    }
</script>
</body>
</html>
