<?php 
include '../../../config/connection.php';
$guru   = $_SESSION['userid'];
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM media WHERE id_materi = '$id'";
    $hasil2  = mysqli_query($con, $sql);
    while($r = mysqli_fetch_array($hasil2)){
        $id_materi  = $r['id_materi'];
        $nm_materi  = $r['nama_materi'];
        $tema       = $r['tema'];
        $materi     = $r['materi'];
        $fmateri    = $r['file_materi'];
        $ftugas     = $r['file_tugas'];
        $fvideo     = $r['file_video'];
    
}
/*if($_POST['rowid']) {
    $id = $_POST['rowid'];
    // mengambil data berdasarkan id
    // dan menampilkan data ke dalam form modal bootstrap
    $sql = "SELECT * FROM media WHERE id_materi = $id";
    $result = $con->query($sql);
    foreach ($result as $baris) { */
?>
<form method="POST" enctype="multipart/form-data" action="../teacher3/edit_materi.php">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                        
                        <input type='hidden'  class="form-control" readonly="" name="idguru" value="<?php echo $guru ?>">
                        <input type="hidden" class="form-control" readonly="" name="itemid" value="<?php echo $id_materi ?>">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tema</label>
                        <select class="form-control" id="tema" name="tema" required="">
                            <option><?php echo $tema ?></option>
                            <option>Fisika</option>
                            <option>Literasi</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Materi</label>
                        <input class="form-control" type="text" placeholder="Nama / Judul" name="materi" required="" value="<?php echo $nm_materi ?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Materi</label>
                        <textarea id="text" cols="30" rows="7" required="" name="description"><?php echo $materi ?></textarea>
                    </div>
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

<script>
    //CKEditor
    $(function (){
        CKEDITOR.replace('text');
    });
</script>

        
<?php } 
    //$con->close();
?>

