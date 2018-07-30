<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profil Pengguna</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Profil Anda
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-5">
                                    <center>
                                        <img src="../file/images/atom.gif" alt=""/>
                                        <h2>Informasi Akun Pengguna</h2>
                                    </center>
                                </div>
                                
                                <div class="col-lg-offset-5">
                                    <div class="panel panel-success">
                                        <div class="panel-heading"></div>
                                        <?php
                                        $id = $_SESSION['ids'];
                                        $query = "SELECT * FROM users WHERE id_user='$id'";
                                        $hasil  = mysqli_query($con, $query);
                                        while($r = mysqli_fetch_array($hasil)){
                                            $username       = $r['username'];
                                            $userid         = $r['userid'];
                                            $nm_depan       = $r['first_name'];
                                            $nm_belakang    = $r['last_name'];
                                            $alamat         = $r['alamat'];
                                            $email          = $r['email'];
                                        }
                                        ?>
                                        <div class="panel-body">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <table width='100%' style="m-bottom: 10px;">
                                                <tr>
                                                    <td style="padding: 10px;">NIM</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $userid; ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 10px;">Username</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $username; ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 10px;">Nama Depan</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $nm_depan; ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 10px;">Nama Belakang</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $nm_belakang; ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 10px;">Alamat</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $alamat; ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 10px;">Email</td>
                                                    <td style="padding-left: 5px; padding-right: 5px">:</td>
                                                    <td><?php echo $email; ?></td>
                                                </tr>
                                            </table>

                                            <div class="form-group btn-ch-profile">
                                                <a href="index.php?page=edit-profile">
                                                    <button style="margin: 10px;" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i> Ubah Data
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
</section>
