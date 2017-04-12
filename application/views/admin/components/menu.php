<script src="<?php echo base_url()?>assets/theme/ac_master/js/bootstrap.min.js"></script>

<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Invoice </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/invoice/invoice')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Show Invoice
								</a>
								<b class="arrow"></b>
							</li>							
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Produk </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/product/add_baju')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Product
								</a>
								<b class="arrow"></b>
							</li>	
							<li class="">
								<a href="<?php echo base_url('index.php/admin/product/list_product')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Produk
								</a>
								<b class="arrow"></b>
							</li>		
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-sitemap"></i>
							<span class="menu-text"> Product Attribute </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/genre/list_genre')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Genre
								</a>
								<b class="arrow"></b>
							</li>	
							<li class="">
								<a href="<?php echo base_url('index.php/admin/size/list_size')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Size
								</a>
								<b class="arrow"></b>
							</li>		
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">Custommers</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/custommer/list_custommer')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									List Custommer
								</a>
								<b class="arrow"></b>
							</li>	
							<li class="">
								<a href="<?php echo base_url('index.php/admin/size/list_size')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Size
								</a>
								<b class="arrow"></b>
							</li>		
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> Display </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/banner/show')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Banner
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
