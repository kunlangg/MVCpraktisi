<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br>
            <br>

            <h3> Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>

                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                        class="badge text-bg-danger float-sm-end ms-2" onclick="return confirm('yakin');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                        class="badge text-bg-primary float-sm-end ms-2">detail</a>

                </li>

                <?php endforeach; ?>
            </ul>


        </div>
    </div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulmodal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama">
                    </div>

                    <div class="form-group">
                        <label for="NIM">NIM</label>
                        <input type="number" class="form-control" id="NIM" name="NIM">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Prodi</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option selected>Pilih Prodi Anda</option>
                            <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                            <option value="D3 - Sistem Informasi">D3 - Sistem Informasi</option>
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>