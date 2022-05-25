<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}

$campaignid = $_GET['id'];

$upload_dir = 'uploadlandingproduct/';
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  //select old photo name from database

  //delete record from database
  $sql = "delete from productig where productIGId=" . $id;
  if (mysqli_query($con, $sql)) {
    header('location:viewlandingproduct.php');
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
                  <!-- <h4 class="card-title">Instagram Posts</h4> -->
                  <div class="card-title">
                    <?php
                    $csql = "select * from campaign where campaignId=" . $campaignid;
                    $cresult = mysqli_query($con, $csql);
                    $crow = mysqli_fetch_assoc($cresult);
                    ?>
                    <span><a class="btn btn-sm btn-success" href="viewcampaign.php?id=<?php echo $crow['campaignId'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="fill: rgba(255, 255, 255, 1);"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg> back</a></span> &nbsp; &nbsp; &nbsp;
                    <span style="font-size: 35px;"><?php echo $crow['title']; ?></span> <span style="font-size: 15px;">&nbsp; Instagram Posts</span>
                    <!-- <h2></h2> <h4> Landing Page Products</h4> -->
                  </div>
                </div>
                <div class="col-md-2">
                  <a class="btn btn-sm btn-success" href="addinstagrampost.php?campaignid=<?php echo $campaignid; ?>">Add new</a>
                </div>

              </div>


              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr. No</th>

                      <th>Instagram Posts</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="igproduct">
                    <?php
                    $counter = 1;
                    $sql = "select * from productig where campaignId='" . $campaignid . "' ORDER BY sequence ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['productIGId']; ?>">
                          <td><?php echo $counter ?></td>

                          <td>
                            <div style="width: 5%;"><?php echo $row['pIGEmbedded'] ?></div>
                          </td>
                          <td>

                            <a class="btn btn-sm btn-danger" href="viewinstagrampost.php?delete=<?php echo $row['productIGId'] ?>" onclick="return confirm('Are you sure to delete this record?')">
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
  $(".igproduct").sortable({
    delay: 150,
    stop: function() {
      var eng2recpselecteddata = new Array();
      $(".igproduct>tr").each(function() {
        eng2recpselecteddata.push($(this).attr("id"));
      });
      updatereng2recp(eng2recpselecteddata);
    }
  });

  function updatereng2recp(aData) {
    $.ajax({
      url: 'igproductsequence.php',
      type: 'POST',
      data: {
        allData: aData
      },
      success: function() {
        console.log("Done")
      },
      error: function() {
        alert("There was an error.");
      }
    });
  }
</script>