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
        <title>Shopping Cart | Popperca</title>
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
        
		<!-- table CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-table.css">
        
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/vendor/modernizr-2.8.3.min.js"></script>
		<script>
			//$('input').setAttribute('autocomplete', 'off');
			function getKab(){
				$("#custommer_kabupaten_id").empty().append('<option value="">--SELECT--</option>');
				$("#custommer_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
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
						$("#custommer_kabupaten_id").append('<option value='+result[i]['IDKabupaten']+'>'+result[i]['Nama']+'</option>');
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
				<?php
					if(isset($message)){
						echo $message;
					}					
				?>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="customer-login my-account">
							<div class="form-fields">
								<h2>Your Shopping Cart</h2>
								
								<table class="tableCustom">									
									<tr>
										<td width="25px">No</td>
										<td>Product</td>
										<td>Image</td>
										<td width="90px">Quantity</td>
										<td width="200px">Price</td>
										<td width="200px">Subtotal</td>
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
														<input type="number" min="1" id="prod_count" class="prod_count" value="'.$_SESSION['product_count'][$prod->product_id].'">
														<input type="text" id="prod_id" class="prod_id" value="'.$_SESSION['product_id'][$prod->product_id].'">
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
								<a class="button">Checkout</a>
								</p>
							</div>							
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
        
		<!-- number js
		============================================ -->         
        <script src="<?php echo base_url();?>assets/js/jquery.number.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="<?php echo base_url();?>assets/theme/lavoro/js/main.js"></script>
    </body>
	<script>
		jQuery(function($){	
			$('td.subtot').number(true, 2);
			$('td.price').number(true, 2);
			$('td.total').number(true, 2);
			
			
			
			$('tr.prod_row').click(function(){
				var quantity = $(this).find('input.prod_count').val();
				var price = $(this).find('td.price').attr('id');
				var subtotal = price * quantity;
				var price = $(this).find('td.subtot').text(subtotal);
				$('td.subtot').number(true, 2);
				
				console.log(quantity);
				console.log(price);
				console.log(subtotal);
				
				
			});
			
			$("input.prod_count").change(function(){
				var quantity = $('td.td_input').find('input.prod_count').val();
				var id = $('td.td_input').find('input.prod_id').val();
				var subtot = $('td.subtot').text();
				var cek = subtot.split(",");
				console.log(quantity);
				console.log(subtot);
				console.log(cek);
				
				$.ajax({
							url:"<?php echo base_url('index.php/session_js/set_session_non_member')?>",
							type:'post',
							data:{'product_id':id, 'product_count':quantity}
						}).success(function(result){
							//result = JSON.parse(result);
							//console.log('session');
							
							console.log(result);
							location.reload();
						});
				
			});
			
		})
	</script>
<!-- Mirrored from devitems.com/tf/lavoro-preview/lavoro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 07:01:58 GMT -->
</html>