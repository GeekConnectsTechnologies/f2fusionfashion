<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}

$campaignid = $_GET['id'];

$upload_dir = 'uploadlandingproduct/';
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $plid = $_GET['plid'];

  //select old photo name from database
  $sql = "select lppPhoto from landingpageproduct where lpProductId = " . $id;
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $photo = $row['clientImage'];
    unlink($upload_dir . $photo);
    //delete record from database
    $sql = "delete from landingpageproduct where lpProductId=" . $id;
    if (mysqli_query($con, $sql)) {
      header('location:viewlandingproduct.php?id='.$plid);
    }
  }
}


if (isset($_GET['deleteall'])) {
  $id = $_GET['deleteall'];
  $cid = $_GET['cid'];

  //select old photo name from database

  $sql = "delete from landingpageproduct where campaignId=" . $id;
  $sqldelete = "delete from productimages where productId=" . $id;
  

  if (mysqli_query($con, $sql)) {

      header('refresh:1;viewlandingproduct.php?id=' . $cid);
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
                  <div class="card-title">
                    <?php
                      $csql = "select * from campaign where campaignId=" . $campaignid;
                      $cresult = mysqli_query($con, $csql);
                      $crow = mysqli_fetch_assoc($cresult);                      
                    ?>
                    <span><a class="btn btn-sm btn-success" href="viewcampaign.php?id=<?php echo $crow['campaignId'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="fill: rgba(255, 255, 255, 1);"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg> back</a></span> &nbsp; &nbsp; &nbsp;
                    <span style="font-size: 35px;"><?php echo $crow['title']; ?></span>
                    <span style="font-size: 15px;">&nbsp; Landing Page Products</span>
                    <!-- <h2></h2> <h4> Landing Page Products</h4> -->
                  </div>
                </div>
                <div class="col-md-2">
                  <a class="btn btn-sm btn-success" href="addlandingproducts.php?campaignid=<?php echo $campaignid; ?>">Add new</a>
                  <a class="btn btn-sm btn-danger" href="viewlandingproduct.php?deleteall=<?php echo $campaignid; ?>&cid=<?php echo $campaignid ?>" onclick="return confirm('Are you sure to delete this record?')">Delete All</a>
                                
                </div>

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
                  <tbody class="lpproduct">
                    <?php
                    $counter = 1;
                    $sql = "select * from landingpageproduct where campaignId='".$campaignid."' ORDER BY sequence ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)) {
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr id="<?php echo $row['lpProductId']; ?>">
                          <td><?php echo $counter ?></td>
                          
                          <td><img src="<?php echo $upload_dir . $row['lppPhoto'] ?>" style="height: 100px;"></td>
                          <td>
                            
                            <a class="btn btn-sm btn-danger" href="viewlandingproduct.php?delete=<?php echo $row['lpProductId'] ?>&plid=<?php echo $campaignid ?>" onclick="return confirm('Are you sure to delete this record?')">
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
   $(".lpproduct").sortable({
        delay:150,
        stop:function(){
            var eng2recpselecteddata = new Array();
            $(".lpproduct>tr").each(function(){
                eng2recpselecteddata.push($(this).attr("id"));
            });
            updatereng2recp(eng2recpselecteddata);
        }
    });

    function updatereng2recp(aData){
        $.ajax({
            url:'lpproductsequence.php',
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