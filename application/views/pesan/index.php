<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pesanan</h3>
            <div class="row mt-3" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>Pesanan/tambah" class="btn btn-primary">Tambah
                        Data Pesanan</a>
                </div>
            </div>
            <?php if (empty($pesan)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Pesanan Tidak Ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($pesan as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama_team']; ?>
                        <a href="<?= base_url(); ?>Pesanan/hapus/<?= $mhs['id_pesan']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>Pesanan/ubah/<?= $mhs['id_pesan']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>Pesanan/detail/<?= $mhs['id_pesan']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>