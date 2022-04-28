<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}

$productid = $_GET['id'];

$upload_dir = 'uploadproduct/';

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $pid = $_GET['pid'];

  //select old photo name from database
  
    $sql = "delete from productimages where productImagesId=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:viewproductimages.php?id='.$pid);
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
                  <h4 class="card-title">Product Images</h4>
                </div>
                <!-- <div class="col-md-2">
                  <a class="btn btn-sm btn-success" href="addtestimonial.php">Add new</a>
                </div> -->

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="viewpimages">
                    <?php
                    $counter = 1;
                    $sql = "select * from productimages where productId=".$productid." ORDER BY sequence";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['productImagesId']; ?>">
                          <td><?php echo $counter ?></td>
                          <td><img src="<?php echo $upload_dir . $row['pImages'] ?>" style="height: 100px;"></td>
                          <td>
                            <a class="btn btn-sm btn-danger" href="viewproductimages.php?delete=<?php echo $row['productImagesId'] ?>&pid=<?php echo $productid ?>" onclick="return confirm('Are you sure to delete this record?')">
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
   $(".viewpimages").sortable({
        delay:150,
        stop:function(){
            var eng2recpselecteddata = new Array();
            $(".viewpimages>tr").each(function(){
                eng2recpselecteddata.push($(this).attr("id"));
            });
            updatereng2recp(eng2recpselecteddata);
        }
    });

    function updatereng2recp(aData){
        $.ajax({
            url:'pimagessequence.php',
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