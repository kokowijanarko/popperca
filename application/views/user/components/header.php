		<!-- header area start -->
		<header class="header-5 short-stor">
			<div class="container-fluid">
				<div class="row">
					<!-- logo start -->
					<div class="col-md-3 text-center">
						<div class="top-logo">
							<!--
							<a href="index.html"><img src="<?php echo base_url()?>assets/theme/lavoro/img//logo-2.gif" alt="" /></a>
							-->
						</div>
					</div>
					<!-- logo end -->
					<!-- mainmenu area start -->
					<div class="col-md-6 text-center">
						<div class="mainmenu">
							<nav>
								<ul>
									<li class="expand"><a href="<?php echo base_url()?>">Home</a>
																		
									</li>
									<li class="expand"><a href="#">Go to...</a>
										
										<div class="restrain mega-menu megamenu1">
											<span>
												<a class="mega-menu-title" href="#"> Brand </a>
												<a href="<?php echo site_url('home/popperca')?>">Popperca</a>
												<a href="<?php echo site_url('home/latulitu')?>">Latulitu</a>
												<a href="<?php echo site_url('home/bekakas')?>">Bekakas </a>
												<a href="<?php echo site_url('home/obbie')?>">Obbie</a>	
											</span>
											
											<span>
												<a class="mega-menu-title" href="#l"> Lain - lain </a>
												<a href="<?php echo site_url('home/about')?>">Tentang Kami</a>
												<a href="#">Even</a>
												<a href="<?php echo site_url('home/article')?>">Artikel </a>
												<a href="<?php echo site_url('home/counterparty')?>">Rekanan & Konsumen</a>											
											</span>
											
										</div>
										
										
											
										
									
									</li>
									<?php
										if(isset($this->session->userdata['user_id'])){
											echo '<li class="expand"><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';
										}else{
											echo '<li class="expand"><a href="'.base_url('index.php/user/login').'">Login</a></li>';
										
										}
									?>
									
								</ul>
							</nav>
						</div>
						<!-- mobile menu start -->
						<div class="row">
							<div class="col-sm-12 mobile-menu-area">
								<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
									<span class="mobile-menu-title">Menu</span>
									<nav>
										<ul>
											<li><a href="<?php echo base_url()?>">Home</a>
											</li>
											<li><a href="#">Go to...</a>												
												<ul>
													<li><a href="#">Brand</a>
														<ul>
															<li><a href="<?php echo site_url('home/popperca')?>">Popperca</a></li>
															<li><a href="<?php echo site_url('home/latulitu')?>">Latulitu</a></li>
															<li><a href="<?php echo site_url('home/bekakas')?>">Bekakas </a></li>
															<li><a href="<?php echo site_url('home/obbie')?>">Obbie</a>	</li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="#"> Lain - Lain </a>
														<ul>
															<li><a href="<?php echo site_url('home/about')?>">Tentang Kami</a></li>
															<li><a href="#">Even</a></li>
															<li><a href="<?php echo site_url('home/articel')?>">Artikel </a></li>
															<li><a href="<?php echo site_url('home/counterparty')?>">Rekanan & Konsumen</a>		</li>
														</ul>
													</li>													
												</ul>
											
											</li>
											
											<li><a href="#">Shoping</a>												
												
												<ul>
													<?php
														if(isset($this->session->userdata['user_id'])){
															echo '<li><a href="'.base_url('index.php/user/invoice/list_invoice').'">Invoice / Confirm</a></li>';
															echo '<a href="'.base_url('user/cart/checkout/'.$this->session->userdata('user_id')).'" class="button">Checkout</a>';
															echo '<li><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';												
															//echo '<li><a href="'.base_url('index.php/user/login').'">My Account</a></li>';
															//echo '<li><a href="#">My Cart</a></li>';
															}else{
															echo '<li><a href="'.base_url('index.php/user/login').'">Login</a></li>';
														}
													?>
												</ul>																									
												
											</li>
											
											</li>											
										</ul>
									</nav>
								</div>						
							</div>
						</div>
						<!-- mobile menu end -->
					</div>
					<!-- mainmenu area end -->
					<!-- top details area start -->
					<div class="col-md-3 nopadding-left">
						<div class="top-detail">							
							<!-- addcart top start -->
							<div class="disflow">
								<div class="circle-shopping expand">
									<div class="shopping-carts text-right">
										
										<div class="cart-toggler">
											<a href="#"><i class="icon-bag"></i></a>
											<?php
												if(isset($_SESSION['product_id'])){
													$count_product = count($_SESSION['product_id']);
													echo '<a id="prod-count"><span class="cart-quantity"></span></a>';
												}
											?>
											
										</div>
										<div class="restrain small-cart-content">
											<ul class="cart-list">	
												
												<?php
													if(isset($_SESSION['product_id'])){
														if(count($_SESSION['product_id']) > 0){
															echo '
																<li>
																	<div style="float:left">
																	<a href="'.base_url('index.php/home/cart').'" class="edit-btn"><img alt="Edit Cart" /></a>
																	</div>
																	<div style="float:right">
																	<a class="emty-btn"><img alt="Emty Cart" /></a>
																	</div>
																</li>															
															';
															foreach($_SESSION['product_id'] as $id){
																$query = $this->db->get_where("pop_product", array("product_id"=>$id));
																$prod = $query->row();
																$query = $this->db->get_where("pop_product_image", array("productimage_product_id"=>$id), 1);
																$image_cart = $query->row();
																echo '
																<li>
																	<a class="sm-cart-product" href="product-details.html">
																		<img src="'.base_url('file/product_img/'.$image_cart->productimage_name).'" alt="">
																	</a>
																	<div class="small-cart-detail">
																		<a class="remove-cart-item" id="'.$id.'"><i class="fa fa-times-circle"></i></a>
																		
																		<a class="small-cart-name" href="product-details.html">'.$prod->product_name.'</a>
																		<span class="quantitys"><strong>'.$_SESSION['product_count'][$id].'</strong>x<span>'.number_format($prod->product_price, 2, ',', '.').'</span></span>
																	</div>
																</li>
																';
																$price[] = $prod->product_price * $_SESSION['product_count'][$id];
															}
															$amount = array_sum($price);
														}else{
															$amount =0;
														}											
														
													}else{
														$amount =0;
													}
												?>												
											</ul>
											<p class="total">Subtotal: <span class="amount"><?php echo number_format($amount, 2, ',', '.')?></span></p>
											<p class="buttons">
												<?php //if($amount > 0){
												echo '<a href="'.base_url('user/cart/checkout/'.$this->session->userdata('user_id')).'" class="button">Checkout</a>';
												//}
												?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- addcart top start -->
							<!-- search divition start 
							<div class="disflow">								
								<div class="header-search expand">
									<div class="search-icon fa fa-search"></div>
									<div class="product-search restrain">
										<div class="container nopadding-right">
											<!--
											<form action="http://devitems.com/tf/lavoro-preview/lavoro/index.html" id="searchform" method="get">
												
												<div class="input-group">
													<input type="text" class="form-control" maxlength="128" placeholder="Search product...">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
												
											</form>
											
										</div>
									</div>
								</div>
							</div>
							<!-- search divition end -->
							<div class="disflow">
								<div class="expand dropps-menu">
									<a href="#"><i class="fa fa-align-right"></i></a>
									<ul class="restrain">
										<?php
											if(isset($this->session->userdata['user_id'])){
												echo '<li><a href="'.base_url('index.php/user/invoice/list_invoice').'">Invoice / Confirm</a></li>';
												echo '<a href="'.base_url('user/cart/checkout/'.$this->session->userdata('user_id')).'" class="button">Checkout</a>';
												echo '<li><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';												
												//echo '<li><a href="'.base_url('index.php/user/login').'">My Account</a></li>';
												//echo '<li><a href="#">My Cart</a></li>';
												}else{
												echo '<li><a href="'.base_url('index.php/user/login').'">Login</a></li>';
											}
										?>
									</ul>
								</div>
							</div>				
						</div>
					</div>
					<!-- top details area end -->
				</div>
			</div>
			
		</header>
		<!-- header area end -->
		