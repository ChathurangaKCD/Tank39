<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-<?php echo $logo_md; ?> ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="glyphicon glyphicon-align-justify"></span>
                        <!--span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span-- class="icon-bar"></span-->
                    </button>
                    <!--<a class="navbar-brand logo" href="#">Group39</a>-->
                    <a> <img src="images/logo.png" alt="Group39" style="width:60px;height:60px"></a>
                    <a></a>
                    <a><span class="badge">Visitor Count
                     <script src="js/statCounter.js"></script>
                    <noscript>
                        <div class="statcounter"><a></a></div>
                    </noscript>
                </span></a>
                </div>
            </div>
            <!--?php echo $statCounter; ?-->
            <div class="col-md-8">
                <nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
                    <ul class="nav navbar-nav navbar-right menu">
                        <li><a href="index.php" class="page-scroll<?php echo $active_home; ?>">Home</a></li>
                        <li><a href="info.php" class="page-scroll<?php echo $active_info; ?>">Game Info</a></li>
                        <li><a href="clientinfo.php" class="page-scroll<?php echo $active_clientinfo; ?>">About
                                Tank39</a></li>
                        <li><a href="aboutus.php" class="page-scroll<?php echo $active_aboutus; ?>">About Us</a></li>
                        <li><a href="contactus.php" class="page-scroll<?php echo $active_contactus; ?>">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>