<?php require("header.php"); ?>
<title>Contact Support</title>
<script>
	$(document).ready(function(){
		$("#support").attr("class", "active");
	});
</script>

<!-- Row -->
<div class="row">
	<div class="col-md-offset-2 col-md-7">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2>Contact Support</h2>
				<hr>
				<!-- Form -->
				<form>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="tel" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea rows="5" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require("footer.php"); ?>