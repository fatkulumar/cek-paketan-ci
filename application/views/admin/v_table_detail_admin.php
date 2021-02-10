<!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-success">
                    <img width="300px" src="<?= base_url('assets/img/logo-sympas-lite.png') ?>" alt="simpas">
                </div>
                <!-- <h1 style="line-height: 0; padding-top: 30px;">SIMPAS LITE</h1>
                        <h5 style="padding-top: 10px; color: white;">Sistem Informasi Paketan Gasek</h5> -->
                <div class="card-body">

                    <div class="table table-responsive">   
                      <!-- /.content-header -->
                        <table id="table_resi_detail_admin" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal Terima</th>
                                    <th>Nama</th>
                                    <th>HP</th>
                                    <th>Penerima</th>
                                    <th>Jenis</th>
                                    <th>Pengambil</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tampil_data_paket_detail">
                            <?php
                                foreach($data_asc as $dt):
                            ?>
                            <tr>
                                <td><?= date("d-m-Y H:i:s", strtotime($dt["tgl_terima"])) ?></td>
                                <td><?= $dt["nama_paket"] ?></td>
                                <td><?= $dt["hp"] ?></td>
                                <td><?= $dt["penerima"] ?></td>
                                <td><?= $dt["jenis_kirim"] ?></td>
                                <td><?= $dt["pengambil"] ?></td>
                                <td style="text-align: center;">
                                    <?php  
                                        if($dt['status_ambil'] == ""):
                                    ?>
                                        <a class="btn btn-danger btn-sm" onclick="userInput(<?= $dt['id_paket'] ?>)" href="">Belum Diambil</a>
                                    <?php else: ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Diambil</button>
                                        <div>
                                            <span><?= $dt["tgl_ambil"] ?></span>
                                        </div>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus <?= $dt['nama_paket'] ?> ?')" href="<?= base_url('admin/hapus_data/'. $dt['id_paket']) ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                    <a class="btn btn-sm btn-success" href="<?= base_url('admin/edit_data/'. $dt['id_paket']) ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
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

    <input type="hidden" id="tgl_ambil" value="<?= date('d-m-Y H:i:s')?>">

    <script src="<?= base_url('assets/datatable/datatables/jquery.dataTables.js') ?>"></script>

<script >

    // $(document).ready(function(){

    //    $('#table_resi_detail_admin').DataTable(); 
    // });

    function userInput(id)
    {
        var tgl_ambil = $('#tgl_ambil').val()
        var userInput = prompt('Masukan nama pengambil paket!')
        if(userInput !== null) {
            $.ajax({
                url: '<?= base_url('admin/updateNamaPengambil/') ?>' + id,
                type: "POST",
                dataType: 'JSON',
                data: {pengambil: userInput, id_paket: id, tgl_ambil: tgl_ambil},
                success: function(res){
                    console.log(res.pengambil)
                }
            })
        }else{
            return 0;
        }
    };

    $('#table_resi_detail_admin').DataTable(
      {
      "processing": true, 
        "serverSide": true, 
        "order": [], //Initial no order.
 
        "ajax": {
            "url": site_url = "http://"+ window.location.host +"/cek-paketan-ci/Admin/ajax_list",
            "type": "POST"
        },
        //Set column
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
      }
    ); 
    
</script>
