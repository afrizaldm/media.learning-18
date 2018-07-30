<?php 
include '../../../config/connection.php';
$guru   = $_SESSION['userid'];
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM users WHERE id_user = '$id'";
    $hasil2  = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($hasil2)){
        $id_user   = $row['id_user'];
        $password  = $row['password'];
    
}
?>
<form method="POST" enctype="multipart/form-data" action="../teacher/edit_password_siswa.php">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Password Lama</label>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $id_user ?>">
                    <input class="form-control" type="text" name="nis" readonly="" value="<?php echo $password ?>">
                </div>

                <div class="form-group">
                    <label>Password Baru</label>
                    <input class="form-control" type="password" name="password_baru" placeholder="New Password" required="" value="<?php echo $fname ?>">
                </div>
                
                <div class="form-group">
                    <label>Ulangi Password Baru</label>
                    <input class="form-control" type="password" name="konf_password" placeholder="Confirm Password" required="" value="<?php echo $fname ?>">
                </div>

                <div class="col-lg-12">
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
        
<?php } 
    //$con->close();
?>

