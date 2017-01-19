<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JSE | Jepara Smart Event</title>
    <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/front/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/front/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/front/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-envelope"></i> jse.info@gmeil.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

<!-- Navigation Top_Menu -->
<?php $this->load->view('layout/navigation')?>



<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <?= $this->session->flashdata('error') ?>
                        <?= form_open('login') ?>
                            <input type="text" placeholder="Name"  name="username" />
                            <?php echo form_error('username'); ?>
                            <input type="password" placeholder="password" name="password" />
                            <?php echo form_error('password'); ?>
                            <span>
                                <input type="checkbox" class="checkbox"> 
                                Keep me signed in
                            </span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <?= $this->session->flashdata('error_r') ?>
                        <?= form_open('register') ?>
                            <input type="text" placeholder="Name" name="rusername" />
                            <?php echo form_error('rusername'); ?>
                            <input type="email" placeholder="Email Address" name="remail" />
                            <input type="password" placeholder="Password" name="rpassword" />
                            <?php echo form_error('rpassword'); ?>
                            <input type="password" placeholder="Password" name="repassword" />
                            <?php echo form_error('repassword'); ?>
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->



    <script src="<?php echo base_url(); ?>assets/front/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>

</body>
</html>

