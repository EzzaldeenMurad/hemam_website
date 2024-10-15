<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/fontAwesome.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .reset-password {
            width: 70%;
            margin: 7% auto;
        }

        .reset-password form {
            width: 70%;
            margin: auto;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
            padding: 30px;
            border-radius: 10px;
        }
    </style>
    <title>Reset Password</title>
</head>

<body>
    <div class="reset-password">
        <div class="container">
            <h1 class="text-center">Reset Password</h1>
            <br>
            <br>
            <br>
            <form action="reset_password.php" method="post">
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                </div>
                <div class="blue-button">
                    <button class="w-100" type="submit">Reset Password
                        <i class="fa fa-arrow-right ms-3"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>