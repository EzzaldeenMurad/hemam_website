<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>About</title>

</head>

<body>

    <?php
    // $isActiveNav = "contact";
    include "navigation/header_index.php";
    include "auth_page.php";
    ?>

    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">

                            <h3 class="fw-bold">About HEMAM </h3>
                            <br>
                            <p>A Saudi Arabian website is dedicated to connecting talented individuals with disabilities
                                with meaningful job opportunities. </p>
                            <br>
                            <h6 class="fw-bold">HEMAM Vision: </h6>
                            <p>Envisions a world where people with disabilities have equal access to employment and can
                                contribute their unique skills and experiences to the workforce. </p>
                            <h6 class="fw-bold">HEMAM Mission: </h6>
                            <p>Is passionate about breaking down barriers and empowering individuals with disabilities.
                                They connect determined job seekers with employers, fostering a more inclusive and
                                productive work environment. </p>

                            <h6 class="fw-bold">HEMAM SUCCESS: </h6>
                            <h4 class="fw-bold">Empowering People with Disabilities</h3>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-banner-5.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>