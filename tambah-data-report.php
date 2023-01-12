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
                  <div class="row">
                        <div class="col-lg-12">
                              <div class="container">
                                    <br>
                                    <div class="container" style="margin-top: 2rem; margin-bottom: 1rem;">
                                          <div class="row justify-content-center">
                                                <div class="col-7">
                                                      <div class="card mt-4">
                                                            <div class="card-body">
                                                                  <form class="form" method="POST" action="">
                                                                        <h1 class="card-title">Tambah Data</h1>
                                                                        <div class="form-group">
                                                                              <label>Lot :</label>
                                                                              <input type="number" class="form-control"
                                                                                    name="Lot" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Coil Number :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Coil_Number" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Mother Coil :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Mother_Coil" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Grade :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Grade" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Finish :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Finish" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Thickness :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Thickness" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Width :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Width" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Material Processed :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Material_Processed"
                                                                                    required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>PRIME (SLT) :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="PRIME_SLT" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>KW2 :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="KW2" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Baby Coil :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="BabyCoil" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Scrap :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Scrap" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>SS :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="SS" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Weighing Balance :</label>
                                                                              <input type="text" class="form-control"
                                                                                    name="Weighing_Balance" required />
                                                                        </div>
                                                                        <div class="form-group">
                                                                              <label>Tanggal :</label>
                                                                              <input type="datetime-local"
                                                                                    class="form-control" name="tanggal"
                                                                                    required />
                                                                        </div>
                                                                        <br>
                                                                        <div>
                                                                              <input type="submit"
                                                                                    class="btn btn-success"
                                                                                    name="submit" value="Submit" />
                                                                        </div>
                                                                  </form>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <?php
                                include 'koneksi.php';
                                if(isset($_POST['submit'])){
                                    $Lot		        = $_POST['Lot'];
                                    $Coil_Number        = $_POST['Coil_Number'];
                                    $Mother_Coil        = $_POST['Mother_Coil'];
                                    $Grade              = $_POST['Grade'];
                                    $Finish		  = $_POST['Finish'];
                                    $Thickness		  = $_POST['Thickness'];
                                    $Width		  = $_POST['Width'];
                                    $Material_Processed = $_POST['Material_Processed'];
                                    $PRIME_SLT          = $_POST['PRIME_SLT'];
                                    $KW2		        = $_POST['KW2'];
                                    $BabyCoil		  = $_POST['BabyCoil'];
                                    $Scrap		  = $_POST['Scrap'];
                                    $SS		        = $_POST['SS'];
                                    $Weighing_Balance	  = $_POST['Weighing_Balance'];
                                    $tanggal		  = $_POST['tanggal'];


                                    $cek = mysqli_query($koneksi, "SELECT * FROM book2 WHERE Seq='$Seq'") or die(mysqli_error($koneksi));

                                    if(mysqli_num_rows($cek) == 0){
                                        $sql = mysqli_query($koneksi, "INSERT INTO book2 (Seq,Lot,Coil_Number,Mother_Coil,Grade,Finish,Thickness,Width,Material_Processed,PRIME_SLT,KW2,BabyCoil,Scrap,SS,Weighing_Balance,tanggal) VALUES('','$Lot', '$Coil_Number', '$Mother_Coil','$Grade', '$Finish','$Thickness','$Width','$Material_Processed','$PRIME_SLT','$KW2','$BabyCoil','$Scrap','$SS','$Weighing_Balance','$tanggal')") or die(mysqli_error($koneksi));
                                        if($sql){
                                            echo '<script>alert("Berhasil menambahkan data."); document.location="data-report.php";</script>';
                                        }else{
                                            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                                        }
                                    }else{
                                        echo '<div class="alert alert-warning">Gagal, ID menu sudah terdaftar.</div>';
                                    }
                                }
                            ?>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
</body>
</html>
