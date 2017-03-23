<?php require("header.php"); ?>
<?php require("sidebar.php"); ?>
<title>Provide Help</title>
<script>
    $(document).ready(function(){
        $("#ph").addClass('active-menu');
    });
</script>

<h1 class="page-header">Provide Help</h1>
<p class="alert alert-info">Please verify the package you selected while signing up</p>

<!-- Row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form>
					<div class="form-group">
						<label>Package</label>
						<select class="form-control">
							<option>Select a package</option>
							<option>Starter - 5,000</option>
							<option>Classic - 10,000</option>
							<option>Premium - 20,000</option>
							<option>Veteran - 50,000</option>
							<option>Diamond - 100,000</option>
							<option>Sapphire - 200,000</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-body">
				<h3>Paired member</h3>
				<hr>
				<p><strong>Full name: </strong></p>
				<p><strong>Bank name: </strong></p>
				<p><strong>Account name: </strong></p>
				<p><strong>Account number: </strong></p>
				<p><strong>Phone: </strong></p>
				<p><strong>Proof of Payment: </strong> <label class="btn btn-primary btn-sm"><i class="fa fa-camera"></i> Choose file <input type="file" style="display: none" accept="image/*"></label></p>
				<p><button class="btn btn-primary">Provide Help</button></p>
			</div>
		</div>
	</div>
</div>

<?php require("footer.php"); ?>