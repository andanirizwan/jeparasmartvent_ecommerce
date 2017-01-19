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

<<div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                    <?php foreach ($view_v as $product ) : ?> 
                        <div class="col-sm-5">
                            <div class="view-product">
                                <?php
                                                    
                                                    $product_image =['src'  =>'assets/uploads/'.$product->pro_image,
                                                    
                                                    'class'=>'img-responsive img-portfolio img-hover',
                                                    'id'=>'g'
                                                    ];
                                                    echo img($product_image);
                                                ?>
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                
                                  <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        
                                    </div>

                                  <!-- Controls -->
                                  <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?=  $product->pro_name ?></h2>
                                <p>Product ID: <?= $product->pro_id ?></p>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
                                    <p><code>Harga :</code> Rp. <?= $this->cart->format_number( $product->pro_price );  ?><br> 
                                    <label>Quantity:</label>
                                    <input type="text" value="<?= $product->pro_stock ?>" />
                                    <i class="fa fa-shopping-cart"><?=  anchor('home/add_to_cart/'.$product->pro_id,'Add To Cart',['class'=>'btn btn-fefault cart','role'=>'button']) ?></i>
                                        
                                    
                                </span>
                                <p>Deskripsi : <?=  $product->pro_description ?></p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    <?php endforeach; ?>

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
