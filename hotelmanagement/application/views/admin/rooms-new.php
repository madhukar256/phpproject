<style>
.ind-rest{
	display:none;
}
.ind-shop{
	display:none;
}
.ind-brand{
	display:none;
}
</style>
<div class="row">
	<div class="col-xs-6">
		<h2 class="text-info text-left">
			Add New Room
		</h2>
	</div>
</div>	           
	<div class="row">		
		<div class="col-sm-6 col-xs-12">
			<div class="table-responsive">
				<table class="table ind-mall">
				<?php  echo form_open_multipart("htm-admin/rooms/add"); ?>
					
					<tr>
						<td>Hotel Name</td>
						<td><input type="text" class="form-control" name="hname" placeholder="" required/></td>
					</tr>
					<tr>
						<td>Price </td>
						<td><input class="form-control" type="text" class="" name="price" required/></td>
					</tr>
					<tr>
						<td>Type </td>
						<td>  
						<input type="radio" name="type" value="Premier Collection" checked> Premier Collection
						<input type="radio" name="type" value="Standard Collection"> Standard Collection
						Other
						</td>
					</tr>
					
					<tr>
						<td>Room banner</td>
						<td><input type="file" class="" name="userfile" required/></td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<input class="btn btn-info" id="submitbutton" type="submit" name="submit-room" value="ADD"  />
							</center>
						</td>
					</tr>
					<?php echo form_close(); ?>
				</table>				
			</div>
			
		</div>			
		<div class="col-sm-6 col-xs-12"></div>	
	</div>


