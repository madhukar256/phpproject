<!DOCTYPE html>
<html lang = "en">   
   <head>
      <meta charset = "utf-8" />
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1" />
      
      <title><?php if(isset($title)){echo $title; }else{echo "Administrator";}?></title>     
      
      <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
      <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/css/style.css" />
   </head>
   <body>
		<input type="hidden" id="base_url_header" value="<?php echo base_url();?>">
		<header>
			<div class="top-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-xs-12">	
							<p class="text-left" style="text-transform:capitalize;">
								<?php // echo $this->session->userdata('admin_name');  ?>
								<a href="<?php echo base_url(); ?>" class="btn btn-success btn-sm" target="_blank">
									Visit Site &nbsp;&nbsp;							
									<i class="fa fa-eye" style="color:#fff;"></i>
								</a>
							</p>
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="text-right" style="text-transform: capitalize;">
								<a href="<?php echo base_url(); ?>htm-admin/logout/" class="btn btn-danger btn-sm">
									Logout &nbsp;&nbsp;							
									<i class="fa fa-power-off" style="color:#fff;"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>		
		<section>			
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 padd-left0">
						<div class="fix-sidebar">
							<h2 class="text-center">Administrator</h2>
							<ul class = "nav nav-pills nav-stacked">
								<li <?php if(!isset($p)){echo "class='active'";} ?>>
									<a href="<?php echo base_url(); ?>htm-admin">
										<i class="fa fa-tachometer ico-big"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li <?php if(isset($p) && $p == 'rooms' ){echo "class='active'";} ?>>
									<a href="<?php echo base_url(); ?>htm-admin/rooms/all">
										<i class="fa fa-compass ico-big"></i>
										<span>Rooms</span>    
									</a>
								</li>
								<li <?php if(isset($p) && $p == 'restaurant' ){echo "class='active'";} ?>>
									<a href="<?php echo base_url(); ?>htm-admin/restaurant/all">
										<i class="fa fa-compass ico-big"></i>
										<span>Restaurant</span>    
									</a>
								</li>
								<li <?php if(isset($p) && $p == 'bar' ){echo "class='active'";} ?>>
									<a href="<?php echo base_url(); ?>htm-admin/bar/all">
										<i class="fa fa-compass ico-big"></i>
										<span>Bar</span>    
									</a>
								</li>
								<li <?php if(isset($p) && $p == 'news' ){echo "class='active'";} ?>>
									<a href="<?php echo base_url(); ?>htm-admin/news/">
										<i class="fa fa-compass ico-big"></i>
										<span>News</span>    
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
						<div class="section-bar">
				