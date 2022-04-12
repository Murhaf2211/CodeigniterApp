<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 ">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>
			<br>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Passwod" required autofocus>
			</div>
			<br>
			<div class="d-grid gap-2">
  				<button type="submit" class="btn btn-lg btn-secondary ">Login</button>
			</div>
		</div>
	</div>
<?php echo form_close(); ?>