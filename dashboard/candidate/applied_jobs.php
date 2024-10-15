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


    <!-- Header -->
    <?php
    $isActiveNav = "applied_jobs";
    include '../../navigation/header_candidate.php';
    ?>


    <!-- ----------- ------------ -->

    <div class="applied-jobs mt-5">
        <div class="container">
            <h5>Recently Applied</h5>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <p>Job</p>
                        </th>
                        <th>
                            <p>Date Applied</p>
                        </th>
                        <th>
                            <p>Status</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="mb-2 d-flex">
                                <h6>Front End Developer</h6>
                                <span class="contract">Full Time</span>
                            </div>
                            <div class="d-flex">
                                <span class="icon me-2"><i class="fa fa-map-marker"></i></span>
                                <p>Mecca, Saudi Arabia</p>
                                <p class="ms-4">SAR 50k-80k/month</p>
                            </div>
                        </td>
                        <td>Feb 2, 2019 19:28</td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2 d-flex">
                                <h6>Front End Developer</h6>
                                <span class="contract">Full Time</span>
                            </div>
                            <div class="d-flex">
                                <span class="icon me-2"><i class="fa fa-map-marker"></i></span>
                                <p>Mecca, Saudi Arabia</p>
                                <p class="ms-4">SAR 50k-80k/month</p>
                            </div>
                        </td>
                        <td>Feb 2, 2019 19:28</td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2 d-flex">
                                <h6>Front End Developer</h6>
                                <span class="contract">Full Time</span>
                            </div>
                            <div class="d-flex">
                                <span class="icon me-2"><i class="fa fa-map-marker"></i></span>
                                <p>Mecca, Saudi Arabia</p>
                                <p class="ms-4">SAR 50k-80k/month</p>
                            </div>
                        </td>
                        <td>
                            <p>Feb 2, 2019 19:28</p>
                        </td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="mb-2 d-flex">
                                <h6>Front End Developer</h6>
                                <span class="contract">Full Time</span>
                            </div>
                            <div class="d-flex">
                                <span class="icon me-2"><i class="fa fa-map-marker"></i></span>
                                <p>Mecca, Saudi Arabia</p>
                                <p class="ms-4">SAR 50k-80k/month</p>
                            </div>
                        </td>
                        <td>Feb 2, 2019 19:28</td>
                        <td class="text-success"><i class="fa fa-check"></i> Active</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <?php include '../../footer.php'; ?>
</body>

</html>