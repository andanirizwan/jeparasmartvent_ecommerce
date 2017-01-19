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

<!-- Product Menu -->
<?php $this->load->view('layout/product_menu')?>


<div class="recommended_items"><!--features-->
<br><br>                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                  <?php foreach ($products as $product ) : ?> 
                                    <div class="col-sm-3">
                                    <h2 class="title text-center"><?= $product->pro_name  ?></h2>
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <?php
                                                    
                                                    $product_image =['src'  =>'assets/uploads/'.$product->pro_image,
                                                    
                                                    'class'=>'img-responsive img-portfolio img-hover',
                                                    'id'=>'g'
                                                    ];
                                                    echo img($product_image);
                                                ?>
                                                    <p id="t"> <?=  $product->pro_description  ?></p>
                       <p><code>Harga :</code> Rp. <?= $this->cart->format_number( $product->pro_price );  ?> <br><br>
                                                    <a href="<?php echo base_url(); ?>home/view/<?php echo $product->pro_id ; ?> " class="btn btn-default "><i class="fa fa-search"></i>View More</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                <?php endforeach; ?>

                                </div>
                           <!--  </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div> -->
                            

                    </div><!--/recommended_items-->
                    </div></div>


<!-- footer -->
<?php $this->load->view('layout/footer')?>



    <script src="<?php echo base_url(); ?>assets/front/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>

</body>
</html>

