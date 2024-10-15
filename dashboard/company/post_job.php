<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/post_job.css">

    <title>Post Job</title>
    <style>

    </style>
</head>

<body>


    <!--   header  -->
    <?php
    $isActiveNav = "post_job";
    include '../../navigation/header_employer.php';
    ?>

    <div class="container">
        <div class="post-job">
            <form action="success_post_job.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="salary" class="form-label">Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="posted_at" class="form-label">Posted At</label>
                            <input type="date" class="form-control" id="posted_at" name="posted_at">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="address_name" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address_name" name="addressName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="companyName">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label for="is_active" class="form-label">Is Active</label>
                            <select class="form-select" id="is_active" name="is_active">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="qualifications" class="form-label">Qualifications</label>
                            <textarea class="form-control" id="qualifications" name="qualifications"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label for="requirements" class="form-label">Requirements</label>
                            <textarea class="form-control" id="requirements" name="requirements"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="blue-button">
                            <button type="submit" class="w-100">submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include '../../footer.php'; ?>
</body>


</html>