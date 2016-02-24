<?php
/**
 * Created by PhpStorm.
 * User: chath
 * Date: 11/22/2015
 * Time: 12:12 PM
 */ ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a> <img src="images/logo.png" alt="Group39" style="width:60px;height:60px"></a>
            <a><span class="badge">Visitor Count
                     <script src="js/statCounter.js"></script>
                    <noscript>
                        <div class="statcounter"><a></a></div>
                    </noscript>
                </span></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="<?php echo $active_home; ?>">Home</a></li>
                    <li><a href="info.php" class="<?php echo $active_info; ?>">Game Info</a></li>
                    <li><a href="clientinfo.php" class="<?php echo $active_clientinfo; ?>">About
                            Tank39</a></li>
                    <li><a href="aboutus.php" class="<?php echo $active_aboutus; ?>">About Us</a></li>
                    <li><a href="contactus.php" class="<?php echo $active_contactus; ?>">Contact Us</a>
                </ul>
            </div>
        </div>
    </div>
</nav>