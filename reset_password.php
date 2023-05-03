<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <style>
        .icon {
            padding: 10px;
            background: white;
            color: black;
            min-width: 30px;
            text-align: center;

        }
    </style>
</head>

<body>
    <?php
    require_once('config.php');
    include('header.php');

    if ($_GET['key'] && $_GET['token']) {

        $email = $_GET['key'];
        $token = $_GET['token'];
        $query = pg_query(
            $conn,
            "SELECT * FROM admin WHERE reset_token='" . $token . "' AND email='" . $email . "';"
        );
        $curDate = date("Y-m-d H:i:s");
        if (pg_num_rows($query) > 0) {
            $row = pg_fetch_array($query);
            if ($row['expdate'] >= $curDate) { ?>
                <div id="cont">
                    <h2 style="position:absolute; top: 100px;">Reset Password
                    </h2>
                    <div id="login" class="bg-primary  p-0 bg-light">
                        <div class="container justify-content-center border border border-2 border-dark bg-primary rounded-4   ">
                            <div class="d-flex justify-content-center p-0">
                                <p> ADMIN LOGIN PORTAL</p>
                            </div>
                            <form action=update_password.php method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Username</label>
                                    <div class="d-flex">
                                        <i class="fa fa-user icon "></i>
                                        <input type="name" name="username" class="form-control border-0 rounded-0" value="<?php echo $row['username']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Email</label>
                                    <div class="d-flex">
                                        <i class="fa fa-envelope icon "></i>
                                        <input type="email" name="newemail" class="form-control border-0 rounded-0" value="<?php echo $email; ?>" required>
                                    </div>
                                </div>
                                <input type="hidden" name="email" class="form-control border-0 rounded-0" value="<?php echo $email; ?>">
                                <input type="hidden" name="reset_token" value="<?php echo $token; ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <div class="d-flex">
                                        <i class="fa fa-key icon "></i>
                                        <input type="password" name='password' class="form-control border-0 rounded-0" id=password1>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <div class="d-flex">
                                        <i class="fa fa-key icon "></i>
                                        <input type="password" name='cpassword' class="form-control border-0 rounded-0"  id=password2>
                                    </div>
                                    <input type="checkbox" onclick="showpass()">Show Password
                                </div>
                                <div class=" d-flex justify-content-center ">

                                    <div class="d-inline-flex p-2 ">

                                        <button type="submit" class="btn btn-warning " name="new-password"> Save</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

    <?php }
        } else {
            echo '<div id="cont"><p text-center text-danger>*Your Token is not valid </p></div>';
        }
    }
    ?>

    </div>
    <Script>
 
        function showpass() {
            var x = document.getElementById("password1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("password2");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    
    </Script>
    <script src="js/index1.js"></script>
    <?php
    include('footer.php');
    ?>