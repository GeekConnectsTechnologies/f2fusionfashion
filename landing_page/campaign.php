<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
// $upload_dir = 'uploadengtorecp/';
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
    //delete record from database
    $sql = "delete from campaign where campaignId=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:campaign.php');
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
                  <h4 class="card-title">Campaign</h4>
                </div>
                <div class="col-md-2">
                  <a class="btn btn-sm btn-success" href="addcampaign.php">Add new</a>
                </div>

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Campaign Title</th>
                      <th>Type</th>
                      <th>Action</th>   
                    </tr>
                  </thead>
                  <tbody class="campaignseq">
                    <?php
                    $counter = 1;
                    $sql = "select * from campaign order by sequence";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['campaignId']; ?>">
                          <td><?php echo $counter ?></td>
                          <td><?php echo $row['title'] ?></td>
                          <td><?php echo $row['campaignType'];?></td>
                          <td>
                          <a class="btn btn-sm btn-warning" href="viewcampaign.php?id=<?php echo $row['campaignId'] ?>">
                              View
                            </a>  
                            <a class="btn btn-sm btn-primary" href="editcampaign.php?id=<?php echo $row['campaignId'] ?>">
                              Edit
                            </a>
                            <a class="btn btn-sm btn-danger" href="campaign.php?delete=<?php echo $row['campaignId'] ?>" onclick="return confirm('Are you sure to delete this record?')">
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
   $(".campaignseq").sortable({
        delay:150,
        stop:function(){
            var eng2recpselecteddata = new Array();
            $(".campaignseq>tr").each(function(){
                eng2recpselecteddata.push($(this).attr("id"));
            });
            updatereng2recp(eng2recpselecteddata);
        }
    });

    function updatereng2recp(aData){
        $.ajax({
            url:'campaignsequence.php',
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