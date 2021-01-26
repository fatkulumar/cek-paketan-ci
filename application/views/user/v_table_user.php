    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header bg-success"><strong><h1>SIMPAS LITE</strong></h1>
                </div>
                <div class="card-body">

                    <div class="table table-responsive">   
                      <!-- /.content-header -->
                        <table id="table_resi_user" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal Terima</th>
                                    <th>Nama</th>
                                    <th>HP</th>
                                    <th>Penerima</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data_asc as $dt): ?>
                                <tr>
                                    <td><?= $dt["tgl_terima"] ?></td>
                                    <td><?= $dt["nama_paket"] ?></td>
                                    <td><?= $dt["hp"] ?></td>
                                    <td><?= $dt["penerima"] ?></td>
                                    <td><?= $dt["jenis_kirim"] ?></td>
                                    <td>
                                        <?php  
                                            if($dt['status_ambil'] == ""):
                                        ?>
                                            <button class="btn btn-danger btn-sm" disabled>Belum Diambil</a>
                                        <?php else: ?>
                                            <button class="btn btn-success btn-sm" disabled>Sudah Diambil</button>
                                            <div>
                                                <span><?= $dt["tgl_ambil"] ?></span>
                                            </div>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>                                                     
                            </tbody>
                        </table> 

                    </div>
                </div>
           </div>
        </div>
    </div>

    <script src="<?= base_url('assets/datatable/datatables/jquery.dataTables.js') ?>"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#table_resi_user').DataTable(); 
        })
    </script>