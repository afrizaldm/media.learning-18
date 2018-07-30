<?php 
include '../../../config/connection.php';
$guru   = $_SESSION['userid'];
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM users WHERE id_user = '$id'";
    $hasil2  = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($hasil2)){
        $id_user   = $row['id_user'];
        $userid    = $row['userid'];
        $fname     = $row['first_name'];
        $lname     = $row['last_name'];
        $alamat    = $row['alamat'];
        $email     = $row['email'];
        $username  = $row['username'];
        $password  = $row['password'];
    
}
?>
<form method="POST" enctype="multipart/form-data" action="../teacher/edit_siswa.php">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $id_user ?>">
                    <input class="form-control" type="text" name="nis" placeholder="NIS" readonly="" value="<?php echo $userid ?>">
                </div>

                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="fname" placeholder="First Name" required="" value="<?php echo $fname ?>">
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="text" placeholder="Last Name" name="lname" required="" value="<?php echo $lname ?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" id="text" cols="30" rows="7" required="" name="alamat" ><?php echo $alamat ?></textarea>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" required="" value="<?php echo $email ?>">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" placeholder="Username" readonly="" value="<?php echo $username ?>">
                </div>

                <div class="col-lg-12">
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
        
<?php } 
    //$con->close();
?>

