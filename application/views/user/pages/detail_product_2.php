<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    
<!-- Mirrored from devitems.com/tf/lavoro-preview/lavoro/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 07:02:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Product Details</title>
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
		
		<!-- meanmenu CSS
		============================================ -->		
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/meanmenu.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/fonts/font-icon.css">
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/lavoro/css/animate.css">
        
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
    <body class="s-prodct">
		
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		
		<?php
			//var_dump($_SESSION);die;
			//var_dump($this->session->userdata());die;
			$this->load->view('user/components/header');
			
		?>
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
								<li class="category3"><span>Shop List</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- product-details Area Start -->
		<div class="product-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="zoomWrapper">
							<div id="img-1" class="zoomWrapper single-zoom">
								<a >
									<img id="zoom1" src="<?php echo base_url('file/product_img/'.$img[0]->productimage_name)?>" data-zoom-image="img/product-details/ex-big-1-1.jpg" alt="big-1">
								</a>
							</div>
							<div class="single-zoom-thumb">
								<ul class="bxslider" id="gallery_01">
									<?php
										foreach($img as $image){
											echo '
											<li>
												<a  class="elevatezoom-gallery" data-update="" data-image="<?php echo base_url()?>assets/theme/lavoro/img/product-details/big-1-1.jpg" data-zoom-image="<?php echo base_url()?>assets/theme/lavoro/img/product-details/ex-big-1-1.jpg"><img src="'.base_url('file/product_img/'.$image->productimage_name).'" alt="zo-th-1" /></a>
											</li>
											';
										}
									?>
									
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div class="product-list-wrapper">
							<div class="single-product">
								<div class="product-content">
									<h2 class="product-name"><a ><?php echo $detail->product_name?></a></h2>
									<div class="rating-price">	
										<!--
										<div class="pro-rating">
											<a ><i class="fa fa-star"></i></a>
											<a ><i class="fa fa-star"></i></a>
											<a ><i class="fa fa-star"></i></a>
											<a ><i class="fa fa-star"></i></a>
											<a ><i class="fa fa-star"></i></a>
										</div>
										-->
										<div class="price-boxes">
											<span class="new-price">Rp <?php echo number_format($detail->product_price, 2, ',','.')?></span>
										</div>
									</div>
									<div class="product-desc">
										<p><?php echo $detail->product_description?></p>
									</div>
									<p class="availability in-stock">
										<span><?php //var_dump($size); ?>
										<table>
											<tr>
												<th width="75px">size</th>
												<th>stock</th>
											</tr>
											<?php foreach($size as $ukuran){
												if($ukuran->productsize_stock > 0){
													$avail = 'Available';
												}else{
													$avail = 'Out Of Stock';
												}
											?>											
											<tr>
												<td><?php echo $ukuran->size_code?></td>
												<td><?php echo $avail?></td>
												
											</tr>
											<?php } ?>
										</table>
										</span>
									</p>
									<div class="actions-e">
										<div class="action-buttons-single">
											<div class="inputx-content">
												<label for="qty">Jumlah:</label>
												<input type="number" min="1" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
											</div>
											<div class="inputx-content">
												<label for="qty">Ukuran:</label>
												<select style="width:75px" class="input qty" id="ukuran">
													<option value="0">PILIH--</option>
													<?php 
														foreach($size as $val){
															echo '<option value="'.$val->productsize_size_id.'">'.$val->size_code.'</option>';
														}
													?>
												</select>
											</div>
											<?php
												if(!is_null($this->session->userdata('user_id'))){
													echo '
														<div class="add-to-cart" id="add-to-cart">
															<a >Add to cart</a>
														</div>
													';
												}else{
													echo'
														<div class="add-to-cart">
															<a href="'.site_url('user/login').'">Login to Shoping</a>
														</div>
													';
												}
											?>
											
											<!--
											<div class="add-to-links">
												<div class="add-to-wishlist">
													<a  data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
												</div>
												<div class="compare-button">
													<a  data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
												</div>									
											</div>
											-->
										</div>
									</div>
									<div class="singl-share">
                                        <a ><img src="img/single-share.png" alt=""></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--	<div class="col-md-12">
					<div class="single-product-tab">
						  <!-- Nav tabs 
						<ul class="details-tab">
							<li class="active"><a data-toggle="tab">Description</a></li>
							<!--
							<li class=""><a href="#messages" data-toggle="tab"> Review (1)</a></li>
							
						</ul>
						  <!-- Tab panes 
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="product-tab-content">
									<p><?php //echo $detail->product_description?></p>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="single-post-comments col-md-6 col-md-offset-3">
									
									<div class="comments-area">
										<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
										<div class="comments-list">
											<ul>
												<li>
													<div class="comments-details">
														<div class="comments-list-img">
															<img src="img/user-1.jpg" alt="">
														</div>
														<div class="comments-content-wrap">
															<span>
																<b><a >Admin - </a></b>
																<span class="post-time">October 6, 2014 at 1:38 am</span>
															</span>
															<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
														</div>
													</div>
												</li>									
											</ul>
										</div>
									</div>
									<div class="comment-respond">
										<h3 class="comment-reply-title">Add a review</h3>
										<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
										<form action="#">
											<div class="row">
												<div class="col-md-12">
													<p>Name *</p>
													<input type="text">
												</div>
												<div class="col-md-12">
													<p>Email *</p>
													<input type="email">
												</div>
												<div class="col-md-12">
													<p>Your Rating</p>
													<div class="pro-rating">
														<a ><i class="fa fa-star"></i></a>
														<a ><i class="fa fa-star"></i></a>
														<a ><i class="fa fa-star"></i></a>
														<a ><i class="fa fa-star-o"></i></a>
														<a ><i class="fa fa-star-o"></i></a>
													</div>
												</div>
												<div class="col-md-12 comment-form-comment">
													<p>Your Review</p>
													<textarea id="message" cols="30" rows="10"></textarea>
													<input type="submit" value="Submit">
												</div>
											</div>
										</form>
									</div>						
								</div>
							</div>
							
						</div>					
					</div>
				</div>-->
			</div>
		</div>
		<!-- product-details Area end -->
		<!-- product section start 
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
		
		<!-- jquery.meanmenu js
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
		
		<script>
			jQuery(function($) {
				//console.log('cek');
				$('a.elevatezoom-gallery').click(function(){
					var src = $(this).find('img').attr('src');
					$('img#zoom1').attr('src', $(this).find('img').attr('src'));
					//console.log(src);
					
				});
				
				$('#add-to-cart').click(function(){
					//console.log('asd');
					var content = $(this).parent();
					var product_id = '<?php echo $detail->product_id?>';	
					var quantity = $("#qty").val();
					var ukuran = $("#ukuran").val();
					var data = {'product_id':product_id, 'product_count':quantity, 'ukuran':ukuran};
					//console.log(data);
					if(ukuran == 0){
						alert('pilih ukuran terlebih dahulu !');
					}else{
						$.ajax({
							url:"<?php echo site_url('user/cart/addToCart')?>",
							type:'post',
							data:data
						}).success(function(result){
							result = JSON.parse(result);
							console.log(result);
							if(result == true){
								//location.reload();
								alert('Berhasil Menambahkan ke Keranjang Belanja');
							}
						});
					}
				});
			});
		</script>
    </body>

<!-- Mirrored from devitems.com/tf/lavoro-preview/lavoro/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2016 07:02:23 GMT -->
</html>