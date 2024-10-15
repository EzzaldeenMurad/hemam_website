<div class="wrap shadow-sm">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="../../index.php">
                        <div class="logo">
                            <h2>Hemam</h2>
                            <!-- <img src="img/logo.png" alt="Venue Logo"> -->
                        </div>
                    </a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "home") echo "class='active'"; ?>><a href="../../index.php">Home</a></li>
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "overview") echo "class='active'"; ?>> <a href="candidate_overview.php">Overview</a></li>
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "profile") echo "class='active'"; ?>><a href="candidate_profile.php">My profile</a></li>
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "applied_jobs") echo "class='active'"; ?>><a href="applied_jobs.php">My Jobs</a></li>
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "notifications") echo "class='active'"; ?>> <a href="candidate_notifications.php">Notifications</a></li>
                            <li <?php if (isset($isActiveNav) && $isActiveNav == "setting") echo "class='active'"; ?>>
                                <a href="#">Setting</a>
                                <ul class="sub-menu">
                                    <li><a href="#">change email</a></li>
                                    <li><a href="../../setting/reset_password.php">reset password </a></li>
                                    <li><a href="../../php/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- / #primary-nav -->

                </div>
            </div>
        </div>
    </header>
</div>