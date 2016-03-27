		<!-- header area start -->
		<header class="header-5 short-stor">
			<div class="container-fluid">
				<div class="row">
					<!-- logo start -->
					<div class="col-md-3 text-center">
						<div class="top-logo">
							<a href="index.html"><img src="<?php echo base_url()?>assets/theme/lavoro/img//logo-2.gif" alt="" /></a>
						</div>
					</div>
					<!-- logo end -->
					<!-- mainmenu area start -->
					<div class="col-md-6 text-center">
						<div class="mainmenu">
							<nav>
								<ul>
									<li class="expand"><a href="index.html">Home</a>
										<ul class="restrain sub-menu">
											<li><a href="index-2.html">Home 2</a></li>
											<li><a href="index-3.html">Home 3</a></li>
											<li><a href="index-4.html">Home 4</a></li>
											<li><a href="index-5.html">Home 5</a></li>
											<li><a href="index-6.html">Home 6</a></li>
											<li><a href="index-7.html">Home 7</a></li>
											<li><a href="index-8.html">Home 8</a></li>
										</ul>									
									</li>
									<li class="expand"><a href="shop-grid.html">Man</a>
										<div class="restrain mega-menu megamenu1">
											<span>
												<a class="mega-menu-title" href="shop-grid.html"> Dresses </a>
												<a href="shop-grid.html">Coctail</a>
												<a href="shop-grid.html">Day</a>
												<a href="shop-grid.html">Evening </a>
												<a href="shop-grid.html">Sports</a>
											</span>
											<span>
												<a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
												<a href="shop-grid.html">Blazers</a>
												<a href="shop-grid.html">Table</a>
												<a href="shop-grid.html">Coats</a>
												<a href="shop-grid.html">Kids</a>
											</span>
											<span>
												<a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
												<a href="shop-grid.html">T-Shirt</a>
												<a href="shop-grid.html">Coats</a>
												<a href="shop-grid.html">Jackets</a>
												<a href="shop-grid.html">Jeans</a>
											</span>
											<span class="block-last">
												<img src="<?php echo base_url()?>assets/theme/lavoro/img//block_menu.jpg" alt="" />
											</span>
										</div>
									</li>
									<li class="expand"><a href="shop-list.html">Women</a>
										<div class="restrain mega-menu megamenu2">
											<span>
												<a class="mega-menu-title" href="shop-grid.html">Rings</a>
												<a href="shop-grid.html">Coats & Jackets</a>
												<a href="shop-grid.html">Blazers</a>
												<a href="shop-grid.html">Jackets</a>
												<a href="shop-grid.html">Rincoats</a>
											</span>
											<span>
												<a class="mega-menu-title" href="shop-grid.html">Dresses</a>
												<a href="shop-grid.html">Ankle Boots</a>
												<a href="shop-grid.html">Footwear</a>
												<a href="shop-grid.html">Clog Sandals</a>
												<a href="shop-grid.html">Combat Boots</a>
											</span>
											<span>
												<a class="mega-menu-title" href="shop-grid.html">Accessories</a>
												<a href="shop-grid.html">Bootees bags</a>
												<a href="shop-grid.html">Blazers</a>
												<a href="shop-grid.html">Jackets</a>
												<a href="shop-grid.html">Shoes</a>
											</span>
											<span class="block-last">
												<a class="mega-menu-title" href="shop-grid.html">Top</a>
												<a href="shop-grid.html">Briefs</a>
												<a href="shop-grid.html">Camis</a>
												<a href="shop-grid.html">Nigntwears</a>
												<a href="shop-grid.html">Shapewears</a>
											</span>
										</div>
									</li>
									<li class="expand"><a href="shop-grid.html">Shop</a>
										<div class="restrain mega-menu megamenu4">
											<span>
												<a class="mega-menu-title" href="shop-list.html">Shop Pages</a>
												<a href="shop-list.html">List View </a>
												<a href="shop-grid.html">Grid View</a>
												<a href="login.html">My Account</a>
												<a href="wishlist.html">Wishlist</a>
												<a href="cart.html">Cart </a>
												<a href="checkout.html">Checkout </a>
											</span>
											<span class="block-last">
												<a class="mega-menu-title" href="product-details.html">Product Types</a>
												<a href="product-details.html">Simple Product</a>
												<a href="product-details.html">Variables Product</a>
												<a href="product-details.html">Grouped Product</a>
												<a href="product-details.html">Downloadable</a>
												<a href="product-details.html">Virtual Product</a>
												<a href="product-details.html">External Product</a>
											</span>
										</div>
									</li>
									<li class="expand"><a href="#">Pages</a>
										<ul class="restrain sub-menu">
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<?php
														
														if(isset($this->session->userdata['user_id'])){
															echo '<li><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';
														}else{
															echo '<li><a href="'.base_url('index.php/user/login').'">Login</a></li>';
														}
													?>
											<li><a href="product-details.html">Product Details</a></li>
											<li><a href="shop-grid.html">Shop Grid</a></li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li><a href="cart.html">Shopping cart</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="404.html">404 Error</a></li>
										</ul>									
									</li>
									<li class="expand"><a href="about-us.html">About</a></li>
									<li class="expand"><a href="contact-us.html">Contact</a></li>
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
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index-2.html">Home 2</a></li>
													<li><a href="index-3.html">Home 3</a></li>
													<li><a href="index-4.html">Home 4</a></li>
													<li><a href="index-5.html">Home 5</a></li>
													<li><a href="index-6.html">Home 6</a></li>
													<li><a href="index-7.html">Home 7</a></li>
													<li><a href="index-8.html">Home 8</a></li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Man</a>
												<ul>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Coctail</a></li>
															<li><a href="shop-grid.html">Day</a></li>
															<li><a href="shop-grid.html">Evening </a></li>
															<li><a href="shop-grid.html">Sports</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
														<ul>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Table</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Kids</a></li>
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
														<ul>
															<li><a href="shop-grid.html">T-Shirt</a></li>
															<li><a href="shop-grid.html">Coats</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jeans</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-list.html">Women</a>
												<ul>
													<li><a href="shop-grid.html">Rings</a>
														<ul>
															<li><a href="shop-grid.html">Coats & Jackets</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Rincoats</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Dresses</a>
														<ul>
															<li><a href="shop-grid.html">Ankle Boots</a></li>
															<li><a href="shop-grid.html">Footwear</a></li>
															<li><a href="shop-grid.html">Clog Sandals</a></li>
															<li><a href="shop-grid.html">Combat Boots</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Accessories</a>
														<ul>
															<li><a href="shop-grid.html">Bootees bags</a></li>
															<li><a href="shop-grid.html">Blazers</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
															<li><a href="shop-grid.html">Jackets</a></li>
														</ul>
													</li>
													<li><a href="shop-grid.html">Top</a>
														<ul>
															<li><a href="shop-grid.html">Briefs</a></li>
															<li><a href="shop-grid.html">Camis</a></li>
															<li><a href="shop-grid.html">Nigntwears</a></li>
															<li><a href="shop-grid.html">Shapewears</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop-grid.html">Shop</a>
												<ul>
													<li><a href="shop-list.html">Shop Pages</a>
														<ul>
															<li><a href="shop-list.html">List View </a></li>
															<li><a href="shop-grid.html">Grid View</a></li>
															<li><a href="login.html">My Account</a></li>
															<li><a href="wishlist.html">Wishlist</a></li>
															<li><a href="cart.html">Cart </a></li>
															<li><a href="checkout.html">Checkout </a></li>
														</ul>
													</li>
													<li><a href="product-details.html">Product Types</a>
														<ul>
															<li><a href="product-details.html">Simple Product</a></li>
															<li><a href="product-details.html">Variables Product</a></li>
															<li><a href="product-details.html">Grouped Product</a></li>
															<li><a href="product-details.html">Downloadable</a></li>
															<li><a href="product-details.html">Virtual Product</a></li>
															<li><a href="product-details.html">External Product</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Pages</a>
												<ul>
													<li><a href="shop-grid.html">Shop Grid</a></li>
													<li><a href="shop-list.html">Shop List</a></li>
													<li><a href="product-details.html">Product Details</a></li>
													<li><a href="contact-us.html">Contact Us</a></li>
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="cart.html">Shopping cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<?php
														
														if(isset($this->session->userdata['user_id'])){
															echo '<li><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';
														}else{
															echo '<li><a href="'.base_url('index.php/user/login').'">Login</a></li>';
														}
													?>
													<li><a href="404.html">404 Error</a></li>
												</ul>													
											</li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
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
							<!-- language division start 
							<div class="disflow">
								<div class="expand lang-all disflow">
									<a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img//country/en.gif" alt="">English</a>
									<ul class="restrain language">
										<li><a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img/country/it.gif" alt="">italiano</a></li>
										<li><a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img/country/nl_nl.gif" alt="">Nederlands</a></li>
										<li><a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img/country/de_de.gif" alt="">Deutsch</a></li>
										<li><a href="#"><img src="<?php echo base_url()?>assets/theme/lavoro/img/country/en.gif" alt="">English</a></li>
									</ul>
								</div>
								<div class="expand lang-all disflow">
									<a href="#">$ USD</a>
									<ul class="restrain language">
										<li><a href="#">€ Eur</a></li>
										<li><a href="#">$ USD</a></li>
										<li><a href="#">£ GBP</a></li>
									</ul>
								</div>
							</div>
							<!-- language division end -->
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
												<?php if($amount > 0){
												echo '<a href="checkout.html" class="button">Checkout</a>';
												}
												?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- addcart top start -->
							<!-- search divition start -->
							<div class="disflow">
								<div class="header-search expand">
									<div class="search-icon fa fa-search"></div>
									<div class="product-search restrain">
										<div class="container nopadding-right">
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
									<ul class="restrain language">
										<?php
											if(isset($this->session->userdata['user_id'])){
												echo '<li><a href="'.base_url('index.php/user/login/logout').'">Logout</a></li>';
												echo '<li><a href="'.base_url('index.php/user/login').'">My Account</a></li>';
												echo '<li><a href="#">My Cart</a></li>';
												echo '<li><a href="#">Checkout</a></li>';
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
		