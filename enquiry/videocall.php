<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
  
    //select old photo name from database
  
    //delete record from database
    $sql = "delete from videocallformdetails where id=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:videocall.php');
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
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex justify-content-between">
                <div class="col-md-10">
                  <h4 class="card-title">Video Call Submission</h4>
                </div>
                <div class="col-md-2">
                  <!-- <a class="btn btn-sm btn-success" href="addlandingimage.php">Add new</a> -->
                </div>

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Country</th>
                      <th>Phone Number</th>
                      <th>Mode</th>
                      <th>Mode Detail</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Requirements</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="campaignseq">
                    <?php
                    $counter = 1;
                    $sql = "select * from videocallformdetails";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['id']; ?>">
                          <td><?php echo $counter; ?></td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['country'] ?></td>
                          <td><?php echo $row['mobilenumber'] ?></td>
                          <td><?php echo $row['mode'] ?></td>
                          <td><?php echo $row['wpnumber'] ?></td>
                          <td><?php echo $row['appointmentdate'] ?></td>
                          <td><?php echo $row['appointmenttime'] ?></td>
                          <td><?php echo $row['requirements'] ?></td>
                          <td>
                            
                            <a class="btn btn-sm btn-danger" href="videocall.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                              Delete
                            </a>
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