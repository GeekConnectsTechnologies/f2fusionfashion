<?php
include('./db.php');
$upload_dir = './videopage/uploadclienttestimonial/';
$upload_diretr = './videopage/uploadengtorecp/';
$upload_dirp = 'landing_page/uploadproduct/';
$upload_dirh = 'landing_page/uploadheaderImage/';

$campaignid = $_GET['cid'];

if (isset($_POST['btnSave'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $id = $_POST['pid'];
    $pname = '';
    $productcode = '';
    $pimages = 'https://f2.geekconnects.co/landing_page/uploadproduct/';

    $sqlp = "select * from product where productId =" . $id . "";
    $resultp = mysqli_query($con, $sqlp);
    if (mysqli_num_rows($resultp)) {
        while ($rowp = mysqli_fetch_assoc($resultp)) {
            $pname = $rowp['pName'];
            $productcode = $rowp['productCode'];
        }
    }

    $sqlpi = "select * from productimages where productId =" . $id . " LIMIT 1";
    $resultpi = mysqli_query($con, $sqlpi);
    if (mysqli_num_rows($resultpi)) {
        while ($rowpi = mysqli_fetch_assoc($resultpi)) {

            $pimages = $pimages . $rowpi['pImages'];
            $pimages = str_replace(" ", "%20", $pimages);
        }
    }

    if (1) { ?>

        <script type="text/javascript">
            console.log(<?php echo $id ?>);
            window.open('https://wa.me/+919327658213?text=Name%20:%20<?php echo $name ?>%0AEmail%20:%20<?php echo $email ?>%0APhone%20Number%20:%20<?php echo $phone ?>%0AMessage%20:%20<?php echo $message ?>%0AProduct%20Name%20:%20<?php echo $pname ?>%0AProduct%20Code%20:%20<?php echo $productcode ?>%0AProduct%20Image%20Link%20:%20<?php echo $pimages ?>%0A', '_blank');
        </script>

<?php }
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
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="contactus.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="hero_image"> </div> -->
    <?php
    $counter = 1;
    $sql = "select * from campaign where campaignId =" . $campaignid . " ORDER BY sequence";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <img class="lazy img-fluid" src="landing_page/uploadcampaignImage/<?php echo $row['campaignHeroImage'] ?>">


            <section style="margin: 0px 25px 100px 25px;">
                <div class="container">
                    <!-- <div class="section-title">
          <span>Video Call Appointment</span>
          <h2>Book Video Call Appointment</h2>
        </div> -->
                    <div class="eleven">
                        <h1><?php echo $row['title'] ?></h1>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-12 col-md-12 text-center">
                            <!-- text-align: justify; -->
                            <p style="color: #222222; font-size: 12pt; line-height: 28px; padding: 10px;">
                                <!-- F2 India was established in 1983 and since then there is no looking back.
                        Rajoo India offers you the finest Indian ethnic elegance. It include exquisite Sherwanis,
                        fine Indo Westerns, royal Band Galas, printed and solid Jackets, Jodpuri , Elegant Tuxedos,basic to classic Kurtas and matching
                        accessories for every occasion in Men’s and kids wear
                        We offer Customization from Hand Crafted
                        Work to Tailoring fit with our Utmost Experience Working on every minute
                        details with Considering your Preferences Along with Widest
                        range of Collection in Men and kids wear. -->
                                <?php echo $row['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


    <?php $counter++;
        }
    }
    ?>

    <?php
    $counter = 1;
    $sql11 = "select * from campaign where campaignId =" . $campaignid . " ORDER BY sequence";
    $result11 = mysqli_query($con, $sql11);
    if (mysqli_num_rows($result11)) {
        while ($row11 = mysqli_fetch_assoc($result11)) {
            if ($row11['campaignType'] == "Enquiry") {
    ?>
                <section>
                    <div class="container">
                        <!-- <div class="section-title">
                <span>Brand Video</span>
                <h2>Brand Video</h2>
            </div> -->
                        <!-- <div class="eleven">
                <h1>Brand Video</h1>
            </div> -->
                        <div class="row justify-content-center-md-center">
                            <?php
                            $sql2 = "select * from product where campaignId = " . $campaignid . " ORDER BY sequence";
                            $result2 = mysqli_query($con, $sql2);
                            if (mysqli_num_rows($result2)) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                            ?>
                                    <div class="col-12 col-sm-12 col-md-3 text-center p-3">
                                        <div id="productcarousel<?php echo $row2['productId'] ?>" class="carousel slide" data-bs-touch="true" data-bs-ride="carousel">
                                            <div class="carousel-inner" id="<?php echo $row2['productId'] ?>">
                                                <?php
                                                $sql3 = "select * from productimages where productId = " . $row2['productId'] . " ORDER BY sequence";
                                                // echo $sql3;
                                                $result3 = mysqli_query($con, $sql3);
                                                if (mysqli_num_rows($result3)) {
                                                    while ($row3 = mysqli_fetch_assoc($result3)) {
                                                ?>
                                                        <div class="carousel-item">
                                                            <img class="lazy" src="<?php echo $upload_dirp . $row3['pImages'] ?>">
                                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                                <div class="flexx"> -->
                                                            <!-- <a href="#0" class="btttn">Enquiry</a> -->
                                                            <!-- Button trigger modal -->
                                                            <!-- <button type="button" class="btttn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        Enquiry
                                                                    </button>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#productcarousel<?php echo $row2['productId'] ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#productcarousel<?php echo $row2['productId'] ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row text-center justify-content-center pb-3">
                                            <h5><?php echo $row2['pName'] ?></h5>
                                            <p><?php echo $row2['smalldesc'] ?></p>
                                            <h6>Rs. <?php echo $row2['Price'] ?>/-</h6>
                                        </div>
                                        <div class="flexx">
                                            <!-- <a href="#0" class="btttn">Enquiry</a> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btttn" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row2['productId'] ?>">
                                            <i class='bx bxl-whatsapp bx-xs'></i> Enquiry
                                            </button>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="exampleModal<?php echo $row2['productId'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Fill the form</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
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
                                                        <input type="text" hidden name="pid" value="<?php echo $row2['productId'] ?>">

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
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
            <?php
            } else {
            ?>
                <section>
                    <div class="container">
                        <div class="row">
                            <?php
                            $sql5 = "select * from productig where campaignId = " . $campaignid . " ORDER BY sequence";
                            $result5 = mysqli_query($con, $sql5);
                            if (mysqli_num_rows($result5)) {
                                while ($row5 = mysqli_fetch_assoc($result5)) {
                            ?>
                                    <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center text-center p-3">
                                        <?php echo $row5['pIGEmbedded'] ?>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
    <?php
            }
        }
    }
    ?>

    <section>
        <div class="container">
            <div class="eleven">
                <h1>Explore More Campaigns</h1>
            </div>
            <div class="row">
                <?php
                $sql6 = "select * from campaign where campaignid <> " . $campaignid . " ORDER BY sequence";
                $result6 = mysqli_query($con, $sql6);
                if (mysqli_num_rows($result6)) {
                    while ($row6 = mysqli_fetch_assoc($result6)) {
                ?>
                        <div class="col-12 col-sm-12 col-md-4 d-flex justify-content-center text-center p-5">
                            <div class="row">
                                <!-- <div class="playfontcheck"></div> -->
                                <br><br><br>
                                <a href="enquiry.php?cid=<?php echo $row6['campaignId'] ?>">
                                    <figure class="wp-caption">
                                        <img class="lazy img-fluid landingProductHeroImage" src="<?php echo $upload_dirh . $row6['headerImage'] ?>">
                                        <figcaption class="wp-caption-text">Explore - <?php echo $row6['title'] ?></figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <!-- Modal -->


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
        $("#penquiry").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [980, 1],
            itemsMobile: [600, 1],
            navigation: false,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true,
            margin: 10
        });
    });
    $(document).ready(function() {
        $("#penquiry2").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [980, 1],
            itemsMobile: [600, 1],
            navigation: false,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true,
            margin: 10
        });
    });
    $(document).ready(function() {
        $("#penquiry3").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [980, 1],
            itemsMobile: [600, 1],
            navigation: false,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true,
            margin: 10
        });
    });
    $(document).ready(function() {
        $("#penquiry4").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [980, 1],
            itemsMobile: [600, 1],
            navigation: false,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true,
            margin: 10
        });
    });
</script>

<script>
    $(document).ready(function() {
        <?php
        $sql4 = "select * from product ORDER BY sequence";
        $result4 = mysqli_query($con, $sql4);
        if (mysqli_num_rows($result4)) {
            while ($row4 = mysqli_fetch_assoc($result4)) {
        ?>
                $('#<?php echo $row4['productId'] ?>').find('.carousel-item').first().addClass('active');
        <?php
            }
        }
        ?>
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



</html>