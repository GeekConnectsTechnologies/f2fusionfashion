<?php
include('./db.php');
$upload_header = './landing_page/uploadheaderImage/';
$upload_title = './landing_page/uploadtitleImage/';
$upload_lproduct = './landing_page/uploadlandingproduct/';
$upload_limage = './landing_page/uploadlandingimage/';
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
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>

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
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="videoappointment.php">VIDEO APPOINTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="hero_image"> </div> -->

    <?php
    $sqllpi = "select * from landingheroimage";
    $resultlpi = mysqli_query($con, $sqllpi);
    if (mysqli_num_rows($resultlpi)) {
        while ($rowlpi = mysqli_fetch_assoc($resultlpi)) {
    ?>
            <img class="img-fluid" src="<?php echo $upload_limage . $rowlpi['photo'] ?>">
    <?php
        }
    }
    ?>


    <?php
    $counter = 1;
    $sql = "select * from campaign ORDER BY sequence limit 5";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <section>
                <div class="container-fluid text-center">
                    <div class="row campaignTitle" style="background-image: url('<?php echo $upload_title . $row['titleImage'] ?>');">
                        <div class="my-auto"><?php echo $row['title'] ?></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <a href="enquiry.php?cid=<?php echo $row['campaignId'] ?>">
                                <img class="img-fluid landingProductHeroImage" src="<?php echo $upload_header . $row['headerImage'] ?>">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 hideScroll text-center <?php if($row['sequence']%2==0){echo 'order-first';}?>" style="height: 950px;  overflow: auto;">
                            <div class="row">
                                <?php
                                $counter = 1;
                                $lppsql = "select * from landingpageproduct where campaignId=" . $row['campaignId'] . " ORDER BY sequence";
                                $lppresult = mysqli_query($con, $lppsql);
                                if (mysqli_num_rows($lppresult)) {
                                    while ($lpprow = mysqli_fetch_assoc($lppresult)) {
                                ?>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                            <img class="img-fluid productImage" src="<?php echo $upload_lproduct . $lpprow['lppPhoto'] ?>">
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
    <?php $counter++;
        }
    }
    ?>

    <!-- <section>

        <div class="container-fluid text-center">
            <div class="row campaignTitle" style="background-image: url('assets/images/title.png');">
                <div class="my-auto">Ullas</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 hideScroll text-center order-2 order-sm-2 order-md-1" style="height: 950px;  overflow: auto;">
                    <div class="row">

                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 8.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 9.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 10.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 11.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 12.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 13.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 14.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 15.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 order-sm-1 order-1 order-md-2">
                    <img class="img-fluid landingProductHeroImage" src="assets/images/ullas.png">
                </div>
            </div>
        </div>

    </section>


    <section>

        <div class="container-fluid text-center">
            <div class="row campaignTitle" style="background-image: url('assets/images/title.png');">
                <div class="my-auto">Sparsh</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid landingProductHeroImage" src="assets/images/sparsh.png">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 hideScroll text-center" style="height: 950px;  overflow: auto;">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 16.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 17.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 18.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 19.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 20.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 21.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 22.png">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <img class="img-fluid productImage" src="assets/images/Artboard 1 copy 23.png">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <section>

        <div class="container mt-5">
            <!-- <div class="section-title">
                <span>Accessories</span>
                <h2>Accessories</h2>
            </div> -->
            <div class="eleven">
                <h1>Accessories</h1>
            </div>
            <div class="row justify-content-center text-center">
                <img class="img-fluid " src="assets/images/acc.png">
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

</html>