<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data GeKomputer
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $database['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input readonly type="text" name="nama" class="form-control" id="nama" value="<?= $database['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $database['gambar']; ?>">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $database['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>