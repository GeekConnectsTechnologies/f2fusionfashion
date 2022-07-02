<?php
include('./db.php');
$upload_dir = './videopage/uploadclienttestimonial/';
$upload_diretr = './videopage/uploadengtorecp/';

if (isset($_POST['btnSave'])) {

    $name = "none";
    $mail = "none";
    $country = "none";
    $phone = "none";
    $mode = "none";
    $modeID = "none";
    $date = "none";
    $time = "none";
    $productreq = "none";

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $mode = $_POST['mode'];
    $modeID = $_POST['modeID'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $productreq = $_POST['productreq'];

    if(1){ ?>

        <script type="text/javascript">
        
        window.open('https://wa.me/+918866876151?text=Name%20:%20<?php echo $name ?>%0AEmail%20:%20<?php echo $mail ?>%0ACountry%20:%20<?php echo $country ?>%0APhone%20Number%20:%20<?php echo $phone ?>%0AVideocall%20Mode%20:%20<?php echo $mode ?>%0AMode%20Details%20:%20<?php echo $modeID ?>%0ADate%20:%20<?php echo $date ?>%0ATime%20:%20<?php echo $time ?>%0AProduct%20Requirement%20:%20<?php echo $productreq ?>%0A', '_blank');
        
        </script>
        
        <?php }

    // header("Location: https://wa.me/+918866876151?text=Name%20:%20" . $name . "%0AEmail%20:%20" . $mail . "%0ACountry%20:%20" . $country . "%0APhone%20Number%20:%20" . $phone . "%0AVideocall%20Mode%20:%20" . $mode . "%0AMode%20Details%20:%20" . $modeID . "%0ADate%20:%20" . $date . "%0ATime%20:%20" . $time . "%0AProduct%20Requirement%20:%20" . $productreq . "%0A");
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
    <div class="d-flex justify-content-center" style="padding: 10px;">
        <!-- <h1>LOGO</h1> -->
        <a href="index.php"><img src="assets/images/100x100_LOGO.png" class="lazy img-fluid" alt=""></a>
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

    <img class="lazy img-fluid" src="assets/images/1920x1080.png">


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
                <div class="col-12 col-sm-12 col-md-12  mt-5">
                    <div class="accessoriesTitlecc">
                        <h5 class="text-center">Exclusive Garments From F2</h5>
                        <h2 class="mt-5 text-center"><b>GET VIDEO SHOPPING EXPERIENCE</b></h2>
                        <h5 class="mt-5 text-center">Book Your Appointment</h5>
                        <form action="" method="POST" class="row g-3 needs-validation mt-4" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelpId" placeholder="Email" name="mail" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter Valid a Email.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Country</label>
                                <select class="form-select" name="country" id="validationCustom01">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India" selected>India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Message.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="validationCustom02" placeholder="Mobile No." name="phone" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Select Mode of Video Call</label>
                                <select name="mode" id="validationCustom01" class="form-select" onchange="myFunction(event)">
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Skype">Skype</option>
                                    <option value="Facetime">Facetime</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label" id="videocallid">Enter Whatsapp Number</label>
                                <input type="number" class="form-control" id="videocall" name="modeID" placeholder="Whatsapp Number" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Select Appointment Date</label>
                                <input type="date" class="form-control" name="date" id="date" placeholder="Date" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Select Appointment Time (IST)</label>
                                <select name="time" class="form-select" id="">
                                    <option value="9:00 AM">9:00 AM IST</option>
                                    <option value="10:00 AM">10:00 AM IST</option>
                                    <option value="11:00 AM">11:00 AM IST</option>
                                    <option value="12:00 PM">12:00 PM IST</option>
                                    <option value="1:00 PM">1:00 PM IST</option>
                                    <option value="2:00 PM">2:00 PM IST</option>
                                    <option value="3:00 PM">3:00 PM IST</option>
                                    <option value="4:00 PM">4:00 PM IST</option>
                                    <option value="5:00 PM">5:00 PM IST</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a Contact Number.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="" class="form-label">Product Requirements</label>
                                <textarea name="productreq" class="form-control" id="" placeholder="Enter Product Requirements" rows="3"></textarea>
                            </div>

                            <div class="col-12 mt-5">
                                <!-- <button class="btn btnbook" type="submit">
                                    <h5 style="margin: 0;">Book Now</h5>
                                </button> -->
                                <div class="flex">
                                    <!-- <a href="#0" class="bttn">Continue</a> -->
                                    <button type="submit" class="bttn" name="btnSave">Submit</button>
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
                                        <img src="<?php echo $upload_diretr . $row['engtorecpImage'] ?>" class="lazy img-fluid" alt="">
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
                            <div class="col-md-3 text-center">

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



    <section style="margin-bottom: 100px;">
        <div class="container">
            <!-- <div class="section-title">
                <span>Customer Testimonials</span>
                <h2>Customer Testimonials</h2>
            </div> -->
            <div class="eleven">
                <h1>Customer Testimonials</h1>
            </div>
            <div class="row justify-content-center-md-center">
                <div id="client" class="owl-carousel">
                    <?php
                    $counter = 1;
                    $sql = "select * from client ORDER BY sequence";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="text-center">
                                <div class="content">
                                    <div class="content-overlay"></div>
                                    <img class="lazy img-fluid" src="<?php echo $upload_dir . $row['clientImage'] ?>">
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

<script>
    $(document).ready(function() {
        $("#client").owlCarousel({
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
    function myFunction(e) {
        videocall = document.getElementById("videocall");
        var value = e.target.value;
        if (value == "Whatsapp") {
            document.getElementById("videocallid").innerHTML = "Enter Whatsapp Number";
            videocall.placeholder = "Whatsapp Number";
            videocall.type = "number";
        } else if (value == "Skype") {
            document.getElementById("videocallid").innerHTML = "Enter Skype ID";
            videocall.placeholder = "Skype ID";
            videocall.type = "text";
        } else {
            document.getElementById("videocallid").innerHTML = "Enter Facetime Number";
            videocall.placeholder = "Facetime Number";
            videocall.type = "number";
        }
    }
</script>

</html>