<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>popperca</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<?php $this->load->view('admin/components/header')?>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<?php $this->load->view('admin/components/menu')?>
			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Poduct
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									List
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div>
								<?php
									$msg = $this->session->flashdata('msg');
									if($msg){										
										echo $this->session->flashdata('msg');
									}
								?>
							</div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->							
								<div class="row">	
									<div class="col-xs-12">
										<a id="add" class="btn btn-app btn-purple btn-xs" onClick="add()">Add</a>
										<a id="cancel" class="btn btn-app btn-danger btn-xs hidden" onClick="cancel()">cancel</a>
									</div>
									<div class="col-xs-12">
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th width="5px">NO</th>														<th width="80px">Profile Name</th>
														<th width="50px">Status</th>
														<th width="100px">Description</th>
														<th width="100px">Image(s)</th>
														<th width="15px">action</th>
													</tr>
												</thead>
												<tbody>							
														<?php
															//var_dump($size);
															$i=0;
															$no=1;
															
															foreach($banner as $ban){
																$isActive = 'Active';
																if($ban->banner_status == 0){
																	$isActive = 'Not Active';
																}
																
																$img = '';
																foreach($ban->images as $image){
																	$img .= '<img width="90px" src="'. base_url('file/banner/'. $image->bandet_file_name) .'" />';
																}
																echo '
																<tr>
																	<td>'.$no.'</td>
																	<td>'.$ban->banner_name.'</td>
																	<td>'.$isActive.'</td>
																	<td>'.$ban->banner_desc.'</td>
																	<td>'.$img.'</td>
																	<td>
																		<div class="hidden-sm hidden-xs btn-group">
																			<button class="btn btn-xs btn-info edit" value="'. $ban->banner_id .'">
																				<i class="ace-icon fa fa-pencil bigger-120"></i>
																			</button>
																			<a href="'.base_url("index.php/admin/banner/do_delete/".$ban->banner_name).'">
																			<button class="btn btn-xs btn-danger">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</button>
																			</a>
																		</div>
																	</td>
																</tr>																	
																';
																$no++;
															}
														?>
												</tbody>					
											</table>
										</div>
									</div>
								</div>

							</div><!-- /.col -->
							
							<div id="input-form" class="col-xs-12 hidden">
								<div class="row">
									<div>
										<?php
											$msg = $this->session->flashdata('msg');
											if($msg){										
												echo $this->session->flashdata('msg');
											}
										?>
									</div>
									<div class="col-xs-12">
										<!-- PAGE CONTENT BEGINS -->
										<form class="form-horizontal" action="<?php echo base_url('index.php/admin/banner/insert')?>" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

												<div class="col-sm-9">
													<input type="text" id="banner_id" name="banner_id" class="col-xs-10 col-sm-5" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Profile Name </label>

												<div class="col-sm-9">
													<input type="text" id="banner_name" name="banner_name" placeholder="Banner Profil Name" class="col-xs-10 col-sm-5" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status </label>

												<div class="col-sm-9">
													<select class="chosen-select ol-xs-10 col-sm-5" id="banner_status" name="banner_status" data-placeholder="Choose a State...">
														<option value="0">Not Active</option>
														<option value="1">Active</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Image </label>

												<div class="col-sm-9">
													<input type="file" multiple name="gambar[]"/>
													<i>you can upload 1 or more image and file(s) must in *.jpg format</i>
												</div>
											</div>
											<div class="form-group">	
												<div class="col-sm-3">
												</div>
												<div class="col-sm-6" >														
														<div class="banner_images"></div>													
												</div>
											</div>	
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

												<div class="col-sm-9">											
													<textarea class="col-xs-10 col-sm-5" name="banner_desc" id="banner_desc" placeholder="Description"></textarea>
												</div>
											</div>		
											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button class="btn btn-info" type="submit">
														<i class="ace-icon fa fa-check bigger-110"></i>
														Submit
													</button>
													&nbsp; &nbsp; &nbsp;
													<button class="btn" type="reset">
														<i class="ace-icon fa fa-undo bigger-110"></i>
														Reset
													</button>
												</div>
											</div>
										</form>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /.row -->						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/components/footer')?>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url()?>assets/theme/ac_master/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url()?>assets/theme/ac_master/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>assets/theme/ac_master/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.colVis.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>assets/theme/ac_master/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			function add(){
				$('#cancel').removeClass('hidden');
				$('#input-form').removeClass('hidden');
				$('#add').addClass('hidden');
			}
				
			function cancel(){
				$('#add').removeClass('hidden');
				$('#cancel').addClass('hidden');
				$('#input-form').addClass('hidden');
			}
			
			jQuery(function($) {
				
				//get data for edit
				$('.edit').click(function(){
					
					var id = $(this).val();
					
					$.ajax({
						data:{'id':id},
						method:'post',
						url:'<?php echo site_url('admin/banner/edit')?>'
					}).success(function(result){
						result = JSON.parse(result);
						
						$('#banner_id').val(result['banner'][0]['banner_id']);
						$('#banner_name').val(result['banner'][0]['banner_name']);
						$('#banner_desc').text(result['banner'][0]['banner_desc']);
						
						$('#banner_status').empty();
						
						if(result['banner'][0]['banner_status'] == 0){
							$('#banner_status').append('<option value="0" selected >Not Active</option><option value="1">Active</option>');							
						}else{
							$('#banner_status').append('<option value="0">Not Active</option><option value="1" selected>Active</option>');
						}
						
						$('.banner_images').empty();
						$.each(result['banner'][0]['images'], function(idx){
							// console.log(result['banner'][0]['images'][idx]['bandet_file_name']);
							var img_url = "<?php echo base_url('file/banner'); ?>" + "/" + result['banner'][0]['images'][idx]['bandet_file_name'];
							// console.log(img_url);
							$('.banner_images').append('<div class="col-sm-2 no-padding-center"><a class="delete" id="'+result['banner'][0]['images'][idx]['bandet_id']+'"></a><img width="90px" src="'+ img_url + '" /></ br></div>');
						})
						
					})
					
					$('#cancel').removeClass('hidden');
					$('#input-form').removeClass('hidden');
					$('#add').addClass('hidden');
				});
				
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, 
					  { "bSortable": false }
					],
					"aaSorting": []
			
			    } );
				
				$(".delete").click(function() {
					var commentContainer = $(this).parent();
					var id = $(this).attr("id");
					console.log(id);
					var url = '<?php echo site_url("admin/banner/deleteImg/'+id+'");?>';					
					$.ajax({
						url:url,
						method:'post'
					}).success(function(result){
						result = JSON.parse(result);
						console.log(result);
						if(result == true){
							commentContainer.slideUp('slow', function() {$(this).remove();});
						}					
					});

				});
			})
		</script>
	</body>
</html>
