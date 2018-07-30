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
	
	<form role="search" action="index.php?page=pg3" method="POST">
		<input type="text" name="cari" id="cari" placeholder="Pencarian..." class="form-control">
	</form>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Halaman Fisika (Tetra Rahayu)</div>
                <input type="hidden" name="idguru" value="14421028">
                <div class="panel-body">
                <?php 
                include '../config/connection.php';
                if(isset($_POST['cari'])){
					$cari = $_POST['cari'];
					echo "<h4 class=\"title text-center\">Anda Mencari : ".$cari."</h4><hr>";
				}
				
				if(isset($_POST['cari'])){
					$cari = $_POST['cari'];
					$data = "SELECT * FROM v_belajar WHERE nama_materi LIKE '%".$cari."%' AND first_name='Tetra' AND tema='Fisika'";
					$hasil  = mysqli_query($con, $data);
				}
				while($d = mysqli_fetch_array($hasil)){
					$id_materi  = $d['id_materi'];
					$nm_materi  = $d['nama_materi'];
					$materi     = $d['materi'];

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
                                    <a href="<?php echo $link ?>&id=<?php echo $id_materi ?>" class="btn btn-primary">More Info</a>
                                </div>
                            </div>
                        </div>
                    </center>
                <?php 
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