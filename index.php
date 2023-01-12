<div id="wrapper" class="wrapper-content">
      <?php
        include "sidebar.php"
    ?>
      <div id="page-content-wrapper">
            <nav class="navbar navbar-default">
                  <div class="container">
                        <div class="navbar-header">
                              <button class="btn-menu btn btn-toggle-menu" type="button"
                                    style="background :#138D75; color:#E9E8E8;"><i class='fas fa-bars'></i>
                              </button>
                        </div>
                  </div>
            </nav>
            <div class="container">
                                    <!-- Profile widget -->
                                    <div class="bg-white shadow rounded overflow-hidden">
                                      <div class="px-4" style="border-radius:0.25rem; margin-top 5px; background-color: #138D75;">
                                          <div class="media align-items-end profile-header">
                                              <br>
                                              <form method="POST" action="proses-logo.php" enctype="multipart/form-data">
                                                <div class="profile mt-3 mr-3">
                                                    <label for="logo"><img src="IMR_ARC_STEEL.png" alt="logo" class="img-cover-profile rounded mb-2 img-thumbnail" width="180px" height="180px"></label>
                                                </div>
                                              </form>
                                              <div class="media-body mb-5 text-white">
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