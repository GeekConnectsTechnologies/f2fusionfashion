<?php
include('../login/session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: ../login/index.php");
}
$campaignid = $_GET['campaignid'];
$upload_dir = 'uploadlandingproduct/';

if(isset($_POST['btnSave'])){ 
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $upload_dir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', '".$campaignid."'),";  
                    
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            
            $insert = $con->query("INSERT INTO landingpageproduct (lppPhoto, campaignId) VALUES $insertValuesSQL"); 
            if($insert){ 
                $successMsg = "Files are uploaded successfully.".$errorMsg; 
                header('refresh:5;viewlandingproduct.php?id='.$campaignid);
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
}


?>

<?php include '../menu.php'; ?>
<style>
#images{
    width: 100%;
    /* position: relative; */
    margin: auto;
    display: flex;
    /* justify-content: space-evenly; */
    gap: 20px;
    flex-wrap: wrap;
}
figure{
    width: 8%;
}
img{
    width: 100%;
}
figcaption{
    text-align: center;
    font-size: 1.5vmin;
    margin-top: 0.5vmin;
}

</style>
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
              <?php
              if (isset($errorMsg)) {
              ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-info">
                    <strong><?php echo $statusMsg; ?></strong>
                  </span>
                </div>
              <?php
              }
              ?>

              <?php
              if (isset($successMsg)) {
              ?>
                <div class="alert alert-success">
                  <span class="glyphicon glyphicon-info">
                    <strong style="font-family:calibri ; font-size:20px;"><?php echo $successMsg; ?> - Redirecting In A Moment </strong>
                  </span>
                </div>
              <?php
              }
              ?>
              <h4 class="card-title">Add New Landing Page Products</h4>

              <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Header Image ( 300 x 300 )</label>&nbsp;
                  <a href="#" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="right" title="The small Images of the campaign products on the landing page"><i class='bx bx-info-circle bx-sm'></i></a>
                  <input type="file" id="file-input" name="files[]" onchange="preview()" multiple class="form-control">
                  <br>
                  <div id="images"></div>
                </div>
                
                <button type="submit" class="btn btn-primary me-2" name="btnSave">Submit</button>
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

<script>
  let fileInput = document.getElementById("file-input");
  let imageContainer = document.getElementById("images");
  // let numOfFiles = document.getElementById("num-of-files");

  function preview() {
    imageContainer.innerHTML = "";
    // numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for (i of fileInput.files) {
      let reader = new FileReader();
      let figure = document.createElement("figure");
      let figCap = document.createElement("figcaption");
      figCap.innerText = i.name;
      figure.appendChild(figCap);
      reader.onload = () => {
        let img = document.createElement("img");
        img.setAttribute("src", reader.result);
        figure.insertBefore(img, figCap);
      }
      imageContainer.appendChild(figure);
      reader.readAsDataURL(i);
    }
  }
</script>

<!-- main-panel ends -->
<?php include '../footer.php'; ?>