<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="stylesheet" href="../../css/candidates.css">


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <style>

    </style>

    <title>Candidates</title>
</head>

<body>
    <!------------------            Header           -------------------  -->
    <!--   header  -->
    <?php
    $isActiveNav = "candidates";
    include '../../navigation/header_employer.php';
    ?>



    <!----------------------------         ---------------------------------  -->

    <div class="candidates">
        <div class="container">
            <div class="row   g-2">
                <div class="col-md-4">
                    <div class="card-filter ">
                        <div class="card-body">
                            <h5 class="card-title">Gender</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-right">
                        <div class="card-candidates d-flex align-items-center   ">
                            <div class="img-card">
                                <img src="../../img/logo_profile.jpg" class="card-img" alt="Company Logo">
                            </div>
                            <div class="card-body  ms-3">
                                <h5 class="card-title text-start">Ahmed </h5>
                                <p class="card-text">web developer</p>
                                <div class="d-flex float-start">
                                    <p> <i class="fa fa-map-marker"></i> cairo</p>
                                    <p class="ms-3"> <i class="fa fa-briefcase pe-1"></i> 4 Years Experience</p>
                                </div>
                            </div>
                            <div class="blue-button">
                                <a href="single_candidate.php" class="w-100 rounded-1 "> view Profile <i class="fa fa-arrow-right ps-2"></i></a>
                            </div>
                        </div>
                        <div class="card-candidates d-flex align-items-center   ">
                            <div class="img-card">
                                <img src="../../img/logo_profile.jpg" class="card-img" alt="Company Logo">
                            </div>
                            <div class="card-body  ms-3">
                                <h5 class="card-title text-start">Ahmed </h5>
                                <p class="card-text">web developer</p>
                                <div class="d-flex float-start">
                                    <p> <i class="fa fa-map-marker"></i> cairo</p>
                                    <p class="ms-3"> <i class="fa fa-briefcase pe-1"></i> 4 Years Experience</p>
                                </div>
                            </div>
                            <div class="blue-button">
                                <a href="single_candidate.php" class="w-100 rounded-1 "> view Profile <i class="fa fa-arrow-right ps-2"></i></a>
                            </div>
                        </div>
                        <div class="card-candidates d-flex align-items-center   ">
                            <div class="img-card">
                                <img src="../../img/logo_profile.jpg" class="card-img" alt="Company Logo">
                            </div>
                            <div class="card-body  ms-3">
                                <h5 class="card-title text-start">Ahmed </h5>
                                <p class="card-text">web developer</p>
                                <div class="d-flex float-start">
                                    <p> <i class="fa fa-map-marker"></i> cairo</p>
                                    <p class="ms-3"> <i class="fa fa-briefcase pe-1"></i> 4 Years Experience</p>
                                </div>
                            </div>
                            <div class="blue-button">
                                <a href="single_candidate.php" class="w-100 rounded-1 "> view Profile <i class="fa fa-arrow-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------- Footer  ------------------------- -->
    <?php include '../../footer.php'; ?>
</body>

</html>