<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/datepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/colorpicker.min.css" />
		

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				
			}
		</script>

<div class="page-header">
							<h1>
								Input
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Banner
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
								<form class="form-horizontal" action="<?php echo base_url('index.php/admin/banner/do_add')?>" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Profile Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="name" placeholder="Nama" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status </label>

										<div class="col-sm-9">
											<select class="chosen-select ol-xs-10 col-sm-5" id="form-field-select-3" name="Status" data-placeholder="Choose a State...">
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

										<div class="col-sm-9">											
											<textarea class="col-xs-10 col-sm-5" name="description" id="textarea" placeholder="Description"></textarea>
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
					