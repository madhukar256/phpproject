<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.6-dist/css/bootstrap.css" />
  <script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js">
    </script>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
   <style>
   
   .news_content {
    color: #fff;
}
   #grad1 {
    height: 900px;
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(red, black); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(red, black); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(red, black); /* For Firefox 3.6 to 15 */
    background: linear-gradient(red, black); /* Standard syntax (must be last) */
}
   
   .list {
    clear: both;
    display: table;
}
   .all_list {
    float: left;
    margin-left: 14px;
    background-color: #fff;
    padding: 5px;
}
   
  
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 15px 50px;
    text-decoration: none;
}

li a:hover {
    background-color:#e60000;
}  




.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}


div1 {
    background-color: lightgrey;
    width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
  .after-box {
    clear: both;
}
  .reg_area {
    width: 60%;
    margin: 0 auto;
    padding-top: 50px;
}
input.btn.btn-primary {
    float: right;
}
p.err {
    color: red;
    text-align: center;
    font-size: 35px;
}
p.succ {
    font-size: 35px;
    color: #5cb85c;
    text-align: center;
}
.rtop-menu a {
    font-size: 20px;
}
.rtop-menu {
    padding: 10px;
    text-align: right;
}
.rtop-menu span {
    color: #0F0;
    font-size: 20px;
}
.rtop-menu {
    padding: 20px 5px;
    text-align: right;
    clear: both;
}
.container.main-c {
    min-height: 898px;
}

.pagi {
    text-align: center;
    margin: 5px;
    font-size: 20px;
    color: #fff;
}

.pagi a {
    background-color: #337ab7;
    margin: 2px;
    padding: 5px;
    color: #fff;
}

.pagi strong {
    background-color:red;
    margin: 2px;
    padding: 5px;
    color: #fff;
}
  </style>
  
 
  </style>
  
    
</head>


<body id="grad1">
   
   <div class="container main-c" style="border:solid 1px black; background-color:black;">
	<div class="row">
    	<div class="col-lg-2">
	        <a href="<?php echo base_url(); ?>" >	<img src="<?php echo base_url(); ?>assets/images/LeoLogo.png" alt="Logo" width="120" height="120"  backg/></a>
        </div>
        <div class="col-lg-10">
        	<img src="<?php echo base_url(); ?>assets/images/leo_group.jpg" alt="Banner" height="120" width="960" >        
            </div>
			<div class="rtop-menu">
         <?php if($this->session->userdata('user_id') == ''){ 
		
				if(isset($_GET['msg']) && $_GET['msg']=='error')
				{ ?>
				<p class="err" >Invalid username or password</p>	
				<?php } ?>
         <div>
         	 	<?php echo form_open("register/login"); ?> 
            <input type="text" name="email" id="email" placeholder="Username" class="required" required/>
            <input type="password" name="password" placeholder="Password" class="required" required/>
            <input type="submit" value="Login" name="Btn_Submit" />
            <?php echo form_close(); ?>
         </div>  
         <a style="color:#0F0" href="<?php echo base_url(); ?>register">Register Here</a> 
		<?php 
		
		}else{
		?>
			
				<a style="color:#0F0" href="<?php echo base_url(); ?>register/logout">Logout</a> <span>/</span>
				<a style="color:#0F0" href="<?php echo base_url(); ?>profile/">Profile</a> 
			
		<?php	
		}
		?>
		</div>
  </div>
  
 <ul>
 <div class="dropdown">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
 	</div> 
  	<div class="dropdown">
    <li><a class="active" href="<?php echo base_url(); ?>rooms/get">Rooms</a></li>
   
    </div>
    <div class="dropdown">
      <li><a class="active" href="<?php echo base_url(); ?>restaurant/get">Restaurant</a></li>
     
      </div>
      
    <div class="dropdown">
      
        <li><a class="active" href="<?php echo base_url(); ?>bars/get">Bars</a></li>
        
        </div>
        <div class="dropdown">
  <li><a href="<?php echo base_url(); ?>news">News</a></li>
  
  </div>
  <div class="dropdown">
  <li><a href="<?php echo base_url(); ?>contact">Contact us</a></li>

  </div>
  
   <div class="dropdown">
  <li><a href="<?php echo base_url(); ?>aboutus">About us</a></li>
   
  </div>
  
  <?php
  if(isset($banner)){
  ?>
    <div class="col-lg-10">
       	<img src="<?php echo base_url(); ?>/assets/images/<?php echo $banner ?>" alt="Banner" height="300" width="1109" >        
	</div>
  <?php
  }
  ?> 
  <?php
  if(isset($abs)){
  ?>
   <div class="after-box"><font color="#FFFFFF"><b><u>ABOUT US</u></b></font></div>
            <p><font color="#FFFFFF">The Leo Group is a group that handel the hotel Leo. There are three person in the Leo group. Madhukar,Ankit and Hemang are founder of this Group. The main office of this group is held in 150,Hobson Street Auckland.<font> </p>
            <p>We are Working in this head office. There are more than 25 other staff in our hotel.Ankit Kapoor is head of the department.Madhukar gangani is head of HR department.Hemag Patel is manager of this Company</p>
  <p3><b><u>TEAM FOUNDER</u></b></p3><br/><br/>
  <img src="<?php echo base_url(); ?>assets/images/Ankit.jpg" alt="description here" height="100" width="100" /><br/>
He is Ankit Kapoor.<br/>He is maiin head.<br/>He manage every thing in The Leo Group.
<br/>	<br/>		
<img src="<?php echo base_url(); ?>assets/images/Hemang.jpg" alt="description here" height="100" width="100" /><br/>
He is Hemang Patel.<br/>He is Manager.<br/>He manage every Oggice work in The Leo Group.	
<br/>
<br/>
<img src="<?php echo base_url(); ?>assets/images/Madhukar.jpg" alt="description here" height="100" width="100" /><br/>
He is Madhukar Gangani.<br/>He is HR Manager.<br/>He manage HR Department in The Leo Group.	
  <?php
  }
  ?>
  
</ul>
