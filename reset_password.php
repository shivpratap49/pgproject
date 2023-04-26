<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
                    <h2 style="position:absolute; top: 100px;">Welcome to Admin Login Portal
                    </h2>
                    <div id="login" class="bg-primary  p-0 bg-light">
                        <div class="container justify-content-center border border border-2 border-dark bg-primary rounded-4   ">
                            <div class="d-flex justify-content-center p-0">
                                <p> ADMIN LOGIN PORTAL</p>
                            </div>
                            <form action=update_password.php method="post">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="reset_token" value="<?php echo $token; ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name='password' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" name='cpassword' class="form-control">
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
        }
    }
    ?>

    </div>
    <Script>

    </Script>
    <script src="js/index1.js"></script>
    <?php
    include('footer.php');
    ?>