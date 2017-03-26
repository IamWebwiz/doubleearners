<?php
require("header.php");
require("sidebar.php");
?>
<title>My Profile</title>
<script>
    $(document).ready(function(){
        $("#profile").attr("class", "active-menu");
    });
</script>

<h1 class="page-header">My Profile</h1>

<div class="row">
	<div class="col-md-12">
		<p><b>Username: </b></p>
		<p><b>Phone number: </b></p>
		<p><b>E-mail: </b></p>
		<p><b>Bank: </b></p>
		<p><b>Account name: </b></p>
		<p><b>Account number: </b></p>
		<p><b>Joined DoubleEarner about: </b></p>
		<p><b>Donations made: </b></p>
		<p><b>Donations received: </b></p>
	</div>
</div>

<?php require("footer.php"); ?>