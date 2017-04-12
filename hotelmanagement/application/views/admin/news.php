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
textarea.form-control.txtar {
    width: 100%;
    height: 300px;
}
</style>
<div class="row">
	<div class="col-xs-6">
		<h2 class="text-info text-left">
			Add News
		</h2>
	</div>
</div>	           
	<div class="row">		
		<div class="col-sm-6 col-xs-12">
			<div class="table-responsive">
				<table class="table ind-mall">
				<?php  echo form_open_multipart("htm-admin/News/add"); ?>
					
					<tr>
						<td>News content</td>
						<td><textarea class="form-control txtar" name="hname"  required/><?php echo $content[0]->content; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<input class="btn btn-info" id="submitbutton" type="submit" name="submit-news" value="ADD"  />
							</center>
						</td>
					</tr>
					<?php echo form_close(); ?>
				</table>				
			</div>
			
		</div>			
		<div class="col-sm-6 col-xs-12"></div>	
	</div>


