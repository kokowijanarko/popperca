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
        <title>Popperca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/theme/lavoro/img/favicon.ico')?>">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/bootstrap.min.css')?>">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/owl.carousel.css')?>">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/owl.theme.css')?>">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/owl.transitions.css')?>">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/font-awesome.min.css')?>">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/fonts/font-icon.css')?>">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/custom-slider/css/nivo-slider.css')?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/custom-slider/css/preview.css')?>" type="text/css" media="screen" />
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/animate.css')?>">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/meanmenu.min.css')?>">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/normalize.css')?>">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/main.css')?>">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/style.css')?>">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url('assets/theme/lavoro/css/responsive.css')?>">
        
        <script src="<?php echo base_url('assets/theme/lavoro/js/vendor/modernizr-2.8.3.min.js')?>"></script>
    </head>
    <body class="home-five">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		<?php
			include('components/header.php');
		?>
		<!-- header area end -->
		<!-- start home slider -->
        <div class="slider-area an-1 hm-1 clr">
             <!-- slider -->
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides">	
					<img src="<?php echo base_url()?>assets/theme/lavoro/img/slider/home-5/slider5-1.jpg" alt="" title="#slider-direction-1"  />
					<img src="<?php echo base_url()?>assets/theme/lavoro/img/slider/home-5/slider5-2.jpg" alt="" title="#slider-direction-2"  />
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl lft-pr s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<h3 class="title2 low-f" >Collection 2016</h3>
							<h4 class="title2" >FALL-WINTER</h4>
							<a class="btn-title" href="#">View collection</a>
						</div>
					</div>	
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-cn s-tb slider-2">
						<div class="title-container s-tb-c">
							<h3 class="title2" >Collection 2016</h3>
							<h4 class="title2" >FALL-WINTER</h4>
							<a class="btn-title" href="#">View collection</a>
						</div>
					</div>	
				</div>
			</div>
			<!-- slider end-->
		</div>
        <!-- end home slider -->
		<!-- product section start -->
		<div class="our-product-area">
			<div class="container">
				<!-- area title start -->
				<div class="area-title">
					<h2>Our products</h2>
				</div>
				<!-- area title end -->
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="features-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
								<li role="presentation"><a href="#new" data-toggle="tab">New Arrivals</a></li>
								<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
							</ul>
							<!-- Tab panes -->
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<div class="row">
										<div >
											<?php 
											var_dump($this->session->userdata);
											//var_dump($_SESSION);
											//var_dump($_COOKIE);
											foreach ($product as $prod){
												echo '
												<div class="col-lg-3 col-md-3">
												<!-- single-product start -->												
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
														';
														
														foreach ($image as $key=>$val) {
															
															foreach ($val as $index=>$value){
																//var_dump($value->productimage_product_id); die;
															if ($prod->product_id == $value->productimage_product_id){
																		echo '<img class="primary-image" src="'.base_url("file/product_img/".$value->productimage_name).'" alt="" />';
															}
															}
														}
														echo '</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<p style="color:white">
																	lore ipsum dor 
																</p>
															</div>
															<div class="add-to-cart" id="'.$prod->product_id.'">
																<a  title="Add to Cart"><i class="icon-bag"></i></a>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">'.$prod->product_name.'</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
												';
											}
											
											?>
											
											
												
										</div>
									</div>
								</div>
								
							
							</div>
						</div>				
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- FOOTER START -->
		<footer>
			<!-- banner footer area start -->
			<div class="banner-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-1.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-2.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-3.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-3 nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-4.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 hidden-xs nopadding">
							<div class="single-bannerfooter">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-5.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 hidden-xs nopadding">
							<div class="single-bannerfooter last-single">
								<a href="#">
									<img src="<?php echo base_url()?>assets/theme/lavoro/img//banner/footer-6.jpg" alt="" />
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
								<a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img//payment.png" alt="" /></a>
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
		
		<!-- Nivo slider js
		============================================ --> 		
		<script src="<?php echo base_url()?>assets/theme/lavoro/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/theme/lavoro/custom-slider/home.js" type="text/javascript"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/owl.carousel.min.js"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/jquery.scrollUp.min.js"></script>
		
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
        
   		<!-- wow js
		============================================ -->       
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/wow.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="<?php echo base_url()?>assets/theme/lavoro/js/main.js"></script>
		<script>
			jQuery(function($) {
				$('span.cart-quantity').text('<?php if(isset($_SESSION['product_id'])){echo count($_SESSION['product_id']);}else{echo '';}?>');
				$('div.add-to-cart').click(function(){
					var content = $(this).parent();
					var product_id = $(this).attr('id');		
					console.log(product_id);
						$.ajax({
							url:"<?php echo base_url('index.php/session_js/set_session_non_member')?>",
							type:'post',
							data:{'product_id':product_id, 'product_count':1}
						}).success(function(result){
							//result = JSON.parse(result);
							//console.log('session');
							
							console.log(result);
							location.reload();
						});
							//$('span.cart-quantity').text('<?php if(isset($_SESSION['product_id'])){echo count($_SESSION['product_id']);}else{echo '';}?>');
						
				});
				
				$('a.remove-cart-item').click(function(){
					var parent = $(this).parent();
					var id = $(this).attr('id');
					console.log(id);
					
					$.ajax({
						url:"<?php echo base_url('index.php/session_js/remove_cart_session')?>",
						type:'post',
						data:{'product_id':id}
					});
				});
					
				
			});
			
			function checkout(){
				var url = '<?php echo base_url("index.php/user/cart/addToCart");?>';
				var params = {
						'product_id':product_id,
						'product_count':1,
						'sessioin_id':session_id
					};
					
					$.ajax({
						url:url,
						method:'post',
						data:params
					}).success(function(result){
						//result = JSON.parse(result);
						//console.log(result);
					});
			}
			
			
		</script>
    </body>

</html>