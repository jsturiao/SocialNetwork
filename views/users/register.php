<div class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title">Register User</h3>
	</div>

	<div class="panel-body">
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<textarea name="email" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control" />
			</div>
			<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
				<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
		</form>
	</div>

</div>