<!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success">
                    <strong>
                        <h1>SIMPAS LITE</h1>
                    </strong>
                </div>
                <div class="card-body">

                    <div class="table table-responsive">   
                      <!-- /.content-header -->
                        <table id="table_resi_admin" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal Terima</th>
                                    <th>Nama</th>
                                    <th>Penerima</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                foreach($data_desc as $dt):
                            ?>
                            <tr>
                                    <td><?= $dt['tgl_terima']?></td>
                                    <td><?= $dt['nama_paket']?></td>
                                    <td><?= $dt['penerima']?></td>
                                    <td>1</td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table> 

                    </div>
                </div>
           </div>
        </div>
    </div>
   

<script >

    $(document).ready(function(){

       $('#table_resi_admin').DataTable(); 
    })
</script>
