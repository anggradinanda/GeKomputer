<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php $this->session->flashdata('flash') ?>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>database/tambah" class="btn btn-primary">Tambah
                Data GeKomputer</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data GeKomputer.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-10">
            <h3>Daftar GeKomputer</h3>
            <?php if (empty($database)) : ?>
                <div class="alert alert-danger" role="alert">
                    data GeKomputer tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($database as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>database/hapus/<?= $mhs['nama']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>database/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>database/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>