<?php 
include '../config/connection.php';
$guru   = $_SESSION['userid'];
$query  = "SELECT id_materi FROM media";
$hasil  = mysqli_query($con, $query);
$data   = mysqli_fetch_array($hasil);
$jumlah_data = mysqli_num_rows($hasil);
?>

<section>
    <!-- Content -->
    <div>
        <div class="row">
            <!-- <div class="col-lg-12">
                <h1 class="page-header">Add Materi</h1>
            </div> -->
            <hr>             
        </div><!-- /Row -->
        
        <a href="index.php?page=belajar">
            <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
                <i class="fa fa-arrow-left"></i> Back
            </button>
        </a>
        
        <div class="row">
            <div class="col-lg-12">
               <!--  <a href="index.php?page=belajar">
                    <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </button>
                </a> -->
                <div class="panel panel-green">
                    <div class="panel-heading">
                        Tambah Materi
                    </div>
                    
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <form method="POST" enctype="multipart/form-data" action="simpan_materi.php" >
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type='hidden'  class="form-control" readonly="" name="idguru" value="<?php echo $guru ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Tema</label>
                                            <select class="form-control" id="tema" name="tema">
                                                <option></option>
                                                <option>Fisika</option>
                                                <option>Literasi</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Materi</label>
                                            <input class="form-control" type="text" placeholder="Nama / Judul" name="materi" required="">
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Deskripsi Singkat Materi</label>
                                            <textarea id="text" cols="30" rows="7" required="" name="description"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>File Materi</label>
                                            <input type="file" name="fmateri" id="fmateri" >
                                        </div>

                                        <div class="form-group">
                                            <label>File Tugas</label>
                                            
                                            <input type="file" name="ftugas" id="ftugas" >
                                        </div>

                                        <div class="form-group">
                                            <label>File Video (Mp4)</label>
                                            <input type="file" name="fvideo" id="fvideo" >
                                        </div>
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
<script>
    //CKEditor
    $(function (){
        CKEDITOR.replace('text');
    });
</script>
