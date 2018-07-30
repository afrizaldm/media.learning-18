<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pengaturan</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Ubah Password
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-5">
                                    <center>
                                        <img src="../file/images/spinner.gif" alt=""/>
                                        <h2>Ubah Password</h2>
                                    </center>
                                </div>
                                
                                <?php
                                    include '../config/connection.php';
//                                    $id     = $_SESSION['ids'];
//                                    $query  = "SELECT * FROM users WHERE id_user = '$id'";
//                                    $hasil  = mysqli_query($con, $query);
//                                    while($rowd = mysqli_fetch_array($hasil)){
//                                        $userid    = $rowd['userid'];
//                                        $fname     = $rowd['first_name'];
//                                        $lname     = $rowd['last_name'];
//                                        $alamat    = $rowd['alamat'];
//                                        $email     = $rowd['email'];
//                                        $username  = $rowd['username'];
//                                    }
                                ?>
                                
                                <div class="col-lg-offset-5">
                                    <form method="POST" id="frm-add-category" name="form1" action="edit_password.php">
                                        <table class="table-profile" width='100%' style="margin-bottom: 10px;" border='0'>
                                            <tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Password Lama</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="password" name="password_lama" required="" placeholder="Masukkan Password Lama"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Password Baru</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="password" name="password_baru" required="" placeholder="Masukkan Password Baru"></td>
                                            </tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Ulangi Password Baru</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="password" name="konf_password" required="" placeholder="Ulangi Password Baru"></td>
                                            </tr>
                                        </table>

                                        <div class="form-group btn-ch-profile" style="padding: 10px;">
                                            <a href="index.php?page=dashboard" class="btn btn-warning">Batal</a>
                                            <input type="submit" name="change" class="btn btn-success" id="change" value="Ubah Password">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
</section>
