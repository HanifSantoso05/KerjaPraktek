<div id="wrapper" class="wrapper-content">
    <?php
        include "sidebar1.php"
    ?>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button class="btn-menu btn btn-toggle-menu" type="button" style="background :#138D75; color:#E9E8E8;"><i class='fas fa-bars'></i>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <h1 class="text-center font-weight-bold" style = "color: #565757;">Quality Yeild Report</h1>
                        <br>
                        <form class="row g-4" method="GET">
                            <div class="col-auto">
                                <input type="text" class="form-control" name="cari"  placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <select class="form-control " name="bulan">
                                    <option value="">Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="12">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-control" name="tahun">
                                    <option value="">Tahun</option>
                                    <?php
                                    $mulai= date('Y') - 10;
                                    for($i = $mulai;$i<$mulai + 20;$i++){
                                        #$sel = $i == date('Y') ? ' selected="selected"' : '';
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-auto">
                                <input class="form-control btn btn-primary" type="submit" value="Cari">
                            </div>
                            <div class="col-auto">
                                <a href="data-report.php"><button class="form-control btn btn-secondary">Reset</button></a>
                            </div>
                        </form>
                        <br>

                        <div class="row g-4">
                            <div class="col-auto">
                                <a href="tambah-data-report.php"><button class="btn btn-success text-white ">Tambah</button></a>
                            <div>
                            <div class="col-auto">
                                <a href="data-report-perbulan.php"><button class="btn btn-primary text-white ">Lihat Data Perbulan</button></a>
                            <div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




