<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pesanan
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $pesan['nama_team'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $pesan['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Berangkat</th>
                                <td>:</td>
                                <td><?= $pesan['tanggal_berangkat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Pulang</th>
                                <td>:</td>
                                <td><?= $pesan['tanggal_pulang'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nomor Handphone</th>
                                <td>:</td>
                                <td><?= $pesan['no_hp'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>pesanan" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>