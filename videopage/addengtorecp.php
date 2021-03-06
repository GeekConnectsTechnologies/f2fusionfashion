<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$upload_dir = 'uploadengtorecp/';

if (isset($_POST['btnSave'])) {

  // Compress image
  function compressImage($source, $destination, $quality)
  {

      $info = getimagesize($source);

      if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($source);

      elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($source);

      elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($source);

      imagejpeg($image, $destination, $quality);
  }

  $engtorecpTitle = $_POST['engtorecpTitle'];
  $engtorecpDesc = $_POST['engtorecpDesc'];

  $imgName = $_FILES['myfile']['name'];
  $imgTmp = $_FILES['myfile']['tmp_name'];
  $imgSize = $_FILES['myfile']['size'];

  if (empty($engtorecpTitle)) {
    $errorMsg = 'Please Enter Title';
  } elseif (empty($imgName)) {
    $errorMsg = 'Please select photo';
  } else {
    //get image extension
    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    //allow extenstion
    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
    //random new name for photo
    $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;
    //check a valid image
    if (in_array($imgExt, $allowExt)) {
      //check image size less than 5MB
      if ($imgSize < 5000000) {
        // move_uploaded_file($imgTmp, $upload_dir . $userPic);
        compressImage($imgTmp, $upload_dir . $userPic, 60);
      } else {
        $errorMsg = 'Image too large';
      }
    } else {
      $errorMsg = 'Please select a valid image';
    }
  }

  //check upload file not error than insert data to database
  if (!isset($errorMsg)) {

    $sqlgetmax = "SELECT MAX(sequence) from engtorecp";
    $resultgetmax = mysqli_query($con,$sqlgetmax);
    $row = mysqli_fetch_assoc($resultgetmax);
    $sequence = $row['MAX(sequence)'] + 1;

    $sql = "insert into engtorecp(engtorecpImage, engtorecpTitle, engtorecpDesc, sequence)
              values('" . $userPic . "','" . $engtorecpTitle . "','" . $engtorecpDesc . "','" . $sequence . "')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $successMsg = 'New record added successfully';
      header('refresh:5;engtorecp.php');
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
              <h4 class="card-title">Add Engagement to Reception</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Photo ( 300 x 450 )</label>
                  <input type="file" name="myfile" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="engtorecpTitle" class="form-control" id="" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="engtorecpDesc" class="form-control" id="" placeholder="Description">
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