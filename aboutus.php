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
                        <a class="nav-link active" href="aboutus.php">ABOUT US</a>
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

    <!-- <img class="lazy img-fluid" src="assets/images/1920x1080.png"> -->


    <section style="margin: 0px 25px 100px 25px;">
        <div class="container">
            <!-- <div class="section-title">
          <span>Video Call Appointment</span>
          <h2>Book Video Call Appointment</h2>
        </div> -->
            <div class="eleven">
                <h1>Founder</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-12 col-sm-12 col-md-4 text-center mt-5">
                    <img class="lazy img-fluid" src="assets/images/AU-logo.jpg">
                </div>
                <div class="col-12 col-sm-12 col-md-8 mt-5 d-flex align-items-center">
                    <p class="" style="color: #222222; font-size: 13pt; line-height: 28px; padding: 10px;">
                        F2 Fusion fashion is a one stop shop for all your ethnic fashion needs providing a hassle free and satisfying shopping experience to shoppers across the country with the widest range of products on both; retail outlet as well as e-commerce store. F2 fusion fashion aims at making a conscious effort of bring array of trendiest and fashionable ethnic wear exclusively for men that are affordable.
<br/><br/>Some of the greatest journey starts with the smallest of steps. One such journey began in 1983 , inside a small shop or studio. Started out as nothing, but with an aspiring dream and great vision.
<br/><br/>We began with negligible outfits and 1 or 2 brands and set out to fulfill our destiny to give the Indian fashion industry a taste of traditional fashion that was luxurious and at the same time affordable. We are based in Gujarat but cater to clients globally: including prominent personalities from Bollywood and T.V shows.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section style="margin: 0px 25px 100px 25px;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-sm-12 col-md-6 text-center mt-5 d-flex justify-content-center">
                    <div class="card" style="width: 70%;">
                        <img src="assets/images/pankaj.jpeg" class="lazy card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pankaj Shahdadpuri</h5>
                            <!--<hr>-->
                            <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 text-center mt-5 d-flex justify-content-center">
                    <div class="card" style="width: 70%;">
                        <img src="assets/images/amit.jpeg" class="lazy card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Amit Shahdadpuri</h5>
                            <!--<hr>-->
                            <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">

            <div class="eleven">
                <!-- <h1>"Even Celebrity Trust and Love Us"</h1> -->
                <h1>Watch, Experience, Buy</h1>
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
                            <div class="col-md-3 text-center">

                                <?php echo $row['brandVideoEmbedded']; ?>
                            </div>


                    <?php $counter++;
                        }
                    }
                    ?>

                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-3 col-6">
                <a href="https://www.instagram.com/amittksingh/" target="_blank"><img src="assets/images/A-100.jpg" class="lazy card-img-top p-3" alt="..."></a>
                </div>
                <div class="col-md-3 col-6">
                <a href="https://www.instagram.com/nomaanellahi/" target="_blank"><img src="assets/images/B-100.jpg" class="lazy card-img-top p-3" alt="..."></a>
                </div>
                <div class="col-md-3 col-6">
                <a href="https://www.instagram.com/hardikpandya93/" target="_blank"><img src="assets/images/C-100.jpg" class="lazy card-img-top p-3" alt="..."></a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="https://www.instagram.com/arjitaneja/" target="_blank"><img src="assets/images/D-100.jpg" class="lazy card-img-top p-3" alt="..."></a>
                </div>
            </div> -->
        </div>
    </section>
    
    <section>
        &nbsp;
    </section>

    <footer class="footer mt-auto py-3 bg-light border-top border-secondary border-1">
        <div class="container">
            <div class="row">
                <!-- <span class="text-muted">Place sticky footer content here.</span> -->
                <div class="col-md-3">
                    <h6>@f2fusionfashion</h6>
                </div>
                <div class="col-md-3">
                    <h6>2, Gamthi Complex, BPC Rd, Opp. BPC building, Vadodara, Gujarat 390020</h6>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.7/jquery.lazyload.js"></script>  -->

<script type="text/javascript" charset="utf-8">
//   $(function() {
//      $("img.lazy").lazyload({
//          effect : "fadeIn"
//      });

//   });
</script>

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

</html>