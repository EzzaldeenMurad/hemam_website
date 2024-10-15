<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Find Jobs</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">


</head>

<body>

    <?php
    $isActiveNav = "jobs";
    include "navigation/header_index.php";
    include "auth_page.php";
    ?>

    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Jobs</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <form action="#">
                            <h4 style="margin-bottom: 15px">Type:</h4>

                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>Contract</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>Full time</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox">
                                    <span>Part time</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox">
                                    <span>Remote</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox">
                                    <span>Internship</span>
                                </label>
                            </div>

                            <br>

                            <h4 style="margin-bottom: 15px">Educational Levels:</h4>
                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>Associate's degree/ Diploma</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>Bachelor degree</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox">
                                    <span>Doctorate (Ph.D.)</span>
                                </label>
                            </div>

                            <br>

                            <h4 style="margin-bottom: 15px">Years of experience</h4>
                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>&lt; 1</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>&lt; 2</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="checkbox">

                                    <span>&lt; 3</span>
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-8 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="down-content">
                                        <div class="thumb ">
                                            <strong title="Posted on"><i class="fa fa-calendar"></i> 1-05-2024</strong>
                                            <strong class="location ms-5" title="Location"><i class="fa fa-map-marker"></i>
                                                Mecca, Saudi Arabia</strong>
                                        </div>
                                        <h4> Web Developer</h4>

                                        <p>engineering/ software jobs</p>

                                        <p><span><strong><sup>SAR</sup>20000</strong></span></p>

                                        <div class="text-button">
                                            <a href="job-details.php">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="down-content">
                                        <div class="thumb ">
                                            <strong title="Posted on"><i class="fa fa-calendar"></i> 1-05-2024</strong>
                                            <strong class="location ms-5" title="Location"><i class="fa fa-map-marker"></i>
                                                Mecca, Saudi Arabia</strong>
                                        </div>
                                        <h4> Web Developer</h4>

                                        <p>engineering/ software jobs</p>

                                        <p><span><strong><sup>SAR</sup>20000</strong></span></p>

                                        <div class="text-button">
                                            <a href="job-details.php">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="down-content">
                                        <div class="thumb ">
                                            <strong title="Posted on"><i class="fa fa-calendar"></i> 1-05-2024</strong>
                                            <strong class="location ms-5" title="Location"><i class="fa fa-map-marker"></i>
                                                Mecca, Saudi Arabia</strong>
                                        </div>
                                        <h4> Web Developer</h4>

                                        <p>engineering/ software jobs</p>

                                        <p><span><strong><sup>SAR</sup>20000</strong></span></p>

                                        <div class="text-button">
                                            <a href="job-details.php">View More</a>
                                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>