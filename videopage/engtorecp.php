<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$upload_dir = 'uploadengtorecp/';
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  //select old photo name from database
  $sql = "select engtorecpImage from engtorecp where id = " . $id;
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $photo = $row['engtorecpImage'];
    unlink($upload_dir . $photo);
    //delete record from database
    $sql = "delete from engtorecp where id=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:engtorecp.php');
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
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex justify-content-between">
                <div class="col-md-10">
                  <h4 class="card-title">Engagement to Reception</h4>
                </div>
                <div class="col-md-2">
                  <a class="btn btn-sm btn-success" href="addengtorecp.php">Add new</a>
                </div>

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="eng2recp">
                    <?php
                    $counter = 1;
                    $sql = "select * from engtorecp order by sequence ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['id']; ?>">
                          <td><?php echo $row['sequence'] ?></td>
                          <td><?php echo $row['engtorecpTitle'] ?></td>
                          <td><?php echo $row['engtorecpDesc'] ?></td>
                          <td><img class="img-fluid" style="width: 40%;" src="<?php echo $upload_dir . $row['engtorecpImage'] ?>"></td>
                          <td>
                            <a class="btn btn-sm btn-primary" href="editengtorecp.php?id=<?php echo $row['id'] ?>">
                              Edit
                            </a>
                            <a class="btn btn-sm btn-danger" href="engtorecp.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
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

<script>
   $(".eng2recp").sortable({
        delay:150,
        stop:function(){
            var eng2recpselecteddata = new Array();
            $(".eng2recp>tr").each(function(){
                eng2recpselecteddata.push($(this).attr("id"));
            });
            updatereng2recp(eng2recpselecteddata);
        }
    });

    function updatereng2recp(aData){
        $.ajax({
            url:'eng2recpsequence.php',
            type: 'POST',
            data: {
                allData : aData
            },
            success: function(){
                console.log("Done")
            },
            error: function() {
                alert("There was an error.");
            }
        });
    }
</script>