<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/fontAwesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/profile.css">
    <link rel="stylesheet" href="../../css/notifications.css">
    <title>Notifications</title>

</head>

<body>

<!-- Header -->
    <?php
    $isActiveNav = "notifications";
    include '../../navigation/header_candidate.php';
    ?>


    <div class="notifications">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h5 class="card-title">Notifications</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notification</h5>
                            <p class="card-text">This is a sample card description. It can contain some additional
                                information
                                about
                                the card.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notification</h5>
                            <p class="card-text">This is a sample card description. It can contain some additional
                                information
                                about
                                the card.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notification</h5>
                            <p class="card-text">This is a sample card description. It can contain some additional
                                information
                                about
                                the card.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../footer.php'; ?>
</body>

</html>