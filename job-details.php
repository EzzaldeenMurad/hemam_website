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
    <link rel="stylesheet" href="css/single_employer.css">
    <link rel="stylesheet" href="css/form.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Job Details</title>
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
                        <h2>Web Developer</h2>
                        <h4><i class="fa fa-briefcase"></i> engineering/ software jobs </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2><strong class="text-primary">SAR 20000</strong></h2>
                        <p class="lead">
                            <i class="fa fa-map-marker"></i> Mecca, Saudi Arabia &nbsp;&nbsp;
                            <i class="fa fa-calendar"></i> 1-05-2024 &nbsp;&nbsp;
                            <i class="fa fa-file"></i> Contract
                        </p>

                        <div class="blue-button">
                            <a href="job-details.php" data-bs-toggle="modal" data-bs-target="#applyModal">Apply for
                                this job</a>
                        </div>
                    </div>
                </div>

                <div class="accordions mt-4">
                    <ul class="accordion">
                        <li>
                            <a class="accordion-trigger">Job Description</a>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, delectus totam non est
                                    excepturi expedita, illum vitae vel dolore exercitationem nobis quasi dicta illo id
                                    quas. Error commodi, modi minus. <br><br>
                                    Perferendis, quidem, facilis. Aspernatur alias numquam saepe deleniti dolorem quos
                                    repudiandae eaque ad eligendi quam, ratione, error minima culpa suscipit nostrum
                                    magni omnis est. Suscipit dolor sint aut maiores eius, id nemo, optio, quos tempora
                                    cum est quas. At recusandae obcaecati consequatur ipsa dignissimos, eius commodi qui
                                    quae exercitationem fugiat, voluptatem, nesciunt!
                                </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem vero
                                    culpa rerum similique labore, nisi minus voluptatum numquam fugiat. <br><br>Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugit sint reiciendis
                                    quas temporibus quam maxime nulla vitae consectetur perferendis, fugiat assumenda ex
                                    dicta molestias soluta est quo totam cum?</p>
                            </div>
                        </li>
                        <li>
                            <a class="accordion-trigger">Requirements </a>
                            <div class="accordion-content">
                                <p class="lead"> <i class="fa fa-map-marker"></i> London </p>

                                <p>Looking to improve the security at your place of business? If so, we will provide you
                                    with the trained security officers and professionally licensed personnel needed for
                                    any business. From a security guard for construction site security to private event
                                    security, you can be sure to get the very best from our staff. Alternatively we
                                    provide tailor-made security guard training for your existing security staff.</p>

                                <br>

                                <p>Looking to improve the security at your place of business? If so, we will provide you
                                    with the trained security officers and professionally licensed personnel needed for
                                    any business. From a security guard for construction site security to private event
                                    security, you can be sure to get the very best from our staff. Alternatively we
                                    provide tailor-made security guard training for your existing security staff.</p>
                            </div>
                        </li>
                        <li>
                            <a class="accordion-trigger">Qualiﬁcations</a>
                            <div class="accordion-content">
                                <p class="lead"> <i class="fa fa-map-marker"></i> London </p>

                                <p>Looking to improve the security at your place of business? If so, we will provide you
                                    with the trained security officers and professionally licensed personnel needed for
                                    any business. From a security guard for construction site security to private event
                                    security, you can be sure to get the very best from our staff. Alternatively we
                                    provide tailor-made security guard training for your existing security staff.</p>

                                <br>

                                <p>Looking to improve the security at your place of business? If so, we will provide you
                                    with the trained security officers and professionally licensed personnel needed for
                                    any business. From a security guard for construction site security to private event
                                    security, you can be sure to get the very best from our staff. Alternatively we
                                    provide tailor-made security guard training for your existing security staff.</p>
                            </div>
                        </li>
                        <li>
                            <a class="accordion-trigger">Contact Details</a>
                            <div class="accordion-content">
                                <p>
                                    <span>Name</span>
                                    <br>
                                    <strong>John Smith</strong>
                                </p>
                                <p>
                                    <span>Phone</span>
                                    <br>
                                    <strong>
                                        <a href="tel:123-456-789">123-456-789</a>
                                    </strong>
                                </p>
                                <p>
                                    <span>Mobile phone</span>
                                    <br>
                                    <strong>
                                        <a href="tel:456789123">456789123</a>
                                    </strong>
                                </p>
                                <p>
                                    <span>Email</span>
                                    <br>
                                    <strong>
                                        <a href="mailto:john@carsales.com">john@carsales.com</a>
                                    </strong>
                                </p>
                                <p>
                                    <span>Website</span>
                                    <br>
                                    <strong>
                                        <a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a>
                                    </strong>
                                </p>
                            </div>
                        </li>
                    </ul> <!-- / accordion -->
                </div>
            </div>
        </section>
    </main>


    <!-- Apply job -->

    <div class="modal fade" id="applyModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 pb-0">
                    <div class="login-heading">
                        <h5 class="modal-title mb-2">Apply job: <span id="jobName">Web
                                Developer</span></h5>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeButton"></button>
                </div>
                <form action="job-details.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="cv" class="col-form-label">Upload resume:</label>
                            <input type="file" name="cv" class="form-control" id="cv">
                        </div>
                        <div class="form-group">
                            <label for="cover-letter" class="col-form-label">Cover Letter:</label>
                            <textarea name="coverLetter" id="cover-letter" class="form-control" placeholder="Write down your biography here. let the employees know who you are..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 justify-content-between">
                        <div class="blue-button">
                            <a href="job-details.php">Cancel</a>
                        </div>
                        <div class="blue-button">
                            <button type="submit" class="btn btn-primary">Apply Now <i class="fa fa-arrow-right ps-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ------------------    ------------------------- -->
    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>

</body>

</html>