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
		<?php $this->load->view('user/components/header')?>
		<!-- header area end -->
		<!-- start home slider -->
        <div class="slider-area an-1 hm-1 clr">
            <!-- slider -->
			<div class="bend niceties preview-2">
				<?php $this->load->view('user/components/banner')?>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl lft-pr s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<!--<h3 class="title2 low-f" >Collection 2016</h3>-->
							<h4 class="title2" >POPPERCA</h4>
							<!--<a class="btn-title" href="#">View collection</a>-->
						</div>
					</div>	
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-cn s-tb slider-2">
						<div class="title-container s-tb-c">
							<!--<h3 class="title2" >Collection 2016</h3>-->
							<h4 class="title2" >LATULITU</h4>
							<!--<a class="btn-title" href="#">View collection</a>-->
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
					<h2>Latulitu</h2>
				</div>
				<!-- area title end -->
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="features-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li role="presentation" class="active"><a href="#pakaian_lat" data-toggle="tab">Pakaian</a></li>
								
							</ul>
							<!-- Tab panes -->
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="pakaian_lat">
									<div class="row">
										<div >
											<div class="col-lg-3 col-md-3">
												<!-- single-product start -->												
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="'.base_url('user/detail_product/detail/'.$prod->product_id).'">
														<img class="primary-image" src="<?php echo base_url("file/desc/latulitu_custom_desc.jpg")?>" alt="">
														</a>
															
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<?php 
											// foreach ($product as $prod){
												// if($prod->product_brand == 2){
													// if($prod->product_genre_id == 1 ){
													// echo '
													// <div class="col-lg-3 col-md-3">
													// <!-- single-product start -->												
													// <div class="single-product first-sale">
														// <div class="product-img">
															// <a href="'.base_url('user/detail_product/detail/'.$prod->product_id).'">
															// ';
															
															// foreach ($image as $key=>$val) {															
																// foreach ($val as $index=>$value){
																// if ($prod->product_id == $value->productimage_product_id){
																			// echo '<img class="primary-image" src="'.base_url("file/product_img/".$value->productimage_name).'" alt="" />';
																// }
																// }
															// }
															// echo '</a>
															
																	// </div>
																	// <div class="product-content">
																		// <span class="new-price">Rp. '.number_format($prod->product_price, 2, ',', '.').'</span>
																		// <h2 class="product-name"><a href="#">'.$prod->product_name.'</a></h2>
																		// <p> </p>
																	// </div>
																// </div>
																// <!-- single-product end -->
															// </div>
													// ';
													// }
												// }
											// }
											?>
											
											
												
										</div>
									</div>
								</div>						
														
								<div role="tabpanel" class="tab-pane fade" id="asesoris_lat">
									<div class="row">
										<div >
											<?php 
											//var_dump($this->session->userdata);
											//var_dump(count($_SESSION['product_id']));
											//var_dump($_COOKIE);
											foreach ($product as $prod){
												if($prod->product_brand == 2){
													if($prod->product_genre_id == 2 ){
													echo '
													<div class="col-lg-3 col-md-3">
													<!-- single-product start -->												
													<div class="single-product first-sale">
														<div class="product-img">
															<a href="'.base_url('user/detail_product/detail/'.$prod->product_id).'">
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
															
																	</div>
																	<div class="product-content">
																		<span class="new-price">Rp. '.number_format($prod->product_price, 2, ',', '.').'</span>
																		<h2 class="product-name"><a href="#">'.$prod->product_name.'</a></h2>
																		<p> </p>
																	</div>
																</div>
																<!-- single-product end -->
															</div>
													';
													}
												}
											}
											?>
											
											
												
										</div>
									</div>
								</div>							
								
								<div role="tabpanel" class="tab-pane fade" id="bekakas_lat">
									<div class="row">
										<div>
											<?php 
											//var_dump($this->session->userdata);
											//var_dump(count($_SESSION['product_id']));
											//var_dump($_COOKIE);
											foreach ($product as $prod){
												if($prod->product_brand == 2){
													if($prod->product_genre_id == 4 ){
													echo '
													<div class="col-lg-3 col-md-3">
													<!-- single-product start -->												
													<div class="single-product first-sale">
														<div class="product-img">
															<a href="'.base_url('user/detail_product/detail/'.$prod->product_id).'">
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
															
																	</div>
																	<div class="product-content">
																		<span class="new-price">Rp. '.number_format($prod->product_price, 2, ',', '.').'</span>
																		<h2 class="product-name"><a href="#">'.$prod->product_name.'</a></h2>
																		<p> </p>
																	</div>
																</div>
																<!-- single-product end -->
															</div>
													';
													}
												}
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
		<?php $this->load->view('user/components/footer')?>
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
				
				$('a.emty-btn').click(function(){
					console.log('cok');
						$.ajax({
							url:"<?php echo base_url('index.php/session_js/empty_cart')?>",
							type:'post'
						}).success(function(result){
							//result = JSON.parse(result);
							//console.log('session');
							
							console.log(result);
							location.reload();
						});
				});
				
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
					}).success(function(result){
						console.log(result);
						location.reload();
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