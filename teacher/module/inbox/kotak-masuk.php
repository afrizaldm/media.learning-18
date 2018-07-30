<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Kotak Masuk Tugas</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Kotak Masuk
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div style="overflow-x: scroll;">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th><strong>No.</strong></th>
                                                <th><strong>NIS</strong></th>
                                                <th><strong>Nama Siswa (first)</strong></th>
                                                <th><strong>Nama Siswa (last)</strong></th>
                                                <th><strong>Tema</strong></th>
                                                <th><strong>Nama Materi</strong></th>
                                                <th><strong>Guru Pengampu</strong></th>
                                                <th><strong>File Jawaban</strong></th>
                                                <th><strong>Pilhan</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php 
                                            include '../config/connection.php';
                                            $qguru = $_SESSION['nama1'];
                                            $no = 1;
                                            $query = "SELECT * FROM v_kotakmasuk where guru='$qguru'";

                                            $hasil  = mysqli_query($con, $query);
                                            while($row = mysqli_fetch_array($hasil)){
                                               
                                                $userid    = $row['userid'];
                                                $nm_first  = $row['first_name'];
                                                $nm_last   = $row['last_name'];
                                                $tema      = $row['tema'];
                                                $nm_materi = $row['nama_materi'];
                                                $guru      = $row['guru'];
                                                $fjawaban    = $row['file_jawaban'];

                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $userid ?></td>
                                                <td><?php echo $nm_first ?></td>
                                                <td><?php echo $nm_last ?></td>
                                                <td><?php echo $tema ?></td>
                                                <td><?php echo $nm_materi ?></td>
                                                <td><?php echo $guru ?></td>
                                                <td><a href src="../files/jawaban"> <?php echo $fjawaban ?></a></td>
                                                
                                                <?php 
                                                echo "<td class='btn-table text-center'>"
                                                      ." <a href=\"download.php?file=jawaban/".$fjawaban."\">"
                                                          ."<button type=\"button\" class=\"btn btn-xs btn-primary btn-item\" title=\"Delete\" onclick=\"return confirm('Unduh data ini?');\">"
                                                              ."<i class=\"fa fa-download\"></i> Download</button>"
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