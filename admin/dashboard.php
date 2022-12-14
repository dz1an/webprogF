<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed
    require_once '../classes/basic.database.php';
    require_once '../includes_admin/header.php';
    require_once '../includes_admin/sidebar.php';
    require_once '../includes_admin/topnav.php';

?>

<div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Applications</div>
                    <div class="number">358</div>
                    <div class="indicator">

                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-send cart'></i>
            </div>

            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Pending Applications</div>
                    <div class="number">209</div>
                    <div class="indicator">

                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-edit-alt cart two'></i>
            </div>

            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Pending Interview</div>
                    <div class="number">126</div>
                    <div class="indicator">

                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-phone-call cart three'></i>
            </div>

            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Declined/Withdrawn</div>
                    <div class="number">23</div>
                    <div class="indicator">

                    <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                    </div>
                </div>
                <i class='bx bx-message-square-x cart four'></i>
            </div>
        </div>

    </div>


<?php
    require_once '../includes_admin/bottomnav.php';
    require_once '../includes_admin/footer.php';
?>