<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pesanan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_team">Nama</label>
                            <input type="text" name="nama_team" class="form-control" id="nama_team"">
                            <small class=" form-text text-danger"><?= form_error('nama_team'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat"">
                            <small class=" form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_keberangkat">Tanggal Berangkat</label>
                            <input type="text" name="tanggal_berangkat" class="form-control" id="tanggal_berangkat">
                            <small class="form-text text-danger"><?= form_error('tanggal_berangkat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pulang">Tanggal Pulang</label>
                            <input type="text" name="tanggal_pulang" class="form-control" id="tanggal_pulang">
                            <small class="form-text text-danger"><?= form_error('tanggal_pulang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>