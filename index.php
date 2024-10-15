<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <?php
    $isActiveNav = "home";
    include "navigation/header_index.php";
    include "auth_page.php";
    ?>

    <section class="banner" id="top" style="background-image: url(img/homepage-banner-image-1920x700.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Welcome to your professional community.</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services text-center">
            <div class="container">
                <div class="content">
                    <h2>Who is HEMAM for?</h2>
                    <p>Anyone with mobility disabilities looking to navigate their professional life.</p>
                    <br>
                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-sm-6">
                        <h5>Find a job that suits your interset & skills </h5>
                        <div class="blue-button">
                            <a  href="index.php" data-bs-toggle="modal" data-bs-target="#userSignUpModal">Candidate</a>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <h5>Post your job for millions of people to see</h5>
                        <div class="blue-button">
                            <a  href="index.php" data-bs-toggle="modal" data-bs-target="#companySignUpModal ">Employer</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <div class="container">
                        <div class="section-heading">
                            <h2>How does HEMAM work?</h2>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-sm-6 col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center align-items-center">
                                            <span class="card-icon">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <h6 class="card-title">Create account</h6>
                                        </div>
                                        <p class="card-text">Get access to a world job of opportunities.</p>
                                    </div>
                                </div>
                                <div class="arrow">
                                    <img src="img/arrow-1.png" alt="" class="img-fluid arrow-1" srcset="">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="card     card-upload">
                                    <div class="card-body">
                                        <div class="text-center align-items-center">
                                            <span class="card-icon upload">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                            </span>
                                            <h6 class="card-title">Upload your Resume</h6>
                                        </div>
                                        <p class="card-text">Showcase your skills and experience.</p>
                                    </div>
                                </div>
                                <div class="arrow">
                                    <img src="img/arrow-2.png" alt="" class="img-fluid arrow-2" srcset="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center align-items-center">
                                            <span class="card-icon">
                                                <i class="fas fa-magnifying-glass-plus"></i>
                                            </span>
                                            <h6 class="card-title">Find suitable job</h6>
                                        </div>
                                        <p class="card-text">Using our advanced search options.</p>
                                    </div>
                                </div>
                                <div class="arrow">
                                    <img src="img/arrow-1.png" alt="" class="img-fluid arrow-3" srcset="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center align-items-center">
                                            <span class="card-icon">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                            <h6 class="card-title">Apply job</h6>
                                        </div>
                                        <p class="card-text">Apply with ease.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script> -->
    <!-- <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>