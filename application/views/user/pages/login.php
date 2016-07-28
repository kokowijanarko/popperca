<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    
<!-- Mirrored from devitems.com/tf/lavoro-preview/lavoro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 07:01:57 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | Popperca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/bootstrap.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/owl.theme.css">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/owl.transitions.css">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/font-awesome.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/fonts/font-icon.css">
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/animate.css">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/meanmenu.min.css">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/normalize.css">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/main.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/lavoro/css/responsive.css">
        
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/vendor/modernizr-2.8.3.min.js"></script>
		<script>
			//$('input').setAttribute('autocomplete', 'off');
			function getKab(){
				$("#custommer_kabupaten_id").empty().append('<option value="">--SELECT--</option>');
				//$("#custommer_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
				var IDProvinsi = $('#custommer_provinsi_id option:selected').val();		
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
						$("#custommer_kabupaten_id").append('<option value='+result[i]['city_id']+'>'+result[i]['city']+'</option>');
					}
					
				});
			}
			function getKec(){
				$("#custommer_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
				var IDKabupaten = $('#custommer_kabupaten_id option:selected').val();
				var url = "<?php echo base_url()?>index.php/admin/custommer/get_kec/"+IDKabupaten;
				console.log(url);
				$.ajax({
					url: url			
				}).success(function(result){
					result = JSON.parse(result);
					console.log(result);
					for(i=0; i<result.length; i++){
						$("#custommer_kecamatan_id").append('<option value='+result[i]['IDKecamatan']+'>'+result[i]['Nama']+'</option>');
					}
					
				});
			}
		</script>
	</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url();?>assets/theme/lavoro/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		<header class="short-stor">
			<div class="container-fluid">
				<div class="row">					
					<!-- mainmenu area start -->
					<?php
						echo $this->load->view('user/components/header', TRUE);
					?>
					<!-- mainmenu area end -->
					<!-- top details area start -->
					<!-- top details area end -->
				</div>
			</div>
		</header>
		<!-- header area end -->
		<!-- breadcrumbs area start 
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="<?php //echo base_url();?>assets/theme/lavoro/index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Login</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- account-details Area Start -->
		<div class="customer-login-area">
			<div class="container">
				<div class="row">
				
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="customer-login my-account">
							<form method="post" class="login" action="<?php echo base_url('index.php/user/login/do_login')?>">
								<div class="form-fields">
									<h2>Login</h2>
									<p class="form-row form-row-wide">
										<label for="username">Username<span class="required">*</span></label>
										<input type="text" class="input-text" name="username" id="username" autocomplete="off">
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password">
									</p>
								</div>
								<div class="form-action">
									<div class="actions-log">
										<input type="submit" class="button" name="login" value="Login">
									</div>
									<p>
									<?php
										if(isset($message)){
											echo $message;
										}					
									?>
									</p>
									<!--
									<p class="lost_password"> <a href="#">Lost your password?</a></p>
									<label for="rememberme" class="inline"> 
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
									-->
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="customer-register my-account">
							<form method="post" class="register" action="<?php echo base_url('index.php/user/login/do_register')?>">
								<input name="custommer_type" value="2" type="hidden">
								<div class="form-fields">
									<h2>Register</h2>
									<p class="form-row form-row-wide">
										<label for="reg_email">Nama Lengkap <span class="required">*</span></label>
										<input type="text" class="input-text" name="custommer_name" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Username<span class="required">*</span></label>
										<input type="text" class="input-text" name="custommer_username" value="" required>
									</p>									
									<p class="form-row form-row-wide">
										<label for="reg_email">Alamat<span class="required">*</span></label>
										<input type="text" class="input-text" name="custommer_address" id="custommer_address" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Provinsi<span class="required">*</span></label>
										<select name="custommer_provinsi_id" id="custommer_provinsi_id" class="col-xs-12" onchange="getKab()">
											<option value="" >--SELECT--</option>
											<?php
												foreach($provinsi as $prov){
													echo '
														<option value="'.$prov->province_id .'" >'.$prov->province.'</option>											
													';
												}
											?>
										</select>
									</p></br>
									<p class="form-row form-row-wide">
										<label for="reg_email">Kota / Kabupaten<span class="required">*</span></label>
										<select name="custommer_kabupaten_id" id="custommer_kabupaten_id" class="col-xs-12" onChange="getKec()">
											<option value="" >--SELECT--</option>
										</select>
									</p>
									
									<p class="form-row form-row-wide">
										<label for="reg_email">Kode Pos<span class="required">*</span></label>
										<input type="number" class="input-text" name="custommer_pos_code" id="custommer_pos_code" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Telp./Hp<span class="required">*</span></label>
										<input type="text" class="input-text" name="custommer_phone" id="custommer_phone_number" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Email <span class="required">*</span></label>
										<input type="email" class="input-text" name="custommer_email" id="custommer_email" value="" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Password <span class="required">*</span></label>
										<input type="password" class="input-text" name="custommer_password" id="custommer_password" required>
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Confirm Password <span class="required">*</span></label>
										<input type="password" class="input-text" name="custommer_password_confirm" id="custommer_password_confirm" required>
									</p>									
								</div>
								<div class="form-action">
									<div class="actions-log">
										<input type="submit" value="Submit" class="button">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- account-details Area end -->
		<!-- FOOTER START -->
		<?php
			echo $this->load->view('user/components/footer', TRUE);
			
		?>
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/vendor/jquery-1.11.3.min.js"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/bootstrap.min.js"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/owl.carousel.min.js"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/price-slider.js"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="<?php echo base_url();?>assets/theme/lavoro/js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/jquery.bxslider.min.js"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="<?php echo base_url();?>assets/theme/lavoro/js/jquery.meanmenu.js"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/jquery.scrollUp.min.js"></script>
        
   		<!-- wow js
		============================================ -->   
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/wow.js"></script>
		
		<!-- gmap js
		============================================ -->       
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/gmap.js"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/main.js"></script>
    </body>

<!-- Mirrored from devitems.com/tf/lavoro-preview/lavoro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 07:01:58 GMT -->
</html>