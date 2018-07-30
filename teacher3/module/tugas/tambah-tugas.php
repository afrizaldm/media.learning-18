<?php 
include '../config/connection.php';
$guru   = $_SESSION['userid'];
?>

<section>
    <!-- Content -->
    <hr/>
    <a href="index.php?page=tugas">
        <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </button>
    </a>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    Tambahkan Bank Soal
                </div>

                <div id="example" class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST" enctype="multipart/form-data" action="simpan_materitugas.php" onsubmit="validasi()">
                                <div class="form-group">
                                    <input type='hidden'  class="form-control" readonly="" name="idguru" value="<?php echo $guru ?>">
                                </div>

                                <div class="form-group">
                                    <label>Tema</label>
                                    <select class="form-control" id="tema" name="tema" required="">
                                        <option></option>
                                        <option>Fisika</option>
                                        <option>Literasi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nama Bank Soal</label>
                                    <input class="form-control" type="text" placeholder="Nama / Judul" name="tugas" required="">
                                </div>

                                <div class="form-group">
                                    <label>File Bank Soal</label>

                                    <input type="file" name="ftugas" id="ftugas" >
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
    </div><!-- /Page Wrapper -->
</section>

<script>
    //CKEditor
    $(function (){
        CKEDITOR.replace('text');
    });
</script>