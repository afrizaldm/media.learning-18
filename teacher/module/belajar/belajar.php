<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Ruang Belajar</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Ruang Belajar
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="index.php?page=add-materi">
                                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah Materi
                                    </button>
                                </a>
                                <div style="overflow-x: scroll;">
                                    <table  id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th><strong>No.</strong></th>

                                                <th><strong>Nama Materi</strong></th>
                                                <th><strong>Guru Pengampu</strong></th>
                                                <th><strong>Tema</strong></th>
                                                <th><strong>Deskripsi Materi</strong></th>
                                                <th><strong>File Materi</strong></th>
                                                <th><strong>File Tugas</strong></th>
                                                <th><strong>File Video (Mp4)</strong></th>
                                                <th><strong>Pilhan</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php 
                                            include '../config/connection.php';
                                            $dguru = $_SESSION['nama1'];
                                            $no = 1;
                                            $query = "SELECT * FROM v_belajar where first_name='$dguru'";

                                            $hasil  = mysqli_query($con, $query);
                                            while($row = mysqli_fetch_array($hasil)){
                                                $id_materi = $row['id_materi'];
                                                $userid    = $row['first_name'];
                                                $tema      = $row['tema'];
                                                $nm_materi = $row['nama_materi'];
                                                $materi    = $row['materi'];
                                                $fmateri   = $row['file_materi'];
                                                $ftugas    = $row['file_tugas'];
                                                $fvideo    = $row['file_video'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>

                                                <td><?php echo $nm_materi ?></td>
                                                <td><?php echo $userid ?></td>
                                                <td><?php echo $tema ?></td>
                                                <td><?php echo $materi ?></td>
                                                <td><a href src="\files\materi"> <?php echo $fmateri ?></a></td>
                                                <td><a href src="../files/tugas"> <?php echo $ftugas ?></a></td>
                                                <td><a href src="../files/video"> <?php echo $fvideo ?></a></td>
                                                <?php 
                                                echo "<td class='btn-table text-center'>"
                                                      . "<a href='#modalEdit' data-toggle='modal' data-id=".$id_materi.">"
                                                          ."<button type='button' class='btn btn-xs btn-success btn-item' title='Edit'>"
                                                              ."<i class='fa fa-edit'></i></button>"
                                                      ."</a>"
                                                      ." <a href=\"hapus_materi.php?id=".$id_materi."\">"
                                                          ."<button type=\"button\" class=\"btn btn-xs btn-danger btn-item\" title=\"Delete\" onclick=\"return confirm('Apa Anda yakin ingin menghapus data ini?');\">"
                                                              ."<i class=\"fa fa-times\"></i></button>"
                                                      ."</a>"
                                                  ."</td>"
                                                ?>
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
    
    <!-- Modal Edit Items -->
    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-size center-block" role="document">
            <!-- konten modal-->
            <div class="modal-content">                
                <!-- heading modal -->
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-login">
                        <em class="glyphicon glyphicon-edit"></em>
                    </div>
                    <h2 class="modal-title"><strong>Edit Materi</strong></h2>
                </div>

                <!-- body modal -->
                <div class="modal-body center-block">                    
                    <div class="fetched-data"></div>
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
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    
    $(document).ready(function(){
        $('#modalEdit').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'POST',
                url : 'module/belajar/edit-materi.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
        });
    });
</script>