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

</head>

<body>

    <!-- Navigation Top_Menu -->
    <?php $this->load->view('layout/navigation')?>
    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

       <hr>
        <!-- /.row -->
        <div class="row">
                        <!-- body items -->
            <!-- load products from table -->
             <div class="col-md-12">

                <div class="panel panel-default">
                    <?php if($history != FALSE):?>
					<?= $this->session->flashdata('message')?>
					<div class="panel-heading" style="background: #F7BD41;">
						
							<h3>My History : </h3> 
                    </div>
					
                    <div class="panel-body" width="100px">
						<div class="col-md-12">
							<hr>
								<div class="col-md-1"></div>
								<div class="col-md-2">
								<h3>Invouce No.</h3>
								</div>
								<div class="col-md-2">
								<h3>Invoice Date</h3>
								</div>
								<div class="col-md-2">
								<h3>Batas Waktu</h3>
								</div>
								<div class="col-md-2">
								<h3>Total Bayar</h3>
								</div>
								<div class="col-md-3">
								<h3>Status</h3>
								</div>
								
								
								
						</div>  
						
						<?php foreach ($history as $row): ?>
						<div class="col-md-12">
							<hr>
							<div class="col-md-1"></div>
							<div class="col-md-2">
								<?= $row->id ?>
							</div>
							<div class="col-md-2">
								<?= $row->data ?>
							</div>
							<div class="col-md-2">
								<?= $row->due_date ?>
							</div>
							<div class="col-md-2">
								<?= $row->total ?>
							</div>
							<div class="col-md-3">
								
								<?php if($row->status == 'unpaid'):?>
								<code><?= $row->status ?></code>
								<?= anchor('customer/payment_confirmation/'.$row->id,'Confirn Payment',array('class'=>'btn btn-primary btn-xs')) ?>
								<?php else:?>
								 <label class="btn btn-success btn-xs active"><?= $row->status ?></label>
								<?php endif;?>
							</div>
							
							
							
						</div> 
						<?php endforeach;?>
						
						<div class="col-md-12">
							<hr>
							<div class="col-md-10">
							<hr>
							</div>
							<div class="col-md-2">
							<?=  anchor(base_url(),'Back to Home',['class'=>'btn btn-default','role'=>'button']) ?>
							</div>
						</div>
					
                    </div>
					<?php else : ?>
					<div class="panel-heading">
						
							<h3>My History :  </h3> 
                    </div>
					<div class="col-md-12">
							<hr>	
						<div class="col-md-3"></div>
						<div class="col-md-6"><h3>There Are No Shopping History For You !</h3></div>
						<div class="col-md-3"><?=  anchor(base_url(),'Shopping Now',['class'=>'btn btn-primary','role'=>'button']) ?></div>
					</div>
					<?php endif?>
                </div>
            </div>  
			
        </div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->
        <hr>

        <!-- Footer -->
        <?php $this->load->view('layout/footer')?>

    </div>
    <!-- /.container -->

    <script src="<?php echo base_url(); ?>assets/front/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/main.js"></script>

</body>

</html>
