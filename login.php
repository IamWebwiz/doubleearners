<?php require("header.php"); ?>
<title>Login</title>
<script>
	$(document).ready(function(){
		$("#login").attr("class", "active");
	});
</script>

<!-- Row -->
<div class="row">
	<div class="col-md-offset-2 col-md-7">
		<div class="panel panel-primary">
			<div class="panel-body">
				<h2>Login</h2>
				<hr>
				<!-- Form -->
				<form role="form">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require("footer.php"); ?>