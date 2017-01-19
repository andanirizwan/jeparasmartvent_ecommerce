<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment Confirmation </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
						<div class="panel-heading" style="background: #F7BD41;">
								<h3>Konfirmasi Pembayaran :</h3>  
						</div>
						<div class="panel-body" width="100px">
							<div class="col-md-12">
								<div class="col-md-3"><?= validation_errors() ?>
													  <?= $this->session->flashdata('error') ?>
								</div>
								
							<div class="col-md-6">
							<?= form_open('customer/payment_confirmation/') ?>
								<div class="form-group">
									<label for="invoice_input">Invoice id : </label>
									<input type="text" class="form-control" name="invoice_id_input" value=<?=( $invoice_id != 0 ? $invoice_id:'')?> >
								</div>
                                <div class="form-group">
                                    <label for="invoice_input">No rekening : </label>
                                    <input type="text" class="form-control" name="no_rek_input" >
                                </div>
                                <div class="form-group">
                                    <label for="invoice_input">Jenis bank : </label>
                                    <select name="jenis_bank_input" class="form-control">
                                        <option >== piih Jenis bank ==</option>
                                        <option value="bri">BRI</option>
                                        <option value="mandiri">MANDIRI</option>
                                        <option value="bca">BCA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="invoice_input">tanggal transfer : </label>
                                    <input type="date" class="form-control" name="tgl_transfer_input" >
                                </div>
								<div class="form-group">
									<label for="amount">Total Transfer : </label>
									<input type="text" class="form-control" name="amount_input" >
								</div>
								<div class="form-group">
								<div class="col-md-2"></div>
								<div class="col-md-7">
									<button type="submit" class="btn btn-success">Confirm My Payment</button>
									<?=  anchor(base_url(),'Cancel',['class'=>'btn']) ?>
									
									</div>
								<div class="col-md-3">
									<?=  anchor('customer/shopping_history','Back to history',['class'=>'btn btn-default']) ?>
								</div>
								</div>
							<?= form_close() ?>
							</div>
							<div class="col-md-3"></div>
									
									
									
									
							</div>  
							
							
					</div>
					</div>  
			
			</div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->
		</div>

        <!-- Footer -->
        <?php $this->load->view('layout/footer')?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
