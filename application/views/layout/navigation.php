<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/front/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
							<?php if ($this->session->userdata('username')): ?>
							<li>
								<a href="<?php echo base_url(); ?>logout"><i class="fa fa-lock"></i> Keluar</a>
								<?php else:?>
							</li>
							<li>
							<a href="<?php echo base_url(); ?>login"><i class="fa fa-lock"></i> Masuk</a>
								<?php endif;?>
							</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"> <?php echo $this->session->userdata('username'); ?></i> <b class="caret"> </b></a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo base_url(); ?>customer/payment_confirmation">Informasi pembayaran</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>customer/shopping_history"> Shopping History</a>
										</li>
									</ul>
							</li>
								<?php  if($this->session->userdata('group')	!=	'1'  and $this->session->userdata('group')	!=	'2' ): ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"> </i> <?= $this->cart->total_items(); ?>  <b class="caret"> </b></a>
								<ul class="dropdown-menu">
								
									<li>
										<?php
											$url_cart	 = 'Keranjang ';
											$url_cart	.=$this->cart->total_items().' <i class="fa fa-shopping-cart"></i></a>';
										?>
										<?= anchor('home/cart',$url_cart); ?>
										
									</li>
									<li>
											<?php
											$url_order	 = 'Check Out';
											$url_order	.=' <i class="fa fa-cc-paypal"></i> '.' <i class="fa fa-credit-card"></i> '.' <i class="fa fa-cc-visa"></i></a> ';
											?>
											<?php if  ($this->cart->total_items()!=0):?>
											<?= anchor('order',$url_order); ?>
											<?php else:?>
											<?= anchor(base_url(),$url_order); ?>
											<?php endif ;?>
									</li>
								</ul>
							</li>
							
							
							<?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->


