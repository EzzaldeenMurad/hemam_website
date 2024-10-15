<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/profile.css">

</head>

<body>
    <!-- Header -->
    <?php
    $isActiveNav = "profile";
    include '../../navigation/header_candidate.php';
    ?>

    <div class="page_profile">
        <div class="container">
            <form action="../../php/update_user_profile.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center m-auto  g-2">
                    <div class="col-sm-5">
                        <div class="contact-profile">
                            <div class="contact-profile-img">
                                <label for="profile-img" class="profile-img"> <img src="../../img/logo_profile.jpg" class="img" alt="" srcset=""></label>
                                <input type="file" hidden id="profile-img" name="profile-img ">
                            </div>
                            <div class="profile-info mt-3">
                                <p><span class="profile">name: </span>User</p>
                                <p><span class="profile">email: </span>user.com</p>
                                <p><span class="profile">age: </span>24 Years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city" class="col-form-label">City:</label>
                                        <select name="city" id="city" class="form-select">
                                            <option value="Mecca">Mecca</option>
                                            <option value="Riyadh">Riyadh</option>
                                            <option value="Jeddah">Jeddah</option>
                                            <option value="Dammam">Dammam</option>
                                            <option value="Madinah">Madinah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="province" class="col-form-label">provinces:</label>
                                        <select name="province" id="province" class="form-select">
                                            <option value="Mobility">Mobility disability</option>
                                            <option value="Mobility">سمعية</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Street:</label>
                                        <input type="text" id="street" class="form-control" name="street">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="text" id="phone" class="form-control" name="phone">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="cv">Curriculum Vitae:</label>
                                <input type="file" id="cv" class="form-control" name="cv">
                            </div>
                            <div class="form-group">
                                <label for="skills">Skills:</label>
                                <textarea id="skills" class="form-control" name="skills"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="experiences">Job Experiences:</label>
                                <textarea id="experiences" class="form-control" name="experiences"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="education">Education:</label>
                                <textarea id="education" class="form-control" name="education"></textarea>
                            </div>
                            <div class="blue-button">
                                <button type="submit">Save changes</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include '../../footer.php'; ?>
</body>

</html>