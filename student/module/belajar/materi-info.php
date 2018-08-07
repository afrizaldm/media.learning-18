<section>
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ruang Belajar / Materi</h1>
        </div>
    </div><!-- /Row -->
    
    <a href="index.php?page=belajar">
        <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </button>
    </a>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Halaman Detail Materi</div>
                <div class="panel-body">
                <?php 
                include '../config/connection.php';
                $id = $_GET['id'];
                $no = 1;
                if(isset($id)){
                    $query = "SELECT * FROM media WHERE id_materi='".$id."'";
                    $hitung_check = mysqli_num_rows($query);
                    $hasil  = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($hasil)){
                        $id_materi = $row['id_materi'];
                        $userid    = $row['userid'];
                        $tema      = $row['tema'];
                        $nm_materi = $row['nama_materi'];
                        $materi    = $row['materi'];
                        $fmateri   = $row['file_materi'];
                        $ftugas    = $row['file_tugas'];
                        $fvideo    = $row['file_video'];
                ?>
                    
                    <!-- /.col-md-4 -->
                    <div class="col-md-12 mb-12">
                        <center>
                            <div class="card h-100">
                                <img class="card-img-top" src="../file/images/obah-obah.gif" alt="Card image cap">
                                <div class="card-body">
                                    
                                    <h2 class="card-title"><?php echo $nm_materi ?></h2>
                                    <p class="card-text"><?php echo $materi ?></p>
                                </div>
                            </div>
                        </center>
                    </div>
                    
                    <div class="col-lg-12" style="margin-top: 20px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">Video</div>
                            <div class="panel-body">
                                <center>
                                    <video width="100%" height="auto" controls>
                                        <source src="../video.php?file=<?php echo $fvideo; ?>" type="video/mp4" width="100%" height="auto"/>
                                    </video>
                                </center>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4" style="margin-top: 20px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">File Materi Download</div>
                            <div class="panel-body">
                                <label><?php echo $fmateri ?></label>
                                <a class="btn btn-primary pull-right" href="download.php?file=materi/<?php echo $fmateri ?>" role="button">Download</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4" style="margin-top: 20px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">File Tugas Download</div>
                            <div class="panel-body">
                                <label><?php echo $ftugas ?></label>
                                <a class="btn btn-primary pull-right" href="download.php?file=tugas/<?php echo $ftugas ?>" role="button">Download</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4" style="margin-top: 20px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">File Upload Jawaban</div>
                            <div class="panel-body">
                                <label>Kirim Jawaban</label>
                                <a class="btn btn-primary pull-right" href='#modalTugas' data-toggle='modal' role="button">Upload</a>
                            </div>
                        </div>
                    </div>
                    
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div><!-- /Row -->
    
    <!-- Modal Edit Items -->
    <div id="modalTugas" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-size center-block" role="document">
            <!-- konten modal-->
            <div class="modal-content">                
                <!-- heading modal -->
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-login">
                        <em class="glyphicon glyphicon-edit"></em>
                    </div>
                    <h3 class="modal-title"><strong>Kirim Jawaban</strong></h3>
                </div>

                <!-- body modal -->
                <div class="modal-body center-block">
                    <form method="POST" enctype="multipart/form-data" action="simpan_materijawab.php">
                        <p>
                            Silahkan upload jawaban tugas dari meteri ini pada tempat yang telah disediakan.
                        </p>
                        <input type="hidden" name="idmateri" value="<?php echo $id_materi ?>">
                        <div class="form-group">
                            <label>Tema</label>
                            <input class="form-control" type="text" name="tema" id="tema" value="<?php echo $tema ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>File Jawaban</label>
                            <input class="form-control" type="file" name="fjawab" id="fjawab" >
                        </div>
                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>                    
                </div>

                <!-- footer modal -->
                <div class="modal-footer">
                    <div class="text-center forget">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<script type="text/javascript">
    function truncateText(selector, maxLength) {
        var element = document.querySelector(selector),
            truncated = element.innerText;

        if (truncated.length > maxLength) {
            truncated = truncated.substr(0,maxLength) + '...';
        }
        return truncated;
    }
    //You can then call the function with something like what i have below.
    document.querySelector('p').innerText = truncateText('p', 1);
</script>