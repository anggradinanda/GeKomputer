<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Aksesoris GeKomputer
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $database['nama']; ?></h5>
                    <p class="card-text"><?= $database['gambar']; ?></p>
                    <p class="card-text"><?= $database['harga']; ?></p>
                    <a href="<?= base_url(); ?>database" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>