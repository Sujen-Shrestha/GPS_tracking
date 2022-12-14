<!--Admin ko sidebar ko part ko code-->
<?php
include "./database.php";
session_start();

?>

<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="las la-dumpster"></span><span>GPS Tracker System</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <?php if ($_SESSION['role'] == 'super admin') : ?>
                <li>
                    <a href="#" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-map-marker"></span><span>Areas</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-user-tie"></span><span>Managers</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-wallet"></span><span>Payments</span></a>
                </li>
                <li>
                    <a href="./logout.php" class="in-active"><span class="las la-sign-out-alt"></span><span>Sign out</span></a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION['role'] == 'manager') : ?>
                <li>
                    <a href="#" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-calendar-day"></span><span>Schedule</span></a>
                </li>
                <li>
                    <a href="#" class="in-active"><span class="las la-location-arrow"></span><span>Live Location</span></a>
                </li>
                <li>
                        <a href="./logout.php" class="in-active"><span class="las la-sign-out-alt"></span><span>Sign out</span> </a>
                </li>
            
            <?php endif; ?>
        </ul>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.sidebar-menu ul li a').click(function() {
            console.log('yeta vitra cha');
            $('.sidebar-menu ul li a').removeClass('active'); //Remove active class from all tags
            $('.sidebar-menu ul li a').addClass('in-active'); // ADD CLASS TO ALL THE TAGS.

            if ($(this).hasClass('in-active')) { // CHECK IF THE TAG HAS 'in-active' CLASS.
                console.log('yeta pani vitra cha');

                $(this)
                    .removeClass('in-active')
                    .addClass('active');
            }
        })
    });
</script>