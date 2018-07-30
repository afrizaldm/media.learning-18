<section>
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ruang Tugas</h1>
        </div>
    </div><!-- /Row -->
    
    <a href="index.php?page=tugas">
        <button style="margin-bottom: 10px;" class="btn btn-warning btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </button>
    </a>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Halaman Tugas (Tutut Safitri)</div>
                <input type="hidden" name="idguru" value="14421022">
                <div class="panel-body">
                <?php 
                include '../config/connection.php';
                $link = 'index.php?page=info';
                $no = 1;
                $query = "SELECT * FROM tugas WHERE userid = '14421022'";

                $hasil  = mysqli_query($con, $query);
                $jml    = mysqli_num_rows($hasil);
                if($jml > 0){
                    while($row = mysqli_fetch_array($hasil)){
                        $nama_guru    = $row['first_name'];
                        $nama_tugas   = $row['nama_tugas'];
                        $ftugas       = $row['file_tugas'];
                ?>
                    <center>
                        <!-- /.col-md-4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100" style="border: 1px solid #cccccc; padding: 20px; margin-bottom: 25px">
                                <img class="card-img-top" src="../file/images/book.png" alt="Card image cap" style="margin-top: 20px;width: 20%;">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $nama_tugas ?></h2>
                                    <div class="paragraph">
                                        <p class="card-text" style="text-align: justify;"><?php echo $ftugas ?></p>
                                    </div>
                                </div>
                                <div class="card-footer" style="margin: 10px;">
                                    <a href="download.php?file=tugas/<?php echo $ftugas ?>" class="btn btn-primary">Download Tugas</a>
                                </div>
                            </div>
                        </div>
                    </center>
                <?php 
                    }
                }
                else{
                    echo "<center><h1>Belum Ada Tugas Untuk Guru Ini</h1></center>";
                }
                ?>
                    
                </div>
            </div>
        </div>
    </div><!-- /Row -->
</section>

<script type="text/javascript">
    $(function(){
        $(".paragraph").each(function(i){
            len=$(this).text().length;
            if(len>80){
                $(this).text($(this).text().substr(0,100)+'...');
            }
        });
    });
</script>