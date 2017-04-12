 <div id="content">
    <div class="wrapper">
      <div class="aside maxheight">
        <!-- box begin -->
        </div>
<br/>
<div class="list">
 <?php 
if(!empty($all_list))
{
	foreach($all_list as $key)
									{
?>
<div class="all_list">
<img src="<?php echo $key->img_path; ?>" alt="The Leo Group Hotel" height="200" width="300">
<p><?php echo $key->rname; ?></p>
</div>
<?php 
}
}
?>
</div>
<?php
if(isset($links)){
?>
<div class="pagi">
<?php
echo $links;
?>
</div>
<?php
}

 ?>