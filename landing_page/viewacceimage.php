<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}

$upload_dir = 'uploadacceimage/';
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
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex justify-content-between">
                <div class="col-md-10">
                  <h4 class="card-title">Accessories Image</h4>
                </div>
                <div class="col-md-2">
                  <!-- <a class="btn btn-sm btn-success" href="addlandingimage.php">Add new</a> -->
                </div>

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="campaignseq">
                    <?php
                    $counter = 1;
                    $sql = "select * from landingacceimage ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['id']; ?>">
                          
                          <td><img src="<?php echo $upload_dir . $row['photo'] ?>" style="height: 100px;"></td>
                          <td>
                            <a class="btn btn-sm btn-primary" href="editacceimage.php?id=<?php echo $row['id'] ?>">
                              Edit
                            </a>
                            <!-- <a class="btn btn-sm btn-danger" href="index.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                              Delete
                            </a> -->
                          </td>
                        </tr>
                    <?php $counter++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
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