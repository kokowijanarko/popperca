<div class="page-header">
	<h1>
		LIST
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			INVOICES
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<!-- div.dataTables_borderWrap -->
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>								
								<th>NO</th>
								<th>ID Invoice</th>
								<th>Pemesan</th>
								<th>Tanggal</th>
								<th>Jumlah</th>													
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no=1;
								foreach($invoice as $inv){									
									echo '
										<tr>											
											<td>
												1
											</td>
											<td><a href="'.base_url('index.php/admin/invoice/list_detail/'.$inv->invoice_id).'">'.$inv->invoice_number.' </a></td>
											<td>'.$inv->custommer_name.'</td>
											<td>'.$inv->invoice_date.'</td>
											<td>'.$inv->invoice_amount.'</td>
											<td><span class="'.$inv->status_class .'">'.$inv->status_name.'</span></td>
											<td>
												<div class="hidden-sm hidden-xs btn-group">
													<a href="'.base_url("index.php/admin/invoice/edit/".$inv->invoice_id).'">
														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>
													</a>
													<a href="'.base_url("index.php/admin/invoice/do_delete/".$inv->invoice_id).'">
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
			
			</div><!-- /.span -->
		</div><!-- /.row -->
		<!-- PAGE CONTENT ENDS -->
		
		<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							
	</div><!-- /.col -->
</div><!-- /.row -->

<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/dataTables.colVis.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/bootstrap.js"></script>

<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.colVis.min.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url()?>assets/theme/ac_master/js/jquery.dataTables.min.js"></script>
