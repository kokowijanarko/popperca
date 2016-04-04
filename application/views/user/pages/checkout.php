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
												<div class="col-md-6" id="login_form">
													<div class="checkout-login">
															<div class="checkTitle">
																<h2 class="ct-design">Login</h2>
															</div>
														<p class="alrdyReg">Already registered?</p>
														<p class="plxLogin">Please log in below:</p>
														<div class="loginFrom">
															<p class="plxLoginP"><span>*</span> Username</p>
															<input type="text" name="username" id="username"  autocomplete="off"><br>
															<p class="plxLoginP"><span>*</span> Password</p>
															<input type="password" name="password" id="password" autocomplete="off">
															<p class="plxrequired"><span>*</span> Required Field</p>
															<!--<p class="fgetpass">Forgot your password ?</p>-->
														</div>
														<a style="float:left" class="checkPageBtn" id="login">Login</a>
														<a href="<?php echo base_url('user/login')?>" class="checkPageBtn">Register</a>
													</div>
												</div>
												<div class="col-md-6 hide" id="acc_info">
													<div class="checkTitle">
														<div class="AcckTitle">
															<h2 class="ct-design">Login Status</h2>
														</div>
														<p id="account_content">
														<?php 
															if(isset($this->session->userdata['user_id'])){
																echo "Login Success";
															}
														?>
														</p>
														
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
										<div id="billingInformation" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
											<div class="content-info">
												<div class="col-md-12">	
													<div class="col-md-6">
													<p>
													<h6>Buyer</h6>
														<table>
															<tr>
																<td>Name</td>
																<td>:</td>
																<td id="buyer_name"></td>
															</tr>
															<tr>
																<td>Address</td>
																<td>:</td>
																<td id="buyer_address"></td>
															</tr>
															<tr>
																<td>Districs</td>
																<td>:</td>
																<td id="buyer_districs"></td>
															</tr>
															<tr>
																<td>Pos Code</td>
																<td>:</td>
																<td id="buyer_poscode"></td>
															</tr>
															<tr>
																<td>Distric</td>
																<td>:</td>
																<td id="buyer_distric"></td>
															</tr>
															<tr>
																<td>Province</td>
																<td>:</td>
																<td id="buyer_province"></td>
															</tr>
															<tr>
																<td>Phone</td>
																<td>:</td>
																<td id="buyer_phone"></td>
															</tr>
															
														</table>
													</p>
													</div>
													<div class="col-md-6">
													<p>
														<h6>Send To</h6>
														<table>
															<tr>
																<td>Name</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_name"></td>
															</tr>
															<tr>
																<td>Province</td>
																<td>:</td>
																<td>
																	<select name="reciver_provinsi_id" id="reciver_provinsi_id" class="col-xs-12" onchange="getKab()">
																		<option value="" >--SELECT--</option>
																		<?php
																			foreach($provinsi as $prov){
																				echo '
																					<option value="'.$prov->IDProvinsi .'" >'.$prov->Nama.'</option>											
																				';
																			}
																		?>
																	</select>
																</td>
															</tr>
															<tr>
																<td>Distric</td>
																<td>:</td>
																<td>
																	<select name="reciver_kabupaten_id" id="reciver_kabupaten_id" class="col-xs-12" onChange="getKec()">
																		<option value="" >--SELECT--</option>
																	</select></td>
															</tr>
															<tr>
																<td>Districs</td>
																<td>:</td>
																<td>
																	<select name="reciver_kecamatan_id" id="reciver_kecamatan_id" class="col-xs-12" >
																		<option value="" >--SELECT--</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td>Pos Code</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_poscode"></td>
															</tr>
															<tr>
																<td>Address</td>
																<td>:</td>
																<td><textarea class="input-text" id="reciver_address"></textarea></td>
															</tr>
															<tr>
																<td>Phone</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_phone"></td>
															</tr>
															
														</table>
													</p>
													</div>
													<table class="tableCustom">									
														<tr>
															<td width="25px">No</td>
															<td >Product</td>
															<td width="200px">Image</td>
															<td >Quantity</td>
															<td >Price</td>
															<td >Subtotal</td>
														</tr>
														<?php
															$no = 1;
															$i = 0;
															foreach($product as $prod){
																$subtot = $prod->product_price * $_SESSION['product_count'][$prod->product_id] ;
																$sbttl[] =  $subtot;
																echo '
																	<tr class="prod_row">
																		<td>'.$no.'</td>
																		<td>'.$prod->product_name.'</td>
																		<td><img width="200px" src="'.base_url('file/product_img/'.$image[$i]->productimage_name).'" /></td>
																		<td class="td_input">
																			'.$_SESSION['product_count'][$prod->product_id].'
																			
																		</td>
																		<td class="price" id="'.$prod->product_price.'">'.$prod->product_price.'</td>
																		<td class="subtot">'.$subtot.'</td>
																		
																	</tr>
																';											
																$no++;											
																$i++;											
															}
															$amount = array_sum($sbttl);
															
															echo'
																<tr>
																	<td colspan="5" >Total</td>
																	<td class="total">'.$amount.'</td>
																</tr>
															';
														?>
													</table>
													<p class="buttons">
													<a class="button" id="confirm">Confirm</a>
													</p>
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
													<div id=orderReviewContent></div>
													<p></p>
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
				$('td.subtot').number(true, 2);
				$('td.price').number(true, 2);
				$('td.total').number(true, 2);		
				
				//console.log('a');
				var ck_login = <?php echo $ck_login?>;
				console.log(ck_login);
				//if(ck_login == 1){
				//	$('div#billingInformation').addClass('in');
				//	$('div#checkoutMethod').removeClass('in');
				//	console.log('x');
				//}
				
				$('a#login').click(function(){
					var username = $('#username').val();
					var password = $('#password').val();
					
					console.log(username);
					console.log(password);
					
					
					$.ajax({
						url:"<?php echo base_url('user/login/do_login')?>",
						type:'post',
						data:{'username':username, 'password':password}
					}).success(function(result){
						result = JSON.parse(result);
						console.log(result);
						//location.reload();
						
						
						if(result == true){
							$('#acc_info').removeClass('hide');
							$('#login_form').addClass('hide');
							//$('div#billingInformation').addClass('in');
							
							var user_id = "<?php echo isset($this->session->userdata['user_id']) ? $this->session->userdata['user_id'] : NULL ; ?>";
							console.log(user_id);
							$.ajax({
								url:"<?php echo base_url()?>user/account/detail_js/"+user_id
							}).success(function(result){
								result=JSON.parse(result);
								console.log(result);
								
								$.ajax({
									url: "<?php echo base_url()?>index.php/admin/custommer/get_kab/"+result['provinsi']['IDProvinsi']		
								}).success(function(result){
									result = JSON.parse(result);
									console.log(result);
									for(i=0; i<result.length; i++){
										$("#reciver_kabupaten_id").append('<option value='+result[i]['IDKabupaten']+'>'+result[i]['Nama']+'</option>');
									}								
								});
								
								$.ajax({
									url: "<?php echo base_url()?>index.php/admin/custommer/get_kec/"+result['kabupaten']['IDKabupaten']			
								}).success(function(result){
									result = JSON.parse(result);
									console.log(result);
									for(i=0; i<result.length; i++){
										$("#reciver_kecamatan_id").append('<option value='+result[i]['IDKecamatan']+'>'+result[i]['Nama']+'</option>');
									}
									
								});
								
								
								$('td#buyer_name').text(result['account']['custommer_name']);
								$('td#buyer_address').text(result['account']['custommer_address']);
								$('td#buyer_province').text(result['provinsi']['Nama']);
								$('td#buyer_distric').text(result['kabupaten']['Nama']);
								$('td#buyer_districs').text(result['kecamatan']['Nama']);
								$('td#buyer_poscode').text(result['account']['custommer_pos_code']);
								$('td#buyer_phone').text(result['account']['custommer_phone']);								
								
								$('#reciver_name').val(result['account']['custommer_name']);
								$('#reciver_address').val(result['account']['custommer_address']);
								$('#reciver_provinsi_id').val(result['provinsi']['IDProvinsi']);
								$('#reciver_kabupaten_id').val(result['kabupaten']['IDKabupaten']);
								$('#reciver_kecamatan_id').val(result['kecamatan']['IDKecamatan']);
								$('#reciver_poscode').val(result['account']['custommer_pos_code']);
								$('#reciver_phone').val(result['account']['custommer_phone']);
								
							});
							
							
						}
						
					});
					
				});
				
				$('a#confirm').click(function(){
					var name = $('#reciver_name').val();
					var address = $('#reciver_address').val();
					var province = $('#reciver_provinsi_id option:selected').val();
					var distric = $('#reciver_kabupaten_id option:selected').val();
					var districs = $('#reciver_kecamatan_id option:selected').val();
					var poscode = $('#reciver_poscode').val();
					var phone = $('#reciver_phone').val();
					
					console.log(name);
					console.log(address);
					console.log(province);
					console.log(distric);
					console.log(districs);
					console.log(poscode);
					console.log(phone);
					
					data = {
						'name': name,
						'address':address,
						'province':province,
						'distric':distric,
						'districs':districs,
						'poscode':poscode,
						'phone':phone,
						'amount':<?php echo $amount?>
					};
					$.ajax({
						url:"<?php echo base_url('user/cart/genInvNumber')?>",
						method:'post',
						data:data
					}).success(function(result){
						//console.log(result);
						result = JSON.parse(result);
						$('#orderReview').addClass('in');
						$('#orderReviewContent').text('Nomor Ivoice Anda:'+result);
					});
					
				});
				
			});
			
			function getKab(){
				$("#reciver_kabupaten_id").empty().append('<option value="">--SELECT--</option>');
				$("#reciver_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
				var IDProvinsi = $('#reciver_provinsi_id option:selected').val();		
				console.log(IDProvinsi);
				var data = {'IDProvinsi':IDProvinsi};
				console.log(data);
				var url = "<?php echo base_url()?>index.php/admin/custommer/get_kab/"+IDProvinsi;
				$.ajax({
					url: url			
				}).success(function(result){
					result = JSON.parse(result);
					console.log(result);
					for(i=0; i<result.length; i++){
						$("#reciver_kabupaten_id").append('<option value='+result[i]['IDKabupaten']+'>'+result[i]['Nama']+'</option>');
					}
					
				});
			}
			function getKec(){
				$("#reciver_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
				var IDKabupaten = $('#reciver_kabupaten_id option:selected').val();				
				
				$.ajax({
					url: "<?php echo base_url()?>index.php/admin/custommer/get_kec/"+IDKabupaten			
				}).success(function(result){
					result = JSON.parse(result);
					console.log(result);
					for(i=0; i<result.length; i++){
						$("#reciver_kecamatan_id").append('<option value='+result[i]['IDKecamatan']+'>'+result[i]['Nama']+'</option>');
					}
					
				});
			}
		</script>
    </body>

</html>