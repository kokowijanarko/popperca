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
        <title>Checkout</title>
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
        
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/vendor/modernizr-2.8.3.min.js"></script>
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
									<div class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#checkoutMethod" aria-expanded="true" aria-controls="checkoutMethod">
													<span>1</span> Check Account
												</a>
											</h4>
										</div>
										<div id="checkoutMethod" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="content-info">
												<div class="col-md-6">
													<div class="checkout-login">
															<div class="checkTitle">
																<h2 class="ct-design">Login</h2>
															</div>
														<p class="alrdyReg">Already registered?</p>
														<p class="plxLogin">Please log in below:</p>
														<div class="loginFrom">
															<p class="plxLoginP"><span>*</span> Email Address</p>
															<input type="text"><br>
															<p class="plxLoginP"><span>*</span> Password</p>
															<input type="text">
															<p class="plxrequired"><span>*</span> Required Field</p>
															<!--<p class="fgetpass">Forgot your password ?</p>-->
														</div>
														<a href="#" style="float:left" class="checkPageBtn">Login</a>
														<a href="#" class="checkPageBtn">Register</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#billingInformation" aria-expanded="false" aria-controls="billingInformation">
													<span>2</span> Billing Information
												</a>
											</h4>
										</div>
										<div id="billingInformation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="content-info">
												<div class="col-md-12">
													<div>Sample Content</div>
													<p>Nunc Facilisis Sagittis Ullamcorper. Proin Lectus Ipsum, Gravida Et Mattis Vulputate, Tristique Ut Lectus. Sed Et Lorem Nunc.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#shippingMethod" aria-expanded="false" aria-controls="shippingMethod">
													<span>3</span> Shipping Method
												</a>
											</h4>
										</div>
										<div id="shippingMethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="content-info">
												<div class="col-md-12">
													<div>Sample Content</div>
													<p>Nunc Facilisis Sagittis Ullamcorper. Proin Lectus Ipsum, Gravida Et Mattis Vulputate, Tristique Ut Lectus. Sed Et Lorem Nunc.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingFour">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#paymentInformation" aria-expanded="false" aria-controls="paymentInformation">
													<span>4</span> Payment Information
												</a>
											</h4>
										</div>
										<div id="paymentInformation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="content-info">
												<div class="col-md-12">
													<div>Sample Content</div>
													<p>Nunc Facilisis Sagittis Ullamcorper. Proin Lectus Ipsum, Gravida Et Mattis Vulputate, Tristique Ut Lectus. Sed Et Lorem Nunc.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="panel checkout-accordion">
										<div class="panel-heading" role="tab" id="headingFive">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#orderReview" aria-expanded="false" aria-controls="orderReview">
													<span>5</span> Order Review
												</a>
											</h4>
										</div>
										<div id="orderReview" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
											<div class="content-info">
												<div class="col-md-12">
													<div>Sample Content</div>
													<p>Nunc Facilisis Sagittis Ullamcorper. Proin Lectus Ipsum, Gravida Et Mattis Vulputate, Tristique Ut Lectus. Sed Et Lorem Nunc.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-3 category-checkout">
							<h5>YOUR CHECKOUT PROGRESS</h5>
							<ul>
								<li><a href="#" class="link-hover">Billing address</a></li>
								<li><a href="#" class="link-hover">Shipping address</a></li>
								<li><a href="#" class="link-hover">shipping method</a></li>
								<li><a href="#" class="link-hover">payment methor</a></li>
							</ul>
						</div>
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
		<footer>
			<!-- banner footer area start -->
			<div class="banner-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-1.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-2.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-3.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-4.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 hidden-xs nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-5.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 hidden-xs nopadding">
							<div class="single-bannerfooter last-single">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img/banner/footer-6.jpg" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner footer area end -->
			<!-- top footer area start -->
			<div class="top-footer-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="single-snap-footer">
								<div class="snap-footer-title">
									<h4>Company info</h4>
								</div>
								<div class="cakewalk-footer-content">
									<p class="footer-des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adm.</p>
									<a href="#" class="read-more">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-snap-footer">
								<div class="snap-footer-title">
									<h4>Information</h4>
								</div>
								<div class="cakewalk-footer-content">
									<ul>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Delivery Information</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms & Condition</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="single-snap-footer">
								<div class="snap-footer-title">
									<h4>Fashion Tags</h4>
								</div>
								<div class="cakewalk-footer-content">
									<ul>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Login</a></li>
										<li><a href="#">My Cart</a></li>
										<li><a href="#">Wishlist</a></li>
										<li><a href="#">Checkout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 hidden-sm">
							<div class="single-snap-footer">
								<div class="snap-footer-title">
									<h4>Fashion Tags</h4>
								</div>
								<div class="cakewalk-footer-content">
									<ul>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Advanced Search</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 hidden-sm">
							<div class="single-snap-footer">
								<div class="snap-footer-title">
									<h4>Follow Us</h4>
								</div>
								<div class="cakewalk-footer-content social-footer">
									<ul>
										<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a><span> Facebook</span></li>
										<li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><span> Google Plus</span></li>
										<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><span> Twitter</span></li>
										<li><a href="https://youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a><span> Youtube</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- top footer area end -->
			<!-- info footer start -->
			<div class="info-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="info-fcontainer">
								<div class="infof-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="infof-content">
									<h3>Our Address</h3>
									<p>Main Street, Banasree, Dhaka</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="info-fcontainer">
								<div class="infof-icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="infof-content">
									<h3>Phone Support</h3>
									<p>+88 0173 7803547</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="info-fcontainer">
								<div class="infof-icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="infof-content">
									<h3>Email Support</h3>
									<p>admin@bootexperts.com</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 hidden-sm">
							<div class="info-fcontainer">
								<div class="infof-icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="infof-content">
									<h3>Openning Hour</h3>
									<p>Sat - Thu : 9:00 am - 22:00 pm</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- info footer end -->
			<!-- footer address area start -->
			<div class="address-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<address>Copyright © <a href="http://bootexperts.com/">BootExperts.</a> All Rights Reserved</address>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="footer-payment pull-right">
								<a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img/payment.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer address area end -->
		</footer>
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
    </body>

</html>