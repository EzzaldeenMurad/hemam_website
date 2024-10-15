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
    <title>Employers</title>

    <style>
        .page-employers {
            margin: 20px;
        }

        .img-card {
            height: 50px;
            width: 70px;
            margin: 20px auto;
        }

        .card {
            border: none;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.5);
            /* padding: 0 10px; */
            padding-bottom: 10px;
        }

        .blue-button {
            margin: auto;
            width: 90%;
        }
    </style>

</head>

<body>

<?php
    $isActiveNav = "employers";
    include "navigation/header_index.php";
    include "auth_page.php";
    ?>

    <div class="page-employers">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row ">
                            <div class="col-md-4 p-0">
                                <div class="img-card">

                                    <img src="img/blog-2-720x480.jpg" class="card-img h-100" alt="Company Logo">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">employer</h5>
                                    <p class="card-text"><i class="fa fa-map-marker"></i> Location</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="blue-button">
                                    <a href="single_employer.php" class="btn w-100">Open Position (3)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row ">
                            <div class="col-md-4 p-0">
                                <div class="img-card">

                                    <img src="img/blog-2-720x480.jpg" class="card-img h-100" alt="Company Logo">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">employer</h5>
                                    <p class="card-text"><i class="fa fa-map-marker"></i> Location</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="blue-button">
                                    <a href="single_employer.php" class="btn w-100">Open Position (3)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>