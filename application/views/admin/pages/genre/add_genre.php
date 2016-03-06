<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/datepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/ac_master/css/colorpicker.min.css" />
		



<div class="page-header">
							<h1>
								Input
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Product
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/admin/product/do_add')?>" method="POST">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="name" placeholder="Nama" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Genre </label>

										<div class="col-sm-9">
											<select class="chosen-select ol-xs-10 col-sm-5" id="form-field-select-3" name="genre" data-placeholder="Choose a State...">
												<option value="">--pilih--</option>
												<?php
													$i=0;
													foreach($genre as $kat){
														echo "<option value='". $kat->productgenre_id ."'>". $kat->productgenre_name ."</option>";														
														$i++;
													}
												?>												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Size </label>

										<div class="col-sm-9">
											<select class="chosen-select ol-xs-10 col-sm-5" id="form-field-select-3" name="size" data-placeholder="Choose a State...">
												<option value="">--pilih--</option>
												<?php
													foreach($size as $ukuran){
														echo"<option value='". $ukuran->size_id ."'>". $ukuran->size_code ." - ".$ukuran->size_name."</option>";
													}
												?>												
											</select>
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> sex </label>
										<div class="col-sm-9">
											<select class="chosen-select ol-xs-10 col-sm-5" id="form-field-select-3" name="sex" data-placeholder="Choose a State...">
												<option value="">--pilih--</option>
												<?php
												
													$i=0;
													foreach($sex as $gender){
														echo "<option value='". $gender->gender_id ."'>". $gender->gender_name ."</option>";														
														$i++;
													}
												?>												
											</select>
										</div>
									</div>							
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Stock </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" name="stock" placeholder="Stock" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

										<div class="col-sm-9">											
											<textarea class="col-sm-3 control-label no-padding-right" name="description" id="textarea" placeholder="Description"></textarea>
										</div>
									</div>								
									
									<div class="space-4"></div>

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
					