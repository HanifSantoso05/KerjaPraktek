<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Yield Data Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="IMR_ARC_STEEL3.png" type="image/png">
	  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div id="wrapper" class="wrapper-content">
      <?php
        include "sidebar.php"
    ?>
      <div id="page-content-wrapper">
            <nav class="navbar navbar-default">
                  <div class="container">
                        <div class="navbar-header">
                              <button class="btn-menu btn btn-toggle-menu" type="button"
                                    style="background :#466d69; color:#E9E8E8;"><i class='fas fa-bars'></i>
                              </button>
                        </div>
                  </div>
            </nav>
            <div class="container">
                                    <!-- Profile widget -->
                                    <div class="bg-white shadow rounded overflow-hidden">
                                      <div class="px-4" style="border-radius:0.25rem; margin-top 5px; background-color: #466d69;">
                                          <div class="media align-items-end profile-header">
                                              <br>
                                              <form method="POST" action="proses-logo.php" enctype="multipart/form-data">
                                                <div class="profile mt-3 mr-3">
                                                    <label for="logo"><img src="favicon.png" alt="logo" class="img-cover-profile rounded mb-2 img-thumbnail" width="180px" height="180px"></label>
                                                </div>
                                              </form>
                                              <div class="media-body mt-3 mb-5 text-white">
                                                  <h4 class="mt-0 mb-0">PT IMR ARC STEEL</h4>
                                                  <p class="small mb-4">Administrator</p>
                                                  <br>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="py-4 px-4">
                                        <div class="tab-content py-3">
                                          <div id="PageProfile" class="tab-pane active">
                                            <form method="post">
                                              <div class="row">
                                                  <div class="col-sm-6 col-md-6 mb-2">
                                                      <label for="namatoko">Company Name :</label>
                                                      <input name="nama_toko" type="text" class="form-control" value="IMR ARC STEEL" id="namatoko" placeholder="nama toko" readonly required>
                                                  </div>
                                                  <div class="col-sm-6 col-md-6 mb-2">
                                                      <label for="username">Email :</label>
                                                      <input name="email" type="text" class="form-control" value="info@arcsteelasia.com" id="username" placeholder="email" readonly required>
                                                  </div>
                                                  <div class="col-sm-6 col-md-6 mb-2">
                                                      <label for="telepon">Telepon :</label>
                                                      <input name="telepon" type="text" class="form-control" value="+62321-6820101" id="telepon" placeholder="0821xxx" readonly required>
                                                  </div>
                                                  <div class="col-sm-6 col-md-6 mb-2">
                                                      <label for="alamat">Alamat :</label>
                                                      <input name="alamat" type="text" class="form-control" id="alamat" value="Ds. Randuharjo - Pungging, Mojokerto, 61384, Jawa Timur" readonly required>
                                                  </div>

                                                  <div class="col-sm-6 col-md-6 col-lg-6"></div>
                                                  </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>`
                                    </div><!-- End profile widget -->
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
</body>
</html>
