<!DOCTYPE HTML>
<html>
<head>
    <title>Code School| Sample title</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
<!-- header -->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="head-left">
                <ul class="number">
                    <li><span><i class="phone"> </i>+0123 456 789</span></li>
                    <li><a href="mailto:info@example.com"><i class="mail"> </i>hello@address.com</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>



            <div class="head-right">
                <ul>
                    <li><a href="#"><i class="fb"> </i></a></li>
                    <li><a href="#"><i class="twt"> </i></a></li>
                    <li><a href="#"><i class="ttt"> </i></a></li>
                    <li><a href="#"><i class="ve"> </i></a></li>
                    <li><a href="#"><i class="in"> </i></a></li>
                    <li><a href="#"><i class="dib"> </i></a></li>
                    <li><a href="#"><i class="fli"> </i></a></li>
                    <li><a href="#"><i class="rss"> </i></a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>

            <div class="header-right1">

                <?php if($this->session->userdata('userID')) {
                    echo "<li> <a href='".base_url('logout')."'>Logout</a> </li>";
                } else { ?>

                <li><a href="<?php echo base_url('temple') ?>">Temple | Login/ Registration</a></li>
                <li><a href="<?php echo base_url('club') ?>">Club | Login/Registration</a></li>

                <?php } ?>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="<?php echo base_url('home'); ?>"><img style="width: 43%" src="<?php echo base_url();?>assets/images/logo.png" class="img-responsive" alt=""></a>
            </div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul class="cl-effect-3">
                    <li class="active"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                    <li><a href=" about.html">About us</a></li>
                    <!--<li><a href=" employeers.html">Temple </a></li>-->
                    <!--<li><a href=" 404.html">Job Seekers </a></li>-->
                    <!--<li><a href=" blog.html">Club</a></li>-->
                    <li><a href="#">Contact</a></li>
                    <div class="clearfix"> </div>

                </ul>
                <!-- script-for-nav -->
                <script>
                    $( "span.menu" ).click(function() {
                        $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script-for-nav -->
            </div>
<!--            <div class="header-right1">-->
<!--                <li><a href="--><?php //echo base_url('index.php/temple') ?><!--">Temple | Login/ Registration</a></li>-->
<!--                <li><a href="--><?php //echo base_url('index.php/club') ?><!--">Club | Login/Registration</a></li>-->
<!--            </div>-->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header -->