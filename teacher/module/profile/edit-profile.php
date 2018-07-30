<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User Profile</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Change Profile
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-5">
                                    <center>
                                        <img src="../file/images/spinner.gif" alt=""/>
                                        <h2>Account Profile Edit</h2>
                                    </center>
                                </div>
                                
                                <?php
                                    include '../config/connection.php';
                                    $id     = $_SESSION['ids'];
                                    $query  = "SELECT * FROM users WHERE id_user = '$id'";
                                    $hasil  = mysqli_query($con, $query);
                                    while($rowd = mysqli_fetch_array($hasil)){
                                        $userid    = $rowd['userid'];
                                        $fname     = $rowd['first_name'];
                                        $lname     = $rowd['last_name'];
                                        $alamat    = $rowd['alamat'];
                                        $email     = $rowd['email'];
                                        $username  = $rowd['username'];
                                    }
                                ?>
                                
                                <div class="col-lg-offset-5">
                                    <form method="POST" id="frm-add-category" name="form1" action="edit_profile.php">
                                        <table class="table-profile" width='100%' style="margin-bottom: 10px;" border='0'>
                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">NIM</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td>
                                                    <input style="padding: 5px;" type="text" name="nim" value="<?php echo $userid ?>" readonly="">
                                                    <label style="color: red">*</label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Username</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td>
                                                    <input style="padding: 5px;" type="text" name="username" value="<?php echo $username ?>" readonly="">
                                                    <label style="color: red">*</label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Nama Depan</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="text" name="ndepan" value="<?php echo $fname ?>" required=""></td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Nama Belakang</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="text" name="nbelakang" value="<?php echo $lname ?>" required=""></td>
                                            </tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Alamat</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><textarea style="padding: 5px;" rows="5" cols="40" name="alamat" required=""><?php echo $alamat ?></textarea></td>
                                            </tr>

                                            <tr>
                                                <td style="margin: 10px; padding: 10px;">Email</td>
                                                <td style="margin: 10px; padding: 10px;">:</td>
                                                <td><input style="padding: 5px;" type="email" name="email" value="<?php echo $email ?>" required=""></td>
                                            </tr>
                                        </table>
                                        <label style="color: red; padding-left: 10px;">*) Tidak Bisa diubah</label>

                                        <div class="form-group btn-ch-profile" style="padding: 10px;">
                                            <a href="index.php?page=profile" class="btn btn-warning">Cancel</a>
                                            <input type="submit" name="simpan" class="btn btn-success" id="simpan" value="Save">
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
