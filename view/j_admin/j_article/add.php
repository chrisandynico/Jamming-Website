<?php
    require("config/lib.php");
    
    if(isset($_POST['addArt']))
    {
        $article = $_POST['article'];
        $description = $_POST['description'];
 
        //file
        $picture = $_FILES['picture']['name']; //ambil image
        $type = $_FILES['picture']['type']; //jenis image
        $size = $_FILES['picture']['size']; //ukuran image   
        $temp = $_FILES['picture']['tmp_name']; //nama file yang disimpan
        $path= "j_article/article-picture/".$picture;    //folder upload
        
        
    if(move_uploaded_file($temp,$path));
        {
            $Lib = new Library();
            $add = $Lib->addArt('',$article, $description, $picture);
        if($add == "Success")
        {
            echo "<script>window.alert('Data has been successfully saved !');location = 'dashboard.php?page=article'</script> ";
        }
        else
        {
            echo "<script>window.alert('Data has not been successfully saved !');location = 'dashboard.php?page=add'</script> ";
        }
    }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><h3>New Article</h3></h4>
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1"><h4>Title</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="article" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1"><h4>Description</h4></label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                      <label><h4>Picture</h4></label><br>
                      <input type="file" name="picture" required>
                      <div class="input-group col-xs-12">
                      </div>
                    </div>
                    <button type="submit" name="addArt" class="btn btn-success mr-2">Submit</button>
                    <a href="dashboard.php?page=article"><button class="btn btn-light" type="button">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>