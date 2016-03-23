<script>
	console.log('asd');
	function add(){		
		console.log('xxx');				
		$('#dynamic-table').addClass('hidden');			
		$('#add_form').removeClass('hidden');			
		$('#add').addClass('hidden');	
		$('#cancel').removeClass('hidden');
	};
	
	function cancel(){
		$('#dynamic-table').removeClass('hidden');			
		$('#add_form').addClass('hidden');			
		$('#add').removeClass('hidden');
		$('#cancel').addClass('hidden');		
	}
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
	
	function edit(id){
		$('#dynamic-table').addClass('hidden');			
		$('#add_form').removeClass('hidden');	
		$('#add').addClass('hidden');	
		$('#cancel').removeClass('hidden');
		var url = "<?php echo base_url()?>index.php/admin/custommer/get_custommer/"+id;
		$.ajax({
			url: url			
		}).success(function(result){
			result = JSON.parse(result);
			console.log(result);
			
			$('#custommer_id').val(result['custommer_id']);
			$('#custommer_name').val(result['custommer_name']);
			$('#custommer_type').val(result['custommer_type']);
			$('#custommer_address').val(result['custommer_address']);
			$('#custommer_provinsi_id').val(result['custommer_provinsi_id']);			
			$('#custommer_pos_code').val(result['custommer_pos_code']);
			$('#custommer_phone').val(result['custommer_phone']);
			$('#custommer_username').val(result['custommer_username']);
			$('#custommer_email').val(result['custommer_email']);
			$('#custommer_password').val(result['custommer_password']);
			
			var urlKab = "<?php echo base_url()?>index.php/admin/custommer/get_kab/"+result['custommer_provinsi_id'];
			$.ajax({
				url: urlKab			
			}).success(function(resultKab){
				resultKab = JSON.parse(resultKab);
				console.log(resultKab);
				for(i=0; i<resultKab.length; i++){
					if(result['custommer_kabupaten_id'] == resultKab[i]['IDKabupaten']){
						var sel = "selected";
					}else{
						sel="";
					}
					$("#custommer_kabupaten_id").append('<option '+sel+' value='+resultKab[i]['IDKabupaten']+'>'+resultKab[i]['Nama']+'</option>');
				}
				
				var urlKec = "<?php echo base_url()?>index.php/admin/custommer/get_kec/"+result['custommer_kabupaten_id'];
				$.ajax({
					url: urlKec			
				}).success(function(resultKec){
					resultKec = JSON.parse(resultKec);
					console.log(resultKec);
					for(i=0; i<resultKec.length; i++){
						if(result['custommer_kecamatan_id'] == resultKec[i]['IDKecamatan']){
							var sel = "selected";
						}else{
							sel="";
						}
						$("#custommer_kecamatan_id").append('<option '+sel+' value='+resultKec[i]['IDKecamatan']+'>'+resultKec[i]['Nama']+'</option>');
					}			
				});		
			});
		});
		
		function showPass(){
			console.log('cok');
			$('#custommer_password').attr('type', 'text');
		}
	}
</script>

<div class="page-header">
	<h1>
		LIST
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Product
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<a id="add" class="btn btn-app btn-purple btn-xs" onClick="add()">Add</a>
				<a id="cancel" class="btn btn-app btn-danger btn-xs hidden" onClick="cancel()">cancel</a>
			</div>
			<div class="col-xs-12">
				<!-- div.dataTables_borderWrap -->
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								
								<th>NO</th>
								<th>Name</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Tytpe</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
								<?php
									$i=0;
									$no=1;
									foreach($list as $listing){
										echo '
										
										<td>'.$no.'</td>
										<td>'. $listing->custommer_name .'</td>
										<td>
											<div>'. $listing->custommer_address .'</div>
											<div>'. $listing->cus_kecamatan .' | '. $listing->custommer_pos_code.'</div>
											<div>'. $listing->cus_kabupaten.'</div>
											<div>'. $listing->cus_provinsi .'</div>
										</td>
										<td>'. $listing->custommer_phone .'</td>
										<td>'. $listing->custommertype_type .'</td>
										<td>
											<div class="hidden-sm hidden-xs btn-group">
												<a>
												<button class="btn btn-xs btn-info" id="btn_edit" onClick="edit('.$listing->custommer_id.')">
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</button>
												</a>
												<a href="'.base_url("index.php/admin/custommer/do_delete/".$listing->custommer_id).'">
												<button class="btn btn-xs btn-danger">
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

	<div class="col-xs-7">
		<div class="row">			
					<form id="add_form" class="form-horizontal hidden" role="form" method="POST" action="<?php echo base_url('index.php/admin/custommer/do_add'); ?>">
						<input type="hidden" name="custommer_id" id="custommer_id" />
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
							<div class="col-sm-9">
								<input type="text" name="custommer_name" id="custommer_name" placeholder="Input Your Name Here" class="col-xs-10" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Acount Type </label>
							<div class="col-sm-9">
								<select name="custommer_type" id="custommer_type" class="col-xs-10" onchange="getKab()" required>
									<option value="" >--SELECT--</option>
									<?php
										foreach($type as $tp){
											echo '
												<option value="'.$tp->custommertype_id .'" >'.$tp->custommertype_type.'</option>											
											';
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
							<div class="col-sm-9">
								<textarea name="custommer_address" id="custommer_address" placeholder="Input address (e.g: Street, Number)" class="col-xs-10"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Provinsi </label>
							<div class="col-sm-9">
								<select name="custommer_provinsi_id" id="custommer_provinsi_id" class="col-xs-10" onchange="getKab()">
									<option value="" >--SELECT--</option>
									<?php
										foreach($provinsi as $prov){
											echo '
												<option value="'.$prov->IDProvinsi .'" >'.$prov->Nama.'</option>											
											';
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kabupaten </label>
							<div class="col-sm-9">
								<select name="custommer_kabupaten_id" id="custommer_kabupaten_id" class="col-xs-10" onChange="getKec()">
									<option value="" >--SELECT--</option>
									
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kecamatan </label>
							<div class="col-sm-9">
								<select name="custommer_kecamatan_id" id="custommer_kecamatan_id" class="col-xs-10" >
									<option value="" >--SELECT--</option>
									
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pos Code </label>
							<div class="col-sm-9">
								<input type="text" name="custommer_pos_code" id="custommer_pos_code" placeholder="Input Pose Code Number" class="col-xs-10" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone </label>
							<div class="col-sm-9">
								<input type="text" name="custommer_phone" id="custommer_phone" placeholder="Input Phone Number" class="col-xs-10" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>
							<div class="col-sm-9">
								<input type="text" name="custommer_username" id="custommer_username" placeholder="Input username" class="col-xs-10" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
							<div class="col-sm-9">
								<input type="email" name="custommer_email" id="custommer_email" placeholder="Input Email" class="col-xs-10" />
							</div>
						</div>
						
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>
							<div class="col-sm-9">
								<input type="password" name="custommer_password" id="custommer_password" placeholder="Input Password" class="col-xs-10" onDrag="showPass()" onDragLeave="hiddePass" />
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
					</form>
				
			
		</div>
	</div>
</div><!-- /.row -->

<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.colVis.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/bootstrap.js"></script>