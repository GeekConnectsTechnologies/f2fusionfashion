<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
?>

<?php include 'menu.php'; ?>
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
                  <h4 class="card-title">Add Client Testimonial</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Client Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ClientName">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Location</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Description">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
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
<?php include 'footer.php'; ?>