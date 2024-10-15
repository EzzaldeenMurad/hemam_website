<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/single_employer.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <style>

    </style>

    <title>Single Candidate </title>
</head>

<body>

    <!------------------            Header           -------------------  -->
   <!--   header  -->
    <?php
    $isActiveNav = "posted_jobs";
    include '../../navigation/header_employer.php';
    ?>

    <!-------------               Single Candidate           ------------- -->

    <div class="single-page-candidate">
        <div class="container">
            <div class="section-heading">
                <div class="card-profile ">
                    <!-- <div class="card-details"> -->
                    <div class="img-card">
                        <img src="../../img/logo_profile.jpg" class="card-img" alt="Candidate Logo">
                    </div>
                    <div class="card-body text-start">
                        <h5 class="card-title ">Ahmed</h5>
                        <p class="card-text">web developer</p>
                    </div>
                    <div style="margin-right: 17%;">
                        <h6>Disability Name:</h6>
                        <p>Paraplegic</p>
                    </div>

                    <!-- </div> -->

                </div>
            </div>
            <div class="section-bady">
                <div class="row justify-content-between  g-2">
                    <div class="col-md-7">

                        <h2>Experiences:</h2>
                        <br>
                        <p>3 years of experience, worked for several companies.</p>
                        <br> <br>
                        <h2>Skills</h2>
                        <ol>
                            <li>Critical thinking</li>
                            <li>Decision making</li>
                            <li>Problem solving</li>
                            <li>Communication</li>
                            <li>Leadership</li>
                            <li>Team work</li>
                        </ol>
                    </div>
                    <div class="col-md-5">
                        <div class="personal-info">
                            <div class="container">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="info">
                                            <div class="icon">
                                                <i class="fa fa-calendar icon"></i>
                                            </div>
                                            <div class="text">
                                                <p>DATE OF BIRTH</p>
                                                <span>10/10/1990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info">
                                            <div class="icon">
                                                <i class="fa fa-flag icon"></i>
                                            </div>
                                            <div class="text">
                                                <P>NATIONALITY</P>
                                                <span>Saudi Arabic</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="info">
                                            <div class="icon">
                                                <i class="fa fa-male icon"></i>
                                            </div>
                                            <div class="text">
                                                <P> GENDER</P>
                                                <span>Male</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="info">
                                            <div class="icon">
                                                <i class="fa fa-graduation-cap icon"></i>
                                            </div>
                                            <div class="text">
                                                <p>EDUCATION</p>
                                                <span>Bachelor Degree</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-candidate">
                            <div class="container">
                                <h4>Contact Information</h4>

                                <div class="info">
                                    <div class="icon">
                                        <i class="fa fa-map-marker icon"></i>
                                    </div>
                                    <div class="text">
                                        <p>LOCATION</p>
                                        <span>Mecca, Saudi Arabia</span>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info">
                                    <div class="icons">
                                        <i class="fa fa-phone icon"></i>
                                    </div>
                                    <div class="text">
                                        <p>PHONE</p>
                                        <a href="tel:+966 523041533">+966 523041533</a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="fa fa-envelope icon"></i>
                                    </div>
                                    <div class="text">
                                        <p>EMAIL ADDRESS</p>
                                        <a href="mailto:candidate@gmail.com">candidate@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-media">
                            <h6>Follow Us On:</h6>
                            <ul class="social-icons d-flex">
                                <li><a href="#" class="icon"><i class="fa fa-facebook "></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- ------------------   footer   ------------------------- -->

    <?php include '../../footer.php'; ?>
</body>

</html>