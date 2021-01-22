<link rel="stylesheet" href="<?= base_url('assets/datatable/css/dataTables.bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/datatable/css/dataTables.bootstrap4.css') ?>">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header bg-success"><strong><h1>SIMPAS LITE</strong></h1>
                  <input type="text" id="barcode" autofocus>
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
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                              
                            </tbody>
                        </table> 

                    </div>
                </div>
           </div>
        </div>
    </div>

<script src="<?= base_url('assets/datatable/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?= base_url('assets/datatable/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/jquery.js') ?>"></script>
<script >

    $(document).ready(function(){

       $('#table_resi_admin').DataTable(); 
    })
</script>
