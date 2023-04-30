<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
</head>

<body>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once('config.php');
    include('header.php');

    ?>

    <?php
    ?>

    <?php
    $valid=true;
    $sendmail=false;
    if (isset($_POST['password-reset-token']) && $_POST['email']) {
        $valid=true;
        $emailId = $_POST['email'];

        $result = pg_query($conn, "SELECT * FROM admin WHERE email='" . $emailId . "'");

        $row = pg_fetch_array($result);

        if ($row) {

            $token = md5($emailId) . rand(10, 9999);

            $expFormat = mktime(
                date("H"),
                date("i"),
                date("s"),
                date("m"),
                date("d") + 1,
                date("Y")
            );

            $expDate = date("Y-m-d H:i:s", $expFormat);

            $update = pg_query($conn, "UPDATE admin set reset_token='" . $token . "' ,expdate='" . $expDate . "' WHERE email='" . $emailId . "'");

            $link = "<a href='http://localhost/projectphp/pgproject/reset_password.php?key=" . $emailId . "&token=" . $token . "'>Click To Reset password</a>";

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer(true);

            try {
                //Server settings
                //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'spsinghrajawat49@yahoo.com';                     //SMTP username
                $mail->Password   = 'shskotzzizkargkg';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('spsinghrajawat49@yahoo.com', 'Mailer');
                $mail->addAddress("$emailId", 'Joe User');     //Add a recipient

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset Password';
                $mail->Body    = "$link";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                $sendmail=true;
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $valid=false;
        }
    }
    ?>



    <div id="cont" class="flex-column">
        <h2 style="position:absolute; top: 100px;">Welcome to Admin Login Portal
        </h2><?php
        if($sendmail==true){
        echo '<p class="text-success">Message has been sent Please check your Email</p>';
        }
        ?>
        <div id="login" class="bg-primary  p-0 bg-light">
            
            <div class="container justify-content-center border border border-2 border-dark bg-primary rounded-4   ">
                <div class="d-flex justify-content-center p-0">
                    <p> ADMIN LOGIN PORTAL</p>
                </div>
                <form action=admin_passreset.php method="post">
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="validationCustomUsername" class="form-label text-white">Enter Your Email </label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                            <?php 
                            if($valid==false){
                            echo "<p class='text-center text-white'>* Invalid Email Address</p>";
                            }
                            ?>
                            
                        </div>
                    </div>

                    <div class=" d-flex justify-content-center ">
                  
                        <div class="d-inline-flex p-2 ">

                            <button type="submit" class="btn btn-warning " name="password-reset-token"> Send link</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    <Script>

    </Script>
    <script src="js/index1.js"></script>
    <?php
    include('footer.php');
    ?>