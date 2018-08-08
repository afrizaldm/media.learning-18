<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Ruang Bank Soal</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Ruang Bank Soal
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="index.php?page=add-tugas">
                                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah Bank Soal
                                    </button>
                                </a>
                                <div style="overflow-x: scroll;">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th><strong>No.</strong></th>

                                                <th><strong>Nama Bank Soal</strong></th>
                                                <th><strong>File Bank Soal</strong></th>
                                                <th><strong>Tema</strong></th>
                                                <th><strong>Guru Pengampu</strong></th>
                                                <th><strong>Pilhan</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php 
                                            include '../config/connection.php';
                                            $qguru = $_SESSION['nama1'];
                                            $no = 1;
                                            $query = "SELECT tugas.id_tugas AS id_tugas , `users`.`first_name` AS `first_name`,`tugas`.`nama_tugas` AS `nama_tugas`,`tugas`.`file_tugas` AS `file_tugas`, tugas.tema AS tema, tugas.`status` from (`tugas` join `users`) WHERE (`users`.`userid` = `tugas`.`userid`) AND `users`.`first_name` ='$qguru'";

                                            $hasil  = mysqli_query($con, $query);
                                            while($row = mysqli_fetch_array($hasil)){
                                                $id_tugas  = $row['id_tugas'];
                                                $userid    = $row['first_name'];
                                                $nm_tugas  = $row['nama_tugas'];
                                                $tema      = $row['tema']; 
                                                $ftugas    = $row['file_tugas'];
                                                $status    = $row['status'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>

                                                <td><?php echo $nm_tugas ?></td>
                                                <td><?php echo $tema ?></td>
                                                <td><a href src="../../files/tugas"> <?php echo $ftugas ?></a></td>
                                                <td><?php echo $userid ?></td>
                                                <td class='btn-table text-center'>
                                                <?php 
                                                echo " <a href=\"hapus_tugas.php?id=".$id_tugas."\">"
                                                          ."<button type=\"button\" class=\"btn btn-xs btn-danger btn-item\" title=\"Delete\" onclick=\"return confirm('Apa Anda yakin ingin menghapus data ini?');\">"
                                                              ."<i class=\"fa fa-times\"></i> Hapus</button>"
                                                      ."</a>";
                                                    if($status == "ACTIVE"){
                                                    ?>
                                                        <a href="set_aktif_tugas.php?status=1&id=<?php echo $id_tugas ?>">
                                                            <button type="button" class="btn btn-xs btn-danger btn-item" title="Non Aktifkan" onclick="return confirm('Apa Anda yakin ingin menonaktifkan data ini?');">
                                                            <i class="fa fa-power-off"></i></button>
                                                        </a>
                                                    <?php
                                                        }else{
                                                    ?>
                                                        <a href="set_aktif_tugas.php?status=0&id=<?php echo $id_tugas ?>">
                                                            <button type="button" class="btn btn-xs btn-success btn-item" title="Aktifkan" onclick="return confirm('Apa Anda yakin ingin mengaktifkan data ini?');">
                                                            <i class="fa fa-power-off"></i></button>
                                                        </a>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
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
                    <h2 class="modal-title"><strong>Edit Tugas</strong></h2>
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
    } );
    
    $(document).ready(function(){
        $('#modalEdit').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'POST',
                url : 'module/tugas/edit-tugas.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
        });
    });
</script>