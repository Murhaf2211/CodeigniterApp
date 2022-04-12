
	<h2><?= $title ?></h2>
	<hr>
	<?php foreach($posts as $post) : ?>
		<div class="bgimg-post p-3 m-2">
			<h3><?php echo $post['title']; ?></h3>
			<div class="row">
				<div class="col-md-3">
					<img  width="140" height="140" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
				</div>
				<div class="col-md-9">
					<small class="post-time"> Posted on: <?php echo $post['created_at']; ?> in 
						<strong><?php echo $post['name']; ?></strong>
					</small>
					<div class="border border-dark p-3">
						<p><?php echo word_limiter($post['body'], 60); ?></p>
					</div>
					<div class="container-fluid d-flex ">
						<p>
							<a class="btn btn-secondary m-1 btn-sm" href="<?php echo site_url('/posts/'.$post['slug']); ?>"	>Read More </a>
						</p>
				
					</div>
				</div>
				
			</div>
				
		</div>
			
		
	<?php endforeach; ?>

