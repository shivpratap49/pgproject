<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
    $log = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = ($_POST['username']);
        $pass = md5($_POST['password']);

        $sql = "SELECT*FROM admin WHERE password='$pass' and username='$user' ";
        $result = pg_query($conn, $sql);
        $row = pg_fetch_array($result);
        if (pg_num_rows($result) == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            $_SESSION['type'] = 'admin';
            if ($row['user_type'] == "Admin") {
                header("location: admin_dashboard.php");
            }
            if ($row['user_type'] == "Collector") {
                header("location: report.php");
            }
        } else {
            $log = false;
        }
    }
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($log == false) { ?>
            <div class="alert  alert-danger" role="alert">
                Invalid User or Password
            </div>
    <?php
        }
    }

    ?>
    <div id="cont">
        <h2 style="position:absolute; top: 100px;">Welcome to DM Login
        </h2>
        <div id="login" class="bg-primary  p-0 bg-light">
            <div class="container justify-content-center border border border-2 border-dark bg-primary rounded-4   ">
                <div class="d-flex justify-content-center p-0">
                    <p> DM LOGIN PORTAL</p>
                </div>
                <form action=admin_login.php method="post">
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="exampleInputEmail1" class="form-label text-white">Username </label>
                        <div class="d-flex">
                            <i class="fa fa-user icon "></i>
                            <input type="name" name="username" class="form-control border-0 rounded-0" id="name" placeholder="Username" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="exampleInputPassword1" class="form-label text-white ">Password</label>
                        <div class="d-flex">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="password" class="form-control border-0 rounded-0" id="exampleInputPassword1">
                        </div>
                        <input type="checkbox" onclick="showpass()">Show Password
                    </div>
                    <div class=" d-flex justify-content-end"> <span class="text-dark  " style="font:size 8px; " id="address"><a href="admin_passreset.php" class="link-dark">forgot Password ?</a></span></div>

                    <div class=" d-flex justify-content-center ">

                        <div class="d-inline-flex p-2 ">

                            <button type="submit" class="btn btn-warning "> Login</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>


    <script>
        function showpass() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="js/index1.js"></script>
    <?php
    include('footer.php');
    ?>