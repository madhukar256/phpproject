
 <div class="reg_area">
 <?php
if(isset($_GET['msg']) && $_GET['msg'] == "succ"){
echo "<p class='succ'>Profile updated</p>";
}

if(isset($_GET['msg']) && $_GET['msg'] == "error"){
echo "<p class='err'>You have entered wrong current password</p>";
}


echo "<p class='succ'>Change Password</p>";


 ?>
<?php echo form_open("profile/edit"); ?> 
	<input type="text" class="form-control" name="name" id="name" placeholder="Username" value="<?php echo $userdata[0]->username; ?>" required disabled/><br />
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $userdata[0]->email; ?>" required disabled/><br />
    <input type="password" class="form-control" name="oldpassword" id="password" placeholder="Current Password" required/><br />
    <input type="password" class="form-control" name="cpassword" id="password" placeholder="New Password" required/><br /><br />  
    <input type="submit" class="btn btn-primary" name="edit" value="Update" /> <br />   
<?php echo form_close(); ?>
</div>