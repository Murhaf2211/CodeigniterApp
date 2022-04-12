<html>
	<head>
		<title>ciBlog</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="<?php echo base_url(); ?>">CiBlog</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarColor01">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link active" href="<?php echo base_url(); ?>">Home
		            
		          </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>/posts">Blog</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>/categories">Categories</a>
		        </li>
		        
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>/about">About</a>
		        </li>
		        
		      </ul>
		      <ul class="nav navbar-nav navbar-right">

		      	<?php if(!$this->session->userdata('logged_in')) : ?>
			      	<li class="nav-item">
			          <a class="nav-link" href="<?php echo base_url(); ?>/users/login">Login</a>
			        </li>
			      	<li class="nav-item">
			          <a class="nav-link" href="<?php echo base_url(); ?>/users/register">Register</a>
			        </li>
		        <?php endif; ?>
		        <?php if($this->session->userdata('logged_in')) : ?>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo base_url(); ?>/posts/create">Create Post</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo base_url(); ?>/categories/create">Create Category</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo base_url(); ?>/users/logout">Logout</a>
			        </li>
			    <?php endif; ?>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div class="container">
			<!-- Flash messages -->
			<?php if($this->session->flashdata('user_registered')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
			<?php endif; ?>
			
			<?php if($this->session->flashdata('post_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
			<?php endif; ?>


			<?php if($this->session->flashdata('post_updated')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
			<?php endif; ?>


			<?php if($this->session->flashdata('category_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('post_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('login_faild')): ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_faild').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedin')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedout')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
			<?php endif; ?>






