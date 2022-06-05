<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$upload_dir = 'uploadheaderImage/';

$upload_dir2 = 'uploadtitleImage/';

$upload_dir3 = 'uploadcampaignImage/';

$existingtitle = '';
$existingheader = '';
$existingcampaign = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from campaign where campaignId=" . $id;
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $existingcampaign = $row['campaignHeroImage'];
    $existingtitle = $row['titleImage'];
    $existingheader = $row['headerImage'];
    
  } else {
    $errorMsg = 'Could not select a record';
  }
}

if (isset($_POST['btnEdit'])) {

  $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
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


  if (empty($imgName)) {
    $headerImage = $existingheader;
  }
  if (empty($imgName2)) {
    $titleImage = $existingtitle;
  }
  if (empty($imgName3)) {
    $campaignHeroImage = $existingcampaign;
  }

  if (empty($title)) {
    $errorMsg = 'Please Enter Title';
  } else {

    if(!empty($imgName))
    {
      $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
      $headerImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

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
    }

    if(!empty($imgName2))
    {
      $imgExt2 = strtolower(pathinfo($imgName2, PATHINFO_EXTENSION));
      $titleImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt2;

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
    }

    if(!empty($imgName3))
    {
      $imgExt3 = strtolower(pathinfo($imgName3, PATHINFO_EXTENSION));
      $campaignHeroImage = time() . '_' . rand(1000, 9999) . '.' . $imgExt3;

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
    //get image extension
    
    //allow extenstion
    
    //random new name for photo

    //check a valid image
    
  }


  //check upload file not error than insert data to database
  if (!isset($errorMsg)) {
    $sql = "update campaign
									set headerImage = '" . $headerImage . "',
                                    titleImage = '" . $titleImage . "',
                                    title = '" . $title . "',
                                    campaignHeroImage = '" . $campaignHeroImage . "',
                                    description = '" . $description . "',
                                    campaignType = '" . $campaignType . "'
					where campaignId=" . $id;
    
    $result = mysqli_query($con, $sql);
    if ($result) {
      $successMsg = 'Record Updated successfully';
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
              <h4 class="card-title">Edit Campaign</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Header Image ( 650 x 950 )</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="Main Image of the campaign on the Landing Page"><i class='bx bx-info-circle bx-sm'></i></a>
                  <input type="file" name="headerImage" class="form-control" id="" value="<?php echo $row['headerImage']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Title Image ( 1920 x 160 )</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="Background of the Campaign Title on Landing Page "><i class='bx bx-info-circle bx-sm'></i></a>
                  <input type="file" name="titleImage" class="form-control" id="" value="<?php echo $row['titleImage']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" id="" placeholder="Title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Campaign Hero Image ( 1920 x 1080 )</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="Header Image of the Campaign Inner Page"><i class='bx bx-info-circle bx-sm'></i></a>
                  <input type="file" name="campaingImage" class="form-control" id="" value="<?php echo $row['campaignHeroImage']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" class="form-control" id="" style="height: 100px;" placeholder="Description"><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="">Campaign Type</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="Type of the Campaign inner page content (i.e. Display Products or Instagram Posts)"><i class='bx bx-info-circle bx-sm'></i></a>
                  <select name="campaignType" class="form-control" id="">
                    <option value="Enquiry" selected>Enquiry</option>
                    <option value="Instagram">Instagram</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary me-2" name="btnEdit">Update</button>
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