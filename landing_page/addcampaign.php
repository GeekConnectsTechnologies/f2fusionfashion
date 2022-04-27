<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$upload_dir = 'uploadheaderImage/';

$upload_dir2 = 'uploadtitleImage/';

$upload_dir3 = 'uploadcampaignImage/';

if (isset($_POST['btnSave'])) {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $campaignType = $_POST['campaignType'];

  $imgName = $_FILES['headerImage']['name'];
  $imgTmp = $_FILES['headerImage']['tmp_name'];
  $imgSize = $_FILES['headerImage']['size'];

  $imgName2 = $_FILES['titleImage']['name'];
  $imgTmp2 = $_FILES['titleImage']['tmp_name'];
  $imgSize2 = $_FILES['titleImage']['size'];

  $imgName3 = $_FILES['campaingImage']['name'];
  $imgTmp3 = $_FILES['campaingImage']['tmp_name'];
  $imgSize3 = $_FILES['campaingImage']['size'];

  if (empty($title)) {
    $errorMsg = 'Please Enter Title';
  } elseif (empty($imgName)) {
    $errorMsg = 'Please select Header Image';
  } elseif (empty($imgName2)) {
    $errorMsg = 'Please select Title Image';
  } elseif (empty($imgName3)) {
    $errorMsg = 'Please select Campaing Hero Image';
  } else {
    //get image extension
    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    $imgExt2 = strtolower(pathinfo($imgName2, PATHINFO_EXTENSION));
    $imgExt3 = strtolower(pathinfo($imgName3, PATHINFO_EXTENSION));
    //allow extenstion
    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
    //random new name for photo
    $headerImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt;
    
    $titleImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt2;
    
    $campaignHeroImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt3;
    //check a valid image
    if (in_array($imgExt, $allowExt)) {
      //check image size less than 5MB
      if ($imgSize < 5000000) {
        move_uploaded_file($imgTmp, $upload_dir . $headerImage);
      } else {
        $errorMsg = 'Image too large';
      }
    } else {
      $errorMsg = 'Please select a valid image';
    }

    if (in_array($imgExt2, $allowExt)) {
        //check image size less than 5MB
        if ($imgSize < 5000000) {
          move_uploaded_file($imgTmp2, $upload_dir2 . $titleImage);
        } else {
          $errorMsg = 'Image too large';
        }
      } else {
        $errorMsg = 'Please select a valid image';
      }

      if (in_array($imgExt3, $allowExt)) {
        //check image size less than 5MB
        if ($imgSize < 5000000) {
          move_uploaded_file($imgTmp3, $upload_dir3 . $campaignHeroImage);
        } else {
          $errorMsg = 'Image too large';
        }
      } else {
        $errorMsg = 'Please select a valid image';
      }
  }

  //check upload file not error than insert data to database
  if (!isset($errorMsg)) {

    $sqlgetmax = "SELECT MAX(sequence) from campaign";
    $resultgetmax = mysqli_query($con,$sqlgetmax);
    $row = mysqli_fetch_assoc($resultgetmax);
    $sequence = $row['MAX(sequence)'] + 1;

    $sql = "insert into campaign(headerImage, titleImage, title, campaignHeroImage, description, campaignType, sequence)
              values('" . $headerImage . "','" . $titleImage . "','" . $title . "','" . $campaignHeroImage . "','" . $description . "','" . $campaignType . "','" . $sequence . "')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $successMsg = 'New record added successfully';
      header('refresh:5;campaign.php');
    } else {
      $errorMsg = 'Error ' . mysqli_error($con);
    }
  }
}

?>

<?php include '../menu.php'; ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <!-- <div class="home-tab">

          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">


            </div>
          </div>
        </div> -->
        <div class="col-md-12 col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <?php
              if (isset($errorMsg)) {
              ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-info">
                    <strong><?php echo $errorMsg; ?></strong>
                  </span>
                </div>
              <?php
              }
              ?>

              <?php
              if (isset($successMsg)) {
              ?>
                <div class="alert alert-success">
                  <span class="glyphicon glyphicon-info">
                    <strong style="font-family:calibri ; font-size:20px;"><?php echo $successMsg; ?> - Redirecting In A Moment </strong>
                  </span>
                </div>
              <?php
              }
              ?>
              <h4 class="card-title">Add New Campaign</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Header Image</label>
                  <input type="file" name="headerImage" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="">Title Image</label>
                  <input type="file" name="titleImage" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" id="" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="">Campaign Hero Image</label>
                  <input type="file" name="campaingImage" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" class="form-control" id="" style="height: 100px;" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Campaign Type</label>
                    <select name="campaignType" class="form-control" id="">
                        <option value="enquiry" selected>Enquiry</option>
                        <option value="Instagram">Instagram</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2" name="btnSave">Submit</button>
                <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->

  <!-- partial -->
</div>
<!-- main-panel ends -->
<?php include '../footer.php'; ?>