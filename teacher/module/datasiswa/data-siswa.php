<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Data Siswa</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Data Siswa
                    </div>
                    <div id="example" class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="index.php?page=add-siswa">
                                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Daftarkan Siswa
                                    </button>
                                </a>
                                <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                        <tr style="font-size: 12px;">
                                            <th><strong>No.</strong></th>
                                            <th><strong>NISN</strong></th>
                                            <th><strong>Nama Depan</strong></th>
                                            <th><strong>Nama Belakang</strong></th>
                                            <th><strong>Alamat</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Username</strong></th>
                                            <th><strong>Pilhan</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 12px;">
                                        <?php 
                                        include '../config/connection.php';
                                        $no = 1;
                                        $query = "SELECT * FROM users WHERE level='student'";
                                        
                                        $hasil  = mysqli_query($con, $query);
                                        while($row = mysqli_fetch_array($hasil)){
                                            $id_user   = $row['id_user'];
                                            $userid    = $row['userid'];
                                            $fname     = $row['first_name'];
                                            $lname     = $row['last_name'];
                                            $alamat    = $row['alamat'];
                                            $email     = $row['email'];
                                            $username  = $row['username'];
                                            $password  = $row['password'];
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $userid ?></td>
                                            <td><?php echo $fname ?></td>
                                            <td><?php echo $lname ?></td>
                                            <td><?php echo $alamat ?></td>
                                            <td><?php echo $email ?></td>
                                            <td><?php echo $username ?></a></td>
                                            <?php 
                                            echo "<td class='btn-table text-center'>"
                                                  . "<a href='#modalEdit' data-toggle='modal' data-id=".$id_user.">"
                                                      ."<button type='button' class='btn btn-xs btn-success btn-item' title='Edit'>"
                                                          ."<i class='fa fa-edit'></i> </button>"
                                                  ."</a>"
                                                  ." <a href=\"hapus_siswa.php?id=".$id_user."\">"
                                                      ."<button type=\"button\" class=\"btn btn-xs btn-danger btn-item\" title=\"Delete\" onclick=\"return confirm('Apa Anda yakin ingin menghapus data ini?');\">"
                                                          ."<i class=\"fa fa-times\"></i> </button>"
                                                  ."</a> "
                                                  . "<a href='#modalEditPass' data-toggle='modal' data-id=".$id_user.">"
                                                    ."<button type=\"button\" class=\"btn btn-xs btn-warning btn-item\" title=\"Update Password\">"
                                                        ."<i class=\"fa fa-warning\"></i> </button>"
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
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
    
    <!-- Modal Edit Siswa -->
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
                    <h3 class="modal-title"><strong>Edit Data Siswa</strong></h3>
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
    
    <!-- Modal Edit Password -->
    <div id="modalEditPass" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-size center-block" role="document">
            <!-- konten modal-->
            <div class="modal-content">                
                <!-- heading modal -->
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-login">
                        <em class="glyphicon glyphicon-edit"></em>
                    </div>
                    <h3 class="modal-title"><strong>Edit Password</strong></h3>
                </div>

                <!-- body modal -->
                <div class="modal-body center-block">                    
                    <div class="fetched-data2"></div>
                </div>

                <!-- footer modal -->
                <div class="modal-footer">
                    <div class="text-center forget">
                        <p>&COPY; physic.com</p>
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
                url : 'module/datasiswa/edit-siswa.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
        });
    });
    
    $(document).ready(function(){
        $('#modalEditPass').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'POST',
                url : 'module/datasiswa/ubah-password.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data2').html(data);//menampilkan data ke dalam modal
                }
            });
        });
    });
</script>