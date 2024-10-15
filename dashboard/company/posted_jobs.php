<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/recently_job.css">


    <title>My Jobs</title>

</head>

<body>


    <!--   header  -->
    <?php
    $isActiveNav = "posted_jobs";
    include '../../navigation/header_employer.php';
    ?>


    <!-- ----------- ------------ -->

    <div class="posted-jobs mt-5">
        <div class="container">
            <h5>Recently Posted Jobs</h5>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <p>JOBS</p>
                        </th>
                        <th>
                            <p>StATUS</p>
                        </th>
                        <th>
                            <p>APPLICATIONS</p>
                        </th>
                        <th>
                            <p>ACTIONS</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6>Front End Developer</h6>
                            <div class="d-flex">
                                <p>Full Time</p>
                                <p class="ms-4">8 days remaning</p>
                            </div>
                        </td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                        <td>
                            <div class="d-flex">
                                <p> <i class="fa fa-users"></i></p>
                                <p class="ms-2"> 643 Applications</p>
                            </div>
                        </td>
                        <td>
                            <div class="blue-button">
                                <a href="job_application.php">View Applications</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Front End Developer</h6>
                            <div class="d-flex">
                                <p>Full Time</p>
                                <p class="ms-4">8 days remaning</p>
                            </div>
                        </td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                        <td>
                            <div class="d-flex">
                                <p> <i class="fa fa-users"></i></p>
                                <p class="ms-2"> 643 Applications</p>
                            </div>
                        </td>
                        <td>
                            <div class="blue-button">
                                <a href="job_application.php">View Applications</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Front End Developer</h6>
                            <div class="d-flex">
                                <p>Full Time</p>
                                <p class="ms-4">8 days remaning</p>
                            </div>
                        </td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                        <td>
                            <div class="d-flex">
                                <p> <i class="fa fa-users"></i></p>
                                <p class="ms-2"> 643 Applications</p>
                            </div>
                        </td>
                        <td>
                            <div class="blue-button">
                                <a href="job_application.php">View Applications</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Front End Developer</h6>
                            <div class="d-flex">
                                <p>Full Time</p>
                                <p class="ms-4">8 days remaning</p>
                            </div>
                        </td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                        <td>
                            <div class="d-flex">
                                <p> <i class="fa fa-users"></i></p>
                                <p class="ms-2"> 643 Applications</p>
                            </div>
                        </td>
                        <td>
                            <div class="blue-button">
                                <a href="job_application.php">View Applications</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    
    <?php include '../../footer.php'; ?>
</body>

</html>