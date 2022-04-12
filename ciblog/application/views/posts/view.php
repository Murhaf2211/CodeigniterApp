<div class="bgimg p-5 ">
	<h2><?php echo $post['title']; ?></h2>
	<div class="col-md-3">
		<img  width="140" height="140" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
	</div>
	<small class="post-time"> Posted on: <?php echo $post['created_at']; ?></small>
	<div class="post-body">
		<?php echo $post['body']; ?>
	</div>
	<hr>

	<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
		<div class="container-fluid d-flex">
			<p><a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a></p>
			<?php echo form_open('/posts/delete/'.$post['id']); ?>
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
		</div>
	<?php endif; ?>
	
	<hr>
	<h3>Comments</h3>
	<?php if ($comments) : ?>
		<?php foreach($comments as $comment) : ?>
			<div class="bg-secondary p-3 m-2">
				<h6><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h6>
			</div>
		<?php endforeach; ?>
	<?php else : ?>
		<p>No Comments to display</p> 
	<?php endif;?>
	<hr>
	<h3>Add Comment</h3>
	<?php echo validation_errors(); ?>
	<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<br>
	<button class="btn btn-secondary" type="submit">Submit</button>
</div>