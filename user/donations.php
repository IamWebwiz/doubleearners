<?php require("header.php"); ?>
<?php require("sidebar.php"); ?>
<title>Donations History</title>
<script>
    $(document).ready(function(){
        $("#history").addClass('active-menu');
    });
</script>

<h1 class="page-header">Donations History</h1>
<!-- Row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<i class="fa fa-gift"></i> Donations made
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<td>Name</td>
							<td>Bank</td>
							<td>Acc name</td>
							<td>Acc number</td>
							<td>Phone</td>
							<td>Status</td>
						</thead>
						<tbody>
							<tr>
								<td>Samsudeen Adebayo</td>
								<td>UBA</td>
								<td>Samsudeen Adebayo</td>
								<td>0383238291</td>
								<td>08133238283</td>
								<td><div class="label label-default">Pending</div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<i class="fa fa-money"></i> Donations received
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<td>Name</td>
							<td>Phone number</td>
							<td>Status</td>
						</thead>
						<tbody>
							<tr>
								<td>Oyebayo Timilehin</td>
								<td>08088382381</td>
								<td><div class="label label-success">Confirmed</div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require("footer.php"); ?>