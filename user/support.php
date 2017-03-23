<?php require("header.php"); ?>
<?php require("sidebar.php"); ?>
<title>Support</title>
<script>
    $(document).ready(function(){
        $("#support").addClass('active-menu');
    });
</script>

<h1 class="page-header">Support Service</h1>

<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			Use our 24-hour support service to ask whatever question you have for us. Simply fill the form below.
		</div>
		<form>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder="Username" disabled>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Email address" disabled>
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea rows="5" class="form-control" placeholder="Your message"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	</div>
</div>

<?php require("footer.php"); ?>