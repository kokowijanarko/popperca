<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Konfirmasi Pembayaran</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/theme/lavoro/img/favicon.ico">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/bootstrap.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/owl.theme.css">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/owl.transitions.css">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/font-awesome.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/fonts/font-icon.css">
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/animate.css">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/meanmenu.min.css">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/normalize.css">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/main.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/responsive.css">
        
		<!-- table CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-table.css">
        
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/vendor/modernizr-2.8.3.min.js"></script>
		
		<style>
			.hide{
				visibility : hidden
			};
		</style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		<?php $this->load->view('user/components/header')?>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<!-- header area end -->
		<!-- breadcrumbs area start 
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Checkout</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- START MAIN CONTAINER -->
		<div class="main-container">
			<div class="product-cart">
				<div class="container">		
					<div class="row">
						<div class="checkout-content">	
							<div class="col-md-9 check-out-blok">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div id="cart_information" class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#billingInformation" aria-expanded="false" aria-controls="billingInformation">
													<span> </span> Konfirmasi Pembelian
												</a>
											</h4>
										</div>
										<div id="billingInformation" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
											<div class="content-info">
												<div class="col-md-12">	
													<div class="col-md-6">
														<p>
															<h6>Upload Bukti Pembayaran</h6>
															<form action="<?php echo site_url('user/invoice/upload_file_conf'); ?>" method="POST" enctype="multipart/form-data">
																<input type="hidden" name="inv_id" value="<?php echo $inv_id; ?>">
																<table >
																	<tr>
																		<td width="80px">Gambar</td>
																		<td width="10px">:</td>
																		<td><input id="file_upload" class="input-file" type="file" name="inv_file"></td>
																	</tr>
																	<tr>
																		<td width="100px"></td>
																		<td width="10px"></td>
																		<td><i>(tipe file: jpg, png)</i></td>
																	</tr>
																</table>
																<input type="submit" value="Upload">
															</form>
														</p>
													</div>													
												</div>
											</div>
										</div>
									</div>									
								</div>
							</div>	
						</div>
						<!--
						<div class="col-md-3 category-checkout">
							<h5>YOUR CHECKOUT PROGRESS</h5>
							<ul>
								<li><a href="#" class="link-hover">Billing address</a></li>
								<li><a href="#" class="link-hover">Shipping address</a></li>
								<li><a href="#" class="link-hover">shipping method</a></li>
								<li><a href="#" class="link-hover">payment methor</a></li>
							</ul>
						</div>
						-->
					</div>
					<!-- div.info-section -->	
				</div>
				<!-- Checkout Container -->
				<div class="clearfix"></div>
			</div><!-- product-cart -->
		</div>
		<!-- END MAIN CONTAINER -->
		<div class="clearfix"></div>
		<!-- FOOTER START -->
		<?php $this->load->view('user/components/footer')?>
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/vendor/jquery-1.11.3.min.js"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/bootstrap.min.js"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/owl.carousel.min.js"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/price-slider.js"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="<?php echo base_url()?>assets/theme/lavoro/js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/jquery.bxslider.min.js"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="<?php echo base_url()?>assets/theme/lavoro/js/jquery.meanmenu.js"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/jquery.scrollUp.min.js"></script>
        
   		<!-- wow js
		============================================ -->       
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/wow.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/main.js"></script>
		
		<!-- number js
		============================================ -->         
        <script src="<?php echo base_url();?>assets/js/jquery.number.js"></script>        
		
		<script>
			jQuery(function($) {				
			})
		</script>
    </body>

</html>