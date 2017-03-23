<?php require("header.php"); ?>
<?php require("sidebar.php"); ?>
<title>Give a testimony</title>
<script>
	$(document).ready(function(){
		$("#testimony").addClass("active-menu");
	});
</script>

<h1 class="page-header">Give Testimony</h1>

<!-- Row -->
<div class="row">
	<div class="col-md-7">
		<form>
			<div class="form-group">
				<label>Testimony</label>
				<textarea rows="6" class="form-control" placeholder="Write your testimony here"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>

<?php require("footer.php"); ?>