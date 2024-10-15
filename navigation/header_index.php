<div class="wrap shadow-sm">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.php">
                        <div class="logo">
                            <h2>Hemam</h2>
                            <!-- <img src="img/logo.png" alt="Venue Logo"> -->
                        </div>
                    </a>
                    <nav id="primary-nav" class="dropdown cf">
                        <div class="row ">
                            <div class="col-sm-8">

                                <ul class="dropdown menu">
                                    <li <?php if (isset($isActiveNav) && $isActiveNav == "home") echo "class='active'"; ?>>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li <?php if (isset($isActiveNav) && $isActiveNav == "about") echo "class='active'"; ?>>
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li <?php if (isset($isActiveNav) && $isActiveNav == "jobs") echo "class='active'";   ?>>
                                        <a href="jobs.php">Find Job</a>
                                    </li>
                                    <!-- <li <?php if (isset($isActiveNav) && $isActiveNav == "employers") echo "class='active'";   ?>>
                                        <a href="employers.php">employers</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="dropdown menu d-flex">

                                    <li>
                                        <div class="blue-button">
                                            <a class=" login" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                                        </div>
                                    </li>
                                    <li <?php if (isset($isActiveNav) && $isActiveNav == "contact") echo "class='active'";  ?>>
                                        <a href="contact.php" class="pe-0 ms-lg-4">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>

    </header>
</div>