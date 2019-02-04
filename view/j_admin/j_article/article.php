<!DOCTYPE html>
<html lang="en">
<body>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
                  <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <h2>Our Article</h2>
                <a class="btn ml-auto "></a>
                <a href="dashboard.php?page=addArticle"><button type="button" class="btn btn-success btn-rounded btn-fw">Add New    +</button></a>
              </span>
            </div>
          </div>
          <?php
                  require("config/lib.php");
                  $Lib = new Library();
                  $show = $Lib->showArt();
                    while($data = $show->fetch(PDO::FETCH_OBJ))
                    {
                        echo'
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-8" src="j_article/article-picture/'.$data->picture.'">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <h3>'.$data->article.'</h3>
                        </div>
                        <p class="text-gray ellipsis mb-2">'.$data->description.'</p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted"></small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"></small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted"></small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"></small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Article</a><br>
                            <a class="dropdown-item" href="#">Update Article</a><br>
                            <a class="dropdown-item" href="#">Delete Article</a><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 ';
                            }
                        ?>        </div>
      </div>
    </div>
  </div>
</body>
</html>