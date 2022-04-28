<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: ../login/index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('refresh:1;campaign.php');
}

$sql = "select * from campaign where campaignId=" . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$sqlcount = "select count(lpProductId) as count from landingpageproduct where campaignId=".$id;
$resultcount = mysqli_query($con, $sqlcount);
$rowcount = mysqli_fetch_assoc($resultcount);

$sqlcount2 = "select count(productIGId) as count from productig where campaignId=".$id;
$resultcount2 = mysqli_query($con, $sqlcount2);
$rowcount2 = mysqli_fetch_assoc($resultcount2);

$sqlcount3 = "select count(productId) as count from product where campaignId=".$id;
$resultcount3 = mysqli_query($con, $sqlcount3);
$rowcount3 = mysqli_fetch_assoc($resultcount3);
?>

<?php include '../menu.php'; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $row['title']; ?></h2>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 mb-5">
                                    <p>Title Background Image</p>
                                    <img src="uploadtitleImage/<?php echo $row['titleImage']; ?>" width="100%" alt="">
                                </div>
                                <div class="col-md-4 mb-5">
                                    <p>Header Image</p>
                                    <img src="uploadheaderImage/<?php echo $row['headerImage']; ?>" width="50%" alt="">
                                </div>
                                <div class="col-md-8 mb-5">
                                    <p>Campaign Hero Image</p>
                                    <img src="uploadcampaignImage/<?php echo $row['campaignHeroImage']; ?>" width="50%" alt="">
                                </div>


                            </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Campaign Type</th>
                                        <th>Number of Products in Landing Page</th>
                                        <th>Number of Products in Campaign Page</th>
                                        <th>Number of Instagram Posts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['campaignType']; ?></td>
                                        <td><span class="mr-5"><?php echo $rowcount['count']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-sm btn-warning" href="viewlandingproduct.php?id=<?php echo $row['campaignId'] ?>">
                                                View
                                            </a>
                                        </td>
                                        <td>
                                            <span class="mr-5"><?php echo $rowcount3['count']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-sm btn-warning" href="viewproduct.php?id=<?php echo $row['campaignId'] ?>">
                                                View
                                            </a>

                                        </td>
                                        <td>
                                            <span class="mr-5"><?php echo $rowcount2['count']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-sm btn-warning" href="viewinstagrampost.php?id=<?php echo $row['campaignId'] ?>">
                                                View
                                            </a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
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