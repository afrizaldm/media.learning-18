<?php 
include '../../../config/connection.php';
$guru   = $_SESSION['userid'];
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM tugas WHERE id_tugas = '$id'";
    $hasil2  = mysqli_query($con, $sql);
    while($r = mysqli_fetch_array($hasil2)){
        $id_tugas   = $r['id_tugas'];
        $nm_tugas   = $r['nama_tugas'];
        $ftugas     = $r['file_tugas'];
        $userid     = $r['userid'];
    }
}

/*if($_POST['rowid']) {
    $id = $_POST['rowid'];
    // mengambil data berdasarkan id
    // dan menampilkan data ke dalam form modal bootstrap
    $sql = "SELECT * FROM tugas WHERE id_tugas = '$id'";
    $result = $con->query($sql);
    foreach ($result as $baris) { */
?>
<form method="POST" enctype="multipart/form-data" action="../teacher/edit_materi.php">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Nama Tugas</label>
                    <input class="form-control" type="text" placeholder="Nama / Judul" name="tugas" required="" value="<?php echo $baris['nama_tugas'] ?>">
                </div>
                
                <div class="form-group">
                    <label>File Tugas</label>
                    <input type="file" name="ftugas" id="ftugas" >
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
        
<?php 
    //$con->close();
?>

