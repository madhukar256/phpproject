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
<p><?php echo $key->hname; ?></p>
<p><?php echo $key->price; ?></p>
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
 <div class="description-wrapper">
             <h3>The Leo Group Hotel</h3>
<p><span>Get the best of both worlds when you stay at The Leo Group Hotel in the heart of Auckland City.</span></p>        
</div>
    </a>		



      </div>
         