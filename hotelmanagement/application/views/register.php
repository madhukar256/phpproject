
 <div class="reg_area">
 <?php
if(isset($_GET['succ'])){
echo "<p class='succ'>Registration Done</p>";
}

if(isset($_GET['err'])){
echo "<p class='err'>Email already exists</p>";
}

if(!isset($_GET['succ'])){
echo "<p class='succ'>Registration</p>";
}

 ?>
<?php echo form_open("register/registration"); ?> 
	<input type="text" class="form-control" name="name" id="name" placeholder="Username" required/><br />
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/><br />
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/><br /><br />
    <input type="submit" class="btn btn-primary" name="Register" value="Register" /> <br />   
<?php echo form_close(); ?>
</div>