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

    <!--   header  -->
    <?php
    $isActiveNav = "overview";
    include '../../navigation/header_employer.php';
    ?>

    <div class="overview">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="section-left">
                        <a class=" d-flex">
                            <i class="fa fa-user icon"></i>
                            <p class="ms-3">Overview</p>
                        </a>
                        <a href="employer_profile.php" class=" d-flex">
                            <i class="fa fa-user icon"></i>
                            <p class="ms-3">Employer Profile</p>
                        </a>
                        <a href="post_job.php" class="  d-flex">
                            <i class="fa fa-briefcase icon"></i>
                            <p class="ms-3">Post a Job</p>
                        </a>
                        <a href="posted_jobs.php" class="  d-flex">
                            <i class="fa fa-briefcase icon"></i>
                            <p class="ms-3">My Jobs</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="section-right">
                        <h6 class="fw-bold">Hello, Company</h6>
                        <p>Here is your daily activities and Application</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../footer.php'; ?>
</body>

</html>