<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
  
    //select old photo name from database
  
    //delete record from database
    $sql = "delete from formDetails where fdid=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:landingpage.php');
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
                  <h4 class="card-title">Enquiry Submission</h4>
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
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Source</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="campaignseq">
                    <?php
                    $counter = 1;
                    $sql = "select * from formDetails ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['fdid']; ?>">
                          <td><?php echo $counter; ?></td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['phone'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['message'] ?></td>
                          <td><?php echo $row['datetime'] ?></td>
                          <td><?php echo $row['source'] ?></td>
                          <td>
                            
                            <a class="btn btn-sm btn-danger" href="landingpage.php?delete=<?php echo $row['fdid'] ?>" onclick="return confirm('Are you sure to delete this record?')">
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