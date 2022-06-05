<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
// $upload_dir = 'uploadengtorecp/';
$campaignid = $_GET['campaignid'];
if (isset($_POST['btnSave'])) {

  $igpost = $_POST['igpost'];

  if (empty($igpost)) {
    $errorMsg = 'Please Enter Embedded';
  }

  //check upload file not error than insert data to database
  if (!isset($errorMsg)) {

    $sqlgetmax = "SELECT MAX(sequence) from productig";
    $resultgetmax = mysqli_query($con,$sqlgetmax);
    $row = mysqli_fetch_assoc($resultgetmax);
    $sequence = $row['MAX(sequence)'] + 1;

    $sql = "insert into productig(pIGEmbedded, campaignId, sequence)
              values('" . $igpost . "','" . $campaignid . "','" . $sequence . "')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $successMsg = 'New record added successfully';
      header('refresh:5;viewinstagrampost.php?id='.$campaignid);
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
              <h4 class="card-title">Add Instagram Post</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Embed Post</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="Add Instagram Post Embedd Link from Instagram without Caption for better look"><i class='bx bx-info-circle bx-sm'></i></a>
                  <input type="text" name="igpost" class="form-control" id="" placeholder="Enter Embedded Code">
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