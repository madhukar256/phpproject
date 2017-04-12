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
			Edit Room
		</h2>
	</div>
</div>	           
	<div class="row">		
		<div class="col-sm-6 col-xs-12">
			<div class="table-responsive">
				<table class="table ind-mall">
				<?php  echo form_open_multipart("htm-admin/rooms/editmake"); ?>
					
					<tr>
						<td>Hotel Name</td>
						<td><input type="text" class="form-control" name="hname" value="<?php echo $room[0]->hname; ?>" required/></td>
					</tr>
					<tr>
						<td>Price </td>
						<td><input class="form-control" type="text" value="<?php echo $room[0]->price; ?>"  name="price" required/></td>
					</tr>
					<tr>
						<td>Type </td>
						<td>  
						<input type="radio" name="type" <?php if($room[0]->type == "Premier Collection"){	echo "checked='checked'";} ?> value="Premier Collection" > Premier Collection
						<input type="radio" name="type" <?php if($room[0]->type == "Standard Collection"){	echo "checked='checked'";} ?> value="Standard Collection"> Standard Collection
						Other
						</td>
					</tr>					
					<tr>
						<td colspan="2">
							<center>
						<input type="hidden" name="room_id" value="<?php echo $room[0]->id; ?>"  />
								
								<input class="btn btn-info" id="submitbutton" type="submit" name="submit-eidt" value="UPDATE"  />
							</center>
						</td>
					</tr>
					<?php echo form_close(); ?>
				</table>				
			</div>
			
		</div>			
		<div class="col-sm-6 col-xs-12"></div>	
	</div>


