<script>	
	console.log('xxxx');	
	function changeStatus(){
		var cek = $('#status option:selected').val();
		var parse = cek.split('|');
		var data = {
			'id_status' : parse[0]
		};
		var updateStatus = "<?php echo base_url('index.php/admin/invoice/update_status/'.$invoice_detail->invoice_id)?>";
		
		$.ajax({
			url: updateStatus,
			type: 'post',
			data: data
		}).success(function(result){
			result = JSON.parse(result);
			if(result == true){
				alert('Ubah Tipe Berhasil!');
			}else{
				alert('Status Gagal!');
			}
		});
		
		
	};	
</script>
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
				<div class="row">
					<div class="col-xs-6">					
						<div>
							<table>
								<tr>
									<td width="80px">ID Invoice</td>
									<td width ="10px">:</td>
									<td><b><?php echo $invoice_detail->invoice_number ?></b></td>
								</tr>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td><?php echo $invoice_detail->custommer_name ?></td>
								</tr>
								<tr>
									<td>Date</td>
									<td>:</td>
									<td><?php echo date('d M Y', strtotime($invoice_detail->invoice_date)) ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td><?php echo $invoice_detail->custommer_address;?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->cus_kecamatan.' | '.$invoice_detail->custommer_pos_code?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->cus_kabupaten?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->cus_provinsi?></td>
								</tr>
							</table>							
						</div>						
					</div>
					<div class="col-xs-6">
						<table>
							<tr>
									<td width="120px">Delivery Address</td>
									<td width="10px">:</td>
									<td><?php echo $invoice_detail->invoice_address;?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->inv_kecamatan .' | '.$invoice_detail->invoice_pos_code?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->inv_kabupaten?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo $invoice_detail->inv_provinsi?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td>
										<select id="status" onChange="changeStatus()">
											<?php
												foreach($status as $stat){
													if($invoice_detail->status_id == $stat->status_id){
														$cek = "selected";
													}else{
														$cek="";
													}
													echo '<option val="'.$stat->status_id.'"'.$cek.'>'.$stat->status_id.'|'.$stat->status_name.'</option>';
												}
												
											?>
										</select>
									</td>
								</tr>
						</table>
					</div>
					
				</div>
				</br>
				</br>
				<!-- div.dataTables_borderWrap -->
				<div>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								
								<th>NO</th>
								<th>Product Name</th>
								<th>Genre</th>
								<th>Sex</th>
								<th>Price</th>													
								<th>Count</th>
								<th>Total Price</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no=1;
								foreach($product_detail as $dtl){
									$price[] = $dtl->invoicedetail_price_total;
									echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$dtl->product_name.'</td>
											<td>'.$dtl->productgenre_name.'</td>
											<td>'.$dtl->gender_name.'</td>
											<td align="right"><div style="float:left">Rp.</div>'.number_format($dtl->invoicedetail_price, 2, ',', '.').'</td>
											<td align="center">'.$dtl->invoicedetail_count.'</td>
											<td align="right"><div style="float:left">Rp.</div>'.number_format($dtl->invoicedetail_price_total, 2, ',', '.').'</td>
										</tr>
									
									';
									$no++;
								}
							?>
							<tr>
								<th colspan="6">Total</th>
								<td align="right"><b><div style="float:left">Rp.</div><?php echo number_format(array_sum($price), 2, ',', '.');?></b></td>
							</tr>
						</tbody>
					</table>
				</div>
			
			</div><!-- /.span -->
		</div><!-- /.row -->
		<!-- PAGE CONTENT ENDS -->
		
							
	</div><!-- /.col -->

		
</div><!-- /.row -->


