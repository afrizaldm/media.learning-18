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
                                <a href="index.php?page=add-materi">
                                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Add Materi
                                    </button>
                                </a>
                                <table id="dataTables-example" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                        <tr style="font-size: 12px;">
                                            <th><strong>ID Materi</strong></th>
                                            <th><strong>Nama Materi</strong></th>
                                            <th><strong>ID Guru</strong></th>
                                            <th><strong>Materi</strong></th>
                                            <th><strong>File Materi</strong></th>
                                            <th><strong>Nama Tugas</strong></th>
                                            <th><strong>File Tugas</strong></th>
                                            <th><strong>Nama Video</strong></th>
                                            <th><strong>File Video</strong></th>
                                            <th><strong>Pilhan</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>s</td>
                                            <td>s</td>
                                            <td>s</td>
                                            <td>ss</td>
                                            <td>s</td>
                                            <td>s</td>
                                            <td>s</td>
                                            <td>s</td>
                                            <td>s</td>
                                            <?php 
                                            echo "<td class='btn-table text-center'>"
                                                  . "<a href='#modalEdit' data-toggle='modal' data-id=".$row['id'].">"
                                                      ."<button type='button' class='btn btn-xs btn-success btn-item' title='Edit'>"
                                                          ."<i class='fa fa-edit'></i> Edit</button>"
                                                  ."</a>"
                                                  ." <a href=\"aksi_hapusItems.php?id=".$row['id']."\">"
                                                      ."<button type=\"button\" class=\"btn btn-xs btn-danger btn-item\" title=\"Delete\" onclick=\"return confirm('Apa Anda yakin ingin menghapus data ini?');\">"
                                                          ."<i class=\"fa fa-times\"></i> Delete</button>"
                                                  ."</a>"
                                              ."</td>"
                                            ?>
                                        </tr>
                                        <?php
                                        include '../config/connection.php';

                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Row -->                        
    </div><!-- /Page Wrapper -->
</section>

<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    } );
</script>