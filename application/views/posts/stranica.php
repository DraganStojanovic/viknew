<div class="w3layouts-top-strip">

<div class="container">
<div class="banner-btm-agile">
<div class="col-md-9 btm-wthree-left">

<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br><br>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"><br><hr>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>


</div>

      
<!-- //btm-wthree-right -->
<div class="clearfix"></div>
</div>
</div>
