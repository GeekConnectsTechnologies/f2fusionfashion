<?php
session_start();
require_once 'config.php';
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';
include('./db.php');
$upload_dir = './videopage/uploadclienttestimonial/';
$upload_diretr = './videopage/uploadengtorecp/';


if (isset($_POST['btnSave'])) {

    # Current date
    date_default_timezone_set('Asia/Kolkata');
    // echo date("Y-m-d H:i:s");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s");
    $source = 'Contact Us Page';

    // Validate form fields
    $errorMsg = '';
    if (empty($name)) {
        $errorMsg = 'Enter Name';
    }

    // Insert data to database
    if (empty($errorMsg)) {
        $sql = "insert into formdetails(name, phone, email, message, datetime, source)
                values('" . $name . "','" . $phone . "','" . $email . "','" . $message . "','" . $date . "','" . $source . "')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $_SESSION['formSubmitted'] = true;
            // header('refresh:5;brandvideo.php');
        } else {
            $errorMsg = 'Error ' . mysqli_error($con);
        }
        
         try {
        
        $nodeurl = 'https://wa.apikaro.in/send';
 
       
         $whatsAppMsg = "Enquiry From Website\n\nName: " . $name . "\nContact Number: " . $phone . "\nEmail: " . $email . "\nMessage: " . $message . "\nDate: " . $date . "\nSource " . $source . "";
        $data = [
            'receiver'  => '919106604633',
            'msgtext'   => $whatsAppMsg,
            'token'     => 'dpOa0kjlh1SjeSLsdd6V',
            
        ];
         
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_URL, $nodeurl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error";
            
        }

        // Send email notification
        $mail = new PHPMailer\PHPMailer();
        try {
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = 'smtp-relay.sendinblue.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = 'f2fusionfashion@gmail.com';
            $mail->Password = 'OXDxFjgfn8Um617w';

            $mail->setFrom('f2fusionfashion@gmail.com', 'Client Enquiry');
            $mail->addAddress('f2fusionfashion@gmail.com', 'F2 Fusion Fashion');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'New Form Submission from ' . $name;
            $mail->Body = '<p><strong>Name: </strong>' . $name . '</p>
                            <p><strong>Phone: </strong>' . $phone . '</p>
                            <p><strong>Email: </strong>' . $email . '</p>
                            <p><strong>Message: </strong>' . $message . '</p>';

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $errorMsg = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="assets/images/LOGO_fav.png">

    <title>F2 Fusion Fashion</title>
</head>

<body>
    <button onclick="window.location.href='https://wa.me/919327658213?text=I%27m%20interested%20in%20your%20services'" id="myBtn" title="Whatsapp"><i class="bx bxl-whatsapp"></i></button>
    <div class="d-flex justify-content-center" style="padding: 10px;">
        <!-- <h1>LOGO</h1> -->
        <center>
            <a href="index.php"><img src="assets/images/100x100_LOGO.png" class="lazy img-fluid" alt="" id="reslogo"></a>
        </center>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="videoappointment.php">VIDEO APPOINTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Collections
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./enquiry.php?cid=15">Nayab</a></li>
                            <li><a class="dropdown-item" href="./enquiry.php?cid=13">Anant</a></li>
                            <li><a class="dropdown-item" href="./enquiry.php?cid=14">Aavaas</a></li>                            
                            <li><a class="dropdown-item" href="./enquiry.php?cid=11">Ullas</a></li>                                 
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#celebrityCloset">CELEBRITY CLOSET</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contactus.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="hero_image"> </div> -->

    <!-- <img class="lazy img-fluid" src="assets/images/1920x1080.png"> -->


    <section style="margin: 0px 25px 100px 25px;">
        <div class="container">
            <!-- <div class="section-title">
          <span>Video Call Appointment</span>
          <h2>Book Video Call Appointment</h2>
        </div> -->
            <div class="eleven">
                <h1>Stores</h1>
            </div>
            <div class="row justify-content-md-center text-center">
                    <h2>Navrang cinema road, Raopura, Vadodara, Gujarat - 390001</h2>
                <h4 class="mt-3">+91 99898 99898</h4>
                <div class="col-12 col-sm-12 col-md-6 text-center mt-5">
                    <img class="lazy img-fluid" src="assets/images/raopura.jpg">
                </div>
                <div class="col-12 col-sm-12 col-md-6 mt-5 d-flex align-items-center">
                    <div class="row ">
                    <div class="mapouter">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=F2%20Fusion%20Fashion&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin: 0px 25px 100px 25px;">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <h2>2 Gamthi Complex, Productivity Road, Alkapuri, Vadodara - 390007</h2>
                <h4 class="mt-3">+91 99898 99898</h4>
                <div class="col-12 col-sm-12 col-md-6 text-center mt-5">
                    <img class="lazy img-fluid" src="assets/images/alkapuri2.jpeg">
                </div>
                <div class="col-12 col-sm-12 col-md-6 mt-5 d-flex align-items-center">
                    <div class="mapouter">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="650" id="gmap_canvas" src="https://maps.google.com/maps?q=F2%20Fusion%20Fashion&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: left;
                                        height: 650px;
                                        width: 600px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section style="margin: 100px 25px 100px 25px;">
        <div class="container">
            <div class="row justify-content-md-around">
                <div class="col-12 col-sm-12 col-md-5 text-center mt-5">
                    <div class="accessoriesTitle">
                        <h5>Video Call Appointment</h5>
                        <form action="" class="row g-3 needs-validation" method="POST" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Name.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="number" class="form-control" name="phone" id="validationCustom02" placeholder="Contact No." required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="email" class="form-control" name="email" id="validationCustom01" aria-describedby="emailHelpId" placeholder="Email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter Valid a Email.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="text" class="form-control" name="message" id="validationCustom02" placeholder="Message" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Message.
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
                                <div class="flex">
                                    <!-- <button class="bttn">Submit</button> -->
                                    <button type="submit" class="bttn" name="btnSave">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 text-center mt-5">
                    <div class="accessoriesTitle">
                        <h5>Follow Us</h5>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-2 col-4">
                                <a href="https://www.facebook.com/f2fushionfashion/"><i class='bx bxl-facebook-square bx-md'></i></a>
                            </div>
                            <div class="col-md-2 col-4">
                                <a href="https://www.instagram.com/f2fusionfashion_/"><i class='bx bxl-instagram bx-md'></i></a>
                            </div>
                            <div class="col-md-2 col-4">
                                <a href="https://api.whatsapp.com/send?phone=917600955799&text=Hello%2C%20I%20want%20more%20info%20about%20the%20product"><i class='bx bxl-whatsapp bx-md'></i></a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-5">
                            <h5>Contact Us</h5>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <i class='bx bxs-phone bx-md'></i>
                            <h6 class="mt-3">+91 9427542226 / +91 265 2422622</h6>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <i class='bx bx-envelope bx-md'></i>
                            <h6 class="mt-3">f2fusionfashion@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3 bg-light border-top border-secondary border-1">
        <div class="container">
            <div class="row">
                <!-- <span class="text-muted">Place sticky footer content here.</span> -->
                <div class="col-md-3">
                    <h6>@f2fusionfashion</h6>
                </div>
                <div class="col-md-3">
                    <h6>2 Gamthi Complex, Productivity Road, Alkapuri, Vadodara - 390007</h6>
                </div>
                <div class="col-md-3">
                    <h6>Navrang cinema road, Raopura, Vadodara, Gujarat - 390001</h6>
                </div>
                <div class="col-md-3">
                    <h6><a href="privacy-policy.php">Privacy Policy</a> | <a href="terms-conditions.php">Terms & Conditions</a></h6>
                    <h6><a href="shopping-policy.php">Shoppig Policy</a> | <a href="refund-and-cancellation.php">Refund & Cancellation</a></h6>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thank You</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your response is successfully submitted. We will contact you shortly.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            navigation: true,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#brandvideo").owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            navigation: true,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true,
            margin: 10
        });
    });
</script>

<script>
    var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
</script>
<?php
    echo "<script>console.log(" . $_SESSION['formSubmitted'] . ")</script>";
    if (isset($_SESSION['formSubmitted']) && $_SESSION['formSubmitted'] === true) {
        echo "<script>
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
document.onreadystatechange = function () {
  myModal.show();
};</script>";
        unset($_SESSION['formSubmitted']);
    }
    ?>

</html>