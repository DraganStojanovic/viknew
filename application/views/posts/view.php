<div class="container"><br>
<h2><?php echo $post['summary']; ?></h2>

<small class="post-date">Пост креиран: <?php echo $post['created_at']; ?></small><br>

<img class="img-fluid img-thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
           
	<br><?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
	<hr>
	<a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<br><input type="submit" value="Delete" class="btn btn-danger">
	</form>

<?php endif; ?>
<br><hr>
<h3>Коментари</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>Нема коментара за приказивање</p>
<?php endif; ?>
<hr>
<h3>Додај Коментар</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Име</label>
		<input type="text" name="name" class="form-control" placeholder="Унесите Ваше Име">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="Унесите Ваш Емаил">
	</div>
	<div class="form-group">
		<label>Ваше Питање</label>
		<textarea name="body" class="form-control" placeholder="Унесите Ваше Питање"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>
