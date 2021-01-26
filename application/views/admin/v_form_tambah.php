
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-success"><strong><h1>Tambah Data</strong></div>
          <div class="card-body">

            <form class="mt-3 mb-3" action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
                <input type="hidden" value="<?= date("d-m-Y h:i:s") ?>" name="tgl_terima">
                <div class="form-group">
                    <label for="no_hp">Hp</label>
                    <input class="form-control" type="number" name="no_hp" id="no_hp" required placeholder="085">
                </div>

                <div class="form-group">
                    <label for="nama_paket">Nama Paketan</label>
                    <input class="form-control" type="text" name="nama_paket"  required>
                </div>
                
                <div class="form-group">
                    <label for="penerima">Penerima</label>
                    <select class="form-control" name="penerima" required>
                      <option value="Gasmul">Gasmul</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label for="jenis_kirim">Jenis</label>
                  <p>
                    <input type="radio" name="jenis_kirim" value="Langsung" checked="checked" /> Langsung
                    <input type="radio" name="jenis_kirim" value="COD"> COD
                  </p>
                </div>

                <div>
                    <button class="btn btn-success btn-sm" type="submit" name="add">Tambah Resi</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
