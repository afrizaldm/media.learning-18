<?php 
include '../config/connection.php';
$guru   = $_SESSION['userid'];
$query  = "SELECT id_materi FROM media";
$hasil  = mysqli_query($con, $query);
$data   = mysqli_fetch_array($hasil);
$jumlah_data = mysqli_num_rows($hasil);


if ($data) {
    $nilaikode  = substr($jumlah_data[0], 1);
    $kode       = (int) $nilaikode;   
    $kode       = $jumlah_data + 1;
    $kode_otomatis = "M".str_pad($kode, 5, "0", STR_PAD_LEFT);
} else {
    $kode_otomatis = "M00001";
}
?>

<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Siswa</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <a href="index.php?page=data-siswa">
                    <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </button>
                </a>
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Add Siswa
                    </div>
                    
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <form role="form" method="POST" enctype="multipart/form-data" action="simpan_siswa.php">
                                    <div class="form-group">
                                        <label>NIS</label>
                                        <input class="form-control" type="text" name="nis" placeholder="NIS" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="fname" placeholder="First Name" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Last Name" name="lname" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" id="text" cols="30" rows="7" required="" name="alamat"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="username" placeholder="Username" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Password" required="">
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="text-right">
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
</section>
