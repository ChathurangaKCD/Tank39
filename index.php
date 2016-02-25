<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tank39</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/countDown.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic'
          rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
$logo_md="4";
$statCounter="            <div class=\"col-md-2\">
                <div class=\"navbar-header\"><br/>
                    <a><span class=\"badge\">Visitor Count
                     <script src=\"js/statCounter.js\"></script>
                    <noscript>
                        <div class=\"statcounter\"><a></a></div>
                    </noscript>
                </span></a><br>
                </div>
            </div>";
$active_home = " active";
$active_info = "";
$active_clientinfo = "";
$active_aboutus = "";
$active_contactus = "";
include("php/headerx.php");
?>

<div class="container-fluid main" id="page-top">
    <div class="row">
        <div class="col-md-12 backg">
            <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                <div class="text-box">
                    <div><h1>Launch in</h1>
                    </div>
                    <div class="text-box">
                        <ul class="countdown">
                            <li><span class="days">00</span>

                                <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">.</li>
                            <li><span class="hours">00</span>

                                <p class="hours_ref">hours</p>
                            </li>
                            <li class="seperator">:</li>
                            <li><span class="minutes">00</span>

                                <p class="minutes_ref">minutes</p>
                            </li>
                            <li class="seperator">:</li>
                            <li><span class="seconds">00</span>

                                <p class="seconds_ref">seconds</p>
                            </li>
                        </ul>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.downCount.js"></script>
    <script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '05/03/2016 9:00:00',
            offset: +10
        }, function () {
            alert('Already launched!');
        });
    </script>
    <script src="js/events.js"></script>
</body>
</html>
