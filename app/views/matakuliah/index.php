
<!-- button modal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataMatkul" data-toggle="modal" data-target="#formModal">
                Tambah Data Matakuliah
            </button>
        </div>
    </div>
</div>
<!-- akhir button modal -->



<!-- section table content -->
<div class="container" style="margin-top: 1rem; margin-bottom: 2rem;">
    <h2><?= $data['judul']; ?></h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">SKS</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Peserta</th>                
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $data['matakuliah'] as $matkul): ?>
            <tr>
                <td><?= $matkul['id_matkul']; ?></td>
                <td><?= $matkul['kode_matkul']; ?></td>
                <td><?= $matkul['nama_matkul']; ?></td>                
                <td><?= $matkul['kelas']; ?></td>
                <td><?= $matkul['sks']; ?></td>
                <td><?= $matkul['kapasitas']; ?></td>
                <td><?= $matkul['peserta']; ?></td>
                <td><?= $matkul['waktu']; ?></td>
                <td>
                    <a href="<?= BASE_URL; ?>/matakuliah/hapus/<?= $matkul['id_matkul']; ?>" onclick="return confirm('ingin menghapus?');" class="btn btn-danger">Hapus</a>
                    <a href="<?= BASE_URL; ?>/matakuliah/edit/<?= $matkul['id_matkul']; ?>" class="btn btn-primary tampilModalUbahMatkul" data-toggle="modal" data-target="#formModal" data-id="kiyomassa">Edit</a>
                </td>                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- akhir section content table -->

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/matakuliah/tambah" method="post">
                    <input type="hidden" name="id_matkul" id="id_matkul">
                    <div class="form-group">
                        <label for="kode_matkul">Kode Matkul</label>
                        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_matkul">Nama Matkul</label>
                        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" class="form-control" id="sks" name="sks" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="peserta">Peserta</label>
                        <input type="text" class="form-control" id="peserta" name="peserta" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu">waktu</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" autocomplete="off" required>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal -->