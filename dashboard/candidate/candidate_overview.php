<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/candidates.css">
    <style>

    </style>
    <title>Overview</title>

</head>

<body>

    <!-- Header -->
    <?php
    $isActiveNav = "overview";
    include '../../navigation/header_candidate.php';
    ?>

    <div class="overview">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="section-left">
                        <a href="candidate_overview.php" class=" d-flex">
                            <i class="fa fa-user icon"></i>
                            <p class="ms-3">Overview</p>
                        </a>
                        <a href="applied_jobs.php" class=" d-flex">
                            <i class="fa fa-briefcase icon"></i>
                            <p class="ms-3">Apllied jobs</p>
                        </a>
                        <a href="#" class="  d-flex">
                            <i class="fa fa-bell icon"></i>
                            <p class="ms-3">Jobs Alert</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="section-right">
                        <h6 class="fw-bold">Hello, Ahmed Mohammed</h6>
                        <p>Here is your daily activities and job alerts</p>
                        <div class="overview-details d-flex justify-content-between">
                            <div class="card">
                                <div class="card-details d-flex">
                                    <div class="card-body">
                                        <h5 class="card-title">254</h5>
                                        <p class="card-text">Apllied jobs</p>
                                    </div>
                                    <div class="card-icon"> <i class="fa fa-briefcase icon"></i></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-details d-flex">
                                    <div class="card-body">
                                        <h5 class="card-title">453</h5>
                                        <p class="card-text">job Alerts</p>
                                    </div>
                                    <div class="card-icon"> <i class="fa fa-bell icon"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-candidates d-flex align-items-center w-100 mt-3 border-0 ">
                            <div class="img-card" style="height: 75px; width: 75px">
                                <img src="../../img/logo_profile.jpg" class="card-img" alt="Company Logo">
                            </div>
                            <div class="card-body text-white ms-3">
                                <h6 class="card-text text-start">Your Profile editing is not completed.</h6>
                                <p class="card-text text-white">complete your profile editing & build your resume</p>
                            </div>
                            <div class="blue-button">
                                <a href="candidate_profile.php" class="w-100 rounded-1 "> Edit Profile <i class="fa fa-arrow-right ps-2 "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../footer.php'; ?>
</body>

</html>