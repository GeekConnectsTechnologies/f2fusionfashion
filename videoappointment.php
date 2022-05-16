<?php
include('./db.php');
$upload_dir = './videopage/uploadclienttestimonial/';
$upload_diretr = './videopage/uploadengtorecp/';
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
    <div class="d-flex justify-content-center" style="padding: 10px;">
        <!-- <h1>LOGO</h1> -->
        <img src="assets/images/100x100_LOGO.png" class="img-fluid" alt="">
    </div>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEO APPOINTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="videoappointment.php">VIDEO APPOINTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="hero_image"> </div> -->

    <img class="img-fluid" src="assets/images/1920x1080.png">


    <section style="margin: 0px 25px 100px 25px;">
        <div class="container">
            <!-- <div class="section-title">
          <span>Video Call Appointment</span>
          <h2>Book Video Call Appointment</h2>
        </div> -->
            <div class="eleven">
                <h1>Video Call Appointment</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-12 col-sm-12 col-md-12 text-center mt-5">
                    <div class="accessoriesTitlecc">
                        <h5>Exclusive Garments From F2</h5>
                        <h2 class="mt-5"><b>GET VIDEO SHOPPING EXPERIENCE</b></h2>
                        <h5 class="mt-5">Book Your Appointment</h5>
                        <form action="" class="row g-3 needs-validation mt-4" novalidate>
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Name.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="number" class="form-control" id="validationCustom02" placeholder="Contact No." required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelpId" placeholder="Email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter Valid a Email.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Message" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Message.
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <!-- <button class="btn btnbook" type="submit">
                                    <h5 style="margin: 0;">Book Now</h5>
                                </button> -->
                                <div class="flex">
                                    <a href="#0" class="bttn">Continue</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">

            <div class="eleven">
                <h1>Engagement to Reception</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        <?php
                        $counter = 1;
                        $sql = "select * from engtorecp ORDER BY sequence";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="post-slide">
                                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                        <img src="<?php echo $upload_diretr . $row['engtorecpImage'] ?>" class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4><?php echo $row['engtorecpTitle'] ?></h4>
                                                <span><?php echo $row['engtorecpDesc'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php $counter++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <!-- <div class="section-title">
                <span>Brand Video</span>
                <h2>Brand Video</h2>
            </div> -->
            <div class="eleven">
                <h1>Brand Video</h1>
            </div>
            <div class="row justify-content-center-md-center">
                <div id="brandvideo" class="owl-carousel">

                    <?php
                    $counter = 1;
                    $sql = "select * from brandvideo ORDER BY sequence";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="col-6 col-sm-6 col-md-3 text-center">

                                <?php echo $row['brandVideoEmbedded']; ?>
                            </div>


                    <?php $counter++;
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <!-- <div class="section-title">
                <span>Customer Testimonials</span>
                <h2>Customer Testimonials</h2>
            </div> -->
            <div class="eleven">
                <h1>Customer Testimonials</h1>
            </div>
            <div class="row justify-content-center-md-center">
                <?php
                $counter = 1;
                $sql = "select * from client ORDER BY sequence";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col-6 col-sm-6 col-md-3 text-center">
                            <div class="content">
                                <div class="content-overlay"></div>
                                <img class="img-fluid" src="<?php echo $upload_dir . $row['clientImage'] ?>">
                                <div class="content-details fadeIn-bottom">
                                    <h4 class="content-title"><?php echo $row['clientName'] ?></h4>
                                    <h6 class="content-title"><?php echo $row['location'] ?></h6>
                                    <hr style="color: white;">
                                    <p class="content-text"><?php echo $row['testimonial'] ?></p>
                                </div>
                            </div>
                        </div>

                <?php $counter++;
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <section style="margin: 100px 25px 100px 25px;">
        <div class="container">
            <div class="row justify-content-md-around">
                <div class="col-12 col-sm-12 col-md-5 text-center mt-5">
                    <div class="accessoriesTitle">
                        <h5>Video Call Appointment</h5>
                        <form action="" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Name.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="number" class="form-control" id="validationCustom02" placeholder="Contact No." required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label"></label>
                                <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelpId" placeholder="Email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter Valid a Email.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label"></label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Message" required>
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
                                    <a href="#0" class="bttn">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 text-center mt-5">
                    <div class="accessoriesTitle">
                        <h5>Follow Us</h5>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-2 text-center">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </div>
                            <div class="col-md-2">
                                <i class='bx bxl-instagram bx-md'></i>
                            </div>
                            <div class="col-md-2">
                                <i class='bx bxl-whatsapp bx-md'></i>
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
                    <h6>Navrang Cinema Road, Siyapura, Raopura, Mandvi, Vadodara - 390001</h6>
                </div>
                <div class="col-md-3">
                    <h6>Privacy Policy | Terms & Conditions</h6>
                </div>
            </div>
        </div>
    </footer>



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

</html>