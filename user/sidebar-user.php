<!--Admin ko sidebar ko part ko code-->

<div class="sidebar">
            <div class="sidebar-brand">
                  <h2><span class="las la-dumpster"></span><span>GPS Tracker System</span></h2>
            </div>
            <div class="sidebar-menu">
                  <ul>
                            <li>
                              <a href="#" class="dashboard active"><span class="las la-igloo" ></span><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="#" class="in-active" ><span class="las la-wallet" ></span><span>Payments</span></a>
                            </li>
                            <li>
                                <a href="#" class="in-active" ><span class="las la-calendar-day" ></span><span>Schedule</span></a>
                            </li>
                            <li>
                                <a href="#" class="location in-active" ><span class="las la-location-arrow" ></span><span>Live Location</span></a>
                            </li>
                            <li>
                                <a href="#" class="in-active" ><span class="las la-user-circle" ></span><span>Account</span></a>
                            </li>
                            <li>
                                <a href="#" class="in-active" ><span class="las la-sign-out-alt" ></span><span>Sign out</span></a>
                            </li>
                  </ul>
            </div>
      </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
      <script>
        $(document).ready(function () {
            $('.sidebar-menu ul li a').click(function () {
                $('.sidebar-menu ul li a').removeClass('active');       //Remove active class from all tags
                $('.sidebar-menu ul li a').addClass('in-active');       // ADD CLASS TO ALL THE TAGS.

                if ($(this).hasClass('in-active')) {    // CHECK IF THE TAG HAS 'in-active' CLASS.
                    $(this)
                        .removeClass('in-active')
                        .addClass('active');
                }
            })
        });
    </script>

    <!-- for main body section-->

    <!--for homepage-->
    <script>
        $(document).ready(function () {
            $('.sidebar-menu ul li .dashboard').click(function () {
                $('main .content').removeClass('active');       //Remove active class from all tags
                $('main .content').addClass('in-active'); // ADD CLASS TO ALL THE TAGS.

                if ($('main .homepage').hasClass('in-active')) { // CHECK IF THE TAG HAS 'in-active' CLASS.   
                    $('main .homepage')
                        .removeClass('in-active')
                        .addClass('active');
                }
            })
        });
    </script>


    <script>
        $(document).ready(function () {
            $('.sidebar-menu ul li .location').click(function () {
                $('main .content').removeClass('active');       //Remove active class from all tags
                $('main .content').addClass('in-active');       // ADD CLASS TO ALL THE TAGS.

                if ($('main .mappage').hasClass('in-active')) { // CHECK IF THE TAG HAS 'in-active' CLASS.  
                    $('main .mappage')
                        .removeClass('in-active')
                        .addClass('active');
                }
            })
        });
    </script>