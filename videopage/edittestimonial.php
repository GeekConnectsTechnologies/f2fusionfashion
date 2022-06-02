<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$upload_dir = 'uploadclienttestimonial/';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from client where id=".$id;
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        $errorMsg = 'Could not select a record';
    }
}

if (isset($_POST['btnEdit'])) {

  $clientname = $_POST['clientname'];
  $location = $_POST['location'];
  $testimonial = $_POST['testimonial'];

  $imgName = $_FILES['myfile']['name'];
  $imgTmp = $_FILES['myfile']['tmp_name'];
  $imgSize = $_FILES['myfile']['size'];

  if (empty($clientname)) {
    $errorMsg = 'Please Enter Name';
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
        move_uploaded_file($imgTmp, $upload_dir . $userPic);
      } else {
        $errorMsg = 'Image too large';
      }
    } else {
      $errorMsg = 'Please select a valid image';
    }
  }

  //check upload file not error than insert data to database
  if (!isset($errorMsg)) {
    $sql = "update client
									set clientName = '".$clientname."',
                                        testimonial = '".$testimonial."',
                                        location = '".$location."',
										clientImage = '".$userPic."'
					where id=".$id;
    $result = mysqli_query($con, $sql);
    if ($result) {
      $successMsg = 'Record Updated successfully';
      header('refresh:5;clienttestimonial.php');
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
              <h4 class="card-title">Edit Client Testimonial</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Testimonial Photo ( 300 x 450 )</label>
                  <input type="file" name="myfile" class="form-control" id="">
                </div>
                <div class="form-group">
                  <label for="">Client Name</label>
                  <input type="text" name="clientname" class="form-control" id="" placeholder="ClientName" value="<?php echo $row['clientName'];?>">
                </div>
                <div class="form-group">
                  <label for="">Location</label>
                  <input type="text" name="location" class="form-control" id="" placeholder="Location" value="<?php echo $row['location'];?>">
                </div>
                <div class="form-group">
                  <label for="">Testimonial</label>
                  <input type="text" name="testimonial" class="form-control" id="" placeholder="Description" value="<?php echo $row['testimonial'];?>">
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