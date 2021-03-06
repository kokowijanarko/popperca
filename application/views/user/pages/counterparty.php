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
			$this->load->view('user/components/header');
		?>
		<!-- header area end -->
		<!-- start home slider -->
        <div class="slider-area an-1 hm-1 clr">
             <!-- slider -->
			<div class="bend niceties preview-2">
				<?php $this->load->view('user/components/banner')?>				
		</div>
        <!-- end home slider -->
		<!-- product section start -->
		<div class="our-product-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">	
					
						<?php
							$img = '';
							foreach($partner as $val){
								$img .= '
									<div style ="padding:20px" class="col-md-12 col-lg-12 text-center">
										<img width="40%" src="'. base_url('file/partner/') .'/'. $val->partner_img .'" alt="" />
									</div>
								';
							}
							echo $img;
						?>
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