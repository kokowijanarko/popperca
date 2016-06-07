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
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#billingInformation" aria-expanded="false" aria-controls="billingInformation">
													<span> </span> Informasi Keranjang Belanja
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
																<td>Nama</td>
																<td>:</td>
																<td id="buyer_name"><?php echo $customer->custommer_name?></td>
															</tr>
															<tr>
																<td>Alamat</td>
																<td>:</td>
																<td id="buyer_address"><?php echo $customer->custommer_address?></td>
															</tr>
															<tr>
																<td>Province</td>
																<td>:</td>
																<td id="buyer_province"><?php echo $customer->province?></td>
															</tr>
															<tr>
																<td>Kab/Kota</td>
																<td>:</td>
																<td id="buyer_distric"><?php echo $customer->city?></td>
															</tr>
															<tr>
																<td>Kode Pos</td>
																<td>:</td>
																<td id="buyer_poscode"><?php echo $customer->pos_code?></td>
															</tr>
															<tr>
																<td>Hp/Telp</td>
																<td>:</td>
																<td id="buyer_phone"><?php echo $customer->custommer_phone?></td>
															</tr>
															<tr>
																<td>Email</td>
																<td>:</td>
																<td id="buyer_phone"><?php echo $customer->custommer_email?></td>
															</tr>
															
														</table>
													</p>
													</div>
													<div class="col-md-6">
													<p>
														<h6>Kirim Ke:</h6>
														<table>
															<tr>
																<td>Nama</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_name" value="<?php echo $customer->custommer_name?>"></td>
															</tr>
															<tr>
																<td>Alamat</td>
																<td>:</td>
																<td><textarea class="input-text" id="reciver_address" ><?php echo $customer->custommer_address?></textarea></td>
															</tr>
															<tr>
																
																<td>Provinsi</td>
																<td>:</td>
																<td>
																	<select name="reciver_provinsi_id" id="reciver_provinsi_id" class="col-xs-12" onchange="getKab()">
																		<option value="">--PILIH--</option>
																		<?php
																			foreach($provinsi as $prov){
																				if($prov->province_id == $customer->custommer_province_id){
																					$sel="selected";
																				}else{
																					$sel="";
																				}
																				echo'<option value="'.$prov->province_id.'" '.$sel.'>'.$prov->province.'</option>';
																			}
																		?>
																	</select>
																</td>
															</tr>
															<tr>
																<td>Kab/Kota</td>
																<td>:</td>
																<td>
																	<select name="reciver_kabupaten_id" id="reciver_kabupaten_id" class="col-xs-12" onChange="getKec()">
																	
																	</select></td>
															</tr>															
															<tr>
																<td>kode Pos</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_poscode" value="<?php echo $customer->pos_code?>"></td>
															</tr>															
															<tr>
																<td>Hp/Telp</td>
																<td>:</td>
																<td><input type="text" class="input-text" id="reciver_phone" value="<?php echo $customer->custommer_phone?>"> </td>
															</tr>
															<tr>
																<td>Jasa Paket</td>
																<td>:</td>
																<td>
																	<select id="jasa_paket">
																		<option value="">--PILIH--</option>
																		<option value="jne">JNE</option>
																		<option value="tiki">TIKI</option>
																		<option value="pos">POS</option>
																	<select>
																</td>
															</tr>
															<tr>
																<td>Jenis Paket</td>
																<td>:</td>
																<td>
																	<select id="jenis_jasa_paket">
																	<select>
																</td>
															</tr>
															
														</table>
													</p>
													</div>
													<table class="tableCustom">									
														<tr>
															<td width="25px">No</td>
															<td >Produk</td>
															<td width="200px">Gambar</td>
															<td >Ukuran</td>
															<td >jumlah</td>
															<td >Harga</td>
															<td >Subtotal</td>
														</tr>
														<?php
															$no = 1;
															$i = 0;
															//var_dump($ukuran);
															foreach($cart as $crt){
																$subtot = $crt->product_price  * $crt->cart_product_count;
																$sbttl[] =  $subtot;
																
																echo '
																	<tr>
																		<td>'.$no.'</td>
																		<td>'.$crt->product_name.'</td>
																		<td><img width="200px" src="'.base_url('file/product_img/'.$crt->product_image).'" /></td>
																		<td>'.$crt->size_code.'-'.$crt->size_name.'</td>
																		<td>'.$crt->cart_product_count.'</td>
																		<td class="price">'.$crt->product_price.'</td>
																		<td class="subtot">'.$subtot.'</td>
																	</tr>
																
																';
																$no++;	
															}
															
															// foreach($ as $prod){
																// $subtot = $prod->product_price * $_SESSION['product_count'][$prod->product_id] ;
																// $sbttl[] =  $subtot;
																// echo '
																	// <tr class="prod_row">
																		// <td>'.$no.'</td>
																		// <td>'.$prod->product_name.'</td>
																		// <td><img width="200px" src="'.base_url('file/product_img/'.$image[$i]->productimage_name).'" /></td>
																		// <td class="td_input">
																			// '.$ukuran[$i]->size_code.'																			
																		// </td>
																		// <td class="td_input">
																			// '.$_SESSION['product_count'][$prod->product_id].'																			
																		// </td>
																		// <td class="price" id="'.$prod->product_price.'">'.$prod->product_price.'</td>
																		// <td class="subtot">'.$subtot.'</td>
																		
																	// </tr>
																// ';											
																// $no++;											
																// $i++;											
															// }
															$amount = array_sum($sbttl);
															
															echo'
																<tr>
																	<td colspan="6" ><span id="nama_kurir"></span> - <label id="jenis_paket"><label></td> 
																	<td class="ongkir"></td>
																</tr>
																<tr>
																	<td colspan="6" >Total</td>
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
				getKab();
				
				$('a#confirm').click(function(){
					var name = $('#reciver_name').val();
					var address = $('#reciver_address').val();
					var province = $('#reciver_provinsi_id option:selected').val();
					var distric = $('#reciver_kabupaten_id option:selected').val();
					//var districs = $('#reciver_kecamatan_id option:selected').val();
					var poscode = $('#reciver_poscode').val();
					var phone = $('#reciver_phone').val();
					var jenis  = $('#jenis_jasa_paket option:selected').text();
					var harga  = $('#jenis_jasa_paket').val();
					var jasa_paket  = $('#jasa_paket option:selected').text();
					var amount  = parseInt('<?php echo $amount?>');
					var amount_total  = amount + parseInt(harga);
					
					console.log(name);
					console.log(address);
					console.log(province);
					console.log(distric);
					//console.log(districs);
					console.log(poscode);
					console.log(phone);
					
					data = {
						'name': name,
						'address':address,
						'province':province,
						'distric':distric,
						'poscode':poscode,
						'phone':phone,
						'amount':amount ,
						'amount_total':amount_total,
						'jenis_paket':jenis,
						'jasa_paket':jasa_paket,
						'harga':harga
					};
					$.ajax({
						url:"<?php echo base_url('user/cart/genInvNumber')?>",
						method:'post',
						data:data
					}).success(function(result){
						console.log(result);
						result = JSON.parse(result);
						$('#orderReview').addClass('in');
						$('#orderReviewContent').text('Nomor Ivoice Anda:'+result);
					});
					
				});
				
				$('#jasa_paket').change(function(){
					console.log('jasa paket');
					var courier = $('#jasa_paket').val();
					var province_id = $("#reciver_provinsi_id").val();
					var city_id = $("#reciver_kabupaten_id").val();
					var weight = 2;
					console.log(courier);
					console.log(province_id);
					console.log(city_id);
					$.ajax({
						url:'<?php echo base_url('courier_cost/ongkir')?>',
						method: 'post',
						data:{
							'city_id':city_id,
							'courier':courier,
							'weight':weight
						}
					}).success(function(result){
						result = JSON.parse(result);
						console.log(result);
						$("#jenis_jasa_paket").append('<option value="">--PILIH--</option>');
						for(i=0; i<result.length; i++){
							$("#jenis_jasa_paket").append('<option value='+result[i]['cost'][0]['value']+'>'+result[i]['service']+'-'+result[i]['description']+'</option>');
						}						
					});
					
					$('#jenis_jasa_paket').change(function(){
						var jenis  = $('#jenis_jasa_paket option:selected').text();
						var harga  = $('#jenis_jasa_paket').val();
						var jasa_paket  = $('#jasa_paket option:selected').text();
						var amount  = parseInt('<?php echo $amount?>');
						var amount_total  = amount + parseInt(harga);
						
						$('#nama_kurir').text(jasa_paket);
						$('#jenis_paket').text(jenis);
						$('.ongkir').text(harga);
						$('.total').text(amount_total);
						console.log('asd');
						console.log(jenis);
						console.log(harga);
					});
					
				});
				
			});	
			
			function getKab(){
				$("#reciver_kabupaten_id").empty().append('<option value="">--SELECT--</option>');
				$("#reciver_kecamatan_id").empty().append('<option value="">--SELECT--</option>');
				var province_id = $('#reciver_provinsi_id option:selected').val();		
				console.log(province_id);
				var data = {'province_id':province_id};
				console.log(data);
				var url = "<?php echo base_url()?>index.php/admin/custommer/get_kab/"+province_id;
				$.ajax({
					url: url			
				}).success(function(result){
					result = JSON.parse(result);
					console.log(<?php echo $customer->city_id?>);
					for(i=0; i<result.length; i++){
						console.log(result[i]['city_id']);
						if(<?php echo $customer->city_id?> == result[i]['city_id']){
							selected = 'selected';
						}else{
							selected = '';
						}
						$("#reciver_kabupaten_id").append('<option value='+result[i]['city_id']+' '+selected+'>'+result[i]['city']+'</option>');
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