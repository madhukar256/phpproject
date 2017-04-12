<div class="row">
	<div class="col-xs-6">
		<h2 class="text-info text-left">
			BRANDS
		</h2>
	</div>
	<div class="col-xs-6">
		<a href="<?php echo base_url(); ?>htm-admin/rooms/newadd" class="btn btn-primary pull-right">
			<i class="fa fa-plus" style="color:#fff;"></i>
			Add New
		</a>
	</div>
</div>
<?php 
if(isset($links)){
?>
<div class="row">
	<div class="paginationlinks">
		<?php echo $links; ?>
	</div>
</div>
<?php 
}
?>
<div class="row">
	<div class="col-xs-12">
		<?php
			
			//$all_list = $controller->all_rooms();
			if(!empty($all_list))
			{
				?>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Room Logo</th>
									<th>hotel Name</th>
									<th>Type</th>
									<th>Price</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach($all_list as $key)
									{
									?>	
										<tr>
											<td>
												<img class="logo-bsckend" src="<?php echo $key->img_path;?>">
												
											</td>
											<td><?php echo $key->hname; ?></td>								
											<td><?php echo $key->type; ?></td>									
											<td><?php echo $key->price; ?></td>									
											<td><a href="<?php echo base_url(); ?>htm-admin/rooms/edit/<?php echo $key->id; ?>">Edit</a></td>									
											<td><a href="<?php echo base_url(); ?>htm-admin/rooms/delete/<?php echo $key->id; ?>">Delete</a></td>									
										</tr>
									<?php 	
									}
								?>
							</tbody>
						</table>
					</div>
				<?php 
			}
			else
			{
				echo "<h2 class='text-primary text-center'>No Result Found!!!</h2>";
			}
		?>
	</div>
</div>