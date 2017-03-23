<?php require("header.php"); ?>
<title>Register</title>
<script>
	$(document).ready(function(){
		$("#register").attr("class", "active");
	});
</script>

<!-- Row -->
<div class="row">
	<div class="col-md-offset-2 col-md-7">
		<div class="panel panel-primary">
			<div class="panel-body">
				<h2>Registration</h2>
				<hr>
				<!-- Form -->
				<form role="form" autocomplete="no">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username">
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="tel" class="form-control" placeholder="Phone">
					</div>

					<div class="form-group">
						<label>Full name</label>
						<input type="text" class="form-control" placeholder="Full name">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Email address">
					</div>

					<div class="form-group">
						<label>Bank</label>
						<select class="form-control">
							<option>Choose one</option>
							<option>United Bank for Africa</option>
							<option>First Bank of Nigeria</option>
							<option>Diamond Bank</option>
							<option>Access Bank</option>
							<option>EcoBank</option>
							<option>Fidelity Bank Nigeria</option>
							<option>First City Monument Bank</option>
							<option>Guaranty Trust Bank</option>
							<option>Heritage Bank PLC</option>
							<option>Keystone Bank Limited</option>
							<option>Skye Bank</option>
							<option>Stanbic IBTC Bank Nigeria</option>
							<option>Standard Chartered Bank</option>
							<option>Sterling Bank</option>
							<option>Union Bank of Nigeria</option>
							<option>Unity Bank PLC</option>
							<option>Zenith Bank</option>
						</select>
					</div>

					<div class="form-group">
						<label>Account name</label>
						<input type="text" class="form-control" placeholder="Account name">
					</div>

					<div class="form-group">
						<label>Account number</label>
						<input type="number" class="form-control" placeholder="Account number">
					</div>

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
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password">
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require("footer.php"); ?>