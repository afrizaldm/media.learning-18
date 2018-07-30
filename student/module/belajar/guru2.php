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
	
	<?php
	$link2 = 'index.php?page=pg2';
	?>
	<form role="search" action="<?php echo $link2 ?>" method="POST">
		<input type="text" name="cari" id="cari" placeholder="Pencarian..." class="form-control">
	</form>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Halaman Fisika (Tutut Safitri)</div>
                <input type="hidden" name="idguru" value="14421022">
                <div class="panel-body">
                <?php 
                include '../config/connection.php';
                $link = 'index.php?page=info';
                $no = 1;
                $query = "SELECT * FROM media WHERE userid = '14421022'";

                $hasil  = mysqli_query($con, $query);
                $jml    = mysqli_num_rows($hasil);
                if($jml > 0){
                    while($row = mysqli_fetch_array($hasil)){
                        $id_materi = $row['id_materi'];
                        $userid    = $row['userid'];
                        $tema      = $row['tema'];
                        $nm_materi = $row['nama_materi'];
                        $materi    = $row['materi'];
                        $fmateri   = $row['file_materi'];
                        $ftugas    = $row['file_tugas'];
                        $fvideo    = $row['file_video'];
                        $status    = $row['status'];
                ?>
                    <center>
                        <!-- /.col-md-4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100" style="border: 1px solid #cccccc; padding: 20px; margin-bottom: 25px">
                                <img class="card-img-top" src="../file/images/book.png" alt="Card image cap" style="margin-top: 20px;width: 20%;">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $nm_materi ?></h4>
                                    <div class="paragraph">
                                        <p class="card-text" style="text-align: justify;"><?php echo $materi ?></p>
                                    </div>
                                </div>
                                <div class="card-footer" style="margin: 10px;">
                                    <?php
                                        if($status == 'AKTIVE') {
                                    ?>
                                        <a href="<?php echo $link ?>&id=<?php echo $id_materi ?>" class="btn btn-primary">More Info</a>
                                    <?php
                                        }else{
                                    ?>
                                        <button id="<?php echo $id_materi ?>" class="btn btn-danger">Belum Aktif</button>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </center>
                <?php 
                    }
                }
                else{
                    echo "<center><h1>Belum Ada Materi Untuk Guru Ini</h1></center>";
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