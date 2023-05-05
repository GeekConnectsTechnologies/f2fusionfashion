<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
  
    //select old photo name from database
  
    //delete record from database
    $sql = "delete from formdetails where fdid=" . $id;
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
              <?php
                  $per_page = 10; // Number of records to show per page
                  $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Current page number
                  $start = ($page - 1) * $per_page; // Starting record index

                  $sql = "SELECT COUNT(*) AS total FROM formdetails"; // Get total number of records
                  $result = mysqli_query($con, $sql);
                  $total_records = mysqli_fetch_assoc($result)['total'];

                  $sql = "SELECT * FROM formdetails ORDER BY datetime DESC LIMIT $start, $per_page"; // Fetch records for the current page
                  $result = mysqli_query($con, $sql);
                  ?>

                  <table  class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date/Time</th>
                        <th>Source</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="campaignseq">
                      <?php if (mysqli_num_rows($result)): ?>
                        <?php $counter = $start + 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                          <tr id="<?php echo $row['fdid']; ?>">
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                            <td><?php echo  date('d-M-Y H:i:s', strtotime($row['datetime'])) ?></td>
                            <td><?php echo $row['source'] ?></td>
                            <td>
                              <a class="btn btn-sm btn-danger" href="landingpage.php?delete=<?php echo $row['fdid'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                                Delete
                              </a>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="8">No records found.</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>

                  <?php
                  // Add pagination links
                  $total_pages = ceil($total_records / $per_page); // Total number of pages
                  if ($total_pages > 1):
                  ?>
                    <nav class="d-flex justify-content-end">
                      <ul class="pagination mt-5">
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
                  <?php endif; ?>

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