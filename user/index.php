<?php
require("header.php");
require("sidebar.php");
?>
<title>Member Area</title>
<script>
    $(document).ready(function(){
        $("#dash").addClass('active-menu');
    });
</script>

<h1 class="page-header">Dashboard</h1>

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <p><img src="assets/img/1.jpg" width="200" class="img-thumbnail"></p>
                <p class="text-info">Username made a donation of #amount to you. <button type="button" class="btn btn-success btn-sm">Confirm</button></p>
            </div>
        </div>
    </div>
</div>

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bullhorn"></i> Important Information
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    After you receive a 100% increase of your donation, you are required to give a testimony to prevent your account from being blocked.
                </div>
                <div class="list-group-item">
                    Use our 24-hour support service to in case there is any problem with your donations.
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
                <i class="fa fa-alarm"></i> Notifications
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Testimonies
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    <p class="list-group-item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <div class="pull-right text-info">&mdash; by Username</div>
                    </p>
                </div>
                <div class="list-group-item">
                    <p class="list-group-item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <div class="pull-right text-info">&mdash; by Username</div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>