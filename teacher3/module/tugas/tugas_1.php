<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Ruang Tugas</h1>
            </div>
        </div><!-- /Row -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Ruang Tugas
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="index.php?page=add-tugas">
                                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah Tugas
                                    </button>
                                </a>
                                <div style="overflow-x: scroll;">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th><strong>No.</strong></th>

                                                <th><strong>Nama Tugas</strong></th>
                                                <th><strong>File Tugas</strong></th>
                                                <th><strong>User ID</strong></th>
                                                <th><strong>Pilhan</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php 
                                            include '../config/connection.php';
                                            $no = 1;
                                            $query = "SELECT * FROM tugas";

                                            $hasil  = mysqli_query($con, $query);
                                            while($row = mysqli_fetch_array($hasil)){
                                                $id_tugas  = $row['id_materi'];
                                                $userid    = $row['userid'];
                                                $nm_tugas  = $row['nama_tugas'];
                                                $ftugas    = $row['file_tugas'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>

                                                <td><?php echo $nm_tugas ?></td>
                                                <td><a href src="../../files/tugas"> <?php echo $ftugas ?></a></td>
                                                <td><?php echo $userid ?></td>
                                                <?php 
                                                echo "<td class='btn-table text-center'>"
                                                      . "<a href='#modalEdit' data-toggle='modal' data-id=".$id_tugas.">"
                                                          ."<button type='button' class='btn btn-xs btn-success btn-item' title='Edit'>"
                                                              ."<i class='fa fa-edit'></i></button>"
                                                      ."</a>"
                                                      ." <a href=\"hapus_materi.php?id=".$id_tugas."\">"
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