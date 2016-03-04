<div class="page-header">
	<h1>
		LIST
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			gendre
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	
	<div class="col-xs-7">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<!-- div.dataTables_borderWrap -->
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</th>
								<th>NO</th>
								<th>gen Name</th>								
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
								<?php
									$i=0;
									$no=1;
									foreach($genre as $gen){
										echo '
										<tr><td class="center">
											<label class="pos-rel">
												<input type="checkbox" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td>'.$no.'</td>
										<td>'. $gen ->productgenre_name .'</td>
										<td>'. $gen ->productgenre_description .'</td>
										<td>
											<div class="hidden-sm hidden-xs btn-group">
												<a href="'.base_url("index.php/admin/genre/edit/".$gen ->productgenre_id).'">
												<button class="btn btn-xs btn-info">
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</button>
												</a>
												<a href="'.base_url("index.php/admin/genre/do_delete/".$gen ->productgenre_id).'">
												<button class="btn btn-xs btn-danger" id="reset">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</button>
												</a>
											</div>
										</td>
												
										</tr>										
										';
										$i++;
										$no++;
									}
								?>
								
							
						</tbody>
					</table>
				</div>
				
			</div><!-- /.span -->
		</div><!-- /.row -->
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
	
	<div class="col-xs-5">
		<div class="row">
			<?php
				if(!isset($detail)){
					
					//$detail = array('productgenre_id' => NULL, 'productgenre_name' => NULL, 'productgenre_description'=> NULL);
					$detail = new stdclass();
					$detail->productgenre_id = NULL;
					$detail->productgenre_name = NULL;
					$detail->productgenre_description = NULL;
				}
				//var_dump($detail);
			?>
					<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('index.php/admin/genre/do_add'); ?>">
						<input type="hidden" name="gen_id" id="gen_id" value = "<?php echo $detail->productgenre_id?>"/>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Genre Name </label>
							<div class="col-sm-9">
								<input type="text" name="gen_name" id="gen_name" value = "<?php echo $detail->productgenre_name?>" placeholder="Input Your New Genre Here" class="col-xs-10" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
							<div class="col-sm-9">
							<textarea class="col-xs-10" id="genre_desc"  name="gen_desc" placeholder="Input Genre description"><?php echo $detail->productgenre_description?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-success" type="submit">
									<i class="ace-icon fa fa-check bigger-110"></i>
									Submit
								</button>	
								&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset" id="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
							</div>
						</div>			
					<form>
				
			
		</div>
	</div>
</div><!-- /.row -->

<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.colVis.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/bootstrap.js"></script>

<script>
//	$(document).load(function(){
		$('#reset').click(function(){
			$('#gen_id').val('');
			$('#gen_name').val('');
			$('#gen_desc').val('');
		});
//	});
</script>
